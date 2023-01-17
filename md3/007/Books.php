<?php
class Books implements Stack{
// thuoc tinh
 protected $Stack;
 protected $Limit;

public function __construct($Limit){
    $this->Stack = [];
    $this->Limit = $Limit;
}
    public function push(string $tiem){
        if(count($this->Stack)>($this->Limit)){
            throw new  Exception('Stack full');
        }else{
            array_push($this->Stack,$tiem );
        }
    }   
    public function pop(){
        if($this->isEmpty()){
            throw new  Exception('Stack empty');
        }else{
            return array_pop($this->Stack);
        }
    }
    public function top(){
        return end($this->Stack);
    }
    public function isEmpty(){
        return empty($this->Stack);
    }
    public function getStack(){
        return $this->Stack;
    }
}