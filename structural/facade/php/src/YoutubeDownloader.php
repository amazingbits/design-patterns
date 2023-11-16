<?php

namespace Src;

use Src\Lib\FFMPEG\FFMPEG;
use Src\Lib\FFMPEG\FFMPEGVideo;
use Src\Lib\Youtube\Youtube;

class YoutubeDonwloader
{
    private Youtube $youtube;
    private FFMPEG $ffmpeg;
    private FFMPEGVideo $ffmpegVideo;

    public function __construct()
    {
        $this->youtube = new Youtube();
        $this->ffmpeg = new FFMPEG();
        $this->ffmpegVideo = new FFMPEGVideo();
    }

    public function downloadVideo(string $videoURL): void
    {
        // Fetching video metadata from youtube
        $this->youtube->fetchVideo($videoURL); // ->getTitle();
        // Saving video to a temporary file
        $this->youtube->saveAs("video.mp4");
        // Processing source video
        $this->ffmpeg->open("video.mp4");
        // Normalizing video
        $this->ffmpegVideo
            ->filters()
            ->resize()
            ->frame()
            ->save("./videos/video.mp4");
        // Done
    }
}
