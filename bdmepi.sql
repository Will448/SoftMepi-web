-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/03/2024 às 04:49
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
-- Banco de dados: `bdmepi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `userlogin`
--

CREATE TABLE `userlogin` (
  `id_usuario` int(12) NOT NULL,
  `senha` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `login` varchar(20) NOT NULL,
  `dta_cadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `userlogin`
--

INSERT INTO `userlogin` (`id_usuario`, `senha`, `login`, `dta_cadastro`) VALUES
(1, 'teste123', 'AdminMepi', '2024-03-20'),
(2, 'teste123', 'will448', '2024-03-20'),
(3, 'teste123', 'cris449', '2024-03-20');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id_usuario` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
