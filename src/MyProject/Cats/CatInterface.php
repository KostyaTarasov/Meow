<?php

namespace MyProject\Cats;

interface CatInterface
{
    public function meow(): string;
    public function purr(): string;
    public function hunt(): string;
    public function getName(): string;
}