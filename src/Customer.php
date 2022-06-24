<?php

namespace ProgrammerZamanNow\Belajar;

class Customer
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "Hello $name, my names is " . $this->name . PHP_EOL;
    }
}