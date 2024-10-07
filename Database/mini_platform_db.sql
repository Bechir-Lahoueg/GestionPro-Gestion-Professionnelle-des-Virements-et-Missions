-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_platform_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` int(11) NOT NULL,
  `distinataire` varchar(100) NOT NULL,
  `poste` varchar(100) NOT NULL,
  `domaine` varchar(100) NOT NULL,
  `date_de_debut_mission` date NOT NULL,
  `date_de_fin_mission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `distinataire`, `poste`, `domaine`, `date_de_debut_mission`, `date_de_fin_mission`) VALUES
(4, '', 'test', 'test', '2001-10-18', '2020-11-25'),
(5, '', 'info', 'info', '2024-05-23', '2024-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `rh`
--

CREATE TABLE `rh` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rh`
--

INSERT INTO `rh` (`id`, `mail`, `pwd`, `name`) VALUES
(1, 'rh@gmail.com', 'rh@gmail.com', 'nourdin ben hamouda'),
(2, 'bechir@gmail.com', '391152f8da15479caf5ac3477a5d8714', 'bechir'),
(4, 'fifi@gmail.com', '2430242dc52b9fec75095457ac808899', 'fifi');

-- --------------------------------------------------------

--
-- Table structure for table `table_utilisateurs`
--

CREATE TABLE `table_utilisateurs` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `num_cin` varchar(20) NOT NULL,
  `domaine_activite` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cin_num` varchar(50) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `lieu_de_naissance` varchar(100) NOT NULL,
  `pays_de_residence` varchar(100) NOT NULL,
  `poste` varchar(100) NOT NULL,
  `domaine_d_activite` varchar(100) NOT NULL,
  `nom_du_client_final` varchar(100) NOT NULL,
  `nom_du_representant_du_client` varchar(100) NOT NULL,
  `mail_du_representant_du_client` varchar(100) NOT NULL,
  `poste_du_representant_du_client` varchar(100) NOT NULL,
  `date_de_debut_de_la_mission` date NOT NULL,
  `date_de_fin_de_la_mission` date NOT NULL,
  `TJM` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `cin_num`, `date_de_naissance`, `lieu_de_naissance`, `pays_de_residence`, `poste`, `domaine_d_activite`, `nom_du_client_final`, `nom_du_representant_du_client`, `mail_du_representant_du_client`, `poste_du_representant_du_client`, `date_de_debut_de_la_mission`, `date_de_fin_de_la_mission`, `TJM`) VALUES
(3, 'John Doe', 'jdoe@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', '123456789', '1985-06-15', 'New York', 'USA', 'Consultant', 'IT', 'TechCorp', 'Jane Smith', 'jane.smith@techcorp.com', 'Project Manager', '2024-06-01', '2024-12-01', 800.00),
(8, 'aa', 'aa@gmail.com', '3979576bcdcbd166d005a5b225e1bc52', '1245655', '2024-05-23', 'nabeul', 'tns', '3000', '', '', '', '', '', '0000-00-00', '0000-00-00', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `virements`
--

CREATE TABLE `virements` (
  `id` int(11) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `virements`
--

INSERT INTO `virements` (`id`, `montant`, `type`, `date`) VALUES
(3, 0.00, 'Rénumération', '2024-05-20'),
(4, 7555.00, 'Cooptation', '2024-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rh`
--
ALTER TABLE `rh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_utilisateurs`
--
ALTER TABLE `table_utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `virements`
--
ALTER TABLE `virements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rh`
--
ALTER TABLE `rh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_utilisateurs`
--
ALTER TABLE `table_utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `virements`
--
ALTER TABLE `virements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
