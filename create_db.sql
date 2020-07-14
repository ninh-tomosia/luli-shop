-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 04:08 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidang`
--

CREATE TABLE `baidang` (
  `mabaidang` bigint(20) NOT NULL,
  `masp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` datetime NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `trangthai_db` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baidang`
--

INSERT INTO `baidang` (`mabaidang`, `masp`, `ngaydang`, `noidung`, `trangthai_db`) VALUES
(1, 'SP01', '2020-06-18 14:34:48', 'test', 1),
(2, 'SP02', '2020-06-24 23:05:28', 'test', 1),
(3, 'SP03', '2020-06-24 23:15:21', 'none', 1),
(4, 'SP04', '2020-06-24 23:24:32', 'none', 1),
(5, 'SP05', '2020-06-24 23:24:32', 'none', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `mactdh` bigint(20) NOT NULL,
  `madh` bigint(20) NOT NULL,
  `masp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydat` date NOT NULL,
  `size` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `makm` int(11) DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`mactdh`, `madh`, `masp`, `ngaydat`, `size`, `soluong`, `thanhtien`, `makm`, `trangthai`) VALUES
(22, 16, 'SP01', '2020-07-11', 35, 2, 1780000, NULL, 1),
(23, 16, 'SP03', '2020-07-11', 35, 1, 250000, NULL, 1),
(24, 16, 'SP02', '2020-07-11', 35, 1, 549000, NULL, 1),
(25, 17, 'SP02', '2020-07-11', 35, 1, 549000, NULL, 1),
(26, 17, 'SP04', '2020-07-11', 35, 1, 550000, NULL, 1),
(27, 17, 'SP05', '2020-07-11', 35, 1, 360000, NULL, 1),
(28, 18, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(29, 19, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(30, 20, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(31, 21, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(32, 22, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(33, 23, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(34, 24, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(35, 25, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(36, 26, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(37, 27, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(38, 28, 'SP01', '2020-07-11', 35, 1, 890000, NULL, 1),
(39, 29, 'SP03', '2020-07-12', 35, 1, 250000, NULL, 1),
(40, 30, 'SP01', '2020-07-12', 35, 1, 890000, NULL, 1),
(41, 31, 'SP03', '2020-07-12', 35, 1, 250000, NULL, 1),
(42, 32, 'SP04', '2020-07-12', 35, 1, 550000, NULL, 1),
(43, 33, 'SP01', '2020-07-12', 35, 1, 890000, NULL, 1),
(44, 34, 'SP02', '2020-07-12', 35, 1, 549000, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `mact` int(11) NOT NULL,
  `size` int(11) DEFAULT 35,
  `hinhanh` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masp` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`mact`, `size`, `hinhanh`, `masp`) VALUES
(1, 35, 'https://giayxshop.vn/wp-content/uploads/2019/02/MG_4530.jpg', 'SP01'),
(2, 36, 'https://giayxshop.vn/wp-content/uploads/2019/02/MG_4530.jpg', 'SP01'),
(3, 35, 'https://giayxshop.vn/wp-content/uploads/2019/02/MG_4973.jpg', 'SP02'),
(4, 36, 'https://giayxshop.vn/wp-content/uploads/2019/02/MG_4973.jpg', 'SP02'),
(5, 35, 'https://giayxshop.vn/wp-content/uploads/2020/03/MG_8407.jpg', 'SP04'),
(6, 36, 'https://giayxshop.vn/wp-content/uploads/2020/03/MG_8407.jpg', 'SP04'),
(7, 35, 'https://giayxshop.vn/wp-content/uploads/2019/02/MG_4999.jpg', 'SP05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietthanhtoan`
--

CREATE TABLE `chitietthanhtoan` (
  `macttt` bigint(20) NOT NULL,
  `madh` bigint(20) DEFAULT NULL,
  `mathanhtoan` int(11) DEFAULT NULL,
  `sotaikhoan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaythanhtoan` date DEFAULT NULL,
  `trangthai` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietthanhtoan`
--

INSERT INTO `chitietthanhtoan` (`macttt`, `madh`, `mathanhtoan`, `sotaikhoan`, `noidung`, `ngaythanhtoan`, `trangthai`) VALUES
(13, 16, 1, NULL, NULL, '2020-07-11', 1),
(26, 27, 1, NULL, NULL, '2020-07-11', 1),
(27, 28, 2, NULL, NULL, '2020-07-11', 1),
(28, 29, 1, NULL, NULL, '2020-07-12', 1),
(29, 30, 1, NULL, NULL, '2020-07-12', 1),
(30, 31, 1, NULL, NULL, '2020-07-12', 1),
(31, 32, 1, NULL, NULL, '2020-07-12', 1),
(32, 33, 1, NULL, NULL, '2020-07-12', 1),
(33, 34, 1, NULL, NULL, '2020-07-12', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiabinhluan`
--

CREATE TABLE `danhgiabinhluan` (
  `makh` bigint(20) NOT NULL,
  `masp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `binhluan` text COLLATE utf8_unicode_ci NOT NULL,
  `sosao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `madmsp` bigint(20) NOT NULL,
  `tendanhmuc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`madmsp`, `tendanhmuc`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(3, 'Trẻ em'),
(4, 'Cặp đôi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` bigint(20) NOT NULL,
  `ngaydat` date NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaygiao` date NOT NULL,
  `makh` bigint(20) NOT NULL,
  `tongtien` decimal(10,0) NOT NULL DEFAULT 0,
  `tinhtrangdonhang` bigint(20) DEFAULT 1,
  `manv` bigint(20) DEFAULT NULL,
  `trangthaidh` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madonhang`, `ngaydat`, `ghichu`, `ngaygiao`, `makh`, `tongtien`, `tinhtrangdonhang`, `manv`, `trangthaidh`) VALUES
(16, '2020-07-11', NULL, '2020-07-18', 1, '2579000', 3, NULL, 0),
(17, '2020-07-11', NULL, '2020-07-18', 1, '1459000', 3, NULL, 0),
(18, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(19, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(20, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(21, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(22, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(23, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(24, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(25, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(26, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(27, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(28, '2020-07-11', NULL, '2020-07-18', 1, '890000', 3, NULL, 0),
(29, '2020-07-12', NULL, '2020-07-19', 1, '250000', 3, NULL, 0),
(30, '2020-07-12', NULL, '2020-07-19', 1, '890000', 2, NULL, 1),
(31, '2020-07-12', NULL, '2020-07-19', 1, '250000', 3, NULL, 0),
(32, '2020-07-12', NULL, '2020-07-19', 1, '550000', 3, NULL, 0),
(33, '2020-07-12', NULL, '2020-07-19', 1, '890000', 3, NULL, 0),
(34, '2020-07-12', NULL, '2020-07-19', 1, '549000', 3, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `mathanhtoan` int(11) NOT NULL,
  `tenphuongthuc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhthucthanhtoan`
--

INSERT INTO `hinhthucthanhtoan` (`mathanhtoan`, `tenphuongthuc`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Momo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` bigint(20) NOT NULL,
  `tenkh` text COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `diachi`, `sodienthoai`, `email`, `taikhoan`, `matkhau`) VALUES
(1, 'Đặng Hòa Nhi', 'Đà Nẵng', '0374072533', 'danghoanhi1999@gmail.com', 'hoanhi09', 'hoanhi09'),
(2, 'Bảo Bảo Cute', 'Đà Nẵng', '0374802901', 'bi117.ute@gmail.com', 'bi117.ute', 'baobaocute@@'),
(3, 'Nhi Cute', 'Đà Nẵng', '123456789', 'nhicute@bi.bao', 'benhicute', 'nhi99'),
(4, 'Nhi', 'Đà Nẵng', '123456789', 'nhi@gmail.com', 'nhi123', 'nhi99'),
(5, 'Bảo Bảo', 'Đà Nẵng', '123456789', 'baobao@bi.cute', 'baocute', '123'),
(6, 'Vợ anh', 'Đà Nẵng', '123456789', 'nhicute@bebu.com', '123vonhi123', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `makhuyenmai` int(11) NOT NULL,
  `ngaybatdau` datetime NOT NULL,
  `ngayketthuc` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloai` bigint(20) NOT NULL,
  `tenloai` text COLLATE utf8_unicode_ci NOT NULL,
  `madmsp` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`, `madmsp`) VALUES
(1, 'Sandal nam', 1),
(2, 'Giày thể thao nam', 1),
(3, 'Dép nam', 1),
(4, 'Sandal nữ', 2),
(5, 'Giày thể thao nữ', 2),
(6, 'Giày cao gót nữ', 2),
(7, 'Dép nữ', 2),
(8, 'Sandal trẻ em', 3),
(9, 'Giày thể thao trẻ em', 3),
(10, 'Dép trẻ em', 3),
(11, 'Giày thể thao cặp đôi', 4),
(12, 'Sandal cặp đôi', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `manhacungcap` bigint(20) NOT NULL,
  `tennhacungcap` text COLLATE utf8_unicode_ci NOT NULL,
  `diachinhacungcap` text COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`manhacungcap`, `tennhacungcap`, `diachinhacungcap`, `sodienthoai`, `email`) VALUES
(1, 'Nike', 'Đà Nẵng', '123456789', 'nike@ni.ke'),
(2, 'Adias', 'Đà Nẵng', '123456789', 'adias@adi.as'),
(3, 'Vans', 'Đà Nẵng', '123456789', 'vans@van.s'),
(4, 'Gucci', 'Đà Nẵng', '123456789', 'gucci@guc.ci');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` bigint(20) NOT NULL,
  `tennv` text COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` bigint(11) NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `hinhanh` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `sodienthoai`, `taikhoan`, `matkhau`, `email`, `quyen`, `diachi`, `ngaysinh`, `hinhanh`, `trangthai`) VALUES
(2, 'Bé Nhi Cute Dễ Thương', '0374072533', 'nhicute', 'nhicute', 'danghoanhi1999@gmail.com', 1, 'Đà Nẵng', '1999-11-09', 'https://i.pinimg.com/736x/91/06/21/9106217e59456dbc2593f74737f119c6.jpg', 1),
(4, 'Bảo Cute', '0374802901', 'bi117.ute', 'abc', 'bi117.ute@gmail.com', 1, 'Đà Nẵng', '0000-00-00', 'gallery2.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `maphieunhap` bigint(20) NOT NULL,
  `masp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `maquyen` bigint(20) NOT NULL,
  `tenquyen` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`maquyen`, `tenquyen`) VALUES
(1, 'admin'),
(2, 'nhân viên bán hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` text COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `sohiencon` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `anh` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhacungcap` bigint(20) NOT NULL,
  `loaisanpham` bigint(20) NOT NULL,
  `ngaynhap` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `soluong`, `gia`, `sohiencon`, `trangthai`, `anh`, `nhacungcap`, `loaisanpham`, `ngaynhap`) VALUES
('SP01', 'Giày Thể Thao XSPORT Adidas Yeezy boost sesame REP', 110, '890000', 109, 1, 'blob.jpg', 1, 1, '2020-07-11'),
('SP02', 'Giày Thể Thao XSPORT Nike Air Max 97', 110, '549000', 110, 1, 'blob.jpg', 1, 1, '2020-07-11'),
('SP03', 'Giày Thể Thao XSPORT Vans Old Skool Cá Mập', 100, '250000', 100, 1, 'https://giayxshop.vn/wp-content/uploads/2018/12/xoa-phong-154-1.jpg', 3, 5, '2020-07-11'),
('SP04', 'Giày Thể Thao XSPORT Adidas Prophere Rep', 100, '550000', 103, 1, 'https://giayxshop.vn/wp-content/uploads/2020/03/MG_8407.jpg', 2, 5, '2020-07-11'),
('SP05', 'XSPORT Gucci Sneaker Rhyton Cream F1', 100, '360000', 100, 1, 'https://giayxshop.vn/wp-content/uploads/2019/02/MG_4999.jpg', 4, 11, '2020-07-11'),
('SP06', 'Giày thể thao NIKE DHS 89', 100, '500000', 100, 1, 'blob.jpg', 1, 5, NULL),
('SP760335385', 'NIKE 90', 100, '201000', 100, 1, 'blob.jpg', 1, 5, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamkhuyenmai`
--

CREATE TABLE `sanphamkhuyenmai` (
  `makhuyenmai` int(11) NOT NULL,
  `masp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `maslides` bigint(20) NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `sanpham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`maslides`, `tieude`, `noidung`, `sanpham`, `trangthai`) VALUES
(1, 'New', '-50%', 'SP01', 1),
(2, 'New', '-10%', 'SP02', 1),
(3, 'Sale', '-80%', 'SP03', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrangdonhang`
--

CREATE TABLE `tinhtrangdonhang` (
  `matinhtrang` bigint(20) NOT NULL,
  `tentinhtrang` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrangdonhang`
--

INSERT INTO `tinhtrangdonhang` (`matinhtrang`, `tentinhtrang`) VALUES
(1, 'Đang xử lý'),
(2, 'Đã giao'),
(3, 'Hủy đơn hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`mabaidang`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`mactdh`),
  ADD KEY `madh` (`madh`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`mact`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `chitietthanhtoan`
--
ALTER TABLE `chitietthanhtoan`
  ADD PRIMARY KEY (`macttt`),
  ADD UNIQUE KEY `madh` (`madh`) USING BTREE,
  ADD KEY `mathanhtoan` (`mathanhtoan`) USING BTREE;

--
-- Chỉ mục cho bảng `danhgiabinhluan`
--
ALTER TABLE `danhgiabinhluan`
  ADD KEY `makh` (`makh`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`madmsp`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD KEY `makh` (`makh`),
  ADD KEY `tinhtrangdonhang` (`tinhtrangdonhang`),
  ADD KEY `manv` (`manv`);

--
-- Chỉ mục cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`mathanhtoan`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`makhuyenmai`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloai`),
  ADD KEY `madmsp` (`madmsp`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`manhacungcap`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`),
  ADD KEY `quyen` (`quyen`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`maphieunhap`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`maquyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `nhacungcap` (`nhacungcap`),
  ADD KEY `loaisanpham` (`loaisanpham`);

--
-- Chỉ mục cho bảng `sanphamkhuyenmai`
--
ALTER TABLE `sanphamkhuyenmai`
  ADD KEY `makhuyenmai` (`makhuyenmai`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`maslides`),
  ADD KEY `sanpham` (`sanpham`);

--
-- Chỉ mục cho bảng `tinhtrangdonhang`
--
ALTER TABLE `tinhtrangdonhang`
  ADD PRIMARY KEY (`matinhtrang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baidang`
--
ALTER TABLE `baidang`
  MODIFY `mabaidang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `mactdh` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `mact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `chitietthanhtoan`
--
ALTER TABLE `chitietthanhtoan`
  MODIFY `macttt` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `madmsp` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madonhang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  MODIFY `mathanhtoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `makhuyenmai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maloai` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `manhacungcap` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `maphieunhap` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `maquyen` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `maslides` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tinhtrangdonhang`
--
ALTER TABLE `tinhtrangdonhang`
  MODIFY `matinhtrang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD CONSTRAINT `baidang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madonhang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `danhgiabinhluan`
--
ALTER TABLE `danhgiabinhluan`
  ADD CONSTRAINT `danhgiabinhluan_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `danhgiabinhluan_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`tinhtrangdonhang`) REFERENCES `tinhtrangdonhang` (`matinhtrang`),
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Các ràng buộc cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `loaisanpham_ibfk_1` FOREIGN KEY (`madmsp`) REFERENCES `danhmucsanpham` (`madmsp`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`quyen`) REFERENCES `quyen` (`maquyen`);

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`nhacungcap`) REFERENCES `nhacungcap` (`manhacungcap`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`loaisanpham`) REFERENCES `loaisanpham` (`maloai`);

--
-- Các ràng buộc cho bảng `sanphamkhuyenmai`
--
ALTER TABLE `sanphamkhuyenmai`
  ADD CONSTRAINT `sanphamkhuyenmai_ibfk_1` FOREIGN KEY (`makhuyenmai`) REFERENCES `khuyenmai` (`makhuyenmai`),
  ADD CONSTRAINT `sanphamkhuyenmai_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_ibfk_1` FOREIGN KEY (`sanpham`) REFERENCES `sanpham` (`masp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
