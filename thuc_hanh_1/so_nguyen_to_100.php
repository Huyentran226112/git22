<?php
    $number =2;
    $count=0;
    $countsnt=0;
for( $i = 0; $i <100;$i++){
    // if(  $countsnt<$number){
    for( $j = 1; $j <=$i ;$j++){
        if($i % $j==0){
            $count+=1;
        }
    }

    if( $count== 2){
        echo $i . "<br>";
        // $countsnt += 1;
    }
    $count=0;
}
// }else{

//     break;
// }
// }
//   }
  ?>