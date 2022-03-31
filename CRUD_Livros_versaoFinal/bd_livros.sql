-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Nov-2018 às 20:33
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_livros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livros`
--

DROP TABLE IF EXISTS `tb_livros`;
CREATE TABLE IF NOT EXISTS `tb_livros` (
  `codigo` int(200) NOT NULL,
  `nome_livro` varchar(300) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `autor` varchar(300) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `tema` varchar(300) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `editora` varchar(300) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `ano_publicacao` varchar(10) NOT NULL,
  `quantidade_livros` int(11) NOT NULL,
  `edicao` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livros`
--

INSERT INTO `tb_livros` (`codigo`, `nome_livro`, `autor`, `tema`, `editora`, `ano_publicacao`, `quantidade_livros`, `edicao`) VALUES
(4, 'A Seleção', 'Kiera Cass', 'Comedia', 'Seguinte', '2014', 15, 1),
(5, 'O Cirurgião', 'Catherine Cordell', 'Suspense', 'suspense', '1990', 5, 2),
(8, 'O Menino Maluquinho', 'Ziraldo', 'Infantil', 'Ziraldo', '2000', 90, 777888),
(7, 'Eu Robô', 'Isac Asimows', 'ficção cientifica ', '....', '1980', 4444, 12),
(9, 'codigo da vinci', 'kkkkk', 'ficcao', 'jjjj', '2000', 11, 3),
(10, 'Um encontro por acaso', 'Lauren', 'Religioso', 'wampa', '2016', 22, 2018);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `Nome_Usuario` varchar(80) CHARACTER SET utf32 COLLATE utf32_swedish_ci NOT NULL,
  `login` varchar(10) NOT NULL,
  `Senha_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
