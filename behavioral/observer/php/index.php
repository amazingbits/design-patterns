<?php

use Src\Observers\Logger;
use Src\Observers\OnBoardingNotification;
use Src\Subjects\UserSubject;

require_once "./vendor/autoload.php";

echo "<pre>";

$subject = new UserSubject();
$subject->attach(new Logger(__DIR__ . "/log.txt", "*"));
$subject->attach(new OnBoardingNotification("<EMAIL>"));

// $subject->initialize(__DIR__ . "/users.csv");

$john = $subject->createUser(["name" => "John", "email" => "<EMAIL>"]);
$mary = $subject->createUser(["name" => "Mary", "email" => "<EMAIL>"]);
$peter = $subject->createUser(["name" => "Peter", "email" => "<EMAIL>"]);

$subject->deleteUser($mary);
