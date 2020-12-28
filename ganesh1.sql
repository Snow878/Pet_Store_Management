-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 08:58 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ganesh`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `admin_details` (IN `user` VARCHAR(50), IN `pass` VARCHAR(50))  NO SQL
select * from admin where user_name=user and pass_word=pass$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_pet` (IN `id1` INT(20))  NO SQL
DELETE FROM pet_details WHERE pet_id = id1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_pet` (IN `type` VARCHAR(50), IN `br` VARCHAR(50), IN `sex` VARCHAR(20), IN `color` VARCHAR(20), IN `age1` BIGINT(20), IN `img` VARCHAR(50), IN `cost` BIGINT(20), IN `cnt1` BIGINT(20), IN `id` INT(50))  NO SQL
UPDATE pet_details SET pet_type=type,breed=br,gender=sex,pet_color=color,age=age1,image=img,price=cost,count1=cnt1 WHERE `pet_id`= id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(20) NOT NULL,
  `pass_word` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `pass_word`) VALUES
('Aishwarya', 'aishwarya@2'),
('Ganesh', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `no` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`no`, `user_name`, `email`, `message`) VALUES
(1, 'ganesh', 'brganesh741@gmail.com', 'i am ganesh ,how can we contact you'),
(2, 'aishwarya', 'braishwarya878@gmail.com', 'helloo we loved the pets thanks'),
(3, 'br aishwarya', 'braish@gmail.com', 'thank you for the supplies');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(20) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_phno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `f_name`, `l_name`, `gender`, `cust_address`, `cust_email`, `cust_phno`) VALUES
(1, 'aishwarya', 'b r', 'F', '#399 J B nagar', 'braishwarya878@gmail.com', 7760046784),
(5, 'Anju', 'K P', 'F', '#44 Domlur ', 'anjukp2@gmail.com', 9990012317),
(11, 'ganesh', 'b r', 'M', '#399 J B nagar', 'brganesh@gmail.com', 9090112299),
(12, 'John', 'Sharma', 'M', '#44 Domlur ', 'john123@gmai.com', 9990012317),
(13, 'ganesh', 'br', 'M', 'heyy', 'tege@gmail.com', 22222),
(14, 'jenny', 'allen', 'F', 'bangalore', 'jenny@gmail.com', 2356234589),
(15, 'Harshit', 'Bhasin', 'M', 'bangalore', 'harshitbhasin@gmail.com', 7896532145);

-- --------------------------------------------------------

--
-- Table structure for table `customer_opt`
--

CREATE TABLE `customer_opt` (
  `customer_id` int(20) NOT NULL,
  `pet_id` int(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `branch_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_opt`
--

INSERT INTO `customer_opt` (`customer_id`, `pet_id`, `price`, `payment_status`, `branch_id`) VALUES
(1, 1, 500, 'Credit-card', 3),
(1, 34, 20000, 'Credit-card', 5),
(11, 25, 700, 'Cash', 1),
(11, 30, 1000, 'Cash', 1),
(11, 34, 20000, 'Credit-card', 1),
(12, 34, 20000, 'Cash', 4);

--
-- Triggers `customer_opt`
--
DELIMITER $$
CREATE TRIGGER `counter1` AFTER INSERT ON `customer_opt` FOR EACH ROW BEGIN
UPDATE pet_details set count1=count1-1 WHERE new.pet_id=pet_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `facility_no` int(50) NOT NULL,
  `gromming` varchar(20) NOT NULL DEFAULT 'NO',
  `vet` varchar(20) NOT NULL DEFAULT 'NO',
  `cost` bigint(20) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `appointment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facility_no`, `gromming`, `vet`, `cost`, `customer_id`, `appointment_date`) VALUES
(1, 'YES', 'NO', 1000, 11, '2018-11-07'),
(2, 'NO', 'YES', 1000, 1, '2018-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `sno` int(20) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`sno`, `Username`, `Password`) VALUES
(1, 'aishu', '1234'),
(5, 'anju', '123'),
(11, 'ganesh', '1212'),
(12, 'john', '11a'),
(14, 'jenny', '1234'),
(15, 'harshit', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pet_branch`
--

