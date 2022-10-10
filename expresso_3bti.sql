-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2022 às 03:16
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `expresso_3bti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `destino`
--

CREATE TABLE `destino` (
  `id_destino` int(3) NOT NULL,
  `cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `destino`
--

INSERT INTO `destino` (`id_destino`, `cidade`) VALUES
(1, 'Pimenta Bueno - RO'),
(2, 'Cacoal - RO'),
(3, 'Espigão do Oeste - RO'),
(4, 'Vilhena - RO'),
(5, 'Porto Velho - RO'),
(6, 'Ji-Paraná - RO'),
(7, 'Ariquemes - RO'),
(8, 'Rolim de Moura - RO'),
(9, 'Jaru - RO'),
(10, 'Guajará-Mirim - RO'),
(11, 'Machadinho D\'Oeste - RO'),
(12, 'Buritis - RO'),
(13, 'Ouro Preto do Oeste - RO'),
(14, 'São Miguel do Guaporé - RO'),
(15, 'Alta Floresta D\'Oeste - RO'),
(16, 'Primavera de Rondônia - RO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `origem`
--

CREATE TABLE `origem` (
  `id_origem` int(3) NOT NULL,
  `cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `origem`
--

INSERT INTO `origem` (`id_origem`, `cidade`) VALUES
(1, 'Pimenta Bueno - RO'),
(2, 'Cacoal - RO'),
(3, 'Espigão do Oeste - RO'),
(4, 'Vilhena - RO'),
(5, 'Porto Velho - RO'),
(6, 'Ji-Paraná - RO'),
(7, 'Ariquemes - RO'),
(8, 'Rolim de Moura - RO'),
(9, 'Jaru - RO'),
(10, 'Guajará-Mirim - RO'),
(11, 'Machadinho D\'Oeste - RO'),
(12, 'Buritis - RO'),
(13, 'Ouro Preto do Oeste - RO'),
(14, 'São Miguel do Guaporé - RO'),
(15, 'Alta Floresta D\'Oeste - RO'),
(16, 'Primavera de Rondônia - RO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(3) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id_destino`);

--
-- Índices para tabela `origem`
--
ALTER TABLE `origem`
  ADD PRIMARY KEY (`id_origem`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `destino`
--
ALTER TABLE `destino`
  MODIFY `id_destino` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `origem`
--
ALTER TABLE `origem`
  MODIFY `id_origem` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
