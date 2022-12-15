<?php
 $arr = [
     [12,45,56,34],
    [14,25,3,54]];
 $max=$arr[0][0];
 for ( $i=0;$i<count($arr);$i++){
    for( $j=0;$j<count($arr[$i]);$j++ ){
            if( $arr[$i][$j]>$max){
                $max=$arr[$i][$j];
            }
    }
 }
 echo $max;
?>