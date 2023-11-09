<?php

namespace Src\Core;

class Connection
{
    private static Connection $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Connection
    {
        if (!isset(self::$instance)) {
            self::$instance = new Connection();
        }
        return self::$instance;
    }
}
