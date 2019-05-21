<?php

class UserFactory
{
    public function create(User $user ,$avatar = null)
    {
        $userArray = [
            'name' => $user->getName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => HashPassword::hash($user->getPassword()),
            'avatar' => $avatar
        ];

        return $userArray;
    }

}
