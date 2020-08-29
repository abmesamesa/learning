<?php

use Katas\BerlinClock as Clock;

class BerlinClockTest extends PHPUnit_Framework_TestCase
{

    private $berlinClock;

    public function __construct ()
    {
        $this->berlinClock = new Clock();
    }

    public function testSingleMinutes ()
    {
        $this->assertEquals(
            $this->berlinClock->getTime('00:00:00', Clock::SINGLE_MINUTES),
            'OOOO'
        );
        $this->assertEquals(
            $this->berlinClock->getTime('23:59:59', Clock::SINGLE_MINUTES),
            'YYYY'
        );
        $this->assertEquals(
            $this->berlinClock->getTime('12:32:00', Clock::SINGLE_MINUTES),
            'YYOO'
        );
        $this->assertEquals(
            $this->berlinClock->getTime('12:34:00', Clock::SINGLE_MINUTES),
            'YYYY'
        );
        $this->assertEquals(
            $this->berlinClock->getTime('12:35:00', Clock::SINGLE_MINUTES),
            'OOOO'
        );
    }

}
