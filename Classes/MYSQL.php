<?php

class MYSQL extends Database
{
    static public function searchEmail($email,$pdo,$tabla)
    {
        $query = $pdo->prepare("SELECT * FROM $tabla WHERE email = :email");
        $query->bindValue(':email',$email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    static public function saveUser($pdo,$user,$tabla,$avatar)
    {
        $query = $pdo->prepare("INSERT INTO $tabla (name,lastname,email,password,avatar,rol) VALUES (:name,:lastname,:email,:password,:avatar,:rol )");
        $query->bindValue(':name',$user->getname());
        $query->bindValue(':lastname',$user->getlastname());
        $query->bindValue(':email',$user->getEmail());
        $query->bindValue(':password',HashPassword::hash($user->getPassword()));
        $query->bindValue(':avatar',$avatar);
        $query->bindValue('rol',1);
        $query->execute();
    }
    public function read(){

    }
    
    public function update(){

    }

    public function delete(){

    }

    public function save($user)
    {
    
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
