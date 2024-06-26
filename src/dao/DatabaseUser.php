<?php
declare(strict_types=1);
namespace fav4\dao;

use fav4\dao\DaoException;

class DatabaseUser{

    private static \PDO $db;

    public static function getConnection() : \PDO {
        if (!isset(self::$db)) { // s'il y a erreur, cela sera catch par DAOResto.php
            if (file_exists("./param.ini")) {
                $param = parse_ini_file("./param.ini", true);
                extract($param['BDD']);     // extract du tag [BDD] et génère les variables $host, $port ... du nom donne dans param.ini          
            } 
            else throw new DaoException("Parametre BDD indisponibles",8001);
            // On cree le data source name 'mysql:host=127.0.0.1:3306;dbname=testdomi;charset=utf8'
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
            self::$db = new \PDO($dsn, $user, $password);
            self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return self::$db;
    }
}
