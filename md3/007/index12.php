<?php
include_once "Stack.php";
include_once "Books.php";

$books = new Books(3);
$books->push("tin hoc 12");
$books->push("toan 12");
$books->push("vat li 12");
$books->pop();
$books->pop();
echo $books->top();

var_dump ($books->getStack());