<?php
function check ($email){
   
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('day ko dung dinh dang email');
        }
        return $email;


}
check ("huyentran221100gmail.com");

try {

    echo $email." dung dinh dang  ";
   }   
   catch(Exception $e){
       echo '  Message: ' . $e->getMessage();
   }
