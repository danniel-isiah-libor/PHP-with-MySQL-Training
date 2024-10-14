<?php

namespace api;

class ProcessGetProfile {
    public function getProfile() {
        return json_encode([
            $name = "John Doe",
            $email = "johndoe@mail.test"
        ]);
    }
}