<?php
class Connector
{
    static public function conexion($host,$db_name,$db_user,$db_pass,$port,$charset)
    {
        try {
            $dsn = "mysql:host=".$host.";"."dbname=".$db_name.";"."port=".$port.";"."charset=".$charset;
            $pdo = new PDO($dsn,$db_user,$db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $errores) {
            echo "No me pude conectar a la BD ". $errores->getmessage();
            exit;
        }
    }
}