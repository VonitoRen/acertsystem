-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2024 at 08:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prccert`
--

-- --------------------------------------------------------

--
-- Table structure for table `accreditation_certifications`
--

CREATE TABLE `accreditation_certifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `professionID` bigint(20) UNSIGNED NOT NULL,
  `validityDate` date NOT NULL,
  `broker_name` varchar(255) NOT NULL,
  `broker_reg_no` varchar(255) NOT NULL,
  `date_issues` date NOT NULL DEFAULT '2024-04-18',
  `placeOfIssue` varchar(255) NOT NULL DEFAULT 'Baguio City, Philippines',
  `person_role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `accreditation_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accreditation_certifications`
--

INSERT INTO `accreditation_certifications` (`id`, `lname`, `fname`, `mname`, `suffix`, `sex`, `professionID`, `validityDate`, `broker_name`, `broker_reg_no`, `date_issues`, `placeOfIssue`, `person_role_id`, `created_at`, `updated_at`, `accreditation_no`) VALUES
(1, 'TANGALIN', 'ROLLY', 'ESTIPULAR', NULL, 'MALE', 103, '2025-03-01', 'BERGER THINA ARELLANO', '0026379', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:21:08', '2024-06-06 23:56:37', '23201'),
(2, 'EDUVANE', 'CHARLENE', 'UBANDO', NULL, 'FEMALE', 103, '2025-03-01', 'CARREON, CELEDONIA OFELIA FERRER', '0017787', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:22:43', '2024-05-19 23:38:12', '23216'),
(3, 'NAYAL', 'ROGEN', 'LOBATON', NULL, 'MALE', 103, '2025-03-01', 'APOSTOL, CECILLE FAJARDO', '0010634', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:23:33', '2024-05-19 23:38:27', '23233'),
(4, 'PALOMAR', 'CHARLES', 'VILLANUEVA', NULL, 'MALE', 103, '2025-03-04', 'ATONEN, JINGBOY MAGING', '0024819', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:24:33', '2024-05-19 23:38:41', '23290'),
(5, 'ISABELO', 'MYDELYN', 'AQUINO', NULL, 'FEMALE', 103, '2025-03-06', 'ORBITO, MARITES ISABELO', '0010835', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:25:22', '2024-05-19 23:38:58', '23394'),
(6, 'DALLEG', 'VIRGINIA', 'DAWEG', NULL, 'FEMALE', 103, '2025-03-06', 'DUMANAS, JANE WASWASEN', '0010240', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:26:17', '2024-05-19 23:39:10', '5561'),
(7, 'OLOAN', 'OMAR JOSEPH', 'KIKIGUE', NULL, 'MALE', 103, '2025-03-07', 'GAWIGAWEN, JULLYND MANGOLTONG', '0019818', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:27:26', '2024-05-19 23:39:49', '23441'),
(8, 'DEL MUNDO', 'JHOMAR', 'URBIEN', NULL, 'MALE', 103, '2025-03-07', 'GAWIGAWEN, JULLYND MANGOLTONG', '0019818', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:29:18', '2024-05-19 23:40:04', '23448'),
(9, 'BIORE', 'VIRGINIA', 'ARRIAGA', NULL, 'FEMALE', 103, '2025-03-08', 'CABE, GEORGE GLORIA', '0015323', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:30:36', '2024-05-19 23:40:19', '23474'),
(10, 'LONGBOAN', 'FATIMA', 'ATOMPAG', NULL, 'FEMALE', 103, '2025-03-11', 'ROMAN, JOE PASAG AÑOSO', '0019887', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:31:22', '2024-05-19 23:40:40', '23523'),
(11, 'ACCATAN', 'THEMIELYN FAE', 'BINIAHAN', NULL, 'FEMALE', 103, '2025-03-12', 'ROMAN, JOE PASAG AÑOSO', '0019887', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:33:41', '2024-05-19 23:40:58', '23565'),
(12, 'SANTOS', 'JULIUS', 'VILLANUEVA', NULL, 'MALE', 103, '2025-03-12', 'DACAMAT, JOSEPH DELA CRUZ', '0013818', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:35:53', '2024-05-19 23:41:14', '14813'),
(13, 'PALAROAN', 'JONATHAN', 'GENOVE', NULL, 'MALE', 103, '2025-03-13', 'ESTOQUE, MARIDEL RITALES', '0004157', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:37:22', '2024-05-19 23:37:22', '23578'),
(14, 'SELGA', 'JEANNE CLAUDE', 'CUNANAN', NULL, 'FEMALE', 103, '2025-03-13', 'GAWIGAWEN, JULLYND MANGOLTONG', '0019818', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:44:46', '2024-05-19 23:44:46', '23585'),
(15, 'SEMANERO', 'ERNIA', 'TALLEDO', NULL, 'FEMALE', 103, '2025-03-13', 'GAWIGAWEN, JULLYND MANGOLTONG', '0019818', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:45:41', '2024-05-19 23:45:41', '23584'),
(16, 'PAL-ANG', 'KENNETH', 'FIANZA', NULL, 'MALE', 103, '2025-03-22', 'ATONEN, JINGBOY MAGING', '0024819', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:47:39', '2024-05-19 23:47:39', '23806'),
(17, 'PASSI', 'FROILAN', 'NABUTIL', NULL, 'MALE', 103, '2025-03-22', 'ATONEN, JINGBOY MAGING', '0024819', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:48:25', '2024-05-19 23:48:25', '23807'),
(18, 'PAL-ANG', 'JAMIE DALE', 'BAUTISTA', NULL, 'FEMALE', 103, '2025-03-22', 'ATONEN, JINGBOY MAGING', '0024819', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:49:32', '2024-05-19 23:49:32', '23827'),
(19, 'PONCHAO', 'FREDILYN', 'BULAGGA', NULL, 'FEMALE', 103, '2025-03-22', 'DULAG, MARK CABANG', '0032213', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:50:51', '2024-05-19 23:50:51', '23827'),
(20, 'PASSI', 'CLAIRE', 'NABUTIL', NULL, 'FEMALE', 103, '2025-03-25', 'ATONEN, JINGBOY MAGING', '0024819', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:52:21', '2024-05-19 23:52:21', '23842'),
(21, 'MARQUEZ', 'VIRGINIA', 'ESTIMADA', NULL, 'FEMALE', 103, '2025-03-25', 'AQUINO, JACKYLYN BAUTISTA', '0031754', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:53:04', '2024-05-19 23:53:04', '23862'),
(22, 'VERZOLA', 'MARK VINCENT', 'JULVA', NULL, 'MALE', 103, '2025-03-26', 'MAZON, GIRLIE RANTAYO', '0029870', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:53:42', '2024-05-19 23:53:42', '23883'),
(23, 'WACLIN', 'ISABEL', 'OTA-OT', NULL, 'FEMALE', 103, '2025-03-26', 'GAWIGAWEN, JULLYND MANGOLTONG', '0019818', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:56:15', '2024-05-19 23:56:15', '18407'),
(24, 'CABANSI', 'TIMONS', 'TAMBULING', NULL, 'MALE', 103, '2025-03-26', 'GAWIGAWEN, JULLYND MANGOLTONG', '0019818', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:57:33', '2024-05-19 23:57:33', '18897'),
(25, 'MIGUEL', 'RUBEN', 'GAENGAN', NULL, 'MALE', 103, '2025-04-01', 'AGUSTIN, APOLONIO JR. CASANA', '0030059', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:58:16', '2024-05-19 23:58:16', '23957'),
(26, 'ACOSTA', 'ANGELIE', 'BAGUIO', NULL, 'FEMALE', 103, '2025-04-01', 'CORPUZ, DIANNE ACOSTA', '0013828', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:58:58', '2024-05-19 23:58:58', '23961'),
(27, 'GARCIA', 'JENIFER', 'UNIDA', NULL, 'FEMALE', 103, '2025-04-12', 'ORBITO, MARITES ISABELO', '0010835', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-19 23:59:48', '2024-05-19 23:59:48', '20868'),
(28, 'GABINO', 'ARLENE', 'PALGUE', NULL, 'FEMALE', 103, '2025-04-15', 'LABERINTO, ANNABELLE RILLERA', '0002244', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-20 00:00:25', '2024-05-20 00:00:25', '24195'),
(29, 'CASUGA', 'RIM JOY', 'GONZALES', NULL, 'MALE', 103, '2025-04-17', 'CASUGA, ALEXIS BILOG', '0033391', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-20 00:01:06', '2024-05-20 00:01:06', '24229'),
(30, 'TOGANA', 'MERICAR', 'DAMPALI', NULL, 'FEMALE', 103, '2025-04-22', 'CARANTES, PAUL JULLIAN', '0002114', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-20 00:01:53', '2024-05-20 00:01:53', '24348'),
(31, 'CONRADO', 'MANUEL', 'AMAWAN', NULL, 'MALE', 103, '2025-04-22', 'CARANTES, PAUL JULLIAN', '0002114', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-20 00:04:36', '2024-05-20 00:04:36', '24347'),
(32, 'HERNANDEZ', 'TERESA', 'DOMINGO', NULL, 'FEMALE', 103, '2025-04-19', 'GIRASOL, CECILIA GADIANA', '0005303', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-20 00:05:26', '2024-05-20 00:05:26', '24354'),
(33, 'ATONEN', 'LEANNIE', 'PASSI', NULL, 'FEMALE', 103, '2025-05-13', 'ATONEN, JINGBOY MAGING', '0024819', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-20 00:06:04', '2024-05-20 00:06:04', '24654'),
(34, 'CORPUZ', 'MARY GRACE', 'UGOT', NULL, 'FEMALE', 103, '2025-05-13', 'VALDEZ, PONCIANO JR. GAMIDEZ', '0025717', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-20 00:06:40', '2024-05-20 00:06:40', '24606'),
(35, 'PEDUCA', 'MAYGHERMAINE', 'FANISWA', NULL, 'FEMALE', 103, '2025-05-20', 'DUMANAS, JANE WASWASEN', '0010240', '2024-05-20', 'Baguio City, Philippines', 3, '2024-05-20 00:07:20', '2024-05-20 00:07:20', '24667');

-- --------------------------------------------------------

--
-- Table structure for table `appearance_certifications`
--

CREATE TABLE `appearance_certifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `dateOfAppearance` date NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_issues` date NOT NULL DEFAULT current_timestamp(),
  `placeOfIssue` varchar(255) NOT NULL DEFAULT 'Baguio City, Benguet, Philippines',
  `person_role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dateOfAppearance_two` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('a.passol|192.168.74.190', 'i:1;', 1715734840),
('a.passol|192.168.74.190:timer', 'i:1715734840;', 1715734840),
('a|127.0.0.1', 'i:1;', 1718698219),
('a|127.0.0.1:timer', 'i:1718698219;', 1718698219),
('admin|127.0.0.1', 'i:2;', 1718698532),
('admin|127.0.0.1:timer', 'i:1718698532;', 1718698532),
('admin|192.168.74.246', 'i:1;', 1714957064),
('admin|192.168.74.246:timer', 'i:1714957064;', 1714957064),
('cabanlighk|192.168.74.201', 'i:1;', 1716189430),
('cabanlighk|192.168.74.201:timer', 'i:1716189430;', 1716189430),
('cabanlighk|192.168.74.4', 'i:1;', 1715740532),
('cabanlighk|192.168.74.4:timer', 'i:1715740532;', 1715740532),
('chaoengra|192.168.74.4', 'i:1;', 1716271503),
('chaoengra|192.168.74.4:timer', 'i:1716271503;', 1716271503),
('honey@gmail.com|192.168.74.25', 'i:1;', 1715062294),
('honey@gmail.com|192.168.74.25:timer', 'i:1715062294;', 1715062294),
('honey|192.168.74.246', 'i:1;', 1715232413),
('honey|192.168.74.246:timer', 'i:1715232413;', 1715232413),
('honey|192.168.74.4', 'i:1;', 1715740524),
('honey|192.168.74.4:timer', 'i:1715740524;', 1715740524),
('legal|127.0.0.1', 'i:2;', 1718770136),
('legal|127.0.0.1:timer', 'i:1718770136;', 1718770136),
('legalord|127.0.0.1', 'i:1;', 1718770187),
('legalord|127.0.0.1:timer', 'i:1718770187;', 1718770187),
('louise|192.168.74.246', 'i:1;', 1714957104),
('louise|192.168.74.246:timer', 'i:1714957104;', 1714957104),
('magalgalithbb|127.0.0.1', 'i:1;', 1718699927),
('magalgalithbb|127.0.0.1:timer', 'i:1718699927;', 1718699927),
('marquezca|192.168.74.4', 'i:1;', 1715740543),
('marquezca|192.168.74.4:timer', 'i:1715740543;', 1715740543),
('portemt|192.168.74.4', 'i:1;', 1715738043),
('portemt|192.168.74.4:timer', 'i:1715738043;', 1715738043);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certification_of_complaints`
--

