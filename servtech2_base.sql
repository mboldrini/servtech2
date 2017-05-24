-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2017 às 21:31
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servtech2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aviso`
--

CREATE TABLE `aviso` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `aviso` varchar(200) DEFAULT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `cpf` varchar(17) DEFAULT NULL,
  `cnpj` varchar(25) DEFAULT NULL,
  `datNas` varchar(20) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(105) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `datCad` varchar(20) DEFAULT NULL,
  `observacoes` varchar(255) DEFAULT NULL,
  `usuCad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `codCli` int(11) NOT NULL,
  `data` varchar(20) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `solicitado` varchar(255) NOT NULL,
  `detectado` varchar(255) DEFAULT NULL,
  `preCon` varchar(20) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `solucao` varchar(255) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `datCon` varchar(20) DEFAULT NULL,
  `tecRes` int(11) NOT NULL,
  `acrescimo` varchar(45) DEFAULT NULL,
  `desconto` varchar(45) DEFAULT NULL,
  `datCad` varchar(20) NOT NULL,
  `usuCad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipser`
--

CREATE TABLE `tipser` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `perDes` varchar(2) NOT NULL,
  `perAcr` varchar(2) NOT NULL,
  `datCad` varchar(20) NOT NULL,
  `usuCad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `perfil` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `cor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `perfil`, `username`, `password`, `nome`, `sobrenome`, `email`, `telefone`, `descricao`, `cor`) VALUES
(1, 'administrador', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Matheus', 'Boldrini', 'admin@admin.com', '+55 27 989 987 656', 'Senhor do Universo', 'skin-purple'),
(2, 'administrador', 'vanessa', 'ab41949825606da179db7c89ddcedcc167b64847', 'vanessa', 'hudgens', 'vanessa@admin.com', '+55 27 999 999 999 ', 'Filha do Dono', ''),
(3, 'administrador', 'jaiminho', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78', 'Jaime', 'Jaiminho', 'jaime@admin.com', '55555', 'Carteiro', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `valser`
--

CREATE TABLE `valser` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `iniVal` varchar(20) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `datCad` varchar(20) NOT NULL,
  `usuCad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aviso`
--
ALTER TABLE `aviso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario_idx` (`idUsuario`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuariocadastrou_idx` (`usuCad`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_idx` (`tipo`),
  ADD KEY `responsavel_idx` (`tecRes`),
  ADD KEY `usuarioCadastro_idx` (`usuCad`);

--
-- Indexes for table `tipser`
--
ALTER TABLE `tipser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuCadastro_idx` (`usuCad`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `valser`
--
ALTER TABLE `valser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuCadastro_idx` (`usuCad`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `tipo` FOREIGN KEY (`tipo`) REFERENCES `tipser` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
