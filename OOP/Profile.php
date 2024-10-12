<?php

require_once "Database.php";

class Profile extends Database {
    public function getProfile() {
        $this->disconnect();
        return [
            "phone" => 123456789,
            "address" => "Philippines"
        ];
    }

    public function connect() {
        echo "Connected";
    }
}