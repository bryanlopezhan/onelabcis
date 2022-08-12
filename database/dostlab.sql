-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 04:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dostlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `aauth_groups`
--

CREATE TABLE `aauth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_groups`
--

INSERT INTO `aauth_groups` (`id`, `name`, `definition`) VALUES
(1, 'Admin', 'Superadmin Group'),
(2, 'Public', 'Public Group'),
(3, 'Default', 'Default Access Group'),
(4, 'Member', 'Member Access Group'),
(5, 'Staff', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `aauth_group_to_group`
--

CREATE TABLE `aauth_group_to_group` (
  `group_id` int(11) UNSIGNED NOT NULL,
  `subgroup_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_login_attempts`
--

CREATE TABLE `aauth_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(39) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `login_attempts` tinyint(2) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_login_attempts`
--

INSERT INTO `aauth_login_attempts` (`id`, `ip_address`, `timestamp`, `login_attempts`) VALUES
(10, '::1', '2022-07-01 13:15:18', 21),
(13, '::1', '2022-08-03 16:13:04', 3);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perms`
--

CREATE TABLE `aauth_perms` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_perms`
--

INSERT INTO `aauth_perms` (`id`, `name`, `definition`) VALUES
(1, 'menu_dashboard', NULL),
(2, 'menu_crud_builder', NULL),
(3, 'menu_api_builder', NULL),
(4, 'menu_page_builder', NULL),
(5, 'menu_form_builder', NULL),
(6, 'menu_menu', NULL),
(7, 'menu_auth', NULL),
(8, 'menu_user', NULL),
(9, 'menu_group', NULL),
(10, 'menu_access', NULL),
(11, 'menu_permission', NULL),
(12, 'menu_api_documentation', NULL),
(13, 'menu_web_documentation', NULL),
(14, 'menu_settings', NULL),
(15, 'user_list', NULL),
(16, 'user_update_status', NULL),
(17, 'user_export', NULL),
(18, 'user_add', NULL),
(19, 'user_update', NULL),
(20, 'user_update_profile', NULL),
(21, 'user_update_password', NULL),
(22, 'user_profile', NULL),
(23, 'user_view', NULL),
(24, 'user_delete', NULL),
(25, 'blog_list', NULL),
(26, 'blog_export', NULL),
(27, 'blog_add', NULL),
(28, 'blog_update', NULL),
(29, 'blog_view', NULL),
(30, 'blog_delete', NULL),
(31, 'form_list', NULL),
(32, 'form_export', NULL),
(33, 'form_add', NULL),
(34, 'form_update', NULL),
(35, 'form_view', NULL),
(36, 'form_manage', NULL),
(37, 'form_delete', NULL),
(38, 'crud_list', NULL),
(39, 'crud_export', NULL),
(40, 'crud_add', NULL),
(41, 'crud_update', NULL),
(42, 'crud_view', NULL),
(43, 'crud_delete', NULL),
(44, 'rest_list', NULL),
(45, 'rest_export', NULL),
(46, 'rest_add', NULL),
(47, 'rest_update', NULL),
(48, 'rest_view', NULL),
(49, 'rest_delete', NULL),
(50, 'group_list', NULL),
(51, 'group_export', NULL),
(52, 'group_add', NULL),
(53, 'group_update', NULL),
(54, 'group_view', NULL),
(55, 'group_delete', NULL),
(56, 'permission_list', NULL),
(57, 'permission_export', NULL),
(58, 'permission_add', NULL),
(59, 'permission_update', NULL),
(60, 'permission_view', NULL),
(61, 'permission_delete', NULL),
(62, 'access_list', NULL),
(63, 'access_add', NULL),
(64, 'access_update', NULL),
(65, 'menu_list', NULL),
(66, 'menu_add', NULL),
(67, 'menu_update', NULL),
(68, 'menu_delete', NULL),
(69, 'menu_save_ordering', NULL),
(70, 'menu_type_add', NULL),
(71, 'page_list', NULL),
(72, 'page_export', NULL),
(73, 'page_add', NULL),
(74, 'page_update', NULL),
(75, 'page_view', NULL),
(76, 'page_delete', NULL),
(77, 'blog_list', NULL),
(78, 'blog_export', NULL),
(79, 'blog_add', NULL),
(80, 'blog_update', NULL),
(81, 'blog_view', NULL),
(82, 'blog_delete', NULL),
(83, 'setting', NULL),
(84, 'setting_update', NULL),
(85, 'dashboard', NULL),
(86, 'extension_list', NULL),
(87, 'extension_activate', NULL),
(88, 'extension_deactivate', NULL),
(89, 'database_list', ''),
(90, 'database_add', ''),
(91, 'database_view', ''),
(92, 'database_update', ''),
(93, 'inventory_add', ''),
(94, 'inventory_update', ''),
(95, 'inventory_view', ''),
(96, 'inventory_delete', ''),
(97, 'inventory_list', ''),
(98, 'inventory_export', ''),
(99, 'menu_inventory', ''),
(100, 'keys_list', ''),
(101, 'notification_list', ''),
(102, 'keys_view', ''),
(103, 'api_inventory_all', ''),
(104, 'api_inventory_detail', ''),
(105, 'api_inventory_add', ''),
(106, 'api_inventory_update', ''),
(107, 'api_inventory_delete', '');

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_group`
--

CREATE TABLE `aauth_perm_to_group` (
  `perm_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_perm_to_group`
--

INSERT INTO `aauth_perm_to_group` (`perm_id`, `group_id`) VALUES
(99, 1),
(99, 5),
(85, 5),
(93, 5),
(95, 5),
(97, 5),
(98, 5),
(101, 5);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_user`
--

CREATE TABLE `aauth_perm_to_user` (
  `perm_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_pms`
--

CREATE TABLE `aauth_pms` (
  `id` int(11) UNSIGNED NOT NULL,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `receiver_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(225) NOT NULL,
  `message` text,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  `pm_deleted_sender` int(1) DEFAULT NULL,
  `pm_deleted_receiver` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user`
--

CREATE TABLE `aauth_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_users`
--

CREATE TABLE `aauth_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `oauth_uid` text,
  `oauth_provider` varchar(100) DEFAULT NULL,
  `pass` varchar(64) NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `avatar` text NOT NULL,
  `banned` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `forgot_exp` text,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text,
  `verification_code` text,
  `top_secret` varchar(16) DEFAULT NULL,
  `ip_address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_users`
--

INSERT INTO `aauth_users` (`id`, `email`, `oauth_uid`, `oauth_provider`, `pass`, `username`, `full_name`, `avatar`, `banned`, `last_login`, `last_activity`, `date_created`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `top_secret`, `ip_address`) VALUES
(1, 'dost@dost.com', NULL, NULL, '70bb30fffe0fb78b251997cbee7166f7c78bfdf8dd1ef0065839569e7265647b', 'dost', 'dost', '20220701142557-DOST_seal200px.png', 0, '2022-08-12 09:40:48', '2022-08-12 09:40:48', '2022-06-30 07:04:04', NULL, NULL, NULL, NULL, NULL, '::1'),
(2, 'staff@staff.com', NULL, NULL, 'b778efd029a720b8d2121d2714d693ec68e614cb3c913de71e249774ed6a8aaf', 'staff', 'Staff', '20220701142722-DOST_seal200px.png', 0, '2022-07-22 09:22:06', '2022-07-22 09:22:06', '2022-07-01 14:27:22', NULL, NULL, '', NULL, NULL, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_to_group`
--

CREATE TABLE `aauth_user_to_group` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_user_to_group`
--

INSERT INTO `aauth_user_to_group` (`user_id`, `group_id`) VALUES
(1, 1),
(1, 3),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_variables`
--

CREATE TABLE `aauth_user_variables` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `data_key` varchar(100) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `tags` text NOT NULL,
  `category` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `author` varchar(100) NOT NULL,
  `viewers` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `content`, `image`, `tags`, `category`, `status`, `author`, `viewers`, `created_at`, `updated_at`) VALUES
(1, 'ssdasdasd', 'sdasd', 'dsdas', 'wellcome.jpg', 'greetings', '1', 'publish', 'admin', 1, '2022-06-30 07:03:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` int(11) UNSIGNED NOT NULL,
  `captcha_time` int(10) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(1, 1656652263, '::1', 'D290'),
(2, 1656655871, '::1', 'E66B'),
(3, 1656655871, '::1', 'SICV');

-- --------------------------------------------------------

--
-- Table structure for table `cc_options`
--

CREATE TABLE `cc_options` (
  `id` int(11) UNSIGNED NOT NULL,
  `option_name` varchar(200) NOT NULL,
  `option_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cc_options`
--

INSERT INTO `cc_options` (`id`, `option_name`, `option_value`) VALUES
(1, 'favicon', 'default.png'),
(2, 'site_name', 'DOST ITDI Lab Inventory'),
(3, 'timezone', 'Asia/Bangkok'),
(4, 'enable_crud_builder', NULL),
(5, 'enable_api_builder', NULL),
(6, 'enable_form_builder', NULL),
(7, 'enable_page_builder', NULL),
(8, 'enable_disqus', NULL),
(9, 'disqus_id', ''),
(10, 'limit_pagination', '10'),
(11, 'site_description', 'DOST ITDI Lab Inventory System'),
(12, 'keywords', ''),
(13, 'author', 'Bryan Lopez Janohan'),
(14, 'logo', ''),
(15, 'active_theme', 'cicool'),
(16, 'landing_page_id', 'default'),
(17, 'email', 'dost@dost.com'),
(18, 'google_id', ''),
(19, 'google_secret', ''),
(20, 'landing_page_id', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `cc_session`
--

CREATE TABLE `cc_session` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `sort_by` varchar(50) DEFAULT NULL,
  `sort_field` varchar(255) DEFAULT NULL,
  `javascript` text,
  `style` text,
  `javascript_setting_detail` text,
  `javascript_setting_update` text,
  `javascript_setting_create` text,
  `javascript_setting_list` text,
  `primary_key` varchar(200) NOT NULL,
  `page_read` varchar(20) DEFAULT NULL,
  `page_create` varchar(20) DEFAULT NULL,
  `page_update` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `title`, `subject`, `table_name`, `sort_by`, `sort_field`, `javascript`, `style`, `javascript_setting_detail`, `javascript_setting_update`, `javascript_setting_create`, `javascript_setting_list`, `primary_key`, `page_read`, `page_create`, `page_update`) VALUES
(1, 'Inventory', 'Inventory', 'inventory', '', '', NULL, '   /* .group-chemical_code */\r\n   .group-chemical_code {\r\n\r\n   }\r\n\r\n   .group-chemical_code .control-label {\r\n\r\n   }\r\n\r\n   .group-chemical_code .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-chemical_code .form-control {\r\n\r\n   }\r\n\r\n   .group-chemical_code .help-block {\r\n\r\n   }\r\n   /* end .group-chemical_code */\r\n\r\n\r\n\r\n   /* .group-name_of_pure_chemical */\r\n   .group-name_of_pure_chemical {\r\n\r\n   }\r\n\r\n   .group-name_of_pure_chemical .control-label {\r\n\r\n   }\r\n\r\n   .group-name_of_pure_chemical .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-name_of_pure_chemical .form-control {\r\n\r\n   }\r\n\r\n   .group-name_of_pure_chemical .help-block {\r\n\r\n   }\r\n   /* end .group-name_of_pure_chemical */\r\n\r\n\r\n\r\n   /* .group-chemical_formula */\r\n   .group-chemical_formula {\r\n\r\n   }\r\n\r\n   .group-chemical_formula .control-label {\r\n\r\n   }\r\n\r\n   .group-chemical_formula .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-chemical_formula .form-control {\r\n\r\n   }\r\n\r\n   .group-chemical_formula .help-block {\r\n\r\n   }\r\n   /* end .group-chemical_formula */\r\n\r\n\r\n\r\n   /* .group-location */\r\n   .group-location {\r\n\r\n   }\r\n\r\n   .group-location .control-label {\r\n\r\n   }\r\n\r\n   .group-location .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-location .form-control {\r\n\r\n   }\r\n\r\n   .group-location .help-block {\r\n\r\n   }\r\n   /* end .group-location */\r\n\r\n\r\n\r\n   /* .group-date_registered */\r\n   .group-date_registered {\r\n\r\n   }\r\n\r\n   .group-date_registered .control-label {\r\n\r\n   }\r\n\r\n   .group-date_registered .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-date_registered .form-control {\r\n\r\n   }\r\n\r\n   .group-date_registered .help-block {\r\n\r\n   }\r\n   /* end .group-date_registered */\r\n\r\n\r\n\r\n   /* .group-registered_by */\r\n   .group-registered_by {\r\n\r\n   }\r\n\r\n   .group-registered_by .control-label {\r\n\r\n   }\r\n\r\n   .group-registered_by .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-registered_by .form-control {\r\n\r\n   }\r\n\r\n   .group-registered_by .help-block {\r\n\r\n   }\r\n   /* end .group-registered_by */\r\n\r\n\r\n\r\n   /* .group-state_of_chemical */\r\n   .group-state_of_chemical {\r\n\r\n   }\r\n\r\n   .group-state_of_chemical .control-label {\r\n\r\n   }\r\n\r\n   .group-state_of_chemical .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-state_of_chemical .form-control {\r\n\r\n   }\r\n\r\n   .group-state_of_chemical .help-block {\r\n\r\n   }\r\n   /* end .group-state_of_chemical */\r\n\r\n\r\n\r\n   /* .group-chemical_color_group */\r\n   .group-chemical_color_group {\r\n\r\n   }\r\n\r\n   .group-chemical_color_group .control-label {\r\n\r\n   }\r\n\r\n   .group-chemical_color_group .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-chemical_color_group .form-control {\r\n\r\n   }\r\n\r\n   .group-chemical_color_group .help-block {\r\n\r\n   }\r\n   /* end .group-chemical_color_group */\r\n\r\n\r\n\r\n   /* .group-cas_no */\r\n   .group-cas_no {\r\n\r\n   }\r\n\r\n   .group-cas_no .control-label {\r\n\r\n   }\r\n\r\n   .group-cas_no .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-cas_no .form-control {\r\n\r\n   }\r\n\r\n   .group-cas_no .help-block {\r\n\r\n   }\r\n   /* end .group-cas_no */\r\n\r\n\r\n\r\n   /* .group-brand */\r\n   .group-brand {\r\n\r\n   }\r\n\r\n   .group-brand .control-label {\r\n\r\n   }\r\n\r\n   .group-brand .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-brand .form-control {\r\n\r\n   }\r\n\r\n   .group-brand .help-block {\r\n\r\n   }\r\n   /* end .group-brand */\r\n\r\n\r\n\r\n   /* .group-lot_no */\r\n   .group-lot_no {\r\n\r\n   }\r\n\r\n   .group-lot_no .control-label {\r\n\r\n   }\r\n\r\n   .group-lot_no .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-lot_no .form-control {\r\n\r\n   }\r\n\r\n   .group-lot_no .help-block {\r\n\r\n   }\r\n   /* end .group-lot_no */\r\n\r\n\r\n\r\n   /* .group-container */\r\n   .group-container {\r\n\r\n   }\r\n\r\n   .group-container .control-label {\r\n\r\n   }\r\n\r\n   .group-container .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-container .form-control {\r\n\r\n   }\r\n\r\n   .group-container .help-block {\r\n\r\n   }\r\n   /* end .group-container */\r\n\r\n\r\n\r\n   /* .group-storage_condition */\r\n   .group-storage_condition {\r\n\r\n   }\r\n\r\n   .group-storage_condition .control-label {\r\n\r\n   }\r\n\r\n   .group-storage_condition .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-storage_condition .form-control {\r\n\r\n   }\r\n\r\n   .group-storage_condition .help-block {\r\n\r\n   }\r\n   /* end .group-storage_condition */\r\n\r\n\r\n\r\n   /* .group-original_amount */\r\n   .group-original_amount {\r\n\r\n   }\r\n\r\n   .group-original_amount .control-label {\r\n\r\n   }\r\n\r\n   .group-original_amount .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-original_amount .form-control {\r\n\r\n   }\r\n\r\n   .group-original_amount .help-block {\r\n\r\n   }\r\n   /* end .group-original_amount */\r\n\r\n\r\n\r\n   /* .group-estimated_current_mount */\r\n   .group-estimated_current_mount {\r\n\r\n   }\r\n\r\n   .group-estimated_current_mount .control-label {\r\n\r\n   }\r\n\r\n   .group-estimated_current_mount .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-estimated_current_mount .form-control {\r\n\r\n   }\r\n\r\n   .group-estimated_current_mount .help-block {\r\n\r\n   }\r\n   /* end .group-estimated_current_mount */\r\n\r\n\r\n\r\n   /* .group-date_of_receipt */\r\n   .group-date_of_receipt {\r\n\r\n   }\r\n\r\n   .group-date_of_receipt .control-label {\r\n\r\n   }\r\n\r\n   .group-date_of_receipt .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-date_of_receipt .form-control {\r\n\r\n   }\r\n\r\n   .group-date_of_receipt .help-block {\r\n\r\n   }\r\n   /* end .group-date_of_receipt */\r\n\r\n\r\n\r\n   /* .group-received_by */\r\n   .group-received_by {\r\n\r\n   }\r\n\r\n   .group-received_by .control-label {\r\n\r\n   }\r\n\r\n   .group-received_by .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-received_by .form-control {\r\n\r\n   }\r\n\r\n   .group-received_by .help-block {\r\n\r\n   }\r\n   /* end .group-received_by */\r\n\r\n\r\n\r\n   /* .group-date_of_expiration */\r\n   .group-date_of_expiration {\r\n\r\n   }\r\n\r\n   .group-date_of_expiration .control-label {\r\n\r\n   }\r\n\r\n   .group-date_of_expiration .col-sm-8 {\r\n\r\n   }\r\n\r\n   .group-date_of_expiration .form-control {\r\n\r\n   }\r\n\r\n   .group-date_of_expiration .help-block {\r\n\r\n   }\r\n   /* end .group-date_of_expiration */\r\n\r\n\r\n\r\n', 'function onReady() {\n        var chemical_code = $(\'.detail_group-chemical_code\');\n        var name_of_pure_chemical = $(\'.detail_group-name_of_pure_chemical\');\n        var chemical_formula = $(\'.detail_group-chemical_formula\');\n        var location = $(\'.detail_group-location\');\n        var date_registered = $(\'.detail_group-date_registered\');\n        var registered_by = $(\'.detail_group-registered_by\');\n        var state_of_chemical = $(\'.detail_group-state_of_chemical\');\n        var chemical_color_group = $(\'.detail_group-chemical_color_group\');\n        var cas_no = $(\'.detail_group-cas_no\');\n        var brand = $(\'.detail_group-brand\');\n        var lot_no = $(\'.detail_group-lot_no\');\n        var container = $(\'.detail_group-container\');\n        var storage_condition = $(\'.detail_group-storage_condition\');\n        var original_amount = $(\'.detail_group-original_amount\');\n        var estimated_current_mount = $(\'.detail_group-estimated_current_mount\');\n        var date_of_receipt = $(\'.detail_group-date_of_receipt\');\n        var received_by = $(\'.detail_group-received_by\');\n        var date_of_expiration = $(\'.detail_group-date_of_expiration\');\n    }       ', 'function onReady() {\n    var chemical_code = $(\'#chemical_code\');\n   /* \n    chemical_code.on(\'change\', function() {});\n    */\n    var name_of_pure_chemical = $(\'#name_of_pure_chemical\');\n   var chemical_formula = $(\'#chemical_formula\');\n   var location = $(\'#location\');\n   var date_registered = $(\'#date_registered\');\n   var registered_by = $(\'#registered_by\');\n   var state_of_chemical = $(\'#state_of_chemical\');\n   var chemical_color_group = $(\'#chemical_color_group\');\n   var cas_no = $(\'#cas_no\');\n   var brand = $(\'#brand\');\n   var lot_no = $(\'#lot_no\');\n   var container = $(\'#container\');\n   var storage_condition = $(\'#storage_condition\');\n   var original_amount = $(\'#original_amount\');\n   var estimated_current_mount = $(\'#estimated_current_mount\');\n   var date_of_receipt = $(\'#date_of_receipt\');\n   var received_by = $(\'#received_by\');\n   var date_of_expiration = $(\'#date_of_expiration\');\n   \n}\n\nfunction beforeSave() {\n    data_post.push({\n        name : \'_example\',\n        value : \'value_of_example\',\n    })\n}       ', 'function onReady() {\n    var chemical_code = $(\'#chemical_code\');\n   /* \n    chemical_code.on(\'change\', function() {});\n    */\n    var name_of_pure_chemical = $(\'#name_of_pure_chemical\');\n   var chemical_formula = $(\'#chemical_formula\');\n   var location = $(\'#location\');\n   var date_registered = $(\'#date_registered\');\n   var registered_by = $(\'#registered_by\');\n   var state_of_chemical = $(\'#state_of_chemical\');\n   var chemical_color_group = $(\'#chemical_color_group\');\n   var cas_no = $(\'#cas_no\');\n   var brand = $(\'#brand\');\n   var lot_no = $(\'#lot_no\');\n   var container = $(\'#container\');\n   var storage_condition = $(\'#storage_condition\');\n   var original_amount = $(\'#original_amount\');\n   var estimated_current_mount = $(\'#estimated_current_mount\');\n   var date_of_receipt = $(\'#date_of_receipt\');\n   var received_by = $(\'#received_by\');\n   var date_of_expiration = $(\'#date_of_expiration\');\n   \n}\n\nfunction beforeSave() {\n    data_post.push({\n        name : \'_example\',\n        value : \'value_of_example\',\n    })\n}       ', 'function onReady() {\n\n}\n\nfunction eachRows(row) {\n    var chemical_code = row.find(\'.list_group-chemical_code\');\n    var name_of_pure_chemical = row.find(\'.list_group-name_of_pure_chemical\');\n    var chemical_formula = row.find(\'.list_group-chemical_formula\');\n    var location = row.find(\'.list_group-location\');\n    var date_registered = row.find(\'.list_group-date_registered\');\n    var registered_by = row.find(\'.list_group-registered_by\');\n    var state_of_chemical = row.find(\'.list_group-state_of_chemical\');\n    var chemical_color_group = row.find(\'.list_group-chemical_color_group\');\n    var cas_no = row.find(\'.list_group-cas_no\');\n    var brand = row.find(\'.list_group-brand\');\n    var lot_no = row.find(\'.list_group-lot_no\');\n    var container = row.find(\'.list_group-container\');\n    var storage_condition = row.find(\'.list_group-storage_condition\');\n    var original_amount = row.find(\'.list_group-original_amount\');\n    var estimated_current_mount = row.find(\'.list_group-estimated_current_mount\');\n    var date_of_receipt = row.find(\'.list_group-date_of_receipt\');\n    var received_by = row.find(\'.list_group-received_by\');\n    var date_of_expiration = row.find(\'.list_group-date_of_expiration\');\n\n}       ', 'chemical_code', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `crud_action`
--

CREATE TABLE `crud_action` (
  `id` int(11) UNSIGNED NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `action` varchar(200) NOT NULL,
  `meta` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crud_custom_option`
--

CREATE TABLE `crud_custom_option` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `option_value` text NOT NULL,
  `option_label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_custom_option`
--

INSERT INTO `crud_custom_option` (`id`, `crud_field_id`, `crud_id`, `option_value`, `option_label`) VALUES
(144, 328, 1, 'Room 221', 'Room 221'),
(145, 328, 1, 'Room 221A', 'Room 221A'),
(146, 328, 1, 'Room 214A', 'Room 214A'),
(147, 331, 1, 'Liquid', 'Liquid'),
(148, 331, 1, 'Solid', 'Solid'),
(149, 332, 1, 'Blue', 'Blue'),
(150, 332, 1, 'Red', 'Red'),
(151, 332, 1, 'Green', 'Green'),
(152, 332, 1, 'Yellow', 'Yellow'),
(153, 332, 1, 'White', 'White'),
(154, 332, 1, 'Peach', 'Peach'),
(155, 336, 1, 'Glass Bottle (Clear)', 'Glass Bottle (Clear)'),
(156, 336, 1, 'Glass Bottle (Amber)', 'Glass Bottle (Amber)'),
(157, 336, 1, 'Plastic Bottle', 'Plastic Bottle'),
(158, 336, 1, 'Canister', 'Canister'),
(159, 336, 1, 'Plastic Bag', 'Plastic Bag'),
(160, 337, 1, 'Chilled (0-10°C)', 'Chilled (0-10°C)'),
(161, 337, 1, 'Frozen (<0°C)', 'Frozen (<0°C)'),
(162, 337, 1, 'Desiccator', 'Desiccator');

-- --------------------------------------------------------

--
-- Table structure for table `crud_field`
--

CREATE TABLE `crud_field` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_id` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `input_type` varchar(200) NOT NULL,
  `help_block` text,
  `placeholder` text,
  `auto_generate_help_block` varchar(40) DEFAULT NULL,
  `wrapper_class` text,
  `show_column` varchar(10) DEFAULT NULL,
  `show_add_form` varchar(10) DEFAULT NULL,
  `show_update_form` varchar(10) DEFAULT NULL,
  `show_detail_page` varchar(10) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_field`
--

INSERT INTO `crud_field` (`id`, `crud_id`, `field_name`, `field_label`, `input_type`, `help_block`, `placeholder`, `auto_generate_help_block`, `wrapper_class`, `show_column`, `show_add_form`, `show_update_form`, `show_detail_page`, `sort`, `relation_table`, `relation_value`, `relation_label`) VALUES
(325, 1, 'chemical_code', 'chemical_code', 'number', '', '', 'yes', 'group-chemical_code', 'yes', '', '', 'yes', 1, '', '', ''),
(326, 1, 'name_of_pure_chemical', 'name_of_pure_chemical', 'input', '', '', 'yes', 'group-name_of_pure_chemical', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
(327, 1, 'chemical_formula', 'chemical_formula', 'input', '', '', 'yes', 'group-chemical_formula', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
(328, 1, 'location', 'location', 'custom_select', '', '', 'yes', 'group-location', 'yes', 'yes', 'yes', 'yes', 4, '', '', ''),
(329, 1, 'date_registered', 'date_registered', 'timestamp', '', '', '', 'group-date_registered', 'yes', 'yes', 'yes', 'yes', 5, '', '', ''),
(330, 1, 'registered_by', 'registered_by', 'input', '', '', 'yes', 'group-registered_by', 'yes', 'yes', 'yes', 'yes', 6, '', '', ''),
(331, 1, 'state_of_chemical', 'state_of_chemical', 'custom_select', '', '', 'yes', 'group-state_of_chemical', 'yes', 'yes', 'yes', 'yes', 7, '', '', ''),
(332, 1, 'chemical_color_group', 'chemical_color_group', 'custom_select', '', '', 'yes', 'group-chemical_color_group', 'yes', 'yes', 'yes', 'yes', 8, '', '', ''),
(333, 1, 'cas_no', 'cas_no', 'input', '', '', 'yes', 'group-cas_no', 'yes', 'yes', 'yes', 'yes', 9, '', '', ''),
(334, 1, 'brand', 'brand', 'input', '', '', 'yes', 'group-brand', 'yes', 'yes', 'yes', 'yes', 10, '', '', ''),
(335, 1, 'lot_no', 'lot_no', 'input', '', '', 'yes', 'group-lot_no', 'yes', 'yes', 'yes', 'yes', 11, '', '', ''),
(336, 1, 'container', 'container', 'custom_select', '', '', 'yes', 'group-container', 'yes', 'yes', 'yes', 'yes', 12, '', '', ''),
(337, 1, 'storage_condition', 'storage_condition', 'custom_select', '', 'Room Temperature', '', 'group-storage_condition', 'yes', 'yes', 'yes', 'yes', 13, '', '', ''),
(338, 1, 'original_amount', 'original_amount', 'input', '', 'grams (g), kilograms (kg), milliliter (mL), liter (L)', 'yes', 'group-original_amount', 'yes', 'yes', 'yes', 'yes', 14, '', '', ''),
(339, 1, 'estimated_current_mount', 'estimated_current_mount', 'input', '', 'grams (g), kilograms (kg), milliliter (mL), liter (L)', 'yes', 'group-estimated_current_mount', 'yes', 'yes', 'yes', 'yes', 15, '', '', ''),
(340, 1, 'date_of_receipt', 'date_of_receipt', 'date', '', '', 'yes', 'group-date_of_receipt', 'yes', 'yes', 'yes', 'yes', 16, '', '', ''),
(341, 1, 'received_by', 'received_by', 'input', '', '', 'yes', 'group-received_by', 'yes', 'yes', 'yes', 'yes', 17, '', '', ''),
(342, 1, 'date_of_expiration', 'date_of_expiration', 'date', '', '', 'yes', 'group-date_of_expiration', 'yes', 'yes', 'yes', 'yes', 18, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `crud_field_condition`
--

CREATE TABLE `crud_field_condition` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_field_id` int(11) NOT NULL,
  `reff` text,
  `crud_id` int(11) NOT NULL,
  `cond_field` text,
  `cond_operator` text,
  `cond_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crud_field_configuration`
--

CREATE TABLE `crud_field_configuration` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `group_config` varchar(200) NOT NULL,
  `config_name` text NOT NULL,
  `config_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crud_field_validation`
--

CREATE TABLE `crud_field_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_field_validation`
--

INSERT INTO `crud_field_validation` (`id`, `crud_field_id`, `crud_id`, `validation_name`, `validation_value`) VALUES
(456, 326, 1, 'required', ''),
(457, 327, 1, 'required', ''),
(458, 328, 1, 'required', ''),
(459, 330, 1, 'required', ''),
(460, 331, 1, 'required', ''),
(461, 332, 1, 'required', ''),
(462, 333, 1, 'required', ''),
(463, 334, 1, 'required', ''),
(464, 335, 1, 'required', ''),
(465, 336, 1, 'required', ''),
(466, 337, 1, 'required', ''),
(467, 338, 1, 'required', ''),
(468, 339, 1, 'required', ''),
(469, 340, 1, 'required', ''),
(470, 341, 1, 'required', ''),
(471, 342, 1, 'required', '');

-- --------------------------------------------------------

--
-- Table structure for table `crud_function`
--

CREATE TABLE `crud_function` (
  `id` int(11) UNSIGNED NOT NULL,
  `slug` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_function`
--

INSERT INTO `crud_function` (`id`, `slug`, `type`, `crud_id`, `content`) VALUES
(2, 'function_setting_update', 'event', 1, 'function beforeSave() {\r\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\r\n}\r\n\r\nfunction afterSuccess($id){\r\n}'),
(3, 'notification_title', 'notification', 1, NULL),
(4, 'notification_message', 'notification', 1, NULL),
(5, 'notification_url', 'notification', 1, NULL),
(6, 'notification_group', 'notification', 1, NULL),
(8, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n} '),
(9, 'notification_title', 'notification', 1, ''),
(10, 'notification_message', 'notification', 1, ''),
(11, 'notification_url', 'notification', 1, ''),
(12, 'notification_group', 'notification', 1, ''),
(14, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}  '),
(15, 'notification_title', 'notification', 1, ''),
(16, 'notification_message', 'notification', 1, ''),
(17, 'notification_url', 'notification', 1, ''),
(18, 'notification_group', 'notification', 1, ''),
(20, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}  '),
(21, 'notification_title', 'notification', 1, ''),
(22, 'notification_message', 'notification', 1, ''),
(23, 'notification_url', 'notification', 1, ''),
(24, 'notification_group', 'notification', 1, ''),
(26, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}   '),
(27, 'notification_title', 'notification', 1, ''),
(28, 'notification_message', 'notification', 1, ''),
(29, 'notification_url', 'notification', 1, ''),
(30, 'notification_group', 'notification', 1, ''),
(32, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}   '),
(33, 'notification_title', 'notification', 1, ''),
(34, 'notification_message', 'notification', 1, ''),
(35, 'notification_url', 'notification', 1, ''),
(36, 'notification_group', 'notification', 1, ''),
(38, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}   '),
(39, 'notification_title', 'notification', 1, ''),
(40, 'notification_message', 'notification', 1, ''),
(41, 'notification_url', 'notification', 1, ''),
(42, 'notification_group', 'notification', 1, ''),
(44, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}   '),
(45, 'notification_title', 'notification', 1, ''),
(46, 'notification_message', 'notification', 1, ''),
(47, 'notification_url', 'notification', 1, ''),
(48, 'notification_group', 'notification', 1, ''),
(50, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}   '),
(51, 'notification_title', 'notification', 1, ''),
(52, 'notification_message', 'notification', 1, ''),
(53, 'notification_url', 'notification', 1, ''),
(54, 'notification_group', 'notification', 1, ''),
(56, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}   '),
(57, 'notification_title', 'notification', 1, ''),
(58, 'notification_message', 'notification', 1, ''),
(59, 'notification_url', 'notification', 1, ''),
(60, 'notification_group', 'notification', 1, ''),
(62, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}   '),
(63, 'notification_title', 'notification', 1, ''),
(64, 'notification_message', 'notification', 1, ''),
(65, 'notification_url', 'notification', 1, ''),
(66, 'notification_group', 'notification', 1, ''),
(68, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}    '),
(69, 'notification_title', 'notification', 1, ''),
(70, 'notification_message', 'notification', 1, ''),
(71, 'notification_url', 'notification', 1, ''),
(72, 'notification_group', 'notification', 1, ''),
(74, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}    '),
(75, 'notification_title', 'notification', 1, ''),
(76, 'notification_message', 'notification', 1, ''),
(77, 'notification_url', 'notification', 1, ''),
(78, 'notification_group', 'notification', 1, ''),
(80, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}    '),
(81, 'notification_title', 'notification', 1, ''),
(82, 'notification_message', 'notification', 1, ''),
(83, 'notification_url', 'notification', 1, ''),
(84, 'notification_group', 'notification', 1, ''),
(86, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}     '),
(87, 'notification_title', 'notification', 1, ''),
(88, 'notification_message', 'notification', 1, ''),
(89, 'notification_url', 'notification', 1, ''),
(90, 'notification_group', 'notification', 1, ''),
(92, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}     '),
(93, 'notification_title', 'notification', 1, ''),
(94, 'notification_message', 'notification', 1, ''),
(95, 'notification_url', 'notification', 1, ''),
(96, 'notification_group', 'notification', 1, ''),
(98, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}     '),
(99, 'notification_title', 'notification', 1, ''),
(100, 'notification_message', 'notification', 1, ''),
(101, 'notification_url', 'notification', 1, ''),
(102, 'notification_group', 'notification', 1, ''),
(104, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}      '),
(105, 'notification_title', 'notification', 1, ''),
(106, 'notification_message', 'notification', 1, ''),
(107, 'notification_url', 'notification', 1, ''),
(108, 'notification_group', 'notification', 1, ''),
(109, 'function_setting_create', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}       '),
(110, 'function_setting_update', 'event', 1, 'function beforeSave() {\n//$save_data[\'_example\'] = $this->input->post(\'_example\');\n}\n\nfunction afterSuccess($id){\n}       '),
(111, 'notification_title', 'notification', 1, ''),
(112, 'notification_message', 'notification', 1, ''),
(113, 'notification_url', 'notification', 1, ''),
(114, 'notification_group', 'notification', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `crud_input_chained`
--

CREATE TABLE `crud_input_chained` (
  `id` int(11) UNSIGNED NOT NULL,
  `chain_field` varchar(250) DEFAULT NULL,
  `chain_field_eq` varchar(250) DEFAULT NULL,
  `crud_field_id` int(11) DEFAULT NULL,
  `crud_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crud_input_type`
--

CREATE TABLE `crud_input_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(200) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `custom_value` int(11) NOT NULL,
  `validation_group` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_input_type`
--

INSERT INTO `crud_input_type` (`id`, `type`, `relation`, `custom_value`, `validation_group`) VALUES
(1, 'input', '0', 0, 'input'),
(2, 'textarea', '0', 0, 'text'),
(3, 'select', '1', 0, 'select'),
(4, 'editor_wysiwyg', '0', 0, 'editor'),
(5, 'password', '0', 0, 'password'),
(6, 'email', '0', 0, 'email'),
(7, 'address_map', '0', 0, 'address_map'),
(8, 'file', '0', 0, 'file'),
(9, 'file_multiple', '0', 0, 'file_multiple'),
(10, 'datetime', '0', 0, 'datetime'),
(11, 'date', '0', 0, 'date'),
(12, 'timestamp', '0', 0, 'timestamp'),
(13, 'number', '0', 0, 'number'),
(14, 'yes_no', '0', 0, 'yes_no'),
(15, 'time', '0', 0, 'time'),
(16, 'year', '0', 0, 'year'),
(17, 'select_multiple', '1', 0, 'select_multiple'),
(18, 'checkboxes', '1', 0, 'checkboxes'),
(19, 'options', '1', 0, 'options'),
(20, 'true_false', '0', 0, 'true_false'),
(21, 'current_user_username', '0', 0, 'user_username'),
(22, 'current_user_id', '0', 0, 'current_user_id'),
(23, 'custom_option', '0', 1, 'custom_option'),
(24, 'custom_checkbox', '0', 1, 'custom_checkbox'),
(25, 'custom_select_multiple', '0', 1, 'custom_select_multiple'),
(26, 'custom_select', '0', 1, 'custom_select'),
(27, 'chained', '1', 0, 'chained');

-- --------------------------------------------------------

--
-- Table structure for table `crud_input_validation`
--

CREATE TABLE `crud_input_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `validation` varchar(200) NOT NULL,
  `input_able` varchar(20) NOT NULL,
  `group_input` text NOT NULL,
  `input_placeholder` text NOT NULL,
  `call_back` varchar(10) NOT NULL,
  `input_validation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_input_validation`
--

INSERT INTO `crud_input_validation` (`id`, `validation`, `input_able`, `group_input`, `input_placeholder`, `call_back`, `input_validation`) VALUES
(1, 'required', 'no', 'input, file, number, text, datetime, select, password, email, editor, date, yes_no, time, year, select_multiple, options, checkboxes, true_false, address_map, custom_option, custom_checkbox, custom_select_multiple, custom_select, file_multiple, chained', '', '', ''),
(2, 'max_length', 'yes', 'input, number, text, select, password, email, editor, yes_no, time, year, select_multiple, options, checkboxes, address_map', '', '', 'numeric'),
(3, 'min_length', 'yes', 'input, number, text, select, password, email, editor, time, year, select_multiple, address_map', '', '', 'numeric'),
(4, 'valid_email', 'no', 'input, email', '', '', ''),
(5, 'valid_emails', 'no', 'input, email', '', '', ''),
(6, 'regex', 'yes', 'input, number, text, datetime, select, password, email, editor, date, yes_no, time, year, select_multiple, options, checkboxes', '', 'yes', 'callback_valid_regex'),
(7, 'decimal', 'no', 'input, number, text, select', '', '', ''),
(8, 'allowed_extension', 'yes', 'file, file_multiple', 'ex : jpg,png,..', '', 'callback_valid_extension_list'),
(9, 'max_width', 'yes', 'file, file_multiple', '', '', 'numeric'),
(10, 'max_height', 'yes', 'file, file_multiple', '', '', 'numeric'),
(11, 'max_size', 'yes', 'file, file_multiple', '... kb', '', 'numeric'),
(12, 'max_item', 'yes', 'file_multiple', '', '', 'numeric'),
(13, 'valid_url', 'no', 'input, text', '', '', ''),
(14, 'alpha', 'no', 'input, text, select, password, editor, yes_no', '', '', ''),
(15, 'alpha_numeric', 'no', 'input, number, text, select, password, editor', '', '', ''),
(16, 'alpha_numeric_spaces', 'no', 'input, number, text,select, password, editor', '', '', ''),
(17, 'valid_number', 'no', 'input, number, text, password, editor, true_false', '', 'yes', ''),
(18, 'valid_datetime', 'no', 'input, datetime, text', '', 'yes', ''),
(19, 'valid_date', 'no', 'input, datetime, date, text', '', 'yes', ''),
(20, 'valid_max_selected_option', 'yes', 'select_multiple, custom_select_multiple, custom_checkbox, checkboxes', '', 'yes', 'numeric'),
(21, 'valid_min_selected_option', 'yes', 'select_multiple, custom_select_multiple, custom_checkbox, checkboxes', '', 'yes', 'numeric'),
(22, 'valid_alpha_numeric_spaces_underscores', 'no', 'input, text,select, password, editor', '', 'yes', ''),
(23, 'matches', 'yes', 'input, number, text, password, email', 'any field', 'no', 'callback_valid_alpha_numeric_spaces_underscores'),
(24, 'valid_json', 'no', 'input, text, editor', '', 'yes', ' '),
(25, 'valid_url', 'no', 'input, text, editor', '', 'no', ' '),
(26, 'exact_length', 'yes', 'input, text, number', '0 - 99999*', 'no', 'numeric'),
(27, 'alpha_dash', 'no', 'input, text', '', 'no', ''),
(28, 'integer', 'no', 'input, text, number', '', 'no', ''),
(29, 'differs', 'yes', 'input, text, number, email, password, editor, options, select', 'any field', 'no', 'callback_valid_alpha_numeric_spaces_underscores'),
(30, 'is_natural', 'no', 'input, text, number', '', 'no', ''),
(31, 'is_natural_no_zero', 'no', 'input, text, number', '', 'no', ''),
(32, 'less_than', 'yes', 'input, text, number', '', 'no', 'numeric'),
(33, 'less_than_equal_to', 'yes', 'input, text, number', '', 'no', 'numeric'),
(34, 'greater_than', 'yes', 'input, text, number', '', 'no', 'numeric'),
(35, 'greater_than_equal_to', 'yes', 'input, text, number', '', 'no', 'numeric'),
(36, 'in_list', 'yes', 'input, text, number, select, options', '', 'no', 'callback_valid_multiple_value'),
(37, 'valid_ip', 'no', 'input, text', '', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` text NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_custom_attribute`
--

CREATE TABLE `form_custom_attribute` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `attribute_value` text NOT NULL,
  `attribute_label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_custom_option`
--

CREATE TABLE `form_custom_option` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `option_value` text NOT NULL,
  `option_label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_field`
--

CREATE TABLE `form_field` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `input_type` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `placeholder` text,
  `show_detail_page` varchar(20) DEFAULT NULL,
  `show_update_form` varchar(20) DEFAULT NULL,
  `show_add_form` varchar(20) DEFAULT NULL,
  `show_column` varchar(20) DEFAULT NULL,
  `auto_generate_help_block` varchar(10) DEFAULT NULL,
  `help_block` text,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_field_validation`
--

CREATE TABLE `form_field_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `chemical_code` int(20) NOT NULL,
  `name_of_pure_chemical` varchar(200) NOT NULL,
  `chemical_formula` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date_registered` datetime NOT NULL,
  `registered_by` varchar(200) NOT NULL,
  `state_of_chemical` varchar(200) NOT NULL,
  `chemical_color_group` varchar(200) NOT NULL,
  `cas_no` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `lot_no` varchar(200) NOT NULL,
  `container` varchar(200) NOT NULL,
  `storage_condition` varchar(200) NOT NULL,
  `original_amount` varchar(200) NOT NULL,
  `estimated_current_mount` varchar(200) NOT NULL,
  `date_of_receipt` date NOT NULL,
  `received_by` varchar(200) NOT NULL,
  `date_of_expiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`chemical_code`, `name_of_pure_chemical`, `chemical_formula`, `location`, `date_registered`, `registered_by`, `state_of_chemical`, `chemical_color_group`, `cas_no`, `brand`, `lot_no`, `container`, `storage_condition`, `original_amount`, `estimated_current_mount`, `date_of_receipt`, `received_by`, `date_of_expiration`) VALUES
(1, 'Sulfanilamide', 'C6H8N2O2S', 'Room 221', '2022-08-11 12:03:54', 'Bryan', 'Liquid', 'Blue', '12345', 'Sigma', '54321', 'Glass Bottle (Clear)', 'Chilled (0-10°C)', '100g', '100g', '2022-08-11', 'Bryan', '2022-08-10'),
(2, 'Barbituric Acid', 'CO(NHCO)2CH2', 'Room 221A', '2022-08-11 12:06:50', 'Bryan', 'Solid', 'Peach', '98678', 'Ajax', '35634', 'Glass Bottle (Amber)', 'Desiccator', '100g', '100g', '2022-08-11', 'Mark', '2022-08-07'),
(3, 'Phenanthroline', 'C12H8N2', 'Room 221A', '2022-08-11 12:00:48', 'Michael', 'Solid', 'Green', '32423', 'Chinese Character', '23423', 'Glass Bottle (Amber)', 'Frozen (<0°C)', '25g', '25g', '2022-08-11', 'Michael', '2022-08-12'),
(4, 'Calcium Hydroxide', 'Ca(OH)2', 'Room 221A', '2022-08-11 12:02:12', 'Bryan', 'Liquid', 'Red', '233213', 'Ajax Chemical', '2132', 'Glass Bottle (Amber)', 'Chilled (0-10°C)', '500g', '500g', '2022-08-11', 'Bryan', '2022-08-31'),
(5, 'Sodium Hydroxide', 'NaOH', 'Room 221', '2022-08-11 12:03:48', 'Michael', 'Solid', 'Peach', 'adsasdas', 'Merck', 'asdasdasd', 'Glass Bottle (Amber)', 'Frozen (<0°C)', '500g', '500g', '2022-08-11', 'Michael', '2022-08-25'),
(6, 'Diphenylamine', '(C6H5)2NH', 'Room 214A', '2022-08-11 12:05:46', 'Bryan', 'Liquid', 'Red', '213213', 'Unilab', '13213', 'Glass Bottle (Clear)', 'Frozen (<0°C)', '100g', '100g', '2022-08-11', 'Michael', '2022-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `inventory2`
--

CREATE TABLE `inventory2` (
  `category_id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory2`
--

INSERT INTO `inventory2` (`category_id`, `category_name`) VALUES
(1, 'Technology'),
(2, 'Lifestyle');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL,
  `is_private_key` tinyint(1) NOT NULL,
  `ip_addresses` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, 'D40396DD30B57600BD4FBCBD605CEDE8', 0, 0, 0, NULL, '2022-06-29 23:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `message` text,
  `type` varchar(200) DEFAULT NULL,
  `data` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `label` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `icon_color` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `menu_type_id` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `label`, `type`, `icon_color`, `link`, `sort`, `parent`, `icon`, `menu_type_id`, `active`) VALUES
(1, 'MAIN NAVIGATION', 'label', '', '{admin_url}/dashboard', 1, 0, '', 1, 0),
(2, 'Dashboard', 'menu', '', '{admin_url}/dashboard', 2, 0, 'fa-dashboard', 1, 1),
(3, 'CRUD Builder', 'menu', '', '{admin_url}/crud', 4, 0, 'fa-table', 1, 0),
(4, 'API Builder', 'menu', '', '{admin_url}/rest', 5, 0, 'fa-code', 1, 0),
(5, 'Page Builder', 'menu', '', '{admin_url}/page', 6, 0, 'fa-file-o', 1, 0),
(6, 'Form Builder', 'menu', '', '{admin_url}/form', 7, 0, 'fa-newspaper-o', 1, 0),
(7, 'Inventory', 'menu', 'default', '{admin_url}/inventory', 3, 0, 'fa-pencil-square-o', 1, 1),
(8, 'Menu', 'menu', '', '{admin_url}/menu', 8, 0, 'fa-bars', 1, 0),
(9, 'Auth', 'menu', '', '', 9, 0, 'fa-shield', 1, 0),
(10, 'User', 'menu', '', '{admin_url}/user', 10, 9, '', 1, 1),
(11, 'Groups', 'menu', '', '{admin_url}/group', 11, 9, '', 1, 1),
(12, 'Access', 'menu', '', '{admin_url}/access', 12, 9, '', 1, 1),
(13, 'Permission', 'menu', '', '{admin_url}/permission', 13, 9, '', 1, 1),
(14, 'API Keys', 'menu', '', '{admin_url}/keys', 14, 9, '', 1, 1),
(15, 'Extension', 'menu', '', '{admin_url}/extension', 15, 0, 'fa-puzzle-piece', 1, 0),
(16, 'Database', 'menu', '', '{admin_url}/database', 16, 0, 'fa-database', 1, 0),
(17, 'OTHER', 'label', '', '', 17, 0, '', 1, 0),
(18, 'Settings', 'menu', 'text-red', '{admin_url}/setting', 18, 0, 'fa-circle-o', 1, 0),
(21, 'Home', 'menu', '', '/', 1, 0, '', 2, 1),
(22, 'Inventory', 'menu', '', 'inventory', 4, 0, '', 2, 1),
(23, 'Dashboard', 'menu', '', 'administrator/dashboard', 5, 0, '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_type`
--

CREATE TABLE `menu_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_type`
--

INSERT INTO `menu_type` (`id`, `name`, `definition`) VALUES
(1, 'side menu', NULL),
(2, 'top menu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `content` text,
  `url` text,
  `read` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `fresh_content` text NOT NULL,
  `keyword` text,
  `description` text,
  `link` varchar(200) DEFAULT NULL,
  `template` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `type`, `content`, `fresh_content`, `keyword`, `description`, `link`, `template`, `created_at`) VALUES
(1, 'inventory', 'frontend', '<cc-element cc-id=\"style\">\r\n                              \r\n                            </cc-element>\r\n\r\n                            <cc-element cc-id=\"content\">\r\n                              <div class=\"container ui-sortable\" style=\"\">\r\n                                <div class=\"row ui-sortable\" style=\"\">\r\n                                   <div class=\"column col-md-12 ui-sortable\" style=\"\">\r\n                                    <p style=\"font-size: 14px; color: rgb(51, 51, 51); background-color: #FF8900; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\" class=\"\">.dasdasdas</p>\r\n                                   </div>\r\n                                </div>\r\n                              </div>\r\n                            </cc-element>\r\n\r\n\r\n                            <cc-element cc-id=\"script\" cc-placement=\"top\">\r\n                               \r\n                            </cc-element>', '\n                        \n                                       <li class=\"block-item ui-draggable ui-draggable-handle block-item-loaded\" data-src=\"portofolio\\/column.php\" data-block-name=\"portofolio\\\" style=\"width: 200px; right: auto; height: 56px; bottom: auto; display: list-item;\">\n                        <div class=\"nav-content-wrapper noselect ui-sortable\">\n                          <i class=\"fa fa-gear\"></i>\n                          <div class=\"tool-nav delete ui-sortable\">\n                            <i class=\"fa fa-trash\"></i> <span class=\"info-nav\">Delete</span>\n                          </div>\n                          <div class=\"tool-nav source ui-sortable\">\n                            <i class=\"fa fa-code\"></i> <span class=\"info-nav\">Source</span>\n                          </div>\n                          <div class=\"tool-nav copy ui-sortable\">\n                            <i class=\"fa fa-copy\"></i> <span class=\"info-nav\">Copy</span>\n                          </div>\n                          <div class=\"tool-nav handle ui-sortable ui-sortable-handle\">\n                            <i class=\"fa fa-arrows\"></i> <span class=\"info-nav\">Move</span>\n                          </div>\n                        </div>\n                      \n                      <div class=\"block-content editable ui-sortable\">\n                            <cc-element cc-id=\"style\">\n                              \n                            </cc-element>\n\n                            <cc-element cc-id=\"content\">\n                              <div class=\"container ui-sortable\" style=\"\">\n                                <div class=\"row ui-sortable\" style=\"\">\n                                   <div class=\"column col-md-12 ui-sortable\" style=\"\">\n                                    <p style=\"font-size: 14px; color: rgb(51, 51, 51); background-color: rgba(0, 0, 0, 0); font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\" class=\"\">.dasdasdas</p>\n                                   </div>\n                                </div>\n                              </div>\n                            </cc-element>\n\n\n                            <cc-element cc-id=\"script\" cc-placement=\"top\">\n                               \n                            </cc-element></div>\n                    </li>\n                                                          ', '', 'DOST Lab Inventory', 'inventory', 'blank', '2022-07-06 06:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `page_block_element`
--

CREATE TABLE `page_block_element` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image_preview` varchar(200) NOT NULL,
  `block_name` varchar(200) NOT NULL,
  `content_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id` int(11) UNSIGNED NOT NULL,
  `receipent_custom_query` text,
  `receipent_department` varchar(200) DEFAULT NULL,
  `primary_field` varchar(200) DEFAULT NULL,
  `table` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `message` text,
  `type` varchar(200) DEFAULT NULL,
  `data` text,
  `repeat_frequency` varchar(200) DEFAULT NULL,
  `receipent` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reminder_condition`
--

CREATE TABLE `reminder_condition` (
  `id` int(11) UNSIGNED NOT NULL,
  `cond_type` varchar(200) DEFAULT NULL,
  `cond_table` varchar(200) DEFAULT NULL,
  `cond_field` varchar(200) NOT NULL,
  `cond_operator` varchar(200) NOT NULL,
  `cond_value` varchar(255) DEFAULT NULL,
  `cond_logic` varchar(20) NOT NULL DEFAULT 'AND',
  `reminder_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reminder_cron`
--

CREATE TABLE `reminder_cron` (
  `id` int(11) UNSIGNED NOT NULL,
  `reminder_id` int(11) NOT NULL,
  `reff_id` int(11) NOT NULL,
  `reff_table` varchar(200) NOT NULL,
  `status` varchar(200) DEFAULT NULL,
  `sent_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE `rest` (
  `id` int(11) UNSIGNED NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `primary_key` varchar(200) NOT NULL,
  `x_api_key` varchar(20) DEFAULT NULL,
  `x_token` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rest`
--

INSERT INTO `rest` (`id`, `subject`, `table_name`, `primary_key`, `x_api_key`, `x_token`) VALUES
(1, 'Inventory', 'inventory', 'chemical_code', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `rest_field`
--

CREATE TABLE `rest_field` (
  `id` int(11) UNSIGNED NOT NULL,
  `rest_id` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `input_type` varchar(200) NOT NULL,
  `show_column` varchar(10) DEFAULT NULL,
  `show_add_api` varchar(10) DEFAULT NULL,
  `show_update_api` varchar(10) DEFAULT NULL,
  `show_detail_api` varchar(10) DEFAULT NULL,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rest_field`
--

INSERT INTO `rest_field` (`id`, `rest_id`, `field_name`, `field_label`, `input_type`, `show_column`, `show_add_api`, `show_update_api`, `show_detail_api`, `relation_table`, `relation_value`, `relation_label`) VALUES
(19, 1, 'chemical_code', NULL, 'input', 'yes', '', '', 'yes', '', '', ''),
(20, 1, 'name_of_pure_chemical', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(21, 1, 'chemical_formula', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(22, 1, 'location', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(23, 1, 'date_registered', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(24, 1, 'registered_by', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(25, 1, 'state_of_chemical', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(26, 1, 'chemical_color_group', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(27, 1, 'cas_no', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(28, 1, 'brand', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(29, 1, 'lot_no', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(30, 1, 'container', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(31, 1, 'storage_condition', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(32, 1, 'original_amount', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(33, 1, 'estimated_current_mount', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(34, 1, 'date_of_receipt', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(35, 1, 'received_by', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', ''),
(36, 1, 'date_of_expiration', NULL, 'input', 'yes', 'yes', 'yes', 'yes', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rest_field_validation`
--

CREATE TABLE `rest_field_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `rest_field_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rest_field_validation`
--

INSERT INTO `rest_field_validation` (`id`, `rest_field_id`, `rest_id`, `validation_name`, `validation_value`) VALUES
(18, 20, 1, 'required', ''),
(19, 21, 1, 'required', ''),
(20, 22, 1, 'required', ''),
(21, 23, 1, 'required', ''),
(22, 24, 1, 'required', ''),
(23, 25, 1, 'required', ''),
(24, 26, 1, 'required', ''),
(25, 27, 1, 'required', ''),
(26, 28, 1, 'required', ''),
(27, 29, 1, 'required', ''),
(28, 30, 1, 'required', ''),
(29, 31, 1, 'required', ''),
(30, 32, 1, 'required', ''),
(31, 33, 1, 'required', ''),
(32, 34, 1, 'required', ''),
(33, 35, 1, 'required', ''),
(34, 36, 1, 'required', '');

-- --------------------------------------------------------

--
-- Table structure for table `rest_input_type`
--

CREATE TABLE `rest_input_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(200) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `validation_group` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rest_input_type`
--

INSERT INTO `rest_input_type` (`id`, `type`, `relation`, `validation_group`) VALUES
(1, 'input', '0', 'input'),
(2, 'timestamp', '0', 'timestamp'),
(3, 'file', '0', 'file'),
(4, 'select', '1', 'select');

-- --------------------------------------------------------

--
-- Table structure for table `widgeds`
--

CREATE TABLE `widgeds` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `dashboard_id` int(11) NOT NULL,
  `widged_uuid` varchar(255) NOT NULL,
  `widged_type` varchar(255) NOT NULL,
  `sort_number` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `widged_chart`
--

CREATE TABLE `widged_chart` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `widged_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `widged_chart_series`
--

CREATE TABLE `widged_chart_series` (
  `id` int(11) UNSIGNED NOT NULL,
  `label` varchar(200) NOT NULL,
  `value_unit` varchar(200) NOT NULL,
  `data_table` varchar(255) NOT NULL,
  `data_field` varchar(255) NOT NULL,
  `formula` varchar(255) DEFAULT NULL,
  `formula_field` varchar(255) DEFAULT NULL,
  `x_axis_field` varchar(255) NOT NULL,
  `x_axis_field_type` varchar(255) NOT NULL,
  `x_axis_grouping` varchar(20) NOT NULL DEFAULT 'yes',
  `color` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `widged_chart_id` int(11) NOT NULL,
  `widged_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `widged_chart_series_condition`
--

CREATE TABLE `widged_chart_series_condition` (
  `id` int(11) UNSIGNED NOT NULL,
  `cond_field` varchar(200) NOT NULL,
  `cond_operator` varchar(200) NOT NULL,
  `cond_value` varchar(255) NOT NULL,
  `cond_logic` varchar(20) NOT NULL DEFAULT 'AND',
  `widged_series_id` int(11) NOT NULL,
  `widged_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aauth_groups`
--
ALTER TABLE `aauth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_group_to_group`
--
ALTER TABLE `aauth_group_to_group`
  ADD PRIMARY KEY (`group_id`,`subgroup_id`);

--
-- Indexes for table `aauth_login_attempts`
--
ALTER TABLE `aauth_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_perm_to_user`
--
ALTER TABLE `aauth_perm_to_user`
  ADD PRIMARY KEY (`user_id`,`perm_id`);

--
-- Indexes for table `aauth_pms`
--
ALTER TABLE `aauth_pms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_user`
--
ALTER TABLE `aauth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_users`
--
ALTER TABLE `aauth_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_user_to_group`
--
ALTER TABLE `aauth_user_to_group`
  ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Indexes for table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`);

--
-- Indexes for table `cc_options`
--
ALTER TABLE `cc_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_action`
--
ALTER TABLE `crud_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_custom_option`
--
ALTER TABLE `crud_custom_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_field`
--
ALTER TABLE `crud_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_field_condition`
--
ALTER TABLE `crud_field_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_field_configuration`
--
ALTER TABLE `crud_field_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_field_validation`
--
ALTER TABLE `crud_field_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_function`
--
ALTER TABLE `crud_function`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_input_chained`
--
ALTER TABLE `crud_input_chained`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_input_type`
--
ALTER TABLE `crud_input_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_input_validation`
--
ALTER TABLE `crud_input_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_custom_attribute`
--
ALTER TABLE `form_custom_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_custom_option`
--
ALTER TABLE `form_custom_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_field`
--
ALTER TABLE `form_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_field_validation`
--
ALTER TABLE `form_field_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`chemical_code`);

--
-- Indexes for table `inventory2`
--
ALTER TABLE `inventory2`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_type`
--
ALTER TABLE `menu_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_block_element`
--
ALTER TABLE `page_block_element`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminder_condition`
--
ALTER TABLE `reminder_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminder_cron`
--
ALTER TABLE `reminder_cron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest`
--
ALTER TABLE `rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest_field`
--
ALTER TABLE `rest_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest_field_validation`
--
ALTER TABLE `rest_field_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest_input_type`
--
ALTER TABLE `rest_input_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgeds`
--
ALTER TABLE `widgeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widged_chart`
--
ALTER TABLE `widged_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widged_chart_series`
--
ALTER TABLE `widged_chart_series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widged_chart_series_condition`
--
ALTER TABLE `widged_chart_series_condition`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aauth_groups`
--
ALTER TABLE `aauth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aauth_login_attempts`
--
ALTER TABLE `aauth_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `aauth_pms`
--
ALTER TABLE `aauth_pms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aauth_user`
--
ALTER TABLE `aauth_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aauth_users`
--
ALTER TABLE `aauth_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cc_options`
--
ALTER TABLE `cc_options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crud_action`
--
ALTER TABLE `crud_action`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_custom_option`
--
ALTER TABLE `crud_custom_option`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `crud_field`
--
ALTER TABLE `crud_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=343;

--
-- AUTO_INCREMENT for table `crud_field_condition`
--
ALTER TABLE `crud_field_condition`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_field_configuration`
--
ALTER TABLE `crud_field_configuration`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_field_validation`
--
ALTER TABLE `crud_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472;

--
-- AUTO_INCREMENT for table `crud_function`
--
ALTER TABLE `crud_function`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `crud_input_chained`
--
ALTER TABLE `crud_input_chained`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_input_type`
--
ALTER TABLE `crud_input_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `crud_input_validation`
--
ALTER TABLE `crud_input_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_custom_attribute`
--
ALTER TABLE `form_custom_attribute`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_custom_option`
--
ALTER TABLE `form_custom_option`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_field`
--
ALTER TABLE `form_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_field_validation`
--
ALTER TABLE `form_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `chemical_code` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inventory2`
--
ALTER TABLE `inventory2`
  MODIFY `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `menu_type`
--
ALTER TABLE `menu_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_block_element`
--
ALTER TABLE `page_block_element`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reminder_condition`
--
ALTER TABLE `reminder_condition`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reminder_cron`
--
ALTER TABLE `reminder_cron`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rest`
--
ALTER TABLE `rest`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rest_field`
--
ALTER TABLE `rest_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `rest_field_validation`
--
ALTER TABLE `rest_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rest_input_type`
--
ALTER TABLE `rest_input_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `widgeds`
--
ALTER TABLE `widgeds`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widged_chart`
--
ALTER TABLE `widged_chart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widged_chart_series`
--
ALTER TABLE `widged_chart_series`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widged_chart_series_condition`
--
ALTER TABLE `widged_chart_series_condition`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
