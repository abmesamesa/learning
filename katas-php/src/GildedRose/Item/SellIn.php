<?php

namespace Katas\GildedRose\Item;

class SellIn
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function increase()
    {
        $this->value++;
        return new SellIn($this->value);
    }

    public function decrease()
    {
        $this->value--;
        return new SellIn($this->value);
    }

    public function value()
    {
        return $this->value;
    }
}
