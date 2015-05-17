-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2015 at 09:56 PM
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
-- Dumping data for table `naloge`
--

INSERT INTO `naloge` (`id`, `naslov`, `opis`, `kljucneBesede`, `datumKreiranja`, `datumObjave`, `zacetniDatum`, `koncniDatum`, `steviloKandidatov`, `avtor`) VALUES
(1, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 15, 2),
(2, 'Naziv1', 'Opis1', 'Besede1', '2015-05-07', '2015-05-22', '2015-05-29', '2015-05-29', 25, 2),
(3, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 15, 2),
(4, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 10, 2),
(5, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 5, 2),
(6, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 2, 2),
(7, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 22, 2),
(8, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 225, 2),
(9, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 225, 2),
(10, 'Naziv', 'Opis', 'Besede', '2015-05-08', '2015-05-07', '2015-05-13', '2015-05-27', 22, 2),
(11, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 225, 2),
(12, 'Naziv', 'Opis', 'Besede', '2015-05-07', '2015-05-07', '2015-05-13', '2015-05-27', 225, 2),
(13, 'faef', 'uibo', 'poj', '2015-05-07', '2015-05-08', '2015-05-22', '2015-05-22', 1, 2),
(14, 'faef', 'uibo', 'poj', '2015-05-07', '2015-05-08', '2015-05-22', '2015-05-22', 110, 2),
(15, 'Naziv naloge 1', 'opis', 'fadg', '2015-05-12', '2015-05-12', '2015-05-01', '2015-05-11', 15, 3),
(16, 'nefnpi', 'ibnqp', '&scaron;nqp', '2015-05-12', '2015-05-12', '2015-05-05', '2015-05-21', 55, 3);

-- --------------------------------------------------------

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
-- Dumping data for table `nalogeuporabnika`
--

INSERT INTO `nalogeuporabnika` (`id`, `nalogaID`, `uporabnikID`, `status`) VALUES
(1, 3, 1, 0),
(2, 1, 3, 2),
(3, 1, 3, 2),
(4, 2, 3, 2),
(5, 10, 1, 1),
(6, 6, 1, 2),
(7, 6, 1, 2);

-- --------------------------------------------------------

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
-- Dumping data for table `uporabniki`
--

INSERT INTO `uporabniki` (`id`, `username`, `geslo`, `email`, `ime`, `priimek`, `emso`, `datumRegistracije`, `status`) VALUES
(1, '123', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Istinic@gmail.com', 'Patrik', 'Is', 1235569845, '2015-05-04 14:05:42', 1),
(2, '1234', '2daabc8f18fb7e2acf26b2ce498cce047dcfc6a8', 'Istinic@gmail.com', 'Patrik', 'IstiniÄ', 0, '2015-05-04 14:07:35', 1),
(3, 'Miha', '2daabc8f18fb7e2acf26b2ce498cce047dcfc6a8', 'blaz@gmail.com', 'Miha', 'Friškovec', 555, '2015-05-04 14:08:54', 2);

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
