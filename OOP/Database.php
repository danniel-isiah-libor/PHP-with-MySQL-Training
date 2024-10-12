<?php

abstract class Database
{
    abstract public function connect();

    public function disconnect()
    {
        echo "Disconnected... <br>";
    }
}
