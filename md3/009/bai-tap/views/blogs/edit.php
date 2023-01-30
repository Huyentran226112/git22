<form action="index.php?controller=blog&action=update&id=<?= $item['id'];?>" method="post">
    TENHANG :<input type="text" name="title" value="<?= $item['title'];?>"> <br>
    MÔ TẢ: <input type="text" name="description" value="<?= $item['description'];?>"> <br>
    <input type="submit" value="sửa">
</form>