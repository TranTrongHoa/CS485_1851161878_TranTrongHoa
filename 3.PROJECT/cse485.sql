-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2020 lúc 03:13 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cse485`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `userid` mediumint(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` mediumint(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `role` enum('Author','Admin','','') DEFAULT 'Author',
  `password` char(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`) VALUES
(2, 'Minh', 'minh01@gmail.com', 'Admin', '$2y$10$/JpWFD1fWyuXkZkTZAuJUuh1/It1LOzp8hWQG5bXP6/VLYdIhnDNK', '2020-11-12 09:03:02'),
(7, 'kuhoa1', '123455@gmail.com', NULL, '$2y$10$B4BtD2jbA9jkqobYxr1p8.kk2hD5IMTmbGlIoYjqkFHZgi9zw/eva', '2020-11-12 04:02:14'),
(9, 'kuhoa2', 'kuhoahb2@gmail.com', NULL, '$2y$10$2Hz4xrGWmV3qAIST2XfmEe0h8wsT0tigFloLVvAFnADptKxTxdWA6', '2020-11-12 04:15:28'),
(10, 'kuhoa3', 'kuhoahb3@gmail.com', NULL, '$2y$10$x7OaCB18KpEa24T3Z.BvCuPih0893YfewFZG3nnPtzAsY09MwNfPy', '2020-11-12 04:22:13'),
(11, 'kuhoa3', 'kuhoahb3@gmail.com', NULL, '$2y$10$mQ4ayqZwqZ892DU9DfCspe0YPrEd0r8t/DLHnLiZo4jd/yFDpC50S', '2020-11-12 04:22:17'),
(12, '1851161878', 'hoa@gmail.com', NULL, '$2y$10$uiP7BU6aUNojndPeL4DS2.ZSLsxQukXlXaPLt1Mnlh779LiNihKZi', '2020-11-12 04:23:14');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
