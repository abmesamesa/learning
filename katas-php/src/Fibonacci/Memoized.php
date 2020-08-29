<?php

namespace Katas\Fibonacci;

class Memoized implements Fibonacci
{

    private $memo;

    public function fib (int $number)
    {
        if (isset($this->memo[$number])) {
            $fib = $this->memo[$number];
        } else if ($number <= 2) {
            $fib = 1;
        } else {
            $fib = $this->fib($number - 1) + $this->fib($number - 2);
            $this->memo[$number] = $fib;
        }
        return $fib;
    }

}
