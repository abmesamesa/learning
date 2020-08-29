<?php

namespace Katas;

class BerlinClock
{
    const TIME_FORMAT = 'H:i:s';
    const SINGLE_MINUTES = 0;

    public function getTime($time = null, $row = null)
    {
        $timeString = $time ? : date(self::TIME_FORMAT);
        list($hours, $minutes, $seconds) = explode(':', $timeString);

        $berlinTime[self::SINGLE_MINUTES] = $this->singleMinutes((int) $minutes);

        return $row ? $berlinTime[$row] : implode('', $berlinTime);
    }

    protected function singleMinutes($minutes)
    {
        $bulbsOn = $minutes % 5;
        $totalBulbs = 4;

        $stringOn = str_pad('', $bulbsOn, 'Y');
        $singleMinutesRow = str_pad($stringOn, $totalBulbs, 'O');

        return $singleMinutesRow;
    }
}
