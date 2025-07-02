<?php

namespace MyProject\Cats;

class SiberianCat implements CatInterface
{
    private string $name;

    public function __construct(string $name = 'Siberian')
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
        return 'Siberian cat hunts a mouse!';
    }
}