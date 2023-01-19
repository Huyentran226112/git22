<?php
$queue = new SplQueue();
$queue->enqueue('huyen');
$queue->enqueue('nho');
$queue->enqueue('phong');
// di chuyen con tro ve vi tri dau tien
$queue->rewind();
while( $queue->valid() ){
    // lay ra phan tu dau tien trong danh sach
    echo '<br>'.$queue->current();
    // di chuyen con tro den vi tri tiep theo
    $queue->next();
}
echo "<pre>";
print_r($queue);
echo "</pre>";