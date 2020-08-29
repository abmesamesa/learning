<?php

namespace Katas;

class PrimeFactors
{

    /**
     * Returns prime factors in numerical sequence
     * @param int $number
     * @return array of integers
     */
    public function generate (int $number)
    {
        $numbers_list = [];
        for ($maybe_prime = 2; $number > 1; $maybe_prime++) {
            for (; $number % $maybe_prime === 0; $number /= $maybe_prime) {
                $numbers_list[] = $maybe_prime;
            }
        }
        return $numbers_list;
    }

}
