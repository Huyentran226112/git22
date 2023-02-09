<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form class="table" action="index.php?controller=Student&action=update&id=<?= $item['id'];?>" method="post">
    TÊN HỌC SINH:<input type="text" name="ten_hoc_sinh" class="form-control" value="<?= $item['ten_hoc_sinh'];?>"> <br>
    LỚP: <input type="text" name="lop" class="form-control" value="<?= $item['lop'];?>"> <br>
    NGÀY SINH: <input type="date" name="ngay_sinh" class="form-control" value="<?= $item['ngay_sinh'];?>"> <br>
    GIỚI TÍNH:
    <select id="select" name="gioi_tinh">
        <?php
                                if($item['gioi_tinh']==0){

                                ?>
        <option selected value="0">nam</option>
        <option value="1">nữ</option>
        <?php
                                }else{   
                                ?>
        <option value="0">nam</option>
        <option selected value="1">nữ</option>
        <?php
                                }
                                ?>
    </select><br>
    THÔNG TIN HỌC SINH : <input type="text" name="thong_tin_hoc_sinh" class="form-control"
        value="<?= $item['thong_tin_hoc_sinh'];?>"> <br>
    <input type="submit" class="btn btn-primary" value="sửa">