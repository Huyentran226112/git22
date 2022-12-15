<?php
// phít cứng
// $number= [12,88,69,21,36,47];
// $key_number=6;
// foreach($number as $key=>$value){
//     if($key_number==$key){
//         echo $value;
//     }else if($key_number>$key){
//         echo "vuot qua gioi han";
//         break;
//     }
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a=$_REQUEST['nhap'];
    $number= [12,88,69,21,36,47];
    $b=true;
    foreach ($number as $key => $value) {
        if($a == $key){
            echo $value;
            $b=false;
    }
    }
    if( $b==true ){
        echo " vuot qua gioi han";
    }
}
// phít mềm 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" name ="nhap"placeholder="nhap so">
    <input type="submit" value="add"/><br>
</form>
</body>
</html>
