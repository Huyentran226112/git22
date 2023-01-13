<?php
namespace Employee;
class Employee{
    // thuoc tinh 
    public $ho = "";
    public $ten = "";
    public string $ngay_sinh = "";
    public $dia_chi = "";
    public $cong_viec = "";
    public function __construct($ho,$ten,$ngay_sinh,$dia_chi,$cong_viec){
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngay_sinh = $ngay_sinh;
        $this->dia_chi = $dia_chi;
        $this->cong_viec = $cong_viec;
    }

    public function getInfo(){
        return [
            "ho" => $this->getho(),
            "ten" => $this->getten(),
            "ngay_sinh"=>$this->getngay_sinh(),
            "dia_chi"=>$this->getdia_chi(),
            "cong_viec"=>$this->getcong_viec()
        ];
    }
   
}