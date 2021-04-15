<?php 
class Database {
    private static $dsn = 'mysql:host=pxukqohrckdfo4ty.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=gvdsr24jhvu8j757';
    private static $username = 'dzq33wn2lmpzso31';
    private static $password = 'l3pzfll323cekhd8';
    private static $db;

    private function __construct() {}

    public static function getDB() {
        if(!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$db;
    }
}



