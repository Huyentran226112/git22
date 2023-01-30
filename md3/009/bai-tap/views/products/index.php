
<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="index.php?controller=product&action=create"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>TÊN HÀNG</th>
            <th>GIÁ BÁN</th>
            <th>SỐ LƯỢNG</th>
            <th>MÔ TẢ</th>
            <th>CÔNG CỤ</th>
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
                <td><?php echo $row['title'];?></td>
                <td><?php echo number_format($row['price']);?>VNĐ</td>
                <td><?php echo $row['quantity'];?></td>
                <td><?php echo $row['description'];?></td>
                </td>
                <td>
                    <a href="index.php?controller=product&action=edit&id=<?= $row['id'] ;?>">Edit</a> <br>
                    <a href="index.php?controller=product&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a class="btn btn-primary"   href="index.php?controller=blog&action=index"> chuyển trang blog </a>  
