<?php

use Katas\Tamagotchi as Tamagotchi;

class TamagotchiTest extends PHPUnit_Framework_TestCase
{
    private $tamagotchi;

    public function __construct ()
    {
        $this->tamagotchi = new Tamagotchi();
    }

    public function testHungrinessIsZero ()
    {
        $this->assertEquals(
                $this->tamagotchi->getHungriness(), 0
        );
    }

    public function testFullnessIsZero ()
    {
        $this->assertEquals(
                $this->tamagotchi->getFullness(), 0
        );
    }

    public function testHungrinessIsDecreasedWhenFeeded ()
    {
        $hungrinessBefore = $this->tamagotchi->getHungriness();
        $this->tamagotchi->feed(50);
        $this->assertLessThan(
                $hungrinessBefore, $this->tamagotchi->getHungriness()
        );
    }

    public function testFullnessIsIncreasedWhenFeeded ()
    {
        $fullnessBefore = $this->tamagotchi->getFullness();
        $this->tamagotchi->feed(50);
        $this->assertGreaterThan(
                $fullnessBefore, $this->tamagotchi->getFullness()
        );
    }

}
