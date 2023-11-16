<?php

namespace Src\Lib\FFMPEG;

class FFMPEG
{
    public function __construct()
    {
        $this->create();
    }

    public function create(): /* FFMpeg */ void
    {
        echo "Creating a new instance of FFMPeg lib";
    }

    public function open(string $videoPath): void
    {
        // $this->ffmpeg = new \FFMpeg\FFMpeg();
        // $this->ffmpeg->open($videoPath);
        echo "Opening video at: {$videoPath}";
    }
}
