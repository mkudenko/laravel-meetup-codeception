<?php namespace App\Meetup;

class Developer
{

    public $actualRate;
    public $desiredRate;

    public function __construct($actualRate, $desiredRate)
    {
        $this->actualRate = $actualRate;
        $this->desiredRate = $desiredRate;
    }

    public function isHappy()
    {

    }

}