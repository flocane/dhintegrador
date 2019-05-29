<?php
class Connector
{
    public static function make($host, $db_name, $db_user, $db_pass, $port = null)
    {
        if($port !== null) {
            $dsn = 'mysql:host=' . $host . ';dbname=' . $db_name . ';port=' . $port;
            try {
                $pdo = new PDO("mysql:host=$host;dbname=$db_name;port=$port", "$db_user", "$db_pass");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;
            } catch (PDOException $e) {
                die('No pude conectarme' . $e->getMessage());
            }
        }
        $dsn = 'mysql:host=' . $host . ';dbname=' . $db_name;
        try {
            $pdo = new PDO($dsn, $db_user, $db_pass);
            return $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}