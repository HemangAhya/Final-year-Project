-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 06:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsvas`
--

-- --------------------------------------------------------

--
-- Table structure for table `road_symbol`
--

CREATE TABLE `road_symbol` (
  `pk_road_symbol_id` int(11) NOT NULL,
  `road_symbol_name` varchar(50) NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `road_symbol_image` varchar(50) NOT NULL,
  `road_symbol_voice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `road_symbol`
--

INSERT INTO `road_symbol` (`pk_road_symbol_id`, `road_symbol_name`, `fk_category_id`, `road_symbol_image`, `road_symbol_voice`) VALUES
(1, 'Stop', 1, 'stop', ''),
(2, 'Give way', 1, 'give_way', ''),
(3, 'No straight ahead', 1, 'no_straight_ahead', ''),
(4, 'No entry', 1, 'no_entry', ''),
(5, 'One-way traffic', 1, 'one_way_traffic_down', ''),
(6, 'one-way traffic', 1, 'One_way_traffic_up', ''),
(7, 'No vehicles in both directions', 1, 'no_vehicles_in_both_directions', ''),
(8, 'All motor vehicles prohibited', 1, 'all_motor_vehicles_prohibited', ''),
(9, 'No motorcycles', 1, 'no_motorcycles', ''),
(10, 'No bicycles', 1, 'no_bicycles', ''),
(11, 'No heavy vehicles', 1, 'no_heavy_vehicles', ''),
(12, 'No bullock carts', 1, 'no_bullock_carts', ''),
(13, 'No pedestrians', 1, 'no_pedestrians', ''),
(14, 'No left turn', 1, 'no_left_turn', ''),
(15, 'No right turn', 1, 'no_right_turn', ''),
(16, 'No U-turn', 1, 'no_u_turn', ''),
(17, 'No overtaking', 1, 'no_overtaking', ''),
(18, 'Speed limit', 1, 'speed_limit', ''),
(19, 'Weight limit', 1, 'weight_limit', ''),
(20, 'Height limit', 1, 'height_limit', ''),
(21, 'Length limit', 1, 'length_limit', ''),
(22, 'Axle weight limit', 1, 'axle_weight_limit', ''),
(23, 'Horn prohibited', 1, 'horn_prohibited', ''),
(24, 'End of all restrictions', 1, 'end_of_all_restrictions', ''),
(25, 'No parking', 1, 'no_parking', ''),
(26, 'No stopping', 1, 'no_stopping', ''),
(27, 'Turn left', 1, 'turn_left', ''),
(28, 'Turn right', 1, 'turn_right', ''),
(29, 'Proceed straight ahead', 1, 'proceed_straight_ahead', ''),
(30, 'Keep left', 1, 'keep_left', ''),
(31, 'Keep right', 1, 'keep_right', ''),
(32, 'Turn left ahead', 1, 'turn_left_ahead', ''),
(33, 'Turn right ahead', 1, 'turn_right_ahead', ''),
(34, 'Pass either side', 1, 'pass_either_side', ''),
(35, 'Bicycles only', 1, 'bicycles_only', ''),
(38, 'Parking', 3, 'parking', ''),
(39, 'Left curve', 2, 'left_curve', ''),
(40, 'Right Curve', 2, 'right_curve', ''),
(41, 'Narrow bridge', 2, 'narrow_bridge', ''),
(42, 'Narrow road', 2, 'narrow_road', ''),
(43, 'Roundabout ahead', 2, 'round_about_ahead', ''),
(44, 'Traffic signals ahead', 2, 'traffic_signals_ahead', ''),
(45, 'Level crossing with barrier ahead', 2, 'Level_crossing_with_barrier_ahead', ''),
(46, 'Level crossing without barrier ahead', 2, 'level_crossing_without_barrier_ahead', ''),
(47, 'Uneven road', 2, 'uneven_road', ''),
(48, 'Single level crossing', 2, 'single_level_crossing', ''),
(49, 'Multiple level crossing', 2, 'multiple_level_crossing', ''),
(50, 'Level crossing countdown (150 m)', 2, 'level_crossing_countdown_150', ''),
(51, 'Level crossing countdown (100 m)', 2, 'level_crossing_countdown_100', ''),
(52, 'Level crossing countdown (50 m)', 2, 'level_crossing_countdown_50', ''),
(53, 'Left arrow', 4, 'left_arrow', ''),
(54, 'Right arrow', 4, 'right_arrow', ''),
(55, 'Scooters and motorcycles', 4, 'scooters_and_motorcycles', ''),
(56, 'Bicycles', 4, 'bicycles', ''),
(57, 'Cars', 4, 'cars', ''),
(58, 'Auto rickshaws', 4, 'auto_rickshaws', ''),
(59, 'Cycle rickshaws', 4, 'cycle_rickshaws', '');

-- --------------------------------------------------------

--
-- Table structure for table `road_symbol_category`
--

CREATE TABLE `road_symbol_category` (
  `pk_category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `road_symbol_category`
--

INSERT INTO `road_symbol_category` (`pk_category_id`, `category_name`) VALUES
(1, 'Mandatory Signs'),
(2, 'Cautionary Signs'),
(3, 'Information Signs'),
(4, 'Additional Signs');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `pk_user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_profile_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`pk_user_id`, `user_email`, `user_mobile`, `user_password`, `user_profile_picture`) VALUES
(11, 'hemangahya015@gmail.com', '8765432123', '32250170a0dca92d53ec9624f336ca24', ''),
(12, 'bhavin.v6@gmail.com', '8767876787', '32250170a0dca92d53ec9624f336ca24', ''),
(13, 'smitshah917@gmail.com', '6767676767', '0d009e704072c5f284e06f5cdf9b2352', 'User_Home_CSS/img/profile.jpg'),
(15, 'raghuaya@gmail.com', '9898989898', '32250170a0dca92d53ec9624f336ca24', 'User_Home_CSS/img/15.jpg'),
(16, 'kaushalkakkad13@gmail.com', '7600626789', '1d6d5e17ce60d8027fe0ce6568050915', 'User_Home_CSS/img/16.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `road_symbol`
--
ALTER TABLE `road_symbol`
  ADD PRIMARY KEY (`pk_road_symbol_id`),
  ADD KEY `fk_category_id` (`fk_category_id`);

--
-- Indexes for table `road_symbol_category`
--
ALTER TABLE `road_symbol_category`
  ADD PRIMARY KEY (`pk_category_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`pk_user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `road_symbol`
--
ALTER TABLE `road_symbol`
  MODIFY `pk_road_symbol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `road_symbol_category`
--
ALTER TABLE `road_symbol_category`
  MODIFY `pk_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `road_symbol`
--
ALTER TABLE `road_symbol`
  ADD CONSTRAINT `road_symbol_ibfk_1` FOREIGN KEY (`fk_category_id`) REFERENCES `road_symbol_category` (`pk_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
