<?php

require_once "Validator.php";
require_once "FollowersTrait.php";

class SiteUsers
{
    use Validator;
    use FollowersTrait;

    protected string $username;
    protected string $email;
    protected string $password;

    public function __construct(string $username, string $email, string $password)
    {
        $this->validate($username, $email, $password);


    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    protected function validate(string $username, string $email, string $password): void
    {
        if (!$this->minLength($username) || !$this->maxLength($username)) {
            throw new Exception("Username is invalid");
        }
        if (!$this->minLength($email)) {
            throw new Exception("Email is too short");
        }
        if (!$this->minLength($password)) {
            throw new Exception("Password is too short");
        }
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }


}