<?php

namespace Src\Service\Notification;

interface Notification
{
    public function send(string $title, string $message);
}
