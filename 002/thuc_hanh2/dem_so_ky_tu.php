<?php
$name = "nguyen van cuong";
$dem="a";
$count=0;
for ($i = 0; $i <strlen($name); $i++){
    if( $name[$i] ==$dem ){
        $count ++;
    }
   }
echo $count;

