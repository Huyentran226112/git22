<?php
$arr =[45,14,24,11,78,63,65];
sort($arr);
foreach ($arr as $key => $value) {
  if( $arr[0]!== $arr[$key] && $arr[0]!== $arr[$key]){
    echo 'so nho nhat thu hai :'.$arr[$key];
    break;
  }
}
?>