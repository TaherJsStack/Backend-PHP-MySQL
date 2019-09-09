-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 04:50 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketcompant`
--

-- --------------------------------------------------------

--
-- Table structure for table `clints`
--

CREATE TABLE `clints` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_age` varchar(255) DEFAULT NULL,
  `c_phone` varchar(255) DEFAULT NULL,
  `c_passpor` varchar(255) DEFAULT NULL,
  `c_mail` varchar(255) DEFAULT NULL,
  `c_country` varchar(255) DEFAULT NULL,
  `c_city` varchar(255) DEFAULT NULL,
  `c_streat` varchar(255) DEFAULT NULL,
  `c_regdate` date DEFAULT NULL,
  `c_statues` int(11) DEFAULT '0',
  `c_groupID` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clints`
--

INSERT INTO `clints` (`c_id`, `c_name`, `c_age`, `c_phone`, `c_passpor`, `c_mail`, `c_country`, `c_city`, `c_streat`, `c_regdate`, `c_statues`, `c_groupID`) VALUES
(1, 'taher', '24', '01155721425', '123123', 't.taher.php@gmail.com', 'Egypt', 'Qina', 'Elshahead', '2017-12-20', 1, 1),
(3, 'Amr_', '555', '555555', '5555', 'ahmed@ahmed', 'Elfayom', 'Elfayom', 'Elfayom', '2017-12-07', 1, 0),
(4, 'khaled', '34', '0125545654', '3145468434155', 'khaled@khaled', 'yamen', 'yamen', 'yamen', '2017-12-08', 1, 0),
(5, 'amr', '26', '0021225454557', '3245456658756', 'amr@amr', 'syrua', 'halap', 'hala', '2017-12-08', 1, 0),
(6, 'Mahmoud', '24', '00213546654', '5423545566', 'Mahmoud@Mahmoud', 'Egypt', 'Lixur', 'ElaSahed', '2017-12-08', 1, 0),
(7, 'alaa', '38', '00321524854', '314654654', 'alaa@alaa', 'somal', 'somal', 'somal', '2017-12-08', 1, 0),
(10, 'ahmed', '25', '54654654', '654654654654', 'ahmed@ahmed', 'yamen', 'Elfayom', 'hala', '2017-12-08', 1, 0),
(11, 'hammo', '22', '6534346', '43563456', 'ahmed@ahmed', 'Elfayom', 'Elfayom', 'yamen', '2017-12-09', 1, 0),
(12, 'hamde', '36', '0123354664', '55412455477', 'hamde@hamde', 'somal', 'libnan', 'hala', '2017-12-09', 1, 0),
(13, NULL, NULL, NULL, NULL, 'creazyFrog@craze', NULL, NULL, NULL, NULL, 0, 0),
(14, 'Hayef', NULL, NULL, NULL, 'creazyFrog@craze', NULL, NULL, NULL, NULL, 0, 0),
(15, 'Hayef', NULL, NULL, NULL, 'hossny@hossny', NULL, NULL, NULL, NULL, 0, 0),
(16, 'Hayef', NULL, NULL, NULL, 'hossny@hossny', NULL, NULL, NULL, NULL, 0, 0),
(17, 'Hayef', NULL, NULL, NULL, 'hossny@hossny', NULL, NULL, NULL, NULL, 0, 0),
(18, 'Hayef', NULL, NULL, NULL, 'hossny@hossny', NULL, NULL, NULL, NULL, 0, 0),
(19, 'Hayef', NULL, NULL, NULL, 'creazyFrog@crazet', NULL, NULL, NULL, NULL, 0, 0),
(20, 'Hayef', NULL, NULL, NULL, 'hossny@hossn', NULL, NULL, NULL, NULL, 0, 0),
(21, 'said', '33', '24654654', '646546545', 'fdfrtyhert$fdghdf@fghsdf', 'qruatia', 'qruatia', 'qruatia', NULL, 1, 0),
(23, 'Sameh', '25', '012245556668', '32114565545', 'Sameh@Sameh', 'sudan', 'sudan', 'sudan', '2017-12-12', 1, 0),
(24, 'test', '555', '555', '555', 'creazyFrog@craze', 'tunes', 'Elfayom', 'yamen', '2017-12-13', 0, 0),
(25, 'ahmed', '555', '67465', '486768567', 'hossny@hossny', 'tunes', 'libnan', 'yamen', '2017-12-13', 0, 0),
(26, 'www', '22', '456345', '34653456345', 'creazyFrog@craze', 'tunes', 'qruatia', 'tunes', '2017-12-13', 0, 0),
(27, 'dsgds', '6', '55615', '5655', 'creazyFrog@craze', 'yamen', 'libnan', 'yamen', '2017-12-14', 1, 0),
(28, 'ahmed', '555', '463456453', '35765367456', 'ahmed@ahmed', 'yamen', 'qruatia', 'tunes', '2017-12-16', 0, 0),
(29, 'rrrr', '22', '54765', '745674576456', 'hossny@hossn', 'tunes', 'libnan', 'hala', '2017-12-16', 0, 0),
(30, 'ahmed', '24', '34534634564536', '5763457654756745', 'creazyFrog@craze', 'Honduras', 'Lempira', 'Elfayom', '2017-12-16', 0, 0),
(31, 'khaled', '22', '634563', '34563456345', 'ahmed@ahmed', 'Austria', 'Niederoesterreich', 'tunes', '2017-12-18', 1, 0),
(32, 'rrrr', '555', '34', '48354656', 'ahmed@ahmed', 'Bangladesh', 'Khagrachari', 'yamen', '2017-12-18', 1, 0),
(33, 'ahmed33', '21', '012089408', '123456', 'ahmed33@ahmed', 'Egypt', 'Aswan', 'ASDQWE', '2017-12-19', 1, 0),
(34, 'ahmed', '555', '6846785678567', '9999999999', 'creazyFrog@craze', 'Azerbaijan', 'Beylaqan Rayonu', 'tunes', '2017-12-20', 1, 0),
(35, 'ahmed', '22', '2', '2', 'ahmed@ahmed', 'Azerbaijan', 'Cabrayil Rayonu', 'tunes', '2017-12-20', 1, 0),
(36, 'Hayef', NULL, NULL, NULL, 'atfey@atfey', NULL, NULL, NULL, NULL, 0, 0),
(37, 'atfey', '22', '456464565', '14714747', 'atfey@atfey', 'Austria', 'Oberoesterreich', 'Elfayom', '2017-12-20', 1, 0),
(38, 'Hayef', NULL, NULL, NULL, 'ahmedADD@ahmed', NULL, NULL, NULL, NULL, 0, 0),
(39, 'tito', '24', '01155721425', '147147', 't.taher44@yahoo.com', 'Azerbaijan', 'Daskasan Rayonu', 'Elfayom', '2017-12-30', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `clints_hotels`
--

CREATE TABLE `clints_hotels` (
  `c_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clints_hotels`
--

INSERT INTO `clints_hotels` (`c_id`, `h_id`) VALUES
(1, 41),
(3, 21),
(11, 26),
(12, 2),
(21, 24),
(23, 3),
(23, 4),
(23, 5),
(23, 6),
(23, 25),
(24, 23),
(25, 32),
(28, 27),
(29, 28),
(29, 29),
(29, 30),
(29, 31),
(31, 33),
(32, 34),
(32, 35),
(34, 36),
(34, 37),
(37, 34);

-- --------------------------------------------------------

--
-- Table structure for table `clints_trips`
--

CREATE TABLE `clints_trips` (
  `c_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clints_trips`
--

INSERT INTO `clints_trips` (`c_id`, `t_id`) VALUES
(1, 169),
(3, 138),
(3, 139),
(3, 141),
(4, 9),
(5, 5),
(5, 106),
(6, 109),
(7, 124),
(10, 126),
(11, 128),
(11, 131),
(11, 132),
(11, 133),
(11, 134),
(12, 135),
(21, 144),
(23, 136),
(24, 142),
(24, 143),
(25, 150),
(29, 146),
(29, 147),
(31, 151),
(33, 153),
(34, 154),
(34, 155),
(37, 152),
(37, 170),
(37, 171),
(39, 172);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(255) DEFAULT NULL,
  `h_cuntry` varchar(255) NOT NULL,
  `h_city` varchar(255) NOT NULL,
  `h_rom_coun` int(11) DEFAULT NULL,
  `h_serv_kind` varchar(255) DEFAULT NULL,
  `h_tim_stay` int(11) DEFAULT NULL,
  `h_date_stat` date DEFAULT NULL,
  `h_cust` int(11) NOT NULL,
  `h_stat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`h_id`, `h_name`, `h_cuntry`, `h_city`, `h_rom_coun`, `h_serv_kind`, `h_tim_stay`, `h_date_stat`, `h_cust`, `h_stat`) VALUES
