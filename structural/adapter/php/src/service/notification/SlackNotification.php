<?php

namespace Src\Service\Notification;

class SlackNotification implements Notification
{
    private $slackAPI;
    private $chatID;

    public function __construct(SlackAPI $slackAPI, string $chatID)
    {
        $this->slackAPI = $slackAPI;
        $this->chatID = $chatID;
    }

    public function send(string $title, string $message): void
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slackAPI->logIn();
        $this->slackAPI->sendMessage($this->chatID, $slackMessage);
    }
}
