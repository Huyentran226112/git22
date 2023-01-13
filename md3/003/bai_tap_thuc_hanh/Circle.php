<?php


use JetBrains\PhpStorm\Pure;

class Circle extends Shape
{
    public int|float $radius;

    #[Pure] public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    #[Pure] public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    #[Pure] public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }
}