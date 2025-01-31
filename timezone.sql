-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2025 at 07:29 PM
-- Server version: 8.0.41
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techdigiapp_bayhillds`
--

-- --------------------------------------------------------

--
-- Table structure for table `timezone`
--

CREATE TABLE `timezone` (
  `id` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `value` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('1','2') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timezone`
--

INSERT INTO `timezone` (`id`, `name`, `value`, `status`) VALUES
(1, 'America/Adak', 'America/Adak', '1'),
(2, 'America/Anchorage', 'America/Anchorage', '1'),
(3, 'America/Anguilla', 'America/Anguilla', '1'),
(4, 'America/Antigua', 'America/Antigua', '1'),
(5, 'America/Araguaina', 'America/Araguaina', '1'),
(6, 'America/Argentina/Buenos Aires', 'America/Argentina/Buenos_Aires', '1'),
(7, 'America/Argentina/Catamarca', 'America/Argentina/Catamarca', '1'),
(8, 'America/Argentina/Cordoba', 'America/Argentina/Cordoba', '1'),
(9, 'America/Argentina/Jujuy', 'America/Argentina/Jujuy', '1'),
(10, 'America/Argentina/La Rioja', 'America/Argentina/La_Rioja', '1'),
(11, 'America/Argentina/Mendoza', 'America/Argentina/Mendoza', '1'),
(12, 'America/Argentina/Rio Gallegos', 'America/Argentina/Rio_Gallegos', '1'),
(13, 'America/Argentina/Salta', 'America/Argentina/Salta', '1'),
(14, 'America/Argentina/San Juan', 'America/Argentina/San_Juan', '1'),
(15, 'America/Argentina/San Luis', 'America/Argentina/San_Luis', '1'),
(16, 'America/Argentina/Tucuman', 'America/Argentina/Tucuman', '1'),
(17, 'America/Argentina/Ushuaia', 'America/Argentina/Ushuaia', '1'),
(18, 'America/Aruba', 'America/Aruba', '1'),
(19, 'America/Asuncion', 'America/Asuncion', '1'),
(20, 'America/Atikokan', 'America/Atikokan', '1'),
(21, 'America/Bahia', 'America/Bahia', '1'),
(22, 'America/Bahia Banderas', 'America/Bahia_Banderas', '1'),
(23, 'America/Barbados', 'America/Barbados', '1'),
(24, 'America/Belem', 'America/Belem', '1'),
(25, 'America/Belize', 'America/Belize', '1'),
(26, 'America/Blanc-Sablon', 'America/Blanc-Sablon', '1'),
(27, 'America/Boa Vista', 'America/Boa_Vista', '1'),
(28, 'America/Bogota', 'America/Bogota', '1'),
(29, 'America/Boise', 'America/Boise', '1'),
(30, 'America/Cambridge Bay', 'America/Cambridge_Bay', '1'),
(31, 'America/Campo Grande', 'America/Campo_Grande', '1'),
(32, 'America/Cancun', 'America/Cancun', '1'),
(33, 'America/Caracas', 'America/Caracas', '1'),
(34, 'America/Cayenne', 'America/Cayenne', '1'),
(35, 'America/Cayman', 'America/Cayman', '1'),
(36, 'America/Chicago', 'America/Chicago', '1'),
(37, 'America/Chihuahua', 'America/Chihuahua', '1'),
(38, 'America/Ciudad Juarez', 'America/Ciudad_Juarez', '1'),
(39, 'America/Costa Rica', 'America/Costa_Rica', '1'),
(40, 'America/Creston', 'America/Creston', '1'),
(41, 'America/Cuiaba', 'America/Cuiaba', '1'),
(42, 'America/Curacao', 'America/Curacao', '1'),
(43, 'America/Danmarkshavn', 'America/Danmarkshavn', '1'),
(44, 'America/Dawson', 'America/Dawson', '1'),
(45, 'America/Dawson Creek', 'America/Dawson_Creek', '1'),
(46, 'America/Denver', 'America/Denver', '1'),
(47, 'America/Detroit', 'America/Detroit', '1'),
(48, 'America/Dominica', 'America/Dominica', '1'),
(49, 'America/Edmonton', 'America/Edmonton', '1'),
(50, 'America/Eirunepe', 'America/Eirunepe', '1'),
(51, 'America/El Salvador', 'America/El_Salvador', '1'),
(52, 'America/Fort Nelson', 'America/Fort_Nelson', '1'),
(53, 'America/Fortaleza', 'America/Fortaleza', '1'),
(54, 'America/Glace Bay', 'America/Glace_Bay', '1'),
(55, 'America/Goose Bay', 'America/Goose_Bay', '1'),
(56, 'America/Grand Turk', 'America/Grand_Turk', '1'),
(57, 'America/Grenada', 'America/Grenada', '1'),
(58, 'America/Guadeloupe', 'America/Guadeloupe', '1'),
(59, 'America/Guatemala', 'America/Guatemala', '1'),
(60, 'America/Guayaquil', 'America/Guayaquil', '1'),
(61, 'America/Guyana', 'America/Guyana', '1'),
(62, 'America/Halifax', 'America/Halifax', '1'),
(63, 'America/Havana', 'America/Havana', '1'),
(64, 'America/Hermosillo', 'America/Hermosillo', '1'),
(65, 'America/Indiana/Indianapolis', 'America/Indiana/Indianapolis', '1'),
(66, 'America/Indiana/Knox', 'America/Indiana/Knox', '1'),
(67, 'America/Indiana/Marengo', 'America/Indiana/Marengo', '1'),
(68, 'America/Indiana/Petersburg', 'America/Indiana/Petersburg', '1'),
(69, 'America/Indiana/Tell City', 'America/Indiana/Tell_City', '1'),
(70, 'America/Indiana/Vevay', 'America/Indiana/Vevay', '1'),
(71, 'America/Indiana/Vincennes', 'America/Indiana/Vincennes', '1'),
(72, 'America/Indiana/Winamac', 'America/Indiana/Winamac', '1'),
(73, 'America/Inuvik', 'America/Inuvik', '1'),
(74, 'America/Iqaluit', 'America/Iqaluit', '1'),
(75, 'America/Jamaica', 'America/Jamaica', '1'),
(76, 'America/Juneau', 'America/Juneau', '1'),
(77, 'America/Kentucky/Louisville', 'America/Kentucky/Louisville', '1'),
(78, 'America/Kentucky/Monticello', 'America/Kentucky/Monticello', '1'),
(79, 'America/Kralendijk', 'America/Kralendijk', '1'),
(80, 'America/La Paz', 'America/La_Paz', '1'),
(81, 'America/Lima', 'America/Lima', '1'),
(82, 'America/Los Angeles', 'America/Los_Angeles', '1'),
(83, 'America/Lower Princes', 'America/Lower_Princes', '1'),
(84, 'America/Maceio', 'America/Maceio', '1'),
(85, 'America/Managua', 'America/Managua', '1'),
(86, 'America/Manaus', 'America/Manaus', '1'),
(87, 'America/Marigot', 'America/Marigot', '1'),
(88, 'America/Martinique', 'America/Martinique', '1'),
(89, 'America/Matamoros', 'America/Matamoros', '1'),
(90, 'America/Mazatlan', 'America/Mazatlan', '1'),
(91, 'America/Menominee', 'America/Menominee', '1'),
(92, 'America/Merida', 'America/Merida', '1'),
(93, 'America/Metlakatla', 'America/Metlakatla', '1'),
(94, 'America/Mexico City', 'America/Mexico_City', '1'),
(95, 'America/Miquelon', 'America/Miquelon', '1'),
(96, 'America/Moncton', 'America/Moncton', '1'),
(97, 'America/Monterrey', 'America/Monterrey', '1'),
(98, 'America/Montevideo', 'America/Montevideo', '1'),
(99, 'America/Montserrat', 'America/Montserrat', '1'),
(100, 'America/Nassau', 'America/Nassau', '1'),
(101, 'America/New York', 'America/New_York', '1'),
(102, 'America/Nome', 'America/Nome', '1'),
(103, 'America/Noronha', 'America/Noronha', '1'),
(104, 'America/North Dakota/Beulah', 'America/North_Dakota/Beulah', '1'),
(105, 'America/North Dakota/Center', 'America/North_Dakota/Center', '1'),
(106, 'America/North Dakota/New Salem', 'America/North_Dakota/New_Salem', '1'),
(107, 'America/Nuuk', 'America/Nuuk', '1'),
(108, 'America/Ojinaga', 'America/Ojinaga', '1'),
(109, 'America/Panama', 'America/Panama', '1'),
(110, 'America/Paramaribo', 'America/Paramaribo', '1'),
(111, 'America/Phoenix', 'America/Phoenix', '1'),
(112, 'America/Port-au-Prince', 'America/Port-au-Prince', '1'),
(113, 'America/Port of Spain', 'America/Port_of_Spain', '1'),
(114, 'America/Porto Velho', 'America/Porto_Velho', '1'),
(115, 'America/Puerto Rico', 'America/Puerto_Rico', '1'),
(116, 'America/Punta Arenas', 'America/Punta_Arenas', '1'),
(117, 'America/Rankin Inlet', 'America/Rankin_Inlet', '1'),
(118, 'America/Recife', 'America/Recife', '1'),
(119, 'America/Regina', 'America/Regina', '1'),
(120, 'America/Resolute', 'America/Resolute', '1'),
(121, 'America/Rio Branco', 'America/Rio_Branco', '1'),
(122, 'America/Santarem', 'America/Santarem', '1'),
(123, 'America/Santiago', 'America/Santiago', '1'),
(124, 'America/Santo Domingo', 'America/Santo_Domingo', '1'),
(125, 'America/Sao Paulo', 'America/Sao_Paulo', '1'),
(126, 'America/Scoresbysund', 'America/Scoresbysund', '1'),
(127, 'America/Sitka', 'America/Sitka', '1'),
(128, 'America/St Barthelemy', 'America/St_Barthelemy', '1'),
(129, 'America/St Johns', 'America/St_Johns', '1'),
(130, 'America/St Kitts', 'America/St_Kitts', '1'),
(131, 'America/St Lucia', 'America/St_Lucia', '1'),
(132, 'America/St Thomas', 'America/St_Thomas', '1'),
(133, 'America/St Vincent', 'America/St_Vincent', '1'),
(134, 'America/Swift Current', 'America/Swift_Current', '1'),
(135, 'America/Tegucigalpa', 'America/Tegucigalpa', '1'),
(136, 'America/Thule', 'America/Thule', '1'),
(137, 'America/Tijuana', 'America/Tijuana', '1'),
(138, 'America/Toronto', 'America/Toronto', '1'),
(139, 'America/Tortola', 'America/Tortola', '1'),
(140, 'America/Vancouver', 'America/Vancouver', '1'),
(141, 'America/Whitehorse', 'America/Whitehorse', '1'),
(142, 'America/Winnipeg', 'America/Winnipeg', '1'),
(143, 'America/Yakutat', 'America/Yakutat', '1'),
(144, 'Asia/Kolkata', 'Asia/Kolkata', '1'),
(145, 'Australia/Adelaide', 'Australia/Adelaide', '1'),
(146, 'Australia/Brisbane', 'Australia/Brisbane', '1'),
(147, 'Australia/Broken Hill', 'Australia/Broken_Hill', '1'),
(148, 'Australia/Darwin', 'Australia/Darwin', '1'),
(149, 'Australia/Eucla', 'Australia/Eucla', '1'),
(150, 'Australia/Hobart', 'Australia/Hobart', '1'),
(151, 'Australia/Lindeman', 'Australia/Lindeman', '1'),
(152, 'Australia/Lord Howe', 'Australia/Lord_Howe', '1'),
(153, 'Australia/Melbourne', 'Australia/Melbourne', '1'),
(154, 'Australia/Perth', 'Australia/Perth', '1'),
(155, 'Australia/Sydney', 'Australia/Sydney', '1'),
(156, 'Europe/Amsterdam', 'Europe/Amsterdam', '1'),
(157, 'Europe/Andorra', 'Europe/Andorra', '1'),
(158, 'Europe/Astrakhan', 'Europe/Astrakhan', '1'),
(159, 'Europe/Athens', 'Europe/Athens', '1'),
(160, 'Europe/Belgrade', 'Europe/Belgrade', '1'),
(161, 'Europe/Berlin', 'Europe/Berlin', '1'),
(162, 'Europe/Bratislava', 'Europe/Bratislava', '1'),
(163, 'Europe/Brussels', 'Europe/Brussels', '1'),
(164, 'Europe/Bucharest', 'Europe/Bucharest', '1'),
(165, 'Europe/Budapest', 'Europe/Budapest', '1'),
(166, 'Europe/Busingen', 'Europe/Busingen', '1'),
(167, 'Europe/Chisinau', 'Europe/Chisinau', '1'),
(168, 'Europe/Copenhagen', 'Europe/Copenhagen', '1'),
(169, 'Europe/Dublin', 'Europe/Dublin', '1'),
(170, 'Europe/Gibraltar', 'Europe/Gibraltar', '1'),
(171, 'Europe/Guernsey', 'Europe/Guernsey', '1'),
(172, 'Europe/Helsinki', 'Europe/Helsinki', '1'),
(173, 'Europe/Isle of Man', 'Europe/Isle_of_Man', '1'),
(174, 'Europe/Istanbul', 'Europe/Istanbul', '1'),
(175, 'Europe/Jersey', 'Europe/Jersey', '1'),
(176, 'Europe/Kaliningrad', 'Europe/Kaliningrad', '1'),
(177, 'Europe/Kirov', 'Europe/Kirov', '1'),
(178, 'Europe/Kyiv', 'Europe/Kyiv', '1'),
(179, 'Europe/Lisbon', 'Europe/Lisbon', '1'),
(180, 'Europe/Ljubljana', 'Europe/Ljubljana', '1'),
(181, 'Europe/London', 'Europe/London', '1'),
(182, 'Europe/Luxembourg', 'Europe/Luxembourg', '1'),
(183, 'Europe/Malta', 'Europe/Malta', '1'),
(184, 'Europe/Mariehamn', 'Europe/Mariehamn', '1'),
(185, 'Europe/Minsk', 'Europe/Minsk', '1'),
(186, 'Europe/Monaco', 'Europe/Monaco', '1'),
(187, 'Europe/Moscow', 'Europe/Moscow', '1'),
(188, 'Europe/Nicosia', 'Europe/Nicosia', '1'),
(189, 'Europe/Oslo', 'Europe/Oslo', '1'),
(190, 'Europe/Paris', 'Europe/Paris', '1'),
(191, 'Europe/Podgorica', 'Europe/Podgorica', '1'),
(192, 'Europe/Prague', 'Europe/Prague', '1'),
(193, 'Europe/Riga', 'Europe/Riga', '1'),
(194, 'Europe/Rome', 'Europe/Rome', '1'),
(195, 'Europe/Samara', 'Europe/Samara', '1'),
(196, 'Europe/San Marino', 'Europe/San_Marino', '1'),
(197, 'Europe/Sarajevo', 'Europe/Sarajevo', '1'),
(198, 'Europe/Sofia', 'Europe/Sofia', '1'),
(199, 'Europe/Stockholm', 'Europe/Stockholm', '1'),
(200, 'Europe/Tallinn', 'Europe/Tallinn', '1'),
(201, 'Europe/Tirane', 'Europe/Tirane', '1'),
(202, 'Europe/Uzhgorod', 'Europe/Uzhgorod', '1'),
(203, 'Europe/Vaduz', 'Europe/Vaduz', '1'),
(204, 'Europe/Vatican', 'Europe/Vatican', '1'),
(205, 'Europe/Vienna', 'Europe/Vienna', '1'),
(206, 'Europe/Vilnius', 'Europe/Vilnius', '1'),
(207, 'Europe/Volgograd', 'Europe/Volgograd', '1'),
(208, 'Europe/Warsaw', 'Europe/Warsaw', '1'),
(209, 'Europe/Zagreb', 'Europe/Zagreb', '1'),
(210, 'Europe/Zurich', 'Europe/Zurich', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timezone`
--
ALTER TABLE `timezone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timezone`
--
ALTER TABLE `timezone`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
