<?php
class Circle extends Shape implements Resizeable
{
    public int|float $radius;

     public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
 public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }
    public function resize( $percent)
    {
        // $percent = rand(1,100)*0.01;
        $AreaNew = $this->calculateArea()*$percent + $this->calculateArea();
        $PerimeterNew = $this->calculatePerimeter()*$percent + $this->calculatePerimeter();
        // TODO: Implement resize() method.
        return "chu vi sau khi resize la: ".$PerimeterNew." -dien tich sau khi resize la : ".$AreaNew;
    }
}