-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 08:38 PM
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
-- Database: `shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(1, 'Turbo', 'e35f016725701f5cddcaa5edf1e480e2', 'Turbo@gmail.com', '', '2024-04-25 17:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `s_id` int(255) NOT NULL,
  `s_country` varchar(100) NOT NULL,
  `s_name` varchar(500) NOT NULL,
  `s_address` varchar(300) NOT NULL,
  `s_zip` int(200) NOT NULL,
  `s_city` varchar(100) NOT NULL,
  `s_state` varchar(100) NOT NULL,
  `s_phone` varchar(200) NOT NULL,
  `s_email` varchar(300) NOT NULL,
  `r_country` varchar(100) NOT NULL,
  `r_name` varchar(400) NOT NULL,
  `r_address` varchar(400) NOT NULL,
  `r_zip` int(200) NOT NULL,
  `r_city` varchar(100) NOT NULL,
  `r_state` varchar(100) NOT NULL,
  `r_phone` varchar(100) NOT NULL,
  `r_email` varchar(200) NOT NULL,
  `s_trans` varchar(100) NOT NULL,
  `s_type` varchar(100) NOT NULL,
  `s_ptype` varchar(100) NOT NULL,
  `s_description` varchar(1200) NOT NULL,
  `s_weight` decimal(50,0) NOT NULL,
  `s_value` int(200) NOT NULL,
  `s_insurance` varchar(500) NOT NULL,
  `s_quantity` int(50) NOT NULL,
  `s_freight` int(200) NOT NULL,
  `s_subtotal` int(200) NOT NULL,
  `s_date` date NOT NULL,
  `s_estimate` date NOT NULL,
  `s_tracking` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`s_id`, `s_country`, `s_name`, `s_address`, `s_zip`, `s_city`, `s_state`, `s_phone`, `s_email`, `r_country`, `r_name`, `r_address`, `r_zip`, `r_city`, `r_state`, `r_phone`, `r_email`, `s_trans`, `s_type`, `s_ptype`, `s_description`, `s_weight`, `s_value`, `s_insurance`, `s_quantity`, `s_freight`, `s_subtotal`, `s_date`, `s_estimate`, `s_tracking`) VALUES
(0, 'USA', 'Jose Garcia ', 'Texas road, no 12 city hall', 1234567, 'Texas', 'TX', '567894379004', 'Rollandatki197@gmail.com', 'Nigeria', 'Oladimeji Seunayo', 'johnson awe street, Apata', 887654332, 'ibadan', 'Oyo', '09786564544', 'oladman@gmail.com', 'Paid', 'Parcel Shipping', 'Box', 'To-Pay', 4, 28768, 'Paid', 5, 1700, 4700, '2024-04-30', '2024-05-22', '2VH488487365431');

-- --------------------------------------------------------

--
-- Table structure for table `ship_blog`
--

CREATE TABLE `ship_blog` (
  `d_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `blog` varchar(5000) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ship_blog`
--

INSERT INTO `ship_blog` (`d_id`, `rs_id`, `title`, `blog`, `img`) VALUES
(2, 1, 'Insights and Innovation ', 'Insights and Innovation  To enable collaboration, the company brings together customers, research and academic institutions, industry partners, and logistics experts within the DHL business divisions. As a thought leader i', '66002c5544752.jpg'),
(18, 0, '50% OFF all your shipment in month of May, watch out !!!', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit quasi id aut esse enim. Officiis eum fuga eos laboriosam veniam?', '663129f85b80d.png'),
(19, 0, 'Oceanlogistics testing newly purchased Airplane', ' Spiral sliced potatoes, topped with our traditional spicy queso, Monterey Jack cheese, pico de gallo, sour cream and fresh cilantro.', '66312a3de3614.png'),
(20, 0, 'Oceanwidelogistics patnership with ripple', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatibus quas iure nobis temporibus quisquam? Voluptatibus exercitationem ab ad eaque odit id deserunt sequi? Ex officiis quas consequuntur quibusdam accusantium? Quisquam quidem est doloribus velit. Expedita libero vero error neque consectetur porro ipsum repellendus eius consequatur reiciendis dicta, eveniet placeat?', '663129b556941.png');

-- --------------------------------------------------------

--
-- Table structure for table `ship_status`
--

CREATE TABLE `ship_status` (
  `ss_id` int(200) NOT NULL,
  `ss_date` date NOT NULL,
  `ss_time` time(6) NOT NULL,
  `ss_location` varchar(200) NOT NULL,
  `ss_comment` varchar(250) NOT NULL,
  `ss_status` varchar(250) NOT NULL,
  `s_tracking` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ship_status`
--

INSERT INTO `ship_status` (`ss_id`, `ss_date`, `ss_time`, `ss_location`, `ss_comment`, `ss_status`, `s_tracking`) VALUES
(26, '2024-04-25', '09:02:00.000000', 'Rubbish', 'rubbish', 'On-hold', '2VH488487365431'),
(27, '2024-05-10', '16:04:00.000000', 'testing', 'testing', 'Held by Custom', '2VH488487365431'),
(28, '2024-04-27', '12:03:00.000000', 'Lagos, Nigeria', 'item is having issues with border agency', 'On-hold', '2VH488487365431'),
(29, '2024-04-26', '04:23:00.000000', 'Toronto, Canada', 'tesing this package with new status right here from my house hahaha, lets see if it will work right now', 'Order Received', '2VH488487365431');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(9, 'Oladman', 'testing', 'testing', 'testing@gmail.com', '8988888', 'oladman', 'oladman', 1, '2024-03-20 07:09:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`s_tracking`);

--
-- Indexes for table `ship_blog`
--
ALTER TABLE `ship_blog`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `ship_status`
--
ALTER TABLE `ship_status`
  ADD PRIMARY KEY (`ss_id`),
  ADD KEY `s_tracking` (`s_tracking`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ship_blog`
--
ALTER TABLE `ship_blog`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ship_status`
--
ALTER TABLE `ship_status`
  MODIFY `ss_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ship_status`
--
ALTER TABLE `ship_status`
  ADD CONSTRAINT `ship_status_ibfk_1` FOREIGN KEY (`s_tracking`) REFERENCES `shipping` (`s_tracking`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
