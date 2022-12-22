<?php

// function binarySearch( array $numbers, int $needle): bool
// {
//     $low = 0;
//     $high = count($numbers) - 1;
//     while ($low <= $high) {
//         $mid = (int)(($low + $high)/2);

//         if ($numbers[$mid] > $needle) {
//             echo $mid . " ". "too High"."<br>";
//             $high = $mid -1;
//         } else if ($numbers[$mid] < $needle){
//             echo $mid. "too Low"."<br>";
//             $low = $mid + 1;
//         } else {
//             echo "Correct";
//             return true;

//         }
//     }
//     return false;
// }
// $numbers = range(1,100);
// $needle = 22;
// binarySearch($numbers,$needle);bviug

session_start();
// session_destroy();
$find = 23;

// kiem tra xem da luu vao $_SESSION['numbers']
if( isset( $_SESSION['numbers'] ) ){
    $numbers = $_SESSION['numbers'];
}else{
    $numbers = [];
    for( $i = 1; $i <= 100; $i ++){
        array_push( $numbers, $i );
    }
    $_SESSION['numbers'] = $numbers;
}

$L = 0;
$R = count( $numbers ) - 1;
$M = floor( ( $L + $R ) / 2 );
echo 'So cua ban la:'. $numbers[$M];

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $answer = $_REQUEST['answer'];
    if( $answer == '<' ){
        $R = $M - 1;
        // $new_numbers = array_splice($numbers,$M);
        $new_numbers = [];
        foreach( $numbers as $key => $number ){
            if( $key == $M ){
                break;
            }
            array_push($new_numbers,$number);
        }
        $_SESSION['numbers'] = $new_numbers;

        //tai lai
        header('Location: guest-number.php');
    }
    if( $answer == '>' ){
        $L = $M + 1;

        $new_numbers = [];
        foreach( $numbers as $key => $number ){
            if( $key <= $M ){
                continue;
            }
            array_push($new_numbers,$number);
        }
        $_SESSION['numbers'] = $new_numbers;

        //tai lai
        header('Location: guest-number.php');
    }
    if( $answer == '=' ){
        echo 'Chính xác, đó là con số tôi đã nghĩ: Trò chơi kết thúc'; 
        session_destroy();   
        //tai lai
        header('Location: guest-number.php');
    }
}
?>

<form action="" method="post">
    <select name="answer">
        <option value=">">Lớn Hơn</option>
        <option value="<">Nhỏ Hơn</option>
        <option value="=">Chính Xác</option>
    </select>
    <input type="submit" value="Doan">
</form>