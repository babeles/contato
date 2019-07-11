-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jul-2019 às 20:14
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `cto_iduni` int(11) NOT NULL,
  `cto_nm` varchar(100) NOT NULL,
  `cto_dceml` varchar(100) NOT NULL,
  `cto_nrtel` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`cto_iduni`, `cto_nm`, `cto_dceml`, `cto_nrtel`) VALUES
(1, 'Leandro Babeles', 'leandrobabeles@gmail.com', '27998490701'),
(2, 'Maria Das GraÃ§a Melo Babeles', 'mariababele@gmail.com', '27999040097'),
(4, 'Fernando Viera', 'fernando@gmail.com', '279883488299'),
(5, 'Evelin Rossi', 'evelin@hotmail.com', '2799756381928'),
(6, 'Anderson Gomes Lima De Brito', 'anderson@gmail.com', '2799897939878'),
(7, 'Amanda Pereira', 'amandap@gmail.com', '27 998875446'),
(8, 'Alien Salgados', 'alinesalgado@hotmail.com', '2793387548782');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`cto_iduni`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `cto_iduni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
