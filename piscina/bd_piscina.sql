-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24-Jul-2018 às 04:18
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_piscina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `parametros`
--

DROP TABLE IF EXISTS `parametros`;
CREATE TABLE IF NOT EXISTS `parametros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `alcalinidade` int(11) NOT NULL,
  `ph` float NOT NULL,
  `cloro` float NOT NULL,
  `cor` varchar(255) NOT NULL,
  `produtos` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `parametros`
--

INSERT INTO `parametros` (`id`, `data`, `alcalinidade`, `ph`, `cloro`, `cor`, `produtos`) VALUES
(1, '2018-07-06 16:45:00', 10, 7.4, 2, 'turva', '2kg de decantandor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
