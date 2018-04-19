-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Abr-2018 às 04:27
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `disc_produto` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qt_total` int(255) NOT NULL,
  `qt_atual` int(255) NOT NULL,
  `vl_unitario` decimal(10,2) NOT NULL,
  `vl_total` decimal(10,2) NOT NULL,
  `UF` varchar(50) DEFAULT NULL,
  `cod` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`disc_produto`, `qt_total`, `qt_atual`, `vl_unitario`, `vl_total`, `UF`, `cod`) VALUES
('PRODUTO A', 695, 365, '152.51', '236.52', 'UND', 1),
('PRODUTO B', 125, 1256, '125.69', '256.25', 'CXS', 2),
('PRODUTO C', 3658, 256, '265.00', '256.25', '625.26', 3),
('PRODUTO D', 0, 2665, '2122.00', '256.65', 'PCT', 4),
('PRODUTO A', 695, 365, '152.51', '236.52', 'UND', 5),
('PRODUTO B', 125, 1256, '125.69', '256.25', 'CXS', 6),
('PRODUTO C', 3658, 256, '265.00', '256.25', '625.26', 7),
('PRODUTO D', 0, 2665, '2122.00', '256.65', 'PCT', 8),
('PRODUTO A', 695, 365, '152.51', '236.52', 'UND', 9),
('PRODUTO B', 125, 1256, '125.69', '256.25', 'CXS', 10),
('PRODUTO C', 3658, 256, '265.00', '256.25', '625.26', 11),
('PRODUTO D', 0, 2665, '2122.00', '256.65', 'PCT', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_cliente`
--

CREATE TABLE `tab_cliente` (
  `nome` varchar(50) NOT NULL,
  `fone` varchar(11) NOT NULL,
  `idade` int(3) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `tab_cliente`
--

INSERT INTO `tab_cliente` (`nome`, `fone`, `idade`, `profissao`, `email`, `endereco`, `cidade`, `uf`) VALUES
('Paulo Azevedo', '7734251548', 20, 'Analista de Sistemas', 'paulo@teste.com.br', 'Av. Luis Eduardo', 'Vitória da Conquista', 'Bahia'),
('Tiago Martins', '7734251548', 20, 'Analista de Sistemas', 'paulo@teste.com.br', 'Av. Luis Eduardo', 'Vitória da Conquista', 'Bahia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
