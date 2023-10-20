-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 01:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalaluno`
--

-- --------------------------------------------------------

--
-- Table structure for table `aluno`
--

CREATE TABLE `aluno` (
  `RA` varchar(13) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `CPF` char(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `primeiro_acesso` int(1) NOT NULL,
  `token` varchar(64) DEFAULT NULL,
  `expiracao_token` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`RA`, `nome`, `CPF`, `data_nascimento`, `email`, `telefone`, `senha`, `primeiro_acesso`, `token`, `expiracao_token`) VALUES
('2920482111009', 'Lais Berto', '39871726894', '1993-12-02', 'laiscostast2@gmail.com', '11885654562', '85d733a2bbcf57d8b5db7bad387597980567d2f5ac832ad3548d4bb01dd5658c', 0, 'd398aad40fbd69f157d877064577651ad4b71cbdee8290338ee84fc37547fcc8', '2023-10-20 20:01:24'),
('2920482111026', 'Helio Jesus', '39854712569', '2001-11-13', 'laiscostast2@gmail.com', '22547856589785', 'f6f75c266917045287111be890eb6d55ed926f8e0cb65588507d339745341ce0', 0, NULL, NULL),
('2920482111030', 'Marcos Berto', '12345678985', '2001-11-24', 'laiscostast2@gmail.com', '11665874423', '85d733a2bbcf57d8b5db7bad387597980567d2f5ac832ad3548d4bb01dd5658c', 0, '4515a29a6475c64ce95a0e79f88ec5dada889f7a1989e63e1fe6ef71b9318324', '2023-10-15 21:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `calendario`
--

CREATE TABLE `calendario` (
  `id` int(30) NOT NULL,
  `ra` varchar(13) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `color` varchar(15) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calendario`
--

