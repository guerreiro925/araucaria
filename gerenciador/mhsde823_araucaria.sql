-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 17/06/2017 às 15:32
-- Versão do servidor: 5.5.51-38.2
-- Versão do PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `mhsde823_araucaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `idBlog` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `data` date NOT NULL,
  `deletar` int(11) NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`idBlog`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `blog`
--

INSERT INTO `blog` (`idBlog`, `titulo`, `descricao`, `data`, `deletar`, `status`) VALUES
(1, 'teste 12345', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', '2017-06-15', 1, ''),
(2, 'teste ', 'dusfhudidfgiodjfgiofjdigjdusfhudidfgiodjfgiofjdigjdusfhudidfgiodjfgiofjdigjdusfhudidfgiodjfgiofjdigj', '1010-10-10', 1, ''),
(3, 'wqqwq', 'qwqw', '0111-11-11', 0, ''),
(4, 'teste 1212121', 'teste 1212121212', '2017-06-18', 0, ''),
(5, 'teste de blog 123', 'teste de blog 123', '1010-01-01', 1, ''),
(6, 'asasa', 'asasa', '1111-11-11', 1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_images`
--

CREATE TABLE IF NOT EXISTS `blog_images` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `idBlog` int(11) NOT NULL,
  `imagem` longtext NOT NULL,
  `deletar` int(11) NOT NULL,
  PRIMARY KEY (`idRegistro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Fazendo dump de dados para tabela `blog_images`
--

INSERT INTO `blog_images` (`idRegistro`, `idBlog`, `imagem`, `deletar`) VALUES
(7, 6, 'imagens_blog//149766885359449cf5a116b.png', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` longtext NOT NULL,
  `deletar` int(11) NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `titulo`, `deletar`, `status`) VALUES
