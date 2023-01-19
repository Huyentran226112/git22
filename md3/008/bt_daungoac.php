<?php 
/*
s * (s – a) * (s – b) * (s – c)     → Well
(– b + (b2 – 4*a*c)^0.5) / 2*a      → Well
s * (s – a) * (s – b * (s – c)      → ???
s * (s – a) * s – b) * (s – c)      → ???
(– b + (b^2 – 4*a*c)^(0.5/ 2*a))    → ???
*/
$string =' s * (s - a) * (s - b) * (s - c)';
$string_arr = str_split($string);
// Tạo một stack (từ lớp SplStack) rỗng (Stack chứa dấu ngoặc).
$stack = new SplStack();
// duyet vong lap 
foreach ($string_arr as $sym) {
    // neu sym la dau ngoac trai
    if($sym == '('){
        // Đưa sym vào stack.
       $stack ->push($sym);
    }
    // . Nếu sym là dấu ngoặc phải
    if($sym == ')'){
        // Nếu stack rỗng, return false.
        if($stack->isEmpty()){
            echo 'loi';
            break;
        }else{
            // Lấy dấu ngoặc ở stack, đưa vào biến left.
            $left = $stack->pop();
            // Nếu left và sym không khớp được với nhau, return false.
            if($stack->isEmpty()){
                echo 'loi 2';
                break;
            }
            echo 'dung';
        }
    }

}

echo '<pre>';
print_r($string_arr);
echo '</pre>';

