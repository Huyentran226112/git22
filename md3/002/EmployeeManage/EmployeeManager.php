<?php
namespace EmployeeManage;
class EmployeeManager{
  public static $Employees = [];
  public static function list(){
      return self::$Employees;
  }
  public static function new($data){
      array_push(self::$Employees,$data);
  }
  public function detail($index){
      return self::$Employees[$index];
  }
  public function delete($index){
      unset(self::$Employees[$index]);
  }
  public function edit($index,$data){
      self::$Employees[$index] = $data;
  }
}