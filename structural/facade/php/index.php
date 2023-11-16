<?php

require_once "./vendor/autoload.php";

use Src\YoutubeDonwloader;

function clientCode(YoutubeDonwloader $facade)
{
    $facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");
}

$facade = new YoutubeDonwloader();
clientCode($facade);