CREATE TABLE `certification_of_complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_reset` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `professionID` bigint(20) UNSIGNED NOT NULL,
  `regnum` varchar(255) NOT NULL,
  `registeredDate` date NOT NULL,
  `OR_No` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date_issues` date NOT NULL DEFAULT current_timestamp(),
  `signatoriesAtty` bigint(20) UNSIGNED NOT NULL,
  `person_role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certification_of_complaints`
--

INSERT INTO `certification_of_complaints` (`id`, `id_reset`, `lname`, `fname`, `mname`, `suffix`, `sex`, `professionID`, `regnum`, `registeredDate`, `OR_No`, `initials`, `amount`, `date_issues`, `signatoriesAtty`, `person_role_id`, `created_at`, `updated_at`) VALUES
(2, '24-001', 'LANGAOEN', 'JULIET', 'GUINIAYAWAN', NULL, 'FEMALE', 6, '0155922', '2013-11-07', '18497013A', 'rac', '80', '2024-05-21', 8, 4, '2024-05-20 22:35:49', '2024-06-18 21:44:46'),
(3, '24-002', 'NIGOS', 'MARK ANTHONY', 'VENUYA', NULL, 'MALE', 10, '0096198', '2003-06-19', '18497204A', 'hbbm', '75', '2024-05-21', 1, 4, '2024-05-20 22:39:42', '2024-05-20 22:47:01'),
(4, '24-003', 'GENGOS', 'SERGIO', 'I', 'JR', 'MALE', 83, '0013932', '1994-06-23', '18497259A', 'rac', '225', '2024-05-21', 1, 4, '2024-05-20 22:42:16', '2024-05-20 22:42:16'),
(5, '24-004', 'BAUTISTA', 'CAMILLE JOY', 'ALINAO', NULL, 'FEMALE', 81, '0029346', '2017-08-16', '18497278A', 'rac', '75', '2024-05-21', 1, 4, '2024-05-20 22:44:01', '2024-05-20 22:44:01'),
(6, '24-005', 'MAGGONGA', 'RAITA', 'ALIANG', NULL, 'FEMALE', 34, '0597067', '2010-02-23', '18496659A', 'cbl', '75', '2024-05-21', 1, 4, '2024-05-20 22:46:50', '2024-05-20 22:46:50'),
(7, '24-006', 'VIRAY', 'ANNA THERESE', 'DIMATULAC', NULL, 'FEMALE', 87, '0019420', '2018-08-14', '18496741A', 'rac', '75', '2024-05-21', 1, 4, '2024-05-20 22:49:22', '2024-05-20 22:49:22'),
(8, '24-007', 'DUPINGAY', 'RAYLYNE GAY', 'P AGAL', NULL, 'FEMALE', 87, '0012882', '2014-07-18', '18496748A', 'rac', '75', '2024-05-21', 1, 4, '2024-05-20 22:51:28', '2024-05-20 22:51:28'),
(9, '24-008', 'REYTA', 'ALEXIS', 'CALICA', NULL, 'MALE', 91, '0057355', '2015-02-16', '18497692A', 'rac', '225', '2024-05-21', 8, 4, '2024-05-20 22:53:39', '2024-05-20 22:53:39'),
(10, '24-009', 'REYTA', 'ALEXIS', 'CALICA', NULL, 'MALE', 91, '0057355', '2015-09-16', '18497692A', 'rac', '225', '2024-05-21', 1, 4, '2024-05-20 22:54:39', '2024-05-20 22:54:39'),
(11, '24-010', 'REYTA', 'ALEXIS', 'CALICA', NULL, 'MALE', 91, '0057355', '2015-09-16', '18497692A', 'rac', '225', '2024-05-21', 1, 4, '2024-05-20 22:55:48', '2024-05-20 22:55:48'),
(12, '24-011', 'MARQUEZ', 'SHELLA', 'IBAY', NULL, 'FEMALE', 34, '0976636', '2024-01-16', '18497751A', 'rac', '75', '2024-05-21', 1, 4, '2024-05-20 22:59:48', '2024-05-20 22:59:48'),
(13, '24-012', 'SALAZAR', 'CHRYSTAL FAYE', 'VILLABEZA', NULL, 'FEMALE', 6, '0157624', '2014-08-12', '18497782A', 'rac', '150', '2024-05-21', 1, 4, '2024-05-20 23:01:28', '2024-05-20 23:01:28'),
(14, '24-013', 'SALAZAR', 'CHRYSTAL FAYE', 'VILLABEZA', NULL, 'FEMALE', 6, '0157624', '2014-08-12', '18497782A', 'rac', '1500', '2024-05-21', 1, 4, '2024-05-20 23:03:15', '2024-06-30 21:58:31'),
(15, '24-014', 'ESTACIO', 'ALFRED', 'A', NULL, 'MALE', 91, '0021842', '1999-06-17', '18497859A', 'rac', '75', '2024-05-21', 1, 4, '2024-05-20 23:15:45', '2024-05-20 23:15:45'),
(16, '24-015', 'ANGELES', 'KARL JUDD', 'VILLAFLOR', NULL, 'MALE', 91, '0060747', '2016-09-15', '18497965A', 'hbbm', '75', '2024-05-21', 1, 4, '2024-05-20 23:18:21', '2024-05-20 23:18:21'),
(17, '24-016', 'CARBONEL', 'DIOSDADO', 'BONILLA', 'JR', 'MALE', 91, '0032168', '2003-06-05', '18506246A', 'rac', '225', '2024-05-21', 1, 4, '2024-05-20 23:20:13', '2024-05-20 23:20:13'),
(20, '24-019', 'TOLERO', 'MELCHOR', 'MATERUM', NULL, 'MALE', 91, '0036465', '2005-10-04', '18506274A', 'rac', '150', '2024-05-21', 1, 4, '2024-05-20 23:22:55', '2024-05-20 23:22:55'),
(22, '24-021', 'AGTARAP', 'JUAN', 'RANCHEZ', 'II', 'MALE', 83, '0004381', '2018-09-16', '18506314A', 'rac', '18506314A', '2024-05-21', 8, 4, '2024-05-20 23:26:30', '2024-05-20 23:26:30'),
(23, '24-022', 'MADINO', 'VINCENT MICHAEL', 'POL-AS', NULL, 'MALE', 91, '0045133', '2010-07-07', '18498000A', 'rac', '150', '2024-05-21', 8, 4, '2024-05-20 23:28:42', '2024-05-20 23:28:42'),
(25, '24-024', 'GUANZO', 'MARIANO', 'ALZADO', NULL, 'MALE', 83, '0003863', '2016-02-24', '1800000', 'rac', '75', '2024-05-21', 1, 4, '2024-05-20 23:34:02', '2024-05-20 23:34:02'),
(27, '24-026', 'CARPIO', 'WILFREDO', 'Arceo', NULL, 'MALE', 91, '0033098', '2003-10-24', '18498171A', 'rac', '375', '2024-05-30', 8, 1, '2024-05-29 17:45:13', '2024-08-14 16:32:20'),
(32, '24-030', 'VELASQUEZ', 'VIRGIEEEE', 'GARCIA', NULL, 'FEMALE', 31, '0123469', '2024-06-10', '1122334455', 'TL', '1069', '2024-06-19', 4, 8, '2024-06-18 16:15:12', '2024-06-27 23:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `certification_of_former_filipino`
--

CREATE TABLE `certification_of_former_filipino` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `professionID` bigint(20) UNSIGNED NOT NULL,
  `licenseNo` varchar(255) NOT NULL,
  `dateIssued` date NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `dateOfIssuance` date NOT NULL DEFAULT '2024-04-23',
  `person_role_id` bigint(20) UNSIGNED NOT NULL,
  `orNo` varchar(255) NOT NULL,
  `orDate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certification_of_former_filipino`
--

INSERT INTO `certification_of_former_filipino` (`id`, `lname`, `fname`, `mname`, `suffix`, `sex`, `professionID`, `licenseNo`, `dateIssued`, `purpose`, `dateOfIssuance`, `person_role_id`, `orNo`, `orDate`, `created_at`, `updated_at`) VALUES
(3, 'OSABAL', 'MARIBEL', 'POLAGÑE', NULL, 'FEMALE', 34, '0295900', '1996-06-10', 'BCCNM – British Columbia College of Nurses and Midwives', '2024-05-20', 5, '18498102', '2024-05-20', '2024-05-19 22:33:12', '2024-05-19 22:38:31'),
(4, 'MENDOZA', 'ALDEN KENT', 'CONSIGNADO', NULL, 'MALE', 34, '0570526', '2009-08-28', 'CGFNS - Commission on Graduates of Foreign Nursing Schools', '2024-05-22', 5, '18498113', '2024-05-22', '2024-05-21 20:30:13', '2024-05-21 20:30:13'),
(5, 'MENDOZA', 'ELAINE-GRACE', 'DIMATULAC', NULL, 'FEMALE', 34, '0596597', '2010-02-19', 'CGFNS - Commission on Graduates of Foreign Nursing Schools', '2024-05-22', 5, '18498114', '2024-05-22', '2024-05-21 20:33:04', '2024-05-21 20:33:04'),
(6, 'AQUINO', 'CHRISTIAN ALEXIS', 'VANDERLIPE', NULL, 'MALE', 34, '0806173', '2013-07-29', 'CGFNS - Commission on Graduates of Foreign Nursing Schools', '2024-05-22', 5, '18498115', '2024-05-22', '2024-05-21 20:58:39', '2024-05-21 20:59:31'),
(7, 'DOMINGO', 'NICEL', 'SUNGA', NULL, 'FEMALE', 34, '0416291', '2007-02-14', 'NSCN -  NOVA SCOTIA COLLEGE OF NURSING', '2024-05-22', 5, '18498118', '2024-05-22', '2024-05-21 23:12:46', '2024-05-21 23:12:46'),
(8, 'ECOLANGO', 'CHERRY', 'PICAR', NULL, 'FEMALE', 29, '0037073', '1998-10-07', 'for whatever legal purpose it may serve', '2024-05-23', 5, '18498124', '2024-05-23', '2024-05-22 17:20:04', '2024-05-22 17:20:04'),
(9, 'LUCIDO', 'VAN DOMINIC', 'CARAJAY', NULL, 'MALE', 34, '0399494', '2006-08-29', 'CGFNS - Commission on Graduates of Foreign Nursing Schools', '2024-05-23', 5, '18498128', '2024-05-23', '2024-05-22 20:09:40', '2024-05-22 20:09:40'),
(10, 'LLAMAS', 'BERVIRLY', 'BUMOLO', NULL, 'FEMALE', 82, '0103729', '2004-09-09', 'Family Medicine Registration in Alberta, Canada', '2024-05-24', 5, '18506347', '2024-05-24', '2024-05-23 16:55:40', '2024-05-23 16:55:40'),
(11, 'QUERUBIN', 'VERON GAY', 'GABAN', NULL, 'FEMALE', 82, '0107536', '2006-04-18', 'CPSA - COLLEGE OF PHYSICIANS AND SURGEONS IN ALBERTA', '2024-05-24', 5, '18506348', '2024-05-24', '2024-05-23 17:09:51', '2024-05-23 17:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `certification_of_registrations`
--

CREATE TABLE `certification_of_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `professionID` bigint(20) UNSIGNED NOT NULL,
  `regnum` varchar(255) NOT NULL,
  `registeredDate` date NOT NULL,
  `date_issues` date NOT NULL DEFAULT '2024-04-18',
  `placeOfIssue` varchar(255) NOT NULL DEFAULT 'Baguio City, Philippines',
  `person_role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certification_of_registrations`
