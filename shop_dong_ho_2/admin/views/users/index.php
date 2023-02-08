<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="index.php?controller=user&action=create"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>MÃ NHÂN VIÊN  </th>
            <th>HỌ VÀ TÊN </th>
            <th>ĐỊA CHỈ </th>
            <th>NGÀY LÀM VIỆC </th>
            <th>ĐIỆN THOẠI </th>
            <th>EMAIL</th>
            <!-- <th>ẢNH</th> -->
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
                <td> <?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['start_date'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['email'];?></td>
                <!-- <td><img src="http://localhost/SHOP_DONG_HO_2/admin/<php echo $row['image']?>" width="80"></td> -->

                </td>
                <td>
                    <a class="btn btn-warning"  href="index.php?controller=user&action=edit&id=<?= $row['id'] ;?>"> SỬA</a> <br>
                    <a class="btn btn-danger"onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="index.php?controller=user&action=destroy&id=<?= $row['id'] ;?>">XÓA</a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
