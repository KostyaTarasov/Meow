<?php

namespace MyProject\Cats;

class LionKeychain implements CatInterface
{
    private string $name;

    public function __construct(string $name = 'LionKeychain')
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function meow(): string
    {
        return "This cat can't meow.";
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