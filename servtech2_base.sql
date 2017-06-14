-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jun-2017 às 16:44
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
  `titulo` varchar(45) NOT NULL,
  `aviso` varchar(200) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `ativo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aviso`
--

INSERT INTO `aviso` (`id`, `titulo`, `aviso`, `cor`, `ativo`, `idUsuario`) VALUES
(6, 'Sucesso', 'Sucesso', 'callout-success', 0, 1),
(7, 'Informacao', 'Informacao', 'callout-info', 0, 1),
(8, 'Aviso', 'Aviso', 'callout-warning', 0, 1),
(9, 'Atencao', 'Atencao', 'callout-danger', 0, 1),
(10, 'teste visual', 'novo visual do formulario de mensagens', 'callout-danger', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `registro` varchar(25) DEFAULT NULL,
  `datNas` varchar(20) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(105) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `datCad` varchar(20) DEFAULT NULL,
  `observacoes` varchar(255) DEFAULT NULL,
  `usuCad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `tipo`, `registro`, `datNas`, `celular`, `telefone`, `email`, `endereco`, `datCad`, `observacoes`, `usuCad`) VALUES
(5, 'Willyt', 'J', '12', '15/3/1986', '886-(905)361-2012', '62-(555)386-4070', 'wozintsev1@friendfeed.com', '53 Westport Court', '13/7/2016', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 1),
(6, 'Guy', 'J', '12', '7/1/1982', '48-(739)570-4612', '57-(295)659-8744', 'gdaton2@discuz.net', '3183 Granby Trail', '23/12/2017', 'Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum.', 1),
(23, 'Alasteir', 'F', '14', '7/8/1999', '374-(787)127-1508', '355-(910)236-8487', 'awoltersj@trellian.com', '93717 Old Gate Drive', '16/10/2017', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius. Integer ac leo.', 1),
(24, 'Tamarah', 'F', '11', '10/11/1944', '62-(465)752-9473', '420-(339)162-7096', 'ttwelvesk@amazon.com', '7631 Myrtle Park', '30/4/2017', 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 1),
(26, 'Hallsy', 'F', '13', '22/9/1985', '598-(268)714-8698', '86-(150)523-5169', 'hsimenotm@vkontakte.ru', '71747 Monument Street', '10/9/2016', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 1),
(27, 'Ulises', 'J', '11', '15/9/1958', '86-(579)566-9432', '86-(870)314-0046', 'uphillippon@tinypic.com', '36 Bonner Terrace', '16/9/2017', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue.', 1),
(28, 'Brantley', 'F', '13', '11/10/1950', '63-(745)537-6210', '81-(949)393-0575', 'bjurcao@pinterest.com', '7 Green Ridge Point', '29/4/2017', 'Etiam justo.', 1),
(30, 'Morlee', 'F', '15', '23/5/1972', '60-(890)458-0878', '62-(773)293-7191', 'mguthersonq@imageshack.us', '6516 Maryland Road', '11/7/2017', 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 1),
(31, 'Berni', 'F', '14', '22/1/2004', '358-(103)959-3345', '86-(486)331-8699', 'biversonr@cyberchimps.com', '56 Mayfield Center', '22/5/2016', 'Nulla facilisi. Cras non velit nec nisi vulputate nonummy.', 1),
(32, 'Tarah', 'F', '12', '3/11/1952', '81-(789)491-0758', '62-(232)273-6297', 'tavesons@nih.gov', '57 Mariners Cove Terrace', '22/12/2016', 'In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl.', 1),
(33, 'Ricky', 'J', '15', '25/7/1976', '84-(491)706-4630', '86-(956)520-3179', 'rkyberdt@uiuc.edu', '864 Merry Hill', '19/8/2017', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor.', 1),
(34, 'Elden', 'J', '14', '14/12/1946', '86-(345)415-9281', '86-(143)581-3645', 'emorseyu@live.com', '5031 Pond Street', '10/8/2017', 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique.', 1),
(35, 'Sarette', 'F', '12', '27/4/1977', '62-(542)391-9585', '254-(201)716-7345', 'smoylev@un.org', '688 Dottie Court', '2/10/2017', 'Nam nulla.', 1),
(36, 'Tania', 'J', '15', '6/6/1972', '965-(935)948-7622', '86-(422)107-4087', 'tbagottw@phpbb.com', '4210 Canary Terrace', '7/11/2017', 'In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices.', 1),
(37, 'Lanna', 'F', '15', '6/10/1974', '63-(522)278-5036', '372-(211)724-0658', 'lmoakesx@zimbio.com', '4745 Namekagon Trail', '3/5/2016', 'Sed ante. Vivamus tortor.', 1),
(38, 'Harlene', 'J', '11', '28/6/2005', '86-(572)673-9681', '254-(521)761-5180', 'hcochraney@prlog.org', '18961 Maple Street', '10/5/2017', 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue.', 1),
(39, 'Anatola', 'J', '13', '11/1/1971', '86-(698)415-0649', '86-(862)971-0840', 'atesmondz@harvard.edu', '202 Green Junction', '15/8/2017', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla.', 1),
(40, 'Dorree', 'F', '11', '11/9/1989', '7-(465)342-9218', '1-(469)750-7519', 'ddallison10@cafepress.com', '469 Corscot Lane', '7/2/2017', 'Sed ante. Vivamus tortor. Duis mattis egestas metus. Aenean fermentum.', 1),
(41, 'Lammond', 'F', '13', '23/2/1970', '389-(836)250-0936', '86-(442)620-9182', 'lsherrocks11@rambler.ru', '714 Michigan Court', '15/12/2016', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam portt', 1),
(42, 'Yettie', 'J', '15', '16/3/1961', '382-(899)512-2852', '30-(610)948-5919', 'ythibodeaux12@gnu.org', '887 Anderson Trail', '24/8/2017', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 1),
(43, 'Albertine', 'F', '11', '25/7/1973', '33-(322)874-8501', '52-(766)558-9878', 'ascogings13@goo.ne.jp', '3217 Lotheville Parkway', '1/8/2017', 'Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 1),
(44, 'Dosi', 'F', '15', '23/2/1965', '55-(836)768-5749', '1-(773)582-5870', 'dtrebble14@mit.edu', '1 Roxbury Avenue', '16/5/2016', 'Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 1),
(45, 'Ainsley', 'J', '15', '22/5/1947', '86-(585)430-0370', '351-(221)398-2010', 'amarjoribanks15@bigcartel.com', '3 Corben Parkway', '7/10/2017', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel ', 1),
(46, 'Gerhard', 'F', '13', '31/7/1992', '63-(767)857-4434', '86-(381)791-3732', 'ghebble16@amazonaws.com', '47450 Kinsman Crossing', '15/9/2016', 'Etiam pretium iaculis justo. In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 1),
(47, 'Rem', 'F', '14', '17/6/1963', '373-(834)611-4388', '27-(780)414-6799', 'rwohlers17@nydailynews.com', '3 Mcbride Trail', '28/2/2017', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 1),
(48, 'Weidar', 'J', '14', '28/12/1974', '7-(622)353-8082', '386-(375)965-0383', 'wlavarack18@sina.com.cn', '332 Cambridge Terrace', '19/12/2017', 'Nullam molestie nibh in lectus. Pellentesque at nulla. Suspendisse potenti.', 1),
(49, 'Gwenny', 'F', '12', '16/4/1985', '374-(626)339-3226', '86-(974)896-7598', 'gruler19@admin.ch', '05 Harper Parkway', '10/3/2017', 'Integer ac neque.', 1),
(50, 'Lockwood', 'F', '11', '11/9/1978', '506-(655)530-5057', '86-(244)984-7786', 'lzeplin1a@dailymail.co.uk', '77 School Street', '11/11/2016', 'Suspendisse potenti. Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ', 1),
(51, 'Arin', 'J', '11', '25/9/2000', '86-(908)380-4848', '62-(362)292-5764', 'abrands1b@fc2.com', '8980 Messerschmidt Lane', '19/10/2016', 'Integer ac neque.', 1),
(52, 'Thaxter', 'J', '13', '9/1/1968', '58-(162)159-5813', '46-(644)867-9689', 'tannets1c@rambler.ru', '011 Troy Street', '14/4/2017', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `codCli` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `solicitado` varchar(255) NOT NULL,
  `detectado` varchar(255) DEFAULT NULL,
  `preCon` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `solucao` varchar(255) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `datCon` date DEFAULT NULL,
  `tecRes` int(11) NOT NULL,
  `acrescimo` varchar(45) DEFAULT NULL,
  `desconto` varchar(45) DEFAULT NULL,
  `datCad` date NOT NULL,
  `usuCad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `codCli`, `tipo`, `solicitado`, `detectado`, `preCon`, `status`, `solucao`, `observacao`, `datCon`, `tecRes`, `acrescimo`, `desconto`, `datCad`, `usuCad`) VALUES
