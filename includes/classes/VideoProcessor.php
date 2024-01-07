<?php
class VideoProcessor {

    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function upload($videoUploadData) {

        $targetDir = "uploads/videos/";
        $videoData = $videoUploadData->getVideoDataArray();

        $tempFilePath = $targetDir . uniqid() . basename($videoData["name"]);
        //uploads/video/5aa3e9343c9ffdogs_playing.flv

        $tempFilePath = str_replace(" ", "_", $tempFilePath);

        echo $tempFilePath;
    }
}
?>