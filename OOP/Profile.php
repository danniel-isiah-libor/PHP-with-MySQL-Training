<?php

require_once "Database.php";

class Profile extends Database
{
    private function getProfile()
    {
        $this->disconnect();

        return [
            "phone" => 12387589,
            "address" => "Philippines"
        ];
    }

    public function connect()
    {
        echo "Connected to database... <br>";
    }
}
