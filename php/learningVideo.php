<?php
include ('video.php');

class learningVideo extends video
{

    private $publisher;

    public function __construct($name,$code,$publisher)
    {

    parent::__construct($name,$code);
    $this->publisher = $publisher;

    }

    public function getPublisher()
    {

return $this->publisher;

    }

    public function setPublisher()
    {

    $this->publisher = $publisher;

    }

}
