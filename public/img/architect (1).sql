-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2019 at 11:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architect`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `ProID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ProName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BranchID` int(11) NOT NULL,
  `ProType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProManager` int(11) NOT NULL,
  `AgenName` int(11) NOT NULL,
  `Cash` decimal(13,2) NOT NULL,
  `Price` decimal(13,2) DEFAULT NULL,
  `ProDesc` text COLLATE utf8_unicode_ci,
  `State` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Stage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Contract` text COLLATE utf8_unicode_ci,
  `Conditions` longtext COLLATE utf8_unicode_ci,
  `ETM` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Amount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Own` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Heet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cleaner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProCheck` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Final` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Date` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `ProID`, `ProName`, `BranchID`, `ProType`, `ProManager`, `AgenName`, `Cash`, `Price`, `ProDesc`, `State`, `Stage`, `Duration`, `Contract`, `Conditions`, `ETM`, `Amount`, `Own`, `Heet`, `Cleaner`, `ProCheck`, `Final`, `Date`, `created_at`, `updated_at`) VALUES
(1, '2018-30230', 'تصميم فيلا بحي المعيزيلة للعميل فواز زومان السبيعي العنزي', 28, 'تصميم معماري وبلديه', 37, 76, '12500.00', '25000.00', 'تصميم فيلا بحي المعيزيلة ويشمل الخرائط الهندسية الخاصة بالبلدية من الرسومات الابتدائية والرسومات النهائية والمكون من المعماري والانشائي والكهربائي والصحي واستخراج الرخصة للبناء (الفسح)', NULL, NULL, NULL, '', NULL, 'public/30230/91942.pdf', NULL, NULL, NULL, NULL, 'public/30230/45509.pdf', NULL, '2018', '2018-10-11 15:16:53', '2018-10-11 15:16:53'),
(2, '2018-98773', 'تصميم مشروع مبنى إداري للعميل عبدالعزيز محمد الزامل', 28, 'تصميم معماري وبلديه', 37, 77, '25000.00', '50000.00', 'تصميم مشروع مبنى اداري وتشمل هذه الاعمال الخرائط الهندسية الخاصة بالبلدية من الرسومات والمكون من المعماري و الانشائي والكهربائي والصحي واستخراج الرخصة للبناء (الفسح) شاملا اعتماد المخططات من قبل الدفاع المدني.  ', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'public/98773/42182.pdf', NULL, '2018', '2018-10-13 16:10:32', '2018-10-13 16:10:32'),
(3, '2018-16426', 'تصميم فيلا للعميل خالد محمد الحميزي', 28, 'تصميم معماري وبلديه', 37, 78, '10000.00', '20000.00', 'تصميم فيلا وتشمل هذه الاعمال الخرائط الهندسية الخاصة بالبلدية من الرسومات الابتدائية والنهائية والمكون من المعماري و الانشائي والكهربائي والصحي واستخراج الرخصة للبناء (الفسح).  ........', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'public/16426/99947.pdf', NULL, '2018', '2018-10-13 16:48:40', '2018-10-25 16:04:39'),
(4, '2018-41339', 'صيدلية وايتس ', 28, 'تصميم معماري وبلديه', 37, 79, '16250.00', '32500.00', 'تصميم صيدبية وتشمل هذه الاعمال الخرائط الهندسية الخاصة بالبلدية من الرسومات النهائية والمكون من المعماري و الانشائي والكهربائي والصحي  والتكييف واستخراج الرخصة للبناء (الفسح).  ', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'public/41339/66338.pdf', NULL, '2018', '2018-10-16 21:47:33', '2018-10-16 21:47:33'),
(5, '2018-72912', 'فيلا سكنية - سليمان المطيري', 28, 'تصميم معماري', 6, 80, '7000.00', '14000.00', 'تصميم معماري- انشائي- كهرباء - ميكانيكا', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018', '2018-11-06 13:49:24', '2018-11-06 19:46:55'),
(6, '2019-64681', 'فيلا سكنية', 28, 'تصميم معماري وبلديه', 1, 81, '990000.00', '990000.00', 'مشروع فيلا سكنية ', NULL, NULL, NULL, '', 'public/64681/85247.docx', NULL, NULL, 'public/64681/30500.pdf', 'public/64681/19461.pdf', 'public/64681/37943.pdf', NULL, NULL, '2019', '2019-03-06 18:44:54', '2019-03-06 18:44:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
