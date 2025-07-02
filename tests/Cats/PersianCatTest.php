<?php

use MyProject\Cats\PersianCat;

class PersianCatTest extends \PHPUnit\Framework\TestCase
{
    private $persianCat;

    protected function setUp(): void
    {
        $this->persianCat = new PersianCat('Fluffy');
    }

    public function testMeow()
    {
        $this->assertEquals('Meow - meow', $this->persianCat->meow());
    }

    public function testPurr()
    {
        $this->assertEquals('Purr - purr', $this->persianCat->purr());
    }

    public function testHunt()
    {
        $this->assertEquals('Persian cat hunts a mouse!', $this->persianCat->hunt());
    }
}