<?php

namespace Src\Util;

class Latency
{
    public static function sleep(int $time): void
    {
        $i = 0;
        while($i < $time) {
            echo ".";
            sleep(1);
            $i++;
        }
    }
}
