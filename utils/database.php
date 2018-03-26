x
<?php

    class Database {

        const DB_PASSWORD = "zenetude";
        const DB_USER = "zenetude"; /* Oui, il s'agit bien de l'utilisateur ! */
        const DB_SERVER = "postgresql-zenetude.alwaysdata.net";

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

