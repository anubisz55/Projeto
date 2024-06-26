-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Out-2022 às 15:16
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nome_tutor` varchar(50) NOT NULL,
  `nome_tutora` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `usuario` varchar(255) NOT NULL
   `senha` varchar(255) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`,`nome_tutora`,`nome_tutor`, `endereco`, `telefone`, `usuario`, `senha`) VALUES
(220621, 'Batman', 'Luiz Roberto dos Santos', 'N/A', 'Rua 10', ' 5562991514140', 'batman', '$2y$10$lMHX4qPQTjymbI8w3Xf9FOBpySgv/xyVMh2RsMnTsRo513s3CJ9b2'),
(200201, 'Mel', 'Bruno Pereira Simões' , 'Luiza Fernandes Lima','Rua W24, Solta Gato, Uçuaru', ' 5562984643664', 'mel', '$2y$10$5mSxdOVW1vbnyFNRfJzEl.9RzJ.UrEd.J3r9nOGb9.4yn1TO3G1hC'),
(161207, 'Maxtell', 'Rua 9', 'Diego Santos Gouvea', 'Isis Valverde', '62993281462', 'maxtell', '$2y$10$wAOpKVdzAWItm.fqRv8Y1eQFhSQLx17UOFYHnSsBzn.Q0uCm3OTb6'),
(151029, 'Mimi', 'Rua formosa', 'N/A', 'Giovana Farias do Carmo', '000000001', 'mimi', '$2y$10$onguc9hwdpU34miEyxnzYOYqscklrIFzazv2OFRZWTtOhvYdRb2EG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcionista`
--

CREATE TABLE `recepcionista` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `recepcionista`
--

INSERT INTO `recepcionista` (`id`, `usuario`, `senha`) VALUES
(1, 'arthur', '$2y$10$wrT6jHC1tSf7XckCLAFlyeZpdrv3yuKEJXsso8En1xk47nPCXKxgG'),
(2, 'CARLOS', '', ''),
(3, 'Jonas', '', ''),
(5, 'Juila', '$2y$10$trt5L88RElvD9UKdqNgaRuG3KHEiQIChtZrbX/NquErT3fmNCN5ea');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `recepcionista`
--
ALTER TABLE `recepcionista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `recepcionista`
--
ALTER TABLE `recepcionista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
