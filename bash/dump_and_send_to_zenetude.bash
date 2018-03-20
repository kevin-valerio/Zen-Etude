#!/bin/bash 

echo "Lancement de la commande";

clear; 
if [ "$(whoami)" != "postgres" ]; then
	echo "Veuillez vous connecter en tant que postgres !"
	exit;
fi

#
cd /home/ds;
command -v sshpass >/dev/null 2>&1 || { apt install sshpass; }
command -v pg_dumpall >/dev/null 2>&1 || {  echo "pg_dumpall n'est pas installé." >&2;  }

pg_dumpall > ~/scodoc.dump.txt;
#Dump des données seulement
echo "Dump de la base de donnée.";

#Premier lancement : executer cette commmande à la main !
sshpass -p 'zenetude' scp /var/lib/postgresql/scodoc.dump.txt zenetude@ssh-zenetude.alwaysdata.net:www/db/scodoc.dump.txt;
echo "Fin de l'upload";
