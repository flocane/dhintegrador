<?php

class MYSQL extends Database
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    static public function searchEmail($pdo,$tabla,$email)
    {
        Querys::getEmail($pdo,$tabla,$email);
    }

    public function saveMysql($user)
    {
        Querys::inserUser($user);
    }

    public function readMysql($tabla, $pdo)
    {
        Querys::index($tabla, $pdo);
    }
    
    public function updateMysql($data)
    {
        Querys::updateUser($data);
    }

    public function deleteMysql($pdo,$tabla,$user)
    {
        Querys::deleteUser($pdo,$tabla,$user);
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
}