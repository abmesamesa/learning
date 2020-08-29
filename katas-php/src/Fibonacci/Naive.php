<?php

namespace Katas\Fibonacci;

class Naive implements Fibonacci
{

    public function fib (int $number)
    {
        if ($number <= 2) {
            $fib = 1;
        } else {
            $fib = $this->fib($number - 1) + $this->fib($number - 2);
        }
        return $fib;
    }

}
