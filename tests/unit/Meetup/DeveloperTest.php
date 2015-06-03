<?php namespace UnitTests\Meetup;

use App\Meetup\Developer;
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

    public function testFuckupsPerWeekWhenHappy()
    {
        $actualRate = 100;
        $desiredRate = 80;

        $developer = new Developer($actualRate, $desiredRate);

        $this->assertEquals(1, $developer->fuckupsPerWeek());
    }

    public function testFuckupsPerWeekWhenUnhappy()
    {
        $actualRate = 80;
        $desiredRate = 100;

        $developer = new Developer($actualRate, $desiredRate);

        $this->assertEquals(5, $developer->fuckupsPerWeek());
    }

}
