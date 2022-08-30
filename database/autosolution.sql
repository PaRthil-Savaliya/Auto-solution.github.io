-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 06:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autosolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Cid` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(300) NOT NULL,
  `Specification` varchar(100) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Fuel` varchar(10) NOT NULL,
  `Brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Cid`, `Name`, `Image`, `Specification`, `Price`, `Model`, `Fuel`, `Brand`) VALUES
(1, 'Mustang', '444439Aug-2022-Satmustang.jpg', 'American Muscle Car', '70 lakhs', '2018', 'Diesel', 'Audi'),
(2, 'cayman', '83763Jul-2022-MonPorsche gt.jpg', 'red colour', '1 crore', '2018', 'Petrol', 'Phorsche'),
(3, 'Boxter 718', '9815Jul-2022-Monboxterjpg.jpg', 'convertible', '2.1 crore', '2018', 'Diesel', 'Phorsche'),
(4, 'Terzo', '550313Jul-2022-Monterzo.jpg', 'A concept car', '8 crore', '2021', 'Petrol', 'Lamborghini'),
(5, 'sian', '860824Jul-2022-Monwp9073908.jpg', 'concept car of lamborghini', '6 crore', '2021', 'Petrol', 'Lamborghini'),
(6, 'X6', '350369Jul-2022-Monx6.jpg', 'white colour', '80 lakhs', '2017', 'Petrol', 'BMW'),
(7, 'Z4', '432631Jul-2022-Monz4.jpg', 'convertible', '1 crore', '2017', 'Diesel', 'BMW'),
(8, 'S650', '950883Jul-2022-Monsclass.jpg', 'luxurious car of mercedes', '2.78 crore', '2021', 'Petrol', 'Mercedes'),
(9, 'Urus', '578427Jul-2022-Monurus.jpg', 'fastest suv', '2 crore', '2018', 'Diesel', 'Lamborghini'),
(10, 'G-wagon g-63', '955326Jul-2022-Mong63.jpg', 'Fastest Suv ', '3 crore', '2018', 'Diesel', 'Mercedes'),
(11, 'Gls 4-matic', '819747Jul-2022-Mongls.jpg', 'Safest Suv', '1.89 crore', '2016', 'Petrol', 'Mercedes'),
(12, 'Amg GT', '115653Jul-2022-Mon2015_mercedes_amg_gt_solarbeam_3-HD.jpg', 'yellow colour', '1 crore', '2015', 'Diesel', 'Mercedes'),
(13, 'Range Rover sports', '930990Jul-2022-Monland-rover-range-rover-sv-coupe-3840x2160-2019-cars-suv-4k-18416.jpg', 'Premium Suv', '4 crore', '2021', 'Petrol', 'Audi'),
(14, 'macleren', '180693Jul-2022-Mon114.jpg', 'high speed car', '5 crore', '2018', 'Petrol', 'Audi'),
(15, 'F-pace', '827911Jul-2022-Monjaguar-f-type-chequered-flag-2018-rear_1541969140.jpg', 'white colour', '1.2 crore', '2016', 'Petrol', 'Audi'),
(20, 'Amg Ev', '240150Jul-2022-Tueev2.jpg', 'electric transmission', '3 crore', '2021', 'Electronic', 'Mercedes'),
(21, 'BMW Ev ', '198214Jul-2022-Tueev.jpg', 'color changing car', '45 lakhs', '2018', 'Electronic', 'BMW'),
(22, 'A8', '263791Jul-2022-Tueaudi.jpg', 'snow white', '40 lakhs', '2016', 'Petrol', 'Audi'),
(23, 'panemera', '560470Jul-2022-Tuee22e80284bf22aae5927631c958246fd.jpg', 'red colour', '3 crore', '2018', 'Electronic', 'Phorsche'),
(29, 'C450', '23698Aug-2022-Sat229268.jpeg', 'Comfort class', '55 lakhs', '2021', 'Diesel', 'Mercedes'),
(32, 'Endevour', '646035Aug-2022-Satmaxresdefault.jpg', 'Off Roader', '50 lakhs', '2018', 'Diesel', 'Phorsche'),
(33, 'Macan', '300555Aug-2022-SatThe all-electric Porsche Taycan saw an outstanding increase with 41,296 units.jpeg', 'Hybrid Car', '1 crore', '2021', 'Electronic', 'Phorsche'),
(34, '911 Carrera', '571218Aug-2022-Sat2022-porsche-911-carrera-gts-001.jpg', 'Snow white', '2 crore', '2016', 'Petrol', 'Phorsche'),
(35, 'Huracan', '252360Aug-2022-Satsian_05_m.jpg', 'Sports Car', '3 crore', '2017', 'Diesel', 'Lamborghini'),
(37, 'Q7', '491964Aug-2022-MonA198106_blog.jpg', 'black', '1 crore', '2018', 'Diesel', 'Audi'),
(38, 'SVR Sports', '205759Aug-2022-Satrr-moab_h.jpg', 'Off-Roader ', '80 lakhs', '2015', 'Petrol', 'BMW');

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `Cid` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Car_type` varchar(30) NOT NULL,
  `Color` varchar(30) NOT NULL,
  `Engine` varchar(30) NOT NULL,
  `Fuel` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Image` varchar(600) NOT NULL,
  `Mileage` varchar(10) NOT NULL,
  `Seating_cap` int(5) NOT NULL,
  `Fueltank` varchar(10) NOT NULL,
  `Transmission` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`Cid`, `Name`, `Car_type`, `Color`, `Engine`, `Fuel`, `Brand`, `Model`, `Image`, `Mileage`, `Seating_cap`, `Fueltank`, `Transmission`) VALUES
