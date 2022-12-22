<form action="" method='post'>
    <select name='luachon'>
        <option value="+">Hinh chữ nhật</option>
        <option value="-">Hình tam giác botton-left</option>
        <option value="*">Hình tam giác top-left </option>
    </select><br>
    <input type="submit" value="Vẽ hình">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $luachon = $_REQUEST['luachon'];
    switch ($luachon) {
        case '+':
            for ($i = 0; $i < 3; $i++) {
                echo "<br>";
                for ($j = 0; $j < 7; $j++) {
                    echo "*" . " ";
                }
            }

            
            break;
        case '-':
            for ($i = 0; $i <= 5; $i++) {
                echo "<br>";
                for ($j = 0; $j < $i; $j++) {
                    echo "*" . " ";
                }
            }
            break;
        case '*':
            for ($i = 5; $i >= 1; $i--) {
                echo "<br>";
                for ($j = 1; $j <= $i; $j++) {
                    echo "*" . " ";
                }
            }
            break;
    }
}
?>