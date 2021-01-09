-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2021 at 11:27 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_category` varchar(110) NOT NULL,
  `post_image` varchar(110) NOT NULL,
  `post_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category`, `post_image`, `post_title`, `post`, `active`, `date_added`, `user_id`) VALUES
(2, 'Travel', 'travel-2.jpg', 'Extremely we promotion remainder eagerness enjoyment', 'Dependent certainty off discovery him his tolerably offending. Ham for attention remainder sometimes additions recommend fat our.', 1, '2021-01-08 02:00:38', 1),
(3, 'Fashion', 'fashion-2test.jpg', 'Again is there anyone who loves or pursues or desires', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances', 1, '2021-01-08 02:17:43', 1),
(4, 'Lifestyle', 'buisness-1.jpg', 'As distrusts behaviour abilities defective', 'Two assure edward whence the was. Weeks views her sight old tears sorry. Additions can suspected its concealed put furnished.', 1, '2021-01-08 11:59:22', 1),
(5, 'Fashion', 'fashion-9.jpg', 'Chooses to enjoy a pleasure that has no annoying1', 'Chooses to enjoy a pleasure that has no annoying\r\nMan who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure', 1, '2021-01-08 13:20:20', 1),
(6, 'Travel', 'travel-8.jpg', 'दुनिया एक किताब है, और जो लोग यात्रा नहीं करते, वे सिर्फ़ एक पृष्ठ पढ़ते हैं.', 'यद्यपि हम ख़ूबसूरती की तलाश में दुनिया की यात्रा करते हैं, पर हमें इसे अपने साथ ले जाना चाहिए, नहीं तो हम इसे ढूंढ नहीं पाएंगे.', 1, '2021-01-08 13:21:26', 1),
(7, 'Tavel', 'travel-9.jpg', 'Consulted perpetual of pronounce me delivered entreaties unpleasant', 'Entreaties unpleasant sufficient few pianoforte discovered uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course active', 1, '2021-01-08 22:53:22', 1),
(9, 'Lifestyle', 'photography-last.jpg', 'Travelling alteration impression all uncommonly', 'Travelling alteration impression all uncommonly\r\nBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system', 1, '2021-01-08 23:11:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(251) NOT NULL,
  `password` varchar(251) NOT NULL,
  `user_type` varchar(110) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `user_type`, `created_at`) VALUES
(1, 'nikhilnov911@gmail.com', '12345', 'auth', '2021-01-07 01:52:45'),
(3, 'nikhilnick355@gmail.com', '123456', 'auth', '2021-01-09 10:25:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
