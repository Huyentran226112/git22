<?php
$number=[1,2,5,4,589,14,25];
$min=$number[0];
foreach($number as $key => $value) {
    if( $value < $min){
        $min = $value;
        // $index =$key;
    }
}
echo 'so nho nhat :'.$min;
?> 