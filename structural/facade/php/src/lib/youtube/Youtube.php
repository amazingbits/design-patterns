<?php

namespace Src\Lib\Youtube;

class Youtube
{
    public function fetchVideo(string $videoURL): string
    {
        return "Fetching video metadata from youtube at: {$videoURL}";
    }

    public function saveAs(string $path): void
    {
        echo "Saving video at: {$path} destination";
    }
}
