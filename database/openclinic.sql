-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2016 at 03:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `openclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_log_tbl`
--

CREATE TABLE IF NOT EXISTS `access_log_tbl` (
  `id_user` int(10) unsigned NOT NULL,
  `login` varchar(20) NOT NULL,
  `access_date` datetime NOT NULL,
  `id_profile` smallint(5) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_log_tbl`
--

INSERT INTO `access_log_tbl` (`id_user`, `login`, `access_date`, `id_profile`) VALUES
(2, 'admin', '2015-12-30 02:05:03', 1),
(2, 'admin', '2015-12-30 02:22:47', 1),
(2, 'admin', '2015-12-30 03:37:46', 1),
(2, 'admin', '2015-12-30 03:38:49', 1),
(2, 'admin', '2015-12-30 03:44:38', 1),
(2, 'admin', '2015-12-30 03:44:58', 1),
(2, 'admin', '2015-12-30 13:36:18', 1),
(2, 'admin', '2015-12-30 14:24:36', 1),
(2, 'admin', '2015-12-30 14:25:23', 1),
(2, 'admin', '2015-12-30 14:35:01', 1),
(2, 'admin', '2015-12-30 14:35:16', 1),
(2, 'admin', '2015-12-30 14:37:00', 1),
(2, 'admin', '2015-12-30 14:42:21', 1),
(2, 'admin', '2015-12-30 14:42:27', 1),
(2, 'admin', '2015-12-30 18:44:44', 1),
(1, 'sysop', '2015-12-30 21:44:19', 1),
(1, 'sysop', '2015-12-30 21:44:26', 1),
(1, 'sysop', '2015-12-30 21:52:03', 1),
(2, 'admin2', '2015-12-31 02:33:35', 1),
(2, 'admin2', '2015-12-31 02:34:29', 1),
(2, 'admin2', '2015-12-31 02:34:38', 1),
(2, 'admin2', '2015-12-31 03:22:43', 1),
(2, 'admin2', '2015-12-31 03:36:12', 1),
(2, 'admin2', '2015-12-31 03:36:33', 1),
(2, 'admin2', '2015-12-31 03:50:56', 1),
(2, 'admin2', '2015-12-31 05:03:20', 1),
(2, 'admin2', '2015-12-31 06:03:48', 1),
(2, 'admin2', '2015-12-31 06:08:49', 1),
(2, 'admin2', '2015-12-31 08:51:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `connection_problem_tbl`
--

CREATE TABLE IF NOT EXISTS `connection_problem_tbl` (
  `id_problem` int(10) unsigned NOT NULL,
  `id_connection` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deleted_patient_tbl`
--

CREATE TABLE IF NOT EXISTS `deleted_patient_tbl` (
  `id_patient` int(10) unsigned NOT NULL,
  `nif` varchar(20) DEFAULT NULL,
  `first_name` varchar(25) NOT NULL,
  `surname1` varchar(30) NOT NULL,
  `surname2` varchar(30) DEFAULT '',
  `address` text,
  `phone_contact` text,
  `sex` enum('V','H') NOT NULL DEFAULT 'V',
  `race` varchar(25) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_place` varchar(40) DEFAULT NULL,
  `decease_date` date DEFAULT NULL,
  `nts` varchar(30) DEFAULT NULL,
  `nss` varchar(30) DEFAULT NULL,
  `family_situation` text,
  `labour_situation` text,
  `education` text,
  `insurance_company` varchar(30) DEFAULT NULL,
  `id_member` int(10) unsigned DEFAULT NULL,
  `collegiate_number` varchar(20) DEFAULT NULL,
  `birth_growth` text,
  `growth_sexuality` text,
  `feed` text,
  `habits` text,
  `peristaltic_conditions` text,
  `psychological` text,
  `children_complaint` text,
  `venereal_disease` text,
  `accident_surgical_operation` text,
  `medicinal_intolerance` text,
  `mental_illness` text,
  `parents_status_health` text,
  `brothers_status_health` text,
  `spouse_childs_status_health` text,
  `family_illness` text,
  `create_date` datetime NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `login` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deleted_problem_tbl`
--

CREATE TABLE IF NOT EXISTS `deleted_problem_tbl` (
  `id_problem` int(10) unsigned NOT NULL,
  `last_update_date` date NOT NULL,
  `id_patient` int(10) unsigned NOT NULL,
  `id_member` int(10) unsigned DEFAULT NULL,
  `collegiate_number` varchar(20) DEFAULT NULL,
  `order_number` tinyint(3) unsigned NOT NULL,
  `opening_date` date NOT NULL,
  `closing_date` date DEFAULT NULL,
  `meeting_place` varchar(40) DEFAULT NULL,
  `wording` text NOT NULL,
  `subjective` text,
  `objective` text,
  `appreciation` text,
  `action_plan` text,
  `prescription` text,
  `create_date` datetime NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `login` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_tbl`
--

CREATE TABLE IF NOT EXISTS `history_tbl` (
  `id_patient` int(10) unsigned NOT NULL,
  `birth_growth` text,
  `growth_sexuality` text,
  `feed` text,
  `habits` text,
  `peristaltic_conditions` text,
  `psychological` text,
  `children_complaint` text,
  `venereal_disease` text,
  `accident_surgical_operation` text,
  `medicinal_intolerance` text,
  `mental_illness` text,
  `parents_status_health` text,
  `brothers_status_health` text,
  `spouse_childs_status_health` text,
  `family_illness` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_tbl`
--

INSERT INTO `history_tbl` (`id_patient`, `birth_growth`, `growth_sexuality`, `feed`, `habits`, `peristaltic_conditions`, `psychological`, `children_complaint`, `venereal_disease`, `accident_surgical_operation`, `medicinal_intolerance`, `mental_illness`, `parents_status_health`, `brothers_status_health`, `spouse_childs_status_health`, `family_illness`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medical_test_tbl`
--

CREATE TABLE IF NOT EXISTS `medical_test_tbl` (
`id_test` int(10) unsigned NOT NULL,
  `id_problem` int(10) unsigned NOT NULL,
  `document_type` varchar(128) DEFAULT NULL,
  `path_filename` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_tbl`
--

CREATE TABLE IF NOT EXISTS `patient_tbl` (
`id_patient` int(10) unsigned NOT NULL,
  `nif` varchar(20) DEFAULT NULL,
  `first_name` varchar(25) NOT NULL,
  `surname1` varchar(30) NOT NULL,
  `surname2` varchar(30) DEFAULT '',
  `address` text,
  `phone_contact` text,
  `sex` enum('V','H') NOT NULL DEFAULT 'V',
  `race` varchar(25) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_place` varchar(40) DEFAULT NULL,
  `decease_date` date DEFAULT NULL,
  `nts` varchar(30) DEFAULT NULL,
  `nss` varchar(30) DEFAULT NULL,
  `family_situation` text,
  `labour_situation` text,
  `education` text,
  `insurance_company` varchar(30) DEFAULT NULL,
  `id_member` int(10) unsigned DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_tbl`
--

INSERT INTO `patient_tbl` (`id_patient`, `nif`, `first_name`, `surname1`, `surname2`, `address`, `phone_contact`, `sex`, `race`, `birth_date`, `birth_place`, `decease_date`, `nts`, `nss`, `family_situation`, `labour_situation`, `education`, `insurance_company`, `id_member`) VALUES
(1, '001', 'Khoi', 'Nguyen', 'Duc', 'HN', '0123', 'V', 'dont+understand', '1994-01-31', 'HN', '2000-12-12', '1242145', '14561', 'fghg', 'jgjhg', 'hjhgjgh', 'jgfht', 3);

-- --------------------------------------------------------

--
-- Table structure for table `problem_tbl`
--

CREATE TABLE IF NOT EXISTS `problem_tbl` (
`id_problem` int(10) unsigned NOT NULL,
  `last_update_date` date NOT NULL,
  `id_patient` int(10) unsigned NOT NULL,
  `id_member` int(10) unsigned DEFAULT NULL,
  `order_number` tinyint(3) unsigned NOT NULL,
  `opening_date` date NOT NULL,
  `closing_date` date DEFAULT NULL,
  `meeting_place` varchar(40) DEFAULT NULL,
  `wording` text NOT NULL,
  `subjective` text,
  `objective` text,
  `appreciation` text,
  `action_plan` text,
  `prescription` text
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_tbl`
--

INSERT INTO `problem_tbl` (`id_problem`, `last_update_date`, `id_patient`, `id_member`, `order_number`, `opening_date`, `closing_date`, `meeting_place`, `wording`, `subjective`, `objective`, `appreciation`, `action_plan`, `prescription`) VALUES
(1, '2015-12-29', 1, 3, 1, '2015-12-29', NULL, 'Benh+vien', 'Bi mac benh ngoai da', 'Da+lieu', 'khong+biet', 'Danh+gia', 'ke+hoach%3A+boi+thuoc', 'Toa+thuoc%3A+kem+duong+da');

-- --------------------------------------------------------

--
-- Table structure for table `record_log_tbl`
--

CREATE TABLE IF NOT EXISTS `record_log_tbl` (
  `id_user` int(10) unsigned NOT NULL,
  `login` varchar(20) NOT NULL,
  `access_date` datetime NOT NULL,
  `table_name` varchar(25) NOT NULL,
  `operation` varchar(10) NOT NULL,
  `affected_row` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_log_tbl`
--

INSERT INTO `record_log_tbl` (`id_user`, `login`, `access_date`, `table_name`, `operation`, `affected_row`) VALUES
(2, 'admin', '2015-12-30 02:28:02', '', 'INSERT', 'a%3A21%3A%7Bs%3A10%3A%22id_patient%22%3Bs%3A1%3A%221%22%3Bs%3A3%3A%22nif%22%3Bs%3A3%3A%22001%22%3Bs%3A10%3A%22first_name%22%3Bs%3A4%3A%22Khoi%22%3Bs%3A8%3A%22surname1%22%3Bs%3A6%3A%22Nguyen%22%3Bs%3A8%3A%22surname2%22%3Bs%3A3%3A%22Duc%22%3Bs%3A7%3A%22address%22%3Bs%3A2%3A%22HN%22%3Bs%3A13%3A%22phone_contact%22%3Bs%3A4%3A%220123%22%3Bs%3A3%3A%22sex%22%3Bs%3A1%3A%22V%22%3Bs%3A4%3A%22race%22%3Bs%3A15%3A%22dont%2Bunderstand%22%3Bs%3A10%3A%22birth_date%22%3Bs%3A10%3A%221994-01-31%22%3Bs%3A11%3A%22birth_place%22%3Bs%3A2%3A%22HN%22%3Bs%3A12%3A%22decease_date%22%3Bs%3A10%3A%222000-12-12%22%3Bs%3A3%3A%22nts%22%3Bs%3A7%3A%221242145%22%3Bs%3A3%3A%22nss%22%3Bs%3A5%3A%2214561%22%3Bs%3A16%3A%22family_situation%22%3Bs%3A4%3A%22fghg%22%3Bs%3A16%3A%22labour_situation%22%3Bs%3A5%3A%22jgjhg%22%3Bs%3A9%3A%22education%22%3Bs%3A7%3A%22hjhgjgh%22%3Bs%3A17%3A%22insurance_company%22%3Bs%3A5%3A%22jgfht%22%3Bs%3A9%3A%22id_member%22%3Bs%3A1%3A%223%22%3Bs%3A17%3A%22collegiate_number%22%3Bs%3A9%3A%22342343445%22%3Bs%3A3%3A%22age%22%3Bs%3A1%3A%226%22%3B%7D'),
(2, 'admin', '2015-12-30 02:32:55', '', 'INSERT', 'a%3A15%3A%7Bs%3A10%3A%22id_problem%22%3Bs%3A1%3A%221%22%3Bs%3A16%3A%22last_update_date%22%3Bs%3A10%3A%222015-12-29%22%3Bs%3A10%3A%22id_patient%22%3Bs%3A1%3A%221%22%3Bs%3A9%3A%22id_member%22%3Bs%3A1%3A%223%22%3Bs%3A12%3A%22order_number%22%3Bs%3A1%3A%221%22%3Bs%3A12%3A%22opening_date%22%3Bs%3A10%3A%222015-12-29%22%3Bs%3A12%3A%22closing_date%22%3BN%3Bs%3A13%3A%22meeting_place%22%3Bs%3A9%3A%22Benh%2Bvien%22%3Bs%3A7%3A%22wording%22%3Bs%3A20%3A%22Bi+mac+benh+ngoai+da%22%3Bs%3A10%3A%22subjective%22%3Bs%3A7%3A%22Da%2Blieu%22%3Bs%3A9%3A%22objective%22%3Bs%3A10%3A%22khong%2Bbiet%22%3Bs%3A12%3A%22appreciation%22%3Bs%3A8%3A%22Danh%2Bgia%22%3Bs%3A11%3A%22action_plan%22%3Bs%3A21%3A%22ke%2Bhoach%253A%2Bboi%2Bthuoc%22%3Bs%3A12%3A%22prescription%22%3Bs%3A25%3A%22Toa%2Bthuoc%253A%2Bkem%2Bduong%2Bda%22%3Bs%3A17%3A%22collegiate_number%22%3Bs%3A9%3A%22342343445%22%3B%7D');

-- --------------------------------------------------------

--
-- Table structure for table `relative_tbl`
--

CREATE TABLE IF NOT EXISTS `relative_tbl` (
  `id_patient` int(10) unsigned NOT NULL,
  `id_relative` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session_tbl`
--

CREATE TABLE IF NOT EXISTS `session_tbl` (
  `login` varchar(20) NOT NULL,
  `last_updated_date` datetime NOT NULL,
  `token` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_tbl`
--

INSERT INTO `session_tbl` (`login`, `last_updated_date`, `token`) VALUES
('sysop', '2015-12-30 21:57:12', 8666),
('sysop', '2015-12-30 21:45:37', -864),
('sysop', '2015-12-30 21:44:19', -4257),
('admin', '2015-12-30 18:45:14', -3912),
('admin2', '2015-12-31 08:56:57', 238);

-- --------------------------------------------------------

--
-- Table structure for table `setting_tbl`
--

CREATE TABLE IF NOT EXISTS `setting_tbl` (
  `clinic_name` varchar(128) DEFAULT NULL,
  `clinic_hours` varchar(128) DEFAULT NULL,
  `clinic_address` text,
  `clinic_phone` varchar(40) DEFAULT NULL,
  `clinic_url` text,
  `session_timeout` smallint(5) unsigned NOT NULL DEFAULT '20',
  `items_per_page` tinyint(3) unsigned NOT NULL DEFAULT '10',
  `version` varchar(14) NOT NULL,
  `language` varchar(10) NOT NULL DEFAULT 'en',
  `id_theme` smallint(5) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 MIN_ROWS=1 MAX_ROWS=1;

--
-- Dumping data for table `setting_tbl`
--

INSERT INTO `setting_tbl` (`clinic_name`, `clinic_hours`, `clinic_address`, `clinic_phone`, `clinic_url`, `session_timeout`, `items_per_page`, `version`, `language`, `id_theme`) VALUES
('My+Clinic', 'L-V+9am-5pm', 'Sesame+Street', '0984242920', 'http%3A%2F%2Fwww.example.com', 30, 10, '0.8.20130912', 'en', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE IF NOT EXISTS `staff_tbl` (
`id_member` int(10) unsigned NOT NULL,
  `member_type` enum('Administrative','Doctor') NOT NULL DEFAULT 'Administrative',
  `collegiate_number` varchar(20) DEFAULT NULL,
  `nif` varchar(20) DEFAULT NULL,
  `first_name` varchar(25) NOT NULL,
  `surname1` varchar(30) NOT NULL,
  `surname2` varchar(30) DEFAULT '',
  `address` text,
  `phone_contact` text,
  `id_user` int(10) unsigned DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`id_member`, `member_type`, `collegiate_number`, `nif`, `first_name`, `surname1`, `surname2`, `address`, `phone_contact`, `id_user`, `login`) VALUES
(4, 'Administrative', NULL, '123456785', 'Benito', 'Camelas', 'UnmontÃ³n', 'Camino de las Torres 777', '555-45 45 45', NULL, 'phi'),
(3, 'Doctor', '342343445', '34567123', 'Carmelo', 'CotÃ³n', 'CotÃ³n', 'Plaza EspaÃ±a 222', '555-23 24 23', 4, 'dung'),
(2, 'Administrative', NULL, 'no importa', 'John', 'Doe', 'Smith', 'Hanoi', '0984242920', 2, 'admin2'),
(1, 'Administrative', NULL, 'no importa', 'Admin', 'Admin', 'Admin', 'No importa', 'No importa', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `theme_tbl`
--

CREATE TABLE IF NOT EXISTS `theme_tbl` (
`id_theme` smallint(5) unsigned NOT NULL,
  `theme_name` varchar(50) NOT NULL,
  `css_file` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme_tbl`
--

INSERT INTO `theme_tbl` (`id_theme`, `theme_name`, `css_file`) VALUES
(1, 'OpenClinic', 'openclinic.css');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
`id_user` int(10) unsigned NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `actived` enum('Y','N') DEFAULT NULL,
  `id_theme` smallint(5) unsigned NOT NULL DEFAULT '1',
  `id_profile` smallint(5) unsigned NOT NULL DEFAULT '3'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id_user`, `pwd`, `email`, `actived`, `id_theme`, `id_profile`) VALUES
(2, '21232f297a57a5a743894a0e4a801fc3', NULL, 'Y', 1, 1),
(1, '21232f297a57a5a743894a0e4a801fc3', 'phamphi1994@gmail.com', 'Y', 1, 1),
(4, '25d55ad283aa400af464c76d713c07ad', 'dungnt%40gmail.com', 'Y', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_log_tbl`
--
ALTER TABLE `access_log_tbl`
 ADD PRIMARY KEY (`id_user`,`access_date`);

--
-- Indexes for table `connection_problem_tbl`
--
ALTER TABLE `connection_problem_tbl`
 ADD PRIMARY KEY (`id_problem`,`id_connection`), ADD KEY `id_connection` (`id_connection`);

--
-- Indexes for table `history_tbl`
--
ALTER TABLE `history_tbl`
 ADD PRIMARY KEY (`id_patient`);

--
-- Indexes for table `medical_test_tbl`
--
ALTER TABLE `medical_test_tbl`
 ADD PRIMARY KEY (`id_test`), ADD KEY `id_problem` (`id_problem`);

--
-- Indexes for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
 ADD PRIMARY KEY (`id_patient`), ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `problem_tbl`
--
ALTER TABLE `problem_tbl`
 ADD PRIMARY KEY (`id_problem`), ADD KEY `id_patient` (`id_patient`), ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `record_log_tbl`
--
ALTER TABLE `record_log_tbl`
 ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `relative_tbl`
--
ALTER TABLE `relative_tbl`
 ADD PRIMARY KEY (`id_patient`,`id_relative`), ADD KEY `id_relative` (`id_relative`);

--
-- Indexes for table `setting_tbl`
--
ALTER TABLE `setting_tbl`
 ADD KEY `id_theme` (`id_theme`);

--
-- Indexes for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
 ADD PRIMARY KEY (`id_member`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `theme_tbl`
--
ALTER TABLE `theme_tbl`
 ADD PRIMARY KEY (`id_theme`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_theme` (`id_theme`), ADD KEY `id_profile` (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_test_tbl`
--
ALTER TABLE `medical_test_tbl`
MODIFY `id_test` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
MODIFY `id_patient` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `problem_tbl`
--
ALTER TABLE `problem_tbl`
MODIFY `id_problem` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
MODIFY `id_member` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `theme_tbl`
--
ALTER TABLE `theme_tbl`
MODIFY `id_theme` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
MODIFY `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
