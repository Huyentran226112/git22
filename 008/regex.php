<?php

// $ip ='192.168.1.1';
// $ip_arr = explode('.', $ip);
// var_dump($ip_arr);
// preg_match($pattern,$subject,&$matches)
$pattern = '/[A-Za-z0-9]+\@[A-Za-z]+\.[A-Za-z]+/';
$subject = 'Tamnguyen.@gmail.com';
if( preg_match( $pattern,$subject ) ){
    echo 'Khớp';
}else{
    echo 'Không khớp';
}
/*
 preg_match_all($pattern,$subject,&$matches)

*/
$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/\./';
preg_match_all($pattern, $subject, $matches);
print('<pre>');
print_r($matches);
print('</pre>');


/*
preg_split($pattern,$subject)
*/
$ip = "192.168.1.1";
$ip_arr = preg_split ("/\./", $ip);
print('<pre>');
print_r($ip_arr);
print('</pre>');

