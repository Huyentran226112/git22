<?php
class Foo
{
    // thuoc tinh
    public static string $my_static = 'foo';
     // phuong thuc khoi tao gia tri thiet lap thuoc tinh
    public function staticValue()
    {
        // tra ve gia tri thuoc tinh 
        return self::$my_static;
    }
}
// kế thừa 
class Bar extends Foo
{
    // parent phân  biệt hàm cha và hàm con 
    public function fooStatic(): string
    {
        return parent::$my_static;
    }
}


// print Foo::$my_static . "\n";
// khoi tao doi tuong 
$foo = new Foo();
// in ra cac gia tri cua thuoc tinh 
print $foo->staticValue() . "\n";
print $foo::$my_static . "\n";      // Undefined "Property" my_static 

print $foo::$my_static . "\n";

// print Bar::$my_static . "\n";
// khoi tao doi tuong 
$bar = new Bar();
print $bar->fooStatic() . "\n";
?>