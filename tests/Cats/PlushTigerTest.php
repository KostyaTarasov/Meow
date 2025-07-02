<?php

use MyProject\Cats\PlushTiger;

class PlushTigerTest extends \PHPUnit\Framework\TestCase
{
    public function testMeow()
    {
        $toy = new PlushTiger();
        $this->assertEquals('Meow - plush!', $toy->meow());
    }
    public function testPurr()
    {
        $toy = new PlushTiger();
        $this->assertEquals("This cat can't purr.", $toy->purr());
    }
    public function testHunt()
    {
        $toy = new PlushTiger();
        $this->assertEquals("This cat can't hunt.", $toy->hunt());
    }
}