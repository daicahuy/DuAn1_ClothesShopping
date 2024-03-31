SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- TẠO BẢNG LOẠI
CREATE TABLE `Loai` (
    `ma_loai` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ten_loai` varchar(255) NOT NULL
);

INSERT INTO `Loai` VALUES
(NULL, 'Nam'),
(NULL, 'Nữ');


-- TẠO BẢNG DANH MỤC
CREATE TABLE `Danh_Muc` (
    `ma_danh_muc` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ten_danh_muc` varchar(255) NOT NULL,
    `ma_loai` int(11) NOT NULL,
    `trang_thai` int(1) DEFAULT 1
);
INSERT INTO `Danh_Muc`(`ma_danh_muc`, `ten_danh_muc`, `ma_loai`) 
VALUES 
(NULL,'Áo','1'),
(NULL,'Quần','1'),
(NULL,'Đồ mặc ngoài','1'),
(NULL,'Đồ mặc trong','1'),
(NULL,'Áo','2'),  
(NULL,'Quần','2'), 
(NULL,'Đồ mặc ngoài','2'), 
(NULL,'Đồ mặc trong','2'), 
(NULL,'Đầm - chân váy','2'), 
(NULL,'Đồ mặc nhà','2'); 


-- TẠO BẢNG CHI TIẾT DANH MỤC
CREATE TABLE `Chi_Tiet_Danh_Muc` (
    `ma_danh_muc` int(11) NOT NULL,
    `ma_san_pham` int(11) NOT NULL
);
INSERT INTO `Chi_Tiet_Danh_Muc`(`ma_danh_muc`, `ma_san_pham`) VALUES
-- Nam 

-- ÁO 
 ('1','1'),
 ('1','2'),
 ('2','3');

