-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 26-Nov-2018 às 02:03
-- Versão do servidor: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweet-store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `filter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `filter`) VALUES
(1, 'first cake', 5, 'img/cake-1.jpeg', 'filter cakes'),
(2, 'second cake', 10, 'img/cake-2.jpeg', 'filter cakes'),
(3, 'third cake', 15, 'img/cake-3.jpeg', 'filter cakes'),
(4, 'first cupcake', 5, 'img/cupcake-1.jpeg', 'filter cupcakes'),
(5, 'second cupcake', 10, 'img/cupcake-2.jpeg', 'filter cupcakes'),
(6, 'third cupcake', 15, 'img/cupcake-3.jpeg', 'filter cupcakes'),
(7, 'first sweet', 5, 'img/sweets-1.jpeg', 'filter sweets'),
(8, 'second sweet', 10, 'img/sweets-2.jpeg', 'filter sweets'),
(9, 'third sweet', 15, 'img/sweets-3.jpeg', 'filter sweets'),
(10, 'first doughnut', 5, 'img/doughnut-1.jpeg', 'filter doughnuts'),
(11, 'second doughnut', 10, 'img/doughnut-2.jpeg', 'filter doughnuts'),
(12, 'third doughnut', 15, 'img/doughnut-3.jpeg', 'filter doughnuts');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
