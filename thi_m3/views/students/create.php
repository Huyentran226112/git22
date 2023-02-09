<form class="table" action="index.php?controller=Student&action=store" method="post">
    TÊN HỌC SINH:<input type="text" class="form-control" name="ten_hoc_sinh"> <br>
    LỚP: <input type="text" class="form-control" name="lop"> <br>
    NGÀY SINH: <input type="date" class=" form-control" name="ngay_sinh"> <br>
    GIỚI TÍNH:
    <select id="select" name="gioi_tinh">
        <option value="1">nữ </option>
        <option value="0">nam</option>
    </select> <br>
    THÔNG TIN HỌC SINH : <input type="text" class=" form-control" name="thong_tin_hoc_sinh"> <br>
    <input type="submit" class="btn btn-primary" value="thêm">
</form>