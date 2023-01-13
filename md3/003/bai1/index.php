<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
  if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $radius = $_REQUEST['radius'];
        $color = $_REQUEST['Color'];
        $height = $_REQUEST['height'];
    $Cylinder1 = new Cylinder($radius,$color,$height);
    $Cylinder1->setRadius($radius);
    $Cylinder1->setHeight($height);
    $Cylinder1->setColor($color);
    echo $Cylinder1->getDt();
    echo '<br>';
    echo $Cylinder1->getTt();
    echo '<br>';
    echo $Cylinder1->getColor();
  }

?>
<form action="" method="post">
<label for="fname">Nhập radius:</label><br>
<input type="text" id="" name="radius"><br>
<label for="lname">Color:</label><br>
<input type="text" id="" name="Color"><br><br>
<label for="lname">Nhập height:</label><br>
<input type="text" id="" name="height"><br><br>
<input type="submit" value="Submit">
</form> 






