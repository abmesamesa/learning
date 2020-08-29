<?php

namespace Katas;

class StringCalculator
{

    public function add (string $string)
    {
        $delimiter = $this->extractDefaultDelimiter($string);
        $pattern = '#[(\\\\n)(.*)' . $delimiter . ']#';
        $numbers = preg_split($pattern, $string);
        return $this->processListOf($numbers);
    }

    public function extractDefaultDelimiter ($string)
    {
        $delimiter = ',';
        preg_match("#(\/\/)(.*)(\\\\n)(.*)#", $string, $matches);
        if (!empty($matches) && $matches[1] == '//') {
            $delimiter = str_replace(
                    array('[', ']'), array('(', ')'), $matches[2]
            );
        }
        return $delimiter;
    }

    public function processListOf ($numbers)
    {
        $sum = 0;
        $negatives = [];
        foreach ($numbers as $number) {
            if ($number > 1000) {
                continue;
            }
            if ($number < 0) {
                $negatives[] = $number;
            }
            $sum += is_numeric($number) ? $number : 0;
        }
        if (!empty($negatives)) {
            $message = 'Negatives not allowed: ' . implode(',', $negatives);
            throw new \InvalidArgumentException($message);
        }
        return $sum;
    }

}
