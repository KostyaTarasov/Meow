<?php

use MyProject\Cats\SiberianCat;

class SiberianCatTest extends \PHPUnit\Framework\TestCase
{
    public function testMeow()
    {
        $cat = new SiberianCat();
        $this->assertEquals('Meow - meow', $cat->meow());
    }
    public function testPurr()
    {
        $cat = new SiberianCat();
        $this->assertEquals('Purr - purr', $cat->purr());
    }
    public function testHunt()
    {
        $cat = new SiberianCat();
        $this->assertEquals('Siberian cat hunts a mouse!', $cat->hunt());
    }
}