<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="index.php?controller=order&action=create"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>MÃ ĐƠN HÀNG</th>
            <th>NGÀY ĐẶT HÀNG </th>
            <th>TỔNG TIỀN </th>
            <th>TÊN KHÁCH HÀNG </th>
            <th>SỐ ĐIỆN THOẠI  </th>
            <th>ĐỊA CHỈ </th>
            <th>CÔNG CỤ </th>
           
        </tr>
    </thead>
    <tbody>
    </td>
    <?php foreach( $items as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo ++$key;?>  </td>
                <td><?php echo $row['order_date'];?></td>
                <td><?php echo $row['total'];?></td>
                <td><?php echo $row['cutstomer_name'];?></td>
                <td><?php echo $row['cutstomer_phone'];?></td>
                <td><?php echo $row['cutstomer_address'];?></td>
                </td>
                <td>
                    <a class="btn btn-warning"  href="index.php?controller=order&action=edit&id=<?= $row['id'] ;?>">Edit</a> <br>
                    <a  class="btn btn-danger"  href="index.php?controller=order&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>