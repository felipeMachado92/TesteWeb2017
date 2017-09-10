-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2017 às 05:36
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testeweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mercadoria`
--

CREATE TABLE `tb_mercadoria` (
  `cd_mercadoria` int(11) NOT NULL,
  `tp_mercadoria` varchar(20) NOT NULL,
  `nm_mercadoria` varchar(80) NOT NULL,
  `vl_mercadoria` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_mercadoria`
--

INSERT INTO `tb_mercadoria` (`cd_mercadoria`, `tp_mercadoria`, `nm_mercadoria`, `vl_mercadoria`) VALUES
(1, 'higiene', 'sabonete', '3.50'),
(2, 'bebida', 'coca-cola', '4.59'),
(3, 'limpeza', 'veja multiuso', '3.95'),
(4, 'vestimento', 'camiseta', '30.00'),
(5, 'vestimento', 'cueca', '15.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_negociacao`
--

CREATE TABLE `tb_negociacao` (
  `cd_negociacao` int(11) NOT NULL,
  `qtd_mercadoria` int(11) NOT NULL,
  `tp_negociacao` varchar(10) DEFAULT NULL,
  `vl_total` decimal(9,2) NOT NULL,
  `cd_mercadoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_negociacao`
--

INSERT INTO `tb_negociacao` (`cd_negociacao`, `qtd_mercadoria`, `tp_negociacao`, `vl_total`, `cd_mercadoria`) VALUES
(1, 2, 'compra', '7.00', 1),
(2, 1, 'venda', '3.95', 3),
(3, 1, 'venda', '4.59', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mercadoria`
--
ALTER TABLE `tb_mercadoria`
  ADD PRIMARY KEY (`cd_mercadoria`);

--
-- Indexes for table `tb_negociacao`
--
ALTER TABLE `tb_negociacao`
  ADD PRIMARY KEY (`cd_negociacao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_negociacao`
--
ALTER TABLE `tb_negociacao`
  MODIFY `cd_negociacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
