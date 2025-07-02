<?php

namespace MyProject\Cli;

abstract class AbstractCommand
{
    protected array $params = [];

    public function __construct(array $params = [])
    {
        $this->params = $params;
    }

    protected function getParam(int $index)
    {
        return $this->params[$index] ?? null;
    }
}