INSERT INTO `calendario` (`id`, `ra`, `title`, `description`, `color`, `start`, `end`) VALUES
(5, '2920482111009', 'Teste', 'Teste', NULL, '2023-10-14 14:05:54', NULL),
(6, '2920482111009', 'Teste', 'Teste', NULL, '2023-10-15 14:05:54', NULL),
(7, '2920482111030', 'teste', 'teste', NULL, '2023-10-16 00:38:04', '2023-10-23 00:38:04'),
(8, '2920482111030', 'sdfsf', 'fsdfs', NULL, '2023-10-25 06:30:00', '2023-10-25 06:30:00'),
(9, '2920482111030', 'OLá', 'Teste 2', NULL, '2023-10-25 10:00:00', '2023-10-25 13:00:00'),
(10, '2920482111030', 'prova', 'teste', NULL, '2023-10-31 09:00:00', '2023-10-31 10:00:00'),
(11, '2920482111030', 'Hello world!', '', NULL, '2023-10-24 07:30:00', '2023-10-24 07:30:00'),
(12, '2920482111026', 'teste', 'teste', NULL, '2023-10-10 11:00:00', '2023-10-10 12:00:00'),
(13, '2920482111009', 'teste cor', 'teste', '', '2023-10-31 10:00:00', '2023-10-31 10:00:00'),
(14, '2920482111009', 'teste azul', 'teste', 'blue', '2023-10-31 11:00:00', '2023-10-31 11:00:00'),
(15, '2920482111009', '', '', '', '2023-10-31 12:00:00', '2023-11-08 12:00:00'),
(16, '2920482111009', 'teste red', 'edaed', 'red', '2023-10-31 07:00:00', '2023-11-01 07:00:00'),
(17, '2920482111009', 'teste alteracao', 'sdfdsfsdf', 'light_blue', '2023-10-23 12:00:00', '2023-10-24 12:00:00'),
(18, '2920482111009', 'dzfgzdfg', 'xdfgxdfg', '', '2023-10-17 11:00:00', '2023-10-17 11:00:00'),
(19, '2920482111009', 'sdfzsdf', 'dsfsdf', 'light_blue', '2023-10-31 04:30:00', '2023-11-01 04:30:00'),
(20, '2920482111009', 'sdasd', 'asdas', 'red', '2023-10-31 03:00:00', '2023-11-02 03:00:00'),
(21, '2920482111009', 'dsfsdf', 'sdsdsd', 'gray', '2023-10-31 02:00:00', '2023-11-03 02:00:00'),
(22, '2920482111009', 'teste de alteracao', 'alterando teste', 'gray', '2023-10-24 12:00:00', '2023-10-24 12:00:00'),
(23, '2920482111009', 'teste edicao', 'teste edicao', 'light_blue', '2023-10-24 12:00:00', '2023-10-25 12:00:00'),
(24, '2920482111009', 'Teste', 'sdfdsfsdf', 'gray', '2023-10-24 12:00:00', '2023-10-26 12:00:00'),
(25, '2920482111009', 'Teste', 'teste evento', 'red', '2023-10-28 08:00:00', '2023-10-28 10:00:00'),
(26, '2920482111009', 'Teste', 'teste evento', 'gray', '2023-10-28 08:00:00', '2023-10-28 10:00:00'),
(27, '2920482111009', 'dfsdfsdf', 'sdfdsfsdf', 'gray', '2023-10-24 12:00:00', '2023-10-26 12:00:00'),
(28, '2920482111009', 'sdasd', 'asdas', 'light_blue', '2023-10-31 03:00:00', '2023-11-02 03:00:00'),
(29, '2920482111009', 'teste', 'teste cor', 'red', '2023-10-27 08:00:00', '2023-10-27 08:00:00'),
(30, '2920482111009', 'teste', 'teste cor', 'light_red', '2023-10-27 08:00:00', '2023-10-30 08:00:00'),
(31, '2920482111009', 'Teste automação', 'testando automação', 'gray', '2023-10-20 09:00:00', '2023-10-20 09:00:00'),
(32, '2920482111009', 'asdsad', 'sdsad', 'gray', '2023-10-19 08:00:00', '2023-10-19 08:00:00'),
(33, '2920482111009', 'asdasd', 'aSDASD', 'gray', '2023-10-21 10:30:00', '2023-10-21 10:30:00'),
(34, '2920482111009', 'dfds', 'dsfsfd', 'gray', '2023-10-18 08:00:00', '2023-10-18 08:00:00'),
(35, '2920482111009', 'sadsad', 'sadsad', 'gray', '2023-10-21 07:30:00', '2023-10-21 07:30:00'),
(36, '2920482111009', 'rgdrgdrg', 'fgfdgfdg', 'green', '2023-10-20 10:00:00', '2023-10-20 23:00:00'),
(37, '2920482111009', 'teste lucas', 'teste', 'green', '2023-10-26 12:30:00', '2023-10-26 12:30:00'),
(38, '2920482111030', 'Teste 3', 'testando ', 'gray', '2023-10-26 09:00:00', '2023-10-28 09:00:00'),
(39, '2920482111030', 'teste azul', 'teste', 'blue', '2023-10-26 04:00:00', '2023-10-28 04:00:00'),
(40, '2920482111030', 'vermelho', 'ggj', 'red', '2023-10-26 15:00:00', '2023-10-28 03:00:00'),
(41, '2920482111009', 'teste', 'teste', 'green', '2023-11-03 08:00:00', '2023-11-03 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int(11) NOT NULL,
  `nome_curso` varchar(20) DEFAULT NULL,
  `turno` varchar(20) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dia_semana`
--

CREATE TABLE `dia_semana` (
  `cod_dia_semana` int(11) NOT NULL,
  `dia_semana` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dia_semana`
--

INSERT INTO `dia_semana` (`cod_dia_semana`, `dia_semana`) VALUES
(1, 'Segunda-Feira'),
(2, 'Terça-Feira'),
(3, 'Quarta-Feira'),
(4, 'Quinta-Feira'),
(5, 'Sexta-Feira'),
(6, 'Sábado'),
(7, 'Domingo');

-- --------------------------------------------------------

--
-- Table structure for table `disciplina`
--

CREATE TABLE `disciplina` (
  `cod_disciplina` int(11) NOT NULL,
  `nome_disciplina` varchar(20) DEFAULT NULL,
  `carga_horaria` int(11) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `cod_horario` int(11) NOT NULL,
  `hora` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `cod_professor` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`RA`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ra` (`ra`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Indexes for table `dia_semana`
--
ALTER TABLE `dia_semana`
  ADD PRIMARY KEY (`cod_dia_semana`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`cod_disciplina`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`cod_horario`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`cod_professor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calendario`
--
ALTER TABLE `calendario`
  ADD CONSTRAINT `calendario_ibfk_1` FOREIGN KEY (`ra`) REFERENCES `aluno` (`RA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
