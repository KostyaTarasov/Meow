<?php

namespace MyProject\Cats;

class MaineCoon implements CatInterface
{
    private string $name;

    public function __construct(string $name = 'MaineCoon')
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function meow(): string
    {
        return 'Meow - meow';
    }

    public function purr(): string
    {
        return 'Purr - purr';
    }

    public function hunt(): string
    {
        return 'Maine Coon cat hunts a mouse!';
    }
}
