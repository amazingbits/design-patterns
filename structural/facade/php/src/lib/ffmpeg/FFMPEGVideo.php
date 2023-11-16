<?php

namespace Src\Lib\FFMPEG;

class FFMPEGVideo
{
    private FFMPEG $ffmpeg;

    public function __construct()
    {
        $this->ffmpeg = new FFMPEG();
    }

    public function filters(): FFMPEGVideo
    {
        echo "applying filters to FFMPEG video...";
        return $this;
    }

    public function resize(): FFMPEGVideo
    {
        // // $this->ffmpeg->resize(new FFMpeg\Coordinate\Dimension(320, 240));
        echo "resizing FFMPEG video...";
        return $this;
    }

    public function frame(): FFMPEGVideo
    {
        // $this->ffmpeg->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10));
        echo "frameing FFMPEG video...";
        return $this;
    }

    public function save(string $path): void
    {
        // $this->ffmpeg->save(new FFMpeg\Format\Video\X264(), $path . "export-x264.mp4")
        // $this->ffmpeg->save(new FFMpeg\Format\Video\WMV(), $path . "export-wmv.wmv")
        // $this->ffmpeg->save(new FFMpeg\Format\Video\WebM(), $path . "export-webm.webm");
        echo "Saving video with FFMPEG Lib at {$path}...";
    }
}
