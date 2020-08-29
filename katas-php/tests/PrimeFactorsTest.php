<?php

class PrimeFactorsTest extends PHPUnit_Framework_TestCase
{

    public $pf;

    public function __construct ()
    {
        $this->pf = new Katas\PrimeFactors();
    }

    public function testOneHasNoPrimeFactors ()
    {
        $this->assertEquals([], $this->pf->generate(1));
    }

    public function testPrimeFactorsOfTwo ()
    {
        $this->assertEquals([2], $this->pf->generate(2));
    }

    public function testPrimeFactorsOfThree ()
    {
        $this->assertEquals([3], $this->pf->generate(3));
    }

    public function testPrimeFactorsOfFour ()
    {
        $this->assertEquals([2, 2], $this->pf->generate(4));
    }

    public function testPrimeFactorsOfSix ()
    {
        $this->assertEquals([2, 3], $this->pf->generate(6));
    }

    public function testPrimeFactorsOfEight ()
    {
        $this->assertEquals([2, 2, 2], $this->pf->generate(8));
    }

    public function testPrimeFactorsOfNine ()
    {
        $this->assertEquals([3, 3], $this->pf->generate(9));
    }

    public function testPrimeFactorsOfHundred ()
    {
        $this->assertEquals([2, 2, 5, 5], $this->pf->generate(100));
    }

}
