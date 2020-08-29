<?php

namespace Katas\GildedRose\Item;

class Name
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function value()
    {
        return $this->value;
    }
}
