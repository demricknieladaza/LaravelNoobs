-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2018 at 02:07 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

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

DROP TABLE IF EXISTS `area_specific_information_tbl`;
CREATE TABLE IF NOT EXISTS `area_specific_information_tbl` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_record_id` int(11) DEFAULT NULL,
  `adjacent_uses` varchar(255) DEFAULT '0',
  `history` varchar(255) DEFAULT '0',
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_specific_information_tbl`
--

INSERT INTO `area_specific_information_tbl` (`area_id`, `project_record_id`, `adjacent_uses`, `history`) VALUES
(1, 1, 'Residential', 'Office'),
(2, 2, 'Residential', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `bid_advise_tbl`
--

DROP TABLE IF EXISTS `bid_advise_tbl`;
CREATE TABLE IF NOT EXISTS `bid_advise_tbl` (
  `bid_advise_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tender_id` int(11) NOT NULL,
  `advise_one` varchar(255) NOT NULL,
  `advise_two` varchar(255) NOT NULL,
  `advise_three` varchar(255) NOT NULL,
  `advise_four` varchar(255) NOT NULL,
  `advise_five` varchar(255) NOT NULL,
  `advise_six` varchar(255) NOT NULL,
  `collab_one` varchar(255) NOT NULL,
  `collab_two` varchar(255) NOT NULL,
  `collab_three` varchar(255) NOT NULL,
  `collab_four` varchar(255) NOT NULL,
  `coordinate_one` varchar(255) NOT NULL,
  `coordinate_two` varchar(255) NOT NULL,
  `other_one` varchar(255) NOT NULL,
  `other_two` varchar(255) NOT NULL,
  `other_four` varchar(255) NOT NULL,
  `other_three` varchar(255) NOT NULL,
  PRIMARY KEY (`bid_advise_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_advise_tbl`
--

INSERT INTO `bid_advise_tbl` (`bid_advise_id`, `user_id`, `tender_id`, `advise_one`, `advise_two`, `advise_three`, `advise_four`, `advise_five`, `advise_six`, `collab_one`, `collab_two`, `collab_three`, `collab_four`, `coordinate_one`, `coordinate_two`, `other_one`, `other_two`, `other_four`, `other_three`) VALUES
(1, 6, 1, ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,', ',,,,,,,'),
(2, 21, 1, '12,15,12,15,12,15,14,12', '12,15,15,15,15,15,15,15', '15,15,15,10,2,12,12,12', '12,21,1,1,1,1,1,1', '1,1,21,21,1,1,21,21', '121,21,21,21,21,21,21,212', '5,1,5,2,5,1,5,2', '4,12,5,2,5,12,5,1321', '51,5465,132,54,2,5,2,5', '6,32,2,3,22,5,1,54', '2,1,26,6,5,1,2,5', '22,55,1,21,5,215,421,5', '451,215,454,121,5,21,5,2', '5,33,65,2,121,1,2,2', '3,3,3,3,5,5,5,65', '1,1,1,1,1,2,2,2');

-- --------------------------------------------------------

--
-- Table structure for table `bid_approach_tbl`
--

DROP TABLE IF EXISTS `bid_approach_tbl`;
CREATE TABLE IF NOT EXISTS `bid_approach_tbl` (
  `bid_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) DEFAULT NULL,
  `comments_on_constraints` text NOT NULL,
  `comments_images` text NOT NULL,
  `solutions` text NOT NULL,
  `solutions_images` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`bid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_approach_tbl`
--

INSERT INTO `bid_approach_tbl` (`bid_id`, `tender_id`, `comments_on_constraints`, `comments_images`, `solutions`, `solutions_images`, `user_id`) VALUES
(1, 867, '1^2', '0', '3^4^', '0', 0),
(2, 867, '5^6', '0', '7^8^', '0', 0),
(3, 867, '^', '0', '^^', '0', 0),
(4, 867, '13^14', 'lap_1540543418_.jpg/lap_1540543418_.png', '15^16', 'lap_1540543418_.png/pano mo nasabi_1540543418_.png', 0),
(5, 867, 'test 1^test 2', 'Architect_1541587734_.png', 'test 3^test 4', 'Facade Engineer_1541587734_.png', 0),
(6, 867, 'test 1^test 2', 'lap_1541588129_.jpg', 'test 3^test 4', 'justine-cruz-axe2_1541588129_.jpg', 0),
(7, 867, 'test 1^test 2', 'lap_1541588353_.jpg', 'test 3^test 4', 'justine-cruz-axe2_1541588353_.jpg', 0),
(8, 867, 'sure 1^sure 2', 'lap_1541588388_.jpg', 'sure 3^sure 4', 'justine-cruz-axe2_1541588388_.jpg', 0),
(9, 1, 'test', '0', 'test', '0', 21);

-- --------------------------------------------------------

--
-- Table structure for table `bid_deliverables_tbl`
--

DROP TABLE IF EXISTS `bid_deliverables_tbl`;
CREATE TABLE IF NOT EXISTS `bid_deliverables_tbl` (
  `deliv_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `strategic` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `study` varchar(255) NOT NULL,
  `drm` varchar(255) NOT NULL,
  `info_report` varchar(255) NOT NULL,
  `info_exchange` varchar(255) NOT NULL,
  `proj_brief` varchar(255) NOT NULL,
  `risk` varchar(255) NOT NULL,
  `handover` varchar(255) NOT NULL,
  `proj_exec` varchar(255) NOT NULL,
  `design_proposal` varchar(255) NOT NULL,
  PRIMARY KEY (`deliv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_deliverables_tbl`
--

INSERT INTO `bid_deliverables_tbl` (`deliv_id`, `tender_id`, `user_id`, `strategic`, `programme`, `study`, `drm`, `info_report`, `info_exchange`, `proj_brief`, `risk`, `handover`, `proj_exec`, `design_proposal`) VALUES
(9, 1, 20, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11'),
(10, 1, 21, '150,150,150,150,150,150,150,150', '150,150,150,150,150,150,150,150', '150,015,150,1050,015,150,150,150', '015,150,150,150,015,150,150,150', '150,1510,150,150,150,150,150,0150', '150,150,150,150,150,150,150,150', '015,015,150,150,150,150,150,150', '150,150,150,150,150,150,150,150', '150,150,150,150,150,150,150,150', '150,150,150,150,150,150,150,150', '150,150,150,150,150,150,150,15');

-- --------------------------------------------------------

--
-- Table structure for table `bid_individuals_tbl`
--

DROP TABLE IF EXISTS `bid_individuals_tbl`;
CREATE TABLE IF NOT EXISTS `bid_individuals_tbl` (
  `bid_ind_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `ind_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid_ind_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_individuals_tbl`
--

INSERT INTO `bid_individuals_tbl` (`bid_ind_id`, `tender_id`, `ind_id`) VALUES
(7, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bid_meetings_tbl`
--

DROP TABLE IF EXISTS `bid_meetings_tbl`;
CREATE TABLE IF NOT EXISTS `bid_meetings_tbl` (
  `bid_meet_tbl` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pre_application_meetings` varchar(255) NOT NULL,
  `site_visits` varchar(255) NOT NULL,
  `riba_stage` varchar(255) NOT NULL,
  `site_inspection` varchar(255) NOT NULL,
  PRIMARY KEY (`bid_meet_tbl`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_meetings_tbl`
--

INSERT INTO `bid_meetings_tbl` (`bid_meet_tbl`, `tender_id`, `user_id`, `pre_application_meetings`, `site_visits`, `riba_stage`, `site_inspection`) VALUES
(1, 1, 21, '15,15,10,12,12,12,12,12', '12,12,12,12,15,15,12,158', '12,15,12,15,2,15,12,15', '12,15,12,15,12,15,12,15');

-- --------------------------------------------------------

--
-- Table structure for table `bid_quality_assurance_tbl`
--

DROP TABLE IF EXISTS `bid_quality_assurance_tbl`;
CREATE TABLE IF NOT EXISTS `bid_quality_assurance_tbl` (
  `bid_assurance_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) DEFAULT '0',
  `created_by_fname` varchar(50) DEFAULT '0',
  `created_by_sname` varchar(50) DEFAULT '0',
  `created_by_date` varchar(50) DEFAULT '0',
  `checked_by_fname` varchar(50) DEFAULT '0',
  `checked_by_sname` varchar(50) DEFAULT '0',
  `checked_by_date` varchar(50) DEFAULT '0',
  `approved_by_fname` varchar(50) DEFAULT '0',
  `approved_by_sname` varchar(50) DEFAULT '0',
  `approved_by_date` varchar(50) DEFAULT '0',
  PRIMARY KEY (`bid_assurance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `bid_records_tbl`;
CREATE TABLE IF NOT EXISTS `bid_records_tbl` (
  `bid_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_record_id` int(11) NOT NULL DEFAULT '0',
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`bid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_records_tbl`
--

INSERT INTO `bid_records_tbl` (`bid_id`, `project_record_id`, `tender_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 181, 867, 6, '2018-11-07 05:35:07', '2018-11-07 05:35:07'),
(2, 1, 1, 20, '2018-11-12 07:29:09', '2018-11-12 07:29:09'),
(3, 1, 1, 21, '2018-12-01 14:23:21', '2018-12-01 14:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `company_tbl`
--

DROP TABLE IF EXISTS `company_tbl`;
CREATE TABLE IF NOT EXISTS `company_tbl` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `comp_email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

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
(29, 20, 'Vista Land', 'vista@gmail.com', '2018-10-26 08:26:36'),
(30, 21, 'test123', 't@gmail.com', '2018-12-01 13:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `constraints_tbl`
--

DROP TABLE IF EXISTS `constraints_tbl`;
CREATE TABLE IF NOT EXISTS `constraints_tbl` (
  `constraint_id` int(11) NOT NULL AUTO_INCREMENT,
  `constraint` varchar(255) DEFAULT '0',
  `project_record_id` int(11) DEFAULT '0',
  PRIMARY KEY (`constraint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constraints_tbl`
--

INSERT INTO `constraints_tbl` (`constraint_id`, `constraint`, `project_record_id`) VALUES
(4, 'Tunnel one', 1),
(5, 'Tunnel two', 1),
(6, 'Tunnel Three', 1),
(7, 'tube tunnel', 2);

-- --------------------------------------------------------

--
-- Table structure for table `drafted_tenders_tbl`
--

DROP TABLE IF EXISTS `drafted_tenders_tbl`;
CREATE TABLE IF NOT EXISTS `drafted_tenders_tbl` (
  `dt_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `project_record_id` int(11) NOT NULL DEFAULT '0',
  `tender_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`dt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employer_details_tbl`
--

DROP TABLE IF EXISTS `employer_details_tbl`;
CREATE TABLE IF NOT EXISTS `employer_details_tbl` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_record_id` int(11) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `year_established` varchar(50) DEFAULT NULL,
  `number_of_employees` int(11) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_details_tbl`
--

INSERT INTO `employer_details_tbl` (`emp_id`, `project_record_id`, `emp_name`, `office_address`, `industry`, `year_established`, `number_of_employees`) VALUES
(1, NULL, 'Test Land', 'Test Address', 'Dev', '1985', 10);

-- --------------------------------------------------------

--
-- Table structure for table `individuals_accredation_tbl`
--

DROP TABLE IF EXISTS `individuals_accredation_tbl`;
CREATE TABLE IF NOT EXISTS `individuals_accredation_tbl` (
  `accredatation_id` int(11) NOT NULL AUTO_INCREMENT,
  `ind_id` int(11) DEFAULT '0',
  `accredatation_name` varchar(255) DEFAULT '0',
  `accredatation_year` varchar(255) DEFAULT '0',
  PRIMARY KEY (`accredatation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
(9, 12, 'AMCIOB', '2017'),
(10, 13, 'AMCIOB', '2017'),
(11, 14, 'AMCIOB', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_awards_tbl`
--

DROP TABLE IF EXISTS `individuals_awards_tbl`;
CREATE TABLE IF NOT EXISTS `individuals_awards_tbl` (
  `award_id` int(11) NOT NULL AUTO_INCREMENT,
  `ind_id` int(11) DEFAULT '0',
  `award_name` varchar(50) DEFAULT '0',
  `awarded_by` varchar(50) DEFAULT '0',
  `award_year` varchar(50) DEFAULT '0',
  `award_details` text,
  PRIMARY KEY (`award_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
(8, 12, 'test', 'test', '2008', 'tset'),
(9, 13, 'test', 'test', '2017', 'test'),
(10, 14, 'test', 'tset', '2009', 'tset');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_degrees_tbl`
--

DROP TABLE IF EXISTS `individuals_degrees_tbl`;
CREATE TABLE IF NOT EXISTS `individuals_degrees_tbl` (
  `degree_id` int(11) NOT NULL AUTO_INCREMENT,
  `ind_id` int(11) DEFAULT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `degree_year` varchar(50) DEFAULT NULL,
  `name_of_degree` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`degree_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
(8, 12, 'BEC', '2007', 'test'),
(9, 13, 'B.Des.Comp.', '2017', 'de'),
(10, 14, 'B.Des.Arch.', '2017', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_project_tbl`
--

DROP TABLE IF EXISTS `individuals_project_tbl`;
CREATE TABLE IF NOT EXISTS `individuals_project_tbl` (
  `indp_id` int(11) NOT NULL AUTO_INCREMENT,
  `ind_id` int(11) DEFAULT NULL,
  `project_title` varchar(255) DEFAULT NULL,
  `project_value` int(11) DEFAULT NULL,
  `type_of_development` varchar(255) DEFAULT ' ',
  `project_description` text,
  `profile_images` text,
  PRIMARY KEY (`indp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_project_tbl`
--

INSERT INTO `individuals_project_tbl` (`indp_id`, `ind_id`, `project_title`, `project_value`, `type_of_development`, `project_description`, `profile_images`) VALUES
(8, 11, 'testagain', 150000, 'New Built,Demolition', 'test', 'Penguins_1541754900_.jpg'),
(9, 12, 'tset', 1820000, NULL, 'testset', NULL),
(10, 1, 'testests', 800000, 'New Built,Demolition', 'test', 'Chrysanthemum_1541759833_.jpg/Desert_1541759833_.jpg/Hydrangeas_1541759833_.jpg/Jellyfish_1541759833_.jpg/Koala_1541759833_.jpg/Lighthouse_1541759833_.jpg/Penguins_1541759833_.jpg'),
(11, 1, 'Mao nani', 1500000, '', 'test', 'Koala_1541759980_.jpg'),
(12, 2, 'test', 15132152, '', '1', NULL),
(13, 2, 'test', 15132152, NULL, '1', NULL),
(14, 13, NULL, NULL, '', NULL, '0'),
(15, 14, 'test', 45000, 'New Built', 'test', 'Jellyfish_1543673170_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_service_tbl`
--

DROP TABLE IF EXISTS `individuals_service_tbl`;
CREATE TABLE IF NOT EXISTS `individuals_service_tbl` (
  `serv_id` int(11) NOT NULL AUTO_INCREMENT,
  `indp_id` int(11) DEFAULT NULL,
  `service_name` varchar(50) DEFAULT NULL,
  `from` varchar(50) DEFAULT NULL,
  `until` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_service_tbl`
--

INSERT INTO `individuals_service_tbl` (`serv_id`, `indp_id`, `service_name`, `from`, `until`) VALUES
(1, 8, 'Project Manager', '04-2018', '04-2018'),
(2, 9, 'Security Consultant', '01-2018', '04-2018'),
(3, 10, 'Principal Designer', '01-2018', '04-2018'),
(4, 11, 'Architect', '01-2018', '03-2018'),
(5, 12, 'Architect', '02-2018', '03-2018'),
(6, 9, 'Acoustic Engineer', '01-2018', '04-2018'),
(7, 15, 'Fire Engineer', '01-2018', '04-2018');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_tbl`
--

DROP TABLE IF EXISTS `individuals_tbl`;
CREATE TABLE IF NOT EXISTS `individuals_tbl` (
  `ind_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT '0',
  `last_name` varchar(50) DEFAULT '0',
  `seniority` varchar(50) DEFAULT '0',
  `services` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ind_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_tbl`
--

INSERT INTO `individuals_tbl` (`ind_id`, `first_name`, `last_name`, `seniority`, `services`, `user_id`, `created_at`, `updated_at`, `department`, `email`) VALUES
(1, 'Demrick', 'Adaza', '1', 'Acoustic engineer,Lighting consultant,Security consultant,Structural engineer', 20, '2018-11-08 09:37:43', '2018-11-08 09:37:43', NULL, ''),
(2, 'ben', 'elebentwelb', '1', 'Building control,Lighting consultant,Security consultant,Service engineer', 20, '2018-11-08 09:45:03', '2018-11-08 09:45:03', NULL, ''),
(8, 'test', 'test', NULL, '', 20, '2018-11-08 10:18:14', '2018-11-08 10:18:14', NULL, ''),
(9, 'testset', 'setset', NULL, '', 20, '2018-11-08 10:34:09', '2018-11-08 10:34:09', NULL, ''),
(11, 'test', 'test', '1', 'Acoustic engineer,Building control,Planning consultant,Structural engineer', 20, '2018-11-09 09:15:00', '2018-11-09 09:15:00', NULL, ''),
(12, 'seben', 'ten', '1', 'Acoustic engineer,Building control,Quantity surveyor,Service engineer', 20, '2018-11-09 09:21:08', '2018-11-09 09:21:08', NULL, ''),
(13, 'testsu', 'testsu', '2', 'Fire engineer,Project manager,Service engineer', 6, '2018-11-26 08:58:34', '2018-11-26 08:58:34', 'test2', 'jeprockpineda@yahoo.com'),
(14, 'indi', 'one', '2', 'Acoustic engineer,Architect,Building control,Structural engineer', 21, '2018-12-01 14:06:07', '2018-12-01 14:06:07', 'dept1', 'indi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_team_tbl`
--

DROP TABLE IF EXISTS `individuals_team_tbl`;
CREATE TABLE IF NOT EXISTS `individuals_team_tbl` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `indp_id` int(11) DEFAULT '0',
  `position` varchar(50) DEFAULT '0',
  `company` varchar(50) DEFAULT '0',
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individuals_team_tbl`
--

INSERT INTO `individuals_team_tbl` (`team_id`, `indp_id`, `position`, `company`) VALUES
(1, 8, 'Fire Engineer', 'test'),
(2, 9, 'Project Manager', 'tset'),
(3, 12, 'Facade Engineer', 'qwee'),
(4, 9, 'Acoustic Engineer', 'test'),
(5, 15, 'Quantity Surveyor', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `individuals_use_tbl`
--

DROP TABLE IF EXISTS `individuals_use_tbl`;
CREATE TABLE IF NOT EXISTS `individuals_use_tbl` (
  `use_id` int(11) NOT NULL AUTO_INCREMENT,
  `indp_id` int(11) DEFAULT '0',
  `use_name` varchar(50) DEFAULT '0',
  `use_area` int(11) DEFAULT '0',
  `use_units` int(11) DEFAULT '0',
  PRIMARY KEY (`use_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
(10, 9, 'Aviation', 1, 1),
(11, 15, 'Residential', 15000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `meetings_tbl`
--

DROP TABLE IF EXISTS `meetings_tbl`;
CREATE TABLE IF NOT EXISTS `meetings_tbl` (
  `meeting_id` int(11) NOT NULL AUTO_INCREMENT,
  `design_team_meeting` varchar(255) DEFAULT '0',
  `project_progress_meeting` varchar(255) DEFAULT '0',
  `project_record_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`meeting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings_tbl`
--

INSERT INTO `meetings_tbl` (`meeting_id`, `design_team_meeting`, `project_progress_meeting`, `project_record_id`) VALUES
(1, 'Tuesday', 'Wednesday', 1),
(2, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `milestones_tbl`;
CREATE TABLE IF NOT EXISTS `milestones_tbl` (
  `milestone_id` int(11) NOT NULL AUTO_INCREMENT,
  `riba_stage` varchar(50) DEFAULT '0',
  `date` varchar(50) DEFAULT NULL,
  `project_record_id` int(11) DEFAULT '0',
  PRIMARY KEY (`milestone_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milestones_tbl`
--

INSERT INTO `milestones_tbl` (`milestone_id`, `riba_stage`, `date`, `project_record_id`) VALUES
(2, 'RIBA Stage 1,RIBA Stage 2', '01/03/2018,01/21/2018', 1),
(3, 'Riba 1', '01/29/18', 2);

-- --------------------------------------------------------

--
-- Table structure for table `organisation_accreditation_tbl`
--

DROP TABLE IF EXISTS `organisation_accreditation_tbl`;
CREATE TABLE IF NOT EXISTS `organisation_accreditation_tbl` (
  `accre_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) NOT NULL,
  `accre_name` varchar(255) NOT NULL,
  `accre_year` varchar(255) NOT NULL,
  PRIMARY KEY (`accre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_accreditation_tbl`
--

INSERT INTO `organisation_accreditation_tbl` (`accre_id`, `org_id`, `accre_name`, `accre_year`) VALUES
(1, 4, 'test', '2015'),
(2, 4, 'test2', '2016'),
(3, 4, 'test45', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_awards_tbl`
--

DROP TABLE IF EXISTS `organisation_awards_tbl`;
CREATE TABLE IF NOT EXISTS `organisation_awards_tbl` (
  `oa_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `award_name` varchar(255) DEFAULT NULL,
  `award_details` varchar(255) DEFAULT NULL,
  `award_year` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`oa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_awards_tbl`
--

INSERT INTO `organisation_awards_tbl` (`oa_id`, `org_id`, `award_name`, `award_details`, `award_year`) VALUES
(1, 4, 'test', 'test', '2015'),
(2, 4, 'test2', 'test', '2007'),
(3, 7, 'test', 'test', '2018'),
(4, 11, 'test', 'test', '2015'),
(5, 11, 'test222', 'tset', '2015'),
(6, 11, 'test123123', 'test', '2012');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_department_tbl`
--

DROP TABLE IF EXISTS `organisation_department_tbl`;
CREATE TABLE IF NOT EXISTS `organisation_department_tbl` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_department_tbl`
--

INSERT INTO `organisation_department_tbl` (`dept_id`, `org_id`, `dept_name`) VALUES
(1, 4, 'Fire department'),
(2, 4, 'Structural department'),
(3, 4, 'Acoustic department'),
(4, 7, 'test123'),
(5, 7, 'test2'),
(6, 7, 'test3'),
(7, 11, 'dept1'),
(8, 11, 'dept2'),
(9, 11, 'dept3'),
(10, 11, 'dept4');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_project_service_tbl`
--

DROP TABLE IF EXISTS `organisation_project_service_tbl`;
CREATE TABLE IF NOT EXISTS `organisation_project_service_tbl` (
  `ops_id` int(11) NOT NULL AUTO_INCREMENT,
  `op_id` int(11) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `from` varchar(50) DEFAULT NULL,
  `until` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ops_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_project_service_tbl`
--

INSERT INTO `organisation_project_service_tbl` (`ops_id`, `op_id`, `service`, `from`, `until`) VALUES
(1, 1, 'BIM Consultant', '01-2018', '04-2018'),
(2, 2, 'Architect', '01-2018', '04-2018'),
(3, 3, 'Building Control', '01-2018', '04-2018'),
(4, 4, 'Facade Engineer', '01-2018', '04-2018'),
(5, 5, 'Architect', '01-2018', '03-2018'),
(6, 5, 'BIM Consultant', '02-2018', '03-2018'),
(7, 6, 'Architect', '01-2018', '03-2018'),
(8, 6, 'BIM Consultant', '02-2018', '03-2018'),
(9, 7, 'Architect', '01-2018', '03-2018'),
(10, 7, 'BIM Consultant', '02-2018', '03-2018'),
(11, 8, 'BIM Consultant', '01-2018', '02-2018'),
(12, 9, 'Building Control', '02-2018', '06-2018'),
(13, 9, 'BIM Consultant', '04-2018', '07-2018'),
(14, 10, 'Architect', '02-2018', '04-2018');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_project_tbl`
--

DROP TABLE IF EXISTS `organisation_project_tbl`;
CREATE TABLE IF NOT EXISTS `organisation_project_tbl` (
  `op_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `project_title` varchar(50) DEFAULT NULL,
  `project_value` int(11) DEFAULT NULL,
  `type_of_development` varchar(50) DEFAULT NULL,
  `project_description` text,
  `project_images` text,
  `_until` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`op_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_project_tbl`
--

INSERT INTO `organisation_project_tbl` (`op_id`, `org_id`, `project_title`, `project_value`, `type_of_development`, `project_description`, `project_images`, `_until`) VALUES
(1, 4, 'test1', 1520000, 'New built,Demolition', 'test', 'Chrysanthemum_1541741402_.jpg/Koala_1541741402_.jpg', '4/1/2017'),
(2, 4, 'test2', 152000, 'New built,Refurbishment', 'tets', 'Chrysanthemum_1541742002_.jpg/Desert_1541742002_.jpg/Hydrangeas_1541742002_.jpg/Jellyfish_1541742002_.jpg/Koala_1541742002_.jpg', '3/1/2014'),
(3, 4, 'test3', 3542200, 'New built,Demolition,Refurbishment', 'test', 'Chrysanthemum_1541742186_.jpg', '2/1/2018'),
(4, 4, 'test1232', 132456, 'New built,Demolition', 'test', 'Tulips - Copy_1541742469_.jpg', '7/1/2013'),
(5, 11, 'test123444', 152000, 'New built,Demolition', 'testset', '0', NULL),
(8, 11, 'tessss5', 456000, 'New built,Demolition', 'test', '0', NULL),
(9, 11, 'tessddd', 450000, 'New built', 'aaaa', 'Desert_1543672654_.jpg', NULL),
(10, 11, 'test', 500000, 'New built', 'trew', 'Tulips_1543672967_.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organisation_project_team_tbl`
--

DROP TABLE IF EXISTS `organisation_project_team_tbl`;
CREATE TABLE IF NOT EXISTS `organisation_project_team_tbl` (
  `opt_id` int(11) NOT NULL AUTO_INCREMENT,
  `op_id` int(11) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`opt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_project_team_tbl`
--

INSERT INTO `organisation_project_team_tbl` (`opt_id`, `op_id`, `position`, `company`) VALUES
(1, 1, 'BIM Consultant', 'tet'),
(2, 1, 'Architect', 'teee'),
(5, 2, 'Architect', 'tet'),
(6, 3, 'Quantity Surveyor', '123'),
(7, 4, 'Acoustic Engineer', '123'),
(8, 5, 'Facade Engineer', 'testddd'),
(9, 5, 'Architect', 'tsdd'),
(10, 6, 'Facade Engineer', 'testddd'),
(11, 6, 'Architect', 'tsdd'),
(12, 7, 'Facade Engineer', 'testddd'),
(13, 7, 'Architect', 'tsdd'),
(14, 10, 'BIM Consultant', 'tests');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_project_use_tbl`
--

DROP TABLE IF EXISTS `organisation_project_use_tbl`;
CREATE TABLE IF NOT EXISTS `organisation_project_use_tbl` (
  `opu_id` int(11) NOT NULL AUTO_INCREMENT,
  `op_id` int(11) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `units` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`opu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_project_use_tbl`
--

INSERT INTO `organisation_project_use_tbl` (`opu_id`, `op_id`, `service`, `area`, `units`) VALUES
(1, 1, 'Bridges', '52400', '1'),
(2, 2, 'Commercial', '35000', '100'),
(3, 3, 'Education', '25000', '123'),
(4, 4, 'Aviation', '15000', '150'),
(5, 4, 'Commercial', '25000', '250'),
(6, 5, 'Industrial', '12345', '235'),
(7, 5, 'Highways', '154200', '100'),
(8, 6, 'Industrial', '12345', '235'),
(9, 6, 'Highways', '154200', '100'),
(10, 7, 'Industrial', '12345', '235'),
(11, 7, 'Highways', '154200', '100'),
(12, 8, 'Bridges', '150000', '522'),
(13, 9, 'Commercial ', '450000', '15'),
(14, 10, 'Bridges', '15000', '1'),
(15, 10, 'Commercial ', '15200', '25'),
(16, 10, 'Education', '15000', '12');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_services_tbl`
--

DROP TABLE IF EXISTS `organisation_services_tbl`;
CREATE TABLE IF NOT EXISTS `organisation_services_tbl` (
  `os_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `from` varchar(50) DEFAULT NULL,
  `until` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`os_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_services_tbl`
--

INSERT INTO `organisation_services_tbl` (`os_id`, `org_id`, `service`, `from`, `until`) VALUES
(1, 4, 'Fire Engineer', '01-2018', '12-2018'),
(2, 4, 'Architect', '01-2018', '12-2018'),
(3, 7, 'Acoustic Engineer', '01-2018', '04-2018'),
(4, 11, 'Acoustic Engineer', '02-2018', '02-2018'),
(5, 11, 'Architect', '01-2018', '03-2018'),
(6, 11, 'Building Control', '02-2018', '04-2018'),
(7, 11, 'Lighting Consultant', '07-2018', '05-2018');

-- --------------------------------------------------------

--
-- Table structure for table `organisation_tbl`
--

DROP TABLE IF EXISTS `organisation_tbl`;
CREATE TABLE IF NOT EXISTS `organisation_tbl` (
  `org_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `office_address` text,
  `logo` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`org_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_tbl`
--

INSERT INTO `organisation_tbl` (`org_id`, `company_name`, `office_address`, `logo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', NULL, 0, NULL, NULL),
(4, 'Vista Land', 'Unahan tulay', NULL, 20, '2018-11-09 05:39:01', '2018-11-09 05:39:01'),
(7, 'Test Company', 'luyo balay', NULL, 6, '2018-11-26 08:10:50', '2018-11-26 08:22:47'),
(11, 'test123', 'test addresss', NULL, 21, '2018-12-01 13:45:40', '2018-12-01 13:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `project_employer_tbl`
--

DROP TABLE IF EXISTS `project_employer_tbl`;
CREATE TABLE IF NOT EXISTS `project_employer_tbl` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_record_id` int(11) NOT NULL DEFAULT '0',
  `office_address` varchar(255) NOT NULL DEFAULT '0',
  `industry` varchar(255) NOT NULL DEFAULT '0',
  `year_established` varchar(255) NOT NULL DEFAULT '0',
  `num_of_employees` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_information_tbl`
--

DROP TABLE IF EXISTS `project_information_tbl`;
CREATE TABLE IF NOT EXISTS `project_information_tbl` (
  `project_record_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`project_record_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_information_tbl`
--

INSERT INTO `project_information_tbl` (`project_record_id`, `project_title`, `location`, `type_of_development`, `construction_value`, `procurement_route`, `user_id`, `site_plan`, `programme`, `policy`, `created_at`, `updated_at`) VALUES
(1, 'Master plan', 'Canada Water', 'New Built,Refurbishment', '3000000', 'Design & Build', 6, 'Site Plan_1541669503_.docx', 'Programme_1541669503_.docx', 'Policy_1541669503_.docx', '2018-11-08 09:31:44', '2018-11-12 18:48:50'),
(2, 'Vista Land Housing', 'Vista compound', 'New Built', '300000000', NULL, 20, 'No File Uploaded', 'No File Uploaded', 'No File Uploaded', '2018-11-15 07:54:41', '2018-11-15 07:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `project_team_tbl`
--

DROP TABLE IF EXISTS `project_team_tbl`;
CREATE TABLE IF NOT EXISTS `project_team_tbl` (
  `project_team_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_position` varchar(50) DEFAULT '0',
  `member_name` varchar(50) DEFAULT '0',
  `project_record_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`project_team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_team_tbl`
--

INSERT INTO `project_team_tbl` (`project_team_id`, `member_position`, `member_name`, `project_record_id`) VALUES
(2, 'Architect,Fire Engineer', 'Allison Morris,Bob Ashe', 1),
(3, 'Architect', 'tatski', 2);

-- --------------------------------------------------------

--
-- Table structure for table `request_for_proposal_tbl`
--

DROP TABLE IF EXISTS `request_for_proposal_tbl`;
CREATE TABLE IF NOT EXISTS `request_for_proposal_tbl` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `project_record_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saved_tenders_tbl`
--

DROP TABLE IF EXISTS `saved_tenders_tbl`;
CREATE TABLE IF NOT EXISTS `saved_tenders_tbl` (
  `sv_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `project_record_id` int(11) DEFAULT NULL,
  `tender_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submitted_tenders_tbl`
--

DROP TABLE IF EXISTS `submitted_tenders_tbl`;
CREATE TABLE IF NOT EXISTS `submitted_tenders_tbl` (
  `sb_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `project_record_id` int(11) NOT NULL DEFAULT '0',
  `tender_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitted_tenders_tbl`
--

INSERT INTO `submitted_tenders_tbl` (`sb_id`, `user_id`, `project_record_id`, `tender_id`) VALUES
(1, 20, 1, 1),
(2, 21, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `successful_tender`
--

DROP TABLE IF EXISTS `successful_tender`;
CREATE TABLE IF NOT EXISTS `successful_tender` (
  `succ_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`succ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_added_advice_tbl`
--

DROP TABLE IF EXISTS `tender_added_advice_tbl`;
CREATE TABLE IF NOT EXISTS `tender_added_advice_tbl` (
  `added_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `num` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`added_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_added_advice_tbl`
--

INSERT INTO `tender_added_advice_tbl` (`added_id`, `tender_id`, `name`, `num`) VALUES
(1, 1, 'test 1', '0,1,2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `tender_added_deliverables_tbl`
--

DROP TABLE IF EXISTS `tender_added_deliverables_tbl`;
CREATE TABLE IF NOT EXISTS `tender_added_deliverables_tbl` (
  `added_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `details` text NOT NULL,
  `raci` varchar(50) NOT NULL DEFAULT '0',
  `num` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`added_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_added_deliverables_tbl`
--

INSERT INTO `tender_added_deliverables_tbl` (`added_id`, `tender_id`, `name`, `details`, `raci`, `num`) VALUES
(1, 1, 'test 1', 'test 1', 'R,A,C,I', '0,1,2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `tender_added_design_tbl`
--

DROP TABLE IF EXISTS `tender_added_design_tbl`;
CREATE TABLE IF NOT EXISTS `tender_added_design_tbl` (
  `added_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`added_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_added_design_tbl`
--

INSERT INTO `tender_added_design_tbl` (`added_id`, `tender_id`, `name`, `question`) VALUES
(1, 1, 'test 1', 'test 1');

-- --------------------------------------------------------

--
-- Table structure for table `tender_added_meetings_tbl`
--

DROP TABLE IF EXISTS `tender_added_meetings_tbl`;
CREATE TABLE IF NOT EXISTS `tender_added_meetings_tbl` (
  `added_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '0',
  `purpose` text NOT NULL,
  `attendees` text NOT NULL,
  `duration` text NOT NULL,
  `reoccurence` text NOT NULL,
  `arrange` varchar(50) NOT NULL DEFAULT '0',
  `num` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`added_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_added_meetings_tbl`
--

INSERT INTO `tender_added_meetings_tbl` (`added_id`, `tender_id`, `name`, `purpose`, `attendees`, `duration`, `reoccurence`, `arrange`, `num`) VALUES
(1, 1, 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'Arrange,Attend,Minute', '0,1,2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `tender_appointment_tbl`
--

DROP TABLE IF EXISTS `tender_appointment_tbl`;
CREATE TABLE IF NOT EXISTS `tender_appointment_tbl` (
  `tender_appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) DEFAULT '0',
  `insurance_name` text,
  `insurance_level` varchar(50) DEFAULT '0',
  `bonds` text,
  `collateral_warranties` varchar(50) DEFAULT '0',
  `limit_of_liability` varchar(50) DEFAULT '0',
  `form_of_appointment` varchar(50) DEFAULT NULL,
  `documents_for_signature` text,
  `execution` varchar(255) DEFAULT NULL,
  `net_contrib` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tender_appointment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_appointment_tbl`
--

INSERT INTO `tender_appointment_tbl` (`tender_appointment_id`, `tender_id`, `insurance_name`, `insurance_level`, `bonds`, `collateral_warranties`, `limit_of_liability`, `form_of_appointment`, `documents_for_signature`, `execution`, `net_contrib`) VALUES
(1, 1, 'Public Liability,Products Liability', '1,2', 'Conditional/On Default Bond,Select Bonds,Tender/Bid Bond', 'Collateral Warranties', '3', 'Site Plan Edited_1541673847_.docx', 'Site Plan_1541673848_.docx', 'Deed', 'No'),
(11, 5, 'Indemnity,Professional', '1,2', 'Conditional/On Default Bond,Performance Bond', 'Third Party Rights', '2', '_1542269521_.env', '.env_1542269521_.example', 'Deed', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tender_bonds_tbl`
--

DROP TABLE IF EXISTS `tender_bonds_tbl`;
CREATE TABLE IF NOT EXISTS `tender_bonds_tbl` (
  `bonds_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) DEFAULT '0',
  `bond_name` varchar(50) DEFAULT '0',
  PRIMARY KEY (`bonds_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_comp_invite`
--

DROP TABLE IF EXISTS `tender_comp_invite`;
CREATE TABLE IF NOT EXISTS `tender_comp_invite` (
  `invite_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`invite_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_evaluation_tbl`
--

DROP TABLE IF EXISTS `tender_evaluation_tbl`;
CREATE TABLE IF NOT EXISTS `tender_evaluation_tbl` (
  `tender_eval_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `net_contribution_clause` int(11) DEFAULT '0',
  PRIMARY KEY (`tender_eval_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_evaluation_tbl`
--

INSERT INTO `tender_evaluation_tbl` (`tender_eval_id`, `tender_id`, `qualitative`, `quantitative`, `risk`, `organisation`, `organisation_project_exp`, `organisation_variety_of_services`, `organisation_awards`, `organisation_accreditations`, `orgranisation_relationship`, `individual`, `individual_project_exp`, `individual_years_exp`, `individual_industry_exp`, `individual_awards`, `individual_accrediations`, `individual_relationship`, `individual_communication_skills`, `individual_people_management`, `individual_time_management`, `individual_pro_active`, `individual_social_behavior`, `individual_hard_skills`, `insurances`, `bonds`, `third_parties`, `limit_of_liability`, `net_contribution_clause`) VALUES
(1, 1, 30, 50, 20, 30, 70, 10, 5, 5, 10, 70, 20, 15, 0, 5, 5, 5, 10, 5, 5, 10, 5, 15, 30, 30, 15, 15, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tender_pre_qualification_tbl`
--

DROP TABLE IF EXISTS `tender_pre_qualification_tbl`;
CREATE TABLE IF NOT EXISTS `tender_pre_qualification_tbl` (
  `pre_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) NOT NULL DEFAULT '0',
  `question` text NOT NULL,
  PRIMARY KEY (`pre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_pre_qualification_tbl`
--

INSERT INTO `tender_pre_qualification_tbl` (`pre_id`, `tender_id`, `question`) VALUES
(1, 1, 'What Is Lorem Ipsum?^What Is Lorem Ipsum?^What Is Lorem Ipsum?'),
(2, 5, 'Test^Tset^Tset');

-- --------------------------------------------------------

--
-- Table structure for table `tender_quality_assurance_statements_tbl`
--

DROP TABLE IF EXISTS `tender_quality_assurance_statements_tbl`;
CREATE TABLE IF NOT EXISTS `tender_quality_assurance_statements_tbl` (
  `statement_id` int(11) NOT NULL AUTO_INCREMENT,
  `quality_id` int(11) DEFAULT '0',
  `statement` varchar(50) DEFAULT '0',
  PRIMARY KEY (`statement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_quality_assurance_tbl`
--

DROP TABLE IF EXISTS `tender_quality_assurance_tbl`;
CREATE TABLE IF NOT EXISTS `tender_quality_assurance_tbl` (
  `quality_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `statement` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`quality_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender_queries_tbl`
--

DROP TABLE IF EXISTS `tender_queries_tbl`;
CREATE TABLE IF NOT EXISTS `tender_queries_tbl` (
  `tender_query_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_record_id` int(11) DEFAULT '0',
  `tender_id` int(11) DEFAULT '0',
  `question` varchar(255) DEFAULT '0',
  `response` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`tender_query_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_queries_tbl`
--

INSERT INTO `tender_queries_tbl` (`tender_query_id`, `project_record_id`, `tender_id`, `question`, `response`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'is it?', 'test resp', '2018-12-01 16:04:29', '2018-12-02 04:52:51'),
(3, 1, 1, 'test qery', NULL, '2018-12-02 04:52:51', '2018-12-02 04:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `tender_scope_advise_on_tbl`
--

DROP TABLE IF EXISTS `tender_scope_advise_on_tbl`;
CREATE TABLE IF NOT EXISTS `tender_scope_advise_on_tbl` (
  `advise_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `other_four` varchar(50) DEFAULT '8',
  PRIMARY KEY (`advise_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_scope_advise_on_tbl`
--

INSERT INTO `tender_scope_advise_on_tbl` (`advise_id`, `tender_id`, `advise_one`, `advise_two`, `advise_three`, `advise_four`, `advise_five`, `advise_six`, `monitor_one`, `monitor_two`, `monitor_three`, `collab_one`, `collab_two`, `collab_three`, `collab_four`, `coordinate_one`, `coordinate_two`, `other_one`, `other_two`, `other_three`, `other_four`) VALUES
(7, 1, '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0.1.2.3.4.5.6.7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7', '0,1,2,3,4,5,6,7'),
(8, 5, '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tender_scope_deliverables_tbl`
--

DROP TABLE IF EXISTS `tender_scope_deliverables_tbl`;
CREATE TABLE IF NOT EXISTS `tender_scope_deliverables_tbl` (
  `deliverables_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `proposal_num` varchar(50) DEFAULT '8',
  PRIMARY KEY (`deliverables_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_scope_deliverables_tbl`
--

INSERT INTO `tender_scope_deliverables_tbl` (`deliverables_id`, `tender_id`, `strategic_brief`, `project_programme`, `feasibility_study`, `design_responsibility`, `site_information`, `information_exchange_strategy`, `project_brief`, `risk_assessment`, `handover_strategy`, `project_execution_plan`, `design_proposal`, `strategic_raci`, `strategic_num`, `pprogramme_raci`, `pprogramme_num`, `feasibility_raci`, `feasibility_num`, `design_raci`, `design_num`, `site_raci`, `site_num`, `information_raci`, `information_num`, `project_raci`, `project_num`, `risk_raci`, `risk_num`, `handover_raci`, `handover_num`, `execution_raci`, `execution_num`, `proposal_raci`, `proposal_num`) VALUES
(7, 1, 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7', 'R,A,C,I', '0,1,2,3,4,5,6,7'),
(8, 5, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tender_scope_design_considerations_tbl`
--

DROP TABLE IF EXISTS `tender_scope_design_considerations_tbl`;
CREATE TABLE IF NOT EXISTS `tender_scope_design_considerations_tbl` (
  `design_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` int(11) DEFAULT '0',
  `question_one_applies_to` varchar(255) DEFAULT '0',
  `question_two_applies_to` varchar(255) DEFAULT '0',
  `question_three_applies_to` varchar(255) DEFAULT '0',
  `question_four_applies_to` varchar(255) DEFAULT '0',
  `question_five_applies_to` varchar(255) DEFAULT '0',
  PRIMARY KEY (`design_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_scope_design_considerations_tbl`
--

INSERT INTO `tender_scope_design_considerations_tbl` (`design_id`, `tender_id`, `question_one_applies_to`, `question_two_applies_to`, `question_three_applies_to`, `question_four_applies_to`, `question_five_applies_to`) VALUES
(7, 1, 'test 1', 'test 1', 'test 1', 'test 1', 'test 1'),
(8, 5, '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tender_scope_meetings_tbl`
--

DROP TABLE IF EXISTS `tender_scope_meetings_tbl`;
CREATE TABLE IF NOT EXISTS `tender_scope_meetings_tbl` (
  `meeting_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `site_inspection_num` varchar(50) DEFAULT '8',
  PRIMARY KEY (`meeting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_scope_meetings_tbl`
--

INSERT INTO `tender_scope_meetings_tbl` (`meeting_id`, `tender_id`, `pre_app_purpose`, `pre_app_attendees`, `pre_app_assumed_duration`, `pre_app_reoccurence`, `site_visits_purpose`, `site_visits_attendees`, `site_visits_assumed_duration`, `site_visits_reoccurence`, `riba_purpose`, `riba_attendees`, `riba_assumed_duration`, `riba_reoccurence`, `inspection_purpose`, `inspection_attendees`, `inspection_assumed_duration`, `inspection_reoccurence`, `pre_app_choice`, `pre_app_num`, `site_visits_choice`, `site_visits_num`, `riba_choice`, `riba_num`, `site_inspection_choice`, `site_inspection_num`) VALUES
(7, 1, 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 'Arrange,Attend,Minute', '0,1,2,3,4,5,6,7', 'Arrange,Attend,Minute', '0,1,2,3,4,5,6,7', 'Arrange,Attend,Minute', '0,1,2,3,4,5,6,7', 'Arrange,Attend,Minute', '0,1,2,3,4,5,6,7'),
(8, 5, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, '8', NULL, '8', NULL, '8', NULL, '8');

-- --------------------------------------------------------

--
-- Table structure for table `tender_tbl`
--

DROP TABLE IF EXISTS `tender_tbl`;
CREATE TABLE IF NOT EXISTS `tender_tbl` (
  `tender_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `saved_times` int(11) DEFAULT NULL,
  PRIMARY KEY (`tender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_tbl`
--

INSERT INTO `tender_tbl` (`tender_id`, `project_record_id`, `services`, `status`, `start`, `end`, `bids_received`, `queries_received`, `time_remaining`, `tender_count`, `created_at`, `updated_at`, `saved_times`) VALUES
(1, 1, 'Acoustic Engineer', 'Active', '2018-12-01 22:23:21', '2018-11-01 00:00:00', 2, 'TBC', NULL, NULL, '2018-11-08 09:42:50', '2018-12-01 14:23:21', NULL),
(5, 2, 'Fire Engineer', 'Drafted', '2018-11-15 15:55:33', NULL, NULL, 'TBC', 'TBC', NULL, '2018-11-15 07:55:38', '2018-11-15 07:55:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transport_link_tbl`
--

DROP TABLE IF EXISTS `transport_link_tbl`;
CREATE TABLE IF NOT EXISTS `transport_link_tbl` (
  `transport_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_road` varchar(255) CHARACTER SET latin1 DEFAULT '0',
  `tube_station_one` varchar(255) CHARACTER SET latin1 DEFAULT '0',
  `tube_station_two` varchar(255) CHARACTER SET latin1 DEFAULT '0',
  `bus_lines` varchar(255) CHARACTER SET latin1 DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_record_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`transport_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transport_link_tbl`
--

INSERT INTO `transport_link_tbl` (`transport_id`, `main_road`, `tube_station_one`, `tube_station_two`, `bus_lines`, `created_at`, `updated_at`, `project_record_id`) VALUES
(1, 'Surrey Quadds', 'Canada water 0.5 km', 'Surrey Quas 1.5 km', '701,205,103', '2018-11-08 17:31:44', '2018-11-08 17:31:44', 1),
(2, 'Surrey Quadds', 'Canada water 0.5 km', 'Surrey Quas 1.5 km', '701,205,103', '2018-11-15 15:54:37', '2018-11-15 15:54:37', 2);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_use_tbl`
--

DROP TABLE IF EXISTS `type_of_use_tbl`;
CREATE TABLE IF NOT EXISTS `type_of_use_tbl` (
  `use_id` int(11) NOT NULL AUTO_INCREMENT,
  `use_name` longtext,
  `use_area` longtext,
  `use_units` longtext,
  `use_type` longtext,
  `project_record_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`use_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_use_tbl`
--

INSERT INTO `type_of_use_tbl` (`use_id`, `use_name`, `use_area`, `use_units`, `use_type`, `project_record_id`) VALUES
(2, 'Commercial,Aviation,Education', '30000,4000,5000', '200,100,5000', 'High,High,High', 1),
(3, 'Residential', '500000', '250', 'High-end', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts_models`
--

DROP TABLE IF EXISTS `user_accounts_models`;
CREATE TABLE IF NOT EXISTS `user_accounts_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(20, 'Demrick Niel Adaza', 'Vista Land', 'vista@gmail.com', '98755545', '$2y$10$mndVK1rtzAItIzWCHhjbluSsuf.0FdXE7GFx9siqPpTGA667ipUau', '2018-10-26 15:27:57', '2018-10-26 15:27:57'),
(21, 'test 123', 'test123', 't@gmail.com', '125456879', '$2y$10$H53tNOZFADoy8HnTkQEqpeCBBsGYLuKtaFHFucxtks7CxlHKtUUei', '2018-12-01 05:44:09', '2018-12-01 05:44:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
