-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/01/2024 às 20:45
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
-- Banco de dados: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(255) DEFAULT NULL,
  `email_cliente` varchar(255) DEFAULT NULL,
  `telefone_cliente` varchar(15) DEFAULT NULL,
  `status_cliente` enum('Ativo','Inativo','Concluido') DEFAULT NULL,
  `id_corretor_responsavel_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `telefone_cliente`, `status_cliente`, `id_corretor_responsavel_cliente`) VALUES
(1, 'Maria', 'maria@example.com', '123456789', 'Ativo', 1),
(2, 'Jose', 'jose@example.com', '987654321', 'Inativo', 2),
(3, 'Paulo', 'paulo@example.com', '555555555', 'Concluido', 3),
(4, 'Rute', 'rute@example.com', '777777777', 'Ativo', 1),
(5, 'Antonio', 'antonio@example.com', '999999999', 'Inativo', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `corretor`
--

CREATE TABLE `corretor` (
  `id_corretor` int(11) NOT NULL,
  `nome_corretor` varchar(255) DEFAULT NULL,
  `email_corretor` varchar(255) DEFAULT NULL,
  `telefone_corretor` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `corretor`
--

INSERT INTO `corretor` (`id_corretor`, `nome_corretor`, `email_corretor`, `telefone_corretor`) VALUES
(1, 'Bruno', 'bruno@example.com', '111111111'),
(2, 'Ashe', 'ashe@example.com', '222222222'),
(3, 'Leandro', 'leandro@example.com', '333333333');

-- --------------------------------------------------------

--
-- Estrutura para tabela `interacao`
--

CREATE TABLE `interacao` (
  `id_interacao` int(11) NOT NULL,
  `nome_interacao` varchar(255) DEFAULT NULL,
  `descricao_interacao` text DEFAULT NULL,
  `data_interacao` date DEFAULT NULL,
  `id_cliente_interacao` int(11) DEFAULT NULL,
  `id_corretor_responsavel_interacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `interacao`
--

INSERT INTO `interacao` (`id_interacao`, `nome_interacao`, `descricao_interacao`, `data_interacao`, `id_cliente_interacao`, `id_corretor_responsavel_interacao`) VALUES
(1, 'Telefonema 1', 'Conversa sobre propriedade X', '2024-01-10', 1, 1),
(2, 'Telefonema 2', 'Discussão sobre requisitos do cliente', '2024-01-11', 2, 2),
(3, 'Telefonema 3', 'Acompanhamento pós-visita', '2024-01-12', 3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefa`
--

CREATE TABLE `tarefa` (
  `id_tarefa` int(11) NOT NULL,
  `titulo_tarefa` varchar(255) DEFAULT NULL,
  `descricao_tarefa` text DEFAULT NULL,
  `id_corretor_responsavel_tarefa` int(11) DEFAULT NULL,
  `prioridade_tarefa` int(11) DEFAULT NULL,
  `id_cliente_tarefa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tarefa`
--

INSERT INTO `tarefa` (`id_tarefa`, `titulo_tarefa`, `descricao_tarefa`, `id_corretor_responsavel_tarefa`, `prioridade_tarefa`, `id_cliente_tarefa`) VALUES
(1, 'Tarefa1', 'Descrição da Tarefa 1', 1, 1, 1),
(2, 'Tarefa2', 'Descrição da Tarefa 2', 2, 2, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `email_cliente` (`email_cliente`),
  ADD KEY `id_corretor_responsavel_cliente` (`id_corretor_responsavel_cliente`);

--
-- Índices de tabela `corretor`
--
ALTER TABLE `corretor`
  ADD PRIMARY KEY (`id_corretor`);

--
-- Índices de tabela `interacao`
--
ALTER TABLE `interacao`
  ADD PRIMARY KEY (`id_interacao`),
  ADD KEY `id_cliente_interacao` (`id_cliente_interacao`),
  ADD KEY `id_corretor_responsavel_interacao` (`id_corretor_responsavel_interacao`);

--
-- Índices de tabela `tarefa`
--
ALTER TABLE `tarefa`
  ADD PRIMARY KEY (`id_tarefa`),
  ADD KEY `id_corretor_responsavel_tarefa` (`id_corretor_responsavel_tarefa`),
  ADD KEY `id_cliente_tarefa` (`id_cliente_tarefa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `corretor`
--
ALTER TABLE `corretor`
  MODIFY `id_corretor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `interacao`
--
ALTER TABLE `interacao`
  MODIFY `id_interacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tarefa`
--
ALTER TABLE `tarefa`
  MODIFY `id_tarefa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_corretor_responsavel_cliente`) REFERENCES `corretor` (`id_corretor`);

--
-- Restrições para tabelas `interacao`
--
ALTER TABLE `interacao`
  ADD CONSTRAINT `interacao_ibfk_1` FOREIGN KEY (`id_cliente_interacao`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `interacao_ibfk_2` FOREIGN KEY (`id_corretor_responsavel_interacao`) REFERENCES `corretor` (`id_corretor`);

--
-- Restrições para tabelas `tarefa`
--
ALTER TABLE `tarefa`
  ADD CONSTRAINT `tarefa_ibfk_1` FOREIGN KEY (`id_corretor_responsavel_tarefa`) REFERENCES `corretor` (`id_corretor`),
  ADD CONSTRAINT `tarefa_ibfk_2` FOREIGN KEY (`id_cliente_tarefa`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
