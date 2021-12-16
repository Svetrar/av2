-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Dez-2021 às 13:32
-- Versão do servidor: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `av2_banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `av2_clientes`
--

DROP TABLE IF EXISTS `av2_clientes`;
CREATE TABLE IF NOT EXISTS `av2_clientes` (
  `nome` int(10) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(100) NOT NULL,
  `postalCode` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `passaporte` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dataNascimento` varchar(100) NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
