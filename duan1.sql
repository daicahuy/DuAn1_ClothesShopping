-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 10, 2024 at 04:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_binh_luan` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_binh_luan` timestamp NOT NULL DEFAULT current_timestamp(),
  `ma_san_pham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_binh_luan`, `ma_nguoi_dung`, `noi_dung`, `ngay_binh_luan`, `ma_san_pham`) VALUES
(4, 1, 'San pham qua dep', '2024-03-26 09:49:29', 1),
(5, 1, 'San pham xau qua', '2024-03-26 09:49:42', 1),
(7, 3, 'Ok đấy anh dai', '2024-04-09 08:20:18', 1),
(8, 9, 'Qua ok', '2024-04-09 10:45:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bo_suu_tap_san_pham`
--

CREATE TABLE `bo_suu_tap_san_pham` (
  `ma_bo_suu_tap` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bo_suu_tap_san_pham`
--

INSERT INTO `bo_suu_tap_san_pham` (`ma_bo_suu_tap`, `ma_san_pham`, `anh`) VALUES
(11, 11, 'collection/ao-3.avif'),
(12, 11, 'collection/ao-4.avif'),
(13, 11, 'collection/ao-5.avif'),
(16, 13, 'collection/abum2.avif'),
(17, 13, 'collection/abum1.avif'),
(18, 14, 'collection/abum5.avif'),
(19, 14, 'collection/abum4.avif');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_binh_luan`
--

CREATE TABLE `chi_tiet_binh_luan` (
  `ma_chi_tiet_binh_luan` int(11) NOT NULL,
  `ma_binh_luan` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_binh_luan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_binh_luan`
--

INSERT INTO `chi_tiet_binh_luan` (`ma_chi_tiet_binh_luan`, `ma_binh_luan`, `ma_nguoi_dung`, `noi_dung`, `ngay_binh_luan`) VALUES
(3, 4, 2, 'Xau cai gi', '2024-03-26 09:50:23'),
(4, 4, 1, 'Khong xau thi dep a', '2024-03-26 09:50:40'),
(5, 7, 3, 'được', '2024-04-09 08:20:27'),
(6, 8, 9, 'ok', '2024-04-09 10:45:57'),
(7, 8, 9, 'ok', '2024-04-09 10:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_cong`
--

CREATE TABLE `chi_tiet_cong` (
  `ma_chi_tiet_cong` int(11) NOT NULL,
  `ten_chi_tiet_cong` varchar(255) NOT NULL,
  `ma_cong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_danh_muc`
--

CREATE TABLE `chi_tiet_danh_muc` (
  `ma_danh_muc` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_danh_muc`
--

INSERT INTO `chi_tiet_danh_muc` (`ma_danh_muc`, `ma_san_pham`) VALUES
(3, 12),
(5, 1),
(1, 11),
(5, 11),
(1, 13),
(2, 14),
(6, 14);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `ma_chi_tiet_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id_don_hang`, `ma_chi_tiet_san_pham`, `so_luong`) VALUES
(17, 1, 1),
(18, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_gio_hang`
--

CREATE TABLE `chi_tiet_gio_hang` (
  `ma_gio_hang` int(11) DEFAULT NULL,
  `ma_chi_tiet_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_gio_hang`
--

INSERT INTO `chi_tiet_gio_hang` (`ma_gio_hang`, `ma_chi_tiet_san_pham`, `so_luong`) VALUES
(2, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_san_pham`
--

CREATE TABLE `chi_tiet_san_pham` (
  `ma_chi_tiet_san_pham` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `ma_kich_thuoc` int(11) DEFAULT NULL,
  `ma_mau_sac` int(11) DEFAULT NULL,
  `gia_bien_dong` int(11) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `anh_chi_tiet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`ma_chi_tiet_san_pham`, `ma_san_pham`, `ma_kich_thuoc`, `ma_mau_sac`, `gia_bien_dong`, `so_luong`, `anh_chi_tiet`) VALUES
(1, 1, 1, 1, 0, 94, 'detail_product/quan-3.avif'),
(2, 1, 2, 1, 50000, 99, 'detail_product/ao-5.avif'),
(3, 1, 3, 1, 0, 99, 'detail_product/quan-1.avif'),
(7, 11, NULL, NULL, NULL, NULL, NULL),
(8, 1, 2, 2, 0, 0, 'detail_product/ao-ngoai-1.avif'),
(9, 12, 1, 1, 10000, 11, 'detail_product/quan-6.avif'),
(10, 12, 2, 1, 40000, 50, 'detail_product/ao-ngoai-2.avif'),
(11, 13, NULL, NULL, NULL, NULL, NULL),
(12, 14, 1, 1, 30000, 12, 'detail_product/quan1.avif'),
(13, 14, 1, 2, 0, 123, 'detail_product/quan2.avif'),
(14, 14, 2, 1, 20000, 10, 'detail_product/quan1.avif'),
(15, 14, 2, 2, 10000, 20, 'detail_product/quan2.avif');

-- --------------------------------------------------------

--
-- Table structure for table `cong`
--

CREATE TABLE `cong` (
  `ma_cong` int(11) NOT NULL,
  `ten_cong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `ma_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `trang_thai` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`ma_danh_muc`, `ten_danh_muc`, `ma_loai`, `trang_thai`) VALUES
(1, 'Áo', 1, 1),
(2, 'Quần', 1, 0),
(3, 'Đồ mặc ngoài', 1, 1),
(4, 'Đồ mặc trong', 1, 1),
(5, 'Áo', 2, 1),
(6, 'Quần', 2, 1),
(7, 'Đồ mặc ngoài', 2, 1),
(8, 'Đồ mặc trong', 2, 1),
(9, 'Đầm - chân váy', 2, 0),
(10, 'Đồ mặc nhà', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `ma_don_hang` varchar(255) DEFAULT NULL,
  `ma_nguoi_dung` int(11) DEFAULT NULL,
  `ho_va_ten` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(255) NOT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `ngay_dat` timestamp NULL DEFAULT NULL,
  `ngay_thanh_toan` timestamp NULL DEFAULT NULL,
  `ma_phuong_thuc` int(11) DEFAULT NULL,
  `ma_trang_thai` int(11) DEFAULT NULL,
  `ma_tinh_trang` int(11) DEFAULT NULL,
  `tong_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id_don_hang`, `ma_don_hang`, `ma_nguoi_dung`, `ho_va_ten`, `so_dien_thoai`, `dia_chi`, `ngay_dat`, `ngay_thanh_toan`, `ma_phuong_thuc`, `ma_trang_thai`, `ma_tinh_trang`, `tong_tien`) VALUES
(17, 'FM979392', 9, 'Nguyen Huu Huy', '0943619589', 'Ha Noi', '2024-04-09 10:41:44', '2024-04-09 10:43:08', 2, 2, 4, 489000),
(18, 'LP390799', 9, 'Nguyễn Hữu Huy', '0943619586', 'Ha Noi', '2024-04-09 10:50:20', '2024-04-09 10:53:12', 1, 2, 4, 4890000);

-- --------------------------------------------------------

--
-- Table structure for table `giam_gia`
--

CREATE TABLE `giam_gia` (
  `ma_giam_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `ten_giam_gia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giam_gia`
--

INSERT INTO `giam_gia` (`ma_giam_gia`, `giam_gia`, `ten_giam_gia`) VALUES
(1, 10, 'Giảm giá 10%'),
(2, 25, 'Giảm giá 25%'),
(3, 30, 'Giảm giá 30%'),
(4, 50, 'Giảm giá 50%');

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `ma_gio_hang` int(11) NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`ma_gio_hang`, `ma_nguoi_dung`) VALUES
(3, 1),
(2, 2),
(4, 3),
(5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `kich_thuoc`
--

CREATE TABLE `kich_thuoc` (
  `ma_kich_thuoc` int(11) NOT NULL,
  `ten_kich_thuoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kich_thuoc`
--

INSERT INTO `kich_thuoc` (`ma_kich_thuoc`, `ten_kich_thuoc`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL'),
(6, 'XS');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Nam'),
(2, 'Nữ');

-- --------------------------------------------------------

--
-- Table structure for table `mau_sac`
--

CREATE TABLE `mau_sac` (
  `ma_mau_sac` int(11) NOT NULL,
  `ten_mau` varchar(255) NOT NULL,
  `ma_mau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mau_sac`
--

INSERT INTO `mau_sac` (`ma_mau_sac`, `ten_mau`, `ma_mau`) VALUES
(1, 'Màu Trắng', '#FFFFFF'),
(2, 'Màu Đen', '#2F2E33'),
(3, 'Màu Xám', '#44454D'),
(4, 'Màu Nâu', '#473737'),
(5, 'Màu Xanh', '#ABBEFA'),
(6, 'Màu Hồng', '#C6AEB0');

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `quyen` int(1) NOT NULL,
  `anh_dai_dien` varchar(255) DEFAULT 'users/avatar.jpg',
  `ho_va_ten` varchar(255) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `so_dien_thoai` varchar(255) DEFAULT NULL,
  `trang_thai` int(1) DEFAULT 1,
  `kich_hoat` tinyint(1) NOT NULL DEFAULT 0,
  `ma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_nguoi_dung`, `email`, `mat_khau`, `quyen`, `anh_dai_dien`, `ho_va_ten`, `dia_chi`, `so_dien_thoai`, `trang_thai`, `kich_hoat`, `ma`) VALUES
(1, 'abc@gmail.com', '123', 0, 'users/1-old.jpg', 'Nguyễn Văn A', 'Nhà số X Phường Y Quận Z Thành phố V', '0147852096', 1, 1, NULL),
(2, 'def@gmail.com', '123', 0, 'users/d1.jpg', 'Nguyễn Thị N', 'Nhà số D Phường E Quận Q Thành phố T', '0369852014', 1, 1, NULL),
(3, 'admin@gmail.com', 'a1', 1, 'users/d5.jpg', 'Nguyễn Văn Xếp', 'Nhà số A Phường B Quận C Thành phố Q', '0987456321', 1, 1, NULL),
(9, 'huynhph46090@fpt.edu.vn', '123456', 0, 'users/avatar.jpg', 'Nguyễn Hữu Huy', 'Ha Noi', '0943619586', 1, 1, 490804);

-- --------------------------------------------------------

--
-- Table structure for table `phuong_thuc_thanh_toan`
--

CREATE TABLE `phuong_thuc_thanh_toan` (
  `ma_phuong_thuc` int(11) NOT NULL,
  `ten_phuong_thuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phuong_thuc_thanh_toan`
--

INSERT INTO `phuong_thuc_thanh_toan` (`ma_phuong_thuc`, `ten_phuong_thuc`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Ví điện tử Momo'),
(3, 'Ví điện tử VnPay'),
(4, 'Ví điện tử Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `trang_thai` int(11) NOT NULL,
  `luot_mua` int(11) DEFAULT 0,
  `gia` int(11) NOT NULL,
  `ma_giam_gia` int(11) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `anh`, `mo_ta`, `trang_thai`, `luot_mua`, `gia`, `ma_giam_gia`, `so_luong`) VALUES
(1, 'Áo Polo Vải Dry Pique Ngắn Tay (Kẻ Sọc)', 'products/ao-len-co-mu.avif', 'Mềm mại và mịn màng với kết cấu đẹp mắt. Cổ áo có đường viền với nút trên cùng được cài hoặc mở.', 1, 0, 489000, NULL, NULL),
(11, 'Áo Sơ Mi Extra Fine Cotton Dài Tay', 'products/ao-2.avif', '<p data-sider-select-id=\"3e50e554-7351-4abd-a263-952097d51ff3\">456798</p><p data-sider-select-id=\"3e50e554-7351-4abd-a263-952097d51ff3\">646</p>', 1, 0, 350000, NULL, 18),
(12, 'Áo Thun Vải Slub Cotton Cổ Tròn Ngắn Tay (Họa Tiết Kẻ Sọc)', 'products/quan-5.avif', '<p data-sider-select-id=\"70894716-21e3-4108-b5f1-055e801fdabd\">1</p>', 1, 0, 50000, 1, NULL),
(13, 'Áo Bra Lửng Không Tay', 'products/ao1.avif', '<p><span style=\"color: rgb(27, 27, 27);\">Cúp áo ngực tích hợp có thể mặc riêng hoặc kết hợp như chiễ áo ngực thông thường. Thiết kế phong cách thể thao giúp bạn không lo về dây áo.</span></p>', 1, 0, 293000, NULL, 8),
(14, 'Quần Dài Dáng Parachute Lửng', 'products/ao12.avif', '<p>- Chất liệu vải pha cotton-nylon nhẹ.</p><p>- Đã cắt bớt chiều dài.</p><p>- Hình bóng cong.</p><p>- Nút cài giấu kín và dây rút bên trong ở thắt lưng.</p><p>- Thắt lưng phía trước.</p><p>- Có 2 túi bên hông và 2 túi sau.</p><p>- Hai nút bấm cho phép bạn điều chỉnh viền áo. *Màu #30 hơi trong. Bạn nên mặc quần lót hoặc quần lót có tông màu da.</p><p><br></p>', 1, 0, 980000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tinh_trang`
--

CREATE TABLE `tinh_trang` (
  `ma_tinh_trang` int(11) NOT NULL,
  `ten_tinh_trang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tinh_trang`
--

INSERT INTO `tinh_trang` (`ma_tinh_trang`, `ten_tinh_trang`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đang đóng gói'),
(3, 'Đang vận chuyển'),
(4, 'Đơn thành công'),
(5, 'Đơn hủy');

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai_thanh_toan`
--

CREATE TABLE `trang_thai_thanh_toan` (
  `ma_trang_thai` int(11) NOT NULL,
  `ten_trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trang_thai_thanh_toan`
--

INSERT INTO `trang_thai_thanh_toan` (`ma_trang_thai`, `ten_trang_thai`) VALUES
(1, 'Chưa thanh toán'),
(2, 'Đã thanh toán');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_binh_luan`),
  ADD KEY `BinhLuan_NguoiDung` (`ma_nguoi_dung`),
  ADD KEY `BinhLuan_SanPham` (`ma_san_pham`);

--
-- Indexes for table `bo_suu_tap_san_pham`
--
ALTER TABLE `bo_suu_tap_san_pham`
  ADD PRIMARY KEY (`ma_bo_suu_tap`),
  ADD KEY `BoSuuTapSanPham_SanPham` (`ma_san_pham`);

--
-- Indexes for table `chi_tiet_binh_luan`
--
ALTER TABLE `chi_tiet_binh_luan`
  ADD PRIMARY KEY (`ma_chi_tiet_binh_luan`),
  ADD KEY `ChiTietBinhLuan_BinhLuan` (`ma_binh_luan`),
  ADD KEY `ChiTietBinhLuan_NguoiDung` (`ma_nguoi_dung`);

--
-- Indexes for table `chi_tiet_cong`
--
ALTER TABLE `chi_tiet_cong`
  ADD PRIMARY KEY (`ma_chi_tiet_cong`),
  ADD KEY `ChiTietCong_Cong` (`ma_cong`);

--
-- Indexes for table `chi_tiet_danh_muc`
--
ALTER TABLE `chi_tiet_danh_muc`
  ADD KEY `ChiTietDanhMuc_DanhMuc` (`ma_danh_muc`),
  ADD KEY `ChiTietDanhMuc_SanPham` (`ma_san_pham`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD KEY `ChiTietDonHang_DonHang` (`id_don_hang`),
  ADD KEY `ChiTietDonHang_ChiTietSanPham` (`ma_chi_tiet_san_pham`);

--
-- Indexes for table `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD KEY `ChiTietGioHang_GioHang` (`ma_gio_hang`),
  ADD KEY `ChiTietGioHang_ChiTietSanPham` (`ma_chi_tiet_san_pham`);

--
-- Indexes for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD PRIMARY KEY (`ma_chi_tiet_san_pham`),
  ADD KEY `ChiTietSanPham_SanPham` (`ma_san_pham`),
  ADD KEY `ChiTietSanPham_KichThuoc` (`ma_kich_thuoc`),
  ADD KEY `ChiTietSanPham_MauSac` (`ma_mau_sac`);

--
-- Indexes for table `cong`
--
ALTER TABLE `cong`
  ADD PRIMARY KEY (`ma_cong`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma_danh_muc`),
  ADD KEY `DanhMuc_Loai` (`ma_loai`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_don_hang`);

--
-- Indexes for table `giam_gia`
--
ALTER TABLE `giam_gia`
  ADD PRIMARY KEY (`ma_giam_gia`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`ma_gio_hang`),
  ADD KEY `GioHang_NguoiDung` (`ma_nguoi_dung`);

--
-- Indexes for table `kich_thuoc`
--
ALTER TABLE `kich_thuoc`
  ADD PRIMARY KEY (`ma_kich_thuoc`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `mau_sac`
--
ALTER TABLE `mau_sac`
  ADD PRIMARY KEY (`ma_mau_sac`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `phuong_thuc_thanh_toan`
--
ALTER TABLE `phuong_thuc_thanh_toan`
  ADD PRIMARY KEY (`ma_phuong_thuc`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`),
  ADD UNIQUE KEY `ten_san_pham` (`ten_san_pham`);

--
-- Indexes for table `tinh_trang`
--
ALTER TABLE `tinh_trang`
  ADD PRIMARY KEY (`ma_tinh_trang`);

--
-- Indexes for table `trang_thai_thanh_toan`
--
ALTER TABLE `trang_thai_thanh_toan`
  ADD PRIMARY KEY (`ma_trang_thai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bo_suu_tap_san_pham`
--
ALTER TABLE `bo_suu_tap_san_pham`
  MODIFY `ma_bo_suu_tap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `chi_tiet_binh_luan`
--
ALTER TABLE `chi_tiet_binh_luan`
  MODIFY `ma_chi_tiet_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chi_tiet_cong`
--
ALTER TABLE `chi_tiet_cong`
  MODIFY `ma_chi_tiet_cong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  MODIFY `ma_chi_tiet_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cong`
--
ALTER TABLE `cong`
  MODIFY `ma_cong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `ma_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `giam_gia`
--
ALTER TABLE `giam_gia`
  MODIFY `ma_giam_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `ma_gio_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kich_thuoc`
--
ALTER TABLE `kich_thuoc`
  MODIFY `ma_kich_thuoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mau_sac`
--
ALTER TABLE `mau_sac`
  MODIFY `ma_mau_sac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `phuong_thuc_thanh_toan`
--
ALTER TABLE `phuong_thuc_thanh_toan`
  MODIFY `ma_phuong_thuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tinh_trang`
--
ALTER TABLE `tinh_trang`
  MODIFY `ma_tinh_trang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trang_thai_thanh_toan`
--
ALTER TABLE `trang_thai_thanh_toan`
  MODIFY `ma_trang_thai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `BinhLuan_NguoiDung` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoi_dung` (`ma_nguoi_dung`),
  ADD CONSTRAINT `BinhLuan_SanPham` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`);

--
-- Constraints for table `bo_suu_tap_san_pham`
--
ALTER TABLE `bo_suu_tap_san_pham`
  ADD CONSTRAINT `BoSuuTapSanPham_SanPham` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`);

--
-- Constraints for table `chi_tiet_binh_luan`
--
ALTER TABLE `chi_tiet_binh_luan`
  ADD CONSTRAINT `ChiTietBinhLuan_BinhLuan` FOREIGN KEY (`ma_binh_luan`) REFERENCES `binh_luan` (`ma_binh_luan`),
  ADD CONSTRAINT `ChiTietBinhLuan_NguoiDung` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoi_dung` (`ma_nguoi_dung`);

--
-- Constraints for table `chi_tiet_cong`
--
ALTER TABLE `chi_tiet_cong`
  ADD CONSTRAINT `ChiTietCong_Cong` FOREIGN KEY (`ma_cong`) REFERENCES `cong` (`ma_cong`);

--
-- Constraints for table `chi_tiet_danh_muc`
--
ALTER TABLE `chi_tiet_danh_muc`
  ADD CONSTRAINT `ChiTietDanhMuc_DanhMuc` FOREIGN KEY (`ma_danh_muc`) REFERENCES `danh_muc` (`ma_danh_muc`),
  ADD CONSTRAINT `ChiTietDanhMuc_SanPham` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`);

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `ChiTietDonHang_ChiTietSanPham` FOREIGN KEY (`ma_chi_tiet_san_pham`) REFERENCES `chi_tiet_san_pham` (`ma_chi_tiet_san_pham`),
  ADD CONSTRAINT `ChiTietDonHang_DonHang` FOREIGN KEY (`id_don_hang`) REFERENCES `don_hang` (`id_don_hang`);

--
-- Constraints for table `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD CONSTRAINT `ChiTietGioHang_ChiTietSanPham` FOREIGN KEY (`ma_chi_tiet_san_pham`) REFERENCES `chi_tiet_san_pham` (`ma_chi_tiet_san_pham`),
  ADD CONSTRAINT `ChiTietGioHang_GioHang` FOREIGN KEY (`ma_gio_hang`) REFERENCES `gio_hang` (`ma_gio_hang`);

--
-- Constraints for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD CONSTRAINT `ChiTietSanPham_KichThuoc` FOREIGN KEY (`ma_kich_thuoc`) REFERENCES `kich_thuoc` (`ma_kich_thuoc`),
  ADD CONSTRAINT `ChiTietSanPham_MauSac` FOREIGN KEY (`ma_mau_sac`) REFERENCES `mau_sac` (`ma_mau_sac`),
  ADD CONSTRAINT `ChiTietSanPham_SanPham` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`);

--
-- Constraints for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD CONSTRAINT `DanhMuc_Loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `GioHang_NguoiDung` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoi_dung` (`ma_nguoi_dung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
