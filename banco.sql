-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Mar-2020 às 21:37
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `IDatividade` int(11) NOT NULL,
  `NomeAtividade` varchar(100) NOT NULL,
  `Disciplina` varchar(100) NOT NULL,
  `DataEntrega` date NOT NULL,
  `DataFim` date NOT NULL,
  `IDusuario` int(11) NOT NULL,
  `excluido` int(11) NOT NULL,
  `concluido` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`IDatividade`, `NomeAtividade`, `Disciplina`, `DataEntrega`, `DataFim`, `IDusuario`, `excluido`, `concluido`, `status`) VALUES
(4, 'Modelo Incremental', '10', '2020-03-11', '2020-03-13', 6, 0, 1, 5),
(5, 'Atividade nova', '10', '2020-03-04', '2020-03-13', 6, 0, 1, 5),
(9, 'Html e Css', '13', '2020-03-11', '0000-00-00', 37, 0, 0, 0),
(10, 'Introdução ao angular', '14', '2020-03-12', '0000-00-00', 38, 0, 0, 0),
(11, 'Introdução ao angular', '14', '2020-03-13', '0000-00-00', 38, 0, 0, 0),
(12, 'Introdução ao angular 2', '14', '2020-03-15', '0000-00-00', 38, 0, 0, 0),
(16, 'Aslapinho gamer', '10', '2020-03-13', '2020-03-13', 6, 0, 1, 4),
(17, 'anderson mestre', '9', '2020-03-14', '2020-03-13', 6, 0, 1, 4),
(18, 'teste', '12', '2020-03-12', '2020-03-13', 6, 0, 1, 5),
(19, 'Atividade 1', '15', '2020-03-19', '2020-03-13', 39, 0, 1, 4),
(20, 'Atividade 3', '15', '2020-03-13', '0000-00-00', 39, 1, 0, 0),
(21, 'Atividade 2', '15', '2020-03-11', '2020-03-13', 39, 0, 1, 5),
(22, 'teste', '15', '2020-03-14', '0000-00-00', 39, 0, 0, 0),
(23, 'Atividade 2', '15', '2020-03-11', '0000-00-00', 39, 0, 0, 0),
(24, 'Atividade nova', '15', '2020-03-13', '0000-00-00', 39, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `IDdisciplina` int(11) NOT NULL,
  `IDusuario` int(11) NOT NULL,
  `NomeDisciplina` varchar(100) NOT NULL,
  `CursoUsuario` varchar(100) NOT NULL,
  `TurmaUsuario` varchar(100) NOT NULL,
  `Professor` varchar(100) NOT NULL,
  `Media` float NOT NULL,
  `excluido` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`IDdisciplina`, `IDusuario`, `NomeDisciplina`, `CursoUsuario`, `TurmaUsuario`, `Professor`, `Media`, `excluido`) VALUES
(9, 6, 'Matematica', 'segundo ano', '1DSA', 'Morcone', 7, 0),
(10, 6, 'Engenharia de software', '2 EM', 'B', 'David  Bezerra', 6, 0),
(12, 6, 'Matematica 1', 'Desenvolvimento de sistemas', 'B', 'ANDRE LIMA', 7, 0),
(13, 37, 'Web Design', 'Desenvolvimento de sistemas', '2DSA', 'Marcelo', 6, 0),
(14, 38, 'Angular', 'Udemy', 'B', 'ANDRE', 7, 0),
(15, 39, 'Angular', 'Desenvolvimento de sistemas', 'A', 'André Lima', 7, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `excluido` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` float NOT NULL,
  `IDdisciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`id`, `excluido`, `descricao`, `valor`, `IDdisciplina`) VALUES
(2, 0, 'nota 2', 8, 9),
(14, 1, 'nota 1', 10, 9),
(15, 0, 'nota 10', 7, 9),
(18, 1, 'sa', 9.5, 9),
(19, 0, 'nota 4', 7, 9),
(20, 1, 'nota 1', 2, 9),
(21, 0, 'Nota 1', 8, 10),
(22, 0, 'Nota 2', 5, 10),
(23, 0, 'nota 3', 4, 10),
(24, 0, 'Prova 03', 9, 14),
(25, 0, 'Prova 02', 6, 14),
(26, 1, 'Prova 01', 5, 14),
(27, 0, 'Prova 01', 6, 15),
(28, 0, 'Prova 02', 5, 15),
(29, 0, 'Prova 03', 10, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `ID` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`ID`, `status`) VALUES
(1, 'Não concluído - No prazo'),
(2, 'Não concluído - data limite'),
(3, 'Não concluído - vencido'),
(4, 'Concluído - No prazo'),
(5, 'Concluído - vencido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `excluido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `usuario`, `email`, `senha`, `excluido`) VALUES
(6, 'André Lima', 'andrevflima@gmail.com', '5e6fd1e398afed37d9a1a70536f1aac5', 0),
(36, 'Andre Lima', 'totestando#@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(37, 'André Fernandes ', 'aaa@gmail.com', '5e6fd1e398afed37d9a1a70536f1aac5', 0),
(38, 'David Bezerra', 'dvdbsilva@gmail.com', '89794b621a313bb59eed0d9f0f4e8205', 0),
(39, 'novo teste', 'teste@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`IDatividade`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`IDdisciplina`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividades`
--
ALTER TABLE `atividades`
  MODIFY `IDatividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `IDdisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
