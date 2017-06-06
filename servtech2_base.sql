-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2017 às 16:32
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
(6, 'Sucesso', 'Sucesso', 'callout-success', 1, 1),
(7, 'Informacao', 'Informacao', 'callout-info', 1, 1),
(8, 'Aviso', 'Aviso', 'callout-warning', 1, 1),
(9, 'Atencao', 'Atencao', 'callout-danger', 1, 1);

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
(4, 'Rodolph', 'J', '56987', '6/10/2001', '86-(791)651-4727', '86-(587)985-0976', 'rgummary0@webnode.com', '13379 Gerald Court', '1/7/2017', 'In hac habitasse platea dictumst.', 1),
(5, 'Willyt', 'J', '12', '15/3/1986', '886-(905)361-2012', '62-(555)386-4070', 'wozintsev1@friendfeed.com', '53 Westport Court', '13/7/2016', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 1),
(6, 'Guy', 'J', '12', '7/1/1982', '48-(739)570-4612', '57-(295)659-8744', 'gdaton2@discuz.net', '3183 Granby Trail', '23/12/2017', 'Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum.', 1),
(7, 'Angelia', 'J', '12', '2/8/1984', '62-(791)608-0847', '385-(180)181-0781', 'abegbie3@google.fr', '4 Kennedy Drive', '2/2/2017', 'Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus.', 1),
(8, 'Myrle', 'F', '12', '9/9/1962', '60-(669)823-7172', '33-(694)293-2106', 'mmunnings4@techcrunch.com', '4245 Valley Edge Circle', '10/5/2016', 'Quisque ut erat. Curabitur gravida nisi at nibh. In hac habitasse platea dictumst.', 1),
(9, 'Thedrick', 'J', '14', '30/1/1951', '51-(752)951-2044', '55-(922)518-5670', 'tburdis5@microsoft.com', '07721 Messerschmidt Trail', '13/9/2017', 'Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 1),
(10, 'Nisse', 'F', '14', '22/12/1944', '86-(210)295-3850', '63-(892)178-8803', 'nsives6@apple.com', '1 Thackeray Lane', '7/3/2017', 'Aenean auctor gravida sem.', 1),
(11, 'Silvie', 'J', '11', '22/2/1965', '55-(636)737-3324', '54-(471)964-2222', 'slugsdin7@diigo.com', '438 Ryan Alley', '29/9/2017', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia.', 1),
(12, 'Jacob', 'J', '14', '1/6/1946', '359-(716)120-7796', '57-(589)577-4003', 'jderoche8@patch.com', '718 Comanche Place', '10/7/2017', 'In est risus, auctor sed, tristique in, tempus sit amet, sem.', 1),
(13, 'Mikol', 'J', '11', '25/6/1987', '84-(101)428-3143', '55-(260)100-9595', 'mdemitri9@cornell.edu', '70 Gulseth Lane', '21/6/2016', 'Quisque ut erat.', 1),
(14, 'Elise', 'J', '11', '22/5/1978', '86-(479)908-0531', '62-(282)280-5660', 'ebirdseya@statcounter.com', '011 Coolidge Plaza', '11/8/2017', 'Aliquam erat volutpat. In congue. Etiam justo.', 1),
(15, 'Barton', 'F', '11', '5/11/1959', '234-(378)455-6994', '351-(795)307-2897', 'bumplebyb@forbes.com', '2 Birchwood Avenue', '14/7/2016', 'Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', 1),
(16, 'Halsy', 'J', '11', '31/5/1976', '7-(150)638-1903', '351-(149)943-0334', 'hgarthc@businessweek.com', '88668 Fordem Circle', '18/8/2016', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius.', 1),
(17, 'Chrissy', 'F', '12', '12/9/1985', '62-(578)260-1143', '351-(703)529-3037', 'cadgerd@oakley.com', '776 Surrey Hill', '29/12/2016', 'Morbi vel lectus in quam fringilla rhoncus.', 1),
(18, 'Kellby', 'J', '15', '1/1/1968', '1-(121)144-2482', '55-(192)578-1115', 'klumbleye@latimes.com', '3307 Onsgard Street', '1/5/2017', 'Sed ante.', 1),
(19, 'Giulia', 'F', '12', '5/5/1968', '98-(500)191-9061', '63-(146)465-8330', 'gdibdinf@cbsnews.com', '89872 Manley Point', '18/5/2017', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', 1),
(20, 'Genevieve', 'F', '15', '17/6/1956', '66-(799)535-7582', '86-(581)499-5189', 'gdallinderg@trellian.com', '59 Superior Parkway', '19/10/2017', 'Integer a nibh. In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', 1),
(21, 'Cchaddie', 'F', '12', '22/4/1989', '351-(957)186-2647', '1-(379)914-0989', 'cwebsterh@bravesites.com', '62 Knutson Road', '19/7/2016', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis justo. Maecenas rhoncus aliquam lacus.', 1),
(22, 'Iolande', 'J', '12', '11/4/1988', '358-(867)106-4057', '86-(903)667-1090', 'icottereli@seattletimes.com', '921 Westridge Road', '30/5/2017', 'Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis justo.', 1),
(23, 'Alasteir', 'F', '14', '7/8/1999', '374-(787)127-1508', '355-(910)236-8487', 'awoltersj@trellian.com', '93717 Old Gate Drive', '16/10/2017', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius. Integer ac leo.', 1),
(24, 'Tamarah', 'F', '11', '10/11/1944', '62-(465)752-9473', '420-(339)162-7096', 'ttwelvesk@amazon.com', '7631 Myrtle Park', '30/4/2017', 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 1),
(25, 'Korry', 'J', '15', '24/12/1970', '7-(381)697-7555', '66-(873)866-7652', 'kbushbyl@123-reg.co.uk', '84 Bonner Junction', '2/2/2017', 'Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis.', 1),
(26, 'Hallsy', 'F', '13', '22/9/1985', '598-(268)714-8698', '86-(150)523-5169', 'hsimenotm@vkontakte.ru', '71747 Monument Street', '10/9/2016', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 1),
(27, 'Ulises', 'J', '11', '15/9/1958', '86-(579)566-9432', '86-(870)314-0046', 'uphillippon@tinypic.com', '36 Bonner Terrace', '16/9/2017', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue.', 1),
(28, 'Brantley', 'F', '13', '11/10/1950', '63-(745)537-6210', '81-(949)393-0575', 'bjurcao@pinterest.com', '7 Green Ridge Point', '29/4/2017', 'Etiam justo.', 1),
(29, 'Reynold', 'J', '14', '23/4/1941', '62-(886)359-0529', '254-(987)465-6604', 'rgilfoyp@columbia.edu', '3336 Lake View Alley', '1/12/2017', 'Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis.', 1),
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
(52, 'Thaxter', 'J', '13', '9/1/1968', '58-(162)159-5813', '46-(644)867-9689', 'tannets1c@rambler.ru', '011 Troy Street', '14/4/2017', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 1),
(53, 'Felicia', 'J', '14', '21/8/1969', '81-(223)676-5860', '46-(986)751-0166', 'fsemorad1d@cmu.edu', '21 Maple Wood Avenue', '17/7/2017', 'Maecenas pulvinar lobortis est. Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 1);

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

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `codCli`, `tipo`, `solicitado`, `detectado`, `preCon`, `status`, `solucao`, `observacao`, `datCon`, `tecRes`, `acrescimo`, `desconto`, `datCad`, `usuCad`) VALUES
(204, 15, 6, 'Quisque ut erat. Curabitur gravida nisi at nibh.333', 'Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.333', '29/9/2016', '5', 'Nunc rhoncus dui vel sem. Sed sagittis.333', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus.333', '15/6/2018', 3, '2.76', '1.96', '24/6/2016', 1),
(205, 22, 5, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque.', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.', '24/9/2017', '5', 'Ut tellus.', 'Nulla facilisi.', '26/10/2017', 1, '1.34', '1.87', '28/3/2017', 1),
(206, 25, 9, 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'Nullam varius.', '23/4/2017', '5', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', '2/11/2016', 1, '1.91', '1.3', '27/8/2017', 1),
(207, 25, 6, 'Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'Duis mattis egestas metus. Aenean fermentum.', '22/11/2017', '3', 'Maecenas rhoncus aliquam lacus.', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', '25/3/2017', 1, '1.18', '2.46', '23/10/2016', 1),
(208, 49, 7, 'Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.', 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', '2/12/2016', '3', 'Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci.', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo.', '14/11/2017', 1, '2.39', '2.2', '18/8/2017', 1),
(209, 26, 9, 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', 'Integer a nibh.', '29/8/2017', '4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices.', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.', '2/8/2016', 1, '2.21', '1.56', '19/10/2017', 1),
(210, 33, 6, 'Etiam justo.', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', '25/1/2017', '3', 'Maecenas pulvinar lobortis est. Phasellus sit amet erat.', 'Vivamus tortor. Duis mattis egestas metus. Aenean fermentum.', '18/1/2017', 1, '1.57', '1.98', '28/12/2016', 1),
(211, 13, 6, 'Nulla tempus. Vivamus in felis eu sapien cursus vestibulum. Proin eu mi.', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', '12/3/2017', '3', 'Donec dapibus. Duis at velit eu est congue elementum.', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', '25/11/2016', 1, '2.29', '1.16', '8/12/2016', 1),
(212, 42, 9, 'Integer non velit.', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', '24/12/2016', '2', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem. Sed sagittis.', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.', '11/11/2017', 1, '1.62', '1.34', '17/9/2017', 1),
(213, 1, 7, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend.', 'Pellentesque at nulla.', '26/3/2017', '4', 'Integer tincidunt ante vel ipsum.', 'Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend.', '18/7/2016', 1, '2.69', '1.42', '4/4/2017', 1),
(214, 37, 6, 'Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede. Morbi porttitor lorem id ligula.', 'Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit.', '7/8/2017', '2', 'Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat.', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', '3/1/2017', 1, '1.82', '1.57', '11/1/2017', 1),
(215, 35, 6, 'Duis ac nibh.', 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', '23/4/2017', '5', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.', 'Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum.', '29/1/2017', 1, '1.54', '2.69', '15/8/2016', 1),
(216, 27, 7, 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.', '29/4/2017', '1', 'In congue. Etiam justo. Etiam pretium iaculis justo.', 'Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', '11/3/2017', 1, '2.35', '1.51', '17/9/2016', 1),
(217, 14, 7, 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum.', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros.', '28/11/2016', '4', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'Proin risus.', '22/6/2016', 1, '1.14', '2.7', '12/7/2016', 1),
(218, 12, 8, 'Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.', 'Suspendisse potenti.', '30/9/2016', '3', 'Donec vitae nisi.', 'Nulla tellus. In sagittis dui vel nisl. Duis ac nibh.', '1/5/2017', 1, '2.64', '1.36', '11/8/2017', 1),
(219, 4, 7, 'Nulla nisl. Nunc nisl.', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', '25/4/2017', '3', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien.', '28/7/2017', 1, '1.95', '2.06', '11/10/2017', 1),
(220, 39, 6, 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus.', 'Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis.', '8/7/2016', '3', 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', 'In hac habitasse platea dictumst.', '17/8/2016', 1, '2.89', '1.9', '11/7/2016', 1),
(221, 32, 9, 'Nam nulla.', 'Aenean sit amet justo.', '22/7/2016', '5', 'Praesent blandit lacinia erat.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '22/10/2016', 1, '1.36', '2.31', '14/3/2017', 1),
(222, 2, 5, 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros.', 'In quis justo.', '18/9/2016', '4', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis.', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', '3/6/2017', 1, '2.24', '2.32', '13/7/2016', 1),
(223, 30, 6, 'Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla.', 'Donec posuere metus vitae ipsum.', '3/5/2017', '5', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '2/12/2016', 1, '2.24', '2.5', '9/11/2017', 1),
(224, 6, 6, 'Maecenas tincidunt lacus at velit.', 'Nulla justo. Aliquam quis turpis eget elit sodales scelerisque.', '24/11/2016', '4', 'Sed accumsan felis. Ut at dolor quis odio consequat varius. Integer ac leo.', 'Suspendisse potenti.', '3/3/2017', 1, '1.6', '1.81', '16/7/2017', 1),
(225, 44, 9, 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor.', 'Nam tristique tortor eu pede.', '26/10/2017', '2', 'Duis bibendum. Morbi non quam nec dui luctus rutrum.', 'Proin interdum mauris non ligula pellentesque ultrices.', '3/11/2017', 1, '1.02', '1.41', '16/10/2016', 1),
(226, 28, 5, 'Phasellus sit amet erat. Nulla tempus.', 'Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', '17/2/2017', '1', 'Duis mattis egestas metus.', 'Quisque ut erat. Curabitur gravida nisi at nibh.', '2/5/2017', 1, '2.32', '2.74', '19/2/2017', 1),
(227, 28, 5, 'Vestibulum ac est lacinia nisi venenatis tristique.', 'Phasellus sit amet erat. Nulla tempus.', '11/6/2017', '5', 'Sed ante. Vivamus tortor.', 'Duis bibendum. Morbi non quam nec dui luctus rutrum.', '2/9/2016', 1, '2.6', '1.38', '15/7/2017', 1),
(228, 22, 8, 'Aenean lectus.', 'Vestibulum rutrum rutrum neque.', '9/11/2016', '1', 'Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.', 'In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices.', '30/11/2016', 1, '2.51', '2.74', '26/4/2017', 1),
(229, 40, 8, 'Nam nulla.', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', '18/9/2016', '5', 'Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum.', 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat.', '30/11/2016', 1, '2.65', '1.13', '7/10/2017', 1),
(230, 22, 9, 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa.', 'Nullam molestie nibh in lectus. Pellentesque at nulla. Suspendisse potenti.', '19/6/2016', '3', 'Fusce posuere felis sed lacus.', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '23/6/2016', 1, '2.41', '1.92', '18/7/2017', 1),
(231, 6, 9, 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue.', 'Pellentesque at nulla. Suspendisse potenti.', '4/3/2017', '4', 'Maecenas pulvinar lobortis est. Phasellus sit amet erat.', 'In hac habitasse platea dictumst.', '20/9/2016', 1, '2.41', '2.27', '26/6/2016', 1),
(232, 25, 7, 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 'Vivamus tortor. Duis mattis egestas metus. Aenean fermentum.', '23/6/2017', '3', 'Curabitur at ipsum ac tellus semper interdum.', 'Aliquam non mauris. Morbi non lectus.', '28/4/2017', 1, '1.71', '2.06', '30/6/2016', 1),
(233, 24, 5, 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 'Vestibulum rutrum rutrum neque.', '18/6/2016', '1', 'Nulla mollis molestie lorem. Quisque ut erat.', 'Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien.', '19/6/2017', 1, '1.28', '2.93', '14/12/2016', 1),
(234, 2, 6, 'Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 'Proin risus. Praesent lectus.', '10/11/2016', '4', 'Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque.', '12/1/2017', 1, '1.86', '1.78', '3/9/2016', 1),
(235, 35, 5, 'Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat.', 'Morbi non quam nec dui luctus rutrum. Nulla tellus.', '8/12/2016', '5', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.', 'Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia.', '7/4/2017', 1, '1.66', '2.16', '12/12/2016', 1),
(236, 20, 6, 'Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 'Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum.', '21/11/2017', '4', 'Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.', '20/7/2017', 1, '2.52', '1.62', '13/6/2017', 1),
(237, 44, 5, 'Morbi porttitor lorem id ligula.', 'Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus.', '17/7/2017', '2', 'Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo. Aliquam quis turpis eget elit sodales scelerisque.', 'Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', '17/11/2017', 1, '1.85', '2.2', '16/6/2017', 1),
(238, 37, 6, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'Fusce posuere felis sed lacus.', '26/7/2016', '5', 'Praesent blandit. Nam nulla.', 'Quisque porta volutpat erat.', '26/4/2017', 1, '2.41', '1.8', '14/6/2016', 1),
(239, 47, 8, 'In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique.', '27/9/2016', '3', 'Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', '24/11/2016', 1, '2.56', '2.8', '10/8/2017', 1),
(240, 49, 8, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', '5/10/2016', '4', 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', '3/9/2016', 1, '1.06', '2.43', '16/11/2017', 1),
(241, 45, 5, 'In est risus, auctor sed, tristique in, tempus sit amet, sem.', 'Phasellus sit amet erat. Nulla tempus.', '13/10/2017', '2', 'Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', '8/11/2016', 1, '2.84', '1.67', '15/10/2017', 1),
(242, 1, 8, 'Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.', 'Integer ac neque.', '18/9/2016', '1', 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'Nulla justo.', '1/10/2017', 1, '2.41', '1.4', '21/9/2017', 1),
(243, 31, 5, 'Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat.', '12/1/2017', '1', 'Duis bibendum.', 'Sed ante.', '27/12/2017', 1, '2.63', '1.94', '20/3/2017', 1),
(244, 50, 8, 'Aenean lectus.', 'Suspendisse potenti. Nullam porttitor lacus at turpis.', '24/10/2016', '1', 'Phasellus in felis. Donec semper sapien a libero.', 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum.', '3/12/2016', 1, '2.13', '1.64', '30/7/2017', 1),
(245, 45, 5, 'Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis.', '8/11/2017', '5', 'Phasellus sit amet erat.', 'Suspendisse potenti. In eleifend quam a odio.', '9/11/2017', 1, '2.35', '1.96', '28/8/2016', 1),
(246, 47, 5, 'In sagittis dui vel nisl. Duis ac nibh.', 'Maecenas ut massa quis augue luctus tincidunt.', '24/11/2016', '3', 'Nulla mollis molestie lorem.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam porttitor lacus at turpis.', '27/5/2016', 1, '1.57', '2.27', '8/2/2017', 1),
(247, 6, 9, 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', 'Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus.', '13/7/2017', '3', 'Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 'Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo.', '29/1/2017', 1, '1.7', '1.23', '28/7/2016', 1),
(248, 12, 7, 'Morbi a ipsum. Integer a nibh.', 'In hac habitasse platea dictumst.', '24/6/2017', '5', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 'Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', '30/9/2017', 1, '2.24', '1.31', '10/8/2016', 1),
(249, 48, 8, 'Nullam sit amet turpis elementum ligula vehicula consequat.', 'Nulla tellus. In sagittis dui vel nisl.', '18/8/2017', '5', 'Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus. Suspendisse potenti.', 'Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', '16/10/2016', 1, '1.28', '2.16', '31/8/2017', 1),
(250, 17, 5, 'Nullam varius.', 'Aenean sit amet justo. Morbi ut odio.', '26/11/2016', '2', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst.', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.', '8/8/2016', 1, '1.67', '2.69', '5/11/2017', 1),
(251, 41, 6, 'Phasellus sit amet erat. Nulla tempus.', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', '17/12/2017', '4', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus.', 'In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc.', '1/11/2016', 1, '1.49', '2.01', '25/7/2017', 1),
(252, 4, 5, 'Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.', 'In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy.', '17/5/2017', '2', 'Duis ac nibh.', 'Ut tellus.', '4/5/2017', 1, '1.56', '1.69', '11/10/2017', 1),
(253, 16, 6, 'Etiam vel augue. Vestibulum rutrum rutrum neque.', 'Pellentesque ultrices mattis odio.', '26/5/2016', '1', 'Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'Nulla tellus.', '9/10/2016', 1, '2.67', '2.86', '16/2/2017', 1),
(254, 16, 8, 'In blandit ultrices enim.', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', '8/5/2017', '3', 'Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa.', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.', '5/2/2017', 1, '1.29', '1.66', '14/12/2016', 1),
(255, 38, 8, 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'Duis consequat dui nec nisi volutpat eleifend.', '17/8/2016', '5', 'Nulla justo. Aliquam quis turpis eget elit sodales scelerisque.', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '12/8/2016', 1, '1.38', '2.51', '2/8/2017', 1),
(256, 48, 6, 'Phasellus in felis.', 'Nulla suscipit ligula in lacus.', '29/6/2017', '1', 'Integer a nibh.', 'Suspendisse potenti. In eleifend quam a odio.', '3/4/2017', 1, '2.9', '2.24', '6/9/2017', 1),
(257, 12, 7, 'Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam. Nam tristique tortor eu pede.', 'Aenean auctor gravida sem.', '25/10/2016', '5', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'Nulla mollis molestie lorem.', '1/7/2016', 1, '2.46', '2.53', '30/11/2016', 1),
(258, 48, 8, 'Duis bibendum. Morbi non quam nec dui luctus rutrum.', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.', '17/10/2016', '5', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa.', 'Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus.', '10/8/2016', 1, '2.62', '2.46', '3/6/2017', 1),
(259, 16, 6, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam porttitor lacus at turpis.', 'Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.', '14/9/2016', '4', 'Suspendisse potenti. Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', '5/6/2017', 1, '2.31', '2.9', '6/10/2016', 1),
(260, 47, 6, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Sed accumsan felis. Ut at dolor quis odio consequat varius.', '27/11/2017', '5', 'Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis.', 'Fusce consequat.', '11/11/2016', 1, '1.61', '1.16', '19/10/2017', 1),
(261, 22, 5, 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', '23/6/2017', '1', 'Nulla suscipit ligula in lacus.', 'Proin at turpis a pede posuere nonummy.', '9/10/2017', 1, '2.22', '1.65', '1/12/2016', 1),
(262, 32, 6, 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'Nullam varius. Nulla facilisi.', '1/2/2017', '1', 'Donec dapibus.', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', '10/12/2017', 1, '2.84', '1.39', '8/11/2017', 1),
(263, 10, 5, 'Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'Nulla tempus.', '18/11/2017', '2', 'Nulla ac enim.', 'Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh.', '6/6/2016', 1, '2.14', '2.6', '23/12/2016', 1),
(264, 27, 8, 'Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.', '10/8/2016', '2', 'Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl.', 'Aenean lectus. Pellentesque eget nunc.', '23/6/2016', 1, '1.71', '1.98', '27/7/2016', 1),
(265, 33, 6, 'In hac habitasse platea dictumst.', 'Pellentesque at nulla.', '10/8/2016', '1', 'Nam tristique tortor eu pede.', 'In eleifend quam a odio.', '27/6/2016', 1, '1.35', '1.09', '12/11/2017', 1),
(266, 11, 5, 'Etiam vel augue. Vestibulum rutrum rutrum neque.', 'Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', '2/10/2017', '4', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'Morbi ut odio.', '19/8/2017', 1, '1.81', '2.43', '8/6/2017', 1),
(267, 28, 6, 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum.', 'Aenean lectus.', '26/9/2016', '3', 'Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', 'Aenean fermentum.', '22/4/2017', 1, '2.52', '2.69', '15/11/2017', 1),
(268, 32, 8, 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.', '20/2/2017', '1', 'Proin risus. Praesent lectus.', 'Vivamus tortor. Duis mattis egestas metus. Aenean fermentum.', '25/12/2017', 1, '1.32', '1.9', '13/7/2016', 1),
(269, 36, 7, 'Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'Curabitur at ipsum ac tellus semper interdum.', '12/10/2016', '5', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem. Sed sagittis.', '22/10/2016', 1, '1.66', '1.06', '22/1/2017', 1),
(270, 2, 5, 'Nulla ac enim.', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', '11/8/2017', '5', 'Nulla nisl. Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa.', 'Aliquam non mauris.', '6/1/2017', 1, '1.49', '1.59', '24/11/2017', 1),
(271, 33, 5, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend.', 'Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis.', '18/7/2017', '5', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet.', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor.', '18/2/2017', 1, '2.08', '2.91', '23/11/2017', 1),
(272, 1, 7, 'Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy.', '31/7/2017', '3', 'Suspendisse ornare consequat lectus.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', '30/9/2016', 1, '2.94', '2.99', '31/7/2016', 1),
(273, 42, 5, 'Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat.', 'Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi', '19/6/2016', '1', 'Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'Praesent id massa id nisl venenatis lacinia.', '19/12/2017', 1, '2.23', '1.8', '21/3/2017', 1),
(274, 47, 5, 'Duis at velit eu est congue elementum.', 'Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', '30/5/2017', '3', 'Vestibulum ac est lacinia nisi venenatis tristique.', 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', '19/5/2017', 1, '1.75', '2.3', '10/11/2017', 1),
(275, 8, 8, 'Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum.', 'Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', '28/6/2017', '3', 'Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum.', 'Pellentesque at nulla. Suspendisse potenti.', '5/3/2017', 1, '1.43', '2.86', '21/2/2017', 1),
(276, 41, 9, 'Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum.', 'Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.', '20/10/2017', '4', 'Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci.', 'Nunc purus. Phasellus in felis.', '19/10/2016', 1, '1.57', '1.4', '28/7/2017', 1),
(277, 19, 7, 'Maecenas rhoncus aliquam lacus.', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', '7/9/2017', '4', 'Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit.', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.', '29/5/2016', 1, '2.34', '1.27', '28/1/2017', 1),
(278, 2, 9, 'Etiam vel augue.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', '17/7/2016', '4', 'Aliquam erat volutpat. In congue. Etiam justo.', 'Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo.', '22/8/2016', 1, '1.07', '1.5', '19/8/2017', 1),
(279, 39, 9, 'Maecenas pulvinar lobortis est.', 'Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa.', '28/6/2016', '5', 'Vivamus tortor. Duis mattis egestas metus. Aenean fermentum.', 'Cras pellentesque volutpat dui.', '25/11/2017', 1, '1.12', '1.01', '21/8/2017', 1),
(280, 1, 9, 'Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 'In hac habitasse platea dictumst.', '31/7/2017', '4', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.', 'Phasellus in felis. Donec semper sapien a libero.', '7/5/2017', 1, '2.46', '1.46', '31/12/2016', 1),
(281, 32, 8, 'Aliquam sit amet diam in magna bibendum imperdiet.', 'Vivamus vel nulla eget eros elementum pellentesque.', '1/1/2017', '3', 'Etiam justo. Etiam pretium iaculis justo. In hac habitasse platea dictumst.', 'Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa.', '6/11/2016', 1, '1.15', '2.88', '20/9/2017', 1),
(282, 39, 7, 'Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor.', 'Duis mattis egestas metus. Aenean fermentum. Donec ut mauris eget massa tempor convallis.', '29/6/2016', '4', 'Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla.', '18/7/2016', 1, '2.33', '1.63', '25/6/2017', 1),
(283, 39, 6, 'Nulla justo.', 'Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat.', '11/8/2016', '3', 'Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum.', 'Praesent blandit.', '20/11/2016', 1, '1.42', '1.94', '21/9/2016', 1),
(284, 48, 9, 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 'In hac habitasse platea dictumst.', '25/10/2017', '5', 'Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci.', 'Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus. Pellentesque eget nunc.', '9/11/2016', 1, '1.28', '1.52', '10/8/2016', 1),
(285, 11, 7, 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', 'Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', '7/3/2017', '5', 'Vivamus in felis eu sapien cursus vestibulum.', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', '28/7/2016', 1, '1.52', '1.32', '27/11/2016', 1),
(286, 20, 7, 'Etiam faucibus cursus urna.', 'Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus. Suspendisse potenti.', '15/2/2017', '5', 'Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.', 'In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt.', '23/2/2017', 1, '2.38', '1.17', '12/6/2017', 1),
(287, 18, 8, 'Donec ut mauris eget massa tempor convallis.', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo.', '26/5/2016', '2', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', '5/3/2017', 1, '2.66', '2.49', '2/6/2017', 1),
(288, 14, 5, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.', 'Duis mattis egestas metus. Aenean fermentum. Donec ut mauris eget massa tempor convallis.', '19/5/2017', '4', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam.', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', '17/12/2016', 1, '1.35', '1.81', '14/8/2016', 1),
(289, 31, 7, 'Etiam vel augue.', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', '25/1/2017', '4', 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 'Phasellus in felis.', '16/12/2016', 1, '1.11', '2.04', '15/7/2017', 1),
(290, 29, 8, 'Phasellus id sapien in sapien iaculis congue.', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat.', '31/7/2016', '5', 'Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros.', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo.', '20/1/2017', 1, '2.16', '2.99', '11/1/2017', 1),
(291, 22, 5, 'Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phasellus sit amet erat.', 'Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede. Morbi porttitor lorem id ligula.', '17/10/2017', '2', 'Curabitur in libero ut massa volutpat convallis.', 'Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor.', '11/4/2017', 1, '1.79', '2.87', '17/4/2017', 1),
(292, 31, 7, 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.', '22/11/2017', '1', 'Nullam molestie nibh in lectus. Pellentesque at nulla.', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', '20/9/2016', 1, '1.34', '2.01', '10/9/2016', 1),
(293, 41, 7, 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus.', 'Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phasellus sit amet erat.', '25/6/2016', '3', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 'In quis justo.', '13/3/2017', 1, '1.02', '1.92', '26/5/2016', 1),
(294, 19, 9, 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique.', '3/2/2017', '3', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', '28/1/2017', 1, '1.91', '1.42', '31/5/2017', 1),
(295, 29, 6, 'Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 'Phasellus in felis. Donec semper sapien a libero.', '21/8/2016', '4', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla.', '14/12/2017', 1, '1.55', '2.28', '24/4/2017', 1),
(296, 22, 7, 'Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 'Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.', '5/10/2016', '4', 'Etiam faucibus cursus urna. Ut tellus.', 'Donec dapibus. Duis at velit eu est congue elementum. In hac habitasse platea dictumst.', '9/4/2017', 1, '2.34', '2.61', '21/10/2016', 1),
(297, 42, 5, 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', '15/5/2017', '4', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.', 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum.', '22/5/2017', 1, '2.09', '1.39', '18/8/2016', 1),
(298, 29, 9, 'Donec posuere metus vitae ipsum. Aliquam non mauris. Morbi non lectus.', 'Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla.', '28/4/2017', '4', 'Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis.', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', '28/8/2016', 1, '2.53', '1.78', '9/8/2017', 1),
(299, 27, 8, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique.', 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue.', '12/2/2017', '1', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.', '25/7/2016', 1, '2.69', '2.08', '4/8/2017', 1),
(300, 39, 8, 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 'Curabitur gravida nisi at nibh.', '22/6/2016', '1', 'Nunc nisl.', 'Pellentesque ultrices mattis odio. Donec vitae nisi.', '19/3/2017', 1, '2.86', '1.59', '5/6/2016', 1),
(301, 14, 6, 'Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor.', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', '10/3/2017', '2', 'Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh.', 'Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', '7/12/2016', 1, '2.58', '1.87', '4/3/2017', 1),
(302, 37, 7, 'Etiam faucibus cursus urna. Ut tellus.', 'Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante.', '2/11/2016', '2', 'Vestibulum sed magna at nunc commodo placerat. Praesent blandit.', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor.', '28/6/2017', 1, '1.84', '1.12', '6/2/2017', 1),
(303, 16, 9, 'Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien.', '4/4/2017', '4', 'Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum.', 'Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat.', '16/5/2017', 1, '2.32', '2.8', '2/8/2016', 1);

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

--
-- Extraindo dados da tabela `tipser`
--

INSERT INTO `tipser` (`id`, `tipo`, `perDes`, `perAcr`, `datCad`, `usuCad`) VALUES
(5, 'Formatação', '0', '1', '25-05-2017', 1),
(6, 'Backup', '1', '1', '25-05-2017', 1),
(7, 'Troca de Memória', '0', '1', '25-05-2017', 1),
(8, 'Limpeza Interna', '1', '0', '25-05-2017', 1),
(9, 'Entrega', '0', '0', '25-05-2017', 1);

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
  `tipo` int(12) NOT NULL,
  `iniVal` varchar(20) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `fimVal` varchar(20) DEFAULT NULL,
  `datCad` varchar(20) NOT NULL,
  `usuCad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `valser`
--

INSERT INTO `valser` (`id`, `tipo`, `iniVal`, `valor`, `fimVal`, `datCad`, `usuCad`) VALUES
(5, 5, '26/05/2017', '55', '00', '26-05-2017', 1),
(6, 6, '26/05/2017', '75', '00', '26-05-2017', 1),
(7, 7, '25/25/2017', '120', '00', '26-05-2017', 1),
(8, 8, '25/05/2017', '35', '00', '26-05-2017', 1),
(9, 9, '26/05/2017', '5', '00', '26-05-2017', 1);

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
  ADD KEY `tiposervicod` (`tipo`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;
--
-- AUTO_INCREMENT for table `tipser`
--
ALTER TABLE `tipser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `valser`
--
ALTER TABLE `valser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  ADD CONSTRAINT `tiposervicooo` FOREIGN KEY (`tipo`) REFERENCES `tipser` (`id`),
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
  ADD CONSTRAINT `tiposervicod` FOREIGN KEY (`tipo`) REFERENCES `tipser` (`id`),
  ADD CONSTRAINT `usuariocadastrouvalor` FOREIGN KEY (`usuCad`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
