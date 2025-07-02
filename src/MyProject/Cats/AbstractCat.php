<?php

namespace MyProject\Cats;

abstract class AbstractCat implements CatInterface
{
    protected string $name;
    protected string $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    abstract public function makeSound(): string;

    public function huntMouse(): string
    {
        return $this->name . " the " . $this->type . " is hunting a mouse!";
    }
}