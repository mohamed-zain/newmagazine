-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2019 at 10:56 PM
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
-- Table structure for table `emplyees`
--

CREATE TABLE `emplyees` (
  `id` int(10) UNSIGNED NOT NULL,
  `NameAR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NameEN` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Qualify` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BirthPlace` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BirthDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MobPhone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HomePhone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quarter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AssignDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AssignType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Branch` int(11) DEFAULT NULL,
  `WorkHours` int(11) DEFAULT NULL,
  `Managment` int(11) DEFAULT NULL,
  `MainDirector` int(11) DEFAULT NULL,
  `JobTitle` int(11) DEFAULT NULL,
  `JobDegree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `JobName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MainSalary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LivePremium` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TransPremium` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BankName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BankBranch` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BankAccount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdentityID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdentitySrc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdentityDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdenDateEnd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PassportID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PassportDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PasDateEnd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PassportSrc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Attached` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emplyees`
--

INSERT INTO `emplyees` (`id`, `NameAR`, `NameEN`, `Nationality`, `Qualify`, `Email`, `Status`, `BirthPlace`, `BirthDate`, `MobPhone`, `HomePhone`, `City`, `Quarter`, `Address`, `AssignDate`, `AssignType`, `Branch`, `WorkHours`, `Managment`, `MainDirector`, `JobTitle`, `JobDegree`, `JobName`, `MainSalary`, `LivePremium`, `TransPremium`, `BankName`, `BankBranch`, `BankAccount`, `IdentityID`, `IdentitySrc`, `IdentityDate`, `IdenDateEnd`, `PassportID`, `PassportDate`, `PasDateEnd`, `PassportSrc`, `Attached`, `created_at`, `updated_at`) VALUES
(1, 'محمد صالح محمد الحماد', 'mohamed al zain', 'سعودي', 'بكالوريوس هندسة', 'drwazahgm@gmail.com', 'متزوج', 'الرس', '31/12/1959', '0555820822', '0114942207', 'الرياض', 'الربيع', 'حى الربيع - الرياض', '1/1/2012', 'صاحب عمل', 28, 48, 1, 4, 1, 'مالك', 'صاحب ومدير عام المؤسسة', '1', '1', '1', 'الراجحي', 'الراجحي', '80000157608010225002', '1018890960', 'الدرعية', '16/09/1397', '13/11/1452', 'a', 'a', 'a', 'a', NULL, '2017-09-20 06:53:27', '2018-08-12 21:27:26'),
(2, 'ابراهيم سليم', 'mohamed al zain', 'سوداني', 'جامعي', 'moh@hotmail.com', 'اعزب', 'الخرطوم', '1992', '09123456', '03154555', 'الخرطوم', 'امدرمان', 'xfgbxcb', '2017', 'تعاقد', 15, 20, 1, 1, 1, 'الثالثة', NULL, '20000', '1200', '1300', 'بنك الجزيرة', 'الرياض', '51564', '1454584', 'الجوازات', '2010', '2020', '48784', '2012', '2020', 'الجوازات', NULL, '2017-09-20 08:49:46', '2017-09-20 08:49:46'),
(3, 'نوال نور الدين', 'mohamed al zain', 'سوداني', 'جامعي', 'moh@hotmail.com', 'اختر الحالة الاجتماعية', 'الخرطوم', '1992', '09123456', '03154555', 'الخرطوم', 'امدرمان', 'gyjvgj', '2017', 'تعاقد', 15, 20, 2, 2, 3, 'الثالثة', 'gjvgjv', '20000', '1200', '1300', 'بنك الجزيرة', 'الرياض', '51564', '1454584', 'الجوازات', '2010', '2020', '48784', '2012', '2020', 'الجوازات', NULL, '2017-09-20 09:02:25', '2017-09-20 09:02:25'),
(4, 'محمد جمال على خطاب ', 'mohamed al zain', 'مصري', 'بكالوريوس هندسة', 'm.gamal@drwazah.com.sa', 'متزوج', 'مصر', '1989/01/01', '0555555555', '0114942207', 'الرياض', 'الربيع', '', '1/11/2017', 'دوام كامل', 28, 48, 2, 13, 4, 'موظف', 'مهندس سلامة', '3500', '500', '500', 'الراجحي', 'الراجحي', '0000000000000000000000000000', '000000000', 'الرياض', '15/02/1439', '15/02/1440', 'a', 'a', 'a', 'a', NULL, '2017-09-20 09:06:37', '2018-08-13 00:07:56'),
(5, 'محمد زين', 'ghchgg', 'سوداني', 'جامعي', 'zain@drwazah.com.sa', 'اعزب', 'الخرطوم', '1993', '1245789654', '123458', 'الخرطوم', 'المال', 'امدرمان', '2017', 'عادي', 29, 20, 7, 5, 5, 'مدير', 'مهندس', '20000', '2000', '1000', 'فبصل', 'الجمهورية', '154652', '4314', 'يبرر', '2014', '2014', '43', '2020', '2015', 'ليبلس', NULL, '2017-11-28 07:49:40', '2018-08-13 23:26:03'),
(6, 'معتز محمد شطا عبده', 'moh', 'مصري', 'بكالوريوس هندسة معمارية', 'moataz@drwazah.com.sa', 'متزوج', 'مصر', '1984/04/20', '0555555555', '0114942207', 'الرياض', 'الربيع', 'الربيع حي الربيع ', '12/14/2013', 'دوام كامل', 28, 48, 7, 10, 6, 'موظف', 'المدير الفني للمكتب ', '7500', '1250', '1000', 'الراجحي', 'الرياض', '1880000501608010934689', '2360081950', 'الرياض', '15/02/1439', '15/02/1440', '12121', '0000', '0000', 'a', NULL, '2017-11-28 23:20:27', '2018-08-11 16:53:53'),
(7, 'احمد الخالد', 'hmed', 'سعودي', 'جامعي', 'a@ggn.moj', 'متزوج', 'تالنلبتلرالن', '6/11/2017', '54654', '236624', 'تنات', 'تانتال', 'تنانم', '2321', 'زوةمك', 28, 3, 4, 1, 4, 'نتخنت', 'نةى', '32154', '326', '23', 'عاعه', 'هاهعا', '2326666', '6598', 'تاتا', '2/2/2102', '2/5/2016', '656494', '2/2/422', '6/6/2013', 'تلتاباتل', NULL, '2017-11-29 00:55:23', '2017-11-29 00:55:23'),
(8, 'عبد السلام عرفات عبد السلام محمد', 'ahlam', 'مصري', 'بكالوريوس هندسة', 'Asalam@drwazah.com.sa', 'اعزب', 'مصر', '1988/09/07', '0535786347', '0114942207', 'الرياض', 'الربيع', 'الرياض ', '03/20/2016', 'دوام كامل', 28, 48, 7, 11, 8, 'موظف', 'مهندس مدني', '5000', '500', '500', 'الراجحي', 'الراجحي', '2480000448608010423713', '2353520063', 'الرياض', '01/10/1438', '01/10/1439', 'a', 'a', 'a', 'a', NULL, '2017-11-29 01:04:34', '2018-08-11 16:24:56'),
(10, 'خالد محمد عطيه علي', 'KHALED MOHAMED ATTYA ALI', 'مصري', 'بكالوريوس هندسة', 'Eng.khaled@drwazah.com.sa', 'متزوج', 'مصر', '1972/08/24', '0580909228', '0114942207', 'الرياض', 'الربيع', 'حى الربيع الرياض', '08/07/2017', 'دوام كامل', 28, 48, 10, 9, 11, 'مدير', 'مدير المشاريع بالفرع الرئيسي\r\n', '10000', '834', '500', 'الرياض', 'الرياض', '0420000002601321359940', '2439576956', 'الرياض', '15/02/1439', '15/02/1440', 'a', 'a', 'a', 'a', NULL, '2017-11-29 16:09:48', '2017-11-29 16:09:48'),
(13, 'عبد الله مصطفى عبد القوى خضر', 'ABDALLA MOUSTAFA ABDELKAWY KHEDR', 'مصري', 'بكالوريوس هندسة', 'akhader@drwazah.com.sa', 'اعزب', 'مصر', '1992/01/01', '0583933559', '0114942207', 'الرياض', 'الربيع', 'الربيع', '03/21/2017', 'دوام كامل', 28, 48, 7, 11, 4, 'موظف', 'مهندس سلامة وميكانيكا', '4000', '667', '400', 'الراجحي', 'الراجحي', '9380000495608010156281', '2400652760', 'الرياض', '14/05/1438', '14/05/1439', 'a', 'a', 'a', 'a', NULL, '2017-11-29 16:23:12', '2017-11-29 16:23:12'),
(14, 'شريف محمد على ابو غنيم', 'SHERIF MOHAMED ALY ABOUGHONIM', 'مصري', 'بكالوريوس هندسة', 'ghoneemsherif@yahoo.com', 'متزوج', 'مصر', '1971/11/01', '0506067794', '0114942207', 'الرياض', 'الربيع', 'الربيع', '07/01/2017', 'دوام كامل', 28, 48, 4, 10, 36, 'موظف', 'مدير مشروع الاشراف على تجديد منفذ الحديثة', '5925', '1482', '593', 'الراجحي', 'الراجحي', '8580000106608012016450', '2337332379', 'الرياض', '21/05/1438', '21/05/1439', 'a', 'a', 'a', 'a', NULL, '2017-11-29 16:29:41', '2017-11-29 16:29:41'),
(15, 'إلهامي إبراهيم يوسف رجب', 'ELHAMI IBRAHIM YOUSSEF RAGAB', 'مصري', 'بكالوريوس هندسة', 'iilhaami@yahoo.com‬', 'متزوج', 'مصر', '1966/05/11', '0596501777', '0114942207', 'الرياض', 'الربيع', 'الربيع', '07/16/2016', 'دوام كامل', 28, 48, 4, 10, 8, 'موظف', 'مدير مشروع الاشراف على انشاء مبنى الشئون الاجتماعية بتيماء', '7333', '1667', '1000', 'الراجحي', 'الراجحي', '9080000497608010056034', '2291651384', 'الرياض', '17/11/1438', '17/11/1439', 'a', 'a', 'a', 'a', NULL, '2017-11-29 16:34:22', '2017-11-29 16:34:22'),
(16, 'تجربة ', 'test', 'سعودي', 'تاا', 'test@gmail.com', 'اعزب', '6/6/2017', '2/2/2002', '321654965', '263546', 'الرياض ', 'نتتن', 'نمىن', '2/2/2008', 'ةىمن', 28, 22, 4, 11, 15, 'لىل', 'قفلاقفال', '2000', '100', '50', 'بنك الرياض ', 'تال', '26454', '523.53', 'بلبل', '2/2/2017', '5/2/2017', '5563856', '20/9/2017', '6/5/2018', 'قفا', NULL, '2017-12-04 18:29:54', '2017-12-04 18:29:54'),
(17, 'محمد نبيل', 'mohamed nabil', 'مصرى ', 'ليسانس حقوق ', 'nabil@drwazah.com.sa', 'اعزب', 'مصر', '1/9/1982', '05001213213', '1021212', 'الرياض', 'الربيع', 'يالا', '1/1/2012', 'دوام كامل', 28, 48, 7, 10, 33, 'موظف', 'يالبءت', '5000', '500', '500', 'الراجحي', 'الرياض', '05210154121213', '2450115466', 'الرياض', '16/09/1397', '13/11/1452', 'a01010011', '1/1/1438', '11/05/1439', 'egypt', NULL, '2017-12-10 21:18:07', '2018-08-27 20:57:57'),
(18, 'مثني عمر محمد اليونس', 'MATHNA OMAR MOHAMMED ALYUNUS ', 'اردني', 'بكالوريوس هندسة معمارية', 'muthanna@drwazah.com.sa', 'اعزب', 'الاردن', '1989/01/01', '0555555555', '0114942207', 'الرياض', 'الربيع', 'الرياض - حي الربيع', '04/09/2017', 'دوام كامل', 28, 48, 7, 10, 6, 'موظف', 'مهندس معماري', '4875', '750', '1875', 'الاهلى', 'الرياض', '1210000006973044000103', '2162324129', 'الرياض', '15/11/1438', '15/11/1439', 'a', 'a', 'a', 'a', NULL, '2017-12-23 19:14:39', '2017-12-23 19:14:39'),
(19, 'يزيد محمد الحماد', 'YAZEID MOHAMED SALEH ELHAMAD', 'سعودي', 'بكالوريوس هندسة كهربائية', 'y.alhammad@drwazah.com.sa', 'اعزب', 'الرس', '15/02/1990', '055555555', '0114942207', 'الرياض', 'الربيع', '', '1/1/2012', 'دوام كامل', 28, 48, 7, 1, 1, 'مدير', 'نائب المدير العام ', '6500', '2000', '1500', 'الراجحي', 'الرياض', '1080000117608010333136', '1065548982', 'الرس', '21/08/1438', '21/08/1445', 'a', 'a', 'a', 'a', NULL, '2017-12-23 19:22:15', '2018-08-30 01:12:07'),
(20, 'سيف الدين طعمه بدوى هادى ', 'SIEF ADDEEN TOMA BADAWI HADI', 'اردني', 'بكالوريوس هندسة', 'saif@drwazah.com.sa', 'اعزب', 'الاردن', '1993/02/09', '055555555', '0114942207', 'الرياض', 'الربيع', '', '15/01/2017', 'دوام كامل', 28, 48, 7, 13, 4, 'موظف', 'مهندس سلامة', '5200', '2000', '800', 'الانماء', 'الرياض', '6005000068201590690000', '2427551318', 'الرياض', '10/05/1438', '10/07/1439', 'a', 'a', 'a', 'a', NULL, '2017-12-23 19:29:25', '2017-12-23 19:29:25'),
(22, 'محمد على احمد اليامي', 'MOHAMMED ALI AHMED ALYAMI', 'سعودي', 'بكالوريوس هندسة كهربائية', 'm.alyami@drwazah.com.sa', 'اعزب', 'السعودية', '15/02/1990', '055555555555', '0114942207', 'الرياض', 'الربيع', '', '2/10/2017', 'دوام كامل', 28, 48, 7, 21, 41, 'موظف', 'مهندس كهرباء', '3575', '1375', '550', 'الراجحي', 'الرياض', '5.78000050160801e+21', '1153460355', 'السعودية', '1/1/1438', '1/1/1450', 'a', 'a', 'a', 'a', NULL, '2017-12-23 20:58:56', '2017-12-23 20:58:56'),
(24, 'تجربة', 'aamal', 's', 'g', 'test@gmail.org', 'متزوج', 'jhv', '2/2/1999', '6454', '534', 'jv', 'h', 'hgf', '2/2/2007', 'j', 28, 7, 7, 3, 33, 'n', 'nb', '565', '1', '3', 'الراجحي', 'الرياض', '354', '234', '3143', '2/2/2001', '2008', '32', '2/2/2005', '2008', 'اللا', '2018-04-05-PHOTO-00001779.jpg', '2018-04-25 12:09:12', '2018-08-25 20:21:22'),
(25, 'عبدالرحمن الرميحي', 'abdelrahman', 'سعودي', 'ماجستير', 'abdalrahman@archi2030.com', 'متزوج', 'السعودية', '2/2/1880', '01145446324', '05000555', 'الرياض', 'المصيف', 'الرياض', '2/2/2018', 'عقد', 28, 20, 7, 1, 1, 'مهندس', 'مهندس', '50000', '2000', '1000', 'بنك الراجحي', 'المصيف', '2565445555', '54654549', 'الرياض', '2/2/2017', '20/3/2019', '61654', '2/2/2018', '2/2/2019', 'الرياض', '365.bmp', '2018-07-22 20:04:33', '2018-07-22 20:04:33'),
(26, 'علاء رجب ', 'Alaa Rajab', 'مصري', 'بكالوريوس', 'Aragab@drwazah.com.sa', '', 'مصر', '0000', '00000000', '0000', 'Riyadh', 'الربيع حي الربيع ', 'sauidi arabia\r\nRiyadh', '0000', '0000', 28, 48, 7, 6, 8, '000', '00000', '00000', '000', '000', 'الراجحي', 'Riyadh', '00000', '0000', 'الرياض', '2222', '0000', '000000000', '00000', '0000', 'مصر', 'Desert.jpg', '2018-08-11 17:24:12', '2018-08-11 17:24:12'),
(27, 'خالد اليامي', 'Khaled Al-Yami ', 'Saudi Arabia', 'بكالوريوس', 'Kh.alyami@drwazah.com.sa', '', 'Riyadh', '00000', '0000000', '0000', 'Riyadh', 'الرياض  حي الربيع ', 'sauidi arabia\r\nRiyadh', '0000', '0000', 28, 53, 7, 21, 4, '000', 'مهندس', '00000', '4', '0000', 'الراجحي', 'Riyadh', '00000', '0000', 'الرياض', '0000', '0000', '0000', '000', '0000', 'الراياض', 'Desert.jpg', '2018-08-11 19:15:45', '2018-08-11 19:15:45'),
(28, 'محمد فوزي', 'Mohammed Fouzi', 'مصري', 'بكالوريوس', 'm.fawzy@drwazah.com.sa', 'متزوج', 'مصر', '00000', '00000000', '00000', 'Riyadh', 'الربيع حي الربيع ', 'sauidi arabiaRiyadh', '0000', 'عقد', 28, 48, 7, 1, 41, '000', 'مهندس', '000000', '000', '000', 'الراجحي', 'Riyadh', '00000', '00000', 'مصر', '00000', '0000', '000000', '00000', '0000', '0000', 'Desert.jpg', '2018-08-11 19:25:20', '2018-08-16 14:14:39'),
(29, 'ممدوح المطيري', 'Mamdouh Al-Mutairi', 'Saudi Arabia', 'بكالوريوس', 'mamdouh@drwazah.com.sa ', 'اعزب', 'Riyadh', '00000', '000000', '1108', 'Riyadh', 'الربيع حي الربيع ', 'sauidi arabiaRiyadh', '0000', 'عقد', 28, 48, 7, 6, 4, '000', 'مهندس', '111111', '000', '000', 'الراجحي', 'Riyadh', '11111', '00000', 'الرياض', '00000', '0000', '000000000', '00000', '0000000', 'الراياض', 'Desert.jpg', '2018-08-11 19:31:09', '2018-08-16 12:53:33'),
(30, 'أسامة عبد الله احمد', 'Osama Abdullah', 'Saudi Arabia', 'بكالوريوس', 'osama@drwazah.com.sa', 'متزوج', 'مصر', '00000', '11111111', '1111', 'Riyadh', 'الربيع حي الربيع ', 'sauidi arabiaRiyadh', '0000', 'عقد', 28, 47, 7, 1, 4, '000', 'مهندس', '111111', '000', '000', 'الراجحي', 'Riyadh', '11111', '0000', 'الرياض', '0000', '0000', '000000000', '00000', '0000', 'الراياض', 'Desert.jpg', '2018-08-11 19:34:21', '2018-08-15 20:20:27'),
(31, 'محمد راشد الجيلاني', 'Mohammed Rashed Al-Gilany', 'Saudi Arabia', 'بكالوريوس', 'm.algelany@drwazah.com.sa', 'متزوج', 'Riyadh', '00000', '11111111', '1111', 'Riyadh', 'الربيع حي الربيع ', 'sauidi arabia\r\nRiyadh', '0000', 'عقد', 28, 48, 7, 21, 4, '000', 'مهندس', '111111', '000', '000', 'الراجحي', 'Riyadh', '11111', '0000', 'الرياض', '0000', '0000', '000000000', '00000', '0000', 'الراياض', 'Desert.jpg', '2018-08-11 19:40:40', '2018-08-11 19:40:40'),
(32, 'محمد كشك', 'Mohammed Keshk', 'مصري', 'بكالوريوس', 'm.keshk@drwazah.com.sa', 'متزوج', 'مصر ', '00000', '11111111', '1111', 'Riyadh', 'الربيع حي الربيع ', 'sauidi arabia\r\nRiyadh', '0000', 'عقد', 28, 48, 7, 21, 4, '000', 'مهندس', '00000', '000', '000', 'الراجحي', 'Riyadh', '11111', '0000', 'الرياض', '0000', '0000', '000000000', '00000', '0000', 'الراياض', 'Desert.jpg', '2018-08-11 19:43:53', '2018-08-11 19:43:53'),
(33, 'محمد نبيل', 'Ahmed Abdulqader', 'مصرى ', 'ليسانس حقوق ', 'mo7ammad.85@gmail.com', 'اعزب', 'مصر', '1/9/1982', '05001213213', '1021212', 'الرياض', 'الربيع', 'يالا', '1/1/2012', 'دوام كامل', 28, 48, 7, 10, 33, 'موظف', 'يالبءت', '5000', '500', '500', 'الراجحي', 'الرياض', '05210154121213', '2450115466', 'الرياض', '16/09/1397', '13/11/1452', 'a01010011', '1/1/1438', '11/05/1439', 'egypt', 'Desert.jpg', '2018-08-11 19:55:00', '2018-08-12 20:47:07'),
(34, 'أحمد عبد القادر', 'Ahmed Abdulqader', 'مصري', 'بكالوريوس', 'eldawy@drwazah.com.sa', 'متزوج', 'مصر', '00000', '11111111', '1111', 'Riyadh', 'الربيع حي الربيع ', 'sauidi arabia\r\nRiyadh', '0000', 'عقد', 28, 48, 7, 1, 4, '000', 'مهندس', '11111', '11111', '000', 'الراجحي', 'Riyadh', '11111', '0000', 'الرياض', '0000', '0000', '000000000', '00000', '0000', 'مصر', 'Desert.jpg', '2018-08-12 23:36:59', '2018-08-12 23:36:59'),
(35, 'محمد جمال ', 'Mohammed Jamal', 'مصري', 'بكالوريوس', 'm.gamal@drwazah.com.sa', 'متزوج', 'مصر', '00000', '11111111', '1111', 'Riyadh', 'الربيع حي الربيع ', 'sauidi arabiaRiyadh', '0000', 'عقد', 28, 48, 7, 1, 5, '000', 'مهندس', '11111', '11111', '1122', 'الراجحي', 'الصحافة', '11111', '0000', 'الرياض', '0000', '0000', '000000000', '00000', '0000', 'مصر', 'Desert.jpg', '2018-08-13 00:12:28', '2018-08-18 14:12:59'),
(37, 'معتز شطا', 'motaz', 'مصري', 'م', 'motaz@drwazah.com.sa', 'متزوج', 'مصر', '1/1/2000', '0555820140', '01156565', 'Riyadh', 'اتب', 'الرياض', '2014', 'عقد', 28, 48, 7, 10, 5, 'مدير', 'مهندس', '4500', '4000', '500', 'الراجحي ', 'الربيع', '131651', '54654549', 'الرياض', '2/2/2017', '20/3/2019', '61654', '2/2/2018', '2/2/2019', 'الرياض', 'الرياض.jpg', '2018-08-27 21:28:59', '2018-08-27 21:28:59'),
(38, 'محمد فوزى', 'Mohammed Fawzi', 'مصري', 'م', 'm.fawzi@drwazah.com.sa', 'اعزب', 'مصر', '1/1/2000', '55555554', '22222222', 'الرياض', 'اتب', 'الرياض', '2014', 'عقد', 28, 48, 7, 6, 41, 'مهندس ', 'مهندس', '1111111', '111111', '777777', 'الراجحي', 'الرياض', '11111111', '54654549', 'الرياض', '2/2/2017', '20/3/2019', '61654', '2/2/2018', '2/2/2019', 'الرياض', 'بريدة.jpg', '2018-08-27 21:45:06', '2018-08-27 21:45:06'),
(39, 'طاهره علاء احمد ', 'Tahrah Alae Ahmed', 'مصرية', 'بكاليريوس هندسة معمارية', 'Arch.TAhra@drwazah.com.sa', '', 'مصر ', '19/4/1995', '560911494', '0000000', 'Riyadh', 'حي الربيع', 'sauidi arabia\r\nRiyadh', '15/09/2018', 'ثابت', 28, 48, 10, 37, 6, 'مهندسه', 'مهندسة معمارية وديكور ', '4000', '0000', '0000', 'الراجحي', 'حي الربيع ', '00000000000', '2075584421', 'الرياض', '00000', '09/11/1442', 'A23068957', '04/07/2018', '03/07/2025', 'مصر', 'Koala.jpg', '2018-10-11 17:36:21', '2018-10-11 17:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_files`
--

CREATE TABLE `projects_files` (
  `id` int(11) NOT NULL,
  `PrfileID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDeintyfile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Checkfile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Desitionfile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Bulldingfile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Glocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seeing` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EleSave` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Saving` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects_files`
--

INSERT INTO `projects_files` (`id`, `PrfileID`, `IDeintyfile`, `Checkfile`, `Desitionfile`, `Bulldingfile`, `Glocation`, `seeing`, `EleSave`, `Saving`, `created_at`, `updated_at`) VALUES
(1, '2018-94201', 'public/94201/19967.pdf', 'public/94201/78753.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-11 15:09:29', '2018-10-11 15:09:29'),
(2, '2018-30230', 'public/30230/43875.pdf', 'public/30230/93353.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-11 15:16:53', '2018-10-11 15:16:53'),
(3, '2018-10142', 'public/10142/65503.pdf', 'public/10142/45586.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 15:17:00', '2018-10-13 15:17:00'),
(4, '2018-33928', 'public/33928/74859.pdf', 'public/33928/83313.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 15:21:10', '2018-10-13 15:21:10'),
(5, '2018-74158', 'public/74158/94607.pdf', 'public/74158/44596.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 15:22:36', '2018-10-13 15:22:36'),
(6, '2018-94351', 'public/94351/92881.pdf', 'public/94351/55732.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 15:25:50', '2018-10-13 15:25:50'),
(7, '2018-23472', 'public/23472/13256.pdf', 'public/23472/57764.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 15:30:07', '2018-10-13 15:30:07'),
(8, '2018-56335', 'public/56335/82695.pdf', 'public/56335/33790.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 15:33:01', '2018-10-13 15:33:01'),
(9, '2018-29626', 'public/29626/41844.pdf', 'public/29626/53153.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 15:34:07', '2018-10-13 15:34:07'),
(10, '2018-93915', 'public/93915/70498.pdf', 'public/93915/39910.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 15:35:51', '2018-10-13 15:35:51'),
(11, '2018-24641', 'public/24641/78421.pdf', 'public/24641/88025.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 16:05:43', '2018-10-13 16:05:43'),
(12, '2018-69293', 'public/69293/65638.pdf', 'public/69293/58871.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 16:06:26', '2018-10-13 16:06:26'),
(13, '2018-18634', 'public/18634/73614.pdf', 'public/18634/50306.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 16:08:59', '2018-10-13 16:08:59'),
(14, '2018-98773', 'public/98773/63249.pdf', 'public/98773/10211.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 16:10:30', '2018-10-13 16:10:30'),
(15, '2018-61482', 'public/61482/89246.pdf', 'public/61482/39256.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 16:42:40', '2018-10-13 16:42:40'),
(16, '2018-16426', 'public/16426/43214.pdf', 'public/16426/43654.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-13 16:48:38', '2018-10-13 16:48:38'),
(17, '2018-41339', NULL, 'public/41339/84338.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-16 21:47:33', '2018-10-16 21:47:33'),
(18, '2018-72912', 'public/72912/46425.jpeg', 'public/72912/63109.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-06 13:49:24', '2018-11-06 13:49:24'),
(19, '2019-64681', 'public/64681/28938.pdf', NULL, 'public/64681/76788.docx', NULL, NULL, NULL, NULL, NULL, '2019-03-06 18:44:53', '2019-03-06 18:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `replay_tasks`
--

CREATE TABLE `replay_tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `EMPID` int(11) NOT NULL,
  `TaskID` int(11) NOT NULL,
  `ReContent` text COLLATE utf8_unicode_ci NOT NULL,
  `RState` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `replay_tasks`
--

INSERT INTO `replay_tasks` (`id`, `EMPID`, `TaskID`, `ReContent`, `RState`, `created_at`, `updated_at`) VALUES
(1, 43, 91621, 'تم استلام المشروع وجاري العمل عليع', NULL, '2018-10-15 13:09:02', '2018-10-15 13:09:02'),
(2, 39, 46966, 'تم الأنتهاء من تصميم كل من :-\r\n1- أعمال التكييف \r\n2- أعمال التغذية\r\n3-أعمال الصرف ', NULL, '2018-10-16 19:52:24', '2018-10-16 19:52:24'),
(3, 43, 30828, 'مرفق لكم تصميم اعمال الكهرباء \r\nشكرا', NULL, '2018-10-18 15:05:31', '2018-10-18 15:05:31'),
(4, 39, 60747, 'تم تصميم كل من :-\r\n1- أعمال التكييف \r\n2-أعمال الصرف\r\n3-أعمال التغذية', NULL, '2018-10-18 15:08:48', '2018-10-18 15:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `replay_tasks_files`
--

CREATE TABLE `replay_tasks_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `RTaskID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RTaskName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `replay_tasks_files`
--

INSERT INTO `replay_tasks_files` (`id`, `RTaskID`, `RTaskName`, `created_at`, `updated_at`) VALUES
(1, '46966', 'replay/eec598c7c53fdd67c8212f0feb40d6a3.dwg', '2018-10-16 19:52:24', '2018-10-16 19:52:24'),
(2, '30828', 'replay/87e957acdf0410c7bc77bacdd1781c23.dwg', '2018-10-18 15:05:31', '2018-10-18 15:05:31'),
(3, '60747', 'replay/091f766d4ab14507d256e830d7f65330.dwg', '2018-10-18 15:08:48', '2018-10-18 15:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `TID` int(11) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `Sender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Proid` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `TaskContent` text COLLATE utf8_unicode_ci NOT NULL,
  `TState` int(11) DEFAULT '0',
  `TState2` int(11) DEFAULT '0',
  `Period` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `Days` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `Minutes` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `TAttached` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `TID`, `EmpID`, `Sender`, `Proid`, `TaskContent`, `TState`, `TState2`, `Period`, `Days`, `Minutes`, `TAttached`, `created_at`, `updated_at`) VALUES
(1, 37229, 37, '27', '2018-30230', 'مشروع تصميم فيلا بحي المعيزيلة للعميل فواز زومان السبيعي العنزي يشمل المعامري والانشائي والكهربائي والصحي واستخراج الرخصة (الفسح). الرجاء القيام بالعمل اللازم وانهاء المشروع خلال 30 يوم كما هو متفق مع العميل.\r\n\r\nمع جزيل الشكر والتقدير. ', 0, 1, '30', '', '', NULL, '2018-10-11 15:22:34', '2018-10-15 21:18:36'),
(2, 96644, 37, '27', '2018-98773', 'تصميم مشروع مبنى اداري وتشمل أعمال مراجعة التصميم المقدم من الطرف الثاني والمذكورة في البيان الموضح في هذا العقد فقط, وتشمل هذه الاعمال الخرائط الهندسية الخاصة بالبلدية من الرسومات والمكون من المعماري و الانشائي والكهربائي والصحي واستخراج الرخصة للبناء (الفسح) شاملا اعتماد المخططات من قبل الدفاع المدني.  \r\n\r\nالرجاء العمل على المشروع حسب المدة المحدد (30) يوم عمل, مع جزيل الشكر والتقدير. ', 0, 1, '30', '', '', NULL, '2018-10-13 16:15:23', '2018-10-31 12:58:04'),
(3, 86296, 37, '27', '2018-16426', ' تصميم فيلا بحي عرقه وتشمل هذه الاعمال الخرائط الهندسية الخاصة بالبلدية من الرسومات الابتدائية والرسومات النهائية والمكون من المعماري و الانشائي والكهربائي والصحي واستخراج الرخصة للبناء (الفسح).  \r\nالرجاء العمل على المشروع والانتهاء منه ضمن المدة المحددة (30) يوم. مع جزيل الشكر والتقدير...\r\n', 0, 1, '30', '', '', NULL, '2018-10-13 16:51:35', '2018-10-27 19:25:30'),
(4, 46966, 35, '42', '2018-30230', 'السلام عليكم\r\nمطلوب عمل مخططات الميكانيكا للمشروع المرفق :\r\n1 الصرف\r\n2- التغذية\r\n3- التكييف ', 1, 1, '2', '', '', NULL, '2018-10-14 19:50:02', '2018-10-27 19:36:58'),
(5, 91621, 38, '42', '2018-30230', 'السلام عليكم\r\nمطلوب عمل مخططات الكهرباء للمشروع المرفق :\r\n1 اضاءة\r\n2- قوى\r\n3- سنترال\r\n4- شبكة tv\r\n5- كاميرات', 1, 1, '3', '', '', NULL, '2018-10-14 19:52:25', '2018-10-25 16:14:42'),
(6, 46061, 37, '27', '2018-41339', 'الرجاء العمل على المشروع وانهائه حسب المدة المحددة (30) يوم .\r\n\r\nمع جزيل الشكر والتقدير. ', 0, 1, '30', '', '', NULL, '2018-10-16 21:48:49', '2018-10-27 19:25:52'),
(7, 30828, 38, '42', '2018-41339', 'مطلوب تصميم مخططات الكهرباء للملف المرفق:\r\n1- اضاءة\r\n2- قوى\r\n3- سنترال\r\n4- كاميرات', 1, 1, '1', '', '', NULL, '2018-10-17 19:07:11', '2018-10-27 19:48:48'),
(8, 60747, 35, '42', '2018-41339', 'مطلوب تصميم مخططات الميكانيكا للملف المرفق:\r\n1- صرف\r\n2- تغذية\r\n3- تكييف\r\n', 1, 1, '1', '', '', NULL, '2018-10-17 19:11:11', '2018-10-18 15:08:48'),
(9, 20162, 26, '42', '2018-41339', 'مطلوب تصميم مخططات الانشائية للملف المرفق علما ان التصميم بنظام Steel Structure\r\n', 0, 1, '2', '', '', NULL, '2018-10-17 19:48:22', '2018-10-31 12:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `tasks_files`
--

CREATE TABLE `tasks_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `FTaskID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FTaskName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks_files`
--

INSERT INTO `tasks_files` (`id`, `FTaskID`, `FTaskName`, `created_at`, `updated_at`) VALUES
(1, '46966', 'attach/712340ba1b278ad35d182ddeb272f855.dwg', '2018-10-14 19:50:02', '2018-10-14 19:50:02'),
(2, '91621', 'attach/712340ba1b278ad35d182ddeb272f855.dwg', '2018-10-14 19:52:25', '2018-10-14 19:52:25'),
(3, '30828', 'attach/7376c8389428a77ba129d8af691e34a1.dwg', '2018-10-17 19:07:11', '2018-10-17 19:07:11'),
(4, '60747', 'attach/7376c8389428a77ba129d8af691e34a1.dwg', '2018-10-17 19:11:11', '2018-10-17 19:11:11'),
(5, '20162', 'attach/7376c8389428a77ba129d8af691e34a1.dwg', '2018-10-17 19:48:22', '2018-10-17 19:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EmpiD` int(11) DEFAULT NULL,
  `Level` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `EmpiD`, `Level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Archi2030 Admin', 'infoAdmin@archi2030.com', '$2y$10$LSkPeOAdLjA1tIDePClgnOWRXTcEWJ2rWUVifSMi50KGY9SJHXn0O', 2, 1, 'ovdhbvS1LA8GhobKEKg3yJeVsJ1bUUyvAFKx8e7s4sltLOv5Z6aKHTY3HI8c', '2017-09-24 08:54:51', '2019-02-12 04:23:55'),
(3, 'نوال نور الدين', 'emp@archi2030.com', '$2y$10$H3JGtlZ8KKVbWpuJB/Yf4eUlld./QDjbChRJlZqpU3XdEp9LNtBWW', 3, 2, 'CT9nJ6WNbnG7FWr7eMtNGP8R6e5OJhQE4NNaE3MG8tUKBjkCCfvVX0lMg9HY', '2017-11-10 05:40:21', '2019-03-03 17:01:16'),
(20, 'المهندسة sahar', 'sahar@gmail.com', '$2y$10$LSkPeOAdLjA1tIDePClgnOWRXTcEWJ2rWUVifSMi50KGY9SJHXn0O', 5, 2, 'Xv8uZOq9vQhNyWRAhsRtx278Fc2xqgF2CrANtf3c7AU30Yo3BTaRx6t5yX8l', '2018-08-07 00:59:17', '2018-08-30 00:21:05'),
(21, 'محمد صالح محمد الحماد', 'gm@drwazah.com.sa', '$2y$10$SrT/VqxVY5R.7ND08tMhVOB0ePZAYpIDDn5JvbslXzvJrDAh2odRy', 1, 1, 'sL4r36kIULWI3olaKNosOvKTKVySmrOFcGMC8EqcaOsnQwBPOclu1ga6wgLJ', '2018-08-11 23:21:47', '2019-03-03 17:03:10'),
(22, 'محمد نبيل', 'mo7ammad.85@gmail.com', '$2y$10$KKbqP0/cf0b2kLDL9wnxIuqztjMQhO5k0lGdI19BhoH2YAju7CFL.', 33, 2, 'TEBxvPLdKe38wIUEsu5teMxNFJ90DFfcTK4uSAIuqiaDXjHG2jahIQy9DLIk', '2018-08-12 20:48:42', '2018-08-27 21:22:35'),
(23, 'معتز محمد شطا عبده', 'moataz@drwazah.com.sa', '$2y$10$.n6MQZKQtqxYjNA5pdeIWe2lUNdfb8qzwa.Y9iImxxLUAMA4sEWJO', 21, 2, 'TqGOrhbQxuu86tJU0HrykYkwfzD1w5WuDVjcIMsDn9IY0gb7jWKE0HmYGRsn', '2018-08-12 20:55:40', '2018-08-27 21:32:10'),
(24, 'أحمد عبد القادر', 'eldawy@drwazah.com.sa', '$2y$10$DrdtszwlTo7mMHKApLkusu26YBou0kFLXqr2Sv2d.Fb2knGWhVD7q', 34, 2, 'r11KEnnwkM01QvE344bEBreTk2njZ9CbxCBnBUG7b1LDtMY0MHVJ1nnTbTso', '2018-08-12 23:38:19', '2018-08-30 12:53:21'),
(25, 'عبد الله مصطفى عبد القوى خضر', 'akhader@drwazah.com.sa', '$2y$10$TjtYbwRc.2nDp/wpBsm8CedcbzlLYc7yj83lsn9lK3Ob9.E1Ahwpa', 13, 2, 'nV6PuLVduKXoxptWfF074kNKKkZfQbtfWu2K6bi7QoYtwQJwLm2VthYIUu4x', '2018-08-12 23:39:55', '2018-09-30 17:04:54'),
(26, 'سيف الدين طعمه بدوى هادى ', 'saif@drwazah.com.sa', '$2y$10$2j3zD.fffbwqB6hOD5JVA.WyEo8W1CBPDpnCCfw2bODQkfBs.rQ6C', 20, 2, 'vAGJKZFzdbXwifc5hW6MLhHWwXlvDN09PpdPX2lFzL3V0HKDvNJNW03eMYxc', '2018-08-12 23:40:54', '2018-10-31 19:52:49'),
(27, 'عبدالرحمن الرميحي', 'abdalrahman@archi2030.com', '$2y$10$avSuBSo692lsh2ykHAPHg.XFmhSqWsnqXDWT5fryZ53x151WZHDP.', 25, 1, 'TEmlfeyUI2eSLjvF0wDud9i2z3n8mZsEO8mFzCyv5IIOMqzKglg0RpfPxika', '2018-08-12 23:43:52', '2018-10-29 20:48:26'),
(28, 'عبد السلام عرفات عبد السلام محمد', 'Asalam@drwazah.com.sa', '$2y$10$dRsMlz/xSLp5lHwuduDmM.zQ2D6QZGJ2Lk3.RRI.s5Hh5K7dWN.D2', 12, 2, NULL, '2018-08-12 23:45:08', '2018-08-12 23:45:08'),
(29, 'علاء رجب ', 'Aragab@drwazah.com.sa', '$2y$10$BG5R6w1HcB9r.rVI4k9bNeYoMif8u2p1VNSaz3V6G3Ac5RV1t/oQa', 26, 2, NULL, '2018-08-12 23:46:17', '2018-08-12 23:46:17'),
(30, 'خالد محمد عطيه علي', 'Eng.khaled@drwazah.com.sa', '$2y$10$G8e5IhdEvByMaSonGICnHOT7NyKbmVjFkPPAOOSeCa6Y9buqfgY8u', 11, 2, 'O7w287pN3bov5fCQaozU7rKuxGQDssIy0ssn6QG9lrTd3tHiQGRZS7eH2mmu', '2018-08-12 23:47:19', '2018-08-15 17:35:18'),
(32, 'محمد على احمد اليامي', 'm.alyami@drwazah.com.sa', '$2y$10$Z6XoFInko1rEjdfMaLcDtuMsmc1GjpWrf5cHnZx2/dVkO9HAxeXbm', 22, 2, 'qV9s4SiTuxSEY11gVFGUPQqH6w3WO1v1CsvMGXD7GBRvNn8SzEfltxampZwS', '2018-08-12 23:49:11', '2018-09-30 21:01:32'),
(33, 'خالد اليامي', 'Kh.alyami@drwazah.com.sa', '$2y$10$9WmPZFOt8kF1nvVXn2VlfeDFhie8gJ0ESg5y4akesbHvRURAuRBPK', 27, 2, NULL, '2018-08-12 23:50:03', '2018-08-12 23:50:03'),
(34, 'محمد جمال على خطاب ', 'M.GAMAL@DRWAZAH.COM', '$2y$10$Z5gPV8eVBNUGdu1BDm9Dw.mSstXwcgN48citgdbOkPl6xmHVZZZAa', 23, 2, 'ilIpIzpMx0LRThrS1qab5HB4xMeskTqoe0Ikycnp6WqHO2TpEUR33PWLEdx0', '2018-08-12 23:51:23', '2018-10-14 21:03:02'),
(35, 'ممدوح المطيري', 'm.almetary@drwazah.com.sa', '$2y$10$eEZ1mdRbViAWLgWklcPoJuAUzYU0f.sQHC2aK3ORZ3jIMX4Tw6c7i', 29, 2, NULL, '2018-08-12 23:52:03', '2018-08-12 23:52:03'),
(36, 'أسامة عبد الله', 'osama@drwazah.com.sa', '$2y$10$swoOTDg6Lmkx3ONaD3KxgOBos/jvmIx8yVU7J22LHPTXyFUTISNJ2', 30, 2, NULL, '2018-08-12 23:53:01', '2018-08-12 23:53:01'),
(37, 'محمد راشد الجيلاني', 'm.algelany@drwazah.com.sa', '$2y$10$8CyUlPdk4NIwHRAC3YURoeRdUNV./9YtRS4t1JkWuoxaIxHo4Ahky', 31, 2, NULL, '2018-08-12 23:53:47', '2018-08-12 23:53:47'),
(38, 'محمد كشك', 'm.keshk@drwazah.com.sa', '$2y$10$09E3.kH.vPyPedl3i/ZHCu0tJVwl6h8bPiGmhdKs.8Ow.3Y5.mZNy', 4, 2, NULL, '2018-08-12 23:54:23', '2018-08-12 23:54:23'),
(39, 'محمد جمال ', 'm.gamal@drwazah.com.sa', '$2y$10$kobxRVTXt1RZkqkh2SFnmue4z6FWtfzO/xUgzfz429ZlyEiVDJ6XO', 35, 2, '11Y976SDbX9kHvpSIKy5OKRA0NDRBH7ksiuTaYy3FsKkZeJEz5twWkpD7MV1', '2018-08-13 00:13:14', '2018-10-14 21:04:32'),
(40, 'ممدوح المطيري', 'mamdouh@drwazah.com.sa ', '$2y$10$sWRP9t0maTDMv0Dw3oyh9eXsuzpsT861ycLyx/RAKZiatCsVFSWGC', 29, 2, 'yDMPHnUuMCGdQlS7t7GivSfQVqK7yidwTo6j9b5jxtxfiwPlBDwSTsaMKjW7', '2018-08-16 12:54:55', '2018-10-18 16:47:23'),
(42, 'معتز شطا', 'motaz@drwazah.com.sa', '$2y$10$l6zZav0YiqQvPSkd3NyZDOCWtcjJ3npPppCLuAB7kFr8upZ0ZhCiu', 37, 1, '3QZ5DhSprEiHxHpQQweeOYC2k2V7DeWeeBU0brZdQDQfWpVHuw98gArIiM8W', '2018-08-27 21:30:08', '2018-10-24 13:54:43'),
(43, 'محمد فوزى', 'm.fawzi@drwazah.com.sa', '$2y$10$abCBiw33R9e98gRW9rOIQer1CvUPCUVTs4LkG5d2kWzXSDnp20PgO', 38, 2, 'zWh8lOsnBLr4DoHNOHrnOAbNa2eSkIm3dXEPLk6CmGt77gV3qeSezRIRTATK', '2018-08-27 21:46:07', '2018-08-27 21:46:54'),
(44, 'طاهره علاء احمد ', 'Arch.TAhra@drwazah.com.sa', '$2y$10$L7do0Xnvtb9pwSeqAO4mYOvGvd8b140kvKbMPS/NslmNM6b035uvi', 39, 2, 'AFDgWdYkM8lVnHg71hbJKP5BjyhcKMJgraqVeozUqImEdToMZlQuF72QbemT', '2018-10-11 17:38:03', '2018-10-11 17:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emplyees`
--
ALTER TABLE `emplyees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `projects_files`
--
ALTER TABLE `projects_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replay_tasks`
--
ALTER TABLE `replay_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replay_tasks_files`
--
ALTER TABLE `replay_tasks_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks_files`
--
ALTER TABLE `tasks_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emplyees`
--
ALTER TABLE `emplyees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `projects_files`
--
ALTER TABLE `projects_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `replay_tasks`
--
ALTER TABLE `replay_tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replay_tasks_files`
--
ALTER TABLE `replay_tasks_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tasks_files`
--
ALTER TABLE `tasks_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
