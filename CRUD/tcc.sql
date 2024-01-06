-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Mar-2023 às 12:01
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `NOME_CLIENTE` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `FONE_CLIENTE` varchar(30) NOT NULL,
  `EMAIL_CLIENTE` varchar(255) NOT NULL,
  `PASS_CLIENTE` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `NOME_CLIENTE`, `FONE_CLIENTE`, `EMAIL_CLIENTE`, `PASS_CLIENTE`) VALUES
(7, 'JORGE', '1234214', 'JORGE@JORGE', '123'),
(9, 'jorge', '12342141', 'CA@CA2', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano`
--

DROP TABLE IF EXISTS `plano`;
CREATE TABLE IF NOT EXISTS `plano` (
  `id` int NOT NULL AUTO_INCREMENT,
  `p_tipo` varchar(10) NOT NULL,
  `p_op` varchar(10) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `treinador`
--

DROP TABLE IF EXISTS `treinador`;
CREATE TABLE IF NOT EXISTS `treinador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `t_nome` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `t_fone` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_esp` varchar(15) NOT NULL,
  `t_senha` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `treinador`
--

INSERT INTO `treinador` (`id`, `t_nome`, `t_fone`, `t_email`, `t_esp`) VALUES
(4, 'she', '1235', 'axd213e@412a1', 'musc31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
