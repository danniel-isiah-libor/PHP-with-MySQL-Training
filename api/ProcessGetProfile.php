<?php

namespace api;

class ProcessGetProfile
{
    public function getProfile()
    {
        return [
            'name' => 'John Doe',
            'email' => 'johndoe@mail.test'
        ];
    }
}
