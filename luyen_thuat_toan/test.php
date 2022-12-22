<?php
$mua_hang ="ngày 2022-01-29 mua hàng 100,000đ,
    ngày 2022-02-02 mua hàng 300,000đ,
    ngày 2022-02-07 thanh toán 200,000đ,
    ngày 2022-02-10 mua hàng 250,000đ,
    ngày 2022-02-15 thanh toán 400,000đ,"
 ;
 $explode_fullname = explode('', $mua_hang);
     echo "<pre>";
     print_r($explode_fullname);
     echo "</pre>";
// echo '<pre>';
// print_r(explode(' ', $mua_hang));
// echo '</pre>';

   
 //  $n = count($mua_hang); 
    //  foreach( $mua_hang as $key => $value ){
    //       if ( $key==0 ){
    //         print_r( $mua_hang[1]);
    //       }
    //  }
   