<?php
class House
{
    // color of the house
    private string $color="";
    // only these colors are allowed
    private array $allowedColors = [
        'black', 'blue', 'red', 'green'
    ];

    // thiet lap thuoc tinh color
    public function setColor($color): void
    {
        // chuyen ve chu thuong
        $color = strtolower($color);
        // kiem tra color co nam trong mang allowedColors hay khong 
        if (in_array($color, $this->allowedColors)) {
            // if $color is in the $allowedColors array
            // we can set the color property
            $this->color = $color;
        }
    }

    public function getColor(): string
    {
        if ($this->color) {
            // if color is set
            return $this->color;
        } else {
            // show an error message
            return 'No color is set. May be you have set a color which is not allowed';
        }
    }
}

// Example 1
$house1 = new House();
$house1->setColor('black');
echo $house1->getColor();//black

echo '<br>'; // a HTML line break to make it readable
$house2 = new House();
$house2->setColor('yellow'); // a not allowed color
echo $house2->getColor();//gia tri rỗng

?>