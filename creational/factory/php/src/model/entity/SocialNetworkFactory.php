<?php

namespace Src\Model\Entity;

use Error;
use Src\Model\Entity\Implementations\Facebook;
use Src\Model\Entity\Implementations\Instagram;
use Src\Model\Entity\Implementations\LinkedIn;

class SocialNetworkFactory
{
    public static function makeSocialNetwork(string $type, string $login, string $password): ISocialNetwork
    {
        switch ($type) {
            case "facebook":
                return new Facebook($login, $password);
                break;
            case "instagram":
                return new Instagram($login, $password);
                break;
            case "linkedin":
                return new LinkedIn($login, $password);
                break;
            default:
                throw new Error("Social network type does not exists");
                break;
        }
    }
}
