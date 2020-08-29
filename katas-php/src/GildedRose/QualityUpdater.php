<?php

namespace Katas\GildedRose;

class QualityUpdater
{
    public $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function __invoke()
    {
        $this->item->update();
    }
}
