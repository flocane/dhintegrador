<?php

class DBJSON extends Database
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function search($email)
    {
        $database = $this->read();

        foreach($database as $user) {
            if($user['email'] == $email) {
                return $user;
            }
        }

        return false;

    }

    public function save($userArray)
    {
        $prev = $this->read();

        $prev[] = $userArray;

        $json = json_encode($prev);

        file_put_contents($this->file, $json);
        $user = json_encode($userArray);
        file_put_contents($this->file, $user . PHP_EOL, FILE_APPEND);
    }

    public function read()
    {
        // $results = array();
        // $explodes = explode(PHP_EOL, file_get_contents($this->file));
        // array_pop($explodes);

        $content = file_get_contents($this->file);

        return json_decode($content, true);
        $results = array();
        $explodes = explode(PHP_EOL, file_get_contents($this->file));
        array_pop($explodes);

        foreach($explodes as $explode) {
            $results[] = json_decode($explode, true);
        }

        return $results;
    }

    public function update()
    {
        //...
    }

    public function delete()
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