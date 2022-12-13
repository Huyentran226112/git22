<!-- xử lý tim từ  -->
<?php
$a = [
    "hello"=>"xin chao",
    "how"=>"thế nào",
    "books"=>"sách",
    "computer"=>" máy tính  "
];
if( $_SERVER["REQUEST_METHOD"]=="POST" ){
    $tim_kiem1 =$_POST["tim_kiem"];
    $b=0;
    foreach($a as $key=>$tim_kiem){
        if( $key == $tim_kiem1){
            echo "từ :". $key . " . </br>nghĩa của từ :". $tim_kiem;
            echo "<br>";
            $b=1;
        }elseif($tim_kiem1==$tim_kiem){
            echo "từ :". $tim_kiem . " . </br>nghĩa của từ :". $key;
            echo "<br>";
            $b=1; 
        }


        }
}
    if($b==0){
        echo "không tìm thấy từ cần tra";
    }


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
    <h2>TỪ ĐIỂN ANH - VIỆT </h2>
    <form method="post">
    <input type="text" name="tim_kiem" placeholder='nhập từ cần tìm '>
    <input type="submit" value="tìm "/>
   
</form>
</body>
</html>