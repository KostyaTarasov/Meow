<?php

namespace MyProject\Cats;

class PlushTiger implements CatInterface
{
    private string $name;

    public function __construct(string $name = 'PlushTiger')
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function meow(): string
    {
        return 'Meow - plush!';
    }

    public function purr(): string
    {
        return "This cat can't purr.";
    }

    public function hunt(): string
    {
        return "This cat can't hunt.";
    }
}