--

INSERT INTO `certification_of_registrations` (`id`, `lname`, `fname`, `mname`, `suffix`, `sex`, `professionID`, `regnum`, `registeredDate`, `date_issues`, `placeOfIssue`, `person_role_id`, `created_at`, `updated_at`) VALUES
(2, 'QUINTANA', 'JASON CEDRIC', 'AGCAOILI', NULL, 'MALE', 84, '2155790', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 20:25:11', '2024-05-19 20:26:58'),
(3, 'PALABRICA', 'DRAHCIR EZEKIEL', 'PAULE', NULL, 'MALE', 84, '2155797', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 20:30:44', '2024-05-19 20:30:44'),
(4, 'SABATE', 'KRISTINE JOY', 'TAMORIA', NULL, 'FEMALE', 84, '2155799', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 20:34:32', '2024-05-19 20:34:32'),
(5, 'DELIZO', 'RICKALHOR', 'CALUZA', NULL, 'FEMALE', 84, '2155824', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 20:36:45', '2024-05-19 20:36:45'),
(6, 'MAYO', 'JHAN MANNY', 'PALARUAN', NULL, 'MALE', 84, '2155850', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 20:37:52', '2024-05-19 20:37:52'),
(7, 'MACASAKIT', 'ISEE LORAINE', 'EUGENIO', NULL, 'FEMALE', 84, '2155835', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 21:04:54', '2024-05-19 21:04:54'),
(8, 'TOQUERO', 'PATRICK', 'RICANOR', NULL, 'MALE', 84, '2155868', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 21:05:42', '2024-05-19 21:05:42'),
(9, 'AGABAO', 'JENNY MHAY', 'DELA CRUZ', NULL, 'FEMALE', 84, '2155791', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 21:06:45', '2024-05-19 21:06:45'),
(10, 'OFO-OB', 'JOEL JOSEPH', 'BALONG-ANGEY', NULL, 'MALE', 84, '2155900', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 21:07:47', '2024-05-19 21:07:47'),
(11, 'MANUEL', 'JOHN LENARD', 'MAPALO', NULL, 'MALE', 10, '0205393', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 21:08:45', '2024-05-19 21:08:45'),
(12, 'PURISIMA', 'ALTHEA GRACE', 'MOSE', NULL, 'FEMALE', 84, '2155981', '2024-02-27', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 21:09:31', '2024-05-19 21:09:31'),
(14, 'BASILIO', 'JUNABEL', 'LOSENTE', NULL, 'FEMALE', 34, '0979713', '2024-01-25', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 22:01:17', '2024-05-19 23:38:37'),
(15, 'SIBIT', 'KYNA BRYCE', 'GURION', NULL, 'FEMALE', 34, '0979630', '2024-01-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 22:02:01', '2024-05-19 22:02:01'),
(16, 'BAUDEN', 'ALDRIN', 'WACLIN', NULL, 'FEMALE', 34, '0981432', '2024-01-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 22:02:46', '2024-05-19 23:39:17'),
(17, 'MAÑEGO', 'MARIANNE', 'PASCUAL', NULL, 'MALE', 34, '0979369', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 22:03:23', '2024-05-19 23:41:28'),
(18, 'VITALES', 'JOSE MARI CHRISTIAN', 'ORDOÑO', NULL, 'MALE', 34, '0980537', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 22:13:35', '2024-05-19 22:13:35'),
(19, 'ASPIRAS', 'MARIBETH', 'ACOSTA', NULL, 'FEMALE', 34, '0979375', '2024-02-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 22:14:42', '2024-05-19 23:42:43'),
(20, 'JULATON', 'MA. ANGELICA', 'BUCSIT', NULL, 'FEMALE', 34, '0981836', '2024-01-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 22:16:58', '2024-05-19 23:46:20'),
(21, 'VICENTE', 'MA. GIVEN', 'BRIONES', NULL, 'FEMALE', 34, '0981174', '2024-01-24', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 22:17:38', '2024-05-19 23:44:56'),
(22, 'GINES', 'ERIKA CHRISTIE', 'MANIAGO', NULL, 'FEMALE', 34, '0991660', '2024-02-12', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:40:32', '2024-05-19 23:40:32'),
(23, 'VIBORA', 'CLARENCE', 'CARAIG', NULL, 'FEMALE', 34, '0989809', '2024-02-06', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:42:04', '2024-05-19 23:42:04'),
(24, 'VILLETE', 'MARY ALYSSA', 'SALTIVAN', NULL, 'FEMALE', 34, '0989794', '2024-02-06', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:47:54', '2024-05-19 23:47:54'),
(25, 'MADOH', 'MUS-SAH THEO-YUAN', 'LIMBAG', NULL, 'FEMALE', 34, '0989789', '2024-02-06', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:48:47', '2024-05-19 23:48:47'),
(26, 'DUMANGAS', 'RYCHELLE ANN', 'BADAR', NULL, 'FEMALE', 34, '0986456', '2024-01-31', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:49:29', '2024-05-19 23:49:29'),
(27, 'SAKIWAT', 'WIMZY MANDIA', 'BITOT', NULL, 'FEMALE', 34, '0980052', '2024-01-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:50:05', '2024-05-19 23:50:05'),
(28, 'DE JESUS', 'LYNDON GLEN', 'LIGPIT', NULL, 'MALE', 34, '0981335', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:50:42', '2024-05-19 23:50:42'),
(29, 'SADURAL', 'ARON CARLOS', 'CHUA', NULL, 'MALE', 34, '0981340', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:51:21', '2024-05-19 23:51:21'),
(30, 'HUMIDING', 'ALEC GABRIEL', 'DE GUZMAN', NULL, 'FEMALE', 34, '0979703', '2024-01-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:52:08', '2024-05-19 23:52:08'),
(31, 'GANDIA', 'SHANE KIEFFER', NULL, NULL, 'MALE', 34, '0979479', '2024-01-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:55:42', '2024-05-19 23:55:42'),
(32, 'PALAY', 'DENISSE JOY', 'AGUILAR', NULL, 'FEMALE', 34, '0986148', '2024-01-30', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:56:30', '2024-05-19 23:56:30'),
(33, 'VALLO', 'VRENELLI', 'GUANSO', NULL, 'FEMALE', 34, '0981074', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:57:37', '2024-05-19 23:57:37'),
(34, 'BALIDOY', 'JEN-JEN', 'OLLERO', NULL, 'FEMALE', 34, '0973058', '2023-09-12', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:58:38', '2024-05-19 23:58:38'),
(35, 'LABARINTO', 'KATHLEEN JOY', 'OLANDE', NULL, 'FEMALE', 34, '0990828', '2024-02-07', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-19 23:59:28', '2024-05-19 23:59:28'),
(36, 'ADRIANO', 'CATHERINE JUNELLE', 'CRUZ', NULL, 'MALE', 34, '0991724', '2024-01-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:00:09', '2024-05-20 00:10:59'),
(37, 'CUISON', 'RENCE', 'RACUYA', NULL, 'FEMALE', 34, '0981408', '2024-02-12', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:00:19', '2024-05-20 00:12:45'),
(38, 'CAYATOC', 'NIKKI', 'MENDOZA', NULL, 'FEMALE', 34, '0981037', '2024-01-30', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:01:24', '2024-05-20 00:19:03'),
(39, 'ORENDAIN', 'CEDRIX JAMES', 'MIRALLES', NULL, 'FEMALE', 34, '0981330', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:01:51', '2024-05-20 00:14:10'),
(40, 'AGUILBA', 'DENSZELL', 'TABAAN', NULL, 'FEMALE', 34, '0981374', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:02:17', '2024-05-20 00:20:15'),
(41, 'UY', 'JENNYVIEVE FELICE', 'VITEÑO', NULL, 'FEMALE', 34, '0983854', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:02:38', '2024-05-20 00:27:57'),
(42, 'BADONGEN', 'MIRABELLE', 'DE LOS REYES', NULL, 'FEMALE', 34, '0979648', '2024-09-12', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:03:02', '2024-05-20 00:22:50'),
(43, 'BINIAHAN', 'IMEE LORRAINE', 'NADIAHAN', NULL, 'MALE', 34, '0979681', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:03:22', '2024-05-20 00:15:50'),
(44, 'DAQUIPIL', 'AIRA MAE', 'GENERAO', NULL, 'MALE', 34, '0982919', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:03:23', '2024-05-20 00:17:08'),
(45, 'DELFIN', 'ALYSSA JOY', 'DE PAZ', NULL, 'FEMALE', 34, '0979754', '2024-02-07', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:03:40', '2024-05-20 00:24:52'),
(46, 'PABLO', 'ROUZEL FAITH', 'POCLIS', NULL, 'MALE', 34, '0985146', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:04:42', '2024-05-20 00:30:32'),
(47, 'BADILLA', 'NICOLE', 'GUANSO', NULL, 'MALE', 34, '0980443', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:04:42', '2024-05-20 00:31:42'),
(48, 'ABE-ABE', 'CHRISTIAN ANDREI', 'MONIS', NULL, 'MALE', 34, '0983328', '2024-01-25', '2024-04-20', 'Baguio City, Philippines', 3, '2024-05-20 00:39:13', '2024-06-06 23:25:50'),
(49, 'BORCE', 'NICA JOY', 'MENDOZA', NULL, 'FEMALE', 34, '0983263', '2024-01-25', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:40:50', '2024-05-20 00:40:50'),
(50, 'GOLING', 'JOSHUA', 'LUMAHAN', NULL, 'MALE', 34, '0979358', '2024-01-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:41:49', '2024-05-20 00:41:49'),
(51, 'BATOYOG', 'LAMAIRE', 'ABALOS', NULL, 'FEMALE', 34, '0979443', '2024-01-22', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:43:03', '2024-05-20 00:43:03'),
(52, 'LIQUIGAN', 'JOHN PAUL', 'ABAD', NULL, 'MALE', 34, '0980736', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:43:43', '2024-05-20 00:43:43'),
(53, 'BALTAZAR', 'MARY MIRACULOUS', 'PULIDO', NULL, 'FEMALE', 34, '0664709', '2010-12-09', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:48:52', '2024-05-20 00:48:52'),
(54, 'TON', 'LAUREN JENNIFER', 'ALBATEN', NULL, 'FEMALE', 34, '0981063', '2024-01-23', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 00:50:23', '2024-05-20 00:50:23'),
(55, 'LADIGNON', 'LEONA CARLA', 'TALPLACIDO', NULL, 'FEMALE', 34, '0607680', '2010-03-10', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 01:06:07', '2024-05-20 01:06:07'),
(56, 'PAGALING', 'CRYSTAL MAE', 'ADZUARA', NULL, 'FEMALE', 34, '0488695', '2008-05-29', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 01:08:03', '2024-05-20 01:08:03'),
(57, 'CABANBAN', 'MICHAEL JOHN', 'SAN LORENZO', NULL, 'MALE', 84, '2018407', '2023-04-11', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 01:17:08', '2024-05-20 01:17:08'),
(58, 'FRONDA', 'LEO PATRICK BENEDICK', NULL, NULL, 'MALE', 34, '0963785', '2023-06-08', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 01:18:16', '2024-05-20 01:18:16'),
(59, 'CASUGA', 'JEDELYN', 'MARZAN', NULL, 'FEMALE', 34, '0973753', '2023-09-20', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 01:19:47', '2024-05-20 01:19:47'),
(60, 'MEJIA', 'DEXTER', 'ROMERO', NULL, 'MALE', 34, '0697292', '2011-08-24', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 01:20:27', '2024-05-20 01:20:27'),
(61, 'BELISARIO', 'RHODA', 'BERNAL', NULL, 'FEMALE', 34, '0974964', '2023-10-16', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 01:21:22', '2024-05-20 01:21:22'),
(62, 'MORALES', 'RACQUEL', 'BARRERA', NULL, 'FEMALE', 34, '0964143', '2023-07-31', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-20 01:22:01', '2024-05-20 01:22:01'),
(63, 'LABUTAN', 'CARMELITA', 'JIMENEZ', NULL, 'FEMALE', 34, '0963704', '2024-05-31', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-21 00:57:17', '2024-05-21 00:57:17'),
(64, 'ESTACIO', 'CHARO FAYE', 'CARIÑO', NULL, 'FEMALE', 34, '0986346', '2024-01-30', '2024-04-18', 'Baguio City, Philippines', 3, '2024-05-26 19:23:00', '2024-05-26 19:23:00'),
(65, 'aasample', 'aasample', 'aasample', 'aa', 'MALE', 4, '1234567', '2024-06-08', '2024-04-18', 'Baguio City, Philippines', 3, '2024-06-06 23:32:50', '2024-06-06 23:32:50'),
(66, 'Velasquez', 'Virgilio', 'Garcia', NULL, 'FEMALE', 31, '0123469', '2024-06-01', '2024-04-18', 'Baguio City, Philippines', 3, '2024-06-18 00:44:30', '2024-06-18 00:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finality_certifications`
--

CREATE TABLE `finality_certifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `board` varchar(255) NOT NULL,
  `complainants` varchar(255) NOT NULL,
  `respondents` varchar(255) NOT NULL,
  `caseNo` varchar(255) NOT NULL,
  `for_` varchar(255) NOT NULL,
  `caseDate` date NOT NULL,
  `description` text NOT NULL,
  `finalAndExecutoryDate` date NOT NULL,
  `dateDate` date NOT NULL,
  `signatory` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_19_090326_create_professions_table', 2),
(5, '2024_03_20_055006_create_signatories_table', 2),
(6, '2024_04_11_075910_certification_of_complaints', 2),
(7, '2024_04_12_022302_create_roles_table', 2),
(8, '2024_04_12_022304_create_person_roles_table', 2),
(9, '2024_04_12_075927_finality_certifications', 3),
(10, '2024_04_15_053734_create_certification_of_registrations_table', 3),
(11, '2024_04_15_053821_create_accreditation_certifications_table', 3),
(12, '2024_04_15_053947_create_appearance_certifications_table', 3),
(13, '2024_04_12_075928_piccor_certifications', 4),
(14, '2024_04_17_042938_create_surrendered_documents_table', 5),
(15, '2024_04_18_020742_create_certification_of_complaints_table', 5),
(16, '2024_04_23_020743_create_certification_of_former_filipino_table', 6),
(17, '2024_05_10_010758_add_email_fp_to_users_table', 7),
(18, '2024_05_13_045340_add_columns_to_appearance_certifications_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person_roles`
--

CREATE TABLE `person_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `person_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `person_roles`
--

INSERT INTO `person_roles` (`id`, `person_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 7, 3, '2024-04-18 17:47:27', '2024-04-18 17:47:27'),
(2, 8, 1, '2024-04-22 00:09:00', '2024-04-22 00:09:00'),
(3, 8, 2, '2024-04-22 00:09:00', '2024-04-22 00:09:00'),
(4, 8, 3, '2024-04-22 00:09:00', '2024-04-22 00:09:00'),
(5, 9, 2, '2024-04-23 18:05:14', '2024-04-23 18:05:14'),
(6, 10, 1, '2024-04-24 00:31:27', '2024-04-24 00:31:27'),
(8, 12, 3, '2024-05-07 00:22:30', '2024-05-07 00:22:30'),
(9, 13, 1, '2024-05-07 00:24:56', '2024-05-07 00:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `piccor_certifications`
--

CREATE TABLE `piccor_certifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `board` varchar(255) NOT NULL,
  `regDate` date NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `professionID` bigint(20) UNSIGNED NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `returnedDate` date NOT NULL,
  `document_surrendered_dated` date DEFAULT NULL,
  `penalty` varchar(255) NOT NULL,
  `caseTitle` varchar(255) NOT NULL,
  `administrativeCaseNo` varchar(255) NOT NULL,
  `dateOfDocument` date DEFAULT NULL,
  `dateofIssuance` date NOT NULL,
  `hearingOfficer` varchar(255) NOT NULL,
  `person_role_id` bigint(20) UNSIGNED NOT NULL,
  `complainantlname` varchar(255) NOT NULL,
  `complainantfname` varchar(255) NOT NULL,
  `complainantmname` varchar(255) DEFAULT NULL,
  `complainantsuffix` varchar(255) DEFAULT NULL,
  `complainantsex` varchar(255) NOT NULL,
  `legalDivisionChief` varchar(255) NOT NULL,
  `position_officer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `piccor_certifications`
--

INSERT INTO `piccor_certifications` (`id`, `board`, `regDate`, `lname`, `fname`, `mname`, `suffix`, `sex`, `professionID`, `regNo`, `returnedDate`, `document_surrendered_dated`, `penalty`, `caseTitle`, `administrativeCaseNo`, `dateOfDocument`, `dateofIssuance`, `hearingOfficer`, `person_role_id`, `complainantlname`, `complainantfname`, `complainantmname`, `complainantsuffix`, `complainantsex`, `legalDivisionChief`, `position_officer`, `created_at`, `updated_at`) VALUES
(1, 'NURSING', '2009-07-14', 'PASCUAL', 'MARIA FLABELLE MARIBEL', 'OCHINANG', NULL, 'FEMALE', 34, '0559623', '2024-02-02', NULL, 'THREE (3) MONTHS', 'M.J. Visperas v. Maria Flabelle O. Pascual', 'BAG 16-88', '2024-02-02', '2024-05-21', 'CRESENTE B. LUMEREZ JR.', 4, 'VISPERAS', 'MARY JANE', NULL, NULL, 'FEMALE', 'ATTY. GISELLE G. DURANA', 'Director IV, Legal Service', '2024-05-20 23:56:40', '2024-08-14 18:40:32'),
(3, 'Test', '2024-07-01', 'test', 'tesGAR', 'gartest', NULL, 'MALE', 1, '1111111', '2024-07-05', NULL, 'gyatt', '1212121212', 'case no', '2024-07-06', '2024-07-09', 'ATTORNEY', 8, 'Banggalor', 'Bagang', 'Bang', NULL, 'MALE', 'graaaaaa', 'dubidubi', '2024-07-08 22:10:57', '2024-08-14 17:00:17'),
(5, 'test', '2024-08-01', 'test', 'test', 'test', NULL, 'MALE', 9, 'number', '2024-08-02', NULL, 'ONE YEAR SUSPENSION', '1212121212', 'case no', '2024-08-10', '2024-08-15', 'CRESENTE B. LUMEREZ JR.', 4, 'berg', 'bergww', 'bergsss', NULL, 'MALE', 'bergbergberg', 'testtesttesttest', '2024-08-14 18:10:10', '2024-08-14 19:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profession` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`id`, `profession`, `created_at`, `updated_at`) VALUES
(1, 'AERONAUTICAL ENGINEER', NULL, NULL),
(2, 'AGRICULTURAL & BIOSYSTEMS ENGINEER', NULL, NULL),
(3, 'AGRICULTURIST', NULL, NULL),
(4, 'ARCHITECT', NULL, NULL),
(5, 'CERTIFIED PLANT MECHANIC', NULL, NULL),
(6, 'CERTIFIED PUBLIC ACCOUNTANT', NULL, NULL),
(7, 'CHEMICAL ENGINEER', NULL, NULL),
(8, 'CHEMICAL TECHNICIAN', NULL, NULL),
(9, 'CHEMIST', NULL, NULL),
(10, 'CIVIL ENGINEER', NULL, NULL),
(11, 'CRIMINOLOGIST', NULL, NULL),
(12, 'CUSTOMS BROKER', NULL, NULL),
(13, 'DENTAL HYGIENIST', NULL, NULL),
(14, 'DENTAL TECHNOLOGIST', NULL, NULL),
(15, 'DENTIST', NULL, NULL),
(16, 'ELECTRONICS ENGINEER', NULL, NULL),
(17, 'ELECTRONICS TECHNICIAN', NULL, NULL),
(18, 'ENVIRONMENTAL PLANNER', NULL, NULL),
(19, 'FISHERIES TECHNOLOGIST', NULL, NULL),
(20, 'FORESTER', NULL, NULL),
(21, 'GEODETIC ENGINEER', NULL, NULL),
(22, 'GEOLOGIST', NULL, NULL),
(23, 'GUIDANCE COUNSELOR', NULL, NULL),
(24, 'INTERIOR DESIGNER', NULL, NULL),
(25, 'LANDSCAPE ARCHITECT ', NULL, NULL),
(26, 'LIBRARIAN', NULL, NULL),
(27, 'MASTER PLUMBER', NULL, NULL),
(28, 'PROFESSIONAL MECHANICAL ENGINEER', NULL, '2024-05-13 23:34:50'),
(29, 'MEDICAL TECHNOLOGIST', NULL, NULL),
(30, 'METALLURGICAL ENGINEER ', NULL, NULL),
(31, 'MIDWIFE', NULL, '2024-05-13 23:35:08'),
(32, 'MINING ENGINEER', NULL, NULL),
(33, 'NAVAL ARCHITECT', NULL, NULL),
(34, 'NURSE', NULL, NULL),
(36, 'NUTRITIONIST DIETITIAN', NULL, NULL),
(37, 'OCCUPATIONAL THERAPIST', NULL, NULL),
(38, 'OCULAR PHARMACOLOGIST', NULL, NULL),
(39, 'OPTOMETRIST', NULL, NULL),
(80, 'PHARMACIST', NULL, '0000-00-00 00:00:00'),
(81, 'PHYSICAL THERAPIST', NULL, NULL),
(82, 'PHYSICIAN', NULL, NULL),
(83, 'PROFESSIONAL ELECTRICAL ENGINEER', NULL, NULL),
(84, 'PROFESSIONAL TEACHERS', NULL, NULL),
(85, 'PSYCHOLOGIST', NULL, NULL),
(86, 'PSYCHOMETRICIAN', NULL, NULL),
(87, 'RADIOLOGIC TECHNOLOGIST', NULL, NULL),
(88, 'REAL ESTATE APPRAISER', NULL, NULL),
(89, 'REAL ESTATE BROKER', NULL, NULL),
(90, 'REAL ESTATE CONSULTANT', NULL, NULL),
(91, 'REGISTERED ELECTRICAL ENGINEER', NULL, NULL),
(92, 'REGISTERED MASTER ELECTRICIAN', NULL, NULL),
(93, 'RESPIRATORY THERAPIST', NULL, NULL),
(94, 'SANITARY ENGINEER ', NULL, NULL),
(95, 'SOCIAL WORKER', NULL, NULL),
(96, 'VETERINARIAN', NULL, NULL),
(97, 'X-RAY TECHNOLOGIST', NULL, NULL),
(98, 'MEDICAL LABORATORY TECHNICIAN', '2024-05-13 23:30:55', '2024-05-13 23:30:55'),
(99, 'OCCUPATIONAL THERAPY TECHNICIAN', '2024-05-13 23:31:59', '2024-05-13 23:31:59'),
(100, 'PHYSICAL THERAPY TECHNICIAN', '2024-05-13 23:32:36', '2024-05-13 23:32:36'),
(101, 'PROFESSIONAL ELECTRONICS ENGINEER', '2024-05-13 23:33:08', '2024-05-13 23:33:08'),
(102, 'PROFESSIONAL FOOD TECHNOLOGIST', '2024-05-13 23:34:27', '2024-05-13 23:34:27'),
(103, 'REAL ESTATE SALESPERSON', '2024-05-14 01:24:10', '2024-05-14 01:24:10'),
(104, 'MEDICAL REPRESENTATIVE', '2024-05-14 01:24:29', '2024-05-14 01:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'fad', NULL, NULL),
(2, 'registration', NULL, NULL),
(3, 'legal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('TGUYJzWN5TyTwk3O3I95g5VmbXL4mAEr0SBHrj65', 18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV2l5TjN1a21XNm5zT0t6TWIwZFg3OHpUeWp5MlhzMVN2N2d5WE0xTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTg7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcmV2aWV3LXBpY2Nvci1wZGYvMSI7fX0=', 1723699432);

-- --------------------------------------------------------

--
-- Table structure for table `signatories`
--

CREATE TABLE `signatories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signatories`
--

INSERT INTO `signatories` (`id`, `name`, `position`, `created_at`, `updated_at`) VALUES
(1, 'ROLDAN C. TAA', 'Chief Administrative officer', NULL, NULL),
(2, 'MARY JANE T. PORTE', 'Supervising Administrative Officer', NULL, NULL),
(3, 'JOHN CARLO N. BOLEYLEY', 'Information Technology Officer 1', NULL, NULL),
(4, 'MYRO FE D. ZAPICO', 'Administrative Officer III(Records Officer II)', NULL, NULL),
(5, 'ALYSSA L. PASSOL', 'Administrative Officer I(Cashier I)', NULL, NULL),
(6, 'JUANITA L. DOMOGEN', 'Regional Director', NULL, NULL),
(7, 'CRESENTE B. LUMEREZ JR.', 'Attorney IV', '2024-04-18 17:47:27', '2024-04-18 17:47:27'),
(8, 'JUANITA L. DOMOGEN', 'Regional Director', '2024-04-22 00:09:00', '2024-04-22 00:09:00'),
(9, 'VIRGINIA N. MARTIN', 'Chief Professional Regulations Officer', '2024-04-23 18:05:14', '2024-04-23 18:05:14'),
(10, 'JALILA M. PACADA', 'Administrative Officer V', '2024-04-24 00:31:27', '2024-04-24 00:31:27'),
(12, 'HANNAH B. BAYENG-MAGALGALIT', 'Attorney III', '2024-05-07 00:22:30', '2024-05-07 00:22:30'),
(13, 'MARY JANE T. PORTE', 'Supervising Administrative Officer', '2024-05-07 00:24:56', '2024-05-07 00:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `surrendered_documents`
--

CREATE TABLE `surrendered_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `board` varchar(255) NOT NULL,
  `doc_surrendered` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `professionID` bigint(20) UNSIGNED NOT NULL,
  `returnedDate` date NOT NULL,
  `regnum` varchar(255) NOT NULL,
  `penalty` varchar(255) NOT NULL,
  `case_title` varchar(255) NOT NULL,
  `case_no` varchar(255) NOT NULL,
  `placeOfIssue` varchar(255) NOT NULL DEFAULT 'Baguio City, Benguet, Philippines',
  `date_issues` date NOT NULL DEFAULT '2024-04-22',
  `hearing_officer` varchar(255) NOT NULL,
  `person_role_id` bigint(20) UNSIGNED NOT NULL,
  `complainant_lname` varchar(255) NOT NULL,
  `complainant_fname` varchar(255) NOT NULL,
  `complainant_mname` varchar(255) DEFAULT NULL,
  `complainant_suffix` varchar(255) DEFAULT NULL,
  `complainant_sex` varchar(255) NOT NULL,
  `chief` varchar(255) NOT NULL,
  `position_officer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surrendered_documents`
--

INSERT INTO `surrendered_documents` (`id`, `board`, `doc_surrendered`, `lname`, `fname`, `mname`, `suffix`, `sex`, `professionID`, `returnedDate`, `regnum`, `penalty`, `case_title`, `case_no`, `placeOfIssue`, `date_issues`, `hearing_officer`, `person_role_id`, `complainant_lname`, `complainant_fname`, `complainant_mname`, `complainant_suffix`, `complainant_sex`, `chief`, `position_officer`, `created_at`, `updated_at`) VALUES
(1, 'ARCHITECTURE', 'Professional Identification Card and Certificate of Registration dated 11/13/2013', 'PAWID', 'AUDREY JANE', 'QUAN', NULL, 'FEMALE', 4, '2024-03-04', '0032026', 'ONE (1) YEAR SUSPENSION', 'Karen B. Tubay v. Audrey Jane Q. Pawid', 'BAG 18-14', 'Baguio City, Benguet, Philippines', '2024-05-21', 'CRESENTE B. LUMEREZ JR.', 8, 'TUBAY', 'karen', 'B.', NULL, 'FEMALE', 'Atty. GISELLE G. DURANA', 'Director IV, Legal Service', '2024-05-20 23:43:53', '2024-06-18 20:57:17'),
(3, 'NURSING', 'Professional Identification Card', 'VELASQUEZ', 'AUDREY JANEs', 'QUANn', NULL, 'MALE', 17, '2024-06-01', '0123469', 'ONE YEAR SUSPENSION', 'Karen B. Tubawwwy v. Audrey Jane Q. Pawid', 'BAG 0691', 'Baguio City, Benguet, Philippines', '2024-07-04', 'Vergi', 4, 'TUBAY', 'Karen123', 'Yowaimo', 'aa', 'FEMALE', 'Atty. GISELLE DURANA', 'Director IV, Legal Service', '2024-07-03 18:01:47', '2024-07-03 18:01:47'),
(16, 'TAMBAY', 'N PASS', 'VELASQUEZ', 'ALAM', 'test', 'testtest', 'MALE', 19, '2024-07-16', 'YAWA112', 'ONE YEAR SUSPENSION', 'Karen B. Tubay v. Audrey Jane Q. Pawid', '01010169', 'Baguio City, Benguet, Philippines', '2024-07-12', 'MEGAMIND', 8, 'testtestq', 'testtest', 'testtest', 'testtest', 'MALE', 'Atty. GISELLE DURANA', 'testtesttesttest', '2024-07-11 17:39:00', '2024-07-11 17:39:00'),
(17, 'Nursing', 'TRYTRY', 'test', 'test11', 'trst1111', NULL, 'MALE', 95, '2024-08-01', '0123411', 'ONE YEAR SUSPENSION', 'Karen B. Tubay v. Audrey Jane Q. Pawid', 'BAG 0-69', 'Baguio City, Benguet, Philippines', '2024-08-15', 'Cresente B. Lumerez JR.', 8, 'TUBAY', 'Karentest', 'testtestq', NULL, 'FEMALE', 'Atty. GISELLE G. DURANA', 'Director IV, Legal Service', '2024-08-14 16:38:59', '2024-08-14 16:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_fp` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_fp`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Clarence Villaflor', 'clarence', 'clarencevillaflor2001@gmail.com', NULL, '$2y$12$etmKsdFTo9JT6PKwpHkefuPGIU6TEJcnViylCvX7WCzMzqv472cqG', 1, 'od7PMYcifYvb7fiqdHGz5kZb9JStav2hjjITfElKvc82eVrJ43Hf9M1OyB0p', '2024-04-17 21:43:32', '2024-05-09 21:31:22'),
(3, 'Honey Kaye C. Cabanlig', 'cabanlighc', NULL, NULL, '$2y$12$oCDWG6R0CtRt5YjpOY3uo.0a9VBSKNdUmYP7SSB3c7zzRYXsniZMS', 3, 'fHudvTSX8mcPhToVYvprGWUAQm2iL8nyDedhtBF9zZ3opze2S6vMKeuoMvTK', '2024-04-22 17:50:24', '2024-05-07 00:25:51'),
(6, 'Angelica Carinan', 'jijicries', 'akicarinan@gmail.com', NULL, '$2y$12$ajbOHLRYSaXvDsFgUM4D8O06zk5MJ3LecEctnghIYLdRe/qkMElf.', 1, NULL, '2024-05-06 22:46:42', '2024-05-09 21:43:21'),
(9, 'Mary Jane T. Porte', 'mij', NULL, NULL, '$2y$12$DSMcrILs6sh1RhoMhFn77eQE2emTNylbbRI.fsdoKipz1uMXOJJo2', 1, NULL, '2024-05-06 23:57:27', '2024-05-06 23:57:27'),
(10, 'John Carlo N. Boleyley', 'jc', NULL, NULL, '$2y$12$tSHeFWfoQtxQuMKRj8szIuMYWYxOTP3qsZ.DGP4dGsRT9b/6svT2.', 1, NULL, '2024-05-06 23:58:07', '2024-05-13 23:28:58'),
(12, 'Ronalyn A. Chaoeng', 'talliadra', NULL, NULL, '$2y$12$M9wr9zxYLhtJUX6l0orfTuyH3sezvFCmuckwN240gmN.mnoy6ZhwK', 3, 'CqiVryleo8UqRMWCfejTlievtTvaAihZkIzWMZ1FPUwP5xI320gCNcC2buHA', '2024-05-07 00:04:31', '2024-05-07 00:05:25'),
(13, 'Hannah B. Bayeng-Magalgalit', 'magalgalithbb', NULL, NULL, '$2y$12$MZcmEgRCDuA.epAAVr1LDOMSlZADvIuNb13rG8T1RgWjeFPO7eehe', 2, NULL, '2024-05-07 00:08:07', '2024-05-07 00:08:07'),
(14, 'Jalila M. Pacada', 'pacadajm', NULL, NULL, '$2y$12$wh1IGqd.OdmqIKR/dCj5uea08afwx7WzzpYMQfOTsuZSdMZR4vXAW', 1, NULL, '2024-05-07 00:09:37', '2024-05-07 00:09:37'),
(15, 'Niño Emmanuelle A. Celeste', 'registra', NULL, NULL, '$2y$12$z1kEmOPtL3RPCYe.E0x23eMvoEldoCF5o0F53kvd.RAK5Kw./fNUS', 3, 'wEuMzkVMRNwLoBD92WMBxTuhnf73jghcqK9zdu7UHEXg6KA6maJUZ3U4yjYY', '2024-05-07 00:21:16', '2024-06-18 00:42:14'),
(18, 'prc', 'prc', NULL, NULL, '$2y$12$FXqJ647dbRzHZlaSBYHTsey3NI03KKSvthpEDvsSXGAhldyhGmzJG', 2, NULL, '2024-06-18 20:09:34', '2024-06-18 20:09:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accreditation_certifications`
--
ALTER TABLE `accreditation_certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accreditation_certifications_professionid_foreign` (`professionID`),
  ADD KEY `accreditation_certifications_person_role_id_foreign` (`person_role_id`);

--
-- Indexes for table `appearance_certifications`
--
ALTER TABLE `appearance_certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appearance_certifications_person_role_id_foreign` (`person_role_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `certification_of_complaints`
--
ALTER TABLE `certification_of_complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certification_of_complaints_professionid_foreign` (`professionID`),
  ADD KEY `certification_of_complaints_signatoriesatty_foreign` (`signatoriesAtty`),
  ADD KEY `certification_of_complaints_person_role_id_foreign` (`person_role_id`);

--
-- Indexes for table `certification_of_former_filipino`
--
ALTER TABLE `certification_of_former_filipino`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certification_of_former_filipino_professionid_foreign` (`professionID`),
  ADD KEY `certification_of_former_filipino_person_role_id_foreign` (`person_role_id`);

--
-- Indexes for table `certification_of_registrations`
--
ALTER TABLE `certification_of_registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certification_of_registrations_professionid_foreign` (`professionID`),
  ADD KEY `certification_of_registrations_person_role_id_foreign` (`person_role_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `finality_certifications`
--
ALTER TABLE `finality_certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `finality_certifications_signatoriesid_foreign` (`signatory`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `person_roles`
--
ALTER TABLE `person_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `person_roles_person_id_role_id_unique` (`person_id`,`role_id`),
  ADD KEY `person_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `piccor_certifications`
--
ALTER TABLE `piccor_certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `piccor_certifications_professionid_foreign` (`professionID`),
  ADD KEY `piccor_certifications_signatoriesid_foreign` (`person_role_id`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `signatories`
--
ALTER TABLE `signatories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surrendered_documents`
--
ALTER TABLE `surrendered_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surrendered_documents_professionid_foreign` (`professionID`),
  ADD KEY `surrendered_documents_person_role_id_foreign` (`person_role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_email_fp_unique` (`email_fp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accreditation_certifications`
--
ALTER TABLE `accreditation_certifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `appearance_certifications`
--
ALTER TABLE `appearance_certifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certification_of_complaints`
--
ALTER TABLE `certification_of_complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `certification_of_former_filipino`
--
ALTER TABLE `certification_of_former_filipino`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `certification_of_registrations`
--
ALTER TABLE `certification_of_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finality_certifications`
--
ALTER TABLE `finality_certifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `person_roles`
--
ALTER TABLE `person_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `piccor_certifications`
--
ALTER TABLE `piccor_certifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signatories`
--
ALTER TABLE `signatories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `surrendered_documents`
--
ALTER TABLE `surrendered_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accreditation_certifications`
--
ALTER TABLE `accreditation_certifications`
  ADD CONSTRAINT `accreditation_certifications_person_role_id_foreign` FOREIGN KEY (`person_role_id`) REFERENCES `person_roles` (`id`),
  ADD CONSTRAINT `accreditation_certifications_professionid_foreign` FOREIGN KEY (`professionID`) REFERENCES `professions` (`id`);

--
-- Constraints for table `appearance_certifications`
--
ALTER TABLE `appearance_certifications`
  ADD CONSTRAINT `appearance_certifications_person_role_id_foreign` FOREIGN KEY (`person_role_id`) REFERENCES `person_roles` (`id`);

--
-- Constraints for table `certification_of_complaints`
--
ALTER TABLE `certification_of_complaints`
  ADD CONSTRAINT `certification_of_complaints_person_role_id_foreign` FOREIGN KEY (`person_role_id`) REFERENCES `person_roles` (`id`),
  ADD CONSTRAINT `certification_of_complaints_professionid_foreign` FOREIGN KEY (`professionID`) REFERENCES `professions` (`id`),
  ADD CONSTRAINT `certification_of_complaints_signatoriesatty_foreign` FOREIGN KEY (`signatoriesAtty`) REFERENCES `person_roles` (`id`);

--
-- Constraints for table `certification_of_former_filipino`
--
ALTER TABLE `certification_of_former_filipino`
  ADD CONSTRAINT `certification_of_former_filipino_person_role_id_foreign` FOREIGN KEY (`person_role_id`) REFERENCES `person_roles` (`id`),
  ADD CONSTRAINT `certification_of_former_filipino_professionid_foreign` FOREIGN KEY (`professionID`) REFERENCES `professions` (`id`);

--
-- Constraints for table `certification_of_registrations`
--
ALTER TABLE `certification_of_registrations`
  ADD CONSTRAINT `certification_of_registrations_person_role_id_foreign` FOREIGN KEY (`person_role_id`) REFERENCES `person_roles` (`id`),
  ADD CONSTRAINT `certification_of_registrations_professionid_foreign` FOREIGN KEY (`professionID`) REFERENCES `professions` (`id`);

--
-- Constraints for table `finality_certifications`
--
ALTER TABLE `finality_certifications`
  ADD CONSTRAINT `finality_certifications_signatoriesid_foreign` FOREIGN KEY (`signatory`) REFERENCES `signatories` (`id`);

--
-- Constraints for table `person_roles`
--
ALTER TABLE `person_roles`
  ADD CONSTRAINT `person_roles_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `signatories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `person_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `piccor_certifications`
--
ALTER TABLE `piccor_certifications`
  ADD CONSTRAINT `piccor_certifications_professionid_foreign` FOREIGN KEY (`professionID`) REFERENCES `professions` (`id`),
  ADD CONSTRAINT `piccor_certifications_signatoriesid_foreign` FOREIGN KEY (`person_role_id`) REFERENCES `signatories` (`id`);

--
-- Constraints for table `surrendered_documents`
--
ALTER TABLE `surrendered_documents`
  ADD CONSTRAINT `surrendered_documents_person_role_id_foreign` FOREIGN KEY (`person_role_id`) REFERENCES `person_roles` (`id`),
  ADD CONSTRAINT `surrendered_documents_professionid_foreign` FOREIGN KEY (`professionID`) REFERENCES `professions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
