<?php
$books = ['van','su','dia'];
$t = $books[1];
$books [1]=$books[0];
$books [0]=$t;
echo'<pre>';
print_r($books);
die();