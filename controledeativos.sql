-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 13-Fev-2020 às 17:25
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controledeativos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `componentes`
--

CREATE TABLE `componentes` (
  `id` int(3) NOT NULL,
  `descricao` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `excluido` int(1) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `data_modificacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `componentes`
--

INSERT INTO `componentes` (`id`, `descricao`, `excluido`, `data_cadastro`, `data_modificacao`) VALUES
(1, 'Teclado', 0, '2017-10-22 00:00:00', '2017-10-22 22:58:52'),
(2, 'Mouse', 0, '2017-10-22 00:00:00', '2017-10-22 22:58:52'),
(3, 'Tablets', 0, '2017-10-22 00:00:00', '2017-10-22 23:01:08'),
(4, 'impressora', 0, '2017-10-22 00:00:00', '2017-10-22 23:01:08'),
(5, 'Monitor', 0, '2017-10-22 00:00:00', '2017-10-22 23:02:06'),
(6, 'Memória RAM', 0, '2017-10-22 00:00:00', '2017-10-22 23:02:06'),
(7, 'Fonte', 0, '2017-10-22 00:00:00', '2017-10-22 23:02:39'),
(8, 'Disco Rígido (HD)', 0, '2017-10-22 00:00:00', '2017-10-22 23:02:39'),
(9, 'Rede Wireless (sem fio)', 0, '2017-10-22 00:00:00', '2017-10-22 23:03:45'),
(10, 'Processador', 0, '2017-10-22 00:00:00', '2017-10-22 23:03:45'),
(15, 'Placa de Vídeo', 0, '2017-10-22 00:00:00', '2017-10-22 23:05:08'),
(16, 'Switch', 0, '2017-10-22 00:00:00', '2017-10-22 23:05:08'),
(17, 'Placa Mãe', 0, '2017-10-24 00:00:00', '2017-10-24 17:36:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_os` int(11) NOT NULL,
  `id_peca` int(11) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `id_usuario`, `id_os`, `id_peca`, `imagem`) VALUES
