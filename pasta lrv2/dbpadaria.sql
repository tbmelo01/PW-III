-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Nov-2023 às 23:40
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2023_09_10_011846_add_image_to_ProjetoPadaria_table', 1),
(4, '2023_09_10_012045_add_img_to_ProjetoPadaria_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadastro`
--

DROP TABLE IF EXISTS `tbcadastro`;
CREATE TABLE IF NOT EXISTS `tbcadastro` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
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
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
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
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) NOT NULL,
  `descProduto` varchar(500) NOT NULL,
  `valorProduto` double NOT NULL,
  `dataValidade` date NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`idProduto`, `produto`, `descProduto`, `valorProduto`, `dataValidade`, `img`) VALUES
(28, 'Baguete', 'Tradicional na culinária francesa e famosa no mundo inteiro, a baguete é um clássico da panificação. Sua história começa em 15 de novembro de 1793, quando a Convenção Nacional determinou que todo cidadão francês deveria ter acesso ao mesmo tipo de pão, conhecido na época como “pão da igualdade”.', 14.99, '2023-09-15', 'baguete.jpg'),
(27, 'Pães', 'Pães é a nossa maior especialidade e o que não faltam são variedades. Carinho e mão na massa dão forma aos nossos macios e crocantes. Por aqui são queridinhos, pois combinam com qualquer ocasião. Ninguém pode resistir aos encantos de um pãozinho fresco hein? Pode confiar na nossa qualidade.', 4.99, '2023-09-15', 'pao.jpg'),
(26, 'Pudim', 'Gelado, doce e coberto por uma calda apetitosa e brilhante. A descrição do pudim por si só já dá água na boca. Os pudins fazem parte de nossa tradição culinária há muito tempo. De origem portuguesa, como todos os doces feitos com muitos ovos, eles foram incorporando o coco, a mandioca e outros produtos “da terra”', 18.99, '2023-09-14', 'pudim.webp'),
(30, 'Sonho', 'dwadwd', 5, '2023-09-15', 'sonho.jpg'),
(32, 'Pão Recheado', 'Se você acha que seu lanche da tarde pode ficar ainda mais gostoso, você está certo!  Venha conhecer o delicioso Pão Recheado.  Você não vai se arrepender!', 16, '2023-09-30', 'pao-recheado.avif'),
(33, 'Leite', 'O leite é uma bebida secretada pelos mamíferos, é de cor esbranquiçada e possui a função de nutrir descendentes desses animais. É produzido por células secretoras das glândulas mamárias e tem também ação imunológica para a prole, protegendo-os de micro-organismos, inflamações e toxinas.', 5, '2023-09-16', 'leite.webp'),
(34, 'Manteiga', 'A manteiga também possui minerais e ácido láurico, que ajudam o organismo a se prevenir contra infecções fúngicas. Além disso, ela é rica em antioxidantes que ajudam a proteger o corpo contra os danos celulares e contribui para fortalecer o sistema imunológico.', 2, '2023-09-30', 'manteiga.webp'),
(35, 'Queijo', 'Pequenas porções diárias fornecem a quantidade ideal de cálcio e fósforo. Os queijos podem servir como lanches, acompanhamentos ou até como pratos principais. Além de saboroso, o queijo é uma excelente fonte de diversos nutrientes essenciais às funções do organismo e por isso deve ser consumido todos os dias.', 6, '2023-09-30', 'queijo.jpg'),
(36, 'Queijo 2', 'Pequenas porções diárias fornecem a quantidade ideal de cálcio e fósforo. Os queijos podem servir como lanches, acompanhamentos ou até como pratos principais. Além de saboroso, o queijo é uma excelente fonte de diversos nutrientes essenciais às funções do organismo e por isso deve ser consumido todos os dias.', 6, '2023-09-29', 'queijo2.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

DROP TABLE IF EXISTS `tbvenda`;
CREATE TABLE IF NOT EXISTS `tbvenda` (
  `idVenda` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) DEFAULT NULL,
  `qtdProduto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVenda`),
  KEY `idProduto` (`idProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbvenda`
--

INSERT INTO `tbvenda` (`idVenda`, `idProduto`, `qtdProduto`) VALUES
(1, 1, 5),
(2, 1, 2),
(3, 2, 8),
(4, 1, 7),
(5, 3, 4),
(6, 3, 9),
(7, 1, 2),
(8, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maria', 'maria@gmail.com', '$2y$10$zBiSRm.lQTEjxk4jEvPX9.DC2T9f48R819/jVYWSpiauVM.C/1n/2', '8bruhr0UtT90rx3iUwsBT7JacRbsYAVZTSM5OCP60DdZfFGbvWu3H5O0oiGq', '2023-11-23 03:00:00', '2023-11-23 03:00:00'),
(2, 'tiago', 'tiago@gmail.com', '$2y$10$9BqdlcqkyV35/0gR6.HAm..M/sKyaZszz1EEz4gElakBnbT8sRBYa', 'q76wtBoFP9PkOhuH9grfekwYYTelpm40B3mMrT3XtpuxeQNpfPDVIzinbtCJ', '2023-11-24 03:00:00', '2023-11-24 03:00:00'),
(3, 'felipe', 'felipe@gmail.com', '$2y$10$veG1PDUdB4ob1UmFPCY6TuF7CCj4ixTOZuYLJs8LVBQAT5gP6NcXy', 'mPbPYAIfyDimbZnTZrcaaKG03d9ejbsfE3Xgs7BdpHzjlkC3HhIpPm1GuklH', '2023-11-24 03:00:00', '2023-11-24 03:00:00'),
(4, 'kaio', 'kaio@gmail.com', '$2y$10$InhqJYU9jz/ILCp4EM0bQOYjbFseHijVKNoauTWsGte7aKrjc0aBu', 'vtPGdjDXrAHoe4SekmbDA6pjECqG17LjYDHymWt3MmRFVq7czMcFW41mv5oN', '2023-11-30 03:00:00', '2023-11-30 03:00:00'),
(5, 'zacarias', 'zacarias@gmail.com', '$2y$10$YpVsBVZkvCRy3xnn2rrS8elM58fttV5m9YDxoJJzIuTyqb6vCHgDK', 'PiV3ktGF0F8iRv3EcOdSscSUDNg3myyuiqaMUENQICfCbyPf0Zz9SSmFjBGK', '2023-11-30 03:00:00', '2023-11-30 03:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
