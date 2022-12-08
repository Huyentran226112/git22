<?php
$day=5;
switch(true){
    case ($day >= 2 && $day<= 6):
         echo "đi làm";
    break;
    case ($day == 7):
       echo"sinh hoạt";
    break;
    default:
      echo "relax" ;
    break;
}
?>