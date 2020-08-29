<?php

use Katas\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    private $fizzBuzz;

    public function __construct ()
    {
        $this->fizzBuzz = new Katas\FizzBuzz();
    }

    public function testNormalNumbersReturnSameNumber ()
    {
        $this->assertEquals($this->fizzBuzz->run(1), 1);
        $this->assertEquals($this->fizzBuzz->run(2), 2);
        $this->assertEquals($this->fizzBuzz->run(4), 4);
    }

    public function testMultiplesOfThreeReturnFizz ()
    {
        $this->assertEquals($this->fizzBuzz->run(3), FizzBuzz::FIZZ);
        $this->assertEquals($this->fizzBuzz->run(9), FizzBuzz::FIZZ);
        $this->assertEquals($this->fizzBuzz->run(123), FizzBuzz::FIZZ);
    }

    public function testMultiplesOfFiveReturnBuzz ()
    {
        $this->assertEquals($this->fizzBuzz->run(5), FizzBuzz::BUZZ);
        $this->assertEquals($this->fizzBuzz->run(20), FizzBuzz::BUZZ);
        $this->assertEquals($this->fizzBuzz->run(200), FizzBuzz::BUZZ);
    }

    public function testMultiplesOfThreeAndFiveReturnFizzBuzz ()
    {
        $message = FizzBuzz::FIZZ . FizzBuzz::BUZZ;
        $this->assertEquals($this->fizzBuzz->run(15), $message);
        $this->assertEquals($this->fizzBuzz->run(45), $message);
    }

    public function testMultiplesOfSevenReturnPop ()
    {
        $this->assertEquals($this->fizzBuzz->run(7), FizzBuzz::POP);
        $this->assertEquals($this->fizzBuzz->run(28), FizzBuzz::POP);
        $this->assertEquals($this->fizzBuzz->run(77), FizzBuzz::POP);
    }

    public function testMultiplesOfThreeAndSevenReturnFizzPop ()
    {
        $message = FizzBuzz::FIZZ . FizzBuzz::POP;
        $this->assertEquals($this->fizzBuzz->run(21), $message);
        $this->assertEquals($this->fizzBuzz->run(63), $message);
        $this->assertEquals($this->fizzBuzz->run(126), $message);
    }

    public function testMultiplesOfFiveAndSevenReturnBuzzPop ()
    {
        $message = FizzBuzz::BUZZ . FizzBuzz::POP;
        $this->assertEquals($this->fizzBuzz->run(35), $message);
        $this->assertEquals($this->fizzBuzz->run(70), $message);
        $this->assertEquals($this->fizzBuzz->run(140), $message);
    }

    public function testMultiplesOfThreeFiveAndSevenReturnFizzBuzzPop ()
    {
        $message = FizzBuzz::FIZZ . FizzBuzz::BUZZ . FizzBuzz::POP;
        $this->assertEquals($this->fizzBuzz->run(105), $message);
        $this->assertEquals($this->fizzBuzz->run(210), $message);
        $this->assertEquals($this->fizzBuzz->run(315), $message);
    }

    public function testUsingACustomSubstitution ()
    {
        $message = 'fuzz';
        $this->fizzBuzz->setVariation(array(2 => $message));

        $this->assertEquals($this->fizzBuzz->run(1), 1);
        $this->assertEquals($this->fizzBuzz->run(2), $message);
        $this->assertEquals($this->fizzBuzz->run(8), $message);
    }

    public function testLinkingCustomSubstitutionsTogether ()
    {
        $messageFuzz = 'fuzz';
        $messageBizz = 'bizz';

        $this->fizzBuzz->setVariation(array(2 => $messageFuzz));
        $this->fizzBuzz->setVariation(array(3 => $messageBizz));

        $this->assertEquals($this->fizzBuzz->run(4), $messageFuzz);
        $this->assertEquals($this->fizzBuzz->run(9), $messageBizz);
        $this->assertEquals($this->fizzBuzz->run(12), $messageFuzz . $messageBizz);
    }

}
