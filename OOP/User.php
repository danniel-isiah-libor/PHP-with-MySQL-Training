<?php

require_once "Profile.php";

class User extends Profile
{
    const DATABASE_PASSWORD = "admin123";

    private function getUser()
    {
        return [
            "email" => "johndoe@mail.test",
            "password" => "123456"
        ];
    }
}
