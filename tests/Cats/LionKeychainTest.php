<?php

use MyProject\Cats\LionKeychain;

class LionKeychainTest extends \PHPUnit\Framework\TestCase
{
    public function testMeow()
    {
        $toy = new LionKeychain();
        $this->assertEquals("This cat can't meow.", $toy->meow());
    }
    public function testPurr()
    {
        $toy = new LionKeychain();
        $this->assertEquals("This cat can't purr.", $toy->purr());
    }
    public function testHunt()
    {
        $toy = new LionKeychain();
        $this->assertEquals("This cat can't hunt.", $toy->hunt());
    }
}