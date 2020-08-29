<?php

namespace Katas\GildedRose\Item\Type;

use Katas\GildedRose\Item;

class Sulfura extends Item
{
    public function update()
    {
        $this->increaseQuality();
        $this->increaseSellIn();
    }
}