(3, 5, 10, 'asf', '', '2017-06-08', '1', '', '', '0000-00-00', 1, '', '', '2017-06-08', 1),
(4, 27, 18, 'asf', '', '2065-05-05', '2', '', '', '0000-00-00', 1, '', '', '2017-06-08', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipser`
--

CREATE TABLE `tipser` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `perDes` varchar(2) NOT NULL,
  `perAcr` varchar(2) NOT NULL,
  `datCad` date NOT NULL,
  `usuCad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipser`
--

INSERT INTO `tipser` (`id`, `tipo`, `perDes`, `perAcr`, `datCad`, `usuCad`) VALUES
(10, 'Formatacao1', '0', '0', '2017-06-06', 1),
(11, 'Formatacao2', '0', '0', '2017-06-07', 1),
(18, 'backup1', '0', '0', '2017-06-07', 1),
(19, 'backup2', '0', '0', '2017-06-07', 1);

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
(2, 'administrador', 'vanessa', '410013f679f8a5f0c2995c0432467124ef7cea10', 'vanessa', 'hudgens', 'vanessa@admin.com', '+55 27 999 999 999 ', 'Filha do Dono', ''),
(3, 'administrador', 'jaiminho', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78', 'Jaime', 'Jaiminho', 'jaime@admin.com', '55555', 'Carteiro', ''),
(8, 'administrador', 'chaves', '2c6462f8578ff40879973b19dc3ade96378fd769', 'Chaves', 'chavinho', 'chaves@vila.com', '', 'Mendigo', ''),
(9, 'administrador', 'teste', '2e6f9b0d5885b6010f9167787445617f553a735f', 'teste', 'Teste', 'teste@teste.com', 'telefone', 'teste', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `valser`
--

CREATE TABLE `valser` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `iniVal` date NOT NULL,
  `valor` varchar(10) NOT NULL,
  `fimVal` date DEFAULT NULL,
  `datCad` date NOT NULL,
  `usuCad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `valser`
--

INSERT INTO `valser` (`id`, `tipo`, `iniVal`, `valor`, `fimVal`, `datCad`, `usuCad`) VALUES
(21, 10, '2046-05-06', '654', '2046-05-06', '2017-06-07', 1),
(22, 10, '2017-06-08', '654', '0000-00-00', '2017-06-08', 1),
(23, 18, '2017-06-08', '66', '0000-00-00', '2017-06-08', 1);

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
  ADD KEY `usuCadastro_idx` (`usuCad`),
  ADD KEY `tipoServicoDe` (`tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aviso`
--
ALTER TABLE `aviso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tipser`
--
ALTER TABLE `tipser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `valser`
--
ALTER TABLE `valser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aviso`
--
ALTER TABLE `aviso`
  ADD CONSTRAINT `idusuario` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `usuariocadastrou` FOREIGN KEY (`usuCad`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `tiposervicoO` FOREIGN KEY (`tipo`) REFERENCES `tipser` (`id`),
  ADD CONSTRAINT `usuariocadastrouservico` FOREIGN KEY (`usuCad`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `tipser`
--
ALTER TABLE `tipser`
  ADD CONSTRAINT `usuariocadastroutipo` FOREIGN KEY (`usuCad`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `valser`
--
ALTER TABLE `valser`
  ADD CONSTRAINT `tipoServicoDe` FOREIGN KEY (`tipo`) REFERENCES `tipser` (`id`),
  ADD CONSTRAINT `usuariocadastrouvalor` FOREIGN KEY (`usuCad`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
