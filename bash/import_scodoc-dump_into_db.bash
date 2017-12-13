#Dans le serveur Zen'Etude
#!/bin/bash
clear;
echo "Exportation du dump de scodoc sur la base de donnée zenetude";
echo "Entrer le mot de passe de la base de donnée psql : ";
psql -h postgresql-zenetude.alwaysdata.net -U zenetude -d zenetude_db < scodoc.dump.txt;
