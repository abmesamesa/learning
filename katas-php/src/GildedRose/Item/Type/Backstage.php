<?php

namespace Katas\GildedRose\Item\Type;

use Katas\GildedRose\Item;

class Backstage extends Item
{
    public function update()
    {
        $this->increaseQuality();
        $this->increaseSellIn();

        $this->increaseQuality();
        $this->increaseSellIn();

        $this->increaseQuality();
        $this->increaseSellIn();
    }
}
