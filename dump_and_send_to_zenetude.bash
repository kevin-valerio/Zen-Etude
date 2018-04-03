#!/bin/bash 

clear; 
if [ "$(whoami)" != "postgres" ]; then
	echo "Veuillez vous connecter en tant que postgres !"
	exit;
fi

cd /home/ds;
command -v sshpass >/dev/null 2>&1 || { apt install sshpass; }
command -v pg_dumpall >/dev/null 2>&1 || {  echo "pg_dumpall n'est pas installé." >&2;  }

pg_dumpall >  scodoc.dump.txt;
#Dump des données seulement : pg_dump --column-inserts --data-only > ~/scodoc.dump.txt;
echo "Dump de la base de donnée.";

sshpass -p 'password' scp scodoc.dump.txt user@169.254.189.59:scodoc.dump.txt;
#ALTERNATIVES : {
#	sshpass -p 'kevin' scp /a.txt kevin@169.254.189.59 '/';
#	sshpass -p 'kevin' scp ~/scodoc.dump.txt kevin@169.254.189.59:/d/wamp64/www/zenetude/www/db/;
#	ftp-upload -h "169.254.189.59" -u root --password root '/cygdrive/d/wamp64/www/zenetude/www/db/' ~/scodoc.dump.txt;
#	ftp "ftp://root:root@169.254.189.59/D:/wamp64/www/zenetude/www/db/" ~/scodoc.dump.txt;
# }
 
echo "Fin de l'upload";