<?php

$books = ['van','su','dia'];
// in mang 
echo '<pre>';
print_r($books);
echo '</pre>';
// truy cap phan tu 
echo '<br>'.$books[0];
echo '<br>'.$books[1];
echo '<br>'.$books[2];
// do dai cua mang 
echo count($books);
//  them phan tu
 array_push($books,'hoa');
 echo '<pre>';
print_r($books);
echo '</pre>';
// khai bao cach 2 ko co chi so 
$books = [
    0=>'van',
    1=>'su',
    2=>'dia',

];
    //  mang lien ket 
    $books=[
        'khong'=>'van',
        'mot'=>'su',
        'hai'=>'dia',
    ];

echo '<br>'.$books['khong'];
echo '<br>'.$books['mot'];
echo '<br>'.$books['hai'];
// in mang
echo '<pre>';
print_r($books);
echo '</pre>';
  $info= [ 
    'ten'=>'nguyen van a',
    'tuoi'=> 18

  ];
  $info['gioi_tinh']='nam';

echo '<pre>';
print_r($info);
echo '</pre>';
// duyet mang 
foreach ($info as $key => $value) {
    echo '<br>'.$key.'-'.$value;
}
foreach ($info as  $value) {
    echo '<br>'.$value;
}
foreach ($info as $key => $value) :
    echo '<br>'.$key.'-'.$value;
endforeach;

for ( $i=0; $i<count($info);$i++):
endfor;
