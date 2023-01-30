<form action="index.php?controller=product&action=update&id=<?= $item['id'];?>" method="post">
    TENHANG :<input type="text" name="title" value="<?= $item['title'];?>"> <br>
    GIA BAN: <input type="text" name="price" value="<?= $item['price'];?>"> <br>
    SỐ LƯỢNG : <input type="text" name="quantity" value="<?= $item['quantity'];?>"> <br>
    MÔ TẢ: <input type="text" name="description" value="<?= $item['description'];?>"> <br>
    <input type="submit" value="sửa">
</form>
