-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2025 às 19:36
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `autoagend`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome_aluno` varchar(100) NOT NULL DEFAULT 'NOT NULL',
  `email` varchar(100) NOT NULL DEFAULT 'NOT NULL',
  `telefone_aluno` varchar(45) NOT NULL DEFAULT 'NOT NULL',
  `sexo_aluno` varchar(45) NOT NULL DEFAULT 'NOT NULL',
  `data_nasc_aluno` date NOT NULL,
  `cidade_aluno` varchar(45) NOT NULL DEFAULT 'NOT NULL',
  `estado_aluno` varchar(45) NOT NULL DEFAULT 'NOT NULL',
  `endereco_aluno` varchar(45) NOT NULL DEFAULT 'NOT NULL',
  `id_aluno` int(11) NOT NULL,
  `senha` varchar(255) NOT NULL DEFAULT 'NOT NULL',
  `codigo_recuperacao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`nome_aluno`, `email`, `telefone_aluno`, `sexo_aluno`, `data_nasc_aluno`, `cidade_aluno`, `estado_aluno`, `endereco_aluno`, `id_aluno`, `senha`, `codigo_recuperacao`) VALUES
('administrador', 'admin@gmail.com', '1111', 'masculino', '2025-05-19', 'aaaa', 'aaaa', 'aaaa', 1, '$2y$10$2c0NMfYedJ4JDZav/PZ1uulpaxkWC4ZxCgZ9fkLHqOVohzCon8tF2', NULL),
('gustavo', 'gustavo@gmail.com', '1111', 'masculino', '2025-05-15', 'aaaa', 'aaaa', 'aaaa', 8, '$2y$10$a1twyPcs/gIeI0hlAj6OpO1h6el8R8hcm0ini3XrxPnBDIUBj26q6', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_aluno`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
