<?php


$username = 'root';
$password = '';
$database = 'casestudy';
try {
  $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
 
} catch(Exception $e) {
  echo $e->getMessage();    
//   echo 'không kết nối được CSDL';
}



?>  