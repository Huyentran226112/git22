<?php
class Rectangle extends Shape implements Resizeable
{
    public int $width;
    public int $height;

     public function __construct(string $name,
                                        int $width,
                                        int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
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