(1, 1, 1, 7, '../uploads/13-11-2017-15-00-57-IMG_0211.JPG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE `os` (
  `id` int(11) NOT NULL,
  `orgao` varchar(50) NOT NULL,
  `solicitante` varchar(50) NOT NULL,
  `cep` int(8) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `tecnico` varchar(50) NOT NULL,
  `data_solicitacao` date NOT NULL,
  `chamado` varchar(10) NOT NULL,
  `img_antiga` varchar(80) NOT NULL,
  `img_nova` varchar(80) NOT NULL,
  `data_alteracao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario_cadastro` varchar(50) NOT NULL,
  `usuario_alteracao` varchar(50) NOT NULL,
  `excluido` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `os`
--

INSERT INTO `os` (`id`, `orgao`, `solicitante`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `tecnico`, `data_solicitacao`, `chamado`, `img_antiga`, `img_nova`, `data_alteracao`, `usuario_cadastro`, `usuario_alteracao`, `excluido`) VALUES
(1, 'CASA 2', 'DAVID BEZERRA ', 52081391, '1Âª Travessa Alto das Pedrinhas', '30', 'Nova Descoberta', 'Recife', 'PE', 'David Bezerra', '2017-11-13', '12345', '../uploads/13-11-2017-15-00-57-IMG_0211.JPG', '../uploads/13-11-2017-15-00-57-IMG_0211.JPG', '2017-11-29 15:06:31', 'David Bezerra', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE `pecas` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) CHARACTER SET latin1 NOT NULL,
  `marca` varchar(50) CHARACTER SET latin1 NOT NULL,
  `modelo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fabricante` varchar(50) CHARACTER SET latin1 NOT NULL,
  `numero_serie` varchar(30) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `etiqueta` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `status` varchar(15) CHARACTER SET latin1 NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_alteracao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `emprestimo` int(1) NOT NULL,
  `tecnico` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `excluido` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pecas`
--

INSERT INTO `pecas` (`id`, `nome`, `marca`, `modelo`, `fabricante`, `numero_serie`, `tipo`, `etiqueta`, `status`, `data_cadastro`, `data_alteracao`, `emprestimo`, `tecnico`, `usuario`, `excluido`) VALUES
(1, 'KIT PLACA MAE', 'PCWARE', 'IPX18000G2', 'PCWARE', '724570713104', 'Placa Mae', '', 'Nova', '2017-11-08 15:54:26', '2017-11-17 13:25:19', 0, '', '', 0),
(2, 'KIT PLACA MAE', 'PCWARE', 'IPX18000G2', 'PCWARE', '724570713062', 'Placa Mae', '', 'Nova', '2017-11-08 16:05:18', '2017-11-17 13:25:23', 0, '', '', 0),
(3, 'KIT PLACA MAE', 'PCWARE', 'IPX18000G2', 'PCWARE', '724570702705', 'Placa Mae', '', 'Nova', '2017-11-08 16:05:57', '2017-11-17 13:25:31', 0, '', '', 0),
(4, 'KIT PLACA MAE', 'PCWARE', 'IPX18000G2', 'PCWARE', '724570713134', 'Placa Mae', '', 'Nova', '2017-11-08 16:06:33', '2017-11-17 13:25:37', 0, '', '', 0),
(5, 'MEMORIA', 'MUSHKIN', 'DDR3  4GB p notebook', 'MUSHKIN', 'FT277733', 'Memoria RAM', '', 'Nova', '2017-11-09 01:38:27', '2017-11-17 13:25:41', 0, '', 'David Bezerra', 0),
(6, 'MEMORIA', 'MUSHKIN', 'DDR3  4GB p notebook', 'MUSHKIN', 'FT277736', 'Memoria RAM', '', 'Nova', '2017-11-09 01:44:16', '2017-11-17 13:25:46', 0, '', 'David Bezerra', 0),
(7, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0954', 'Teclado', '0954', 'Nova', '2017-11-20 12:05:58', '2017-11-22 16:21:51', 1, 'Durval Luiz de Franca Filho', 'David Bezerra', 0),
(8, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-09555555', 'Teclado', '0955', 'Nova', '2017-11-20 12:08:16', '2017-11-22 16:40:32', 1, 'Cassio Fernando Macedo da Silva', 'David Bezerra', 0),
(9, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0956', 'Teclado', '0956', 'Nova', '2017-11-20 12:09:56', '2017-11-20 12:09:56', 0, '', 'David Bezerra', 0),
(10, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0957', 'Teclado', '0957', 'Nova', '2017-11-20 12:13:35', '2017-11-20 12:13:35', 0, '', 'David Bezerra', 0),
(11, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0958', 'Teclado', '0958', 'Nova', '2017-11-20 12:18:12', '2017-11-20 12:18:12', 0, '', 'David Bezerra', 0),
(12, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0959', 'Teclado', '0959', 'Nova', '2017-11-20 12:19:20', '2017-11-20 12:19:20', 0, '', 'David Bezerra', 0),
(13, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0960', 'Teclado', '0960', 'Nova', '2017-11-20 12:21:29', '2017-11-20 12:21:29', 0, '', 'David Bezerra', 0),
(14, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0961', 'Teclado', '0961', 'Nova', '2017-11-20 12:22:41', '2017-11-20 12:22:41', 0, '', 'David Bezerra', 0),
(15, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0962', 'Teclado', '0962', 'Nova', '2017-11-20 12:26:09', '2017-11-20 12:26:09', 0, '', 'David Bezerra', 0),
(16, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0963', 'Teclado', '0963', 'Nova', '2017-11-20 12:27:12', '2017-11-20 12:27:12', 0, '', 'David Bezerra', 0),
(17, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0964', 'Teclado', '0964', 'Nova', '2017-11-20 12:27:42', '2017-11-20 12:27:42', 0, '', 'David Bezerra', 0),
(18, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WXJ1A378YY6C', 'Disco Rigido', '', 'Nova', '2017-11-20 12:30:30', '2017-11-20 12:30:30', 0, '', 'sheila vieira', 0),
(19, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0965', 'Teclado', '0965', 'Nova', '2017-11-20 12:31:04', '2017-11-20 12:31:04', 0, '', 'David Bezerra', 0),
(20, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WXX1A378UR4U', 'Disco Rigido', '', 'Nova', '2017-11-20 12:31:18', '2017-11-20 12:31:18', 0, '', 'sheila vieira', 0),
(21, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WX31A47P3N7Y', 'Disco Rigido', '', 'Nova', '2017-11-20 12:31:54', '2017-11-20 12:31:54', 0, '', 'sheila vieira', 0),
(22, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WXX1A378UYHT', 'Disco Rigido', '', 'Nova', '2017-11-20 12:32:26', '2017-11-20 12:32:26', 0, '', 'sheila vieira', 0),
(23, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WX31A47P338Y', 'Disco Rigido', '', 'Nova', '2017-11-20 12:33:07', '2017-11-20 12:33:07', 0, '', 'sheila vieira', 0),
(24, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WXK1A37C4KXA', 'Disco Rigido', '', 'Nova', '2017-11-20 12:33:47', '2017-11-20 12:33:47', 0, '', 'sheila vieira', 0),
(25, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0966', 'Teclado', '0966', 'Nova', '2017-11-20 12:34:23', '2017-11-20 12:34:23', 0, '', 'David Bezerra', 0),
(26, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WX31A47P3ZK6', 'Disco Rigido', '', 'Nova', '2017-11-20 12:34:23', '2017-11-20 12:34:23', 0, '', 'sheila vieira', 0),
(27, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0967', 'Teclado', '0967', 'Nova', '2017-11-20 12:34:32', '2017-11-20 12:34:32', 0, '', 'David Bezerra', 0),
(30, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WXK1A37ER55U', 'Disco Rigido', '', 'Nova', '2017-11-20 12:35:49', '2017-11-20 12:35:49', 0, '', 'sheila vieira', 0),
(31, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WX31A47P331C', 'Disco Rigido', '', 'Nova', '2017-11-20 12:36:23', '2017-11-20 12:36:23', 0, '', 'sheila vieira', 0),
(32, 'HD - NOTEBOOK', 'WD', 'WD5000LPCX', 'WD', 'WX31A47P3UTE', 'Disco Rigido', '', 'Nova', '2017-11-20 12:37:10', '2017-11-20 12:37:10', 0, '', 'sheila vieira', 0),
(33, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0968', 'Teclado', '0968', 'Nova', '2017-11-20 12:39:38', '2017-11-20 12:39:38', 0, '', 'David Bezerra', 0),
(34, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0969', 'Teclado', '0969', 'Nova', '2017-11-20 12:39:50', '2017-11-20 12:39:50', 0, '', 'David Bezerra', 0),
(35, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0970', 'Teclado', '0970', 'Nova', '2017-11-20 12:45:04', '2017-11-20 12:45:04', 0, '', 'David Bezerra', 0),
(36, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0971', 'Teclado', '0971', 'Nova', '2017-11-20 12:45:12', '2017-11-20 12:45:12', 0, '', 'David Bezerra', 0),
(38, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0972', 'Teclado', '0972', 'Nova', '2017-11-20 12:46:33', '2017-11-20 12:46:33', 0, '', 'David Bezerra', 0),
(40, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0973', 'Teclado', '0973', 'Nova', '2017-11-20 12:49:39', '2017-11-20 12:49:39', 0, '', 'David Bezerra', 0),
(41, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0974', 'Teclado', '0974', 'Nova', '2017-11-20 12:50:33', '2017-11-20 12:50:33', 0, '', 'David Bezerra', 0),
(43, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0975', 'Teclado', '0975', 'Nova', '2017-11-20 12:52:16', '2017-11-20 12:52:16', 0, '', 'David Bezerra', 0),
(44, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z0HZZ6HE', 'Disco Rigido', '', 'Nova', '2017-11-20 12:53:39', '2017-11-20 12:53:39', 0, '', 'sheila vieira', 0),
(45, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0976', 'Teclado', '0976', 'Nova', '2017-11-20 12:54:18', '2017-11-20 12:54:18', 0, '', 'David Bezerra', 0),
(46, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WWCC6Z5UY7A1Y', 'Disco Rigido', '', 'Nova', '2017-11-20 12:54:37', '2017-11-20 12:54:37', 0, '', 'sheila vieira', 0),
(47, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z2ZA1CN2', 'Disco Rigido', '', 'Nova', '2017-11-20 12:55:27', '2017-11-20 12:55:27', 0, '', 'sheila vieira', 0),
(48, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z1URRFX0', 'Disco Rigido', '', 'Nova', '2017-11-20 12:56:10', '2017-11-20 12:56:10', 0, '', 'sheila vieira', 0),
(49, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z5UY7ULF', 'Disco Rigido', '', 'Nova', '2017-11-20 12:56:58', '2017-11-20 12:56:58', 0, '', 'sheila vieira', 0),
(50, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z3JJNEA4', 'Disco Rigido', '', 'Nova', '2017-11-20 12:57:49', '2017-11-20 12:57:49', 0, '', 'sheila vieira', 0),
(51, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0977', 'Teclado', '0977', 'Nova', '2017-11-20 12:57:51', '2017-11-20 12:57:51', 0, '', 'David Bezerra', 0),
(52, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0978', 'Teclado', '0978', 'Nova', '2017-11-20 12:57:59', '2017-11-20 12:57:59', 0, '', 'David Bezerra', 0),
(53, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0979', 'Teclado', '0979', 'Nova', '2017-11-20 12:58:16', '2017-11-20 12:58:16', 0, '', 'David Bezerra', 0),
(54, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0980', 'Teclado', '0980', 'Nova', '2017-11-20 12:58:26', '2017-11-20 12:58:26', 0, '', 'David Bezerra', 0),
(55, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0981', 'Teclado', '0981', 'Nova', '2017-11-20 12:58:39', '2017-11-20 12:58:39', 0, '', 'David Bezerra', 0),
(56, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z5AYDANC', 'Disco Rigido', '', 'Nova', '2017-11-20 12:58:40', '2017-11-20 12:58:40', 0, '', 'sheila vieira', 0),
(57, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z1URRCHD', 'Disco Rigido', '', 'Nova', '2017-11-20 12:59:20', '2017-11-20 12:59:20', 0, '', 'sheila vieira', 0),
(58, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z1CSA7C3', 'Disco Rigido', '', 'Nova', '2017-11-20 13:00:07', '2017-11-20 13:00:07', 0, '', 'sheila vieira', 0),
(59, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z2XFHZ80', 'Disco Rigido', '', 'Nova', '2017-11-20 13:01:02', '2017-11-20 13:01:02', 0, '', 'sheila vieira', 0),
(61, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0982', 'Teclado', '0982', 'Nova', '2017-11-20 13:20:46', '2017-11-20 13:20:46', 0, '', 'David Bezerra', 0),
(62, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0983', 'Teclado', '0983', 'Nova', '2017-11-20 13:20:55', '2017-11-20 13:20:55', 0, '', 'David Bezerra', 0),
(63, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0984', 'Teclado', '0984', 'Nova', '2017-11-20 13:21:04', '2017-11-20 13:21:04', 0, '', 'David Bezerra', 0),
(64, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0985', 'Teclado', '0985', 'Nova', '2017-11-20 13:21:12', '2017-11-20 13:21:12', 0, '', 'David Bezerra', 0),
(65, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0986', 'Teclado', '0986', 'Nova', '2017-11-20 13:21:20', '2017-11-20 13:21:20', 0, '', 'David Bezerra', 0),
(66, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0987', 'Teclado', '0987', 'Nova', '2017-11-20 13:21:29', '2017-11-20 13:21:29', 0, '', 'David Bezerra', 0),
(67, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z3DA5HEZ', 'Disco Rigido', '', 'Nova', '2017-11-20 13:21:33', '2017-11-20 13:21:33', 0, '', 'sheila vieira', 0),
(68, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0988', 'Teclado', '0988', 'Nova', '2017-11-20 13:21:38', '2017-11-20 13:21:38', 0, '', 'David Bezerra', 0),
(69, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0989', 'Teclado', '0989', 'Nova', '2017-11-20 13:21:47', '2017-11-20 13:21:47', 0, '', 'David Bezerra', 0),
(70, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0990', 'Teclado', '0990', 'Nova', '2017-11-20 13:21:58', '2017-11-20 13:21:58', 0, '', 'David Bezerra', 0),
(71, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z2XFHLUT', 'Disco Rigido', '', 'Nova', '2017-11-20 13:23:13', '2017-11-20 13:23:13', 0, '', 'sheila vieira', 0),
(72, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z1YCUDVT', 'Disco Rigido', '', 'Nova', '2017-11-20 13:24:12', '2017-11-20 13:24:12', 0, '', 'sheila vieira', 0),
(73, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z4DH3RUX', 'Disco Rigido', '', 'Nova', '2017-11-20 13:25:31', '2017-11-20 13:25:31', 0, '', 'sheila vieira', 0),
(74, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z3DA5TN7', 'Disco Rigido', '', 'Nova', '2017-11-20 13:26:13', '2017-11-20 13:26:13', 0, '', 'sheila vieira', 0),
(75, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z3RCC7HD', 'Disco Rigido', '', 'Nova', '2017-11-20 13:26:52', '2017-11-20 13:26:52', 0, '', 'sheila vieira', 0),
(77, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z1ZKXSUF', 'Disco Rigido', '', 'Nova', '2017-11-20 13:28:05', '2017-11-20 13:28:05', 0, '', 'sheila vieira', 0),
(78, 'ESTABILIZADOR', 'SMS', '500VA', 'ARPENE - ARACAJU', '166200017075', 'Estabilizador', '', 'Nova', '2017-11-20 13:28:48', '2017-11-20 13:31:18', 0, '', 'David Bezerra', 0),
(79, 'ESTABILIZADOR', 'SMS', '500VA', 'ARPENE - ARACAJU', '166200017073', 'Estabilizador', '', 'Nova', '2017-11-20 13:28:58', '2017-11-20 13:31:21', 0, '', 'David Bezerra', 0),
(80, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z2ZL524F', 'Disco Rigido', '', 'Nova', '2017-11-20 13:30:05', '2017-11-20 13:30:05', 0, '', 'sheila vieira', 0),
(81, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z6NP8JL4', 'Disco Rigido', '', 'Nova', '2017-11-20 13:30:55', '2017-11-20 13:30:55', 0, '', 'sheila vieira', 0),
(82, 'HD', 'WD', 'WD5000AZLX', 'WD', 'WCC6Z3VHF8UY', 'Disco Rigido', '', 'Nova', '2017-11-20 13:31:46', '2017-11-20 13:31:46', 0, '', 'sheila vieira', 0),
(83, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-0991', 'Mouse', '0991', 'Nova', '2017-11-20 13:40:59', '2017-11-20 13:40:59', 0, '', 'David Bezerra', 0),
(84, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-0992', 'Mouse', '0992', 'Nova', '2017-11-20 13:41:46', '2017-11-23 09:46:08', 1, 'Durval Luiz de Franca Filho', 'David Bezerra', 0),
(85, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-0993', 'Mouse', '0993', 'Nova', '2017-11-20 13:41:53', '2017-11-23 09:46:20', 1, 'Durval Luiz de Franca Filho', 'David Bezerra', 0),
(86, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0994', 'Teclado', '0994', 'Nova', '2017-11-20 13:42:08', '2017-11-23 09:46:37', 1, 'Durval Luiz de Franca Filho', 'David Bezerra', 0),
(87, 'TECLADO ', 'MULTILASER', 'ABNT2', 'MULTILASER', 'TEC-0995', 'Teclado', '0995', 'Nova', '2017-11-20 13:42:18', '2017-11-23 09:46:49', 1, 'Durval Luiz de Franca Filho', 'David Bezerra', 0),
(88, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-0996', 'Mouse', '0996', 'Nova', '2017-11-20 13:46:53', '2017-11-20 14:14:20', 0, '', 'David Bezerra', 0),
(89, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-0997', 'Mouse', '0997', 'Nova', '2017-11-20 13:48:14', '2017-11-20 14:14:25', 0, '', 'David Bezerra', 0),
(90, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-0998', 'Mouse', '0998', 'Nova', '2017-11-20 13:48:50', '2017-11-20 14:13:58', 0, '', 'David Bezerra', 0),
(91, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-0999', 'Mouse', '0999', 'Nova', '2017-11-20 13:50:10', '2017-11-20 14:14:10', 0, '', 'David Bezerra', 0),
(92, 'FONTE ATX', 'WISECASE', 'FONTE DE ALIM. WS500P42S', 'WISECASE', '88091700010126', 'Fonte', '', 'Nova', '2017-11-20 13:52:29', '2017-11-20 13:52:29', 0, '', 'sheila vieira', 0),
(93, 'FONTE ATX', 'WISECASE', 'FONTE DE ALIM. WS500P42S', 'WISECASE', '88091700010125', 'Fonte', '', 'Nova', '2017-11-20 13:54:07', '2017-11-20 13:54:07', 0, '', 'sheila vieira', 0),
(94, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1000', 'Mouse', '1000', 'Nova', '2017-11-20 13:54:40', '2017-11-20 14:13:49', 0, '', 'David Bezerra', 0),
(95, 'FONTE ATX', 'WISECASE', 'FONTE DE ALIM. WS500P42S', 'WISECASE', '88091700010132', 'Fonte', '', 'Nova', '2017-11-20 13:54:46', '2017-11-20 13:54:46', 0, '', 'sheila vieira', 0),
(96, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1001', 'Mouse', '1001', 'Nova', '2017-11-20 13:54:59', '2017-11-20 14:13:42', 0, '', 'David Bezerra', 0),
(97, 'FONTE ATX', 'WISECASE', 'FONTE DE ALIM. WS500P42S', 'WISECASE', '88091700010133', 'Fonte', '', 'Nova', '2017-11-20 13:55:10', '2017-11-20 13:55:10', 0, '', 'sheila vieira', 0),
(98, 'FONTE ATX', 'WISECASE', 'FONTE DE ALIM. WS500P42S', 'WISECASE', '88091700010130', 'Fonte', '', 'Nova', '2017-11-20 13:55:44', '2017-11-20 13:55:44', 0, '', 'sheila vieira', 0),
(99, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1002', 'Mouse', '1002', 'Nova', '2017-11-20 13:55:44', '2017-11-20 14:13:37', 0, '', 'David Bezerra', 0),
(100, 'FONTE ATX', 'WISECASE', 'FONTE DE ALIM. WS500P42S', 'WISECASE', '88091700010122', 'Fonte', '', 'Nova', '2017-11-20 13:56:34', '2017-11-20 13:56:34', 0, '', 'sheila vieira', 0),
(101, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1003', 'Mouse', '1003', 'Nova', '2017-11-20 13:57:25', '2017-11-20 14:13:32', 0, '', 'David Bezerra', 0),
(102, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1004', 'Mouse', '1004', 'Nova', '2017-11-20 14:01:06', '2017-11-20 14:13:28', 0, '', 'David Bezerra', 0),
(103, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1005', 'Mouse', '1005', 'Nova', '2017-11-20 14:01:15', '2017-11-20 14:13:24', 0, '', 'David Bezerra', 0),
(104, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1006', 'Mouse', '1006', 'Nova', '2017-11-20 14:03:50', '2017-11-20 14:13:20', 0, '', 'David Bezerra', 0),
(105, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1007', 'Mouse', '1007', 'Nova', '2017-11-20 14:03:59', '2017-11-20 14:13:16', 0, '', 'David Bezerra', 0),
(106, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1008', 'Mouse', '1008', 'Nova', '2017-11-20 14:04:09', '2017-11-20 14:13:12', 0, '', 'David Bezerra', 0),
(107, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1009', 'Mouse', '1009', 'Nova', '2017-11-20 14:05:41', '2017-11-20 14:13:05', 0, '', 'David Bezerra', 0),
(108, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1010', 'Mouse', '1010', 'Nova', '2017-11-20 14:05:52', '2017-11-20 14:12:49', 0, '', 'David Bezerra', 0),
(110, 'FONTE ATX', 'WISECASE', 'FONTE DE ALIM. WS500P42S', 'WISECASE', '88091700010124', 'Fonte', '', 'Nova', '2017-11-20 14:11:23', '2017-11-20 14:11:23', 0, '', 'sheila vieira', 0),
(111, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1011', 'Mouse', '1011', 'Nova', '2017-11-20 14:11:33', '2017-11-20 14:12:39', 0, '', 'David Bezerra', 0),
(112, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1012', 'Mouse', '1012', 'Nova', '2017-11-20 14:11:43', '2017-11-20 14:12:43', 0, '', 'David Bezerra', 0),
(113, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1013', 'Mouse', '1013', 'Nova', '2017-11-20 14:11:51', '2017-11-20 14:12:34', 0, '', 'David Bezerra', 0),
(114, 'FONTE ATX', 'WISECASE', 'FONTE DE ALIM. WS500P42S', 'WISECASE', '88091700010131', 'Fonte', '', 'Nova', '2017-11-20 14:11:57', '2017-11-20 14:11:57', 0, '', 'sheila vieira', 0),
(115, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1014', 'Mouse', '1014', 'Nova', '2017-11-20 14:12:07', '2017-11-20 14:12:07', 0, '', 'David Bezerra', 0),
(116, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1015', 'Mouse', '1015', 'Nova', '2017-11-20 14:22:30', '2017-11-20 14:22:30', 0, '', 'David Bezerra', 0),
(118, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1016', 'Mouse', '1016', 'Nova', '2017-11-20 14:24:34', '2017-11-20 14:24:34', 0, '', 'David Bezerra', 0),
(119, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1017', 'Mouse', '1017', 'Nova', '2017-11-20 14:24:43', '2017-11-20 14:24:43', 0, '', 'David Bezerra', 0),
(120, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1018', 'Mouse', '1018', 'Nova', '2017-11-20 14:33:39', '2017-11-20 14:33:39', 0, '', 'David Bezerra', 0),
(121, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1019', 'Mouse', '1019', 'Nova', '2017-11-20 14:33:50', '2017-11-20 14:33:50', 0, '', 'David Bezerra', 0),
(122, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1020', 'Mouse', '1020', 'Nova', '2017-11-20 14:34:00', '2017-11-20 14:34:00', 0, '', 'David Bezerra', 0),
(123, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1021', 'Mouse', '1021', 'Nova', '2017-11-20 14:34:10', '2017-11-20 14:34:10', 0, '', 'David Bezerra', 0),
(124, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1022', 'Mouse', '1022', 'Nova', '2017-11-20 14:34:20', '2017-11-20 14:34:20', 0, '', 'David Bezerra', 0),
(125, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1023', 'Mouse', '1023', 'Nova', '2017-11-20 14:34:29', '2017-11-20 14:34:29', 0, '', 'David Bezerra', 0),
(127, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1024', 'Mouse', '1024', 'Nova', '2017-11-20 14:38:35', '2017-11-20 14:38:35', 0, '', 'David Bezerra', 0),
(128, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1025', 'Mouse', '1025', 'Nova', '2017-11-20 14:38:43', '2017-11-20 14:38:43', 0, '', 'David Bezerra', 0),
(129, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1026', 'Mouse', '1026', 'Nova', '2017-11-20 14:38:51', '2017-11-20 14:38:51', 0, '', 'David Bezerra', 0),
(130, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1027', 'Mouse', '1027', 'Nova', '2017-11-20 14:38:58', '2017-11-20 14:38:58', 0, '', 'David Bezerra', 0),
(131, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1028', 'Mouse', '1028', 'Nova', '2017-11-20 14:39:45', '2017-11-20 14:39:45', 0, '', 'David Bezerra', 0),
(132, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1029', 'Mouse', '1029', 'Nova', '2017-11-20 14:39:52', '2017-11-20 14:39:52', 0, '', 'David Bezerra', 0),
(133, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1030', 'Mouse', '1030', 'Nova', '2017-11-20 14:40:05', '2017-11-20 14:40:05', 0, '', 'David Bezerra', 0),
(134, 'MOUSE', 'MULTILASER', 'OPTICO SEM FIO', 'MULTILASER', 'MOU-1031', 'Mouse', '1031', 'Nova', '2017-11-20 14:40:12', '2017-11-20 14:40:12', 0, '', 'David Bezerra', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `usuario` varchar(65) NOT NULL DEFAULT '',
  `funcao` varchar(100) NOT NULL,
  `email` varchar(65) NOT NULL,
  `senha` varchar(65) NOT NULL DEFAULT '',
  `avatar` varchar(50) NOT NULL,
  `excluido` tinyint(1) NOT NULL DEFAULT '0',
  `data_modificacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `funcao`, `email`, `senha`, `avatar`, `excluido`, `data_modificacao`) VALUES
