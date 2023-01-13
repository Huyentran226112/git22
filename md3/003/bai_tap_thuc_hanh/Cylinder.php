<?php


use JetBrains\PhpStorm\Pure;

class Cylinder extends Circle
{
    public int $height;

    #[Pure] public function __construct(string $name,int|float $radius, int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    #[Pure] public function calculateArea(): int|float
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    #[Pure] public function calculateVolume(): int|float
    {
        return parent::calculateArea() * $this->height;
    }
}