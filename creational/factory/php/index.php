<?php

use Src\Model\Entity\SocialNetworkFactory;

require_once "./vendor/autoload.php";

$facebook = SocialNetworkFactory::makeSocialNetwork("facebook", "admin", "123");
$instagram = SocialNetworkFactory::makeSocialNetwork("instagram", "admin", "123");
$linkedin = SocialNetworkFactory::makeSocialNetwork("linkedin", "admin", "123");

// make post in facebook
echo $facebook->makePost("facebook new post");

// get liknedin post list
echo "<pre>";
print_r($linkedin->getPosts());
echo "</pre>";

// deleting linkedin post
echo $linkedin->deletePost(1);
