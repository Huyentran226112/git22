<?php
$a=[4,5,3,1,4,78,];
$b=[45,21,36,87,55];
$c=[];
// duyệt mảng 
foreach ($a  as $key => $value) {
   array_push($c,$value);
}
foreach ($b  as $key => $value) {
    array_push($c,$value);
 }
 echo '<pre>';
	print_r($c);
	echo '</pre>';
    ?>