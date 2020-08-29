<?php

namespace Katas;

class Tamagotchi
{
    private $hungriness;
    private $fullness;

    public function __construct ()
    {
        $this->hungriness = 0;
        $this->fullness = 0;
    }

    public function getHungriness ()
    {
        return $this->hungriness;
    }

    public function getFullness ()
    {
        return $this->fullness;
    }

    public function feed($quantity) {
        $this->hungriness -= $quantity;
        $this->fullness += $quantity;
    }
}
