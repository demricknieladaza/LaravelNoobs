-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 01:52 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scope_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_specific_information_tbl`
--

CREATE TABLE `area_specific_information_tbl` (
  `area_id` int(11) NOT NULL,
  `project_record_id` int(11) DEFAULT NULL,
  `adjacent_uses` varchar(255) DEFAULT '0',
  `history` varchar(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_specific_information_tbl`
--

INSERT INTO `area_specific_information_tbl` (`area_id`, `project_record_id`, `adjacent_uses`, `history`) VALUES
(1, 1, 'Residential', 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `bid_approach_tbl`
--

CREATE TABLE `bid_approach_tbl` (
  `bid_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT NULL,
  `comments_on_constraints` text NOT NULL,
  `comments_images` text NOT NULL,
  `solutions` text NOT NULL,
  `solutions_images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_approach_tbl`
--

INSERT INTO `bid_approach_tbl` (`bid_id`, `tender_id`, `comments_on_constraints`, `comments_images`, `solutions`, `solutions_images`) VALUES
(1, 867, '1^2', '0', '3^4^', '0'),
(2, 867, '5^6', '0', '7^8^', '0'),
(3, 867, '^', '0', '^^', '0'),
(4, 867, '13^14', 'lap_1540543418_.jpg/lap_1540543418_.png', '15^16', 'lap_1540543418_.png/pano mo nasabi_1540543418_.png'),
(5, 867, 'test 1^test 2', 'Architect_1541587734_.png', 'test 3^test 4', 'Facade Engineer_1541587734_.png'),
(6, 867, 'test 1^test 2', 'lap_1541588129_.jpg', 'test 3^test 4', 'justine-cruz-axe2_1541588129_.jpg'),
(7, 867, 'test 1^test 2', 'lap_1541588353_.jpg', 'test 3^test 4', 'justine-cruz-axe2_1541588353_.jpg'),
(8, 867, 'sure 1^sure 2', 'lap_1541588388_.jpg', 'sure 3^sure 4', 'justine-cruz-axe2_1541588388_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bid_individuals_tbl`
--

CREATE TABLE `bid_individuals_tbl` (
  `bid_ind_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `ind_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_individuals_tbl`
--

INSERT INTO `bid_individuals_tbl` (`bid_ind_id`, `tender_id`, `ind_id`) VALUES
(7, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bid_quality_assurance_tbl`
--

CREATE TABLE `bid_quality_assurance_tbl` (
  `bid_assurance_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT '0',
  `created_by_fname` varchar(50) DEFAULT '0',
  `created_by_sname` varchar(50) DEFAULT '0',
  `created_by_date` varchar(50) DEFAULT '0',
  `checked_by_fname` varchar(50) DEFAULT '0',
  `checked_by_sname` varchar(50) DEFAULT '0',
  `checked_by_date` varchar(50) DEFAULT '0',
  `approved_by_fname` varchar(50) DEFAULT '0',
  `approved_by_sname` varchar(50) DEFAULT '0',
  `approved_by_date` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_quality_assurance_tbl`
--

INSERT INTO `bid_quality_assurance_tbl` (`bid_assurance_id`, `tender_id`, `created_by_fname`, `created_by_sname`, `created_by_date`, `checked_by_fname`, `checked_by_sname`, `checked_by_date`, `approved_by_fname`, `approved_by_sname`, `approved_by_date`) VALUES
(1, 867, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 867, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 867, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 867, NULL, 'sda', '02-2012', 'gh', 'hgf', '03-2012', 'wqe', 'ew', '06-2013');

-- --------------------------------------------------------

--
-- Table structure for table `bid_records_tbl`
--

CREATE TABLE `bid_records_tbl` (
  `bid_id` int(11) NOT NULL,
  `project_record_id` int(11) NOT NULL DEFAULT '0',
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_records_tbl`
--

INSERT INTO `bid_records_tbl` (`bid_id`, `project_record_id`, `tender_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 181, 867, 6, '2018-11-07 05:35:07', '2018-11-07 05:35:07'),
(2, 1, 1, 20, '2018-11-12 07:29:09', '2018-11-12 07:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `company_tbl`
--

CREATE TABLE `company_tbl` (
  `comp_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `comp_email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_tbl`
--

INSERT INTO `company_tbl` (`comp_id`, `u_id`, `comp_name`, `comp_email`, `created_at`) VALUES
(1, 1, 'Makati Development Corporation', 'demricknieladaza@gmail.com', '2018-10-26 08:13:24'),
(2, 2, 'Secure Quality Construction', 'drigs@gmail.com', '2018-10-26 08:13:24'),
(5, 3, 'Jejors Construction', 'rajr@gmail.com', '2018-10-26 08:17:02'),
(6, 4, 'SAMTRON Construction Co.', 'rick@gmail.com', '2018-10-26 08:17:02'),
(7, 6, 'SSS', 'r@gmail.com', '2018-10-26 08:17:02'),
(8, 5, 'Creative Cons.', 'c@gmail.com', '2018-10-26 08:17:02'),
(9, 7, 'asdasd', 'asdasd@gmail.com', '2018-10-26 08:17:02'),
(10, 8, 'coddd', 'gids@gmail.com', '2018-10-26 08:17:02'),
(11, 9, 'Concentrix', 'sujitadojayjay@gmail.com', '2018-10-26 08:17:02'),
(12, 10, 'Concentrix', 'sujitadojayjay@gmail.com', '2018-10-26 08:17:02'),
(13, 11, 'SCOPE', 'bmt2007@web.de', '2018-10-26 08:17:02'),
(14, 12, 'GD comp', 'gd@gmail.com', '2018-10-26 08:17:02'),
(25, 13, 'test', 'test@gmail.com', '2018-10-26 08:18:16'),
(26, 14, 'test1', 'test1@gmail.com', '2018-10-26 08:18:16'),
(27, 15, 'DF Solutions', 'jayger.labadan@ustp.edu.ph', '2018-10-26 08:19:10'),
(28, 16, 'test2', 'r@gmail.com', '2018-10-26 08:19:10'),
(29, 20, 'Vista Land', 'vista@gmail.com', '2018-10-26 08:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `constraints_tbl`
--

CREATE TABLE `constraints_tbl` (
  `constraint_id` int(11) NOT NULL,
  `constraint` varchar(255) DEFAULT '0',
  `project_record_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constraints_tbl`
--

INSERT INTO `constraints_tbl` (`constraint_id`, `constraint`, `project_record_id`) VALUES
(4, 'Tunnel one', 1),
(5, 'Tunnel two', 1),
(6, 'Tunnel Three', 1);

-- --------------------------------------------------------

--
-- Table structure for table `drafted_tenders_tbl`
--

CREATE TABLE `drafted_tenders_tbl` (
  `dt_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `project_record_id` int(11) NOT NULL DEFAULT '0',
  `tender_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `individuals_accredation_tbl`
--

CREATE TABLE `individuals_accredation_tbl` (
  `accredatation_id` int(11) NOT NULL,
  `ind_id` int(11) DEFAULT '0',
  `accredatation_name` varchar(255) DEFAULT '0',
  `accredatation_year` varchar(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_accredation_tbl`
--

INSERT INTO `individuals_accredation_tbl` (`accredatation_id`, `ind_id`, `accredatation_name`, `accredatation_year`) VALUES
(1, 1, 'AMCIOB', '2018'),
(2, 1, 'AP', '2017'),
(3, 2, 'RIBA', '2016'),
(4, 10, 'AMCIOB', '2018'),
(5, 10, 'AP', '2017'),
(6, 2, 'AP', '2017'),
(7, 2, 'AMCIOB', '2017'),
(8, 11, 'AMCIOB', '2015'),
(9, 12, 'AMCIOB', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_awards_tbl`
--

CREATE TABLE `individuals_awards_tbl` (
  `award_id` int(11) NOT NULL,
  `ind_id` int(11) DEFAULT '0',
  `award_name` varchar(50) DEFAULT '0',
  `awarded_by` varchar(50) DEFAULT '0',
  `award_year` varchar(50) DEFAULT '0',
  `award_details` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_awards_tbl`
--

INSERT INTO `individuals_awards_tbl` (`award_id`, `ind_id`, `award_name`, `awarded_by`, `award_year`, `award_details`) VALUES
(1, 1, 'test', 'test', '2011', 'test'),
(2, 1, 'test1', 'test2', '2013', 'test23'),
(3, 2, 'test123', 'test', '2005', 'test'),
(4, 10, 'test', 'test', '2011', 'test'),
(5, 10, 'test1', 'test2', '2013', 'test23'),
(6, 2, 'testing', 'tests', '2004', 'qwqweqwe'),
(7, 11, 'test', 'test', '2004', 'test'),
(8, 12, 'test', 'test', '2008', 'tset');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_degrees_tbl`
--

CREATE TABLE `individuals_degrees_tbl` (
  `degree_id` int(11) NOT NULL,
  `ind_id` int(11) DEFAULT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `degree_year` varchar(50) DEFAULT NULL,
  `name_of_degree` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_degrees_tbl`
--

INSERT INTO `individuals_degrees_tbl` (`degree_id`, `ind_id`, `degree`, `degree_year`, `name_of_degree`) VALUES
(1, 1, 'PhD', '2015', 'degree'),
(2, 1, 'BBA', '2016', 'degreeees'),
(3, 2, 'B.A.Sc.', '2017', 'tetst'),
(4, 10, 'PhD', '2015', 'degree'),
(5, 10, 'BBA', '2016', 'degreeees'),
(6, 2, 'B.Des.Arch.', '2018', 'test'),
(7, 11, 'B.Des.Arch.', '2017', 'test'),
(8, 12, 'BEC', '2007', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_project_tbl`
--

CREATE TABLE `individuals_project_tbl` (
  `indp_id` int(11) NOT NULL,
  `ind_id` int(11) DEFAULT NULL,
  `project_title` varchar(255) DEFAULT NULL,
  `project_value` int(11) DEFAULT NULL,
  `type_of_development` varchar(255) DEFAULT ' ',
  `project_description` text,
  `profile_images` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_project_tbl`
--

INSERT INTO `individuals_project_tbl` (`indp_id`, `ind_id`, `project_title`, `project_value`, `type_of_development`, `project_description`, `profile_images`) VALUES
(8, 11, 'testagain', 150000, 'New Built,Demolition', 'test', 'Penguins_1541754900_.jpg'),
(9, 12, 'tset', 1820000, NULL, 'testset', NULL),
(10, 1, 'testests', 800000, 'New Built,Demolition', 'test', 'Chrysanthemum_1541759833_.jpg/Desert_1541759833_.jpg/Hydrangeas_1541759833_.jpg/Jellyfish_1541759833_.jpg/Koala_1541759833_.jpg/Lighthouse_1541759833_.jpg/Penguins_1541759833_.jpg'),
(11, 1, 'Mao nani', 1500000, '', 'test', 'Koala_1541759980_.jpg'),
(12, 2, 'test', 15132152, '', '1', NULL),
(13, 2, 'test', 15132152, NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `individuals_service_tbl`
--

CREATE TABLE `individuals_service_tbl` (
  `serv_id` int(11) NOT NULL,
  `indp_id` int(11) DEFAULT NULL,
  `service_name` varchar(50) DEFAULT NULL,
  `from` varchar(50) DEFAULT NULL,
  `until` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_service_tbl`
--

INSERT INTO `individuals_service_tbl` (`serv_id`, `indp_id`, `service_name`, `from`, `until`) VALUES
(1, 8, 'Project Manager', '04-2018', '04-2018'),
(2, 9, 'Security Consultant', '01-2018', '04-2018'),
(3, 10, 'Principal Designer', '01-2018', '04-2018'),
(4, 11, 'Architect', '01-2018', '03-2018'),
(5, 12, 'Architect', '02-2018', '03-2018'),
(6, 9, 'Acoustic Engineer', '01-2018', '04-2018');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_tbl`
--

CREATE TABLE `individuals_tbl` (
  `ind_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT '0',
  `last_name` varchar(50) DEFAULT '0',
  `seniority` varchar(50) DEFAULT '0',
  `services` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_tbl`
--

INSERT INTO `individuals_tbl` (`ind_id`, `first_name`, `last_name`, `seniority`, `services`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Demrick', 'Adaza', '1', 'Acoustic engineer,Lighting consultant,Security consultant,Structural engineer', 20, '2018-11-08 09:37:43', '2018-11-08 09:37:43'),
(2, 'ben', 'elebentwelb', '1', 'Building control,Lighting consultant,Security consultant,Service engineer', 20, '2018-11-08 09:45:03', '2018-11-08 09:45:03'),
(8, 'test', 'test', NULL, '', 20, '2018-11-08 10:18:14', '2018-11-08 10:18:14'),
(9, 'testset', 'setset', NULL, '', 20, '2018-11-08 10:34:09', '2018-11-08 10:34:09'),
(11, 'test', 'test', '1', 'Acoustic engineer,Building control,Planning consultant,Structural engineer', 20, '2018-11-09 09:15:00', '2018-11-09 09:15:00'),
(12, 'seben', 'ten', '1', 'Acoustic engineer,Building control,Quantity surveyor,Service engineer', 20, '2018-11-09 09:21:08', '2018-11-09 09:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_team_tbl`
--

CREATE TABLE `individuals_team_tbl` (
  `team_id` int(11) NOT NULL,
  `indp_id` int(11) DEFAULT '0',
  `position` varchar(50) DEFAULT '0',
  `company` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_team_tbl`
--

INSERT INTO `individuals_team_tbl` (`team_id`, `indp_id`, `position`, `company`) VALUES
(1, 8, 'Fire Engineer', 'test'),
(2, 9, 'Project Manager', 'tset'),
(3, 12, 'Facade Engineer', 'qwee'),
(4, 9, 'Acoustic Engineer', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_use_tbl`
--

CREATE TABLE `individuals_use_tbl` (
  `use_id` int(11) NOT NULL,
  `indp_id` int(11) DEFAULT '0',
  `use_name` varchar(50) DEFAULT '0',
  `use_area` int(11) DEFAULT '0',
  `use_units` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_use_tbl`
--

INSERT INTO `individuals_use_tbl` (`use_id`, `indp_id`, `use_name`, `use_area`, `use_units`) VALUES
(1, 8, 'Office', 150000, 150),
(2, 9, 'Retail', 152, 123),
(3, 10, 'Residential', 250000, 150),
(4, 11, 'Aviation', 150200, 1),
(5, 12, 'Healthcare', 1, 1),
(6, 13, 'Aviation', 1, 1),
(7, 13, 'Healthcare', 1, 1),
(8, 13, 'Residential', 1520, 163),
(9, 12, 'Commercial ', 1, 2),
(10, 9, 'Aviation', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `meetings_tbl`
--

CREATE TABLE `meetings_tbl` (
  `meeting_id` int(11) NOT NULL,
  `design_team_meeting` varchar(255) DEFAULT '0',
  `project_progress_meeting` varchar(255) DEFAULT '0',
  `project_record_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings_tbl`
--

INSERT INTO `meetings_tbl` (`meeting_id`, `design_team_meeting`, `project_progress_meeting`, `project_record_id`) VALUES
(1, 'Tuesday', 'Wednesday', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_08_06_124156_create_user_accounts_models_table', 1),
(4, '2018_09_08_043610_project_information', 2),
(6, '2018_09_08_080728_project_information_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `milestones_tbl`
--

CREATE TABLE `milestones_tbl` (
  `milestone_id` int(11) NOT NULL,
  `riba_stage` varchar(50) DEFAULT '0',
  `date` varchar(50) DEFAULT NULL,
  `project_record_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milestones_tbl`
--

INSERT INTO `milestones_tbl` (`milestone_id`, `riba_stage`, `date`, `project_record_id`) VALUES
(2, 'RIBA Stage 1,RIBA Stage 2', '01/03/2018,01/21/2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organisation_awards_tbl`
--

CREATE TABLE `organisation_awards_tbl` (
  `oa_id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `award_name` varchar(255) DEFAULT NULL,
  `award_details` varchar(255) DEFAULT NULL,
  `award_year` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisation_project_service_tbl`
--

CREATE TABLE `organisation_project_service_tbl` (
  `ops_id` int(11) NOT NULL,
  `op_id` int(11) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `from` varchar(50) DEFAULT NULL,
  `until` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_project_service_tbl`
--

INSERT INTO `organisation_project_service_tbl` (`ops_id`, `op_id`, `service`, `from`, `until`) VALUES
(1, 1, 'BIM Consultant', '01-2018', '04-2018'),
(2, 2, 'Architect', '01-2018', '04-2018'),
(3, 3, 'Building Control', '01-2018', '04-2018'),
(4, 4, 'Facade Engineer', '01-2018', '04-2018');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_project_tbl`
--

CREATE TABLE `organisation_project_tbl` (
  `op_id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `project_title` varchar(50) DEFAULT NULL,
  `project_value` int(11) DEFAULT NULL,
  `type_of_development` varchar(50) DEFAULT NULL,
  `project_description` text,
  `project_images` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_project_tbl`
--

INSERT INTO `organisation_project_tbl` (`op_id`, `org_id`, `project_title`, `project_value`, `type_of_development`, `project_description`, `project_images`) VALUES
(1, 4, 'test1', 152000, 'New built,Demolition', 'test', 'Chrysanthemum_1541741402_.jpg/Koala_1541741402_.jpg'),
(2, 4, 'test2', 152000, 'New built,Refurbishment', 'tets', 'Chrysanthemum_1541742002_.jpg/Desert_1541742002_.jpg/Hydrangeas_1541742002_.jpg/Jellyfish_1541742002_.jpg/Koala_1541742002_.jpg'),
(3, 4, 'test3', 15422, 'New built,Demolition,Refurbishment', 'test', 'Chrysanthemum_1541742186_.jpg'),
(4, 4, 'test1232', 132456, 'New built,Demolition', 'test', 'Tulips - Copy_1541742469_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_project_team_tbl`
--

CREATE TABLE `organisation_project_team_tbl` (
  `opt_id` int(11) NOT NULL,
  `op_id` int(11) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_project_team_tbl`
--

INSERT INTO `organisation_project_team_tbl` (`opt_id`, `op_id`, `position`, `company`) VALUES
(1, 1, 'BIM Consultant', 'tet'),
(2, 1, 'Architect', 'teee'),
(5, 2, 'Architect', 'tet'),
(6, 3, 'Quantity Surveyor', '123'),
(7, 4, 'Acoustic Engineer', '123');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_project_use_tbl`
--

CREATE TABLE `organisation_project_use_tbl` (
  `opu_id` int(11) NOT NULL,
  `op_id` int(11) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `units` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_project_use_tbl`
--

INSERT INTO `organisation_project_use_tbl` (`opu_id`, `op_id`, `service`, `area`, `units`) VALUES
(1, 1, 'Bridges', '52400', '1'),
(2, 2, 'Commercial', '350000', '100'),
(3, 3, 'Education', '125', '123'),
(4, 4, 'Aviation', '150000', '150'),
(5, 4, 'Commercial', '250000', '250');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_services_tbl`
--

CREATE TABLE `organisation_services_tbl` (
  `os_id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `from` varchar(50) DEFAULT NULL,
  `until` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisation_tbl`
--

CREATE TABLE `organisation_tbl` (
  `org_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `office_address` text,
  `logo` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_tbl`
--

INSERT INTO `organisation_tbl` (`org_id`, `company_name`, `office_address`, `logo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', NULL, 0, NULL, NULL),
(4, 'Vista Land', 'Unahan tulay', NULL, 20, '2018-11-09 05:39:01', '2018-11-09 05:39:01'),
(5, NULL, NULL, NULL, 6, '2018-11-12 04:45:46', '2018-11-12 04:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `project_employer_tbl`
--

CREATE TABLE `project_employer_tbl` (
  `record_id` int(11) NOT NULL,
  `project_record_id` int(11) NOT NULL DEFAULT '0',
  `office_address` varchar(255) NOT NULL DEFAULT '0',
  `industry` varchar(255) NOT NULL DEFAULT '0',
  `year_established` varchar(255) NOT NULL DEFAULT '0',
  `num_of_employees` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_information_tbl`
--

CREATE TABLE `project_information_tbl` (
  `project_record_id` int(11) NOT NULL,
  `project_title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `location` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `type_of_development` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `construction_value` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `procurement_route` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `site_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'No File Uploaded',
  `programme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'No File Uploaded',
  `policy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'No File Uploaded',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_information_tbl`
--

INSERT INTO `project_information_tbl` (`project_record_id`, `project_title`, `location`, `type_of_development`, `construction_value`, `procurement_route`, `user_id`, `site_plan`, `programme`, `policy`, `created_at`, `updated_at`) VALUES
(1, 'Master plan', 'Canada Water', 'New Built,Refurbishment', '3000000', 'Design & Build', 6, 'Site Plan_1541669503_.docx', 'Programme_1541669503_.docx', 'Policy_1541669503_.docx', '2018-11-08 09:31:44', '2018-11-12 18:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `project_team_tbl`
--

CREATE TABLE `project_team_tbl` (
  `project_team_id` int(11) NOT NULL,
  `member_position` varchar(50) DEFAULT '0',
  `member_name` varchar(50) DEFAULT '0',
  `project_record_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_team_tbl`
--

INSERT INTO `project_team_tbl` (`project_team_id`, `member_position`, `member_name`, `project_record_id`) VALUES
(2, 'Architect,Fire Engineer', 'Allison Morris,Bob Ashe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_for_proposal_tbl`
--

CREATE TABLE `request_for_proposal_tbl` (
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `project_record_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saved_tenders_tbl`
--

CREATE TABLE `saved_tenders_tbl` (
  `sv_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `project_record_id` int(11) DEFAULT NULL,
  `tender_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submitted_tenders_tbl`
--

CREATE TABLE `submitted_tenders_tbl` (
  `sb_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `project_record_id` int(11) NOT NULL DEFAULT '0',
  `tender_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitted_tenders_tbl`
--

INSERT INTO `submitted_tenders_tbl` (`sb_id`, `user_id`, `project_record_id`, `tender_id`) VALUES
(1, 20, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tender_added_advice_tbl`
--

CREATE TABLE `tender_added_advice_tbl` (
  `added_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `num` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_added_advice_tbl`
--

INSERT INTO `tender_added_advice_tbl` (`added_id`, `tender_id`, `name`, `num`) VALUES
(1, 1, 'test 1', '0,1,2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `tender_added_deliverables_tbl`
--

CREATE TABLE `tender_added_deliverables_tbl` (
  `added_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `details` text NOT NULL,
  `raci` varchar(50) NOT NULL DEFAULT '0',
  `num` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_added_deliverables_tbl`
--

INSERT INTO `tender_added_deliverables_tbl` (`added_id`, `tender_id`, `name`, `details`, `raci`, `num`) VALUES
(1, 1, 'test 1', 'test 1', 'R,A,C,I', '0,1,2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `tender_added_design_tbl`
--

CREATE TABLE `tender_added_design_tbl` (
  `added_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_added_design_tbl`
--

INSERT INTO `tender_added_design_tbl` (`added_id`, `tender_id`, `name`, `question`) VALUES
(1, 1, 'test 1', 'test 1');

-- --------------------------------------------------------

--
-- Table structure for table `tender_added_meetings_tbl`
--

CREATE TABLE `tender_added_meetings_tbl` (
  `added_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '0',
  `purpose` text NOT NULL,
  `attendees` text NOT NULL,
  `duration` text NOT NULL,
  `reoccurence` text NOT NULL,
  `arrange` varchar(50) NOT NULL DEFAULT '0',
  `num` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_added_meetings_tbl`
--

INSERT INTO `tender_added_meetings_tbl` (`added_id`, `tender_id`, `name`, `purpose`, `attendees`, `duration`, `reoccurence`, `arrange`, `num`) VALUES
(1, 1, 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'Arrange,Attend,Minute', '0,1,2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `tender_appointment_tbl`
--

CREATE TABLE `tender_appointment_tbl` (
  `tender_appointment_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT '0',
  `insurance_name` text,
  `insurance_level` varchar(50) DEFAULT '0',
  `bonds` text,
  `collateral_warranties` varchar(50) DEFAULT '0',
  `limit_of_liability` varchar(50) DEFAULT '0',
  `form_of_appointment` varchar(50) DEFAULT NULL,
  `documents_for_signature` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_appointment_tbl`
--

INSERT INTO `tender_appointment_tbl` (`tender_appointment_id`, `tender_id`, `insurance_name`, `insurance_level`, `bonds`, `collateral_warranties`, `limit_of_liability`, `form_of_appointment`, `documents_for_signature`) VALUES
(1, 1, 'Public Liability,Products Liability', '1,2', 'Conditional/On Default Bond,Select Bonds,Tender/Bid Bond', 'Collateral Warranties', '3', 'Site Plan Edited_1541673847_.docx', 'Site Plan_1541673848_.docx'),
(2, 1, 'Public Liability,Products Liability', '1,2', 'Conditional/On Default Bond,Select Bonds,Tender/Bid Bond', 'Collateral Warranties', '3', 'Site Plan Edited_1541673914_.docx', 'Site Plan_1541673914_.docx'),
(3, 1, 'Products Liability,Employers Liability', '1,2', 'Conditional/On Default Bond,Parent Company Guarantee,Tender/Bid Bond', 'Third Party Rights', '3', 'Site Plan_1541674527_.docx', 'Site Plan Edited_1541674527_.docx'),
(4, 1, 'Products Liability,Employers Liability', '1,2', 'Conditional/On Default Bond,Parent Company Guarantee,Tender/Bid Bond', 'Third Party Rights', '3', 'Site Plan_1541674577_.docx', 'Site Plan Edited_1541674577_.docx'),
(5, 1, 'Products Liability,Employers Liability', '1,2', 'Conditional/On Default Bond,Parent Company Guarantee,Tender/Bid Bond', 'Third Party Rights', '3', 'Site Plan_1541674674_.docx', 'Site Plan Edited_1541674674_.docx'),
(6, 1, 'Products Liability,Employers Liability', '1,2', 'Conditional/On Default Bond,Parent Company Guarantee,Tender/Bid Bond', 'Third Party Rights', '3', 'Site Plan_1541674801_.docx', 'Site Plan Edited_1541674801_.docx'),
(7, 1, 'Products Liability,Employers Liability', '1,2', 'Conditional/On Default Bond,Parent Company Guarantee,Tender/Bid Bond', 'Third Party Rights', '3', 'Site Plan_1541674857_.docx', 'Site Plan Edited_1541674857_.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tender_bonds_tbl`
--

CREATE TABLE `tender_bonds_tbl` (
  `bonds_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT '0',
  `bond_name` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_comp_invite`
--

CREATE TABLE `tender_comp_invite` (
  `invite_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_evaluation_tbl`
--

CREATE TABLE `tender_evaluation_tbl` (
  `tender_eval_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `qualitative` int(11) DEFAULT '0',
  `quantitative` int(11) DEFAULT '0',
  `risk` int(11) DEFAULT '0',
  `organisation` int(11) DEFAULT '0',
  `organisation_project_exp` int(11) DEFAULT '0',
  `organisation_variety_of_services` int(11) DEFAULT '0',
  `organisation_awards` int(11) DEFAULT '0',
  `organisation_accreditations` int(11) DEFAULT '0',
  `orgranisation_relationship` int(11) DEFAULT '0',
  `individual` int(11) DEFAULT '0',
  `individual_project_exp` int(11) DEFAULT '0',
  `individual_years_exp` int(11) DEFAULT '0',
  `individual_industry_exp` int(11) DEFAULT '0',
  `individual_awards` int(11) DEFAULT '0',
  `individual_accrediations` int(11) DEFAULT '0',
  `individual_relationship` int(11) DEFAULT '0',
  `individual_communication_skills` int(11) DEFAULT '0',
  `individual_people_management` int(11) DEFAULT '0',
  `individual_time_management` int(11) DEFAULT '0',
  `individual_pro_active` int(11) DEFAULT '0',
  `individual_social_behavior` int(11) DEFAULT '0',
  `individual_hard_skills` int(11) DEFAULT '0',
  `insurances` int(11) DEFAULT '0',
  `bonds` int(11) DEFAULT '0',
  `third_parties` int(11) DEFAULT '0',
  `limit_of_liability` int(11) DEFAULT '0',
  `net_contribution_clause` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_evaluation_tbl`
--

INSERT INTO `tender_evaluation_tbl` (`tender_eval_id`, `tender_id`, `qualitative`, `quantitative`, `risk`, `organisation`, `organisation_project_exp`, `organisation_variety_of_services`, `organisation_awards`, `organisation_accreditations`, `orgranisation_relationship`, `individual`, `individual_project_exp`, `individual_years_exp`, `individual_industry_exp`, `individual_awards`, `individual_accrediations`, `individual_relationship`, `individual_communication_skills`, `individual_people_management`, `individual_time_management`, `individual_pro_active`, `individual_social_behavior`, `individual_hard_skills`, `insurances`, `bonds`, `third_parties`, `limit_of_liability`, `net_contribution_clause`) VALUES
(1, 1, 30, 50, 20, 30, 70, 10, 5, 5, 10, 70, 20, 15, 0, 5, 5, 5, 10, 5, 5, 10, 5, 15, 30, 30, 15, 15, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tender_pre_qualification_tbl`
--

CREATE TABLE `tender_pre_qualification_tbl` (
  `pre_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_pre_qualification_tbl`
--

INSERT INTO `tender_pre_qualification_tbl` (`pre_id`, `tender_id`, `question`) VALUES
(1, 1, 'What Is Lorem Ipsum?^What Is Lorem Ipsum?^What Is Lorem Ipsum?');

-- --------------------------------------------------------

--
-- Table structure for table `tender_quality_assurance_statements_tbl`
--

CREATE TABLE `tender_quality_assurance_statements_tbl` (
  `statement_id` int(11) NOT NULL,
  `quality_id` int(11) DEFAULT '0',
  `statement` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_quality_assurance_tbl`
--

CREATE TABLE `tender_quality_assurance_tbl` (
  `quality_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT NULL,
  `created_by_fname` varchar(50) DEFAULT NULL,
  `created_by_lname` varchar(50) DEFAULT NULL,
  `date_created` varchar(50) DEFAULT NULL,
  `checked_by_fname` varchar(50) DEFAULT NULL,
  `checked_by_lname` varchar(50) DEFAULT NULL,
  `date_checked` varchar(50) DEFAULT NULL,
  `approved_by_fname` varchar(50) DEFAULT NULL,
  `approved_by_lname` varchar(50) DEFAULT NULL,
  `date_approved` varchar(50) DEFAULT NULL,
  `statement` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_queries_tbl`
--

CREATE TABLE `tender_queries_tbl` (
  `tender_query_id` int(11) NOT NULL,
  `project_record_id` int(11) DEFAULT '0',
  `tender_id` int(11) DEFAULT '0',
  `question` varchar(255) DEFAULT '0',
  `response` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_scope_advise_on_tbl`
--

CREATE TABLE `tender_scope_advise_on_tbl` (
  `advise_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `advise_one` varchar(50) DEFAULT '8',
  `advise_two` varchar(50) DEFAULT '8',
  `advise_three` varchar(50) DEFAULT '8',
  `advise_four` varchar(50) DEFAULT '8',
  `advise_five` varchar(50) DEFAULT '8',
  `advise_six` varchar(50) DEFAULT '8',
  `monitor_one` varchar(50) DEFAULT '8',
  `monitor_two` varchar(50) DEFAULT '8',
  `monitor_three` varchar(50) DEFAULT '8',
  `collab_one` varchar(50) DEFAULT '8',
  `collab_two` varchar(50) DEFAULT '8',
  `collab_three` varchar(50) DEFAULT '8',
  `collab_four` varchar(50) DEFAULT '8',
  `coordinate_one` varchar(50) DEFAULT '8',
  `coordinate_two` varchar(50) DEFAULT '8',
  `other_one` varchar(50) DEFAULT '8',
  `other_two` varchar(50) DEFAULT '8',
  `other_three` varchar(50) DEFAULT '8',
  `other_four` varchar(50) DEFAULT '8'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_scope_advise_on_tbl`
--

INSERT INTO `tender_scope_advise_on_tbl` (`advise_id`, `tender_id`, `advise_one`, `advise_two`, `advise_three`, `advise_four`, `advise_five`, `advise_six`, `monitor_one`, `monitor_two`, `monitor_three`, `collab_one`, `collab_two`, `collab_three`, `collab_four`, `coordinate_one`, `coordinate_two`, `other_one`, `other_two`, `other_three`, `other_four`) VALUES
(7, 1, '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0.1.2.3.4.5.6.7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `tender_scope_deliverables_tbl`
--

CREATE TABLE `tender_scope_deliverables_tbl` (
  `deliverables_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT '0',
  `strategic_brief` varchar(255) DEFAULT '0',
  `project_programme` varchar(255) DEFAULT '0',
  `feasibility_study` varchar(255) DEFAULT '0',
  `design_responsibility` varchar(255) DEFAULT '0',
  `site_information` varchar(255) DEFAULT '0',
  `information_exchange_strategy` varchar(255) DEFAULT '0',
  `project_brief` varchar(255) DEFAULT '0',
  `risk_assessment` varchar(255) DEFAULT '0',
  `handover_strategy` varchar(255) DEFAULT '0',
  `project_execution_plan` varchar(255) DEFAULT '0',
  `design_proposal` varchar(255) DEFAULT '0',
  `strategic_raci` varchar(50) DEFAULT '8',
  `strategic_num` varchar(50) DEFAULT '8',
  `pprogramme_raci` varchar(50) DEFAULT '8',
  `pprogramme_num` varchar(50) DEFAULT '8',
  `feasibility_raci` varchar(50) DEFAULT '8',
  `feasibility_num` varchar(50) DEFAULT '8',
  `design_raci` varchar(50) DEFAULT '8',
  `design_num` varchar(50) DEFAULT '8',
  `site_raci` varchar(50) DEFAULT '8',
  `site_num` varchar(50) DEFAULT '8',
  `information_raci` varchar(50) DEFAULT '8',
  `information_num` varchar(50) DEFAULT '8',
  `project_raci` varchar(50) DEFAULT '8',
  `project_num` varchar(50) DEFAULT '8',
  `risk_raci` varchar(50) DEFAULT '8',
  `risk_num` varchar(50) DEFAULT '8',
  `handover_raci` varchar(50) DEFAULT '8',
  `handover_num` varchar(50) DEFAULT '8',
  `execution_raci` varchar(50) DEFAULT '8',
  `execution_num` varchar(50) DEFAULT '8',
  `proposal_raci` varchar(50) DEFAULT '8',
  `proposal_num` varchar(50) DEFAULT '8'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_scope_deliverables_tbl`
--

INSERT INTO `tender_scope_deliverables_tbl` (`deliverables_id`, `tender_id`, `strategic_brief`, `project_programme`, `feasibility_study`, `design_responsibility`, `site_information`, `information_exchange_strategy`, `project_brief`, `risk_assessment`, `handover_strategy`, `project_execution_plan`, `design_proposal`, `strategic_raci`, `strategic_num`, `pprogramme_raci`, `pprogramme_num`, `feasibility_raci`, `feasibility_num`, `design_raci`, `design_num`, `site_raci`, `site_num`, `information_raci`, `information_num`, `project_raci`, `project_num`, `risk_raci`, `risk_num`, `handover_raci`, `handover_num`, `execution_raci`, `execution_num`, `proposal_raci`, `proposal_num`) VALUES
(7, 1, 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `tender_scope_design_considerations_tbl`
--

CREATE TABLE `tender_scope_design_considerations_tbl` (
  `design_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT '0',
  `question_one_applies_to` varchar(255) DEFAULT '0',
  `question_two_applies_to` varchar(255) DEFAULT '0',
  `question_three_applies_to` varchar(255) DEFAULT '0',
  `question_four_applies_to` varchar(255) DEFAULT '0',
  `question_five_applies_to` varchar(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_scope_design_considerations_tbl`
--

INSERT INTO `tender_scope_design_considerations_tbl` (`design_id`, `tender_id`, `question_one_applies_to`, `question_two_applies_to`, `question_three_applies_to`, `question_four_applies_to`, `question_five_applies_to`) VALUES
(7, 1, 'test 1', 'test 1', 'test 1', 'test 1', 'test 1');

-- --------------------------------------------------------

--
-- Table structure for table `tender_scope_meetings_tbl`
--

CREATE TABLE `tender_scope_meetings_tbl` (
  `meeting_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT '0',
  `pre_app_purpose` varchar(255) DEFAULT '0',
  `pre_app_attendees` varchar(255) DEFAULT '0',
  `pre_app_assumed_duration` varchar(255) DEFAULT '0',
  `pre_app_reoccurence` varchar(255) DEFAULT '0',
  `site_visits_purpose` varchar(255) DEFAULT '0',
  `site_visits_attendees` varchar(255) DEFAULT '0',
  `site_visits_assumed_duration` varchar(255) DEFAULT '0',
  `site_visits_reoccurence` varchar(255) DEFAULT '0',
  `riba_purpose` varchar(255) DEFAULT '0',
  `riba_attendees` varchar(255) DEFAULT '0',
  `riba_assumed_duration` varchar(255) DEFAULT '0',
  `riba_reoccurence` varchar(255) DEFAULT '0',
  `inspection_purpose` varchar(255) DEFAULT '0',
  `inspection_attendees` varchar(255) DEFAULT '0',
  `inspection_assumed_duration` varchar(255) DEFAULT '0',
  `inspection_reoccurence` varchar(255) DEFAULT '0',
  `pre_app_choice` varchar(50) DEFAULT NULL,
  `pre_app_num` varchar(50) DEFAULT '8',
  `site_visits_choice` varchar(50) DEFAULT NULL,
  `site_visits_num` varchar(50) DEFAULT '8',
  `riba_choice` varchar(50) DEFAULT NULL,
  `riba_num` varchar(50) DEFAULT '8',
  `site_inspection_choice` varchar(50) DEFAULT NULL,
  `site_inspection_num` varchar(50) DEFAULT '8'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_scope_meetings_tbl`
--

INSERT INTO `tender_scope_meetings_tbl` (`meeting_id`, `tender_id`, `pre_app_purpose`, `pre_app_attendees`, `pre_app_assumed_duration`, `pre_app_reoccurence`, `site_visits_purpose`, `site_visits_attendees`, `site_visits_assumed_duration`, `site_visits_reoccurence`, `riba_purpose`, `riba_attendees`, `riba_assumed_duration`, `riba_reoccurence`, `inspection_purpose`, `inspection_attendees`, `inspection_assumed_duration`, `inspection_reoccurence`, `pre_app_choice`, `pre_app_num`, `site_visits_choice`, `site_visits_num`, `riba_choice`, `riba_num`, `site_inspection_choice`, `site_inspection_num`) VALUES
(7, 1, 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'Arrange,Attend,Minute', '0,1,2,3,4,5,6,7', 'Arrange,Attend,Minute', '0,1,2,3,4,5,6,7', 'Arrange,Attend,Minute', '0,1,2,3,4,5,6,7', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tender_tbl`
--

CREATE TABLE `tender_tbl` (
  `tender_id` int(11) NOT NULL,
  `project_record_id` int(11) DEFAULT '0',
  `services` varchar(50) DEFAULT 'TBC',
  `status` varchar(50) DEFAULT 'Drafted',
  `start` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end` datetime DEFAULT NULL,
  `bids_received` int(11) DEFAULT NULL,
  `queries_received` varchar(50) DEFAULT 'TBC',
  `time_remaining` varchar(50) DEFAULT 'TBC',
  `tender_count` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `saved_times` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_tbl`
--

INSERT INTO `tender_tbl` (`tender_id`, `project_record_id`, `services`, `status`, `start`, `end`, `bids_received`, `queries_received`, `time_remaining`, `tender_count`, `created_at`, `updated_at`, `saved_times`) VALUES
(1, 1, 'Acoustic Engineer', 'Active', '2018-11-12 15:29:10', '2018-11-01 00:00:00', 1, 'TBC', NULL, NULL, '2018-11-08 09:42:50', '2018-11-12 07:29:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transport_link_tbl`
--

CREATE TABLE `transport_link_tbl` (
  `transport_id` int(11) NOT NULL,
  `main_road` varchar(255) CHARACTER SET latin1 DEFAULT '0',
  `tube_station_one` varchar(255) CHARACTER SET latin1 DEFAULT '0',
  `tube_station_two` varchar(255) CHARACTER SET latin1 DEFAULT '0',
  `bus_lines` varchar(255) CHARACTER SET latin1 DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_record_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transport_link_tbl`
--

INSERT INTO `transport_link_tbl` (`transport_id`, `main_road`, `tube_station_one`, `tube_station_two`, `bus_lines`, `created_at`, `updated_at`, `project_record_id`) VALUES
(1, 'Surrey Quadds', 'Canada water 0.5 km', 'Surrey Quas 1.5 km', '701,205,103', '2018-11-08 17:31:44', '2018-11-08 17:31:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_use_tbl`
--

CREATE TABLE `type_of_use_tbl` (
  `use_id` int(11) NOT NULL,
  `use_name` longtext,
  `use_area` longtext,
  `use_units` longtext,
  `use_type` longtext,
  `project_record_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_use_tbl`
--

INSERT INTO `type_of_use_tbl` (`use_id`, `use_name`, `use_area`, `use_units`, `use_type`, `project_record_id`) VALUES
(2, 'Commercial,Aviation', '30000,4000', '200,100', 'High,High', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts_models`
--

CREATE TABLE `user_accounts_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accounts_models`
--

INSERT INTO `user_accounts_models` (`id`, `fullname`, `company`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Demrick Adaza', 'Makati Dev.', 'demricknieladaza@gmail.com', '+73 658 256', '313233343536', '2018-08-08 03:00:40', '2018-08-08 03:00:40'),
(2, 'Drigs Martinez', 'Secure Quality Construction', 'drigs@gmail.com', '+75 696 635', '123456', '2018-08-08 03:45:33', '2018-08-08 03:45:33'),
(3, 'Raj Rodriguez', 'Jejors Construction', 'rajr@gmail.com', '+75 698 322', '123456', '2018-08-08 03:47:05', '2018-08-08 03:47:05'),
(4, 'Rick Lax', 'SAMTRON Construction Co.', 'rick@gmail.com', '+75 689 653', '123456', '2018-08-08 04:49:22', '2018-08-08 04:49:22'),
(5, 'Chad Martin', 'Creative Cons.', 'c@gmail.com', '9261890735', '123456', '2018-08-08 06:09:26', '2018-08-08 06:09:26'),
(6, 'Rick Martin', 'SSS', 'r@gmail.com', '9261890735', '$2y$10$YPV1m1vdJu6si46xJuo8FOsrZqY4.6Hv8c4t3mjbuD5V39siSNJBK', '2018-08-08 06:12:19', '2018-08-08 06:12:19'),
(7, 'Demrick', 'asdasd', 'asdasd@gmail.com', '9261890735', '$2y$10$bCozVE4W/LFKTzJyEzZJPulD8rqzIE2votdlN5kkYb/bCWSK3OMha', '2018-08-08 06:16:20', '2018-08-08 06:16:20'),
(8, 'Gido', 'coddd', 'gids@gmail.com', '092\\364468579', '$2y$10$MBie1VmjrfseFifauiGOeu0Ne3lIZZ9u/rQpiQ9ylHIRLg5ZCL2/W', '2018-08-13 01:25:10', '2018-08-13 01:25:10'),
(9, 'jerald abian sujitado', 'Concentrix', 'sujitadojayjay@gmail.com', '09456288497', '$2y$10$F.VBjppov/TmFAY.s.1Hv.LQRFBUppIhMM7SIewvMYQgG9ch0eIMy', '2018-08-13 16:30:00', '2018-08-13 16:30:00'),
(10, 'jerald abian sujitado', 'Concentrix', 'sujitadojayjay@gmail.com', '09456288497', '$2y$10$56AsfTWk1.f.uOtaLYN2tuZ7.Mw/HNLBD6WWU6v7MF/oe9tGmE2GC', '2018-08-13 16:30:05', '2018-08-13 16:30:05'),
(11, 'Thomas Schindler', 'SCOPE', 'bmt2007@web.de', '015122400666', '$2y$10$/jToo689YpowfopbOsvYQulB9Jvu3tE4EyZt/BluJ.RiWXkbG0zpG', '2018-08-16 03:45:33', '2018-08-16 03:45:33'),
(12, 'GD', 'GD comp', 'gd@gmail.com', '09219991123', '$2y$10$M2zxzBnKAy4UascJQfN83uEpLstihdn/tKYVymFBzyHAVmztwP/0i', '2018-08-21 14:56:46', '2018-08-21 14:56:46'),
(13, 'GD', 'GD comp', 'gd@gmail.com', '09219991123', '$2y$10$tqxwwfBy8jUk4gNXi7qTDel47xYhW.CvS1eZMDfTlupQ0OzDt2Zu6', '2018-08-21 14:56:51', '2018-08-21 14:56:51'),
(14, 'GD', 'GD comp', 'gd@gmail.com', '09219991123', '$2y$10$zadTIJLmGk6nDfqQdXF7FuTcBb7t3qh/PEN5rEicvWliPFgqaBe7G', '2018-08-21 14:57:25', '2018-08-21 14:57:25'),
(15, 'test', 'test', 'test@gmail.com', '1', '$2y$10$kPZRL8KIoTT/R1AmmcaX0O24hjiOXBSS8LC6jyVWiIMSpO20T28lq', '2018-08-24 14:23:33', '2018-08-24 14:23:33'),
(16, 'test1', 'test1', 'test1@gmail.com', '1233333', '$2y$10$GOqXHdAVuT0bMfJNCgroLOft5pJJ5IdqI5sSDT0vuwd7DS55Vwk3u', '2018-08-25 08:49:03', '2018-08-25 08:49:03'),
(17, 'Jayger Labadan', 'DF Solutions', 'jayger.labadan@ustp.edu.ph', '09358441930', '$2y$10$9wEOTuL7LHtBH9DQgdu79OcQRwenspCSugqTlSGp0ECJ7paMFCuQC', '2018-09-18 18:02:23', '2018-09-18 18:02:23'),
(20, 'Demrick Niel Adaza', 'Vista Land', 'vista@gmail.com', '98755545', '$2y$10$mndVK1rtzAItIzWCHhjbluSsuf.0FdXE7GFx9siqPpTGA667ipUau', '2018-10-26 15:27:57', '2018-10-26 15:27:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_specific_information_tbl`
--
ALTER TABLE `area_specific_information_tbl`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `bid_approach_tbl`
--
ALTER TABLE `bid_approach_tbl`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `bid_individuals_tbl`
--
ALTER TABLE `bid_individuals_tbl`
  ADD PRIMARY KEY (`bid_ind_id`);

--
-- Indexes for table `bid_quality_assurance_tbl`
--
ALTER TABLE `bid_quality_assurance_tbl`
  ADD PRIMARY KEY (`bid_assurance_id`);

--
-- Indexes for table `bid_records_tbl`
--
ALTER TABLE `bid_records_tbl`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `company_tbl`
--
ALTER TABLE `company_tbl`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `constraints_tbl`
--
ALTER TABLE `constraints_tbl`
  ADD PRIMARY KEY (`constraint_id`);

--
-- Indexes for table `drafted_tenders_tbl`
--
ALTER TABLE `drafted_tenders_tbl`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `individuals_accredation_tbl`
--
ALTER TABLE `individuals_accredation_tbl`
  ADD PRIMARY KEY (`accredatation_id`);

--
-- Indexes for table `individuals_awards_tbl`
--
ALTER TABLE `individuals_awards_tbl`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `individuals_degrees_tbl`
--
ALTER TABLE `individuals_degrees_tbl`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `individuals_project_tbl`
--
ALTER TABLE `individuals_project_tbl`
  ADD PRIMARY KEY (`indp_id`);

--
-- Indexes for table `individuals_service_tbl`
--
ALTER TABLE `individuals_service_tbl`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `individuals_tbl`
--
ALTER TABLE `individuals_tbl`
  ADD PRIMARY KEY (`ind_id`);

--
-- Indexes for table `individuals_team_tbl`
--
ALTER TABLE `individuals_team_tbl`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `individuals_use_tbl`
--
ALTER TABLE `individuals_use_tbl`
  ADD PRIMARY KEY (`use_id`);

--
-- Indexes for table `meetings_tbl`
--
ALTER TABLE `meetings_tbl`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestones_tbl`
--
ALTER TABLE `milestones_tbl`
  ADD PRIMARY KEY (`milestone_id`);

--
-- Indexes for table `organisation_awards_tbl`
--
ALTER TABLE `organisation_awards_tbl`
  ADD PRIMARY KEY (`oa_id`);

--
-- Indexes for table `organisation_project_service_tbl`
--
ALTER TABLE `organisation_project_service_tbl`
  ADD PRIMARY KEY (`ops_id`);

--
-- Indexes for table `organisation_project_tbl`
--
ALTER TABLE `organisation_project_tbl`
  ADD PRIMARY KEY (`op_id`);

--
-- Indexes for table `organisation_project_team_tbl`
--
ALTER TABLE `organisation_project_team_tbl`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `organisation_project_use_tbl`
--
ALTER TABLE `organisation_project_use_tbl`
  ADD PRIMARY KEY (`opu_id`);

--
-- Indexes for table `organisation_services_tbl`
--
ALTER TABLE `organisation_services_tbl`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `organisation_tbl`
--
ALTER TABLE `organisation_tbl`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `project_employer_tbl`
--
ALTER TABLE `project_employer_tbl`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `project_information_tbl`
--
ALTER TABLE `project_information_tbl`
  ADD PRIMARY KEY (`project_record_id`);

--
-- Indexes for table `project_team_tbl`
--
ALTER TABLE `project_team_tbl`
  ADD PRIMARY KEY (`project_team_id`);

--
-- Indexes for table `request_for_proposal_tbl`
--
ALTER TABLE `request_for_proposal_tbl`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `saved_tenders_tbl`
--
ALTER TABLE `saved_tenders_tbl`
  ADD PRIMARY KEY (`sv_id`);

--
-- Indexes for table `submitted_tenders_tbl`
--
ALTER TABLE `submitted_tenders_tbl`
  ADD PRIMARY KEY (`sb_id`);

--
-- Indexes for table `tender_added_advice_tbl`
--
ALTER TABLE `tender_added_advice_tbl`
  ADD PRIMARY KEY (`added_id`);

--
-- Indexes for table `tender_added_deliverables_tbl`
--
ALTER TABLE `tender_added_deliverables_tbl`
  ADD PRIMARY KEY (`added_id`);

--
-- Indexes for table `tender_added_design_tbl`
--
ALTER TABLE `tender_added_design_tbl`
  ADD PRIMARY KEY (`added_id`);

--
-- Indexes for table `tender_added_meetings_tbl`
--
ALTER TABLE `tender_added_meetings_tbl`
  ADD PRIMARY KEY (`added_id`);

--
-- Indexes for table `tender_appointment_tbl`
--
ALTER TABLE `tender_appointment_tbl`
  ADD PRIMARY KEY (`tender_appointment_id`);

--
-- Indexes for table `tender_bonds_tbl`
--
ALTER TABLE `tender_bonds_tbl`
  ADD PRIMARY KEY (`bonds_id`);

--
-- Indexes for table `tender_comp_invite`
--
ALTER TABLE `tender_comp_invite`
  ADD PRIMARY KEY (`invite_id`);

--
-- Indexes for table `tender_evaluation_tbl`
--
ALTER TABLE `tender_evaluation_tbl`
  ADD PRIMARY KEY (`tender_eval_id`);

--
-- Indexes for table `tender_pre_qualification_tbl`
--
ALTER TABLE `tender_pre_qualification_tbl`
  ADD PRIMARY KEY (`pre_id`);

--
-- Indexes for table `tender_quality_assurance_statements_tbl`
--
ALTER TABLE `tender_quality_assurance_statements_tbl`
  ADD PRIMARY KEY (`statement_id`);

--
-- Indexes for table `tender_quality_assurance_tbl`
--
ALTER TABLE `tender_quality_assurance_tbl`
  ADD PRIMARY KEY (`quality_id`);

--
-- Indexes for table `tender_queries_tbl`
--
ALTER TABLE `tender_queries_tbl`
  ADD PRIMARY KEY (`tender_query_id`);

--
-- Indexes for table `tender_scope_advise_on_tbl`
--
ALTER TABLE `tender_scope_advise_on_tbl`
  ADD PRIMARY KEY (`advise_id`);

--
-- Indexes for table `tender_scope_deliverables_tbl`
--
ALTER TABLE `tender_scope_deliverables_tbl`
  ADD PRIMARY KEY (`deliverables_id`);

--
-- Indexes for table `tender_scope_design_considerations_tbl`
--
ALTER TABLE `tender_scope_design_considerations_tbl`
  ADD PRIMARY KEY (`design_id`);

--
-- Indexes for table `tender_scope_meetings_tbl`
--
ALTER TABLE `tender_scope_meetings_tbl`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `tender_tbl`
--
ALTER TABLE `tender_tbl`
  ADD PRIMARY KEY (`tender_id`);

--
-- Indexes for table `transport_link_tbl`
--
ALTER TABLE `transport_link_tbl`
  ADD PRIMARY KEY (`transport_id`);

--
-- Indexes for table `type_of_use_tbl`
--
ALTER TABLE `type_of_use_tbl`
  ADD PRIMARY KEY (`use_id`);

--
-- Indexes for table `user_accounts_models`
--
ALTER TABLE `user_accounts_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_specific_information_tbl`
--
ALTER TABLE `area_specific_information_tbl`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bid_approach_tbl`
--
ALTER TABLE `bid_approach_tbl`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bid_individuals_tbl`
--
ALTER TABLE `bid_individuals_tbl`
  MODIFY `bid_ind_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bid_quality_assurance_tbl`
--
ALTER TABLE `bid_quality_assurance_tbl`
  MODIFY `bid_assurance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bid_records_tbl`
--
ALTER TABLE `bid_records_tbl`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_tbl`
--
ALTER TABLE `company_tbl`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `constraints_tbl`
--
ALTER TABLE `constraints_tbl`
  MODIFY `constraint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drafted_tenders_tbl`
--
ALTER TABLE `drafted_tenders_tbl`
  MODIFY `dt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individuals_accredation_tbl`
--
ALTER TABLE `individuals_accredation_tbl`
  MODIFY `accredatation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `individuals_awards_tbl`
--
ALTER TABLE `individuals_awards_tbl`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `individuals_degrees_tbl`
--
ALTER TABLE `individuals_degrees_tbl`
  MODIFY `degree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `individuals_project_tbl`
--
ALTER TABLE `individuals_project_tbl`
  MODIFY `indp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `individuals_service_tbl`
--
ALTER TABLE `individuals_service_tbl`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `individuals_tbl`
--
ALTER TABLE `individuals_tbl`
  MODIFY `ind_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `individuals_team_tbl`
--
ALTER TABLE `individuals_team_tbl`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `individuals_use_tbl`
--
ALTER TABLE `individuals_use_tbl`
  MODIFY `use_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `meetings_tbl`
--
ALTER TABLE `meetings_tbl`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `milestones_tbl`
--
ALTER TABLE `milestones_tbl`
  MODIFY `milestone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organisation_awards_tbl`
--
ALTER TABLE `organisation_awards_tbl`
  MODIFY `oa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organisation_project_service_tbl`
--
ALTER TABLE `organisation_project_service_tbl`
  MODIFY `ops_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `organisation_project_tbl`
--
ALTER TABLE `organisation_project_tbl`
  MODIFY `op_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `organisation_project_team_tbl`
--
ALTER TABLE `organisation_project_team_tbl`
  MODIFY `opt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `organisation_project_use_tbl`
--
ALTER TABLE `organisation_project_use_tbl`
  MODIFY `opu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `organisation_services_tbl`
--
ALTER TABLE `organisation_services_tbl`
  MODIFY `os_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organisation_tbl`
--
ALTER TABLE `organisation_tbl`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_employer_tbl`
--
ALTER TABLE `project_employer_tbl`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_information_tbl`
--
ALTER TABLE `project_information_tbl`
  MODIFY `project_record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_team_tbl`
--
ALTER TABLE `project_team_tbl`
  MODIFY `project_team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_for_proposal_tbl`
--
ALTER TABLE `request_for_proposal_tbl`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saved_tenders_tbl`
--
ALTER TABLE `saved_tenders_tbl`
  MODIFY `sv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submitted_tenders_tbl`
--
ALTER TABLE `submitted_tenders_tbl`
  MODIFY `sb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tender_added_advice_tbl`
--
ALTER TABLE `tender_added_advice_tbl`
  MODIFY `added_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tender_added_deliverables_tbl`
--
ALTER TABLE `tender_added_deliverables_tbl`
  MODIFY `added_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tender_added_design_tbl`
--
ALTER TABLE `tender_added_design_tbl`
  MODIFY `added_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tender_added_meetings_tbl`
--
ALTER TABLE `tender_added_meetings_tbl`
  MODIFY `added_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tender_appointment_tbl`
--
ALTER TABLE `tender_appointment_tbl`
  MODIFY `tender_appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tender_bonds_tbl`
--
ALTER TABLE `tender_bonds_tbl`
  MODIFY `bonds_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tender_comp_invite`
--
ALTER TABLE `tender_comp_invite`
  MODIFY `invite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tender_evaluation_tbl`
--
ALTER TABLE `tender_evaluation_tbl`
  MODIFY `tender_eval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tender_pre_qualification_tbl`
--
ALTER TABLE `tender_pre_qualification_tbl`
  MODIFY `pre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tender_quality_assurance_statements_tbl`
--
ALTER TABLE `tender_quality_assurance_statements_tbl`
  MODIFY `statement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tender_quality_assurance_tbl`
--
ALTER TABLE `tender_quality_assurance_tbl`
  MODIFY `quality_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tender_queries_tbl`
--
ALTER TABLE `tender_queries_tbl`
  MODIFY `tender_query_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tender_scope_advise_on_tbl`
--
ALTER TABLE `tender_scope_advise_on_tbl`
  MODIFY `advise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tender_scope_deliverables_tbl`
--
ALTER TABLE `tender_scope_deliverables_tbl`
  MODIFY `deliverables_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tender_scope_design_considerations_tbl`
--
ALTER TABLE `tender_scope_design_considerations_tbl`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tender_scope_meetings_tbl`
--
ALTER TABLE `tender_scope_meetings_tbl`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tender_tbl`
--
ALTER TABLE `tender_tbl`
  MODIFY `tender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transport_link_tbl`
--
ALTER TABLE `transport_link_tbl`
  MODIFY `transport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type_of_use_tbl`
--
ALTER TABLE `type_of_use_tbl`
  MODIFY `use_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_accounts_models`
--
ALTER TABLE `user_accounts_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
