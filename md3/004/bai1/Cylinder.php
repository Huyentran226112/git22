<?php
class Cylinder extends Circle implements Resizeable
{
    public int $height;
 public function __construct(string $name,
                                        int|float $radius,
                                        int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

   public function calculateArea(): float|int
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(): float|int
    {
        return parent::calculateArea() * $this->height;
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
