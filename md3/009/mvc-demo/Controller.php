<?php 
include_once('model.php');
class Controller{
    public $model;
    public function __construct(){
        $this->model = new Model();
    }
    public function getList(){
       $persons = $this->model->ListPerson(); 
       include 'view.php';
    }
}