CREATE TABLE `San_Pham` (
    `ma_san_pham` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ten_san_pham` varchar(255) UNIQUE NOT NULL,
    `anh` varchar(255) NOT NULL,
    `mo_ta` text NULL,
    `trang_thai` int NOT NULL,
    `luot_mua` int DEFAULT 0,
    `gia` int NOT NULL,
    `ma_giam_gia` int NULL,
    `so_luong` int NULL
);
--  (NULL,'ten','products/anh.jpg','mota','1','[value-6]','000',NULL),

INSERT INTO `San_Pham` VALUES
                                                                    -- Nam 
-- áo 
 (NULL,'Áo Polo Vải Dry Pique Ngắn Tay (Kẻ Sọc)','products/anh.jpg','Mềm mại và mịn màng với kết cấu đẹp mắt. Cổ áo có đường viền với nút trên cùng được cài hoặc mở.','1','[value-6]','489000',NULL, NULL),
 (NULL,'DRY-EX Áo Thun Ngắn Tay','products/anh.jpg','Nhanh khô để giữ cho bạn cảm giác tươi mát. Thích hợp mặc khi chơi thể thao hoặc mặc thường ngày','1','[value-6]','391000',2,1),
 (NULL,'Áo Thun Vải Slub Cotton Cổ Tròn Ngắn Tay (Họa Tiết Kẻ Sọc)','products/anh.jpg','Được giặt trước để có cảm giác bình thường. Mẫu sọc đa năng.','1','[value-6]','421000', NULL,   200);
-- quần
-- (NULL,'Quần Short Thể Thao Siêu Co Giãn','products/anh.jpg','Độ giãn đáng kinh ngạc để tự do di chuyển. Vải mịn và nhanh khô.','1','[value-6]','489000',NULL),
-- (NULL,'Miracle Air Quần Short','products/anh.jpg','Quần short hiệu suất cao được làm bằng vải nhẹ, co giãn và nhanh khô. Chống nhăn để dễ dàng chăm sóc.','1','[value-6]','784000',NULL),
-- (NULL,'Quần Short Parachute Túi Hộp (Cargo)','products/anh.jpg','Vải dày tạo ra một phong cách riêng. Được tạo điểm nhấn bởi túi lớn và kiểu dáng rộng.','1','[value-6]','588000',NULL),
-- (NULL,'Miracle Air Quần Dài (AirSense Quần Dài) (Vải Lai Cotton)','products/anh.jpg','Nhẹ và co giãn đáng kinh ngạc cho bạn cảm giác luôn thoáng mát. Quần thoải mái, hiệu suất cao phù hợp cho mọi dịp.Nhẹ và co giãn đáng kinh ngạc cho bạn cảm giác luôn thoáng mát. Quần thoải mái, hiệu suất cao phù hợp cho mọi dịp.','1','[value-6]','980000',NULL),
-- -- Đồ mặc ngoài
-- (NULL,'Áo Gi-Lê Đa Năng','products/anh.jpg','Kết cấu tự nhiên. Thiết kế thực tế với nhiều túi.','1','[value-6]','784000',NULL),
-- (NULL,'Áo Khoác Kéo Khóa','products/anh.jpg','Sợi slub thông thường. Đường cắt rộng rãi, quá khổ.','1','[value-6]','1275000',NULL),
-- (NULL,'Áo Khoác Có Mũ Đa Năng','products/anh.jpg','Túi thực tế với nhiều khả năng lưu trữ. Bộ điều chỉnh viền cho phép bạn điều chỉnh hình bóng.','1','[value-6]','1471000',NULL),
-- (NULL,'Áo Parka Hai Mặt','products/anh.jpg','Thiết kế hai mặt. Lớp lót mềm mại và thoải mái với lớp ngoài chống bám nước.','1','[value-6]','980000',NULL),
-- -- Đồ mặc trong
-- (NULL,'AIRism Quần Lót Boxer Brief Cạp Thấp','products/anh.jpg','AIRism mượt mà mang lại cảm giác thoải mái, thoáng mát. Thiết kế cạp thấp đẹp mắt.','1','[value-6]','244000',NULL),
-- (NULL,'AIRism Quần Boxer Brief Không Đường May (In Họa Tiết)','products/anh.jpg','AIRism mượt mà được tích hợp nhiều tính năng tiện nghi. Thiết kế liền mạch và vải co giãn cho vừa vặn thoải mái.','1','[value-6]','255000',NULL),
-- (NULL,'AIRism Áo Thun Cổ V Ngắn Tay','products/anh.jpg','Được trang bị các tính năng tiện nghi giúp bạn luôn cảm thấy thoải mái. Cổ chữ V sâu ẩn dưới lớp áo sơ mi của bạn.','1','[value-6]','224000',NULL),
-- (NULL,'AIRism Áo Ba Lỗ Vải Mắt Lưới','products/anh.jpg','Chất liệu AIRism hiệu suất cao mang lại cảm giác thoải mái. Lưới thoáng khí.','1','[value-6]','244000',NULL),
--                                                                     -- Nữ
-- -- áo 
-- (NULL,'Áo Thun SUPIMA COTTON Cổ Tròn Ngắn Tay','products/anh.jpg','100% bông SUPIMA® cao cấp. Phần thân và tay áo dài hơn một chút tạo cảm giác tôn dáng.','1','[value-6]','293000',NULL),
-- (NULL,'AIRism Áo Thun Chống UV Dài Tay (Chống Nắng)','products/anh.jpg','Mềm mịn và siêu co giãn. Một cách dễ dàng để bảo vệ làn da của bạn khỏi ánh nắng mặt trời.','1','[value-6]','489000',NULL),
-- (NULL,'AIRism Cotton Áo Thun Dáng Relax Ngắn Tay','products/anh.jpg','Vải AIRism mịn có vẻ ngoài như cotton. Kiểu cắt hình hộp, thư giãn.','1','[value-6]','391000',NULL),
-- (NULL,'Áo Thun Cổ Tròn Ngắn Tay','products/anh.jpg','Chất vải và đường may đẹp mắt, tỉ mỉ. Cho bạn cảm giác mịn màng của 100% cotton.','1','[value-6]','293000',NULL),
-- -- quần 
-- (NULL,'Quần Dài Dáng Parachute Lửng','products/anh.jpg','Đường cắt cong với những nếp gấp lớn đặc biệt. Chiều dài cắt kiểu dáng đẹp.','1','[value-6]','980000',NULL),
-- (NULL,'Quần Jeans Dáng Suông Rộng','products/anh.jpg','Chiều rộng tôn dáng, đường cắt thẳng. Chất jeans 100% cotton mềm mại và thoải mái.','1','[value-6]','979000',NULL),
-- (NULL,'Quần Easy Short Vải Cotton','products/anh.jpg','Đơn giản, dễ dàng phối đồ và đầy phong cách. Tất cả được gói gọn trong thiết kế quần short kiểu dáng thoải mái.','1','[value-6]','391000',NULL),
-- -- đồ mặc ngoài 
-- (NULL,'AIRism Áo Khoác Khóa Kéo Chống UV Vải Mắt Lưới (Chống Nắng)','products/anh.jpg','Hoodie lưới cập nhật với thiết kế bỏ túi. Một chiếc áo khoác tiện dụng và đa năng bạn có thể mang theo bất cứ nơi nào. UPF50+.','1','[value-6]','686000',NULL),
-- (NULL,'Áo Khoác Không Tay','products/anh.jpg','Chất liệu vải mềm mại cho phong cách tinh tế. Thiết kế cổ chữ V thanh lịch.','1','[value-6]','980000',NULL),
-- (NULL,'Áo Khoác Dáng Rộng Cổ Đứng','products/anh.jpg','Chất liệu cotton-nylon chống bám nước. Kiểu dáng rộng (oversized) cho bạn phong cách thoải mái.','1','[value-6]','1471000',NULL),
-- (NULL,'Áo Khoác Vải Jersey Dáng Relax','products/anh.jpg','Kiểu dáng và chất liệu vải thoải mái. Chiều dài được thiết kế ngắn hơn kết hợp hoàn hảo với bất kỳ chiếc quần nào.','1','[value-6]','784000',NULL),
-- -- đồ mặc trong 
-- (NULL,'Áo Ngực Không Gọng (Ultra Relax)','products/anh.jpg','Chất vải co giãn siêu mỏng và tấm đệm giúp nâng đỡ nhẹ nhàng. Thiết kế liền mạch giúp không bị lộ khi mặc áo.','1','[value-6]','489000',NULL),
-- (NULL,'AIRism Áo Bra Hai Dây','products/anh.jpg','Tôn dáng với cúp ngực tích hợp. Không có dải lót ở phía sau để tạo vẻ phẳng, bóng bẩy.','1','[value-6]','489000',NULL),
-- (NULL,'Áo Bra Hai Dây Dáng Ngắn Không Đường May','products/anh.jpg','Tôn dáng với cúp ngực tích hợp. Thiết kế liền mạch tạo sự vừa vặn thoải mái.','1','[value-6]','489000',NULL),
-- (NULL,'AIRism Áo Bra Hai Dây','products/anh.jpg','Cập nhật phù hợp với các chi tiết tinh chỉnh. Thiết kế viền ở phía sau cho kiểu dáng đẹp.','1','[value-6]','489000',NULL),
-- -- Đầm & Chân váy
-- (NULL,'Đầm Vải Cotton Nhẹ Không Tay','products/anh.jpg','Chất liệu 100% cotton mang lại cảm giác nhẹ nhàng, thoải mái. Kiểu dáng chữ A phồng.','1','[value-6]','980000',NULL),
-- (NULL,'AIRism Cotton Đầm Thun Ngắn Tay','products/anh.jpg','Vải AIRism mịn màng có vẻ ngoài như cotton. Đường cắt chữ A tôn dáng.','1','[value-6]','588000',NULL),
-- (NULL,'Chân Váy Dài Vải Denim','products/anh.jpg','Chất jean 100% cotton. Thiết kế cạp cao tạo hiệu ứng tôn dáng','1','[value-6]','784000',NULL),
-- (NULL,'AIRism Chân Váy Siêu Co Giãn Dáng Dài','products/anh.jpg','Vải khô nhanh, dễ di chuyển. Kiểu dáng dài cho vẻ ngoài xinh xắn.','1','[value-6]','588000',NULL),
-- -- đồ mặc nhà 
-- (NULL,'Bộ Pyjama Vải Linen Pha (Ngắn Tay)','products/anh.jpg','Chất liệu vải pha linen mát mẻ. Kiểu dáng thoải mái.','1','[value-6]','588000',NULL),
-- (NULL,'miffy Bộ Mặc Nhà Ngắn Tay','products/anh.jpg','Bộ mặc nhà nay đã có mặt với sự kết hợp cùng miffy.','1','[value-6]','588000',NULL),
-- (NULL,'AIRism Cotton Bộ Pyjama Ngắn Tay','products/anh.jpg','Vải AIRism mịn có vẻ ngoài như cotton. Bộ đồ ngủ thoải mái với cảm giác luôn tươi mới.','1','[value-6]','588000',NULL),
-- (NULL,'Bộ Pyjama Ngắn Tay','products/anh.jpg','Chất vải nhẹ, không bết dính. Hoàn hảo để thư giãn.','1','[value-6]','588000',NULL);
-- Ma bo suu tap 
CREATE TABLE `Bo_Suu_Tap_San_Pham` (
    `ma_bo_suu_tap` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ma_san_pham` int(11) NOT NULL, -- FK
    `anh` varchar(255) NOT NULL
);
--  Ma giam gia 
CREATE TABLE `Giam_Gia` (
    `ma_giam_gia` int(11) AUTO_INCREMENT PRIMARY KEY,
    `giam_gia` int(11) NOT NULL,
    `ten_giam_gia` varchar(255) NOT NULL
);

