<?php
namespace App\Services;


class UserService {
   
    public function createUser( array $data):User {
         return User::create($data);
    }

}