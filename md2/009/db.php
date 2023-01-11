<?php
 $username   = 'root';
 $password   = '';
 $database   = 'c1022i1';
 try {
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (Exception $e) {
    // echo $e->getMessage();
    echo '<h1>Khong the ket noi CSDL</h1>';
}