INSERT INTO `giam_gia` (`ma_giam_gia`, `giam_gia`, `ten_giam_gia`) VALUES
(1, 10, 'Giảm giá 10%'),
(2, 25, 'Giảm giá 25%'),
(3, 30, 'Giảm giá 30%'),
(4, 50, 'Giảm giá 50%');

-- Chi tiet san pham 
CREATE TABLE `Chi_Tiet_San_Pham` (
    `ma_chi_tiet_san_pham` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ma_san_pham` int(11) NOT NULL,
    `ma_kich_thuoc` int(11) NULL,
    `ma_mau_sac` int(11) NULL,
    `gia_bien_dong` int NULL,
    `so_luong` int NULL,
    `anh_chi_tiet` varchar(255) NULL
);

-- (NULL,'idSP','1','1','000','99','detail_product/anh.jpg'),
INSERT INTO `Chi_Tiet_San_Pham`
(`ma_chi_tiet_san_pham`, `ma_san_pham`, `ma_kich_thuoc`, `ma_mau_sac`, `gia_bien_dong`, `so_luong`, `anh_chi_tiet`) VALUES 
(NULL,'1','1','1','0','99','detail_product/anh.jpg'),
(NULL,'1','2','1','30000','99','detail_product/anh.jpg'),
(NULL,'1','3','1','30000','99','detail_product/anh.jpg');
-- Kich thuoc 
CREATE TABLE `Kich_Thuoc` (
    `ma_kich_thuoc` int(11) AUTO_INCREMENT  PRIMARY KEY, -- FK
    `ten_kich_thuoc` varchar(255) NOT NULL
);
INSERT INTO `Kich_Thuoc`(`ma_kich_thuoc`, `ten_kich_thuoc`) VALUES 
(NULL,'S'),
(NULL,'M'),
(NULL,'L'),
(NULL,'XL'),
(NULL,'XXL'),
(NULL,'XS');
-- Mau sac 
CREATE TABLE `Mau_Sac` (
    `ma_mau_sac` int(11) AUTO_INCREMENT  PRIMARY KEY, -- FK
    `ten_mau` varchar(255) NOT NULL,
    `ma_mau` varchar(255) NOT NULL
);
INSERT INTO `Mau_Sac`(`ma_mau_sac`, `ten_mau`, `ma_mau`) VALUES
 (NULL,'Màu Trắng','#FFFFFF'),
 (NULL,'Màu Đen','#2F2E33'),
 (NULL,'Màu Xám','#44454D'),
 (NULL,'Màu Nâu','#473737'),
 (NULL,'Màu Xanh','#ABBEFA'),
 (NULL,'Màu Hồng','#C6AEB0');
-- Nguoi dung 
CREATE TABLE `Nguoi_Dung`(
    `ma_nguoi_dung` int(11) AUTO_INCREMENT PRIMARY KEY,
    `email` varchar(255) NOT NULL UNIQUE,
    `mat_khau` varchar(255) NOT NULL,
    `quyen` int(1) NOT NULL,
    `anh_dai_dien` varchar(255) DEFAULT "users/avatar.jpg",
    `ho_va_ten` varchar(255) NULL,
    `dia_chi` varchar(255) NULL,
    `so_dien_thoai` varchar(255) NULL,
    `trang_thai` int(1) DEFAULT 1,
    `kich_hoat` BOOLEAN DEFAULT FALSE,
    `ma` int(11) NULL
);
INSERT INTO `Nguoi_Dung`
 VALUES 
 (NULL,'abc@gmail.com','123','0','users/1-old.jpg','Nguyễn Văn A','Nhà số X Phường Y Quận Z Thành phố V','0147852096',NULL,TRUE,NULL),
 (NULL,'def@gmail.com','456','0','users/d1.jpg','Nguyễn Thị N','Nhà số D Phường E Quận Q Thành phố T','0369852014',NULL,TRUE,NULL),
 (NULL,'admin@gmail.com','789','1','users/d5.jpg','Nguyễn Văn Xếp','Nhà số A Phường B Quận C Thành phố Q','0987456321',NULL,TRUE,NULL);


-- Gio hang
CREATE TABLE `Gio_Hang`(
    `ma_gio_hang` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ma_nguoi_dung` int(11) NOT NULL
);

