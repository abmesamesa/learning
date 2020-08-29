<?php

namespace Katas\Fibonacci;

class BottomUp implements Fibonacci
{

    private $sequence = array();

    public function fib (int $number)
    {
        for ($k = 1; $k <= $number; $k++) {
            if ($k <= 2) {
                $f = 1;
            } else {
                $f = $this->sequence[$k - 1] + $this->sequence[$k - 2];
            }
            $this->sequence[$k] = $f;
        }
        return $this->sequence[$number];
    }

}
