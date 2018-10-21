<?php

namespace Gametrade;
use PDO;
/**
 * Singleton class for database connection
 */
class Database
{
    protected static $db;
    private function __construct()
    {

        $dbname = 'gametrades';
        $username = 'root';
        $password = '';

        try {
            // assign PDO object to db variable
            self::$db = new PDO('mysql:host=localhost;dbname='.$dbname, $username, $password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "PDO Error: ".$e->getMessage();
        }

    }

    public static function getInstance()
    {
        if (!self::$db) {
            new Database();
        }
        return self::$db;
    }

}

?>