(1, 'teste de categoria', 1, ''),
(2, 'testeeeeeeeeee de categoria 2212121', 1, ''),
(3, '123', 1, ''),
(4, 'teste 321', 0, ''),
(5, '121212', 1, ''),
(6, 'TesteCatego', 1, ''),
(7, 'teste', 1, ''),
(8, 'teste', 1, ''),
(9, 'teste 123', 1, ''),
(10, 'Teste Ãlbu', 1, ''),
(11, 'Teste Ãlbum', 1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE IF NOT EXISTS `fornecedores` (
  `idFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` longtext NOT NULL,
  `link` longtext NOT NULL,
  `imagem` longtext NOT NULL,
  `deletar` int(11) NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`idFornecedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `fornecedores`
--

INSERT INTO `fornecedores` (`idFornecedor`, `nome`, `link`, `imagem`, `deletar`, `status`) VALUES
(1, 'dasasdas', 'dadassd', 'imagens_fornecedores//149747239759419d8d8b291.jpg', 1, ''),
(2, 'Fornecedor 1 Teste (Matheus)', 'http://127.0.0.1/?msg=sucesso', 'imagens_fornecedores//14975308925942820cbd493.jpg', 0, ''),
(3, 'Fornecedor 2 Teste Excluir/Alterar(Matheus)', 'https://twitter.com', 'imagens_fornecedores//14975310035942827bc5c32.jpg', 1, ''),
(4, '123212121', 'http://teste.com', 'imagens_fornecedores//149766903459449daa19805.png', 1, ''),
(5, 'matheu', 'http://127.0.0.1/?msg=sucess', 'imagens_fornecedores//14976735915944af778cbb5.jpg', 1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `data` date NOT NULL,
  `deletar` int(11) NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `idCategoria`, `titulo`, `descricao`, `data`, `deletar`, `status`) VALUES
(1, 0, 'teste', 'teste teste teste teste teste teste teste teste teste teste teste teste teste teste ', '2017-06-14', 1, ''),
(2, 0, '123', '123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 ', '2016-10-10', 1, ''),
(3, 0, 'teste 123456789', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', '2017-06-15', 1, ''),
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos_destaque`
--

CREATE TABLE IF NOT EXISTS `produtos_destaque` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) NOT NULL,
  `deletar` int(11) NOT NULL,
  PRIMARY KEY (`idRegistro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos_images`
--

CREATE TABLE IF NOT EXISTS `produtos_images` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) NOT NULL,
  `imagem` longtext NOT NULL,
  `deletar` int(11) NOT NULL,
  PRIMARY KEY (`idRegistro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Fazendo dump de dados para tabela `produtos_images`
--

INSERT INTO `produtos_images` (`idRegistro`, `idProduto`, `imagem`, `deletar`) VALUES
(1, 0, 'imagens_produtos//149758056059434410f33b6.png', 0),
(2, 0, 'imagens_produtos//149758056159434411037ca.png', 0),
(3, 0, 'imagens_produtos//1497581021594345dd34e99.png', 0),
(4, 8, 'imagens_produtos//14975814215943476d19cab.png', 0),
(5, 8, 'imagens_produtos//14975814215943476d1fc28.png', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `redes_sociais`
--

CREATE TABLE IF NOT EXISTS `redes_sociais` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` longtext NOT NULL,
  `instagram` longtext NOT NULL,
  `twitter` longtext NOT NULL,
  PRIMARY KEY (`idRegistro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `redes_sociais`
--

INSERT INTO `redes_sociais` (`idRegistro`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'http://www.facebook.com', 'http://www.instagram.com', 'http://www.twitter.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `idSlide` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` longtext NOT NULL,
  `subtitulo` longtext NOT NULL,
  `imagem` longtext NOT NULL,
  `deletar` int(11) NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`idSlide`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `slides`
--

INSERT INTO `slides` (`idSlide`, `titulo`, `subtitulo`, `imagem`, `deletar`, `status`) VALUES
(1, 'test', 'Test', 'imagens_slideshow//14976721305944a9c24c3c3.jpg', 0, ''),
(2, 'Teste Incluir/Editar/Excluir (matheus)', 'Teste Incluir/Editar/Excluir (matheus)', 'imagens_slideshow//14976706795944a41722c98.jfif', 0, ''),
(3, 'Teste Ãlbum', 'Teste1sub', 'imagens_slideshow//14976722935944aa650b468.jpg', 0, ''),
(4, 'Teste ', 'teste', 'imagens_slideshow//14976737615944b02120937.jpg', 1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` longtext NOT NULL,
  `email` longtext NOT NULL,
  `senha` longtext NOT NULL,
  `deletar` int(11) NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `email`, `senha`, `deletar`, `status`) VALUES
(2, 'abstract', 'miguelsenegalha2@gmail.com', 'bG9jYWwxM0A=', 0, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendedores`
--

CREATE TABLE IF NOT EXISTS `vendedores` (
  `idVendedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` longtext NOT NULL,
  `celular` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `imagem` longtext NOT NULL,
  `deletar` int(11) NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`idVendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Fazendo dump de dados para tabela `vendedores`
--

INSERT INTO `vendedores` (`idVendedor`, `nome`, `celular`, `facebook`, `imagem`, `deletar`, `status`) VALUES
(1, 'Vendedor 1 Teste Incluir/Editar (Matheus)', '(11)11111-1111', 'https://www.facebook.com', 'imagens_vendedores//149753122259428356cea62.jfif', 0, ''),
(2, 'Vendedor 2 Teste Excluir (Matheus)', '(21)21212-1212', 'https://www.facebook.com', 'imagens_vendedores//149753115359428311940e9.jpg', 1, ''),
(3, 'teste123', '(45)45454-5454', 'http://facebook.com', 'imagens_vendedores//149766911559449dfb6657c.png', 1, ''),
(4, 'Teste Vendendor Incluir/Editar (Matheus)', '(43)9987-2042', 'https://www.facebook.com', 'imagens_vendedores//14976707825944a47ed6806.jfif', 1, ''),
(5, 'Teste Vendendor2 Excluir (Matheus)', '(11)11111-1111', 'https://www.facebook.com', 'imagens_vendedores//14976707565944a46422963.jpg', 1, ''),
(6, 'Matheus Henrique Lima Vil', '(43)43434-34', 'https://www.facebook.cooo', 'imagens_vendedores//14976727295944ac19428bb.jpg', 1, ''),
(7, 'mathe', '(43)99872-0323', 'https://www.facebook.cooo', 'imagens_vendedores//14976744915944b2fb80361.jpg', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
