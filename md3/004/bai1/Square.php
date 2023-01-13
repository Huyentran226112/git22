<?php
class Square extends Rectangle implements Resizeable
{
   public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
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