<?php

class UserFactory
{
    public function createAvatar($imagen)
    {
        $name = $imagen["avatar"]["name"];
        $ext = pathinfo($name,PATHINFO_EXTENSION);
        $archivoOrigen = $imagen["avatar"]["tmp_name"];
        $archivoDestino = dirname(__DIR__);
        $archivoDestino = $archivoDestino."/imagenes/";
        $avatar = uniqid();
        $archivoDestino = $archivoDestino.$avatar;
        $archivoDestino = $archivoDestino.".".$ext;
        move_uploaded_file($archivoOrigen,$archivoDestino);
        $avatar = $avatar.".".$ext;
        return $avatar;
    }
    public function create($user ,$avatar)
    {
        $userArray = [
            'name' => $user->getName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => HashPassword::hash($user->getPassword()),
            'avatar' => $avatar,
            'perfil'=>1
        ];

        return $userArray;
    }

}
