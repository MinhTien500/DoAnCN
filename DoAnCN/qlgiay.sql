-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2023 lúc 04:28 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Cơ sở dữ liệu: `qlgiay`
--

-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `PassWord` varchar(255) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `NumberPhone` int(12) NOT NULL,
  `GioiTinh` varchar(10) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci;
--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (
    `ID`,
    `Name`,
    `UserName`,
    `PassWord`,
    `DiaChi`,
    `NumberPhone`,
    `GioiTinh`
  )
VALUES (
    23,
    'MinhTien',
    't0913658082',
    '123456',
    'HCM',
    826843716,
    'Nam'
  );
-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `product_gia` decimal(10, 2) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_vietnamese_ci;
--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
ADD PRIMARY KEY (`ID`);
--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
ADD PRIMARY KEY (`ID`);
--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 24;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;