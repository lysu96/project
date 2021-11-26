-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2021 lúc 06:42 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_category` text COLLATE utf8_unicode_ci NOT NULL,
  `content_category` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name_category`, `url_category`, `content_category`) VALUES
(1, 'Android', 'android', 'Android'),
(2, 'Ứng dụng', 'ung-dung', 'Ứng dụng'),
(3, 'IOS', 'ios', 'IOS'),
(4, 'PHP & MYSQL', 'php-mysql', 'PHP & MYSQL'),
(5, 'Wordpress', 'wordpress', 'Wordpress'),
(6, 'Javascript & html / css', 'javascript-html-css', 'Javascript & html / css');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_flie`
--

CREATE TABLE `tbl_flie` (
  `id_file` int(11) NOT NULL,
  `name_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_file` text COLLATE utf8_unicode_ci NOT NULL,
  `size_file` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_flie`
--

INSERT INTO `tbl_flie` (`id_file`, `name_file`, `url_file`, `size_file`) VALUES
(1, 'Source code + Báo cáo', '', 10.8),
(2, 'Source code', '', 8.87);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_mailbox`
--

CREATE TABLE `tbl_mailbox` (
  `id_mailbox` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `content_mailbox` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_mailbox` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_post` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail_post` text COLLATE utf8_unicode_ci NOT NULL,
  `content_post` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_category` text COLLATE utf8_unicode_ci NOT NULL,
  `id_tag` text COLLATE utf8_unicode_ci NOT NULL,
  `id_file` int(11) NOT NULL,
  `url_direct` text COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_post` date NOT NULL,
  `date_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_posts`
--

INSERT INTO `tbl_posts` (`id_post`, `title_post`, `url_post`, `thumbnail_post`, `content_post`, `id_category`, `id_tag`, `id_file`, `url_direct`, `id_user`, `date_post`, `date_edit`) VALUES
(1, 'Nghe nhạc online', 'nghe-nhac-online', 'Nghe-nhac-online.png', '<h2>Nghe nhạc online</h2>\n<p>Máy Nghe nhạc online được thiết kế và viết bàng ngôn ngữ javascript & HTML5</p>\n<img src=\"https://team-clanx.org/wp-content/uploads/2019/10/Loi-ich-cua-viec-nghe-nhac-02.jpg\" alt=\"Nghe nhạc online\">    <p>\n        Chơi game plants vs zombies online 2021 Strech lining hemline above knee burgundy glossy silk complete hid zip little catches rayon. Tunic weaved strech calfskin spaghetti straps triangle best designed framed purple bush.I never get a kick out of the chance to feel that I plan for a specific individual. Chơi game plants vs zombies online 2021\n    </p><p>\n        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.\n    </p><p>\n        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. Even the all-powerful Pointing has no control about the blind texts it is an almost Chơi game plants vs zombies online 2021 unorthographic life One day however a small line of blind text by the name of Lorem Ipsumdecided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.\n    </p><p>\n        On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word “and” and the Little Blind Text should turn around and return to its own, safe country.\n    </p><p>\n        Chơi game plants vs zombies online 2021\n        But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again. And if she hasn’t been rewritten, then they are still using her.\n    </p><p>\n        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. Chơi game plants vs zombies online 2021\n    </p><p>\n        Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. “How about if I sleep a little bit longer and forget all this nonsense”, he thought, but that was something he was unable to do because he was used to sleeping on his right, and in his present state couldn’t get into that position. However hard he threw himself onto his right, he always rolled back to where he was.\n    </p><p>\n        Responsive Design. Tested on Google Mobile Friendly\n        Header Builder with Live Preview\n        Optimized for Google Page Speed as SEO Signal\n        Website schema using JSON LD which is recommended by GoogleI am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.\n        A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer.\n    </p><p>\n        Even the all-powerful Pointing has no control about the blind texts it is an almost Chơi game plants vs zombies online 2021 unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.\n        Opening Local Sites On The Same Network Using Gulp\n    </p><p>\n        His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.\n    </p>v\n    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.\n</p><p>\n    A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer.\n</p><p>\n    Website schema using JSON LD which is recommended by GoogleI am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. Chơi game plants vs zombies online 2021\n</p><p>\n    Why Use Browsersync?\n    His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.\n</p><p>\n    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.\n</p><p>\n    A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer.\n</p><p>\n    Website schema using JSON LD which is recommended by GoogleI am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. Chơi game plants vs zombies online 2021\n</p><p>\n    His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.\n    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.\n</p><p>\n    A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer.\n</p><p>\n    Website schema using JSON LD which is recommended by GoogleI am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.\n</p><p>\n    His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.\n</p><p>\nEven the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. Chơi game plants vs zombies online 2021</p>\n\n', '2', '2', 2, 'https://hmooblee.co/project/nghenhaconline/', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `id_tag` int(11) NOT NULL,
  `name_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_tag` text COLLATE utf8_unicode_ci NOT NULL,
  `content_tag` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tag`
--

INSERT INTO `tbl_tag` (`id_tag`, `name_tag`, `url_tag`, `content_tag`) VALUES
(1, 'Website', 'website', 'Website'),
(2, 'Phầm mền & ứng dụng', 'phan-mem-ung-dung', 'Phầm mền & ứng dụng'),
(3, 'Game', 'game', 'Game'),
(4, 'Khác', 'khac', 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `token` text COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user`, `email`, `pass`, `name`, `address`, `telephone`, `token`, `level`) VALUES
(1, 'hmooblee', 'hmooblee@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Hmoob lee', 'Điện biên', 0, '', 0),
(2, 'user1', 'user1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Văn A', 'Thái nguyên', 366568015, '', 1),
(3, '', 'user2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', 0, '', 1),
(4, '', 'user3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', 0, '', 1),
(5, '', 'user4@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 0, '', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`),
  ADD UNIQUE KEY `url_category` (`url_category`) USING HASH;

--
-- Chỉ mục cho bảng `tbl_flie`
--
ALTER TABLE `tbl_flie`
  ADD PRIMARY KEY (`id_file`);

--
-- Chỉ mục cho bảng `tbl_mailbox`
--
ALTER TABLE `tbl_mailbox`
  ADD PRIMARY KEY (`id_mailbox`);

--
-- Chỉ mục cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id_post`),
  ADD UNIQUE KEY `url_post` (`url_post`) USING HASH;

--
-- Chỉ mục cho bảng `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`id_tag`),
  ADD UNIQUE KEY `url_tag` (`url_tag`) USING HASH;

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`,`email`) USING HASH;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_flie`
--
ALTER TABLE `tbl_flie`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_mailbox`
--
ALTER TABLE `tbl_mailbox`
  MODIFY `id_mailbox` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
