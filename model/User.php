<?php
class User 
{
    public string $username;

    function __construct($username)
    {
        $this->username = $username;
    }

    public function getUserName() : string
    {
        return $this->username;    
    }
}