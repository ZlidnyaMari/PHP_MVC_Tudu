<?php
class User 
{
    public string $username;
    public string $email;
    public string $sex;
    public int $age;
    public $isActive = true;
    public DateTime $dateCreate;

    function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->dateCreate = new DateTime();
    }
}