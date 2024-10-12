<?php

require_once "Profile.php";

class User extends Profile  {
    public function getUser() {
        return [
            "email" => "johndoe@mail.test",
            "password" => "123456"
        ];
    }
}