<?php
include_once('Resizeable.php');
include_once('Shape.php');
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');
$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
echo $circle->resize(rand(1,100)*0.01);

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
echo $cylinder->resize(rand(1,100)*0.01);

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
echo $rectangle->resize(rand(1,100)*0.01);

$square = new Square('Square 01', 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
echo $square->resize(rand(1,100)*0.01);
