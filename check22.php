<!-check22 
<!-- // $i =1;
// do{
//     echo $i;
//     $i++;
// }while ($i <=5); 
-->


<!-- check23
//  $i =10;
//   do {
//     echo $i;
//     echo '<br>'; 
//     $i--;
//   }while( $i>=5) 
 -->


<!-- check24 
 for( $i=1; $i <=10;$i ++){
    if($i == 5){
        break;
    }
    echo $i ;
    echo '<br>';
} -->


<!-- check25
for( $i=1; $i <=5; $i ++){
    if($i == 3){
    continue ;
    }
    echo $i ;
}
 -->


 <!-- check26

for( $i=1; $i <=10; $i ++){
    if($i % 2 ==0){
         continue ;
    }
        echo $i;
} -->


<!--check27
 echo "<table>";
for ($i = 1; $i <= 8; $i ++){
 echo "<tr>";
for($j = 1; $j <= 3; $j ++){
 echo "<td>" . $i . $j. "</td>";
}
echo "</tr>";
}
echo "</table>"; -->

<!-- check28 -->
<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    //  xu li du lieu
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';
    // memory
    $so_a=$_REQUEST['so_a'];
    $so_b=$_REQUEST['so_b'];
    $phep_tinh=$_REQUEST['phep_tinh'];
    if($so_a==''&& $so_b==''){
         echo 'hay nhap so a va b';
    }else{
        
    // xu li
    switch($phep_tinh){
        case 'cong()':
           $ket_qua= $so_a+$so_b;
           echo $ket_qua;
        break;
        case 'tru()':
            $ket_qua= $so_a-$so_b;
           echo $ket_qua;
        case 'nhan()':
            $ket_qua= $so_a*$so_b;
           echo $ket_qua;
        break;
        case 'chia()':
        if( $so_b == 0 ){
            echo 'khong chia het cho 0';
        } else{
            $ket_qua= $so_a/$so_b;
            echo $ket_qua;
        }
        break;
        
}
}
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
    <form action="" method="POST">
    <input type="text" name="so_a" value="">
        <input type="text" name="so_b" value=""><br>
<select name="phep_tinh">
    <option value="cong()">+</option>
    <option value="tru()">-</option>
    <option value="nhan()">*</option>
    <option value="chia()">/</option>
</select>
        <input type="submit" value="add">
    </form>
</body>
</html>