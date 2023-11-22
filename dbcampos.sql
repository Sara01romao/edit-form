-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/11/2023 às 20:58
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbcampos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `campo`
--

CREATE TABLE `campo` (
  `id_campo` int(11) NOT NULL,
  `nome_campo` varchar(600) NOT NULL,
  `tipo_campo` varchar(100) NOT NULL,
  `ajuda_campo` varchar(600) NOT NULL,
  `id_form_campo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `campo`
--

INSERT INTO `campo` (`id_campo`, `nome_campo`, `tipo_campo`, `ajuda_campo`, `id_form_campo`) VALUES
(1, 'lista', 'tres', '', 0),
(2, 'nome', 'tres', 'cidades ataque de titans', 0),
(3, 'listas', 'tres', '', 0),
(4, 'listas', 'tres', '', 0),
(5, 'listas', 'tres', '', 0),
(6, 'teste', 'tres', 'dasdasdas', 0),
(7, 'arroz', 'tres', '', 0),
(8, 'listas', 'tres', '', 0),
(9, 'nome', 'tres', 'teste', 0),
(10, 'Cidades', 'tres', 'Selecione a cidade que mais gosta', 0),
(11, 'nome', 'um', '', 0),
(12, 'arroz', 'um', 'comida', 0),
(13, 'Select', 'tres', 'Texto de ajuda (abaixo da pergunta): opcional', 0),
(14, 'Input', 'um', 'teste', 0),
(15, 'msg', 'dois', '', 0),
(16, 'listas', 'tres', 'teste', 0),
(17, 'nome', 'um', '', 0),
(18, 'escada', 'dois', '', 0),
(19, 'Nome do usuário', 'um', 'COloque seu nome', 0),
(20, 'listas', 'dois', '', 0),
(21, 'msg', 'dois', '', 0),
(22, 'listas teste', 'tres', '', 0),
(23, 'nome', 'um', '', 0),
(24, 'msg', 'dois', '', 0),
(25, 'nome', 'um', '', 0),
(26, 'nome', 'um', '', 0),
(27, 'nome', 'um', '', 0),
(28, 'msg', 'dois', '', 0),
(29, 'listas', 'um', '', 0),
(30, 'listas', 'dois', '', 0),
(31, 'listas', 'dois', '', 0),
(32, 'listas', 'tres', '', 0),
(33, 'listas', 'tres', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `nome_form` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `opcao`
--

CREATE TABLE `opcao` (
  `id_opcao` int(11) NOT NULL,
  `nome_opcao` varchar(200) NOT NULL,
  `id_campo_opcao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `opcao`
--

INSERT INTO `opcao` (`id_opcao`, `nome_opcao`, `id_campo_opcao`) VALUES
(1, '0', 9),
(2, '0', 9),
(3, '0', 9),
(4, 'a', 10),
(5, 'b', 10),
(6, 'b', 10),
(7, 'e', 13),
(8, 'r', 13),
(9, 'a', 13),
(10, 'a', 16),
(11, 'a', 22),
(12, 'b', 22),
(13, 'a', 32),
(14, 'a', 33),
(15, 'b', 33);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `campo`
--
ALTER TABLE `campo`
  ADD PRIMARY KEY (`id_campo`);

--
-- Índices de tabela `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Índices de tabela `opcao`
--
ALTER TABLE `opcao`
  ADD PRIMARY KEY (`id_opcao`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `campo`
--
ALTER TABLE `campo`
  MODIFY `id_campo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `opcao`
--
ALTER TABLE `opcao`
  MODIFY `id_opcao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
