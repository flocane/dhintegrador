<?php

class User
{
    private $email;
    private $password;
    private $avatar = null;
    private $name;
    private $lastName;

    public function __construct($name, $lastName, string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;

    }

    public function getAvatar()
    {
        return $this->avatar;
    }


    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getName()
    {
      return $this->name;
    }

    public function setName($name)
    {
      $this->name = $name;
    }

    public function getLastName()
    {
      return $this->lastName;
    }

    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
    }
}
