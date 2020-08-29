<?php

namespace Katas\GildedRose\Item\Type;

use Katas\GildedRose\Item;

class General extends Item
{
    public function update()
    {
        $this->decreaseQuality();
        $this->decreaseSellIn();
    }
}
