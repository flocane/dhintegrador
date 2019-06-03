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
    // public function open(){
    //     if(file_exists($this->file)){
    //         $database= file_get_contents($this->file);
    //         $database = explode(PHP_EOL,$database);
    //         array_pop($content);
    //         foreach ($content as  $user) {
    //             $userArray[]= json_decode($user,true);
    //         }
    //         return $userArray;
    //     }else{
    //         return null;
    //     }    
    // }

    public function save($userArray)
    {
        $prev = $this->read();

        $prev[] = $userArray;

        $json = json_encode($prev);

        file_put_contents($this->file, $json);
    }

    public function read()
    {
        // $results = array();
        // $explodes = explode(PHP_EOL, file_get_contents($this->file));
        // array_pop($explodes);

        $content = file_get_contents($this->file);

        return json_decode($content, true);
    }
    // public function jsonRegistroOlvide($email,$password){
    //     $user = $this->read();
    //     foreach ($users as $key=>$user) {
    //         if($email==$user["email"]){
    //             $user["password"]= Encriptar::hashPassword($password);
    //             $users[$key] = $user;    
    //         }
    //          $usuarios[$key] = $usuario;    
    //     }
    //     unlink($this->nombreArchivo);
    //     foreach ($usuarios as  $usuario) {
    //         $jsusuario = json_encode($usuario);
    //         file_put_contents($this->nombreArchivo,$jsusuario. PHP_EOL,FILE_APPEND);
    //     }
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