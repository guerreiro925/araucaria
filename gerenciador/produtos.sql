-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jun-2017 às 20:47
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `araucaria_servidor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `data` date NOT NULL,
  `deletar` int(11) NOT NULL,
  `status` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `idCategoria`, `titulo`, `descricao`, `data`, `deletar`, `status`) VALUES
(1, 0, 'teste', 'teste teste teste teste teste teste teste teste teste teste teste teste teste teste ', '2017-06-14', 1, ''),
(2, 0, '123', '123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 ', '2016-10-10', 1, ''),
(3, 0, 'teste 123456789', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '2017-06-15', 1, ''),
(4, 0, '', '', '0000-00-00', 1, ''),
(5, 0, '', '', '0000-00-00', 1, ''),
(6, 0, 'teste 12345', 'teste ', '2017-06-15', 1, ''),
(7, 0, 'teste 123123', 'teste', '1010-10-10', 1, ''),
(8, 4, 'teste 12345', 'teste 12345', '2017-06-17', 1, ''),
(9, 0, '1212121', '21212121', '1212-12-12', 1, ''),
(10, 0, 'qwqwq', 'qwqwq', '1111-11-11', 1, ''),
(11, 0, '23232323', '2323232', '0000-00-00', 1, ''),
(12, 4, '1111111111111111111111', '1212121212121212', '1111-11-11', 0, ''),
(13, 4, 'test de produt 123', 'test', '1010-10-10', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
