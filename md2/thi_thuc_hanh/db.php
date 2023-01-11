<?php
 $username   = 'root';
 $password   = '';
 $database   = 'quan_ly_hoc_sinh';
 try {
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (Exception $e) {
    // echo $e->getMessage();
    echo '<h1>Khong the ket noi CSDL</h1>';
}