<?php
// phit cứng 
// $number=[
//    [12,25,36,54],
//     [32,89,36,47]
// ];
//  $sum=0;
//  $thu_tu= 1;
//  for($i=0;$i<count($number);$i++){
//     for($j=0;$j<count($number[$i]);$j++){
//         if($j== 1 ){
//         $sum+=$number[$i][$j];
//  }
// }
//  }
//  echo $sum; 
// *****
// phít mềm
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dem=$_REQUEST['nhap'];
    $number=[
           [12,25,36,54],
            [32,89,36,47]
        ];
    $sum=0;
    for($i=0;$i<count($number);$i++){
            for($j=0;$j<count($number[$i]);$j++){
                if($j== $dem){
                $sum+=$number[$i][$j];
         }
        }
         }
         echo $sum; 
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
<form method="POST">
    <input type="text" name ="nhap"placeholder="thứ tự cột muốn cộng ">
    <input type="submit" value="add"/><br>
</body>
</html>
