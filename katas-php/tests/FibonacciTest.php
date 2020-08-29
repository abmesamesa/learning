<?php

class FibonacciTest extends PHPUnit_Framework_TestCase
{

    public $fnaive;
    public $fmemoized;
    public $fbottomUp;

    public function __construct ()
    {
        $this->fbottomUp = new Katas\Fibonacci\BottomUp();
        $this->fnaive = new Katas\Fibonacci\Naive();
        $this->fmemoized = new Katas\Fibonacci\Memoized();
    }

    public function testNaiveImplementationEqualsTwo ()
    {
        $this->assertEquals($this->fnaive->fib(2), 1);
        $this->assertEquals($this->fmemoized->fib(2), 1);
        $this->assertEquals($this->fbottomUp->fib(2), 1);
    }

    public function testNaiveImplementationGreaterThanTwo ()
    {
        $this->assertEquals($this->fnaive->fib(10), 55);
        $this->assertEquals($this->fmemoized->fib(10), 55);
        $this->assertEquals($this->fbottomUp->fib(10), 55);
    }

}
