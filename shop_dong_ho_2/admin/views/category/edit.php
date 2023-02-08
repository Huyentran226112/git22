<form action="index.php?controller=category&action=update&id=<?= $item['id'];?>" method="post">
    TÊN HÀNG :<input type="text" name="name" class="form-control" value="<?= $item['name'];?>"> <br>
    <input type="submit"class="btn btn-primary" value="SỬA">
</form>