<?php

namespace Katas\GildedRose\Item;

class Quality
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function increase()
    {
        $this->value++;
        return new Quality($this->value);
    }

    public function decrease()
    {
        $this->value--;
        return new Quality($this->value);
    }

    public function value()
    {
        return $this->value;
    }
}
