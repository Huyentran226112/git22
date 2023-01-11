<?php
class Application{
    // thuoc tinh
    private string $name;
    public static int $count = 0;
    // phuong thuc
    public function __construct(string $name)
    {
        $this->name = $name;
        self::$count++;
    }
//    tra ve chuoi name 
    public function __toString(): string
    {
        return 'Application name: ' . $this->name;
    }
}
echo "Total objects count: ". Application::$count ."<br/>";
// khoi tao doi tuong 
$app1 = new Application('App One');
echo "Total objects count: ". Application::$count ."<br/>";
// khoi tao doi tuong
$app2 = new Application('App Two');
echo "Total objects count: ". Application::$count ."<br/>";
echo $app1 .'<br/>';
echo $app2 .'<br/>';
?>