#Dans le serveur Zen'Etude
#"D:\Program Files\PostgreSQL\10\bin\pg_ctl.exe" -D "D:\Program Files\PostgreSQL\10\data" start
#!/bin/bash
 
clear;
echo "Exportation du dump de scodoc sur la base de donnée zenetude";
sed -i -e 's/SCOGEII/zenetude_base/g' scodoc.dump.txt;
sed -i -e 's/connect postgres/connect zenetude_base/g' scodoc.dump.txt;
echo "La bonne base a été selectionée";
PGPASSWORD=root psql -h 127.0.0.1 -U postgres -c "ALTER DATABASE zenetude_base CONNECTION LIMIT 1;  SELECT pg_terminate_backend(pid) FROM pg_stat_activity WHERE datname = 'zenetude_base';";
PGPASSWORD=root psql -h 127.0.0.1 -U postgres -c "DROP DATABASE zenetude_base;";
PGPASSWORD=root psql -h 127.0.0.1 -U postgres -c "CREATE DATABASE zenetude_base;";
PGPASSWORD=root psql -h 127.0.0.1 -U postgres -d zenetude_base < scodoc.dump.txt;