-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 05:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital-agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_tags` varchar(255) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_author` varchar(255) NOT NULL,
  `blog_date_publish` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_content`, `blog_tags`, `blog_img`, `blog_author`, `blog_date_publish`) VALUES
(8, ' 11 Web Design Trends to Power Up Your Website in 2021.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in sapien ut justo iaculis cursus. Proin sit amet massa eu magna sagittis accumsan nec non felis. Suspendisse imperdiet eget urna id aliquam. Nulla at massa ac elit gravida semper. Aliquam et odio vel est molestie tincidunt sed et dolor. Nullam lacus urna, aliquet a est nec, ultricies congue lectus. Quisque non nibh et augue luctus sagittis sit amet eget est. Sed lectus felis, semper eu erat et, ornare vehicula nisl. Mauris convallis id urna non eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc neque magna, pellentesque id porta ut, pharetra ut erat.', 'Web Design', 'web-design-trends-for-2021-840x400.jpg', 'admin', '2021-06-14 14:46:44'),
(9, ' What Are the Top 5 Reasons for a Slow Website?Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in sapien ut justo iaculis cursus. Proin sit amet massa eu magna sagittis accumsan nec non felis. Suspendisse imperdiet eget urna id aliquam. Nulla at massa ac elit gravida semper. Aliquam et odio vel est molestie tincidunt sed et dolor. Nullam lacus urna, aliquet a est nec, ultricies congue lectus. Quisque non nibh et augue luctus sagittis sit amet eget est. Sed lectus felis, semper eu erat et, ornare vehicula nisl. Mauris convallis id urna non eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc neque magna, pellentesque id porta ut, pharetra ut erat.', 'Web Development', 'what-are-the-top-5-reasons-for-a-slow-website.jpg', 'admin', '2021-06-14 14:48:59'),
(10, ' Web Design Trends 2021: 5 Popular UI Styles.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in sapien ut justo iaculis cursus. Proin sit amet massa eu magna sagittis accumsan nec non felis. Suspendisse imperdiet eget urna id aliquam. Nulla at massa ac elit gravida semper. Aliquam et odio vel est molestie tincidunt sed et dolor. Nullam lacus urna, aliquet a est nec, ultricies congue lectus. Quisque non nibh et augue luctus sagittis sit amet eget est. Sed lectus felis, semper eu erat et, ornare vehicula nisl. Mauris convallis id urna non eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc neque magna, pellentesque id porta ut, pharetra ut erat.', 'Web Design', 'web-design-trends-2020-5-popular-ui-styles.jpg', 'admin', '2021-06-14 14:50:49'),
(11, ' Top 6 Scanners to Optimize Your Website.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in sapien ut justo iaculis cursus. Proin sit amet massa eu magna sagittis accumsan nec non felis. Suspendisse imperdiet eget urna id aliquam. Nulla at massa ac elit gravida semper. Aliquam et odio vel est molestie tincidunt sed et dolor. Nullam lacus urna, aliquet a est nec, ultricies congue lectus. Quisque non nibh et augue luctus sagittis sit amet eget est. Sed lectus felis, semper eu erat et, ornare vehicula nisl. Mauris convallis id urna non eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc neque magna, pellentesque id porta ut, pharetra ut erat.', 'Web Development', 'top-scanners-to-optimize-your-website.jpg', 'admin', '2021-06-14 14:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `date_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_role`, `date_register`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@admin.com', 'writer', '2021-06-14 12:57:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
