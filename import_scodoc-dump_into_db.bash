#Dans la machine Scodoc7Demo.ova

#Si sshpass est absent : apt install sshpass

pg_dumpall > scodoc.dump.txt;
sshpass -p 'zenetude' scp -p scodoc.dump.txt zenetude@ssh-zenetude.alwaysdata.net:www/db/scodoc.dump.txt