-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2020 às 20:47
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
  `IDusuario` int(11) NOT NULL,
  `excluido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`IDatividade`, `NomeAtividade`, `Disciplina`, `DataEntrega`, `IDusuario`, `excluido`) VALUES
(3, 'Atividade de Função', '12', '2020-04-01', 6, 0),
(4, 'Modelo Incremental', '10', '2020-04-06', 6, 0),
(5, 'Atividade 2', '10', '2020-03-04', 6, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`IDatividade`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividades`
--
ALTER TABLE `atividades`
  MODIFY `IDatividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
