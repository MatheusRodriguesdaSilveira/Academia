-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Jun-2023 às 23:07
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE IF NOT EXISTS `adm` (
  `ID_ADM` int(11) NOT NULL,
  `NOME_ADM` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FONE_ADM` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL_ADM` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CARGO_ADM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_ADM`),
  UNIQUE KEY `ID_ADM` (`ID_ADM`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assinatura`
--

DROP TABLE IF EXISTS `assinatura`;
CREATE TABLE IF NOT EXISTS `assinatura` (
  `ID_ASSINANTE` int(11) NOT NULL,
  `NOME_ASSINANTE` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VENCIMENTO` date NOT NULL,
  `FORMA_PAG` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CICLO_ASSINANTE` decimal(12,0) NOT NULL,
  PRIMARY KEY (`ID_ASSINANTE`),
  UNIQUE KEY `ID_ASSINANTE` (`ID_ASSINANTE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_CLIENTE` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FONE_CLIENTE` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL_CLIENTE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASS_CLIENTE` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `NOME_CLIENTE`, `FONE_CLIENTE`, `EMAIL_CLIENTE`, `PASS_CLIENTE`) VALUES
(1, 'rodrigo', '24', 'rodrigogay@gay', '24'),
(2, 'Matheus Rodrigues', '11910346829', 'teste@teste.com', 'teste'),
(3, 'Matheus Rodrigues', '11910346829', 'teste@teste.com', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`) VALUES
(1, '', 'teste@teste.com', 'teste'),
(2, 'arthur', 'arthur@etec.com', 'etec');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

DROP TABLE IF EXISTS `planos`;
CREATE TABLE IF NOT EXISTS `planos` (
  `TIPO_PLANO` int(11) NOT NULL,
  `NOME_PLANO` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CICLO_PLANO` decimal(12,0) NOT NULL,
  `C_COMP` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `TIPO_PLANO` (`TIPO_PLANO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `treinador`
--

DROP TABLE IF EXISTS `treinador`;
CREATE TABLE IF NOT EXISTS `treinador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t_nome` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_fone` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_esp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `treinador`
--

INSERT INTO `treinador` (`id`, `t_nome`, `t_fone`, `t_email`, `t_esp`) VALUES
(1, 'rodrigo', '69', 'rodriguingayzin@arrombado', 'da o cu'),
(2, 'rodrigo', '69', 'rodriguingayzin@arrombado', 'da o cu'),
(3, 'Matheus Rodrigues', '11910346829', 'teste@teste.com', 'Nutricionista'),
(4, 'Matheus Rodrigues', '11910346829', 'teste@teste.com', 'Nutricionista'),
(5, 'Matheus ', '11910346829', 'matheus@etec.com', 'Nutricionista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `treino`
--

DROP TABLE IF EXISTS `treino`;
CREATE TABLE IF NOT EXISTS `treino` (
  `ID_TREINO` int(11) NOT NULL,
  `IDENTIFICADOR_TREINO` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOME_TREINO` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EXERCICIO_TREINO` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EXERCICIO_DESC_TREINO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_TREINO`),
  UNIQUE KEY `ID_TREINO` (`ID_TREINO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'teste@teste.com', 'teste'),
(2, 'matheus@etec.com', 'etec1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
