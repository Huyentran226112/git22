<?php
 function gia_tri_nho_nhat($arr){
    $index=0;
    $min=$arr[0];
    foreach($arr as $key => $value) {
        if( $value < $min){
            $min = $value;
            $index =$key;
        }
    }
    echo 'so nho nhat :'.$min.'vi tri'.$index;
}
$arr1 =[5,2,6,4,1,3,2];
$min= gia_tri_nho_nhat($arr1);
?>