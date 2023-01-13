
<?php

class Square extends Rectangle implements Colorable
{
     public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function howToColor(){
       return "Color all four sides..";
    }
}   //