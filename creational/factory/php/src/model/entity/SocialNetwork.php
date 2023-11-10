<?php


namespace Src\Model\Entity;

abstract class SocialNetwork implements ISocialNetwork
{
    protected string $login;
    protected string $password;
    function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
}