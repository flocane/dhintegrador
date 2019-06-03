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

    public static function get($pdo, $tabla, $id)
    {
        $query = $pdo->prepare("SELECT * FROM $tabla WHERE id = $id");
        $query->execute();
        
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
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
    
    public function updateUser($data)
    {
        $allowed = ["name","lastname","email","password","avatar"];
        $params = [];

        $setStr = "";

        foreach ($allowed as $key) {
            if (isset($data[$key]) && $key != "id") {
                $setStr .= "`$key` = :$key,";
                $params[$key] = $data[$key];
            }
        }

        $setStr = rtrim($setStr, ",");

        $params['id'] = $data['id'];

        $this->db->prepare("UPDATE users SET $setStr WHERE id = :id")->execute($params);

    }
    static public function deleteUser($pdo,$tabla,$user){
        $stmt= $pdo->prepare("DELETE FROM $tabla WHERE users=:");
        $stmt->bindValue(':pelicula', $user);
        $stmt->execute();
    }    
}