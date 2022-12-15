<?php
$books =['van','su','dia'];
$find ='su';
foreach( $books as $key => $book ){
    if($book==$find){
        echo $key;
    }
}
