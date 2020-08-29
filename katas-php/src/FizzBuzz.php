<?php

namespace Katas;

class FizzBuzz
{

    const FIZZ = 'fizz';
    const BUZZ = 'buzz';
    const POP = 'pop';

    private $cases = array(
        3 => self::FIZZ,
        5 => self::BUZZ,
        7 => self::POP,
    );

    public function run ($number)
    {
        $response = '';
        foreach ($this->cases as $case => $message) {
            if ($number % $case === 0) {
                $response .= $message;
            }
        }
        return $response ? : $number;
    }

    public function setVariation (array $variation)
    {
        foreach ($variation as $key => $value) {
            $this->cases[$key] = $value;
        }
        ksort($this->cases);
    }

}
