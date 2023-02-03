<form action="index.php?controller=user&action=update&id=<?= $item['id'];?>" method="post">
     HỌ VÀ TÊN:<input type="text" class="form-control" name="name" value="<?= $item['name'];?>"> <br>
    ĐỊA CHỈ: <input type="text"  class="form-control" name="address" value="<?= $item['address'];?>"> <br>
   NGÀY LÀM VIỆC : <input type="date" class="form-control" name="start_date" value="<?= $item['start_date'];?>"> <br>
    SỐ ĐIỆN THOẠI: <input type="text" class="form-control" name="phone" value="<?= $item['phone'];?>"> <br>
    EMAIL: <input type="text" name="email" class="form-control" value="<?= $item['email'];?>"> <br>
    MẬT KHẨU : <input type="text" class="form-control" name="password" value="<?= $item['password'];?>"> <br>
    ẢNH: <input type="text"  class="form-control" name="image" value="<?= $item['image'];?>"> <br>
    <input type="submit"class="btn btn-primary"  value="Sửa">
</form>