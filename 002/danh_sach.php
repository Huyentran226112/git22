<?php
// doc nội dung file
$string=file_get_contents('users.json');
// echo $string;
//  chuyen chuoi sang mang 
$users = json_decode($string,true);
// foreach ($users as $user) {
//      echo '<pre>';
//     print_r($user['name']);
//     echo '</pre>';
//     die();

// }

   
?>
<table border="1">
    <tr>
        <th>stt</th>
        <th>name</th>
        <th>age</th>
    </tr>
    <?php foreach ($users as $key=>$user ):?>
    <tr>
        <td><?php echo $key+1;?></td>
        <td><?php echo $user['name'];?></td>
        <td><?php echo $user['age'];?></td>
    </tr> 
    <?php endforeach; ?>
</table>













