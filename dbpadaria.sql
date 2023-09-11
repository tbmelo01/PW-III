-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Set-2023 às 18:05
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
-- Banco de dados: `dbpadaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadastro`
--

DROP TABLE IF EXISTS `tbcadastro`;
CREATE TABLE IF NOT EXISTS `tbcadastro` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `idade` int DEFAULT NULL,
  `telefone` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

DROP TABLE IF EXISTS `tbcliente`;
CREATE TABLE IF NOT EXISTS `tbcliente` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `idade` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `cpf` (`cpf`),
  KEY `nome` (`nome`),
  KEY `idade` (`idade`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

DROP TABLE IF EXISTS `tbprodutos`;
CREATE TABLE IF NOT EXISTS `tbprodutos` (
  `idProduto` int NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descProduto` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `valorProduto` double NOT NULL,
  `dataValidade` date NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`idProduto`, `produto`, `descProduto`, `valorProduto`, `dataValidade`, `img`) VALUES
(1, 'Pão', 'Francês', 1.99, '2023-09-07', ''),
(2, 'Baguete', 'De queijo', 5.99, '2023-09-22', ''),
(3, 'bolo', 'morango com caldas', 10, '2024-01-20', ''),
(14, 'pão de queijo', 'mineiro', 2.5, '2023-11-30', ''),
(7, 'sonho', 'pão com creme no meio', 5.99, '2023-10-20', ''),
(16, 'teste', 'teste', 200, '1980-01-23', 'produtos-da-padaria-31282431.png'),
(17, 'teste2', 'teste2', 300, '3333-02-21', '9c7be43979a736a8695361a544630b97.jpg'),
(18, 'teste3', 'teste3', 4000, '5222-02-12', '9c7be43979a736a8695361a544630b97.jpg'),
(19, 'teste4', 'teste4', 400, '3333-02-25', '9c7be43979a736a8695361a544630b97.jpg'),
(20, 'teste5', 'teste5', 0.87, '4552-05-04', '9c7be43979a736a8695361a544630b97.jpg'),
(21, 'teste 6', 'teste 6', 6, '2023-09-12', 'logo.png'),
(22, 'teste 6', 'teste 6', 5, '2023-09-11', 'C:\\wamp64\\tmp\\phpF634.tmp'),
(23, 'teste 6', 'teste 6', 7, '2023-09-10', 'C:\\wamp64\\tmp\\php4644.tmp'),
(24, 'teste 6', 'teste 6', 8, '2023-09-12', 'C:\\wamp64\\tmp\\php57BC.tmp'),
(25, 'teste 7', 'teste 7', 90, '2023-09-11', 'C:\\wamp64\\tmp\\php81F5.tmp');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

DROP TABLE IF EXISTS `tbvenda`;
CREATE TABLE IF NOT EXISTS `tbvenda` (
  `venda` varchar(100) DEFAULT NULL,
  `idProduto` int NOT NULL,
  `qtdProduto` int DEFAULT NULL,
  `idCliente` int NOT NULL,
  KEY `idProduto` (`idProduto`),
  KEY `idCliente` (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
