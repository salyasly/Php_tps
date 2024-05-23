-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2024 at 06:03 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_tp_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `Matricule` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Date de Naissance` date NOT NULL,
  `Sexe` varchar(50) NOT NULL,
  `Adresse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`Matricule`, `Nom`, `Prenom`, `Date de Naissance`, `Sexe`, `Adresse`) VALUES
('55', 'mohamed', 'Oumar', '2024-05-09', 'Masculin', 'Abidjan'),
('66', 'Traore', 'Mariam', '2024-05-03', 'Feminin', 'Petit village de Napier'),
('gbfhjn,', 'vcbn', 'cbgvn', '2024-05-01', 'Masculin', ' nb,n;,'),
('mat-1', 'sadik', 'hicham', '2001-06-04', 'Masculin', 'el jadida'),
('mat-2', 'tazi', 'amina', '2001-06-04', 'Féminin', 'casablanca'),
('mat-3', 'tester', 'anas', '2001-01-02', 'Masculin', 'rabat'),
('mat-4', 'test1', 'tester', '2003-02-01', 'Féminin', 'fes'),
('mat-6', 'Soumahoro', 'Saly', '2024-05-03', 'Masculin', 'Abidjan'),
('mat-8', 'Fofana', 'Thira', '2024-04-30', 'Feminin', 'Mali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`Matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
