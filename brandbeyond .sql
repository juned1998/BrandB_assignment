-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 08:24 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brandbeyond`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `company` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `phone`, `company`, `message`, `date`) VALUES
(33, 'form ', 'from@form.com', '1234567890', 'company 1', 'Hello showcase form', '2020-07-19 20:09:36'),
(34, 'form two', 'form2@form.com', '1234567890', 'form2company', 'hello', '2020-07-19 20:10:12'),
(35, 'dfgdg', 'test@gmail.com', '0123456789', 'dsfdfd', 'dfgdf', '2020-07-19 21:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_update` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_date`, `post_update`, `post_image`, `post_content`, `post_status`) VALUES
(65, 'What is Lorem Ipsum?', '2020-07-20', '2020-07-20', 'showcase.jpg', '<p><strong style=\"color: rgb(0, 0, 0);\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0);\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and </span><u style=\"color: rgb(0, 0, 0);\">scrambled i</u><span style=\"color: rgb(0, 0, 0);\">t to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of </span><u style=\"color: rgb(0, 0, 0);\">Lorem Ipsum</u></p><p><br></p>', 'published'),
(66, 'What is a blog?', '2020-07-20', '2020-07-20', 'handmadePots.jpg', '<p><span style=\"color: rgb(54, 54, 54);\">Do you know what a blog is? If you donâ€™t, then youâ€™ve come to the right place. In 1994, when blogs began, a blog was more of a personal diary that people shared online. In this online journal, you could talk about your daily life or share about things that you were doing. Then, people saw an opportunity to communicate information in a new way online. Thus began the beautiful worl</span><strong style=\"color: rgb(54, 54, 54);\">d of blogging.</strong></p><p><br></p>', 'published'),
(67, 'Delete This Blog', '2020-07-20', '2020-07-20', 'candle1.jpg', '<p>As a b<strong>usiness</strong>, you rely<u> on</u><strong><u> consum</u></strong><u>ers to keep buying your </u>products and services.<strong> As a new business, y</strong>ou rely on blogging to help you get to potential consumers and grab their attention. Without blogging, your website would remain <u>invisible</u><strong><u>,</u> whereas running a blog makes you sea</strong>rchable and competitive.</p><p><br></p>', 'published'),
(68, 'This is a new post', '2020-07-20', '2020-07-20', 'candle3.jpg', '<h3><strong style=\"color: rgb(0, 0, 0);\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0);\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets </span><strong style=\"color: rgb(0, 0, 0);\">containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</strong></h3><p><br></p>', 'draft'),
(73, 'UPDATE Test Post for Aside', '2020-07-20', '2020-07-20', 'toy2.jpg', '<h1>UPDATE Hello this is a test Post</h1><p><br></p>', 'published'),
(74, 'This is my new post 6th', '2020-07-20', '0000-00-00', 'candle2.jpg', '<p><span style=\"color: rgb(85, 85, 85);\">MySQL resolves unqualified column or alias references in&nbsp;</span><code style=\"color: rgb(0, 0, 0);\">ORDER BY</code><span style=\"color: rgb(85, 85, 85);\">&nbsp;clauses by searching in the&nbsp;</span><code style=\"color: inherit; background-color: inherit;\"><strong><em>select_expr</em></strong></code><span style=\"color: rgb(85, 85, 85);\">&nbsp;values, then in the columns of the tables in the&nbsp;</span><code style=\"color: rgb(0, 0, 0);\">FROM</code><span style=\"color: rgb(85, 85, 85);\">&nbsp;clause. For&nbsp;</span><code style=\"color: rgb(0, 0, 0);\">GROUP BY</code><span style=\"color: rgb(85, 85, 85);\">&nbsp;or&nbsp;</span><code style=\"color: rgb(0, 0, 0);\">HAVING</code><span style=\"color: rgb(85, 85, 85);\">&nbsp;clauses, it searches the&nbsp;</span><code style=\"color: rgb(0, 0, 0);\">FROM</code><span style=\"color: rgb(85, 85, 85);\">&nbsp;clause before searching in the&nbsp;</span><code style=\"color: inherit; background-color: inherit;\"><strong><em>select_expr</em></strong></code><span style=\"color: rgb(85, 85, 85);\">&nbsp;values. (For&nbsp;</span><code style=\"color: rgb(0, 0, 0);\">GROUP BY</code><span style=\"color: rgb(85, 85, 85);\">&nbsp;and&nbsp;</span><code style=\"color: rgb(0, 0, 0);\">HAVING</code><span style=\"color: rgb(85, 85, 85);\">, this differs from the pre-MySQL 5.0 behavior that used the same rules as for&nbsp;</span><code style=\"color: rgb(0, 0, 0);\">ORDER BY</code><span style=\"color: rgb(85, 85, 85);\">.)</span></p>', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `date`) VALUES
(1, 'test@gmail.com', '2020-07-19 20:41:36'),
(2, 'test@gmail.com', '2020-07-19 20:43:32'),
(3, 'test2@gmail.com', '2020-07-19 20:44:01'),
(4, 'test@gmail.com', '2020-07-19 20:46:06'),
(5, 'test@gmail.com', '2020-07-19 21:24:07'),
(6, 'test@gmail.com', '2020-07-19 21:24:28'),
(7, 'test@gmail.com', '2020-07-20 21:50:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
