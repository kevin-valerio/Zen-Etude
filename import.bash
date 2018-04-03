
#!/bin/bash
clear;
echo "Exportation du dump de scodoc sur la base de donnée zenetude";
echo "Entrer le mot de passe de la base de donnée psql : ";
sed -i -e 's/SCOGEII/zenetude_base/g' www/db/scodoc.dump.txt;
sed -i -e 's/connect postgres/connect zenetude_base/g' www/db/scodoc.dump.txt;
echo "La bonne base a été selectionée";
psql -h postgresql-zenetude.alwaysdata.net -U zenetude -d zenetude_base < www/db/scodoc.dump.txt;
