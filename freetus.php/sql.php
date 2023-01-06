<!-- 
    2.1 Cho biết danh sách các đối tác cung cấp hàng cho công ty.

    SELECT * FROM `nha_cung_caps`;
    2.2 Mã hàng, tên hàng và số lượng của các mặt hàng hiện có trong công ty.

    SELECT MALOAIHANG,TENHANG,SOLUONG FROM `mat_hangs`;
   2.3 Họ tên và địa chỉ và năm bắt đầu làm việc của các nhân viên trong công ty.

    SELECT TEN,NGAYLAMVIEC,DIACHI FROM `nhan_viens`;
   2.4 Địa chỉ và điện thoại của nhà cung cấp có tên giao dịch VINAMILK là gì?

    SELECT DIACHI,DIENTHOAI FROM (nha_cung_caps) WHERE (TENCONGTY = "VINAMILK");
    
   2.5 Cho biết mã và tên của các mặt hàng có giá lớn hơn 100000 và số lượng hiện có ít hơn 50.

   SELECT MAHANG,TENHANG FROM `mat_hangs` WHERE GIAHANG > 100000 AND SOLUONG <50;
   2.6 Cho biết mỗi mặt hàng trong công ty do ai cung cấp.

   SELECT TENHANG, TENCONGTY FROM mat_hangs JOIN nha_cung_caps ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY;
   2.7 Công ty Việt Tiến đã cung cấp những mặt hàng nào?

    SELECT TENCONGTY, TENHANG FROM nha_cung_caps INNER JOIN mat_hangs ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY WHERE( TENCONGTY = "Việt Tiến");
   2.8 Loại hàng thực phẩm do những công ty nào cung cấp và địa chỉ của các công ty đó là gì?

    SELECT TENCONGTY, DIACHI FROM nha_cung_caps JOIN mat_hangs ON nha_cung_caps.MACONGTY = mat_hangs.MACONGTY JOIN loaihangs ON mat_hangs.MALOAIHANG = loaihangs.MALOAIHANG WHERE TENLOAIHANG = 'thực phẩm';
   2.9 Những khách hàng nào (tên giao dịch) đã đặt mua mặt hàng Sữa hộp XYZ của công ty?

    SELECT khach_hangs.TENGIAODICH FROM khach_hangs
    JOIN don_dat_hangs ON khach_hangs.MAKHACHHANG = don_dat_hangs.MAKHACHHANG  
    JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON 
    JOIN mat_hangs ON chi_tiet_dat_hangs.MAHANG = mat_hangs.MAHANG
    WHERE TENHANG ='thực phẩm loại 185';
   2.10 Đơn đặt hàng số 1 do ai đặt và do nhân viên nào lập, thời gian và địa điểm giao hàng là ở đâu?

    SELECT SOHOADON,TEN, NGAYGIAOHANG, NOIGIAOHANG FROM don_dat_hangs JOIN nhan_viens ON don_dat_hangs.MANHANVIEN= nhan_viens.MANHANVIEN WHERE (SOHOADON = 1);
   2.11 Hãy cho biết số tiền lương mà công ty phải trả cho mỗi nhân viên là bao nhiêu (lương = lương cơ bản + phụ cấp).

    SELECT (LUONGCOBAN + PHUCAP ) AS LUONG FROM ( nhan_viens);
   2.12 Trong đơn đặt hàng số 3 đặt mua những mặt hàng nào và số tiền mà khách hàng phải trả cho mỗi mặt hàng là bao nhiêu
   (số tiền phải trả được tính theo công thức SOLUONG × GIABAN – SOLUONG × GIABAN × MUCGIAMGIA/100 )

    SELECT TENHANG, (chi_tiet_dat_hangs.SOLUONG * chi_tiet_dat_hangs.GIABAN - chi_tiet_dat_hangs.SOLUONG * chi_tiet_dat_hangs.GIABAN * chi_tiet_dat_hangs.MUCGIAMGIA / 100 ) AS PHAITRA FROM don_dat_hangs JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON JOIN mat_hangs ON chi_tiet_dat_hangs.MAHANG = mat_hangs.MAHANG WHERE don_dat_hangs.SOHOADON =3;
   2.13 Hãy cho biết có những khách hàng nào lại chính là đối tác cung cấp hàng của công ty (tức là có cùng tên giao dịch).

    SELECT * FROM nha_cung_caps JOIN mat_hangs ON nha_cung_caps.MACONGTY = mat_hangs.MACONGTY JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG JOIN don_dat_hangs ON chi_tiet_dat_hangs.SOHOADON = don_dat_hangs.SOHOADON JOIN khach_hangs ON don_dat_hangs.MAKHACHHANG =khach_hangs.MAKHACHHANG WHERE(khach_hangs.TENGIAODICH = nha_cung_caps.TENGIAODICH);
    2.14 Trong công ty có những nhân viên nào có cùng ngày sinh?

    SELECT * FROM nhan_viens v1 JOIN nhan_viens v2 ON v2.NGAYSINH = v1.NGAYSINH WHERE v2.MANHANVIEN != v1.MANHANVIEN;
   2.15 Những đơn đặt hàng nào yêu cầu giao hàng ngay tại công ty đặt hàng và những đơn đó là của công ty nào?

    SELECT * FROM don_dat_hangs
      JOIN khach_hangs ON don_dat_hangs.MAKHACHHANG = khach_hangs.MAKHACHHANG
       WHERE don_dat_hangs.NOIGIAOHANG = khach_hangs.DIACHI;
  2.16 Cho biết tên công ty, tên giao dịch, địa chỉ và điện thoại của các khách hàng và các nhà cung cấp hàng cho công ty

    SELECT khach_hangs.TENCONGTY AS TENCONGTY, khach_hangs.TENGIAODICH AS TENGIAODICH, khach_hangs.DIACHI AS DIACHI, khach_hangs.DIENTHOAI AS DIENTHOAI, nha_cung_caps.TENGIAODICH AS TENGIAODICH, nha_cung_caps.DIACHI AS DIACHI, nha_cung_caps.DIENTHOAI AS DIENTHOAI FROM khach_hangs JOIN don_dat_hangs ON khach_hangs.MAKHACHHANG = don_dat_hangs.MAKHACHHANG JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON JOIN mat_hangs ON chi_tiet_dat_hangs.MAHANG = mat_hangs.MAHANG JOIN nha_cung_caps ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY;
    2.17 Những mặt hàng nào chưa từng được khách hàng đặt mua?

    SELECT * FROM mat_hangs JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG=chi_tiet_dat_hangs.MAHANG WHERE SOHOADON =NULL;
    2.18 Những nhân viên nào của công ty chưa từng lập bất kỳ một hoá đơn đặt hàng nào?

    SELECT * FROM `nhan_viens` LEFT JOIN don_dat_hangs ON nhan_viens.MANHANVIEN = don_dat_hangs.MANHANVIEN WHERE SOHOADON = NULL;
    2.19 Những nhân viên nào của công ty có lương cơ bản cao nhất?

    SELECT MAX(LUONGCOBAN) FROM nhan_viens WHERE LUONGCOBAN = (SELECT MAX(LUONGCOBAN) FROM nhan_viens);
    2.20 Tổng số tiền mà khách hàng phải trả cho mỗi đơn đặt hàng là bao nhiêu?

    SELECT SUM(chi_tiet_dat_hangs.SOLUONG * GIABAN - SOLUONG * GIABAN * MUCGIAMGIA / 100) FROM chi_tiet_dat_hangs GROUP BY SOHOADON;
    2.21 Trong năm 2003, những mặt hàng nào chỉ được đặt mua đúng một lần.

    SELECT mat_hangs.* FROM mat_hangs JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG JOIN don_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON WHERE YEAR(NGAYDATHANG) = 2003 GROUP BY mat_hangs.MAHANG HAVING COUNT(chi_tiet_dat_hangs.MAHANG) = 1;
    2.22 Hãy cho biết mỗi một khách hàng đã phải bỏ ra bao nhiêu tiền để đặt mua hàng của công ty?

    SELECT SUM(chi_tiet_dat_hangs.SOLUONG * GIABAN - SOLUONG * GIABAN * MUCGIAMGIA / 100) AS TONGTIEN FROM don_dat_hangs JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON GROUP BY MAKHACHHANG;
    2.23 Mỗi một nhân viên của công ty đã lập bao nhiêu đơn đặt hàng (nếu nhân viên chưa hề lập một hoá đơn nào thì cho kết quả là 0)

    SELECT COUNT(SOHOADON) AS SOLUONGHOADON FROM nhan_viens LEFT JOIN don_dat_hangs ON nhan_viens.MANHANVIEN = don_dat_hangs.MANHANVIEN GROUP BY nhan_viens.MANHANVIEN;
   2.24 Cho biết tổng số tiền hàng mà cửa hàng thu được trong mỗi tháng của năm 2003 (thời được gian tính theo ngày đặt hàng).
 
   SELECT SUM(SOLUONG * GIABAN - SOLUONG * GIABAN * MUCGIAMGIA / 100 ) AS TONGTIEN, MONTH(NGAYDATHANG) AS THANG FROM don_dat_hangs JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON WHERE YEAR(NGAYDATHANG) = 2003 GROUP BY MONTH(NGAYDATHANG);
   2.25 Hãy cho biết tổng số tiền lời mà công ty thu được từ mỗi mặt hàng trong năm 2003.

   SELECT SUM((GIABAN - GIABAN*MUCGIAMGIA/100 - GIAHANG)*(chi_tiet_dat_hangs.SOLUONG) ) AS TIENLOI FROM chi_tiet_dat_hangs JOIN don_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON JOIN mat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG WHERE YEAR(NGAYDATHANG) = 2003 GROUP BY chi_tiet_dat_hangs.MAHANG; 
   2.26 Hãy cho biết tổng số lượng hàng của mỗi mặt hàng mà công ty đã có (tổng số lượng hàng hiện có và đã bán).

   SELECT (mat_hangs.SOLUONG + chi_tiet_dat_hangs.SOLUONG) AS TONGSOLUONG, mat_hangs.TENHANG FROM mat_hangs LEFT JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG;
   2.27 Nhân viên nào của công ty bán được số lượng hàng nhiều nhất và số lượng hàng bán được của những nhân viên này là bao nhiêu? 
 cú pháp chèn một bảng
INSERT INTO tên bảng (cột 1, cột 2, cột 3, ...) 
VALUES (giá trị 1, giá trị 2, giá trị 3, ...)
 cú pháp cập nhật dữ liệu 
 UPDATE tên bảng SET cột 1 = giá trị 1, cột 2 = giá trị 2, ... WHERE điều kiện
 cú pháp xóa dữ liệu 
 delete from tên bảng where điều kiện
 cú pháp hiện thị dữ liệu 
 select cột 1, cột 2, ... from tên bảng 
  lấy tất cả các cột trong bảng
  select * from tên bảng 
  câu lệnh join
   cú pháp inner join
   SELECT tên bảng(s)
FROM tên bảng 1
INNER JOIN tên bảng 2 ON bảng 1. tên cột  = bảng 2.tên cột;
  Left Join
SELECT tên bảng(s)
FROM   bảng  1
LEFT JOIN bảng 2 ON bảng 1.tên cột = bảng 2.tên cột ;
Right Join
 
 
  -->
