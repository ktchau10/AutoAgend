-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/05/2025 às 15:35
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

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
  `senha` varchar(45) NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`nome_aluno`, `email`, `telefone_aluno`, `sexo_aluno`, `data_nasc_aluno`, `cidade_aluno`, `estado_aluno`, `endereco_aluno`, `id_aluno`, `senha`) VALUES
('Lucas Yuri Evangelista Sagica', 'lucassagica5@gmail.com', '93999750968', 'masculino', '2025-01-20', 'Santarém', 'Pará', 'Alameda Trinta e Cinco, 46', 1, '12534'),
('Lucas Yuri Evangelista Sagica', 'admin@gmail.com', '93999750968', 'masculino', '2025-01-20', 'Santarém', 'Pará', 'Alameda Trinta e Cinco, 46', 2, '12345'),
('gustavo', 'gustavo@gmail.com', '93999750968', 'masculino', '2025-01-01', 'Santarém', 'Pará', 'Alameda Trinta e Cinco, 46', 3, '123456');

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
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
