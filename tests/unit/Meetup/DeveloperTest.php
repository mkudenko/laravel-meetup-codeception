<?php namespace UnitTests\Meetup;

use UnitTests\TestCase;

class DeveloperTest extends TestCase
{

    public function testIsHappy()
    {
        $actualRate = 100;
        $desiredRate = 80;

        $developer = new Developer($actualRate, $desiredRate);

        $this->assertTrue($developer->isHappy());
    }

    public function testIsNotHappy()
    {
        $actualRate = 80;
        $desiredRate = 100;

        $developer = new Developer($actualRate, $desiredRate);

        $this->assertFalse($developer->isHappy());
    }

}
