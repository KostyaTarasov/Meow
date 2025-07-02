<?php

use MyProject\Cats\SiameseCat;

class SiameseCatTest extends \PHPUnit\Framework\TestCase
{
    public function testMeow()
    {
        $cat = new SiameseCat();
        $this->assertEquals('Meow - meow', $cat->meow());
    }

    public function testPurr()
    {
        $cat = new SiameseCat();
        $this->assertEquals('Purr - purr', $cat->purr());
    }

    public function testHunt()
    {
        $cat = new SiameseCat();
        $this->assertEquals('Siamese cat hunts a mouse!', $cat->hunt());
    }
}