(2, 'cayman', 'Coupe', 'REd', 'A2Rd', 'Petrol', 'Phorsche', '2018', '71Porsche gt.jpg', '10', 2, '50 Ltr', 'Automatic'),
(3, 'Boxter 718', 'Convertible', 'Yellow', 'TSI ', 'Petrol', 'Phorsche', '2018', '853boxterjpg.jpg', '8', 2, '70 ltr', 'Automatic'),
(4, 'Terzo', 'Coupe', 'orange', 'Lambo TD', 'Petrol', 'Lamborghini', '2021', '930terzo.jpg', '3', 2, '80 ltr', 'Automatic'),
(6, 'X6', 'Suvs', 'Blue', 'TDI', 'Petrol', 'BMW', '2017', '846x6.jpg', '6', 7, '60 Ltr', 'Hybrid'),
(8, 'S650', 'Sedan', 'Blue', 'V6 turbo', 'Petrol', 'Mercedes', '2021', '969sclass.jpg', '14', 4, '70 ltr', 'Automatic'),
(9, 'Urus', 'Suvs', 'Blue', 'V8 Turbo', 'Diesel', 'Lamborghini', '2018', '5urus.jpg', '13', 4, '80 ltr', 'Manual'),
(10, 'G-wagon G-63', 'Suvs', 'White', 'V12 Turbo', 'Diesel', 'Mercedes', '2018', '830g63.jpg', '10', 4, '90 ltr', 'Automatic'),
(11, 'Gls 4-matic', 'Suvs', 'Black', 'V8 Turbo', 'Petrol', 'Mercedes', '2016', '304gls.jpg', '15', 7, '80 ltr', 'Automatic'),
(12, 'Amg GT', 'Convertible', 'Yellow', 'V6 turbo', 'Diesel', 'Mercedes', '2015', '4102015_mercedes_amg_gt_solarbeam_3-HD.jpg', '10', 2, '60 Ltr', 'Manual'),
(13, 'Range Rover Sport', 'Suvs', 'purple', 'V8 Turbo', 'Petrol', 'Audi', '2021', '198land-rover-range-rover-sv-coupe-3840x2160-2019-cars-suv-4k-18416.jpg', '13', 6, '60 Ltr', 'Automatic'),
(14, 'Macleran', 'Convertible', 'orange', 'V8 Turbo', 'Petrol', 'Audi', '2018', '444114.jpg', '13', 2, '50 Ltr', 'Hybrid'),
(15, 'F-pace', 'Coupe', 'white', 'TSI ', 'Petrol', 'Audi', '2016', '610jaguar-f-type-chequered-flag-2018-rear_1541969140.jpg', '10', 4, '80 ltr', 'Automatic'),
(20, 'Amg Ev', 'Sedan', 'Silver', 'TSI ', 'Electronic', 'Mercedes', '2021', '556ev2.jpg', '20', 4, '0', 'Hybrid'),
(21, 'BMW EV', 'Suvs', 'White', 'V8 Turbo', 'Electronic', 'BMW', '2018', '245ev.jpg', '21', 4, '0', 'Hybrid'),
(22, 'A8', 'Coupe', 'White', 'V8 Turbo', 'Petrol', 'Audi', '2016', '67audi.jpg', '3', 4, '70 ltr', 'Manual'),
(23, 'Panemra', 'Coupe', 'red', 'V8 Turbo', 'Electronic', 'Phorsche', '2021', '855e22e80284bf22aae5927631c958246fd.jpg', '10', 4, '0', 'Hybrid'),
(29, 'C450', 'Sedan', 'Black', 'TSI Turbo', 'Diesel', 'Mercedes', '2021', '594Array', '10', 4, '70 ltr', 'Automatic'),
(1, 'Mustang', 'Coupe', 'Blue', 'V8 turbo', 'Diesel', 'Audi', '2018', '402Array', '10', 2, '70 ltr', 'Automatic'),
(32, 'Endevour', 'Suvs', 'Black', 'TDI ', 'Diesel', 'Phorsche', '2018', '397Array', '7', 7, '70 ltr', 'Manual'),
(33, 'Macan', 'Coupe', 'white', 'W8 Power', 'Electronic', 'Phorsche', '2021', '492Array', '13', 4, '0 ', 'Hybrid'),
(34, '911 carrera', 'Convertible', 'white', 'V8 turbo', 'Petrol', 'Phorsche', '2016', '107Array', '8', 2, '80 ltr', 'Automatic'),
(35, 'Huracan', 'Convertible', 'black', 'W12 Turbo ', 'Diesel', 'Lamborghini', '', '926Array', '3', 2, '95 ltr', 'Automatic'),
(5, 'Sian ', 'Convertible', 'orange', 'W12 Turbo ', 'Petrol', 'Lamborghini', '2021', '816Array', '3', 2, '60 Ltr', 'Automatic'),
(37, 'Q7', 'Suvs', 'Red', 'TSI Turbo', 'Diesel', 'Audi', '2018', '471Array', '7', 7, '80 ltr', 'Automatic'),
(7, 'Z4', 'Convertible', 'Red', 'TSI Turbo', 'Diesel', 'BMW', '2017', '645Array', '10', 2, '70 ltr', 'Automatic'),
(38, 'SVR Sport', 'Suvs', 'Gold', 'V8 turbo', 'Petrol', 'BMW', '2015', '272Array', '7', 6, '80 ltr', 'Automatic');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `Srno` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Image` varchar(350) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`Srno`, `Name`, `Image`, `Mobile`, `Email`, `Gender`, `Username`, `Password`) VALUES
(1, 'Parthil Savaliya', '814262Aug-2022-Fri101.jpg', 7990553100, 'parthil20@gmail.com', 'Male', 'Parthil20', '@Parthil20'),
(3, 'Ayush Donda', '189278Aug-2022-Thu103.jpg', 6548112155, 'ayush2121@gmail.com', 'Male', 'ayush123', 'ayush@123'),
(4, 'khushal patel', '707031Aug-2022-Sat105.jpg', 7955112121, 'khushal123@gmail.com', 'Male', 'KDpatel', 'khushal@123'),
(5, 'pratap singh', '134537Aug-2022-Mon102.jpg', 5612545433, 'pratap@gmail.com', 'Male', 'pratap123', 'Pratap@123'),
(7, 'Hardik pandya', '776174Aug-2022-Satearly-year-1280x720.jpg', 7566545678, 'hk33@gmail.com', 'Male', 'HK33', '@hk__33');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Cid` int(11) NOT NULL,
  `Co_id` int(5) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mno` bigint(10) NOT NULL,
  `Amno` bigint(10) NOT NULL,
  `card_holder_nm` varchar(30) NOT NULL,
  `card_no` bigint(14) NOT NULL,
  `Cvv` int(3) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Cid`, `Co_id`, `Fname`, `Lname`, `Email`, `Mno`, `Amno`, `card_holder_nm`, `card_no`, `Cvv`, `Month`, `Year`) VALUES
(3, 2, 'uytre', 'ksgmklvs', 'dsgj@jdn.vom', 547457, 43636, 'jsngjs', 690835986989, 0, 'November', 2026),
(12, 3, 'Krishna ', 'Yadav', 'yadav@gmail.com', 8976780956, 9807685689, 'Krishna Y', 56780934786512, 456, 'August', 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD KEY `Cid_fk` (`Cid`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Co_id`),
  ADD UNIQUE KEY `chno` (`card_no`),
  ADD UNIQUE KEY `card_no` (`card_no`),
  ADD UNIQUE KEY `card_no_2` (`card_no`),
  ADD KEY `Cid` (`Cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `Cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `Srno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Co_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_info`
--
ALTER TABLE `car_info`
  ADD CONSTRAINT `Cid_fk` FOREIGN KEY (`Cid`) REFERENCES `cars` (`Cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `Cid` FOREIGN KEY (`Cid`) REFERENCES `cars` (`Cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
