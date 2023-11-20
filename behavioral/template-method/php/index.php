<?php

use Src\SocialNetwork\Implementations\Facebook;
use Src\SocialNetwork\Implementations\Twitter;

require_once "./vendor/autoload.php";

$username = "foo";
$password = "123";
$message = "Hi, I'm posting a new message";

$facebook = new Facebook($username, $password);
$twitter = new Twitter($username, $password);

echo "<pre>";

// Post message in Facebook
$facebook->post($message . " on Facebook");

// Post message in Twitter
$twitter->post($message . " on Twitter");
