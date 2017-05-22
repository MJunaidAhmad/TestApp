-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Maio-2017 às 11:12
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alenbaga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campaigns`
--

CREATE TABLE `campaigns` (
  `id_campaign` int(11) NOT NULL,
  `field` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `commentaries` varchar(30) DEFAULT NULL,
  `start_date` date NOT NULL,
  `finish_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `campaigns`
--

INSERT INTO `campaigns` (`id_campaign`, `field`, `year`, `commentaries`, `start_date`, `finish_date`) VALUES
(1, 'Carrasca', 0, '0', '2017-05-14', '2017-05-14'),
(2, 'Carrasca', 0, '0', '2017-05-14', '2017-05-14'),
(3, 'Carrasqueira', 0, '0', '2017-05-20', '2017-12-05'),
(4, 'aaaaa', 0, '0', '2017-05-09', NULL),
(5, 'bbbb', 0, '0', '2017-05-16', NULL),
(6, 'eeee', 0, '0', '2017-05-16', '2017-05-29'),
(7, 'tttttt', 0, '0', '2017-05-15', '2017-08-02'),
(8, 'PPPPP', 0, '0', '2017-05-20', '2017-07-25'),
(9, 'Carrasqueira', 0, '0', '2017-05-01', '2017-08-31'),
(10, 'Carrasca', 2017, 'Corte Baixo', '2017-05-07', '2017-07-27'),
(11, 'aaaa', 2017, 'ddd', '2017-05-02', NULL),
(12, 'zzzzz', 2018, 'yyyy', '2017-05-26', '2017-07-27'),
(13, 'Carrasqueira', 2017, 'Cutback', '2017-05-08', '2017-05-27'),
(14, 'Lisbon', 2017, '', '2017-05-21', '2017-08-18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `companies`
--

CREATE TABLE `companies` (
  `id_company` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id_company`, `name`) VALUES
(1, 'AAAAAA'),
(2, 'BBBBBB'),
(3, 'AAABBB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hours`
--

CREATE TABLE `hours` (
  `id_hours` int(11) NOT NULL,
  `num_worker` int(11) NOT NULL,
  `date` date NOT NULL,
  `hours` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hours`
--

INSERT INTO `hours` (`id_hours`, `num_worker`, `date`, `hours`) VALUES
(44, 0, '2017-05-18', 8),
(45, 9, '2017-05-18', 8),
(46, 0, '2017-05-01', 4),
(47, 4, '2017-05-01', 4),
(48, 3, '2017-05-01', 4),
(49, 22, '2017-05-08', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `packagings`
--

CREATE TABLE `packagings` (
  `id_packing` int(11) NOT NULL,
  `cuvettes_grams` decimal(10,0) NOT NULL,
  `cuvette_box` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `picking`
--

CREATE TABLE `picking` (
  `id_picking` int(11) NOT NULL,
  `num_worker` int(11) NOT NULL,
  `id_packing_type` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_balance` varchar(50) NOT NULL,
  `id_campaign` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `picking`
--

INSERT INTO `picking` (`id_picking`, `num_worker`, `id_packing_type`, `quantity`, `date`, `user_balance`, `id_campaign`) VALUES
(6, 0, 4, 2, '2017-05-18', 'alenbaga', 2),
(7, 0, 3, 3, '2017-05-18', 'alenbaga', 2),
(8, 0, 3, 4, '2017-05-18', 'alenbaga', 2),
(9, 0, 4, 4, '2017-05-01', 'alenbaga', 2),
(10, 0, 4, 2, '2017-05-01', 'alenbaga', 2),
(11, 0, 4, 1, '2017-05-01', 'alenbaga', 2),
(12, 4, 4, 1, '2017-05-01', 'alenbaga', 2),
(13, 4, 3, 2, '2017-05-01', 'alenbaga', 2),
(14, 4, 4, 3, '2017-05-01', 'alenbaga', 2),
(15, 3, 4, 2, '2017-05-01', 'alenbaga', 2),
(16, 3, 3, 5, '2017-05-01', 'alenbaga', 2),
(17, 3, 4, 1, '2017-05-01', 'alenbaga', 2),
(18, 9, 4, 2, '2017-05-18', 'alenbaga', 2),
(19, 2, 2, 2, '2017-05-20', 'alenbaga', 5),
(20, 22, 4, 2, '2017-05-08', 'alenbaga', 3),
(21, 22, 99, 2, '2017-05-20', 'alenbaga', 45),
(22, 23, 99, 21, '2017-05-09', 'alenbaga', 11),
(23, 21, 99, 12, '2017-05-01', 'alenbaga', 12),
(24, 23, 99, 3, '2017-05-02', 'aaaa', 2),
(28, 3, 4, 2, '2017-05-21', 'alenbaga', 2),
(29, 3, 6, 2, '2017-05-01', 'alenbaga', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `temp_hours`
--

CREATE TABLE `temp_hours` (
  `date` date NOT NULL,
  `hours` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `num_worker` int(11) NOT NULL,
  `id_campaign` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `num_worker`, `id_campaign`, `password`, `trn_date`) VALUES
(9, 'alenbaga', 21, 21, 'd3b7b949048079041ab4f7fcfed82953', '2017-05-14 17:49:43'),
(10, 'aaaa', 2, 2, '74b87337454200d4d33f80c4663dc5e5', '2017-05-20 12:55:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `workers`
--

CREATE TABLE `workers` (
  `id_worker` int(11) NOT NULL,
  `num_worker` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_company` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `workers`
--

INSERT INTO `workers` (`id_worker`, `num_worker`, `name`, `id_company`, `gender`, `year`) VALUES
(1, 0, 'Pedro Silva', 2, 'M', 21),
(2, 4, 'NNN', 1, 'M', 21),
(3, 45, 'Peter', 2, 'M', 3),
(4, 45, 'Juan', 1, 'M', 2017);

-- --------------------------------------------------------

--
-- Estrutura da tabela `workers_hours`
--

CREATE TABLE `workers_hours` (
  `id_workers_hours` int(11) NOT NULL,
  `num_worker` int(11) NOT NULL,
  `id_campaign` int(11) NOT NULL,
  `date_in` datetime DEFAULT NULL,
  `date_out` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `workers_hours`
--

INSERT INTO `workers_hours` (`id_workers_hours`, `num_worker`, `id_campaign`, `date_in`, `date_out`) VALUES
(3, 6, 43, '2017-05-20 22:12:25', '2017-05-20 22:12:29'),
(2, 3, 43, '2017-05-20 21:58:09', '2017-05-20 22:01:17'),
(4, 7, 43, '2017-05-20 22:13:05', '2017-05-20 22:13:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id_campaign`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`id_hours`);

--
-- Indexes for table `packagings`
--
ALTER TABLE `packagings`
  ADD PRIMARY KEY (`id_packing`);

--
-- Indexes for table `picking`
--
ALTER TABLE `picking`
  ADD PRIMARY KEY (`id_picking`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id_worker`);

--
-- Indexes for table `workers_hours`
--
ALTER TABLE `workers_hours`
  ADD PRIMARY KEY (`id_workers_hours`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id_campaign` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hours`
--
ALTER TABLE `hours`
  MODIFY `id_hours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `picking`
--
ALTER TABLE `picking`
  MODIFY `id_picking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id_worker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `workers_hours`
--
ALTER TABLE `workers_hours`
  MODIFY `id_workers_hours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
