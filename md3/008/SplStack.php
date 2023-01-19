<?php
$q = new SplStack();
$q->push('huyen');
$q->push('phong');
$q->push('nho');


// di chuyen con tro ve vi tri dau tien
$q->rewind();
while( $q->valid() ){
    // lay ra phan tu dau tien trong danh sach
    echo '<br>'.$q->current();
    // di chuyen con tro den vi tri tiep theo
    $q->next();
}

echo "<pre>";
print_r($q);
echo "</pre>";