<?php

namespace MyProject\Cats;

class SiameseCat implements CatInterface
{
    private string $name;

    public function __construct(string $name = 'Siamese')
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
        return 'Siamese cat hunts a mouse!';
    }
}
