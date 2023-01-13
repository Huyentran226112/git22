<?php


use JetBrains\PhpStorm\Pure;

class Square extends Rectangle
{
    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
}

