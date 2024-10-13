<?php

require_once 'Profile.php';

class User extends Profile{
    public function getUser()
    {
        return [
            "email" => "mmvjungco@gmail.com",
            "password" => "password",
        ];
    }
}

?>