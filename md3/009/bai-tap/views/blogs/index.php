
<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="index.php?controller=blog&action=create"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>TÊN HÀNG</th>
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
                <td><?php echo $row['description'];?></td>
                </td>
                <td>
                    <a class="btn btn-warning" href="index.php?controller=blog&action=edit&id=<?= $row['id'] ;?>">Edit</a>
                    <a class="btn btn-danger" href="index.php?controller=blog&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a class="btn btn-primary"   href="index.php?controller=categorie&action=index"> chuyển trang catagori </a>  