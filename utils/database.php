x
<?php

    class Database {

//
//        const DB_PASSWORD = "zenetude";
//        const DB_USER = "zenetude";
//        const DB_SERVER = "postgresql-zenetude.alwaysdata.net";


//"D:\Program Files\PostgreSQL\10\bin\pg_ctl.exe" -D "D:\Program Files\PostgreSQL\10\data" start
        const DB_PASSWORD = "root";
        const DB_USER = "postgres";
        const DB_SERVER = "127.0.0.1";


        public static function getConnection($dbName = "zenetude_perso") {
            try {

                $connection = 'pgsql:host=' . self::DB_SERVER . ';dbname=' . $dbName;
                $pdo = new PDO($connection, self::DB_USER, self::DB_PASSWORD);
                $pdo->exec('SET CHARACTER SET utf8');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
                
            } catch(PDOException $e) {
                die('Erreur lors de la connection au serveur : ' . $e->getMessage());
            }
        }
    }

