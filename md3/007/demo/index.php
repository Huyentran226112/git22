<?php 
include_once "Queue.php";
$quere = new Queue();
$quere->enqueue(10);
$quere->enqueue(12);
$quere->enqueue(13);
// lay phan tu ra khoi hang doi
$quere->dequeue();

var_dump($quere->container);