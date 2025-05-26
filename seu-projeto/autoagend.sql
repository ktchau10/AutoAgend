-- Estrutura da tabela `usuarios`
CREATE TABLE `usuarios` (
  `id_aluno` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,  -- Adicionado UNIQUE para garantir e-mail único
  `telefone_aluno` VARCHAR(45) NOT NULL,
  `sexo_aluno` VARCHAR(45) NOT NULL,
  `data_nasc_aluno` DATE NOT NULL,
  `cidade_aluno` VARCHAR(45) NOT NULL,
  `estado_aluno` VARCHAR(45) NOT NULL,
  `endereco_aluno` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserção de dados na tabela `usuarios`
INSERT INTO `usuarios` (`nome_aluno`, `email`, `telefone_aluno`, `sexo_aluno`, `data_nasc_aluno`, `cidade_aluno`, `estado_aluno`, `endereco_aluno`, `senha`) VALUES
('Lucas Yuri Evangelista Sagica', 'lucassagica5@gmail.com', '93999750968', 'masculino', '2025-01-20', 'Santarém', 'Pará', 'Alameda Trinta e Cinco, 46', '12534'),
('Lucas Yuri Evangelista Sagica', 'admin@gmail.com', '93999750968', 'masculino', '2025-01-20', 'Santarém', 'Pará', 'Alameda Trinta e Cinco, 46', '12345'),
('gustavo', 'gustavo@gmail.com', '93999750968', 'masculino', '2025-01-01', 'Santarém', 'Pará', 'Alameda Trinta e Cinco, 46', '123456');

ALTER TABLE usuarios
ADD COLUMN codigo_recuperacao VARCHAR(4) NULL;