--  Chi tiet gio hang 
CREATE TABLE `Chi_Tiet_Gio_Hang`(
    `ma_gio_hang` int(11),
    `ma_chi_tiet_san_pham` int(11) NOT NULL,
    `so_luong` int(11) NOT NULL
);

-- BINH LUAN
CREATE TABLE `Binh_Luan`(
    `ma_binh_luan` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ma_nguoi_dung` int(11) NOT NULL,
    `noi_dung` varchar(255) NOT NULL,
    `ngay_binh_luan` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `ma_san_pham` int(11) NOT NULL
);

-- CHI TIET BINH LUAN 
CREATE TABLE `Chi_Tiet_Binh_Luan`(
    `ma_chi_tiet_binh_luan` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ma_binh_luan` int(11) NOT NULL,
    `ma_nguoi_dung` int(11) NOT NULL,
    `noi_dung` varchar(255) NOT NULL,
    `ngay_binh_luan` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- DON HANG
CREATE TABLE `Don_Hang`(
    `id_don_hang` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ma_don_hang` varchar(255) NULL,
    `ma_nguoi_dung` int(11) NULL,
    `ho_va_ten` varchar(255) NOT NULL,
    `so_dien_thoai` varchar(255) NOT NULL,
    `dia_chi` varchar(255) NULL,
    `ngay_dat` TIMESTAMP NULL,
    `ngay_thanh_toan` TIMESTAMP NULL,
    `ma_phuong_thuc` int(11) NULL,
    `ma_trang_thai` int(11) NULL,
    `ma_tinh_trang` int(11) NULL,
    `tong_tien` int NOT NULL
);

CREATE TABLE `Phuong_Thuc_Thanh_Toan`(
    `ma_phuong_thuc` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ten_phuong_thuc` varchar(255) NOT NULL
);
INSERT INTO `Phuong_Thuc_Thanh_Toan`(`ma_phuong_thuc`, `ten_phuong_thuc`) VALUES 
(NULL,'Thanh toán khi nhận hàng'),
(NULL,'Ví Momo');

CREATE TABLE `Trang_Thai_Thanh_Toan` (
    `ma_trang_thai` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ten_trang_thai` varchar(255) NOT NULL
);
INSERT INTO `Trang_Thai_Thanh_Toan`(`ma_trang_thai`, `ten_trang_thai`) VALUES 
(NULL,'Chưa thanh toán'),
(NULL,'Đã thanh toán');

CREATE TABLE `Chi_Tiet_Don_Hang`(
    `id_don_hang` int(11) NOT NULL,
    `ma_chi_tiet_san_pham` int(11) NOT NULL,
    `so_luong` int(11) NOT NULL
);


CREATE TABLE `Tinh_Trang` (
    `ma_tinh_trang` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ten_tinh_trang` varchar(255) NOT NULL
);
INSERT INTO `Tinh_Trang`(`ma_tinh_trang`, `ten_tinh_trang`) VALUES
 (NULL,'Đang đóng gói'),
 (NULL,'Đang vận chuyển'),
 (NULL,'Giao hàng thành công'),
 (NULL,'Giao hàng thất bại');

CREATE TABLE `Cong` (
    `ma_cong` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ten_cong` varchar(255) NOT NULL
);


CREATE TABLE `Chi_Tiet_Cong` (
    `ma_chi_tiet_cong` int(11) AUTO_INCREMENT PRIMARY KEY,
    `ten_chi_tiet_cong` varchar(255) NOT NULL,
    `ma_cong` int(11) NOT NULL
);


ALTER TABLE `Danh_Muc`
ADD CONSTRAINT `DanhMuc_Loai`
FOREIGN KEY (`ma_loai`) REFERENCES Loai(`ma_loai`);

ALTER TABLE `Chi_Tiet_Danh_Muc`
ADD CONSTRAINT `ChiTietDanhMuc_DanhMuc`
FOREIGN KEY (`ma_danh_muc`) REFERENCES Danh_Muc(`ma_danh_muc`);

ALTER TABLE `Chi_Tiet_Danh_Muc`
ADD CONSTRAINT `ChiTietDanhMuc_SanPham`
FOREIGN KEY (`ma_san_pham`) REFERENCES San_Pham(`ma_san_pham`);


ALTER TABLE `Bo_Suu_Tap_San_Pham`
ADD CONSTRAINT `BoSuuTapSanPham_SanPham`
FOREIGN KEY (`ma_san_pham`) REFERENCES San_Pham(`ma_san_pham`);

ALTER TABLE `Chi_Tiet_San_Pham`
ADD CONSTRAINT `ChiTietSanPham_SanPham`
FOREIGN KEY (`ma_san_pham`) REFERENCES San_Pham(`ma_san_pham`);

ALTER TABLE `Chi_Tiet_San_Pham`
ADD CONSTRAINT `ChiTietSanPham_KichThuoc`
FOREIGN KEY (`ma_kich_thuoc`) REFERENCES Kich_Thuoc(`ma_kich_thuoc`);

ALTER TABLE `Chi_Tiet_San_Pham`
ADD CONSTRAINT `ChiTietSanPham_MauSac`
FOREIGN KEY (`ma_mau_sac`) REFERENCES Mau_Sac(`ma_mau_sac`);

ALTER TABLE `Gio_Hang`
ADD CONSTRAINT `GioHang_NguoiDung`
FOREIGN KEY (`ma_nguoi_dung`) REFERENCES Nguoi_Dung(`ma_nguoi_dung`);

ALTER TABLE `Chi_Tiet_Gio_Hang`
ADD CONSTRAINT `ChiTietGioHang_GioHang`
FOREIGN KEY (`ma_gio_hang`) REFERENCES Gio_Hang(`ma_gio_hang`);

ALTER TABLE `Chi_Tiet_Gio_Hang`
ADD CONSTRAINT `ChiTietGioHang_ChiTietSanPham`
FOREIGN KEY (`ma_chi_tiet_san_pham`) REFERENCES Chi_Tiet_San_Pham(`ma_chi_tiet_san_pham`);

ALTER TABLE `Binh_Luan`
ADD CONSTRAINT `BinhLuan_NguoiDung`
FOREIGN KEY (`ma_nguoi_dung`) REFERENCES Nguoi_Dung(`ma_nguoi_dung`);

ALTER TABLE `Binh_Luan`
ADD CONSTRAINT `BinhLuan_SanPham`
FOREIGN KEY (`ma_san_pham`) REFERENCES San_Pham(`ma_san_pham`);

ALTER TABLE `Chi_Tiet_Binh_Luan`
ADD CONSTRAINT `ChiTietBinhLuan_BinhLuan`
FOREIGN KEY (`ma_binh_luan`) REFERENCES Binh_Luan(`ma_binh_luan`);

ALTER TABLE `Chi_Tiet_Binh_Luan`
ADD CONSTRAINT `ChiTietBinhLuan_NguoiDung`
FOREIGN KEY (`ma_nguoi_dung`) REFERENCES Nguoi_Dung(`ma_nguoi_dung`);

ALTER TABLE `Chi_Tiet_Cong`
ADD CONSTRAINT `ChiTietCong_Cong`
FOREIGN KEY (`ma_cong`) REFERENCES Cong(`ma_cong`);

ALTER TABLE `Chi_Tiet_Don_Hang`
ADD CONSTRAINT `ChiTietDonHang_DonHang`
FOREIGN KEY (`id_don_hang`) REFERENCES Don_Hang(`id_don_hang`);

ALTER TABLE `Chi_Tiet_Don_Hang`
ADD CONSTRAINT `ChiTietDonHang_ChiTietSanPham`
FOREIGN KEY (`ma_chi_tiet_san_pham`) REFERENCES Chi_Tiet_San_Pham(`ma_chi_tiet_san_pham`);

