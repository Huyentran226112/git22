<?php
$pattern = '/^[A-Za-z0-9]\@[A-Za-z0-9]+\.[A-Za-z0-9]+$/';
$subject = '@#abc@gmail.com';
if (preg_match($pattern, $subject)){
    echo 'Khớp';
}else{
    echo 'Không khớp';
}

?>

