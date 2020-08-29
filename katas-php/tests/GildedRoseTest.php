<?php

use Katas\GildedRose\Item\Name;
use Katas\GildedRose\Item\Quality;
use Katas\GildedRose\Item\SellIn;
use Katas\GildedRose\Item\Type\General;
use Katas\GildedRose\QualityUpdater;

class GildedRoseTest extends PHPUnit_Framework_TestCase
{
    public function testQualityDecreasesForGeneralItems()
    {
        $name = new Name('Gilded General');
        $quality = new Quality(2);
        $sellIn = new SellIn(5);

        $generalItem = new General(
            $name,
            $quality,
            $sellIn
        );

        $qualityUpdater = new QualityUpdater($generalItem);
        $qualityUpdater();
        $qualityUpdated = $qualityUpdater->item->quality();

        $this->assertEquals(1, $qualityUpdated->value());
    }
}