CREATE TABLE `pet_branch` (
  `branch_id` int(20) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `br_phno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_branch`
--

INSERT INTO `pet_branch` (`branch_id`, `branch_name`, `br_phno`) VALUES
(1, 'MARATHAHALLI', 8787856445),
(2, 'MAJESTIC', 9999555678),
(3, 'INDIRANAGAR', 6778878787),
(4, 'SHIVAGINAGAR', 7765588765),
(5, 'HAL', 9988767590);

-- --------------------------------------------------------

--
-- Table structure for table `pet_details`
--

CREATE TABLE `pet_details` (
  `pet_id` int(30) NOT NULL,
  `pet_type` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `pet_color` varchar(20) NOT NULL,
  `age` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` bigint(20) NOT NULL,
  `count1` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_details`
--

INSERT INTO `pet_details` (`pet_id`, `pet_type`, `breed`, `gender`, `pet_color`, `age`, `image`, `price`, `count1`) VALUES
(1, 'Cat', 'Maine Coon', 'male', 'Black', 5, 'cat.jpg', 500, 2),
(25, 'Dog', 'Australian Shepherd', 'Female', 'White', 3, 'wallpaper.jpg', 700, 0),
(27, 'Rabbit', 'American Fuzzy', 'Male', 'Brown', 3, 'bunny.jpg', 500, 4),
(30, 'Fish', '---', 'Female', 'Blue-White', 1, 'blue-fish.jpg', 1000, 9),
(32, 'Rabbit', 'Czech White', 'Male', 'White', 3, 'bb2.jpg', 500, 1),
(34, 'Dog', 'Poodle', 'Male', 'White', 7, 'poodle2.jpg', 20000, 1),
(36, 'Dog', 'Labrador Retriever', 'Male', 'White', 8, '27782235.jpg', 15000, 4),
(37, 'Cat', 'Tabby Grey Cat', 'Female', 'Grey', 10, 'w1.jpg', 3500, 4),
(41, 'Hamster', '---', 'Female', 'Brown', 3, 'ham.jpg', 6000, 1),
(42, 'Hamster', '-', 'Female', 'Brown', 4, 'hamsters.jpg', 1500, 0),
(43, 'Bird', 'Pigeon', 'Female', 'White', 5, 'amour.jpg', 550, 2),
(44, 'Fish', 'Goldfish', 'Male', 'Orange', 4, 'goldfish.jpg', 500, 5),
(45, 'Fish', 'Black-tetra', 'Female', 'Blue-Black', 6, 'tetra.jpg', 800, 2),
(46, 'Fish', 'Siamese', 'Male', 'Blue', 8, 'fish-2.jpg', 1500, 5),
(47, 'Bird', 'Love bird', 'Male', 'Red-blue', 9, 'lov-bird.jpg', 800, 3),
(48, 'Dog', 'Golden Retriever', 'Male', 'Brown', 10, 'img-ad.png', 2000, 1),
(49, 'Dog', 'German Shepherd', 'Female', 'Black', 7, 'dog_bag_pack.jpg', 3500, 3),
(50, 'Dog', 'retriver', 'm', 'golden', 12, 'dd.jpg', 3000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `fact_no` int(11) NOT NULL,
  `supply_name` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `available_count` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`fact_no`, `supply_name`, `price`, `available_count`) VALUES
(1, 'Cat house', 350, 3),
(2, 'Square aquarium', 700, 0),
(3, 'Flying disc frisbee', 190, 6),
(4, 'Dog/cat play pen tent', 200, 2),
(5, 'Soft ball', 200, 16),
(6, 'Dog bag pack', 1912, 5),
(7, 'Bird cage', 290, 4),
(8, 'Bird cage light holder', 500, 2),
(9, 'Bird house', 1990, 12),
(10, 'Pet house', 2940, 5),
(11, 'Wooden hamster house', 290, 2),
(12, 'Christmas supplies ', 800, 15),
(13, 'Meow mix cat food', 360, 10),
(14, 'Chicken plate for cat', 250, 7),
(15, 'Rabbit food', 70, 6),
(16, 'Pedigree dog food', 266, 11),
(17, 'Whiskas cat milk', 60, 0),
(18, 'Bird food', 60, 10),
(19, 'Vitakraft hamster food', 40, 4);

--
-- Triggers `supplies`
--
DELIMITER $$
CREATE TRIGGER `util` AFTER DELETE ON `supplies` FOR EACH ROW BEGIN
DELETE FROM utilizes WHERE fact_no=OLD.fact_no;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `utilizes`
--

CREATE TABLE `utilizes` (
  `customer_id` int(20) NOT NULL,
  `fact_no` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `branch` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizes`
--

INSERT INTO `utilizes` (`customer_id`, `fact_no`, `price`, `payment_status`, `branch`) VALUES
(5, 1, 350, 'Cash', 1),
(5, 19, 40, 'Credit-card', 2),
(11, 5, 200, 'Credit-card', 1);

--
-- Triggers `utilizes`
--
DELIMITER $$
CREATE TRIGGER `counter2` AFTER INSERT ON `utilizes` FOR EACH ROW BEGIN
UPDATE supplies SET available_count=available_count-1 where new.fact_no=fact_no;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_opt`
--
ALTER TABLE `customer_opt`
  ADD PRIMARY KEY (`customer_id`,`pet_id`,`branch_id`),
  ADD KEY `customer_id_2` (`customer_id`),
  ADD KEY `pet_id` (`pet_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`facility_no`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `pet_branch`
--
ALTER TABLE `pet_branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `pet_details`
--
ALTER TABLE `pet_details`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`fact_no`),
  ADD KEY `fact_no` (`fact_no`);

--
-- Indexes for table `utilizes`
--
ALTER TABLE `utilizes`
  ADD PRIMARY KEY (`customer_id`,`fact_no`,`branch`),
  ADD KEY `customer_id` (`customer_id`,`fact_no`),
  ADD KEY `fact_no` (`fact_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `facility_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_branch`
--
ALTER TABLE `pet_branch`
  MODIFY `branch_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pet_details`
--
ALTER TABLE `pet_details`
  MODIFY `pet_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `fact_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_opt`
--
ALTER TABLE `customer_opt`
  ADD CONSTRAINT `customer_opt_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_opt_ibfk_2` FOREIGN KEY (`pet_id`) REFERENCES `pet_details` (`pet_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `facility`
--
ALTER TABLE `facility`
  ADD CONSTRAINT `facility_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_in`
--
ALTER TABLE `log_in`
  ADD CONSTRAINT `log_in_ibfk_1` FOREIGN KEY (`sno`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `utilizes`
--
ALTER TABLE `utilizes`
  ADD CONSTRAINT `utilizes_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizes_ibfk_2` FOREIGN KEY (`fact_no`) REFERENCES `supplies` (`fact_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
