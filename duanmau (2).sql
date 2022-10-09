-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2022 lúc 02:48 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acount_user`
--

CREATE TABLE `acount_user` (
  `id__acount` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `buy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `active` bit(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='3';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(10) NOT NULL,
  `content` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_hh` int(10) NOT NULL,
  `id_vote` int(10) NOT NULL,
  `date_comment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commentmanage`
--

CREATE TABLE `commentmanage` (
  `id_comment` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng ` commodities`
--

CREATE TABLE ` commodities` (
  `id_commodities` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng ` commodities`
--

INSERT INTO ` commodities` (`id_commodities`, `name`) VALUES
(35, 'apple'),
(36, 'samsung'),
(37, 'laptop'),
(38, 'aso thun ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goodsmanage`
--

CREATE TABLE `goodsmanage` (
  `id_hh` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_hh` int(11) NOT NULL,
  `name_pro` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `sale` varchar(50) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_hh`, `name_pro`, `image`, `price`, `detail`, `sale`, `id_dm`) VALUES
(30, 'ip 13 max', 'goods_425974_sub11.jpg', '4354353', 'gdfgfdg', '54354', 35),
(36, 'Iphone 13', 'iphone-13.jpg', '77567', 'dhg', '657657', 35),
(37, 'Iphone 12', '', '444444444444', '55555', '5555555555555', 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `active` bit(20) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usermanage`
--

CREATE TABLE `usermanage` (
  `id_admin` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acount_user`
--
ALTER TABLE `acount_user`
  ADD PRIMARY KEY (`id__acount`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_hh` (`id_hh`);

--
-- Chỉ mục cho bảng `commentmanage`
--
ALTER TABLE `commentmanage`
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_comment` (`id_comment`);

--
-- Chỉ mục cho bảng ` commodities`
--
ALTER TABLE ` commodities`
  ADD PRIMARY KEY (`id_commodities`);

--
-- Chỉ mục cho bảng `goodsmanage`
--
ALTER TABLE `goodsmanage`
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_hh` (`id_hh`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_hh`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `usermanage`
--
ALTER TABLE `usermanage`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acount_user`
--
ALTER TABLE `acount_user`
  MODIFY `id__acount` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng ` commodities`
--
ALTER TABLE ` commodities`
  MODIFY `id_commodities` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `acount_user`
--
ALTER TABLE `acount_user`
  ADD CONSTRAINT `acount_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_hh`) REFERENCES `products` (`id_hh`);

--
-- Các ràng buộc cho bảng `commentmanage`
--
ALTER TABLE `commentmanage`
  ADD CONSTRAINT `commentmanage_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `commentmanage_ibfk_2` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id_comment`);

--
-- Các ràng buộc cho bảng `goodsmanage`
--
ALTER TABLE `goodsmanage`
  ADD CONSTRAINT `goodsmanage_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `goodsmanage_ibfk_2` FOREIGN KEY (`id_hh`) REFERENCES `products` (`id_hh`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES ` commodities` (`id_commodities`);

--
-- Các ràng buộc cho bảng `usermanage`
--
ALTER TABLE `usermanage`
  ADD CONSTRAINT `usermanage_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `usermanage_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
