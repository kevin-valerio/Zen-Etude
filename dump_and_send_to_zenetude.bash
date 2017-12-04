#!/bin/bash 
#Test : Dans la machine Scodoc7Demo.ova
#Prod : Dans le serveur de l'IUT où est stocké scodoc

command -v sshpass >/dev/null 2>&1 || { apt install sshpass; }
command -v pg_dumpall >/dev/null 2>&1 || {  echo "pg_dumpall n'est pas installé." >&2;  }
command -v scp >/dev/null 2>&1 || {  echo "scp n'est pas installé." >&2;  }

pg_dumpall > scodoc.dump.txt;
sshpass -p 'zenetude' scp -p scodoc.dump.txt zenetude@ssh-zenetude.alwaysdata.net:www/db/scodoc.dump.txt
