-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2015 at 11:17 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rezervacije`
--

-- --------------------------------------------------------

--
-- Table structure for table `naloge`
--

CREATE TABLE IF NOT EXISTS `naloge` (
`id` int(5) NOT NULL,
  `naslov` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `kljucneBesede` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `datumKreiranja` date NOT NULL,
  `datumObjave` date NOT NULL,
  `zacetniDatum` date NOT NULL,
  `koncniDatum` date NOT NULL,
  `steviloKandidatov` int(4) NOT NULL,
  `avtor` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=17 ;

--
-- Table structure for table `nalogeuporabnika`
--

CREATE TABLE IF NOT EXISTS `nalogeuporabnika` (
`id` int(11) NOT NULL,
  `nalogaID` int(11) NOT NULL,
  `uporabnikID` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=8 ;


--
-- Table structure for table `uporabniki`
--

CREATE TABLE IF NOT EXISTS `uporabniki` (
`id` int(5) NOT NULL,
  `username` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `geslo` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `ime` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `priimek` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `emso` int(10) NOT NULL,
  `datumRegistracije` datetime NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=4 ;

--
--
-- Indexes for dumped tables
--

--
-- Indexes for table `naloge`
--
ALTER TABLE `naloge`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nalogeuporabnika`
--
ALTER TABLE `nalogeuporabnika`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uporabniki`
--
ALTER TABLE `uporabniki`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `naloge`
--
ALTER TABLE `naloge`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `nalogeuporabnika`
--
ALTER TABLE `nalogeuporabnika`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `uporabniki`
--
ALTER TABLE `uporabniki`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
