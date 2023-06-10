-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2023 às 20:57
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetonba`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroproduto`
--

CREATE TABLE `cadastroproduto` (
  `id` int(11) NOT NULL,
  `codProduto` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tamanho` varchar(5) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `id_img` int(11) DEFAULT NULL,
  `PgVenda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastroproduto`
--

INSERT INTO `cadastroproduto` (`id`, `codProduto`, `nome`, `tamanho`, `estoque`, `preco`, `created`, `id_img`, `PgVenda`) VALUES
(13, 'LA001', 'Camiseta NBA Denver Nuggets', 'P', 3, '199.99', '2023-06-08 20:39:10', 10, 'productPages/bostonPage.php'),
(14, 'LA002', 'Camiseta NBA Bulls Jordan', 'P', 4, '199.99', '2023-06-08 20:42:26', 11, 'productPages/bullsPage.php'),
(15, 'LA003', 'Camiseta NBA Los Angeles Clippers', 'P', 10, '199.99', '2023-06-10 11:42:44', 12, 'productPages/clippersPage.php'),
(16, 'LA004', 'Camiseta NBA Milwaukee Bucks', 'P', 10, '199.99', '2023-06-10 11:46:50', 13, 'productPages/bucksPage.php'),
(17, 'LA005', 'Camiseta NBA Miami Heat', 'P', 10, '199.99', '2023-06-10 11:50:46', 14, 'productPages/miamiHeatPage.php'),
(18, 'LA006', 'Camiseta NBA Los Angeles Lakers', 'P', 10, '199.99', '2023-06-10 11:57:37', 15, 'productPages/lakersPage.php'),
(19, 'LA007', 'Camiseta NBA Golden State Warriors', 'P', 10, '199.99', '2023-06-10 12:04:51', 16, 'productPages/warriorsPage.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `idPedido` int(11) NOT NULL,
  `FKcadastroProduto` int(11) NOT NULL,
  `codProd` varchar(20) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `sizebtn` varchar(5) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`idPedido`, `FKcadastroProduto`, `codProd`, `productName`, `color`, `quantidade`, `sizebtn`, `created`) VALUES
(2, 18, 'LA006', 'Camiseta NBA Los Angeles Lakers', 'azul', 1, 'GG', '2023-06-10 14:29:30'),
(3, 18, 'LA006', 'Camiseta NBA Los Angeles Lakers', 'amarelo', 3, 'M', '2023-06-10 14:32:46'),
(4, 18, 'LA006', 'Camiseta NBA Los Angeles Lakers', 'amarelo', 4, 'GG', '2023-06-10 14:34:31'),
(5, 18, 'LA006', 'Camiseta NBA Los Angeles Lakers', 'amarelo', 1, 'P', '2023-06-10 15:01:40'),
(6, 18, 'LA006', 'Camiseta NBA Los Angeles Lakers', 'azul', 2, 'XGG', '2023-06-10 15:09:13'),
(7, 18, 'LA006', 'Camiseta NBA Los Angeles Lakers', 'amarelo', 1, 'G', '2023-06-10 15:50:44'),
(8, 18, 'LA006', 'Camiseta NBA Los Angeles Lakers', 'amarelo', 1, 'G', '2023-06-10 15:51:17'),
(9, 18, 'LA006', 'Camiseta NBA Los Angeles Lakers', 'amarelo', 1, 'M', '2023-06-10 15:52:05'),
(10, 18, 'LA006', 'Camiseta NBA Los Angeles Lakers', '', 1, 'XGG', '2023-06-10 15:52:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_img` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`id_img`, `path`) VALUES
(10, '../files/648264ab26be8.png'),
(11, '../files/648267261df72.png'),
(12, '../files/64848bb1be8c1.png'),
(13, '../files/64848c9d0d623.png'),
(14, '../files/64848d7ddd931.png'),
(15, '../files/64848f1db626f.png'),
(16, '../files/648490dfb48c2.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastroproduto`
--
ALTER TABLE `cadastroproduto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img` (`id_img`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `FKcadastroProduto` (`FKcadastroProduto`);

--
-- Índices para tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_img`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastroproduto`
--
ALTER TABLE `cadastroproduto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cadastroproduto`
--
ALTER TABLE `cadastroproduto`
  ADD CONSTRAINT `cadastroproduto_ibfk_1` FOREIGN KEY (`id_img`) REFERENCES `imagem` (`id_img`);

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`FKcadastroProduto`) REFERENCES `cadastroproduto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
