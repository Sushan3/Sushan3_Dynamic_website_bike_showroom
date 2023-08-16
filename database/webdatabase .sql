-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 02:52 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bikemodel` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `userid`, `email`, `bikemodel`, `phone`) VALUES
(4, 'admin123', 'mhrjsushan@gmail.coms', 'duke390s', '269990');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `bikemodel` varchar(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `bikemodel`, `rate`, `comment`) VALUES
(8, 'Duke390', '3star', 'Dammi raixa');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `feature` varchar(100) NOT NULL,
  `engine` varchar(100) NOT NULL,
  `mileage` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`id`, `name`, `type`, `status`, `price`, `feature`, `engine`, `mileage`, `no`, `images`) VALUES
(17, 'Duke 790s', 'THE SCALPELs', 'Naked', 270001, 'Good bike', '4-cylinder, 4-stroke, parallel twin', '3', '5-speeds', '1.jpeg'),
(18, 'Duke 390', ' CORNER ROCKET', 'Supersport', 270001, 'The KTM 390 DUKE breathes life into values that have made motorcycling so amazing for decades.', '3-cylinder, 4-stroke, parallel twin', '4.4', '5-speeds', 'pho_bike_90_re.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `middlename`, `lastname`, `address`, `dob`, `email`, `gender`, `phone`, `userid`, `password`) VALUES
(2, 'Sushan', '', 'maharjan', 'Hattigaunda', '2018-07-16', 'mhrjsushan@gmail.com', 'male', '9619280428', 'admin', 'admin'),
(3, 'ram2', '', 'maharjan2', 'kathmandu2', '2018-07-20', 'abc@j.com2', 'male', '+883-61-63222202', 'ram1232', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
