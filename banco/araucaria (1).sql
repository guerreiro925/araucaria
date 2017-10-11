-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 27/06/2017 às 22:44
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Fazendo dump de dados para tabela `blog`
--

INSERT INTO `blog` (`idBlog`, `titulo`, `descricao`, `data`, `deletar`, `status`) VALUES
(1, 'teste 12345', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', '2017-06-15', 1, ''),
(2, 'teste ', 'dusfhudidfgiodjfgiofjdigjdusfhudidfgiodjfgiofjdigjdusfhudidfgiodjfgiofjdigjdusfhudidfgiodjfgiofjdigj', '1010-10-10', 1, ''),
(3, 'wqqwq', 'qwqw', '0111-11-11', 0, 'ativo'),
(4, 'teste 1212121', 'teste 1212121212', '2017-06-18', 0, 'ativo'),
(5, 'teste de blog 123', 'teste de blog 123', '1010-01-01', 1, ''),
(6, 'asasa', 'asasa', '1111-11-11', 1, ''),
(7, 'Teste Ãlbum', '21211', '1999-09-25', 0, ''),
(8, 'teste novo campo de texto', 'teste novo campo de texto', '1999-09-25', 1, ''),
(9, 'teste de blog', ' lalalalalal lalalalaal', '2017-06-21', 0, 'ativo'),
(10, '111111', ' 111111111111111111111', '0497-06-16', 0, 'ativo'),
(11, '1111111111111111111111111111', ' 1111111111 111111111111111111111111111111', '1111-11-11', 0, 'ativo'),
(12, 'rteste teste', 'etetetetete ', '0111-11-11', 0, 'ativo'),
(13, '1111111111111', ' 1111111111111111111', '1111-11-11', 0, 'ativo'),
(14, 'Teste do novo editor de texto', '<p><em>TESTANDO O TAMANHO DO DATATABLE, PRA VER SE N&Atilde;O BUGA SE COLOCAR MUITO CARACTER</em></p>\r\n', '1999-09-25', 0, 'inativo');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Fazendo dump de dados para tabela `blog_images`
--

INSERT INTO `blog_images` (`idRegistro`, `idBlog`, `imagem`, `deletar`) VALUES
(7, 6, 'imagens_blog//149766885359449cf5a116b.png', 0),
(8, 7, 'imagens_blog//14980138825949e0ba2ae31.jpg', 0),
(9, 9, 'imagens_blog//1498075166594ad01e3aae6.png', 0),
(10, 13, 'imagens_blog//1498077074594ad7922a944.png', 0),
(11, 14, 'imagens_blog//1498095570594b1fd26508b.jpg', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `titulo`, `deletar`, `status`) VALUES
(1, 'teste de categoria', 1, ''),
(2, 'testeeeeeeeeee de categoria 2212121', 1, ''),
(3, '123', 1, ''),
(4, 'teste 321', 0, 'ativo'),
(5, '121212', 1, ''),
(6, 'TesteCatego', 1, ''),
(7, 'teste', 1, ''),
(8, 'teste', 1, ''),
(9, 'teste 123', 1, ''),
(10, 'Teste Ãlbu', 1, ''),
(11, 'Teste Ãlbum', 1, ''),
(12, 'teste de categoria 123121212', 1, ''),
(13, 'NotÃ­cia Importante', 1, 'inativo'),
(14, 'Futebol', 1, 'ativo'),
(15, 'Esporte', 0, 'ativo'),
(16, 'PolÃ­tica', 0, 'ativo'),
(17, 'Entretenimento', 1, ''),
(18, 'mnmn', 1, ''),
(19, 'Direto', 0, 'ativo'),
(20, 'Global', 1, 'ativo');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `fornecedores`
--

INSERT INTO `fornecedores` (`idFornecedor`, `nome`, `link`, `imagem`, `deletar`, `status`) VALUES
(1, 'dasasdas', 'dadassd', 'imagens_fornecedores//149747239759419d8d8b291.jpg', 1, 'inativo'),
(2, 'Fornecedor 1 Teste (Matheus)', 'http://127.0.0.1/?msg=sucesso', 'imagens_fornecedores//14975308925942820cbd493.jpg', 1, 'inativo'),
(3, 'Fornecedor 2 Teste Excluir/Alterar(Matheus)', 'https://twitter.com', 'imagens_fornecedores//14975310035942827bc5c32.jpg', 1, 'inativo'),
(4, '123212121', 'http://teste.com', 'imagens_fornecedores//149766903459449daa19805.png', 1, 'inativo'),
(5, 'matheu', 'http://127.0.0.1/?msg=sucess', 'imagens_fornecedores//14976735915944af778cbb5.jpg', 1, 'inativo'),
(6, 'matheus[test', 'http://127.0.0.1/?msg=suces', 'imagens_fornecedores//14980124575949db294b6c5.jfif', 0, 'ativo'),
(7, 'teste[2]', 'http://127.0.0.1/?msg=erro', 'imagens_fornecedores//14980123005949da8c665cb.jpg', 1, 'ativo'),
(8, 'sss', 'http://google.com', 'imagens_fornecedores//1498074720594ace60e0e8f.png', 1, 'inativo'),
(9, 'Fornecedor teste Matheu', 'http://127.0.0.1/?msg', 'imagens_fornecedores//1498094161594b1a51b96ae.jfif', 1, 'inativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(11) NOT NULL,
  `destaque` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `data` date NOT NULL,
  `deletar` int(11) NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `idCategoria`, `destaque`, `titulo`, `descricao`, `data`, `deletar`, `status`) VALUES
(1, 0, 0, 'teste', 'teste teste teste teste teste teste teste teste teste teste teste teste teste teste ', '2017-06-14', 1, ''),
(2, 0, 0, '123', '123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 123 ', '2016-10-10', 1, ''),
(3, 0, 0, 'teste 123456789', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', '2017-06-15', 1, ''),
(4, 0, 0, '', '', '0000-00-00', 1, ''),
(5, 0, 0, '', '', '0000-00-00', 1, ''),
(6, 0, 0, 'teste 12345', 'teste ', '2017-06-15', 1, ''),
(7, 0, 0, 'teste 123123', 'teste', '1010-10-10', 1, ''),
(8, 4, 0, 'teste 12345', 'teste 12345', '2017-06-17', 1, ''),
(9, 0, 0, '1212121', '21212121', '1212-12-12', 1, ''),
(10, 0, 0, 'qwqwq', 'qwqwq', '1111-11-11', 1, ''),
(11, 0, 0, '23232323', '2323232', '0000-00-00', 1, ''),
(12, 16, 1, '1111111111111111111111', '1212121212121212', '1111-11-11', 0, 'ativo'),
(13, 4, 0, 'test de produt 123', 'test', '1010-10-10', 1, ''),
(14, 4, 1, 'Teste Ãlbum', '31321', '0000-00-00', 1, 'ativo'),
(15, 19, 0, 'Teste[2]', 'TesteÂ´[3]', '1999-09-25', 0, ''),
(16, 19, 0, '5r5r5r', '5r5r5r', '0000-00-00', 1, ''),
(17, 16, 0, '111', ' 111', '1222-02-12', 0, 'ativo'),
(18, 15, 0, 'sasasa', ' asasasas', '1211-12-12', 0, 'ativo'),
(19, 15, 1, 'Produto teste com novo campo descriÃ§Ã£o', '<p><em>Teste testado teste teetooteoteoteoteoteoteoetoteoteoteoetoteoteoteoteooteoteote</em></p>\r\n', '1212-02-21', 0, 'ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos_destaque`
--

CREATE TABLE IF NOT EXISTS `produtos_destaque` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) NOT NULL,
  `deletar` int(11) NOT NULL,
  PRIMARY KEY (`idRegistro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Fazendo dump de dados para tabela `produtos_destaque`
--

INSERT INTO `produtos_destaque` (`idRegistro`, `idProduto`, `deletar`) VALUES
(23, 14, 0),
(26, 12, 0),
(30, 19, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `produtos_images`
--

INSERT INTO `produtos_images` (`idRegistro`, `idProduto`, `imagem`, `deletar`) VALUES
(1, 0, 'imagens_produtos//149758056059434410f33b6.png', 0),
(2, 0, 'imagens_produtos//149758056159434411037ca.png', 0),
(3, 0, 'imagens_produtos//1497581021594345dd34e99.png', 0),
(4, 8, 'imagens_produtos//14975814215943476d19cab.png', 0),
(5, 8, 'imagens_produtos//14975814215943476d1fc28.png', 0),
(8, 14, 'imagens_produtos//149772482459457798530f5.jpg', 0),
(9, 15, 'imagens_produtos//14980138295949e0851b117.jpg', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `slides`
--

INSERT INTO `slides` (`idSlide`, `titulo`, `subtitulo`, `imagem`, `deletar`, `status`) VALUES
(1, 'test', 'Test', 'imagens_slideshow//14976721305944a9c24c3c3.jpg', 1, 'inativo'),
(2, 'Teste Incluir/Editar/Excluir (henrique)', 'Teste Incluir/Editar/Excluir (henrique)', 'imagens_slideshow//14980109775949d561ab26a.jfif', 0, 'inativo'),
(3, 'Teste Ãlbum', 'Teste1sub', 'imagens_slideshow//14976722935944aa650b468.jpg', 0, 'inativo'),
(4, 'Teste ', 'teste', 'imagens_slideshow//14976737615944b02120937.jpg', 1, 'inativo'),
(5, 'testado', 'testado', 'imagens_slideshow//1498092639594b145f21552.jfif', 1, 'ativo'),
(6, 'Teste Ãlbum', 'Teste1sub', 'imagens_slideshow//1498092669594b147d54ea3.jpg', 1, 'ativo');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `email`, `senha`, `deletar`, `status`) VALUES
(2, 'abstract', 'miguelsenegalha2@gmail.com', 'bG9jYWwxM0A=', 1, 'inativo'),
(10, 'Miguel', 'miguelsenegalha@hotmail.com', 'bG9jYWwxM0A=', 0, 'inativo'),
(11, 'abstract', 'miguelsenegalha2@gmail.com', 'bG9jYWwxM0A=', 0, 'ativo'),
(12, 'matheus', 'matheus.henrique.25@hotmail.com', 'MzIx', 1, 'ativo'),
(13, 'matheus', 'teste.henrique.25@outlook.com', 'MzIx', 1, ''),
(14, 'inativo', 'inativo@inativo.com', 'MzIx', 1, 'ativo'),
(15, 'teste_matheus', 'teste_matheus@outlook.com', 'MzIxMg==', 1, 'inativo'),
(17, 'matheus', 'matheus.henrique.25@hotmail.com', 'MTIz', 0, 'ativo');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Fazendo dump de dados para tabela `vendedores`
--

INSERT INTO `vendedores` (`idVendedor`, `nome`, `celular`, `facebook`, `imagem`, `deletar`, `status`) VALUES
(1, 'Vendedor 1 Teste Incluir/Editar (Matheus)', '(11)11111-1111', 'https://www.facebook.com', 'imagens_vendedores//149753122259428356cea62.jfif', 0, 'inativo'),
(2, 'Vendedor 2 Teste Excluir (Matheus)', '(21)21212-1212', 'https://www.facebook.com', 'imagens_vendedores//149753115359428311940e9.jpg', 1, ''),
(3, 'teste123', '(45)45454-5454', 'http://facebook.com', 'imagens_vendedores//149766911559449dfb6657c.png', 1, ''),
(4, 'Teste Vendendor Incluir/Editar (Matheus)', '(43)9987-2042', 'https://www.facebook.com', 'imagens_vendedores//14976707825944a47ed6806.jfif', 1, ''),
(5, 'Teste Vendendor2 Excluir (Matheus)', '(11)11111-1111', 'https://www.facebook.com', 'imagens_vendedores//14976707565944a46422963.jpg', 1, ''),
(6, 'Matheus Henrique Lima Vil', '(43)43434-34', 'https://www.facebook.cooo', 'imagens_vendedores//14976727295944ac19428bb.jpg', 1, ''),
(7, 'mathe', '(43)99872-0323', 'https://www.facebook.cooo', 'imagens_vendedores//14976744915944b2fb80361.jpg', 0, 'ativo'),
(8, '121212', '(12)12121-2121', 'http://facebook.com', 'imagens_vendedores//149789825959481d136c91a.png', 1, 'inativo'),
(9, 'matheus[teste2', '(12)21121-2121', 'https://www.facebook.com/', 'imagens_vendedores//14980120915949d9bb2dae0.jpg', 1, ''),
(10, 'qwqwqwqwq', '(11)11111-1111', 'http://facebook.com', 'imagens_vendedores//1498074594594acde25d0ef.png', 1, 'ativo'),
(11, 'Vendedor Teste[Matheus] Ativo', '(43)98327-2732', 'https://www.facebook.com///', 'imagens_vendedores//1498093460594b17946ee93.jpg', 1, 'ativo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