(1, 'David Bezerra', 'Gerente de Ativos', 'david@zerohum.com.br', '775e60bfc595027c0948fb51971dd815', '', 0, '2017-11-10 20:37:37'),
(4, 'Richardson Alberto Dantas', 'Técnico em Informática', 'alberto.dantas@zerohum.com.br', '', '', 0, '2017-11-12 20:04:40'),
(5, 'Antônio Emídeo dos Santos Júnior', 'Técnico em Informática', 'aesantosjunior@gmail.com', '', '', 0, '2017-11-12 20:02:45'),
(6, 'John Allyson Lopes de Lima', 'Técnico em Informática', 'lopesja.ti@gmail.com', '', '', 0, '2017-11-12 20:04:21'),
(7, 'Cassio Fernando Macedo da Silva', 'Técnico em Informática', 'cassio.fernando@zerohum.com.br', '', '', 0, '2017-11-12 20:04:21'),
(8, 'Pedro Veras Belmino Lins', 'Técnico em Informática', 'pedro.veras@zerohum.com.br', '', '', 0, '2017-11-12 20:05:55'),
(9, 'Durval Luiz de França Filho', 'Técnico em Informática', 'durval.luiz@zerohum.com.br', '', '', 0, '2017-11-12 20:05:55'),
(10, 'João Paulo Santos Mendes', 'Técnico em Informática', 'joao.paulo@zerohum.com.br', '', '', 0, '2017-11-12 20:06:57'),
(11, 'Maurício Ferreira Chaves Júnior', 'Técnico em Informática', 'feira.nova@gmail.com', '', '', 0, '2017-11-12 20:06:57'),
(12, 'Henrique Félix da Silva', 'Técnico em Informática', 'henriqueibmjp@hotmail.com', '', '', 0, '2017-11-12 20:07:56'),
(13, 'Jean José Ferreira Dornelas ', 'Técnico em Informática', '', '', '', 0, '2017-11-12 20:07:56'),
(14, 'Thiago Henrique de Souza', 'Técnico em Informática', 'thiago_hteteu@hotmail.com', '', '', 0, '2017-11-12 20:09:07'),
(15, 'Marcos Nunes Moreira', 'Técnico em Informática', 'marcos.im@hotmail.com', '', '', 0, '2017-11-12 20:09:07'),
(16, 'Joilson Guimarães de Almeida Júnior', 'Técnico em Informática', 'joilsonguimara@gmail.com', '', '', 0, '2017-11-12 20:10:10'),
(17, 'Denis Henrique G. de Souza', 'Técnico em Informática', 'denis_nadya@outlook.com', '', '', 0, '2017-11-12 20:10:10'),
(18, 'Aarão Campinho Ferreira', 'Técnico em Informática', 'aarao29@hotmail.com', '', '', 0, '2017-11-12 20:10:58'),
(19, 'Vinícius Barbosa Alencar e Sá', 'Técnico em Informática', 'alencarvi@gmail.com', '', '', 0, '2017-11-12 20:10:58'),
(20, 'Teste david', 'TESTADOR', 'teste@teste.com.br', '202cb962ac59075b964b07152d234b70', '../uploads/13-11-2017-15-00-57-IMG_0211.JPG', 0, '2017-11-14 13:23:34'),
(21, 'sheila vieira', 'supervisora', 'sheyla@zerohum.com.br', 'b1caafbdbe7deb108207f776816bdc79', '', 0, '2017-11-17 13:02:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descricao` (`descricao`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ns` (`numero_serie`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`usuario`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `componentes`
--
ALTER TABLE `componentes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pecas`
--
ALTER TABLE `pecas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
