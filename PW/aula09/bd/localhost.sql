-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 27/08/2020 às 12:57
-- Versão do servidor: 5.7.26
-- Versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pw_exemple`
--
CREATE DATABASE IF NOT EXISTS `pw_exemple` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pw_exemple`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clients`
--

CREATE TABLE `clients` (
  `idClient` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `clients`
--

INSERT INTO `clients` (`idClient`, `name`, `phone`, `email`, `address`) VALUES
(1, 'Nome do Cliente 1', '+5551987654321', 'email1@teste.com', 'Rua da Ulbra, 1900. Torres -RS'),
(2, 'Nome do Cliente 2', '+5551987654321', 'email2@teste.com', 'Rua da Ulbra, 1900. Torres -RS'),
(3, 'Nome do Cliente 3', '+5551987654321', 'email3@teste.com', 'Rua da Ulbra, 1900. Torres -RS'),
(4, 'Nome do Cliente 4', '+5551987654321', 'email4@teste.com', 'Rua da Ulbra, 1900. Torres -RS'),
(5, 'Nome do Cliente 5', '+5551987654321', 'email5@teste.com', 'Rua da Ulbra, 1900. Torres -RS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contacts`
--

CREATE TABLE `contacts` (
  `idContact` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `contacts`
--

INSERT INTO `contacts` (`idContact`, `name`, `email`, `message`, `status`, `description`) VALUES
(1, 'Nome do contato 1', 'email1@provedor.com', 'Mensagem enviada 1', 1, 'Resposta e acompanhamento'),
(2, 'Nome do contato 2', 'email2@provedor.com', 'Mensagem enviada 2', 1, 'Resposta e acompanhamento'),
(3, 'Nome do contato 3', 'email3@provedor.com', 'Mensagem enviada 3', 0, 'Entrar em contato'),
(4, 'Nome do contato 4', 'email4@provedor.com', 'Mensagem enviada 4', 0, ''),
(5, 'Nome do contato 5', 'email@5provedor.com', 'Mensagem enviada 5', 0, ''),
(6, 'Nome do cliente por completo', 'email@rpovedor.com', 'huahsuahsuahsu', 0, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pages`
--

CREATE TABLE `pages` (
  `idPage` int(11) NOT NULL,
  `page` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `pages`
--

INSERT INTO `pages` (`idPage`, `page`, `content`) VALUES
(1, 'home', '<h1>Bem vindo!!!</h1>\r\n<p>Conteúdos da home vindo da API</p>'),
(2, 'about', '<h1>Página sobre</h1>\r\n<p>Conteúdos da página sobre vindo da API</p>'),
(3, 'another', '<h1>Outra página</h1>\r\n<p>Conteúdos da página sobre vindo da API</p>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `products`
--

CREATE TABLE `products` (
  `idProduct` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `products`
--

INSERT INTO `products` (`idProduct`, `name`, `price`, `description`, `idCategory`) VALUES
(1, 'Produto 1', '10,00', 'Descrição detalhada do produto 1, categoria 1', 1),
(2, 'Produto 2', '11,00', 'Descrição detalhada do produto 2, categoria 2', 2),
(3, 'Produto 3', '12,00', 'Descrição detalhada do produto 2, categoria 3', 3),
(4, 'Produto 4', '17,00', 'Descrição detalhada do produto 4, categoria 1', 1),
(5, 'Produto 5', '13,00', 'Descrição detalhada do produto 5, categoria 2', 2),
(6, 'Produto 6', '12,00', 'Descrição detalhada do produto 6, categoria 3', 3),
(7, 'Produto 7', '12,00', 'Descrição detalhada do produto 7, categoria 3', 3),
(8, 'Produto 8', '12,00', 'Descrição detalhada do produto 8, categoria 3', 3),
(9, 'Produto 9', '13,00', 'Descrição detalhada do produto 9, categoria 2', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`idUser`, `name`, `user`, `password`, `admin`) VALUES
(1, 'Administrador', 'adm', 'adm', 1),
(2, 'Usuário comun', 'usr', 'usr', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`idClient`);

--
-- Índices de tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`idContact`);

--
-- Índices de tabela `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`idPage`);

--
-- Índices de tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProduct`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `pages`
--
ALTER TABLE `pages`
  MODIFY `idPage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;