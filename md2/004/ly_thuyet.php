<?php
// json
// javascript obeject
$string = '
[
    {
    "name":"huyen",
    "age":"22"
    },
    {
    "name":"nho",
    "age":"12"
    },
    {
    "name":"phong",
    "age":"25"
    }
]
';
// chuyen chuoi sang mang
    $data = json_decode($string,true);
    // tao phan tu moi
    $newItem=[
        'name'=> 'tam',
        'age'=>20
    ];
    // them phan tu vao mang 
    array_push($data,$newItem);
// chuyen tu mang sang chuoi
    $string = json_encode($data);
    // luu vao file
    file_put_contents('users.json',$string);
    echo $string;
    // var_dump($data);
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();


?>