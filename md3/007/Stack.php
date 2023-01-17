<?php
interface Stack{
    // them mot phan tu
    public function push(string $tiem);
    // lay phan tu tren cung stack va xoa 
    public function pop();
    // tra ve phan tu tren cung va ko xoa 
    public function top();
    // kiem tra stack co rong hay ko 
    public function isEmpty();

}