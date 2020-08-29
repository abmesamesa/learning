<?php

class BinarySearchTest extends PHPUnit_Framework_TestCase
{

    public $bs;

    public function __construct ()
    {
        $this->bs = new Katas\BinarySearch();
    }

    public function testEmptyInput ()
    {
        $this->assertEquals($this->bs->chop(3, []), -1);
    }

    public function testItemFoundOnSingleElementArray ()
    {
        $this->assertEquals($this->bs->chop(3, [3]), 0);
    }

    public function testItemNotFoundOnSingleElementArray ()
    {
        $this->assertEquals($this->bs->chop(3, [1]), -1);
    }

    public function testItemNotFound ()
    {
        $this->assertEquals($this->bs->chop(3, [1, 5, 96]), -1);
    }

    public function testItemFoundOnLastPosition ()
    {
        $this->assertEquals($this->bs->chop(12, [1, 5, 9, 12]), 3);
    }

    public function testItemFoundOnFirstPosition ()
    {
        $this->assertEquals($this->bs->chop(1, [1, 5, 9, 12]), 0);
    }

}
