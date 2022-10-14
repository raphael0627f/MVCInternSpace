-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14-Out-2022 às 11:13
-- Versão do servidor: 10.5.12-MariaDB-0+deb11u1
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `capacitar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `comentario` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao_educacional`
--

CREATE TABLE `instituicao_educacional` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `instituicao_educacional_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agendamentos`
--

CREATE TABLE `tb_agendamentos` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `setores_id` int(11) NOT NULL,
  `dataAgendamento` date NOT NULL,
  `statusAgendamento` enum('Ativo','Inativo','Negado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bloqueio`
--

CREATE TABLE `tb_bloqueio` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cargo`
--

CREATE TABLE `tb_cargo` (
  `id` int(11) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_competencias`
--

CREATE TABLE `tb_competencias` (
  `id` int(11) NOT NULL,
  `competencia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_formacao_academica`
--

CREATE TABLE `tb_formacao_academica` (
  `id` int(11) NOT NULL,
  `formacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_idiomas`
--

CREATE TABLE `tb_idiomas` (
  `id` int(11) NOT NULL,
  `idioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_localidades`
--

CREATE TABLE `tb_localidades` (
  `id` int(11) NOT NULL,
  `nomeLocal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_localidades`
--

INSERT INTO `tb_localidades` (`id`, `nomeLocal`) VALUES
(1, 'HOTEL - VILA BUSINESS'),
(2, 'HOTEL - BELA VISTA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id`, `idUsuario`, `email`, `senha`) VALUES
(2, 1, 'adm@adm.com', '12345'),
(3, 1, 'adm@adm.com', '12345'),
(4, 1, 'adm@adm.com', '12345'),
(5, 1, 'adm@adm.com', '1234'),
(6, 1, 'adm@adm.com', '1234'),
(7, 1, 'adm@adm.com', '12345'),
(8, 1, 'adm@adm.com', '12345'),
(9, 1, 'adm@adm.com', '12345'),
(11, 2, 'adm@adm.com', '12345'),
(13, 2, 'adm@adm.com', '12345'),
(14, 2, 'adm@adm.com', '12345'),
(15, 1, 'adm@capacitar.com.br', '12345'),
(16, 1, 'adm@capacitar.com.br', '12345'),
(17, 1, 'adm@capacitar.com.br', '12345'),
(18, 1, 'adm@capacitar.com.br', '12345'),
(29, 1, 'ADM@CPACITAR.COM.BR', '5678'),
(30, 1, 'ADM@CPACITAR.COM.BR', '5678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_periodo`
--

CREATE TABLE `tb_periodo` (
  `id` int(11) NOT NULL,
  `periodo` enum('Manha','Tarde','Integral') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_setores`
--

CREATE TABLE `tb_setores` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_setores`
--

INSERT INTO `tb_setores` (`id`, `nome`, `hotel_id`) VALUES
(1, 'GOVERNANÇA', 0),
(2, 'GARÇOM', 0),
(3, 'BARMAN', 0),
(4, 'COZINHA', 0),
(5, 'RECEPÇÃO', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `genero` enum('Masculino','Feminino','Outros','Prefiro não dizer') NOT NULL,
  `experiencia` longtext NOT NULL COMMENT 'Nota: Programa enviará array se houver mais de um input',
  `instituicao_educacional` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `periodo` varchar(100) NOT NULL,
  `formacaoAcademica` varchar(100) NOT NULL,
  `competencias` varchar(100) NOT NULL,
  `idioma` varchar(100) NOT NULL COMMENT 'Nota: Programa enviará array se houver mais de um input',
  `curso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `endereco`, `cpf`, `documento`, `telefone`, `email`, `genero`, `experiencia`, `instituicao_educacional`, `cargo`, `periodo`, `formacaoAcademica`, `competencias`, `idioma`, `curso`) VALUES
(1, '', '', '', '', '', '', 'Masculino', '', '', '', '', '', '', '', ''),
(2, '\r\n', '', '', '', '', '', 'Masculino', '', '', '', '', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuarios` (`usuarios_id`);

--
-- Índices para tabela `instituicao_educacional`
--
ALTER TABLE `instituicao_educacional`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_agendamentos`
--
ALTER TABLE `tb_agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`usuarios_id`),
  ADD KEY `id_hotel` (`hotel_id`),
  ADD KEY `id_setor` (`setores_id`);

--
-- Índices para tabela `tb_bloqueio`
--
ALTER TABLE `tb_bloqueio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_cargo`
--
ALTER TABLE `tb_cargo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_competencias`
--
ALTER TABLE `tb_competencias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_formacao_academica`
--
ALTER TABLE `tb_formacao_academica`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_idiomas`
--
ALTER TABLE `tb_idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_localidades`
--
ALTER TABLE `tb_localidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`idUsuario`);

--
-- Índices para tabela `tb_periodo`
--
ALTER TABLE `tb_periodo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_setores`
--
ALTER TABLE `tb_setores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `instituicao_educacional`
--
ALTER TABLE `instituicao_educacional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_agendamentos`
--
ALTER TABLE `tb_agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tb_bloqueio`
--
ALTER TABLE `tb_bloqueio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_cargo`
--
ALTER TABLE `tb_cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_competencias`
--
ALTER TABLE `tb_competencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_formacao_academica`
--
ALTER TABLE `tb_formacao_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_idiomas`
--
ALTER TABLE `tb_idiomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_localidades`
--
ALTER TABLE `tb_localidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tb_periodo`
--
ALTER TABLE `tb_periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_setores`
--
ALTER TABLE `tb_setores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `id_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `tb_usuarios` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_agendamentos`
--
ALTER TABLE `tb_agendamentos`
  ADD CONSTRAINT `id_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `tb_localidades` (`id`),
  ADD CONSTRAINT `id_setor` FOREIGN KEY (`setores_id`) REFERENCES `tb_setores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`usuarios_id`) REFERENCES `tb_usuarios` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `tb_usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
