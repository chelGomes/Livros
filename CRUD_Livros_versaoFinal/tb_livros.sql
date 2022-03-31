-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 28-Set-2018 às 00:29
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
  `codigo` int(11) NOT NULL,
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
(1, 'Guerra e Paz', 'Liev Tolstoi', 'romance', 'Liev', '1869', 10, 1),
(2, 'Dom Quixote', 'Miguel de Cervantes', 'romance', 'Quixote', '1605', 20, 1),
(3, 'A Divina Comedia', 'Dante Alighieri', 'Comedia', 'Dante', '1321', 50, 1),
(4, 'A Seleção', 'Kiera Cass', 'Comedia', 'Seguinte', '2014', 15, 1),
(5, 'O Cirurgião', 'Catherine Cordell', 'Suspense', 'suspense', '1990', 5, 2),
(8, 'O Menino Maluquinho', 'Ziraldo', 'Infantil', 'Ziraldo', '2000', 90, 777888),
(7, 'Eu Robô', 'Isac Asimows', 'ficção cientifica ', '....', '1980', 4444, 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
