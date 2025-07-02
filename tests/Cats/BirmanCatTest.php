<?php

use MyProject\Cats\BirmanCat;

class BirmanCatTest extends \PHPUnit\Framework\TestCase
{
    public function testMeow()
    {
        $cat = new BirmanCat();
        $this->assertEquals('Meow - meow', $cat->meow());
    }
    public function testPurr()
    {
        $cat = new BirmanCat();
        $this->assertEquals('Purr - purr', $cat->purr());
    }
    public function testHunt()
    {
        $cat = new BirmanCat();
        $this->assertEquals('Birman cat hunts a mouse!', $cat->hunt());
    }
}