
 <h3>QUẢN LÝ MẶT HÀNG  </h3>
<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="index.php?controller=product&action=create"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>TÊN HÀNG</th>
            <th>GIÁ BÁN</th>
            <th>SỐ LƯỢNG</th>
            <th>THỂ LOẠI</th>
            <th>ẢNH</th>
            <th>MÔ TẢ</th>
            <th>TRẠNG THÁI</th>
            <th>ACTION</th>
           
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
                <td><?php echo $row['name'];?></td>
                <td><?php echo number_format($row['price']);?>VNĐ</td>
                <td><?php echo $row['quantity'];?></td>
                <td><?php echo $row['category_id'];?></td>
                <td><?php echo $row['image'];?></td>

                <td><?php echo $row['description'];?></td>

                <td>
                <?php echo $row['status']== 1 ? "bật" : "tắt"; ?>    
                <?php 
                // if($row['status']== 1){
                //     echo "bật";
                // }else{
                //     echo "tắt";
                // }
                ?>
                </td>
                <td>
                    <a href="index.php?controller=product&action=edit&id=<?= $row['id'] ;?>">Edit</a> <br>
                    <a href="index.php?controller=product&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

