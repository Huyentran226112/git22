<?php
$number= [2,5,8,16,23,38,56,72,91];
$l=0;
$r=count($number)-1;
$fine=23;
while ($l<=$r){
    $m = floor(($l+$r)/2);
    if($number[$m]<$fine){
        $l=$m+1;
    }elseif($number[$m]>$fine){
        $r=$m-1;
    }else{
        echo "tim thay".$fine."tai".$m;
        break;
    }
}    