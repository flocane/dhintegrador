<?php

class MYSQL extends Database
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function searchMysql($email)
    {
        $database = $this->read();

        foreach($database as $user) {
            if($user['email'] == $email) {
                return $user;
            }
        }
        return false;
    }

    public function saveMysql($userArray)
    {
        $prev = $this->read();

        $prev[] = $userArray;

        $json = json_encode($prev);

        file_put_contents($this->file, $json);
    }

    public function readMysql()
    {
        $content = file_get_contents($this->file);

        return json_decode($content, true);
    }
    
    public function updateMysql()
    {
        //...
    }

    public function deleteMysql()
    {
        //...
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