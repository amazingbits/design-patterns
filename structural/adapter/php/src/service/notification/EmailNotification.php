<?php

namespace Src\Service\Notification;

class EmailNotification implements Notification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message): void
    {
        echo "Sent mail with title '{$title}' to '{$this->adminEmail}' that says '{$message}'";
    }
}
