<?php

namespace Src\Service\Notification;

class SlackAPI
{
    private $login;
    private $token;

    public function __construct(string $login, string $token)
    {
        $this->login = $login;
        $this->token = $token;
    }

    public function login(): void
    {
        echo "Logged in to a slack account '{$this->login}'";
    }

    public function sendMessage(string $chatID, string $message): void
    {
        echo "Posted following message into the '{$chatID}' chat: '{$message}'";
    }
}
