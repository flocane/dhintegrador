<?php

class QueryUsers
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function indexUser($table)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$table}");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getUser($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = {$id}");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertUser(User $users)
    {
        $name = $users->getName();
        $lastname = $users->getLastname();
        $email = $users->getEmail();
        $password= $users->getPassword();
        $avatar = $users->getAvatar();

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
}