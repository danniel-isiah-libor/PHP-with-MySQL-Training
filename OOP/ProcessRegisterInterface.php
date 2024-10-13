<?php

namespace OOP;

interface ProcessRegisterInterface
{
    public function validate();
    public function authorization();
    public function save();
    public function authentication();

    /**
     * redirect to the specified page
     * 
     * @return void
     */
    public function redirection();
}
