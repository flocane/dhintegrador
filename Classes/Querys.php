<?php

class Querys
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public static function index($tabla, $pdo)
    {
        $query = $pdo->prepare("SELECT * FROM $tabla");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function getUser($pdo, $tabla, $idUser)
    {
        $query = $pdo->prepare("SELECT $tabla.id, $tabla.name, $tabla.email, $tabla.avatar,$tabla.role from $tabla where $tabla.id = '$idUser'");
        $query->execute();
        $userfind=$query->fetchAll(PDO::FETCH_ASSOC);
        return $userfind;
    }

    static public function deleteUser($pdo,$tabla,$idUser)
    {
        $query=$pdo->prepare("DELETE from $tabla where $tabla.id=:id");
        $query->bindValue(':id',$idUser);
        $query->execute();
    }

    static public function updateUser($pdo,$tabla,$idUser)
    {
        $query = $pdo->prepare("SELECT $tabla.id, $tabla.name, $tabla.email, $tabla.role from $tabla where $tabla.id = '$id_User'");
        $query->execute();
        $usermodify=$query->fetch(PDO::FETCH_ASSOC);
        return $usermodify;
    }

    public static function getEmail($pdo, $tabla, $email)
    {
        $query = $pdo->prepare("SELECT * FROM $tabla WHERE id = $email");
        $query->bindValue(':email',$email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function insertUser(User $user)
    {
        $name = $user->getName();
        $lastname = $user->getLastname();
        $email = $user->getEmail();
        $password= $user->getPassword();
        $avatar = $user->getAvatar();

        $stmt = $this->pdo->prepare("INSERT INTO users (name, lastname, email, password, avatar) VALUES (:name, :lastname, :email, :password, :avatar)");

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':avatar', $avatar, PDO::PARAM_INT);

        $stmt->execute();
    }
}