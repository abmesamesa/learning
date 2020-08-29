<?php

class StringCalculatorTest extends PHPUnit_Framework_TestCase
{

    private $scalc;

    public function __construct ()
    {
        $this->scalc = new \Katas\StringCalculator();
    }

    public function testEmptyStringReturnsZero ()
    {
        $this->assertSame($this->scalc->add(''), 0);
    }

    public function testSumOfOneNumber ()
    {
        $this->assertEquals($this->scalc->add('2'), 2);
    }

    public function testSumOfTwoNumbers ()
    {
        $this->assertEquals($this->scalc->add('1,2'), 3);
    }

    public function testSumOfAnyAmountOfNumbers ()
    {
        $this->assertEquals($this->scalc->add('1,2,2,2,2'), 9);
    }

    public function testHandleNewLinesBetweenNumbers ()
    {
        $this->assertEquals($this->scalc->add('1\n2,3'), 6);
    }

    public function testDefaultDelimiter ()
    {
        $this->assertEquals($this->scalc->add('//*\n1*2'), 3);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testNegativeNumbersAreNotAllowedException ()
    {
        $this->scalc->add('//;\n1;-12;-9;5');
    }

    public function testNumbersBiggerThanThousandAreIgnored ()
    {
        $this->assertEquals($this->scalc->add('//*\n1*2000'), 1);
    }

    public function testsDelimitersHaveAnyLength ()
    {
        $this->assertEquals($this->scalc->add('//[***]\n1***2***3'), 6);
    }

    public function testsAllowMultipleDelimiters ()
    {
        $this->assertEquals($this->scalc->add('//[*][%]\n1*2%3'), 6);
    }

    public function testsAllowMultipleDelimitersOfAnyLength ()
    {
        $this->assertEquals($this->scalc->add('//[*+][%LO<]\n1*+2%LO<3'), 6);
    }

}
