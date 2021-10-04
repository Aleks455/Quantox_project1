-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2021 at 09:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'John Doe', 'johndoe@gmail.com', 'changeit123');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_preview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category` enum('politics','sports','music','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_img`, `post_preview`, `post_content`, `post_category`, `post_author`, `post_date`) VALUES
(1, 'Frist sports post', '../news_portal/img/sports.jpeg', 'This is the content of the first sports post.', 'This is the content of the first sports post.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis maxime voluptates aliquid animi deserunt dolor pariatur laboriosam adipisci aperiam dolorem quos veritatis et, excepturi officiis! Eaque aut voluptatum voluptate accusamus eius? Ex fugit itaque porro nihil corrupti corporis atque, quod, saepe, hic delectus optio nesciunt quis? Harum eaque iure eveniet repellat cumque dicta rem nesciunt voluptatum voluptatem in perferendis ex natus dolore fugit magnam porro, iusto rerum quo cupiditate nihil corrupti esse? Nemo earum aliquam architecto deleniti non. Dicta nostrum natus debitis officia iusto. Natus commodi nesciunt doloribus, quo debitis magnam perspiciatis reiciendis iure sit, quisquam tenetur, vero quae laudantium!', 'sports', 'Mark Thompson', '2021-09-15 15:08:34'),
(2, 'Second sports post', '../news_portal/img/sports.jpeg', 'This is the content of the second sports post.', 'This is the content of the second sports post.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis maxime voluptates aliquid animi deserunt dolor pariatur laboriosam adipisci aperiam dolorem quos veritatis et, excepturi officiis! Eaque aut voluptatum voluptate accusamus eius? Ex fugit itaque porro nihil corrupti corporis atque, quod, saepe, hic delectus optio nesciunt quis? Harum eaque iure eveniet repellat cumque dicta rem nesciunt voluptatum voluptatem in perferendis ex natus dolore fugit magnam porro, iusto rerum quo cupiditate nihil corrupti esse? Nemo earum aliquam architecto deleniti non. Dicta nostrum natus debitis officia iusto. Natus commodi nesciunt doloribus, quo debitis magnam perspiciatis reiciendis iure sit, quisquam tenetur, vero quae laudantium!', 'sports', 'Mark Thompson', '2021-09-15 15:08:34'),
(5, 'First music post', '../news_portal/img/music.jpeg', 'This is the content of the first music post.', 'This is the content of the first music post.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis maxime voluptates aliquid animi deserunt dolor pariatur laboriosam adipisci aperiam dolorem quos veritatis et, excepturi officiis! Eaque aut voluptatum voluptate accusamus eius? Ex fugit itaque porro nihil corrupti corporis atque, quod, saepe, hic delectus optio nesciunt quis? Harum eaque iure eveniet repellat cumque dicta rem nesciunt voluptatum voluptatem in perferendis ex natus dolore fugit magnam porro, iusto rerum quo cupiditate nihil corrupti esse? Nemo earum aliquam architecto deleniti non. Dicta nostrum natus debitis officia iusto. Natus commodi nesciunt doloribus, quo debitis magnam perspiciatis reiciendis iure sit, quisquam tenetur, vero quae laudantium!', 'music', 'Mark Thompson', '2021-09-15 15:09:50'),
(6, 'Second music post', '../news_portal/img/music.jpeg', 'This is the content of the second music post.', 'This is the content of the second music post.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis maxime voluptates aliquid animi deserunt dolor pariatur laboriosam adipisci aperiam dolorem quos veritatis et, excepturi officiis! Eaque aut voluptatum voluptate accusamus eius? Ex fugit itaque porro nihil corrupti corporis atque, quod, saepe, hic delectus optio nesciunt quis? Harum eaque iure eveniet repellat cumque dicta rem nesciunt voluptatum voluptatem in perferendis ex natus dolore fugit magnam porro, iusto rerum quo cupiditate nihil corrupti esse? Nemo earum aliquam architecto deleniti non. Dicta nostrum natus debitis officia iusto. Natus commodi nesciunt doloribus, quo debitis magnam perspiciatis reiciendis iure sit, quisquam tenetur, vero quae laudantium!', 'music', 'Mark Thompson', '2021-09-15 15:09:50'),
(7, 'First politics post', '../news_portal/img/politics.jpeg', 'This is the content of the first politics post.', 'This is the content of the first politics post.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis maxime voluptates aliquid animi deserunt dolor pariatur laboriosam adipisci aperiam dolorem quos veritatis et, excepturi officiis! Eaque aut voluptatum voluptate accusamus eius? Ex fugit itaque porro nihil corrupti corporis atque, quod, saepe, hic delectus optio nesciunt quis? Harum eaque iure eveniet repellat cumque dicta rem nesciunt voluptatum voluptatem in perferendis ex natus dolore fugit magnam porro, iusto rerum quo cupiditate nihil corrupti esse? Nemo earum aliquam architecto deleniti non. Dicta nostrum natus debitis officia iusto. Natus commodi nesciunt doloribus, quo debitis magnam perspiciatis reiciendis iure sit, quisquam tenetur, vero quae laudantium!', 'politics', 'Mark Thompson', '2021-09-15 15:10:55'),
(8, 'Second politics post', '../news_portal/img/politics.jpeg', 'This is the content of the second politics post.', 'This is the content of the second politics post.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis maxime voluptates aliquid animi deserunt dolor pariatur laboriosam adipisci aperiam dolorem quos veritatis et, excepturi officiis! Eaque aut voluptatum voluptate accusamus eius? Ex fugit itaque porro nihil corrupti corporis atque, quod, saepe, hic delectus optio nesciunt quis? Harum eaque iure eveniet repellat cumque dicta rem nesciunt voluptatum voluptatem in perferendis ex natus dolore fugit magnam porro, iusto rerum quo cupiditate nihil corrupti esse? Nemo earum aliquam architecto deleniti non. Dicta nostrum natus debitis officia iusto. Natus commodi nesciunt doloribus, quo debitis magnam perspiciatis reiciendis iure sit, quisquam tenetur, vero quae laudantium!', 'politics', 'Mark Thompson', '2021-09-15 15:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `subscription_id` int(11) NOT NULL,
  `category_subscription` enum('politics','sports','music','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_subscription` int(11) DEFAULT NULL,
  `subscriber_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`subscription_id`, `category_subscription`, `post_subscription`, `subscriber_email`) VALUES
(1, 'politics', 1, 'jane@gmail.com'),
(2, NULL, 6, 'mark@gmail.com'),
(3, 'politics', NULL, 'con@gmail.com'),
(28, 'sports', NULL, 'don@gmail.com'),
(29, 'music', NULL, 'dean@mail.com'),
(30, 'music', NULL, 'smith@mail.uk'),
(31, 'music', NULL, 'smith@mail.uk'),
(32, 'sports', NULL, 'mario@mail.uk'),
(33, NULL, 7, 'marktompson@mail.co'),
(34, NULL, 7, 'marktompson@mail.co'),
(35, NULL, 7, 'monic@mail.co'),
(36, NULL, 6, 'sim@tr.com'),
(37, NULL, 5, 'rita@mail.com'),
(38, NULL, 1, 'marko.t@gmail.com'),
(39, NULL, 2, 'tompson.r@mail.co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`subscription_id`),
  ADD KEY `post_subscription` (`post_subscription`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`post_subscription`) REFERENCES `posts` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
