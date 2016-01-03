-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2016 at 03:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `benhnhan`
--

CREATE TABLE IF NOT EXISTS `benhnhan` (
`id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sdt` text NOT NULL,
  `ngaysinh` text NOT NULL,
  `tenbenh` varchar(50) NOT NULL,
  `phong` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benhnhan`
--

INSERT INTO `benhnhan` (`id`, `ten`, `diachi`, `sdt`, `ngaysinh`, `tenbenh`, `phong`, `created_at`, `updated_at`) VALUES
(1, 'Trung', 'hn', '12345678', '0000-00-00', 'Đau đầu', '108', '2015-11-24 21:25:39', '2015-11-24 21:25:39'),
(2, 'Quang', 'Xuân Thủy', '168425168', '11/7/1994', 'Bệnh ngoài da', '101', '2015-11-24 21:27:13', '2015-11-24 21:27:13'),
(3, 'Khôi', 'Hà Nội', '0123456785', '21/1/1993', 'Đau bụng', '202', '2015-11-24 21:36:13', '2015-11-24 21:36:13'),
(4, 'dfffd', 'ssdfd', 'fdfd', 'fdfdfd', 'fdfd', '123', '2015-11-25 20:52:07', '2015-11-25 20:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE IF NOT EXISTS `cates` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Quan Jean Dep', 'quan-jean-dep', 2, 0, 'Quan tai genviet', 'Day la cua hang quan jean dep nhat vietnam', '2015-10-17 09:12:25', '2015-10-21 10:31:39'),
(4, 'a1', 'a1', 3, 0, 'Quan tai genviet', 'dsas', '2015-10-17 13:42:13', '2015-10-17 13:42:13'),
(8, 'Sách', 'Sách', 10, 0, 'Giáo trình', 'Giáo trình csdl', '2015-10-17 14:06:55', '2015-10-17 14:06:55'),
(9, 'Giày', 'Giày', 1, 0, 'giày nam', 'giày nam cao cấp', '2015-10-17 14:08:16', '2015-10-17 14:08:16'),
(10, 'Áo thun', 'Áo thun', 5, 0, 'Aothun', 'áo thun cao cấp', '2015-10-17 14:18:27', '2015-10-17 14:18:27'),
(11, 'Áo phông', 'ao-phong', 9, 0, 'áo phông nam', 'áo đẹp', '2015-10-17 14:42:32', '2015-10-17 14:42:32'),
(14, 'Ao phong dai tay', 'ao-phong-dai-tay', 10, 11, 'ao dai tay', 'ao phong dai tay nam', '2015-10-17 15:33:21', '2015-10-21 10:34:06'),
(16, 'Genviet', 'genviet', 10, 1, 'gen', 'quan mua tai genviet', '2015-10-21 06:32:51', '2015-10-21 06:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersappointments`
--

CREATE TABLE IF NOT EXISTS `ck_usersappointments` (
`appointment_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `title` varchar(150) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `visit_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersappointments`
--

INSERT INTO `ck_usersappointments` (`appointment_id`, `appointment_date`, `end_date`, `start_time`, `end_time`, `title`, `patient_id`, `userid`, `status`, `visit_id`) VALUES
(1, '2015-12-03', NULL, '07:07:00', '07:37:00', 'Khoi Duc Nguyen', 2, 2, 'Appointments', 0),
(2, '2015-12-04', NULL, '09:30:00', '10:00:00', 'Phi Duc Pham Van', 3, 3, 'Appointments', 0),
(3, '2015-12-08', NULL, '02:42:00', '03:12:00', 'Khoi Duc Nguyen', 4, 2, 'Appointments', 0),
(4, '2015-12-08', NULL, '02:42:00', '03:12:00', 'Khoi Duc Nguyen', 4, 2, 'Waiting', 0),
(5, '2015-10-08', NULL, '02:42:00', '03:12:00', 'Khoi DucNguyen', 4, 2, 'Consultation', 0),
(6, '2015-12-08', NULL, '04:00:00', '04:30:00', 'Phi Phi Pham Van0984242920', 5, 3, 'Appointments', 0),
(7, '2015-12-09', NULL, '01:30:00', '09:00:00', 'Phi2 DucPham Van', 6, 2, 'Appointments', 0),
(8, '2015-12-22', NULL, '05:47:00', '06:17:00', 'Phi3 Phi Pham Van 0984242920', 7, 2, 'Appointments', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersappointment_log`
--

CREATE TABLE IF NOT EXISTS `ck_usersappointment_log` (
  `appointment_id` int(11) NOT NULL,
  `change_date_time` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `old_status` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersappointment_log`
--

INSERT INTO `ck_usersappointment_log` (`appointment_id`, `change_date_time`, `start_time`, `from_time`, `to_time`, `old_status`, `status`, `name`) VALUES
(1, '02/12/2015 07:09:33', '07:07:00', '07:09:33', '00:00:00', ' ', 'Appointment', 'Phi'),
(2, '02/12/2015 07:12:32', '09:30:00', '07:12:32', '00:00:00', ' ', 'Appointment', 'Phi');

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersbill`
--

CREATE TABLE IF NOT EXISTS `ck_usersbill` (
`bill_id` int(11) NOT NULL,
  `bill_date` date NOT NULL,
  `patient_id` int(11) NOT NULL,
  `visit_id` int(11) NOT NULL,
  `total_amount` decimal(10,0) NOT NULL,
  `due_amount` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersbill_detail`
--

CREATE TABLE IF NOT EXISTS `ck_usersbill_detail` (
`bill_detail_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `bill_id` int(11) NOT NULL,
  `particular` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `mrp` decimal(10,2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersclinic`
--

CREATE TABLE IF NOT EXISTS `ck_usersclinic` (
  `clinic_id` int(11) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `time_interval` decimal(11,2) NOT NULL DEFAULT '0.50',
  `clinic_name` varchar(50) DEFAULT NULL,
  `tag_line` varchar(100) DEFAULT NULL,
  `clinic_address` varchar(500) DEFAULT NULL,
  `landline` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `google_plus` varchar(50) DEFAULT NULL,
  `next_followup_days` int(11) NOT NULL DEFAULT '15',
  `clinic_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersclinic`
--

INSERT INTO `ck_usersclinic` (`clinic_id`, `start_time`, `end_time`, `time_interval`, `clinic_name`, `tag_line`, `clinic_address`, `landline`, `mobile`, `email`, `facebook`, `twitter`, `google_plus`, `next_followup_days`, `clinic_logo`) VALUES
(1, '09:00', '18:00', '0.50', 'Chikitsa', 'Patient Management Software', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ck_userscontacts`
--

CREATE TABLE IF NOT EXISTS `ck_userscontacts` (
`contact_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact_image` varchar(255) NOT NULL DEFAULT 'images/Profile.png',
  `type` varchar(50) NOT NULL,
  `address_line_1` varchar(150) NOT NULL,
  `address_line_2` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_userscontacts`
--

INSERT INTO `ck_userscontacts` (`contact_id`, `first_name`, `middle_name`, `last_name`, `display_name`, `phone_number`, `email`, `contact_image`, `type`, `address_line_1`, `address_line_2`, `city`, `state`, `postal_code`, `country`) VALUES
(1, 'Phi', NULL, 'Pham Van', '', '', '', 'images/Profile.png', '', '', '', '', '', '', ''),
(2, 'Khoi', 'Duc', 'Nguyen', '', '', '', 'images/Profile.png', '', '', '', '', '', '', ''),
(3, 'Phi', 'Duc', 'Pham Van', '', '', '', 'images/Profile.png', '', '', '', '', '', '', ''),
(4, 'Khoi', 'Duc', 'Nguyen', '', '', '', 'images/Profile.png', '', '', '', '', '', '', ''),
(5, 'Phi', 'Phi Pham Van', '0984242920', '', '', '', 'images/Profile.png', '', '', '', '', '', '', ''),
(6, 'Phi2', 'Duc', 'Pham Van', '', '', '', 'images/Profile.png', '', '', '', '', '', '', ''),
(7, 'Phi3', 'Phi Pham Van', '0984242920', '', '', '', 'images/Profile.png', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ck_userscontact_details`
--

CREATE TABLE IF NOT EXISTS `ck_userscontact_details` (
`contact_detail_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `detail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersdata`
--

CREATE TABLE IF NOT EXISTS `ck_usersdata` (
`ck_data_id` int(11) NOT NULL,
  `ck_key` varchar(50) NOT NULL DEFAULT '',
  `ck_value` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersdata`
--

INSERT INTO `ck_usersdata` (`ck_data_id`, `ck_key`, `ck_value`) VALUES
(1, 'default_language', 'english'),
(2, 'default_timezone', 'UTC'),
(3, 'default_timeformate', 'h:i A'),
(4, 'default_dateformate', 'd-m-Y');

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersfollowup`
--

CREATE TABLE IF NOT EXISTS `ck_usersfollowup` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `followup_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersfollowup`
--

INSERT INTO `ck_usersfollowup` (`id`, `userid`, `patient_id`, `followup_date`) VALUES
(1, 2, 3, '2015-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersinvoice`
--

CREATE TABLE IF NOT EXISTS `ck_usersinvoice` (
`invoice_id` int(11) NOT NULL,
  `static_prefix` varchar(10) NOT NULL,
  `left_pad` int(11) NOT NULL,
  `next_id` int(11) NOT NULL,
  `currency_symbol` varchar(10) NOT NULL,
  `currency_postfix` char(10) NOT NULL DEFAULT '/-'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersinvoice`
--

INSERT INTO `ck_usersinvoice` (`invoice_id`, `static_prefix`, `left_pad`, `next_id`, `currency_symbol`, `currency_postfix`) VALUES
(1, '', 3, 1, 'Rs.', '');

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersmenu_access`
--

CREATE TABLE IF NOT EXISTS `ck_usersmenu_access` (
`id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `allow` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersmenu_access`
--

INSERT INTO `ck_usersmenu_access` (`id`, `menu_name`, `category_name`, `allow`) VALUES
(1, 'patients', 'Doctor', 1),
(2, 'all_patients', 'Doctor', 1),
(3, 'new_inquiry', 'Doctor', 1),
(4, 'appointments', 'Doctor', 1),
(5, 'reports', 'Doctor', 1),
(6, 'patients', 'Receptionist', 1),
(7, 'all_patients', 'Receptionist', 1),
(8, 'new_inquiry', 'Receptionist', 1),
(9, 'appointments', 'Receptionist', 1),
(10, 'appointment report', 'Doctor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersmodules`
--

CREATE TABLE IF NOT EXISTS `ck_usersmodules` (
`module_id` int(11) NOT NULL,
  `module_name` varchar(50) NOT NULL,
  `module_display_name` varchar(50) NOT NULL,
  `module_description` varchar(150) NOT NULL,
  `module_status` int(1) NOT NULL,
  `module_version` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersnavigation_menu`
--

CREATE TABLE IF NOT EXISTS `ck_usersnavigation_menu` (
`id` int(11) NOT NULL,
  `menu_name` varchar(250) DEFAULT NULL,
  `parent_name` varchar(250) NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_url` varchar(500) DEFAULT NULL,
  `menu_icon` varchar(100) DEFAULT NULL,
  `menu_text` varchar(200) DEFAULT NULL,
  `required_module` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersnavigation_menu`
--

INSERT INTO `ck_usersnavigation_menu` (`id`, `menu_name`, `parent_name`, `menu_order`, `menu_url`, `menu_icon`, `menu_text`, `required_module`) VALUES
(1, 'patients', '', 100, 'patient/index', 'fa-users', 'Patients', ''),
(2, 'all_patients', 'patients', 0, 'patient/index', NULL, 'All Patients', NULL),
(3, 'new_inquiry', 'patients', 200, 'patient/new_inquiry_report', NULL, 'New Inquiries', NULL),
(4, 'appointments', '', 200, 'appointment/index', 'fa-calendar', 'Appointments', ''),
(5, 'reports', '', 400, '#', 'fa-line-chart', 'Reports', ''),
(6, 'administration', '', 500, '#', 'fa-cog', 'Administration', ''),
(7, 'modules', '', 600, 'module/index', 'fa-shopping-cart', 'Modules', ''),
(8, 'appointment report', 'reports', 100, 'appointment/appointment_report', '', 'Appointment Report', ''),
(9, 'bill report', 'reports', 300, 'patient/bill_detail_report', '', 'Bill Detail Report', ''),
(10, 'clinic detail', 'administration', 100, 'settings/clinic', '', 'Clinic Detail', ''),
(11, 'invoice setting', 'administration', 200, 'settings/invoice', '', 'Invoice', ''),
(12, 'users', 'administration', 300, 'admin/users', '', 'Users', ''),
(13, 'setting', 'administration', 500, 'settings/change_settings', '', 'Setting', ''),
(14, 'payment', '', 300, 'payment/index', 'fa-money', 'Payments', ''),
(15, 'backup', 'administration', 600, 'settings/backup', NULL, 'Backup', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ck_userspatient`
--

CREATE TABLE IF NOT EXISTS `ck_userspatient` (
`patient_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `patient_since` date NOT NULL,
  `display_id` varchar(12) NOT NULL,
  `followup_date` date NOT NULL,
  `reference_by` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_userspatient`
--

INSERT INTO `ck_userspatient` (`patient_id`, `contact_id`, `patient_since`, `display_id`, `followup_date`, `reference_by`, `gender`, `dob`) VALUES
(1, 1, '2015-12-02', 'P00001', '0000-00-00', '', NULL, NULL),
(2, 2, '2015-12-02', 'N00002', '0000-00-00', 'Dung', NULL, NULL),
(3, 3, '2015-12-02', 'P00003', '0000-00-00', 'Dung', NULL, NULL),
(5, 5, '2015-12-08', '000005', '2015-12-10', 'Dung', NULL, NULL),
(6, 6, '2015-12-09', 'P00006', '0000-00-00', 'Dung', NULL, NULL),
(7, 7, '2015-12-22', '000007', '0000-00-00', 'Dung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ck_userspayment`
--

CREATE TABLE IF NOT EXISTS `ck_userspayment` (
`payment_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_mode` varchar(50) NOT NULL,
  `pay_amount` decimal(10,0) NOT NULL,
  `cheque_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ck_userspayment_transaction`
--

CREATE TABLE IF NOT EXISTS `ck_userspayment_transaction` (
`transaction_id` int(11) NOT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `patient_id` int(11) NOT NULL,
  `visit_id` int(11) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `payment_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersreceipt_template`
--

CREATE TABLE IF NOT EXISTS `ck_usersreceipt_template` (
`template_id` int(11) NOT NULL,
  `template` text NOT NULL,
  `is_default` int(1) NOT NULL,
  `template_name` varchar(25) NOT NULL,
  `type` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersreceipt_template`
--

INSERT INTO `ck_usersreceipt_template` (`template_id`, `template`, `is_default`, `template_name`, `type`) VALUES
(1, '<h1 style="text-align:center;">[clinic_name]</h1><h2 style="text-align:center;">[tag_line]</h2><p style="text-align:center;">[clinic_address]</p><span class="contact">	<p style="text-align: center;">		<b style="line-height: 1.42857143;">Landline : </b><span style="line-height: 1.42857143;">[landline]</span>  		<b style="line-height: 1.42857143;">Mobile : </b><span style="line-height: 1.42857143;">[mobile]</span>  		<b style="line-height: 1.42857143;">Email : </b><span style="text-align: center;"> [email]</span>	</p></span><hr id="null"><h3 style="text-align: center;"><u style="text-align: center;">RECEIPT</u></h3><span style="text-align: left;"><b>Date : </b>[bill_date]</span><span style="float: right;"><b>Receipt Number :</b> [bill_id]</span><p style="text-align: left;"><b style="text-align: left;">Patient Name: </b><span style="text-align: left;">[patient_name]<br></span></p><hr id="null" style="text-align: left;">Received fees for Professional services and other charges of our:<p><br></p><table style="width: 100%;margin-top: 25px;margin-bottom: 25px;border-collapse: collapse;border:1px solid black;">	<thead>		<tr>			<td style="width: 400px;text-align: left;padding:5px;border:1px solid black;">				<b style="width: 400px;text-align: left;">Item</b>			</td>			<td style="padding:5px;border:1px solid black;">				<b>Quantity</b>			</td>			<td style="width: 100px;text-align:right;padding:5px;border:1px solid black;">				<b>M.R.P.</b>			</td>			<td style="width: 100px;text-align:right;padding:5px;border:1px solid black;">				<b>Amount</b>			</td>		</tr>	</thead>	<tbody>		[col:particular|quantity|mrp|amount]		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Previous Due</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[previous_due]</strong></td>		</tr>		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Discount</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[discount]</strong></td>		</tr>		<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Total</td>			<td style="text-align:right;padding:5px;border:1px solid black;"><strong>[total]</strong></td>		</tr>				<tr>			<td colspan="3" style="padding:5px;border:1px solid black;">Paid Amount</td>			<td style="text-align:right;padding:5px;border:1px solid black;">[paid_amount]</td>		</tr>	</tbody></table>Received with Thanks,<p>For [clinic_name]</p><p><br></p><p><br></p><p>Signature</p>', 1, 'Main', 'bill');

-- --------------------------------------------------------

--
-- Table structure for table `ck_userstodos`
--

CREATE TABLE IF NOT EXISTS `ck_userstodos` (
`id_num` int(11) NOT NULL,
  `userid` int(11) DEFAULT '0',
  `todo` varchar(250) DEFAULT NULL,
  `done` int(11) DEFAULT '0',
  `add_date` datetime DEFAULT NULL,
  `done_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersusers`
--

CREATE TABLE IF NOT EXISTS `ck_usersusers` (
`userid` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` int(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ck_usersusers`
--

INSERT INTO `ck_usersusers` (`userid`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`, `is_active`, `name`) VALUES
(1, 'phipv', 'MTIzNDU2', 'phipv@gmail.com', 'Administrator', 'QWT3tsEc4NLXfuNh6wgURKhH6a1p8i8pdvCUC5FeHutX8Tr9aylSpuWaE2go', '2015-10-29 07:42:55', '2015-11-26 01:41:34', 1, 'Phi'),
(2, 'Pham Van Phi', 'aahyrhs', 'p@gmail.com', 'Doctor', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Phi2'),
(3, 'dungnt', 'MTIzNDU2', '', 'Doctor', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Dungnt'),
(4, 'admin', '$2a$10$52lL3ILzuVWhqT5D/q3DOe.vKv.36yrQNKBM651A0AJfqz0caOFt.', 'admin@gmail.com', 'Doctor', NULL, '2015-11-30 17:00:00', '2015-11-30 17:00:00', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersusers2`
--

CREATE TABLE IF NOT EXISTS `ck_usersusers2` (
`userid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(16) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(15) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersusers2`
--

INSERT INTO `ck_usersusers2` (`userid`, `name`, `username`, `password`, `level`, `is_active`) VALUES
(1, 'Administrator', 'admin', 'YWRtaW4=', 'Administrator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersuser_categories`
--

CREATE TABLE IF NOT EXISTS `ck_usersuser_categories` (
`id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersuser_categories`
--

INSERT INTO `ck_usersuser_categories` (`id`, `category_name`) VALUES
(1, 'Administrator'),
(2, 'Doctor'),
(3, 'Receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `ck_usersversion`
--

CREATE TABLE IF NOT EXISTS `ck_usersversion` (
`id` int(11) NOT NULL,
  `current_version` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ck_usersversion`
--

INSERT INTO `ck_usersversion` (`id`, `current_version`) VALUES
(1, '0.2.4');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ck_usersview_bill`
--
CREATE TABLE IF NOT EXISTS `ck_usersview_bill` (
`bill_id` int(11)
,`bill_date` date
,`visit_id` int(11)
,`doctor_name` varchar(255)
,`userid` int(11)
,`patient_id` int(11)
,`display_id` varchar(12)
,`first_name` varchar(50)
,`middle_name` varchar(50)
,`last_name` varchar(50)
,`total_amount` decimal(10,0)
,`due_amount` decimal(11,2)
,`pay_amount` decimal(10,0)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ck_usersview_bill_detail_report`
--
CREATE TABLE IF NOT EXISTS `ck_usersview_bill_detail_report` (
`bill_id` int(11)
,`bill_date` date
,`visit_id` int(11)
,`particular` varchar(50)
,`amount` decimal(10,2)
,`userid` int(11)
,`patient_name` varchar(152)
,`display_id` varchar(12)
,`type` varchar(25)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ck_usersview_contact_email`
--
CREATE TABLE IF NOT EXISTS `ck_usersview_contact_email` (
`contact_id` int(11)
,`email` varchar(150)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ck_usersview_email`
--
CREATE TABLE IF NOT EXISTS `ck_usersview_email` (
`contact_id` int(11)
,`emails` text
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ck_usersview_patient`
--
CREATE TABLE IF NOT EXISTS `ck_usersview_patient` (
`patient_id` int(11)
,`patient_since` date
,`display_id` varchar(12)
,`gender` varchar(10)
,`dob` date
,`reference_by` varchar(255)
,`followup_date` date
,`display_name` varchar(255)
,`contact_id` int(11)
,`first_name` varchar(50)
,`middle_name` varchar(50)
,`last_name` varchar(50)
,`phone_number` varchar(15)
,`email` varchar(150)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ck_usersview_payment`
--
CREATE TABLE IF NOT EXISTS `ck_usersview_payment` (
`payment_id` int(11)
,`bill_id` int(11)
,`pay_date` date
,`pay_mode` varchar(50)
,`cheque_no` varchar(50)
,`pay_amount` decimal(10,0)
,`bill_date` date
,`patient_id` int(11)
,`display_id` varchar(12)
,`first_name` varchar(50)
,`middle_name` varchar(50)
,`last_name` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ck_usersview_report`
--
CREATE TABLE IF NOT EXISTS `ck_usersview_report` (
`appointment_id` int(11)
,`patient_id` int(11)
,`patient_name` varchar(152)
,`userid` int(11)
,`appointment_date` date
,`appointment_time` time
,`waiting_in` time
,`waiting_duration` double(17,0)
,`consultation_in` time
,`consultation_out` time
,`consultation_duration` double(17,0)
,`waiting_out` time
,`collection_amount` decimal(10,0)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ck_usersview_visit`
--
CREATE TABLE IF NOT EXISTS `ck_usersview_visit` (
`visit_id` int(11)
,`visit_date` varchar(60)
,`visit_time` varchar(50)
,`type` varchar(50)
,`notes` text
,`userid` int(11)
,`name` varchar(255)
,`patient_id` int(11)
,`bill_id` int(11)
,`total_amount` decimal(10,0)
,`due_amount` decimal(11,2)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ck_usersview_visit_treatments`
--
CREATE TABLE IF NOT EXISTS `ck_usersview_visit_treatments` (
`visit_id` int(11)
,`particular` varchar(50)
,`type` varchar(25)
);
-- --------------------------------------------------------

--
-- Table structure for table `ck_usersvisit`
--

CREATE TABLE IF NOT EXISTS `ck_usersvisit` (
`visit_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `notes` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `visit_date` varchar(60) NOT NULL,
  `visit_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_16_172044_create_cates_table', 1),
('2015_10_16_172717_create_products_table', 2),
('2015_10_16_173723_create_product_images_table', 3),
('2015_12_05_022600_update_products_table', 4),
('2015_12_05_023356_articles', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
`id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chuandoan`
--

CREATE TABLE IF NOT EXISTS `tbl_chuandoan` (
`id` tinyint(4) NOT NULL,
  `tenbenh` varchar(50) NOT NULL,
  `trieuchung` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_chuandoan`
--

INSERT INTO `tbl_chuandoan` (`id`, `tenbenh`, `trieuchung`) VALUES
(1, 'Đau đầu', 'đau đầu, chóng mặt, mệt trong người'),
(2, 'Chân tay miệng', 'Sốt, nhức đầu, ói mửa, khó chịu,đau họng, đau rát ở răng và miệng, biếng ăn, tiêu chảy'),
(3, 'Đau dạ dày', 'Nôn, buồn nôn, có cảm giác cồn cào,ợ hoặc chướng bụng, cảm giác đầy bụng sau khi ăn'),
(4, 'Alzheimer ', 'mất trí nhớ, hay lãng quên, lẫn lộn các đồ vật, rối loạn nhận thức,hoang tưởng, yếu cơ, run và hay bị chuột rút');

-- --------------------------------------------------------

--
-- Structure for view `ck_usersview_bill`
--
DROP TABLE IF EXISTS `ck_usersview_bill`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ck_usersview_bill` AS select `bill`.`bill_id` AS `bill_id`,`bill`.`bill_date` AS `bill_date`,`bill`.`visit_id` AS `visit_id`,`users`.`name` AS `doctor_name`,`visit`.`userid` AS `userid`,`patient`.`patient_id` AS `patient_id`,`patient`.`display_id` AS `display_id`,`contacts`.`first_name` AS `first_name`,`contacts`.`middle_name` AS `middle_name`,`contacts`.`last_name` AS `last_name`,`bill`.`total_amount` AS `total_amount`,`bill`.`due_amount` AS `due_amount`,`payment`.`pay_amount` AS `pay_amount` from (((((`ck_usersbill` `bill` join `ck_usersvisit` `visit` on((`bill`.`visit_id` = `visit`.`visit_id`))) join `ck_usersusers` `users` on((`visit`.`userid` = `users`.`userid`))) join `ck_userspatient` `patient` on((`bill`.`patient_id` = `patient`.`patient_id`))) join `ck_userspayment` `payment` on((`payment`.`bill_id` = `bill`.`bill_id`))) join `ck_userscontacts` `contacts` on((`contacts`.`contact_id` = `patient`.`contact_id`)));

-- --------------------------------------------------------

--
-- Structure for view `ck_usersview_bill_detail_report`
--
DROP TABLE IF EXISTS `ck_usersview_bill_detail_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ck_usersview_bill_detail_report` AS select `bill`.`bill_id` AS `bill_id`,`bill`.`bill_date` AS `bill_date`,`bill`.`visit_id` AS `visit_id`,`bill_detail`.`particular` AS `particular`,`bill_detail`.`amount` AS `amount`,`visit`.`userid` AS `userid`,concat(`view_patient`.`first_name`,' ',`view_patient`.`middle_name`,' ',`view_patient`.`last_name`) AS `patient_name`,`view_patient`.`display_id` AS `display_id`,`bill_detail`.`type` AS `type` from (((`ck_usersbill` `bill` left join `ck_usersbill_detail` `bill_detail` on((`bill_detail`.`bill_id` = `bill`.`bill_id`))) left join `ck_usersvisit` `visit` on((`visit`.`visit_id` = `bill`.`visit_id`))) left join `ck_usersview_patient` `view_patient` on((`view_patient`.`patient_id` = `bill`.`patient_id`)));

-- --------------------------------------------------------

--
-- Structure for view `ck_usersview_contact_email`
--
DROP TABLE IF EXISTS `ck_usersview_contact_email`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ck_usersview_contact_email` AS select `ck_userscontact_details`.`contact_id` AS `contact_id`,`ck_userscontact_details`.`detail` AS `email` from `ck_userscontact_details` where (`ck_userscontact_details`.`type` = 'email');

-- --------------------------------------------------------

--
-- Structure for view `ck_usersview_email`
--
DROP TABLE IF EXISTS `ck_usersview_email`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ck_usersview_email` AS select `ck_userscontact_details`.`contact_id` AS `contact_id`,group_concat(`ck_userscontact_details`.`detail` separator ',') AS `emails` from `ck_userscontact_details` where (`ck_userscontact_details`.`type` = 'email') group by `ck_userscontact_details`.`contact_id`;

-- --------------------------------------------------------

--
-- Structure for view `ck_usersview_patient`
--
DROP TABLE IF EXISTS `ck_usersview_patient`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ck_usersview_patient` AS select `patient`.`patient_id` AS `patient_id`,`patient`.`patient_since` AS `patient_since`,`patient`.`display_id` AS `display_id`,`patient`.`gender` AS `gender`,`patient`.`dob` AS `dob`,`patient`.`reference_by` AS `reference_by`,`patient`.`followup_date` AS `followup_date`,`contacts`.`display_name` AS `display_name`,`contacts`.`contact_id` AS `contact_id`,`contacts`.`first_name` AS `first_name`,`contacts`.`middle_name` AS `middle_name`,`contacts`.`last_name` AS `last_name`,`contacts`.`phone_number` AS `phone_number`,`contacts`.`email` AS `email` from (`ck_userspatient` `patient` left join `ck_userscontacts` `contacts` on((`patient`.`contact_id` = `contacts`.`contact_id`)));

-- --------------------------------------------------------

--
-- Structure for view `ck_usersview_payment`
--
DROP TABLE IF EXISTS `ck_usersview_payment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ck_usersview_payment` AS select `payment`.`payment_id` AS `payment_id`,`payment`.`bill_id` AS `bill_id`,`payment`.`pay_date` AS `pay_date`,`payment`.`pay_mode` AS `pay_mode`,`payment`.`cheque_no` AS `cheque_no`,`payment`.`pay_amount` AS `pay_amount`,`bill`.`bill_date` AS `bill_date`,`bill`.`patient_id` AS `patient_id`,`patient`.`display_id` AS `display_id`,`contacts`.`first_name` AS `first_name`,`contacts`.`middle_name` AS `middle_name`,`contacts`.`last_name` AS `last_name` from (((`ck_userspayment` `payment` join `ck_usersbill` `bill` on((`payment`.`bill_id` = `bill`.`bill_id`))) join `ck_userspatient` `patient` on((`patient`.`patient_id` = `bill`.`patient_id`))) join `ck_userscontacts` `contacts` on((`contacts`.`contact_id` = `patient`.`contact_id`)));

-- --------------------------------------------------------

--
-- Structure for view `ck_usersview_report`
--
DROP TABLE IF EXISTS `ck_usersview_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ck_usersview_report` AS select `appointment`.`appointment_id` AS `appointment_id`,`appointment`.`patient_id` AS `patient_id`,concat(ifnull(`view_patient`.`first_name`,''),' ',ifnull(`view_patient`.`middle_name`,''),' ',ifnull(`view_patient`.`last_name`,'')) AS `patient_name`,`appointment`.`userid` AS `userid`,`appointment`.`appointment_date` AS `appointment_date`,min(`appointment`.`start_time`) AS `appointment_time`,max((case `appointment_log`.`status` when 'Waiting' then `appointment_log`.`from_time` end)) AS `waiting_in`,(max((case `appointment_log`.`status` when 'Consultation' then `appointment_log`.`from_time` end)) - max((case `appointment_log`.`status` when 'Waiting' then `appointment_log`.`from_time` end))) AS `waiting_duration`,max((case `appointment_log`.`status` when 'Consultation' then `appointment_log`.`from_time` end)) AS `consultation_in`,max((case `appointment_log`.`status` when 'Complete' then `appointment_log`.`from_time` end)) AS `consultation_out`,(max((case `appointment_log`.`status` when 'Complete' then `appointment_log`.`from_time` end)) - max((case `appointment_log`.`status` when 'Consultation' then `appointment_log`.`from_time` end))) AS `consultation_duration`,max((case `appointment_log`.`old_status` when 'Consultation' then timediff(`appointment_log`.`to_time`,`appointment_log`.`from_time`) end)) AS `waiting_out`,max(`bill`.`total_amount`) AS `collection_amount` from (((`ck_usersappointments` `appointment` left join `ck_usersview_patient` `view_patient` on((`appointment`.`patient_id` = `view_patient`.`patient_id`))) left join `ck_usersbill` `bill` on((`appointment`.`visit_id` = `bill`.`visit_id`))) left join `ck_usersappointment_log` `appointment_log` on((`appointment`.`appointment_id` = `appointment_log`.`appointment_id`))) group by `appointment`.`appointment_id`,`patient_name`;

-- --------------------------------------------------------

--
-- Structure for view `ck_usersview_visit`
--
DROP TABLE IF EXISTS `ck_usersview_visit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ck_usersview_visit` AS select `visit`.`visit_id` AS `visit_id`,`visit`.`visit_date` AS `visit_date`,`visit`.`visit_time` AS `visit_time`,`visit`.`type` AS `type`,`visit`.`notes` AS `notes`,`visit`.`userid` AS `userid`,`users`.`name` AS `name`,`visit`.`patient_id` AS `patient_id`,`bill`.`bill_id` AS `bill_id`,`bill`.`total_amount` AS `total_amount`,`bill`.`due_amount` AS `due_amount` from ((`ck_usersvisit` `visit` join `ck_usersusers` `users` on((`users`.`userid` = `visit`.`userid`))) join `ck_usersbill` `bill` on((`bill`.`visit_id` = `visit`.`visit_id`))) order by `visit`.`patient_id`,`visit`.`visit_date`,`visit`.`visit_time`;

-- --------------------------------------------------------

--
-- Structure for view `ck_usersview_visit_treatments`
--
DROP TABLE IF EXISTS `ck_usersview_visit_treatments`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ck_usersview_visit_treatments` AS select `visit`.`visit_id` AS `visit_id`,`bill_detail`.`particular` AS `particular`,`bill_detail`.`type` AS `type` from ((`ck_usersvisit` `visit` left join `ck_usersbill` `bill` on((`bill`.`visit_id` = `visit`.`visit_id`))) left join `ck_usersbill_detail` `bill_detail` on((`bill_detail`.`bill_id` = `bill`.`bill_id`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benhnhan`
--
ALTER TABLE `benhnhan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `ck_usersappointments`
--
ALTER TABLE `ck_usersappointments`
 ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `ck_usersbill`
--
ALTER TABLE `ck_usersbill`
 ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `ck_usersbill_detail`
--
ALTER TABLE `ck_usersbill_detail`
 ADD PRIMARY KEY (`bill_detail_id`);

--
-- Indexes for table `ck_usersclinic`
--
ALTER TABLE `ck_usersclinic`
 ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `ck_userscontacts`
--
ALTER TABLE `ck_userscontacts`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `ck_userscontact_details`
--
ALTER TABLE `ck_userscontact_details`
 ADD PRIMARY KEY (`contact_detail_id`);

--
-- Indexes for table `ck_usersdata`
--
ALTER TABLE `ck_usersdata`
 ADD PRIMARY KEY (`ck_data_id`);

--
-- Indexes for table `ck_usersinvoice`
--
ALTER TABLE `ck_usersinvoice`
 ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `ck_usersmenu_access`
--
ALTER TABLE `ck_usersmenu_access`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ck_usersmodules`
--
ALTER TABLE `ck_usersmodules`
 ADD PRIMARY KEY (`module_id`), ADD UNIQUE KEY `module_name` (`module_name`);

--
-- Indexes for table `ck_usersnavigation_menu`
--
ALTER TABLE `ck_usersnavigation_menu`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `menu_name` (`menu_name`);

--
-- Indexes for table `ck_userspatient`
--
ALTER TABLE `ck_userspatient`
 ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `ck_userspayment`
--
ALTER TABLE `ck_userspayment`
 ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `ck_userspayment_transaction`
--
ALTER TABLE `ck_userspayment_transaction`
 ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `ck_usersreceipt_template`
--
ALTER TABLE `ck_usersreceipt_template`
 ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `ck_userstodos`
--
ALTER TABLE `ck_userstodos`
 ADD PRIMARY KEY (`id_num`);

--
-- Indexes for table `ck_usersusers`
--
ALTER TABLE `ck_usersusers`
 ADD PRIMARY KEY (`userid`), ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `ck_usersusers2`
--
ALTER TABLE `ck_usersusers2`
 ADD PRIMARY KEY (`userid`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ck_usersuser_categories`
--
ALTER TABLE `ck_usersuser_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ck_usersversion`
--
ALTER TABLE `ck_usersversion`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ck_usersvisit`
--
ALTER TABLE `ck_usersvisit`
 ADD PRIMARY KEY (`visit_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `products_name_unique` (`name`), ADD KEY `products_user_id_foreign` (`user_id`), ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
 ADD PRIMARY KEY (`id`), ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `tbl_chuandoan`
--
ALTER TABLE `tbl_chuandoan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benhnhan`
--
ALTER TABLE `benhnhan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ck_usersappointments`
--
ALTER TABLE `ck_usersappointments`
MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ck_usersbill`
--
ALTER TABLE `ck_usersbill`
MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ck_usersbill_detail`
--
ALTER TABLE `ck_usersbill_detail`
MODIFY `bill_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ck_userscontacts`
--
ALTER TABLE `ck_userscontacts`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ck_userscontact_details`
--
ALTER TABLE `ck_userscontact_details`
MODIFY `contact_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ck_usersdata`
--
ALTER TABLE `ck_usersdata`
MODIFY `ck_data_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ck_usersinvoice`
--
ALTER TABLE `ck_usersinvoice`
MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ck_usersmenu_access`
--
ALTER TABLE `ck_usersmenu_access`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ck_usersmodules`
--
ALTER TABLE `ck_usersmodules`
MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ck_usersnavigation_menu`
--
ALTER TABLE `ck_usersnavigation_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ck_userspatient`
--
ALTER TABLE `ck_userspatient`
MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ck_userspayment`
--
ALTER TABLE `ck_userspayment`
MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ck_userspayment_transaction`
--
ALTER TABLE `ck_userspayment_transaction`
MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ck_usersreceipt_template`
--
ALTER TABLE `ck_usersreceipt_template`
MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ck_userstodos`
--
ALTER TABLE `ck_userstodos`
MODIFY `id_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ck_usersusers`
--
ALTER TABLE `ck_usersusers`
MODIFY `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ck_usersusers2`
--
ALTER TABLE `ck_usersusers2`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ck_usersuser_categories`
--
ALTER TABLE `ck_usersuser_categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ck_usersversion`
--
ALTER TABLE `ck_usersversion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ck_usersvisit`
--
ALTER TABLE `ck_usersvisit`
MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_chuandoan`
--
ALTER TABLE `tbl_chuandoan`
MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `ck_usersusers` (`userid`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
