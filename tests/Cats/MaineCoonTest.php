<?php

use MyProject\Cats\MaineCoon;

class MaineCoonTest extends \PHPUnit\Framework\TestCase
{
    private $maineCoon;

    protected function setUp(): void
    {
        $this->maineCoon = new MaineCoon('Murka');
    }

    public function testMeow()
    {
        $this->assertEquals('Meow - meow', $this->maineCoon->meow());
    }

    public function testPurr()
    {
        $this->assertEquals('Purr - purr', $this->maineCoon->purr());
    }

    public function testHunt()
    {
        $this->assertEquals('Maine Coon cat hunts a mouse!', $this->maineCoon->hunt());
    }
}