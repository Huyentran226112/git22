<?php
$number= [
    [1,3,4,5,6],
    [3,4,5,2,9],
    [44,8,77,1,36]
];
$tong=0;
for( $i=0; $i<count( $number);$i++){
     $tong+=$number[$i][$i];
}
echo $tong;