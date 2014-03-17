-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2013 at 03:37 PM
-- Server version: 5.5.30
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wpallday_Freeze`
--

-- --------------------------------------------------------

--
-- Table structure for table `Clicked`
--

DROP TABLE IF EXISTS `Clicked`;
CREATE TABLE IF NOT EXISTS `Clicked` (
  `item` text NOT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Clicked`
--

INSERT INTO `Clicked` (`item`, `value`) VALUES
('Updating', 'SlakaWear');

-- --------------------------------------------------------

--
-- Table structure for table `Project`
--

DROP TABLE IF EXISTS `Project`;
CREATE TABLE IF NOT EXISTS `Project` (
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Project`
--

INSERT INTO `Project` (`Name`) VALUES
('Holistic Health'),
('Killer Spots'),
('SlakaWear');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

DROP TABLE IF EXISTS `todos`;
CREATE TABLE IF NOT EXISTS `todos` (
  `todo` text NOT NULL,
  `project` text NOT NULL,
  `position` int(11) NOT NULL,
  `counter` int(11) NOT NULL AUTO_INCREMENT,
  `headline` text NOT NULL,
  `isheadline` tinyint(4) NOT NULL DEFAULT '0',
  `alerttype` text NOT NULL,
  PRIMARY KEY (`counter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`todo`, `project`, `position`, `counter`, `headline`, `isheadline`, `alerttype`) VALUES
('Work On!', 'eh2', 1, 13, 'urgent', 1, ''),
('When You Can\r\n', 'eh', 3, 14, 'medium', 1, ''),
('Someday\r\n', 'Eh', 7, 15, 'lower', 1, ''),
('Get Done!', 'eh', 0, 31, '', 1, ''),
('Code HTML5 and CSS3', 'Holistic Health', 8, 33, ' ', 0, 'greenAlert'),
('Testing the last one', 'Holistic Health', 5, 36, ' ', 0, 'yellowAlert'),
('One More Test', 'Test Project', 2, 37, ' ', 0, 'darkOrangeAlert'),
('Testing item', 'Killer Spots', 6, 39, ' ', 0, 'yellowAlert'),
('Rebuild Home Page', 'SlakaWear', 4, 40, ' ', 0, 'yellowAlert');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