(1, 'helton', '', '', 2017, '2017', 2, '2017-12-08', 0, 1),
(2, 'helton', '', '', 2017, '2017', 5, '2017-12-09', 0, 1),
(3, 'rgan', '', '', 2017, '2017', 7, '2017-12-12', 0, 1),
(4, 'sezon', '', '', 2017, '2017', 3, '2017-12-12', 0, 1),
(5, 'helton', '', '', 2, '0', 2, '2017-12-12', 0, 1),
(6, 'helton', '', '', 2, 'high', 2, '2017-12-12', 0, 1),
(7, 'test', '', '', 2, 'good', 2, '2017-12-12', 0, 0),
(8, 'testr', '', '', 3, 'goodd', 2, '2017-12-12', 0, 0),
(9, 'testr4', '', '', 35, 'goodd', 2, '2017-12-12', 0, 0),
(10, 'testr4h', '', '', 35, 'goodd', 2, '2017-12-12', 0, 0),
(11, 'testr4hh', '', '', 35, 'goodd', 2, '2017-12-12', 0, 1),
(12, 'testr4hhg', '', '', 35, 'goodd', 2, '2017-12-12', 0, 0),
(13, 'testr4hhyug', '', '', 35, 'goodd', 2, '2017-12-12', 0, 0),
(14, 'testr4hhghjyug', '', '', 35, 'goodd', 2, '2017-12-12', 0, 0),
(15, 'jfg', '', '', 76, 'goodd', 2, '2017-12-12', 0, 0),
(16, 'jfgg', '', '', 76, 'goodd', 2, '2017-12-12', 0, 0),
(17, 'jfggh', '', '', 76, 'goodd', 2, '2017-12-12', 0, 0),
(18, 'jfgghg', '', '', 76, 'goodd', 2, '2017-12-12', 0, 0),
(19, 'ghj', '', '', 76, 'goodd', 2, '2017-12-12', 0, 0),
(20, 'ghjh', '', '', 76, 'goodd', 2, '2017-12-12', 0, 0),
(21, 'ghjhyt', '', '', 76, 'goodd', 2, '2017-12-12', 0, 0),
(22, 'helton', '', '', 1, '1', 1, '2017-12-12', 0, 0),
(23, 'rgan', '', '', 3, 'goodd', 2, '2017-12-13', 0, 1),
(24, 'rgan', '', '', 5, 'goodd', 5, '2017-12-14', 0, 0),
(25, 'helton', '', '', 7, 'goodd', 5, '2017-12-16', 0, 0),
(26, 'helton', '', '', 2, '2018', 5, '2017-12-16', 0, 1),
(27, 'helton', '', '', 5, 'goodd', 5, '2017-12-16', 0, 0),
(28, 'rgang', '', '', 6, 'goodd', 5, '2017-12-16', 0, 0),
(29, 'helton', '', '', 9, 'goodd', 5, '2017-12-16', 0, 0),
(30, 'helton', '', '', 7567, 'goodd', 2, '2017-12-16', 0, 0),
(31, 'rgan', '', '', 6, '2018', 5, '2017-12-16', 0, 0),
(32, 'rgang', '', '', 3, 'goodd', 5, '2017-12-18', 0, 0),
(33, 'helton', '', '', 10, '2018', 7, '2017-12-18', 0, 0),
(34, 'helton', '', '', 2, 'goodd', 5, '2017-12-18', 1, 1),
(35, 'rgan', '', '', 65465, '2018', 5, '2017-12-18', 0, 0),
(36, 'helton', '', '', 4, 'goodd', 2, '2017-12-20', 0, 0),
(37, 'rgan', '', '', 3, 'goodd', 5, '2017-12-20', 0, 0),
(38, 'helton', 'Australia', 'Northern Territory', 1, 'goodd', 2, '2017-12-20', 0, 0),
(39, 'rgang', 'Ashmore and Cartier Island', 'Ashmore and Cartier Island', 2, 'goodd', 5, '2017-12-20', 0, 0),
(40, 'rgang', 'Bahamas', 'Rock Sound', 15, 'vip', 5, '2017-12-20', 0, 0),
(41, 'rgan', 'Bahamas', 'Marsh Harbour', 2, 'goodd', 5, '2017-12-20', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `t_id` int(11) NOT NULL,
  `t_no` int(11) DEFAULT NULL,
  `t_time_go` date DEFAULT NULL,
  `t_time_back` date DEFAULT NULL,
  `t_place_go` varchar(255) DEFAULT NULL,
  `t_place_back` varchar(255) DEFAULT NULL,
  `t_chair_count` int(11) DEFAULT NULL,
  `t_fave_com` varchar(255) DEFAULT NULL,
  `t_class` varchar(255) DEFAULT NULL,
  `t_cust` int(11) NOT NULL,
  `t_statues` int(11) DEFAULT NULL,
  `t_reg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`t_id`, `t_no`, `t_time_go`, `t_time_back`, `t_place_go`, `t_place_back`, `t_chair_count`, `t_fave_com`, `t_class`, `t_cust`, `t_statues`, `t_reg_date`) VALUES
(1, 20178, '2017-12-16', '2018-01-05', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(4, 2017, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(5, 2017, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(6, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(7, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(8, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(9, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(12, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(13, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(14, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(15, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(16, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(17, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(18, 8, '2017-12-15', '2017-12-30', 'parice', 'Egypt', 2, 'AirForce', '1', 0, 1, '2017-12-07'),
(26, 11, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 1, '2017-12-07'),
(27, 12, '2017-01-15', '2017-05-22', 'parice', 'Egypt', 9, 'AirForce', '3', 0, 0, '2017-12-07'),
(28, 19, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(29, 18, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(30, 17, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(31, 17, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(32, 17, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(33, 17, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(34, 17, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(35, 17, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(37, 172, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(38, 16, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(39, 16, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(40, 16, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(41, 162, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(42, 162, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(43, 15, '2017-12-15', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(44, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(45, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(46, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(47, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(48, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(49, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(50, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(51, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(52, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(53, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(54, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(55, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(56, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(57, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(58, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(59, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(60, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(61, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(62, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(63, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(64, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(65, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(66, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(67, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(68, 13, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(69, 13, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(70, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(71, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(72, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(73, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(74, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(75, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(76, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(77, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(78, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(79, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(80, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(81, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(82, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(83, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(84, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(85, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(86, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(87, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(88, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(89, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(90, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(91, 26, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(92, 17, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(93, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(94, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(95, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(96, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(97, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(98, 11, '2017-12-22', '2017-12-22', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-07'),
(99, 11, '2017-12-22', '2017-12-29', 'Russan', 'England', 5, 'AirForce', '2', 0, 0, '2017-12-08'),
(100, 11, '2017-12-22', '2017-12-29', 'Russan', 'England', 5, 'AirForce', '2', 0, 0, '2017-12-08'),
(101, 11, '2017-12-22', '2017-12-29', 'Russan', 'England', 5, 'AirForce', '2', 0, 0, '2017-12-08'),
(102, 11, '2017-12-22', '2017-12-29', 'Russan', 'England', 5, 'AirForce', '2', 0, 0, '2017-12-08'),
(103, 11, '2017-12-22', '2017-12-29', 'Russan', 'England', 5, 'AirForce', '2', 0, 0, '2017-12-08'),
(104, 9, '2018-01-06', '2017-12-02', 'turcsh', 'japan', 4, 'ymenAir', '1', 0, 0, '2017-12-08'),
(105, 9, '2018-01-06', '2017-12-02', 'turcsh', 'japan', 4, 'ymenAir', '1', 0, 0, '2017-12-08'),
(106, 5, '2017-12-28', '2017-12-30', 'libya', 'algrya', 3, 'libyaTrav', '2', 0, 1, '2017-12-08'),
(108, 5, '2017-12-28', '2017-12-30', 'libya', 'algrya', 3, 'libyaTrav', '2', 0, 1, '2017-12-08'),
(109, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(110, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(111, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(112, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(113, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(114, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(115, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(116, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(117, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(118, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(119, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(120, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(121, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(122, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(123, 13, '2017-12-22', '2017-12-30', 'italya', 'huland', 8, 'italAir', '2', 0, 0, '2017-12-08'),
(124, 77, '2017-12-15', '2017-12-23', 'china', 'jpouty', 2, 'smalianaAirPor', '2', 0, 0, '2017-12-08'),
(125, 22, '2017-12-16', '2017-12-30', 'holanda', 'libnan', 2, 'holandAir', '2', 0, 0, '2017-12-08'),
(126, 11, '2017-12-08', '2017-12-23', 'parice', 'japan', 2, 'ymenAir', '2', 0, 1, '2017-12-08'),
(127, 11, '2017-12-08', '2017-12-23', 'parice', 'japan', 2, 'ymenAir', '2', 0, 0, '2017-12-08'),
(128, 11, '2017-12-15', '2017-12-29', 'libya', 'japan', 7, 'ymenAir', '1', 0, 0, '2017-12-09'),
(129, 11, '2017-12-15', '2017-12-29', 'libya', 'japan', 7, 'ymenAir', '1', 0, 0, '2017-12-09'),
(130, 11, '2017-12-15', '2017-12-29', 'libya', 'japan', 7, 'ymenAir', '1', 0, 0, '2017-12-09'),
(131, 111, '2017-12-15', '2017-12-29', 'libya', 'japan', 7, 'ymenAir', '1', 0, 0, '2017-12-09'),
(132, 11, '2017-12-14', '2017-12-28', 'libya', 'Egypt', 3, 'libyaTrav', '2', 0, 0, '2017-12-09'),
(133, 111, '2017-12-14', '2017-12-28', 'libya', 'Egypt', 3, 'libyaTrav', '2', 0, 0, '2017-12-09'),
(134, 1111, '2017-12-14', '2017-12-28', 'libya', 'Egypt', 3, 'libyaTrav', '2', 0, 0, '2017-12-09'),
(135, 8, '2017-12-22', '2017-12-15', 'china', 'Egypt', 4, 'ymenAir', '2', 0, 0, '2017-12-09'),
(136, 9, '2017-12-15', '2017-12-23', 'italya', 'Egypt', 2, 'ymenAir', '4', 0, 1, '2017-12-12'),
(137, 255, '2017-12-12', '2017-12-12', 'geputy', 'geputy', 1, 'AirForce', '1', 0, 0, '2017-12-12'),
(138, 2555, '2017-12-12', '2017-12-12', 'geputyy', 'geputyy', 1, 'AirForce', '1', 0, 0, '2017-12-12'),
(139, 255, '2017-12-12', '2017-12-12', 'parice', 'parice', 1, 'AirForce', '1', 0, 1, '2017-12-12'),
(140, 25552, '2017-12-12', '2017-12-12', 'geputyy', 'geputyy', 1, 'AirForce', '1', 0, 0, '2017-12-12'),
(141, 255521, '2017-12-12', '2017-12-12', 'geputyy', 'geputyy', 1, 'AirForce', '1', 0, 1, '2017-12-12'),
(142, NULL, '2017-12-01', '2017-12-02', 'parice', 'Egypt', 2, 'AirForce', '2', 0, 0, '2017-12-13'),
(143, NULL, '2017-12-29', '2018-01-06', 'libya', 'japan', 2, 'libyaTrav', '2', 0, 0, '2017-12-13'),
(144, NULL, '2017-12-08', '2017-12-28', 'parice', 'japan', 3, 'AirForce', '2', 0, 0, '2017-12-14'),
(145, 55, '2017-12-07', '2017-12-29', 'geputyy', 'japan', 2, 'ymenAir', '3', 0, 1, '2017-12-16'),
(146, NULL, '2017-12-09', '2017-12-09', 'geputyy', 'parice', 4, 'ymenAir', '2', 0, 0, '2017-12-16'),
(147, NULL, '2017-12-28', '2018-01-04', 'libya', 'japan', 7, 'ymenAir', '3', 0, 0, '2017-12-16'),
(148, NULL, '2017-11-30', '2017-12-15', 'Azerbaijan', 'Austria', 2, 'libyaTrav', '3', 0, 0, '2017-12-18'),
(149, NULL, '2017-12-21', '2017-12-22', 'Austria', 'Australia', 6, 'ymenAir', '3', 0, 0, '2017-12-18'),
(150, 8, '2017-12-07', '2017-12-15', 'Austria', 'Austria', 2, 'libyaTrav', '2', 0, 0, '2017-12-18'),
(151, NULL, '2017-12-07', '2017-12-30', 'Azerbaijan', 'Austria', 5, 'libyaTrav', '2', 0, 0, '2017-12-18'),
(152, NULL, '2017-12-22', '2017-12-23', 'Bahamas', 'Ashmore and Cartier Island', 2, 'ymenAir', '1', 1, 1, '2017-12-18'),
(153, NULL, '2017-12-11', '2017-12-15', 'Bahamas', 'Azerbaijan', 2, 'ymenAir', '1', 0, 0, '2017-12-19'),
(154, NULL, '2017-12-07', '2017-12-22', 'Azerbaijan', 'Bahamas', 3, 'ymenAir', '1', 0, 0, '2017-12-20'),
(155, NULL, '2017-12-21', '2017-12-22', 'Azerbaijan', 'Australia', 3, 'ymenAir', '2', 0, 1, '2017-12-20'),
(156, NULL, '2017-12-21', '2017-12-14', 'Austria', 'Ashmore and Cartier Island', 1, 'italAir', '2', 0, 0, '2017-12-20'),
(157, NULL, '2017-12-15', '2017-12-30', 'Azerbaijan', 'Germany', 4, 'libyaTrav', '2', 0, 0, '2017-12-20'),
(158, NULL, '2017-12-15', '2017-12-16', 'Austria', 'Bangladesh', 77, 'italAir', '4', 0, 1, '2017-12-20'),
(159, NULL, '2017-12-15', '2017-12-30', 'Australia', 'Armenia', 2, 'libyaTrav', '2', 0, 0, '2017-12-20'),
(160, NULL, '2017-12-16', '2017-12-30', 'Bahamas', 'Austria', 2, 'ymenAir', '2', 0, 0, '2017-12-20'),
(161, NULL, '2017-12-22', '2017-12-16', 'Bahamas', 'Australia', 2, 'ymenAir', '2', 0, 0, '2017-12-20'),
(162, NULL, '2017-12-08', '2017-12-21', 'Azerbaijan', 'Azerbaijan', 2, 'libyaTrav', '1', 0, 0, '2017-12-20'),
(163, NULL, '2017-12-16', '2017-12-23', 'Bahamas', 'Azerbaijan', 17, 'libyaTrav', '3', 0, 0, '2017-12-20'),
(164, NULL, '2017-12-09', '2017-12-16', 'Bahamas', 'Bahrain', 2, 'libyaTrav', '2', 0, 0, '2017-12-20'),
(165, NULL, '2017-12-22', '2017-12-10', 'Bahamas', 'Bahrain', 2, 'libyaTrav', '2', 0, 0, '2017-12-20'),
(166, NULL, '2017-12-17', '2017-12-27', 'Bahamas', 'Armenia', 4, 'libyaTrav', '4', 0, 1, '2017-12-20'),
(167, NULL, '2017-12-14', '2017-12-29', 'Austria', 'Australia', 3, 'AirForce', '2', 0, 0, '2017-12-20'),
(168, NULL, '2017-12-07', '2017-12-21', 'Australia', 'Bahamas', 0, 'italAir', '3', 0, 0, '2017-12-20'),
(169, NULL, '2017-12-23', '2017-12-29', 'Bahrain', 'Azerbaijan', 3, 'libyaTrav', '3', 0, 1, '2017-12-20'),
(170, NULL, '2017-12-15', '2017-12-22', 'Australia', 'Barbados', 16, 'AirForce', '1', 0, 0, '2017-12-20'),
(171, NULL, '2017-12-07', '2017-12-15', 'Ashmore and Cartier Island', 'Bahamas', 2, 'ymenAir', '2', 0, 0, '2017-12-20'),
(172, NULL, '2017-12-08', '2017-12-15', 'Bahamas', 'Austria', 22, 'AirForce', '3', 0, 0, '2017-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `visitors_count`
--

CREATE TABLE `visitors_count` (
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitors_count`
--

INSERT INTO `visitors_count` (`count`) VALUES
(1179);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clints`
--
ALTER TABLE `clints`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_id` (`c_id`);

--
-- Indexes for table `clints_hotels`
--
ALTER TABLE `clints_hotels`
  ADD PRIMARY KEY (`c_id`,`h_id`),
  ADD KEY `hotels_hotels_fk` (`h_id`);

--
-- Indexes for table `clints_trips`
--
ALTER TABLE `clints_trips`
  ADD PRIMARY KEY (`c_id`,`t_id`),
  ADD KEY `trips_trips_fk` (`t_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`h_id`),
  ADD UNIQUE KEY `h_id` (`h_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_id` (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clints`
--
ALTER TABLE `clints`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clints_hotels`
--
ALTER TABLE `clints_hotels`
  ADD CONSTRAINT `clint_clint_fk` FOREIGN KEY (`c_id`) REFERENCES `clints` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotels_hotels_fk` FOREIGN KEY (`h_id`) REFERENCES `hotels` (`h_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clints_trips`
--
ALTER TABLE `clints_trips`
  ADD CONSTRAINT `clints_clints_fk` FOREIGN KEY (`c_id`) REFERENCES `clints` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trips_trips_fk` FOREIGN KEY (`t_id`) REFERENCES `trips` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
