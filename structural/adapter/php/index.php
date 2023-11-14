<?php

use Src\Service\Notification\EmailNotification;
use Src\Service\Notification\Notification;
use Src\Service\Notification\SlackAPI;
use Src\Service\Notification\SlackNotification;

require_once "./vendor/autoload.php";

function clientCode(Notification $notification)
{
    echo $notification->send(
        "Website is down!",
        "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
        "Our website is not responding. Call admins and bring it up!"
    );
}

echo "Client code is designed correctly and works with email notifications:\n";
$notification = new EmailNotification("developers@example.com");
clientCode($notification);
echo "\n\n";


echo "The same client code can work with other classes via adapter:\n";
$slackApi = new SlackAPI("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Example.com Developers");
clientCode($notification);
