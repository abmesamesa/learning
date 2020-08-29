<?php

namespace Katas\GildedRose;

use Katas\GildedRose\Item\Name;
use Katas\GildedRose\Item\Quality;
use Katas\GildedRose\Item\SellIn;

abstract class Item
{
    private $name;
    private $quality;
    private $sellIn;

    public function __construct(Name $name, Quality $quality, SellIn $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function update()
    {

    }

    public function name()
    {
        return $this->name;
    }

    public function quality()
    {
        return $this->quality;
    }

    public function sellIn()
    {
        return $this->sellIn;
    }

    public function increaseSellIn()
    {
        $this->sellIn = $this->sellIn->increase();
    }

    public function increaseQuality()
    {
        $this->quality = $this->quality->increase();
    }

    public function decreaseSellIn()
    {
        $this->sellIn = $this->sellIn->decrease();
    }

    public function decreaseQuality()
    {
        $this->quality = $this->quality->decrease();
    }
}
