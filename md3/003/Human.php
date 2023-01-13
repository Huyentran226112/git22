<?php
include_once 'Animail.php';
 class Human extends Animail{
    public function relax(){
        echo 'relax';
    }
 }
 $human1 = new Human();
 $human1->setNam('nguyen van A');
 $human1->relax();
 echo '<pre>';
 print_r($human1)h .;
