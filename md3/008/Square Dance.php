<?php
class Dancer{
    public $name;
    public $gende;
    public function __construct($ts_name,$ts_gende){
        $this->name = $ts_name;
        $this->gende = $ts_gende;
    }
}
$nam = new SplQueue();
$nam->enqueue(new Dancer('tam','nam'));
$nam->enqueue(new Dancer('nho','nam'));
$nam->enqueue(new Dancer('phong','nam'));
$nam->rewind();

$nu = new SplQueue();
$nu->enqueue(new Dancer('huyen','nu'));
$nu->enqueue(new Dancer('ngoc anh','nu'));
$nu->rewind();

// viet ham lay ra 
echo '<br> nguoi dung dau hang nam ';
echo "<pre>";
print_r($nam->current());
echo "</pre>";
echo ' <br> nguoi dung dau hang nu ';
echo "<pre>";
print_r($nu->current());
echo "</pre>";
$pairs= [];
$nuWaiting=[];
$namWaiting=[];

// chay vong lap neu mot trong hai hang co nguoi 
while ( $nam->valid()||$nu->valid() ){
    // neu nam va nu deu vaild ,ghep cap 
    if($nam->valid()&& $nu->valid()){
        $pairs[] = [
            'nam'=>$nam->valid(),
            'nu'=>$nu->valid(),
        ];
        $nam->next();
        $nu->next();
    }else if( $nam->valid()&&!$nu->valid() ){
        $namWaiting[] = $nam->current();
        $nam->next();

    }else if( $nu ->valid() && !$nam ->valid()){
        $nuWaiting[] = $nu->current();
        $nu->next();
    }
}

echo "<pre>";
print_r($pairs);
print_r($nuWaiting);
print_r($namWaiting);
echo "</pre>";