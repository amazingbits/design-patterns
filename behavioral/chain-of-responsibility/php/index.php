<?php

require_once "./vendor/autoload.php";

$requestWithInvalidStructure = [
    "username" => "myuser@email",
    "password" => "123456"
];

$requestWithInvalidEmail = [
    "email" => "myuser@email",
    "password" => "123456"
];

$requestWithInvalidPassword = [
    "email" => "myuser@email.com",
    "password" => "12"
];

$requestOk = [
    "email" => "myuser@email.com",
    "password" => "123456"
];

// Invalid structure
$login = new Src\Login\Login($requestWithInvalidStructure);
$login->doLogin($requestWithInvalidStructure);

// Invalid email
$login = new Src\Login\Login($requestWithInvalidEmail);
$login->doLogin($requestWithInvalidEmail);

// Invalid password
$login = new Src\Login\Login($requestWithInvalidPassword);
$login->doLogin($requestWithInvalidPassword);

// Login ok
$login = new Src\Login\Login($requestOk);
$login->doLogin($requestOk);
