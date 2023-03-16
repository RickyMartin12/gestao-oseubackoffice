-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 28-Jul-2017 às 14:35
-- Versão do servidor: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oseuback_admin_gestao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` int(6) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_del` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `nome`, `pass`, `email`, `no_del`) VALUES
(1, 'Pedro', 'c6cc8094c2dc07b700ffcc36d64e2138', 'vgspedro@gmail.com', '1'),
(2, 'Ferreira', '8d13ed81f15ff53688df90dd38cbd6d6', 'geral@oseubackoffice.com', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `privilegios` varchar(10) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `no_del` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `nome`, `pass`, `privilegios`, `email`, `tipo`, `no_del`) VALUES
(25, 'andrew', 'd914e3ecf6cc481114a3f534a5faf90b', '2', 'jrodriguespeleira@hotmail.com', 'Administrator', '0'),
(24, 'Admin', '21232f297a57a5a743894a0e4a801fc3', '1', '11knum15@gmail.com', 'SuperUser', '1'),
(26, 'Gestorplus', 'd41d8cd98f00b204e9800998ecf8427e', '3', 'vgvgs@gmail.com', 'GestorPlus', '0'),
(32, 'Demo', 'fe01ce2a7fbac8fafaed7c982a04e229', '2', 'demo@demo.pt', 'Administrator', '0'),
(41, 'joao', 'dccd96c256bc7dd39bae41a405f25e43', '4', 'jrodriguespeleira@hotmail.com', 'Gestor', '0'),
(40, 'sara', '5bd537fc3789b5482e4936968f0fde95', '2', 'imagem@oseubackoffice.com', 'Administrator', '0'),
(42, 'andre', '1463ccd2104eeb36769180b8a0c86bb6', '2', 'andresousa@gmail.com', 'Administrator', '0'),
(43, 'demouser', 'd41d8cd98f00b204e9800998ecf8427e', '4', 'demouser@oseubackoffice.com', 'Gestor', '0'),
(44, 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', '1', '', 'SuperUser', '0'),
(45, 'Ferreira', 'b2d457fccbe92f09f3567d8c2d8946be', '1', 'geral@oseubackoffice.com', 'SuperUser', '0'),
(46, 'joaopeleira', '95cfd12dbaaa0a2b5796975f1483a53e', '2', 'joaopeleira@gmail.com', 'Administrator', '0'),
(47, 'Estrelinha', 'd41d8cd98f00b204e9800998ecf8427e', '2', '', 'Administrator', '0'),
(48, 'pedro', '3cfb0cf737ef4cf74720f74c038ba059', '2', 'suporte@oseubackoffice.com', 'Administrator', '0'),
(49, 'Jose', 'c0721a7e782fc5cbd94eb8b5c7ba308b', '2', 'Josepalata@gmail.com', 'Administrator', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bugs`
--

CREATE TABLE `bugs` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `descricao` varchar(3500) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `data_ins` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `duracao` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo_priodade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bugs`
--

INSERT INTO `bugs` (`id`, `link`, `descricao`, `referencia`, `data_ins`, `cliente_id`, `estado`, `duracao`, `user_id`, `tipo_priodade`) VALUES
(77, 'app/motoristas', 'sara-O valor que esta a aparecer nao e o do PO mas o do PVP quando devia ser o do PO Admin - \n Admin - \n sara - \n pedro - \n', '5a268ab8/69', 1494547200, 69, 'Concluido', 0, 48, ''),
(112, 'serviÃ§o/cobranÃ§as', 'sara-O valor que esta a aparecer nÃ£o Ã© o do PO mas o do PVP quando devia ser o do PO\nsara-\n\nsara-sara-\nO valor que esta a aparecer nÃ£o Ã© o do PO mas o do PVP quando devia ser o do PO\n\n\n\nsara-\n\n\n\n sara - \n', '591e2770/69', 1495152000, 69, 'Concluido', 0, 40, ''),
(113, 'app morotirstas', 'Sistema de navegaÃ§Ã£o nÃ£o funciona?\nsara-\n\nCliente esteve cÃ¡ dia 31 de Maio e diz que o sistema de navegaÃ§Ã£o nÃ£o lhe deu mais problemas\n\nsara-\n\nsara-\n\nsara-\n\nsara-\n', '59261070/86', 1495670400, 86, 'Concluido', 0, 40, ''),
(114, 'tranfers/novo', 'Cria serviÃ§o e lanÃ§a com   uma hora e envia para app dessa forma sara -  // Fuso horÃ¡rio incorrecto saiu para espanha e o sistema nÃ£o atualizou a hora. NÃ£o voltou a acontecer\n', '592761f0/69', 1495756800, 69, 'Concluido', 0, 40, ''),
(115, 'painel de controlo', 'serviÃ§os de operador quando se tenta apagar (depois de carregar na bolinha veremelha) passa para uma tabela de serviÃ§os nÃ£o solicitada\nAdmin-\n\nAdmin-\n\nAdmin-\n\nAdmin-\n\nAdmin-\n\nAdmin-\n sara - serviÃ§os de operador quando se tenta apagar (depois de carregar na bolinha veremelha) passa para uma tabela de serviÃ§os nÃ£o solicitada DIA 09.06.2017 esta situaÃ§Ã£o acontece tambÃ©m no serviÃ§os que caiem da loja online\nAdmin-\n\nAdmin-\n\nAdmin-\n\nAdmin-\n\nAdmin-\n\nAdmin-\n\n Admin - mmm\n Admin - \n', '592df970/91', 1496188800, 91, 'Pendente', 5000, 24, 'MÃ©dia'),
(116, 'tablet/ relatorio de gestÃ£o', 'pesquisa no relatorio de gestÃ£o efectuada na tablet estÃ¡ a dar valores errados na pesquisa de serviÃ§os para o dia (por ex) a data, hora erradas sara -  // tinha fuso horÃ¡rio errado\n', '592f4af0/74', 1496275200, 74, 'Concluido', 0, 40, ''),
(127, 'duraÃ§Ã£o da assistencia', 'sara - NÃ£o estÃ¡ a contabilizar o tempo da assistÃªncia, pelo menos nÃ£o aparece no relÃ³gio\n sara - sara - NÃ£o estÃ¡ a contabilizar o tempo da assistÃªncia, pelo menos nÃ£o aparece no relÃ³gio // situaÃ§Ã£o resolvida\n\n', '593733f0/91', 1496793600, 91, 'Concluido', 9000, 40, ''),
(128, 'escala', 'sara - Nao aparece motorista na escala com serviÃ§o lanÃ§ado / base de dados tem que ser mexida para para escolher staff\n sara - sara - Nao aparece motorista na escala com serviÃ§o lanÃ§ado / base de dados tem que ser mexida para para escolher staff \n\n Admin - \n Admin - \n Admin - \n Admin - \n', '59388570/55', 1496880000, 55, 'Concluido', 12000, 24, ''),
(132, 'replica de serviÃ§os jÃ¡ criado', 'sara - Na criaÃ§Ã£o da replica do serviÃ§o se tiver atribuido algum staff ou viatura nÃ£o premite deixar em branco\n sara - sara - Na criaÃ§Ã£o da replica do serviÃ§o se tiver atribuido algum staff ou viatura nÃ£o premite deixar em branco // SituaÃ§Ã£o resolvida pelo pedro, colocou o campo um campo novo que significa em branco\n\n', '593f1cf0/56', 1497312000, 56, 'Concluido', 204000, 40, ''),
(133, 'tabelas', 'sara - Valores de pn e po nao estÃ¡o a aparecer sempre que cria a tabela\n sara - sara - Valores de pn e po nao estÃ¡o a aparecer sempre que cria a tabela // nÃ£o voltou a acontecer portanto o que deve ter acontecido embora a cliente tenha negado foi inseriu productos a posteriori da criaÃ§Ã£o da tabela. Vou dar como concluido por nÃ£o ser precedente e nÃ£o ter voltado a acontecer.\n\n', '59406e70/92', 1497398400, 92, 'Concluido', 461000, 40, ''),
(134, 'gestao consulta', 'sara - Faz pesquisa e da resultado 0, so fazendo log out Ã© que volta a funcionar\n sara - sara - Faz pesquisa e da resultado 0, so fazendo log out Ã© que volta a funcionar // Colocado como resolvido por ter sido uma situaÃ§Ã£o isolada\n\n sara - \n Admin - \n Admin - \n', '59431170/56', 1497571200, 56, 'Concluido', 182000, 24, 'Baixa'),
(135, 'app motorista', 'sara - Motorista nÃ£o consegue inserir serviÃ§os, o campo aparece a cinzento sem possibilidade de entrar info\n sara - sara - Motorista nÃ£o consegue inserir serviÃ§os, o campo aparece a cinzento sem possibilidade de entrar info // vou dar como conluida sendo que foi uma vez e nÃ£o houve reports da cliente depois disto.\n\n pedro - \n Admin - \n Admin - \n', '59431170/69', 1497571200, 69, 'Concluido', 512000, 24, 'Alta'),
(136, 'login sistema', 'sara - Sistema estÃ¡ a fazer log out insesantemente, cliente solicita que seja verificada a situaÃ§Ã£o, ocorre com todos os funcionÃ¡rios, nenhum deles trabalha com os operadores e muito menos no mesmo browser\n sara - sara - Sistema estÃ¡ a fazer log out insesantemente, cliente solicita que seja verificada a situaÃ§Ã£o, ocorre com todos os funcionÃ¡rios, nenhum deles trabalha com os operadores e muito menos no mesmo browser // explicado ao cliente que muitas pessoas a trabalhar ao mesmo tempo faz com que o cash encha muito mais rapido do que numa empresa mais pequena aconselhou-se ao cliente limpar o cashe. // concluido por nÃ£o ter tido precedentes\n\n Admin - \n', '594705f0/82', 1497830400, 82, 'Concluido', 674000, 24, 'MÃ©dia'),
(137, 'privilegios', 'sara - Privilegios tem que ser atualizados, neste momento os funcionarios veem e editam valores como querem e o sr fernando ja detetou erros provados por essa situaÃ§Ã£o.\n', '594705f0/82', 1497830400, 82, 'Pendente', 95000, 40, ''),
(138, 'gestao consulta', 'sara - pdf do gestao consulta em A2 horizontal nao mete ao tamanho da folha\n Admin - \n sara - \n sara - \n', '5949a8f0/88', 1498003200, 88, 'Concluido', 112000, 40, ''),
(140, 'tabela', 'sara - erro a por valores manuais num PO elbufeira-armacao de pera\n sara - sara - erro a por valores manuais num PO elbufeira-armacao de pera // ProgramaÃ§Ã£o diz ser um producto inserido Ã  prostriori e por isso nÃ£o estar a dar para alterar o valor. Contudo sempre que ha um producto inserido depois da tabela ja estar criada o erro que costuma dar Ã© nem se conseguir abrir a ediÃ§Ã£o da tabela. SituaÃ§Ã£o resolvida.\n\n Admin - \n pedro - \n Admin - \n', '59504070/39', 1498435200, 39, 'Concluido', 117000, 24, ''),
(141, 'impressÃ£o de tabelas', 'sara - Cliente queixa-se que nÃ£o consegue ver nada o que imprime seja em A3 ou A4 com 4 cabeÃ§alhos ou 5.\n sara - \n sara - \n', '59504070/88', 1498435200, 88, 'Concluido', 87000, 40, ''),
(143, 'login', 'sara - Voltou a queixar-se do login que estÃ¡ sempre a espirar. / diz que painel de control Ã© inutil diz que o real time nÃ£o funciona, ainda diz que \" nÃ£o presta para nada\". disse ainda que as sugestÃµes que foram pedidas deviam ser desenvolvidas por que ele as pediu, foi lhe explicado que as sugestÃµes sÃ£o analisadas e consoante nÃºmero de pedidos Ã© que estas sÃ£o desenvolvidas nÃ£o invalidando que mais tardam nÃ£o sejam igualmente implantadas. Pediu que o seu login entrasse e ficasse sempre ligado e eu expliquei-lhe mais uma vez que isso nÃ£o era possÃ­vel pois a transfergest nÃ£o estÃ¡ desenvolvida dessa forma e entÃ£o disse lhe que tinha duas opcÃ§Ãµes ou que deixasse sugestÃ£o ou pedisse orÃ§amento para esse extra ser implementado. Mais uma vez referiu que o programa so lhe complica a vida e que nÃ£o fazia sentido ter que pagar por um extra que inicialmente ja deveria existir, e comparou com outros programas e aplicaÃ§Ãµes. Expliquei-lhe novamente que tinha entÃ£o duas opÃ§Ãµ sara - \n', '5952e370/86', 1498608000, 86, 'Concluido', 2937000, 40, ''),
(146, 'tabela gestao consulta', 'sara - tabela gesta consulta nÃ£o estÃ¡ a imprimir a3 baixo\n sara - \n', '59597af0/80', 1499040000, 80, 'Concluido', 44000, 40, 'Alta'),
(147, 'gestÃ£o consulta ', 'sara - nao funciona\n sara - \n', '59597af0/94', 1499040000, 94, 'Concluido', 203000, 40, 'Alta'),
(148, 'app motorista', 'sara - Motorista nÃ£o consegue inserir serviÃ§os, o campo aparece a cinzento sem possibilidade de entrar info\n Admin - \n sara - // TInha guardado como https no telefone e barrava e saltava o login\n', '59597af0/69', 1499040000, 69, 'Concluido', 55000, 40, 'Alta'),
(150, 'app motoristas', 'sara - nome cliente aparece cortado // alterarÃ£o padrÃ£o standard de visualizaÃ§Ã£o do tablet tem influÃªncia?\n sara - sara - nome cliente aparece cortado // alterarÃ£o padrÃ£o standard de visualizaÃ§Ã£o do tablet tem influÃªncia? // influencia. foi aconselhado a colocar o padrÃ£o standard do equipamento para que consiga visualizar com normalidade o nome do cliente em chegadas\n\n', '595c1df0/70', 1499212800, 70, 'Concluido', 706000, 40, 'MÃ©dia'),
(151, 'gestao consulta', 'sara - impressao sai com os campos todos mesmo q selcione so os que quer\n sara - \n', '595c1df0/88', 1499212800, 88, 'Concluido', 233000, 40, 'Alta'),
(152, 'operadores tabela', 'sara - As tabelas de operador nÃ£o estÃ£o a sair\n sara - \n', '5962b570/56', 1499644800, 56, 'Concluido', 150000, 40, 'Alta'),
(153, 'ComissÃµes staff e operador', 'sara - Arredondamento incorrecto. Na listagem dÃ¡ um valor na validaÃ§Ã£o dÃ¡ outro\n', '5962b570/56', 1499644800, 56, 'Pendente', 564000, 40, 'MÃ©dia'),
(154, 'entrar no sistema', 'sara - Cliente nÃ£o consegue entrar no sistema\n sara - sara - Cliente nÃ£o consegue entrar no sistema // programaÃ§Ã£o resolveu de imediato\n\n pedro - \n', '596406f0/92', 1499731200, 92, 'Concluido', 182000, 48, 'Alta'),
(155, 'tabelas', 'sara - tabelas de exportaÃ§Ã£o para pdf nÃ£o estÃ£o a ajustar a folha como devia\n', '596406f0/82', 1499731200, 82, 'Pendente', 928000, 40, 'Alta'),
(157, 'emails / escala', 'sara - Os emails enviados da escala do dia para os motoristas dÃ¡ erro, erro no envio do email por favor verifique a ligaÃ§Ã£o wifi. \n sara - sara - Os emails enviados da escala do dia para os motoristas dÃ¡ erro, erro no envio do email por favor verifique a ligaÃ§Ã£o wifi. // resolvido\n\n', '596beff0/60', 1500249600, 60, 'Concluido', 28000, 40, 'MÃ©dia'),
(158, 'gestÃ£o consulta', 'sara - EstÃ¡ a quebrar quando se passa das configuraÃ§Ãµes de sistema\n sara - sara - EstÃ¡ a quebrar quando se passa das configuraÃ§Ãµes de sistema // situaÃ§Ã£o resolvida\n\n', '597135f0/69', 1500595200, 69, 'Concluido', 1579000, 40, 'Alta'),
(159, 'relatÃ³rio', 'sara - pesquisa por motorista ou viatura da  na diferÃªncia de vez em quando\n sara - sara - pesquisa por motorista ou viatura da  0 na diferÃªncia de vez em quando\n\n', '59752a70/56', 1500854400, 56, 'Pendente', 547000, 40, 'Alta'),
(160, 'impressÃ£o voucher', 'sara - voucher aparecem com o cabeÃ§alho dinÃ¢mico da central por cima do voucher, acontece em mac\n sara - sara - voucher aparecem com o cabeÃ§alho dinÃ¢mico da central por cima do voucher, acontece em mac // Da em todos os computadores\n\n', '5977cd70/44', 1501027200, 44, 'Pendente', 251000, 40, 'Alta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes_assistencia`
--

CREATE TABLE `clientes_assistencia` (
  `id` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `nif` int(9) NOT NULL,
  `responsavel` varchar(255) NOT NULL,
  `tel1` int(15) NOT NULL,
  `tel2` int(15) NOT NULL,
  `tel3` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dominio` varchar(255) NOT NULL,
  `perfil` varchar(3500) NOT NULL,
  `email_secundario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes_assistencia`
--

INSERT INTO `clientes_assistencia` (`id`, `data`, `categoria`, `cliente`, `nif`, `responsavel`, `tel1`, `tel2`, `tel3`, `email`, `dominio`, `perfil`, `email_secundario`) VALUES
(39, 1470009600, 'Transfergest Pro Loja', 'RCM Travel', 509562060, 'Nathalie Silva', 289502487, 914257158, 0, 'geral@rcmtravel.pt', 'rcmtravel.pt', 'Primeiros clientes', ''),
(40, 1472688000, 'Transfergest Pro Loja', 'Big Eye Tours', 510971806, 'Rodolfo Romeira  e Ana Valente', 0, 933938354, 933938353, 'bigeye@bigeyetours.com', 'bigeyetours.com', 'Primeiros clientes', ''),
(44, 1475280000, 'Transfergest Pro Loja', 'Wow Sun Travel', 513099794, 'Valter Matos', 0, 917279091, 0, 'book@wowchauffeur.com', 'wowchauffeur.com', 'Primeiros clientes', ''),
(45, 1475280000, 'Transfergest Pro', 'LMP Fernandes', 513212361, 'LuÃ­s Fernandes', 0, 934569464, 0, 'luis@premiumchauffeurs.com', 'premiumchauffeurs.com', 'Primeiros clientes', ''),
(47, 1477958400, 'Transfergest Pro', 'Polotur, AgÃªncia de Viagens, lda', 503079502, 'LuÃ­s Rodrigues', 282498287, 966033477, 0, 'info@polotur.com', 'polotur.com', 'Primeiros clientes', ''),
(48, 1477958400, 'Transfergest Pro Loja', 'Peek and Go', 513623841, 'Elisa Pragana', 0, 910272325, 939639418, 'peek.gotravels@gmail.com', 'peekandgotravels.pt', 'cliente complicado', ''),
(55, 1477958400, 'Transfergest Pro', 'Attitude Courtesy', 513019707, 'JosÃ© Gago', 0, 910300390, 0, 'j.gago@icloud.com', 'attitudechauffeurs.com', 'Cliente Util', '-/-'),
(56, 1480550400, 'Transfergest Pro Loja', 'In everywhere', 513296336, 'Fernando e Anabela Grave', 0, 925877799, 968308464, 'info@everywhere.pt', 'everywhere.pt', 'Clientes pouco acessÃ­veis e arrogantes, \"acham-se\" mais importantes \nNÃ£o deixam falar para solucionar situaÃ§Ãµes, falam sempre por cima porque acham que tem sempre razÃ£o\nDepende dos dias.. desde que se fez a atualizaÃ§Ã£o nunca mais falaram incorrecta.\n10.07.2017- AtÃ© entÃ£o tÃªm sido educados.', '-/-'),
(60, 1480550400, 'Transfergest Pro Loja', 'Travel Line', 503639095, 'Gualter Fernandes', 289823100, 917329074, 0, 'bookings@travelline.pt', 'travelline.pt', '', '-/-'),
(61, 1480550400, 'Transfergest Pro Loja', 'Atlantik Morning', 513257594, 'Liria Reis', 282498287, 964254850, 0, 'info@atlantikmorning.com', 'atlantikmorning.com', 'NÃ£o tem a loja instalada / ver situaÃ§Ã£o', '-/-'),
(62, 1480550400, 'Transfergest Pro Loja', 'JoÃ£o Paulo Marta', 510772811, 'JoÃ£o Paulo Marta', 289143863, 913616640, 0, 'jpaulomarta@sapo.pt', '-/-', '', '-/-'),
(63, 1494547200, 'Transfergest Pro Loja', 'Special Bald', 111222333, 'Joao Viegas', 123456789, 555666777, 123456789, 'ricardo@oseubackoffice.com', 'transfergest.com', 'poper\n', '11knum15@gmail.com'),
(64, 1483228800, 'Transfergest Pro Loja', 'DynamicBest Algarve Transfers', 510261132, 'Ana Cristina', 289314605, 917605106, 0, 'dynamicbest@hotmail.com', 'dynamicbest.pt', 'Sempre com muitas dÃºvidas. ', '-/-'),
(65, 1485907200, 'Transfergest Pro', 'Actual Transfers', 513094423, 'Pedro Monteiro', 0, 965581420, 0, 'actualtransfers@gmail.com', '-/-', '', '-/-'),
(66, 1485907200, 'Transfergest Pro Loja', 'SofiTour ', 234802111, 'Florencia e JosÃ©', 0, 966059040, 964633076, 'sofitour.ed@gmail.com', 'sofitour.pt', '', '-/-'),
(67, 1485907200, 'Transfergest Pro Loja', 'AquaGo', 137749406, 'JoÃ£o InÃ¡cio', 0, 964563288, 0, 'jo.travelservice@gmail.com', 'aquago-transfers.com Editar', '', '-/-'),
(68, 1488326400, 'Transfergest Pro Loja', 'Manuel Dias Unipessoal Lda', 505051176, 'CesÃ¡rio', 0, 963057186, 0, 'manueldias@gmail.com', 'algarvetaxisandtransfers.com', '', '-/-'),
(69, 1485907200, 'Transfergest Pro Loja', 'Jumpy Little Monkey', 510905277, 'PatrÃ­cia Maia', 0, 964610917, 0, 'patricia_maia1@hotmail.com', 'jumpylittlemonkey.com', '', '-/-'),
(70, 1488326400, 'Transfergest Pro', 'Pleasant Tours', 510633617, 'Filipe Fernandes', 0, 965579991, 961015007, 'pleasanttours@hotmail.com', 'pleasanttours.com', '', '-/-'),
(74, 1485907200, 'Transfergest Pro Loja', 'Marco Paulo Cesar Dias Mendes', 195445783, 'CÃ©lia e Marco ', 0, 961260000, 966100222, 'clicktooldvillage@gmail.com', 'clicktooldvillage.com', 'Colocar Loja No site', '-/-'),
(75, 1451606400, 'Transfergest Pro', 'FunnyOrangetours', 510675450, 'Paulo e Mario', 0, 966928885, 966005452, 'funnyorangetours@gmail.com', 'faroairport.taxi', '', '-/-'),
(76, 1488326400, 'Transfergest Pro', 'Exquisite by Statur', 506788768, 'Isabel Correia', 0, 918718696, 918718696, 'isabel@statur.com', 'statur.com', 'loja pendente de finalizaÃ§Ã£o do site', '-/-'),
(77, 1488326400, 'Transfergest Pro Loja', 'Abus4you', 509187390, 'AntÃ³nio Leal', 289058143, 913259010, 0, 'info@abus4u.pt', 'abus4u.pt', 'Ainda nÃ£o comeÃ§ou a pagar loja, Ainda nÃ£o estÃ¡ instalada no site', '-/-'),
(78, 1491004800, 'Transfergest Pro', 'GentleBee', 509891276, 'Pedro Martins', 0, 913385616, 917370294, 'info@gentlebee.com', 'gentlebee.com', '', '-/-'),
(79, 1491004800, 'Transfergest Pro+Loja', 'EuroSun Holidays', 508018226, 'EusÃ©bio Pedro', 289820562, 912222880, 0, 'info@eurosun.pt', 'eurosun.pt', '', '-/-'),
(80, 1491004800, 'Transfergest Pro+Loja', 'Algarve Beach Transfers', 513938788, 'Lina Peixoto', 0, 925122940, 0, 'booking@algarvebeachtransfers.com', 'algarvebeachtransfers.com', 'Tem no pacote com Loja, mas a loja nÃ£o estÃ¡ instalada', '-/-'),
(81, 1491004800, 'Transfergest Pro+Loja', 'Just Go transfers', 216076250, 'Vishal Norotam', 0, 914832725, 0, 'info@justgotransfers.com', 'justgotransfers.com', 'Tem pacote com Loja mas Loja nÃ£o estÃ¡ instalada', '-/-'),
(82, 1491004800, 'Transfergest Pro', 'GalÃ© Holidays', 144737566, 'Fernando Guerreiro', 289543148, 925528075, 0, 'jgfernandomanuel@gmail.com', '-/-', 'Cliente pouco acessÃ­vel, quer tudo a maneira dele. NÃ£o Ã© flexÃ­vel e nÃ£o deixa falar. Acha que tem sempre razÃ£o.', '-/-'),
(83, 1493596800, 'Transfergest Pro+Loja', 'travel Adventure', 505213303, 'Adrian Anderco', 282313307, 925841130, 0, 'adriananderco@gmail.com', 'mydream-holiday.com', 'Loja nÃ£o estÃ¡ inserida, verificar porquÃª', '-/-'),
(84, 1493596800, 'Transfergest Pro+Loja', 'EasyWay Tours e Transfers', 510753515, 'Paulo Arez', 0, 966618595, 968243492, 'bookings@easywaytours.com', 'easywaytours.com', '', '-/-'),
(85, 1493596800, 'Transfergest Pro', 'Favorite Arrive Transfers', 513176780, 'Filipe Beja', 0, 924001831, 0, 'favouritearrivetransfers@gmail.com', 'favouritearrivetransfers.com', '', '-/-'),
(86, 1493596800, 'Transfergest Pro+Loja', 'Guide Algarve Transfers / Solanatour', 510900690, 'Nikolay Zhelyeznyak', 0, 936499889, 927066224, 'book@guidealgarve.com', 'transfers.guidealgarve.com', '', '-/-'),
(87, 1493596800, 'Transfergest Pro', 'Spikes Executive Transfers', 510864848, 'Cristian Paul', 289043653, 926028464, 0, 'info@spikestransfer.com', 'spikestransfer.com', '', '-/-'),
(88, 1496275200, 'Transfergest Pro', 'ATS Travel', 505121433, 'Valter Gabriel e Cristina', 282457306, 917250405, 0, 'info@atstravel.pt', 'atstravel.pt', '', '-/-'),
(89, 1496275200, 'Transfergest Pro', 'Prestige Chauffer', 206834900, 'AntÃ³nio Clemente', 0, 918888250, 966742315, 'amsclemente@sapo.pt', '-/-', '', '-/-'),
(91, 1494547200, 'Transfergest Pro Loja', 'oseubackoffice', 514027207, 'Sara', 289150167, 914017738, 0, 'geral@oseubackoffice.com', 'oseubackoffice.com', '', '-/-'),
(92, 1496275200, 'Transfergest Pro', 'BlueSkye', 223630764, 'Luciana Fonseca', 0, 963933301, 0, 'info@bluesky.com.pt', 'blueskye.com.pt', 'Novo cliente', 'lbf@live.com.pt'),
(93, 1498867200, 'Transfergest Pro', 'Drive2holidays', 514400676, 'DÃ©lio santos', 0, 966130530, 0, 'drive2holidays@gmail.com', '-/-', '', '-/-'),
(94, 1498867200, 'Transfergest Pro', 'trav4egolf', 509720048, 'Marisa Galhardo', 0, 966252506, 0, 'marisa@travegolf.pt', 'travegolf.pt', '', '-/-'),
(95, 1500508800, 'Transfergest Pro', 'Line Star Life', 513139311, 'Ricardo Frade', 0, 961130546, 963990999, 'geral@linestartlife.pt', 'linestartlife.pt', '', '-/-');

-- --------------------------------------------------------

--
-- Estrutura da tabela `companhia`
--

CREATE TABLE `companhia` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `cod_postal` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `tlm` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `site` varchar(100) NOT NULL,
  `nif` varchar(12) NOT NULL,
  `iban` varchar(50) NOT NULL,
  `desconto` varchar(10) NOT NULL DEFAULT '0',
  `hora_reserva` varchar(5) NOT NULL DEFAULT '0',
  `ravt` varchar(10) NOT NULL,
  `termos` text CHARACTER SET utf8,
  `color` varchar(25) NOT NULL DEFAULT '#123456',
  `pp_email` varchar(50) NOT NULL,
  `motorista` varchar(10) NOT NULL DEFAULT 'Sim',
  `paypal` varchar(10) NOT NULL DEFAULT 'Sim',
  `trans_bancaria` varchar(10) NOT NULL DEFAULT 'Sim',
  `pp_taxa` decimal(3,1) NOT NULL DEFAULT '3.5',
  `publicidade` varchar(255) NOT NULL,
  `noturno` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `companhia`
--

INSERT INTO `companhia` (`id`, `nome`, `logo`, `morada`, `cod_postal`, `tel`, `tlm`, `email`, `site`, `nif`, `iban`, `desconto`, `hora_reserva`, `ravt`, `termos`, `color`, `pp_email`, `motorista`, `paypal`, `trans_bancaria`, `pp_taxa`, `publicidade`, `noturno`) VALUES
(1, 'Osb Unipessoal, Lda', 'upload/logo1.png', 'Estrada Sta. Eulalia, Lt7', '8200-000 ALbufeira', '289150167', '914564564', '11knum15@gmail.com', 'oseubackoffice.com', '123456789', 'PT50009870834234534534567', '0', '4', '1234', '<p><strong>What are Terms and Conditions</strong></p><p>Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app.</p><p>Itâ€™s up to you to set the rules and guidelines that the user must agree to. You can think of your Terms and Conditions agreement as the legal agreement where you maintain your rights to exclude users from your app in the event that they abuse your app, and where you maintain your legal rights against potential app abusers, and so on.</p><p><strong>Terms and Conditions are also known as Terms of Service or Terms of Use.</strong></p><p>This type of legal agreement can be used for both your website and your mobile app. Itâ€™s not required (itâ€™s not recommended actually) to have separate Terms and Conditions agreements: one for your website and one for your mobile app.</p>', 'rgba(186,198,201,0.85)', 'contas@oseubackoffice.com', 'checked', 'checked', 'checked', '4.2', 'publicidade', '79200,18000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `descricao` varchar(3500) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `data_ins` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `duracao` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo_priodade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `link`, `descricao`, `referencia`, `data_ins`, `cliente_id`, `estado`, `duracao`, `user_id`, `tipo_priodade`) VALUES
(3, 'aa', 'aaa', '59d6663c/36', 1494374400, 36, '', 0, 24, ''),
(4, 'link1', 'aaa', '59ff19d8/37', 1494460800, 37, 'Pendente', 0, 24, ''),
(5, 'lol', 'ff', '59ff19d8/37', 1494460800, 37, 'Pendente', 0, 24, ''),
(6, 'Link2', 'aaaa', '59ff964c/37', 1494460800, 37, 'Pendente', 0, 24, ''),
(33, 'pre pagamento', 'sara - Existir uma forma de informar o sistema que o serviÃ§o jÃ¡ estÃ¡ pago de forma mais autonoma do que nas obs\n pedro - \n sara - \n sara - \n sara - sara - Existir uma forma de informar o sistema que o serviÃ§o jÃ¡ estÃ¡ pago de forma mais autonoma do que nas obs\n pedro - \n sara - \n sara - // enviado 5/7/17\n\n', '594705f0/88', 1497830400, 88, 'Concluido', 116000, 40, 'Alta'),
(38, 'web site', 'sara - orÃ§amento de web site tipo que tem agora para incorporar com a loja transfergest\n', '595acc70/78', 1499126400, 78, 'Pendente', 40000, 40, 'Baixa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `privilegios`
--

CREATE TABLE `privilegios` (
  `id` int(2) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `agenda_pri` varchar(10) NOT NULL DEFAULT 'false',
  `suporte_pri` varchar(10) NOT NULL DEFAULT 'false',
  `clientes_pri` varchar(10) NOT NULL DEFAULT 'false',
  `relatorios_pri` varchar(10) NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `privilegios`
--

INSERT INTO `privilegios` (`id`, `tipo`, `agenda_pri`, `suporte_pri`, `clientes_pri`, `relatorios_pri`) VALUES
(1, 'SuperUser', 'checked', 'checked', 'checked', 'checked'),
(2, 'Administrator', 'checked', 'checked', 'checked', 'checked'),
(3, 'GestorPlus', 'false', 'checked', 'checked', 'false'),
(4, 'Gestor', 'false', 'false', 'checked', 'false');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sugestao`
--

CREATE TABLE `sugestao` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `descricao` varchar(3500) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `data_ins` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `duracao` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo_priodade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sugestao`
--

INSERT INTO `sugestao` (`id`, `link`, `descricao`, `referencia`, `data_ins`, `cliente_id`, `estado`, `duracao`, `user_id`, `tipo_priodade`) VALUES
(40, 'Criar serviÃ§o com retorno num sÃ³ ficheiro', 'Foi lhe explicado que era incomsebivel pois criando um sÃ³ serviÃ§o incluindo o retorno deixaria de existir em sistema o serviÃ§io de retorno o que implicaria  pedro - \n pedro - \n pedro - \n pedro - \n pedro - \n pedro - \n pedro - \n', '59261070/86', 1495670400, 86, 'Pendente', 31000, 48, 'MÃ©dia'),
(50, 'Operadores', 'Operadores terem possibilidade de PELO MENOS poderem dizer que tipo de serviÃ§o Ã©. Cliente fala tambÃ©m no campo para introduzir o tiket pedro - \n pedro - \n', '592f4af0/80', 1496275200, 80, 'Pendente', 8000, 48, ''),
(52, 'app motorista', 'sugere que quando mostra o nome do cliente pudesse fazer zoom visto que hÃ¡ alguns nomes pequenos que podiam ficar maiores ( visto que quase todos usam telemovel', '59309c70/40', 1496361600, 40, 'Pendente', 0, 40, ''),
(53, 'Login online e offline', 'Cliente sugere um login por estados, para nÃ£o estar sempre a fazer login. ( Estar on-line ou offline) Admin - \naaaa\n Admin - Cliente sugere um login por estados, para nÃ£o estar sempre a fazer login. ( Estar on-line ou offline) \n Admin - \n Admin - \n Admin - \n Admin - \n', '593490f0/86', 1496620800, 86, 'Pendente', 5000, 24, ''),
(55, 'app motoristas', 'sara - Dar um sinal 30min antes do serviÃ§o acontecer para altertar o motoristas\n Admin - \n pedro - \n pedro - \n pedro - \n', '593490f0/86', 1496620800, 86, 'Pendente', 21000, 48, 'MÃ©dia'),
(56, 'gestÃ£o consulta', 'sara - GestÃ£o consulta gravar cabeÃ§alhos consoante as necessidades de pesquisa, sempre que faz nova pesquisa tem que reformular novamente o cabeÃ§alho\n pedro - \n', '593490f0/86', 1496620800, 86, 'Pendente', 5000, 48, 'MÃ©dia'),
(58, 'tabela ', 'sara - filtrar rotas nas tabelas, na altura em que foram criadas as tabelas dava para pesquisar por rotas? (diz a cliente) e agora nÃ£o\n pedro - \n pedro - \n', '593dcb70/56', 1497225600, 56, 'Pendente', 1181000, 48, 'MÃ©dia'),
(62, 'app motoristas', 'sara - motiristas terem a listagem dos operadores disponivel para visualizaÃ§Ã£o\n', '59558670/82', 1498780800, 82, 'Pendente', 1057000, 40, 'MÃ©dia'),
(63, 'criaÃ§Ã£o serviÃ§o / retorno / tipo de serviÃ§o', 'sara - cliente querer que o campo na criaÃ§Ã£o de serviÃ§os de retorno de \"tipo de serviÃ§o\" seja inteligente,\n', '59597af0/56', 1499040000, 56, 'Pendente', 100000, 40, 'Baixa'),
(64, 'app motorista', 'sara - aumentar nome do motorista / aparecer o nome todo / ser editavel\n', '595d6f70/65', 1499299200, 65, 'Pendente', 996000, 40, 'MÃ©dia'),
(65, 'tabelas de staff', 'sara - Ser possivel imprimir, e ter uma barra de pesquisa para filtras, basicamente como a gestÃ£o consulta\n', '596406f0/88', 1499731200, 88, 'Pendente', 307000, 40, 'MÃ©dia'),
(66, 'novo transfer', 'sara - no tipo serviÃ§o ficar automaticamente o unico que estÃ¡ e ficar aotomaticamente\n Admin - \n', '59655870/82', 1499817600, 82, 'Pendente', 241000, 24, 'Baixa'),
(67, 'novo transfer/campo operador', 'sara - na categoria colocar automaticamente a Ãºnica a que estÃ¡\n', '59655870/82', 1499817600, 82, 'Pendente', 278000, 40, 'Baixa'),
(68, 'criar transfer / locais', 'sara - Os locais ferquentes estar sempre sim\n', '59655870/82', 1499817600, 82, 'Pendente', 302000, 40, 'Baixa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
--

CREATE TABLE `suporte` (
  `id` int(11) NOT NULL,
  `data_hora_suporte` int(15) NOT NULL,
  `assistencia_nome` varchar(3500) NOT NULL,
  `assistencia_obs` varchar(3500) NOT NULL,
  `nome_operador` varchar(255) NOT NULL,
  `duracao` int(15) NOT NULL,
  `solucao_problema` varchar(10) NOT NULL,
  `proxima_data` int(15) NOT NULL,
  `nome_pessoa` varchar(255) NOT NULL,
  `telefone` int(15) NOT NULL,
  `obs_suporte` varchar(3500) NOT NULL,
  `id_cliente_assistencia` int(11) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `estado` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `suporte`
--

INSERT INTO `suporte` (`id`, `data_hora_suporte`, `assistencia_nome`, `assistencia_obs`, `nome_operador`, `duracao`, `solucao_problema`, `proxima_data`, `nome_pessoa`, `telefone`, `obs_suporte`, `id_cliente_assistencia`, `referencia`, `estado`, `user_id`) VALUES
(21, 1494547200, 'Criar Staff / Operadores como parecerias', 'Foi explicado ao cliente que pode criar como staff e atribuir-lhes acessos ou como operador onde ai teria que enviar os serviÃ§os por email. Falou-se ainda na utilizaÃ§Ã£o da \"app\" do operadores mas nÃ£o se aplicÃ¡vel.', 'sara', 84000, 'Sim', 0, '', 0, '', 85, '5a268a40/85', 'Pendente', 24),
(22, 1494547200, 'app nova apita sempre', 'NÃ£o surgiu mais nenhuma situaÃ§Ã£o dada como resolvidada - 30.06.2017', 'sara', 1849000, 'Sim', 1494547200, 'patrica', 964610917, '', 69, '5a268ab8/69', 'Resolvido', 40),
(23, 1494547200, 'ValidaÃ§Ã£o de despesas', 'Quer que a validaÃ§Ã£o das despesas sejas feita na folha de cobranÃ§a', 'sara', 1304000, 'NÃ£o', 1494806400, 'Fernando', 289033158, 'CobranÃ§as como antigamente', 82, '5a26b0b0/82', 'Pendente', 24),
(24, 1494547200, 'ComissÃµes de staff da Patricia e do Pedro cruz aparecem incorrectas em alguns dos serviÃ§os', 'ServiÃ§os da Patricia (que recebe 0%) aparece em alguns serviÃ§os (sem padrÃ£o) recebe 100% do valor cobrado. NÃ£o usa a escala para atribuir serviÃ§os portanto quando os cria imediatamente os atribui ao motorista final\nO outro motorista, Ã¡s vezes recebe', 'sara', 301000, 'NÃ£o', 1494547200, 'patricia', 964610917, 'resolvido com atualizacao do sistema', 69, '5a26bec0/69', 'Resolvido', 40),
(26, 1494547200, 'cobrar ao motorista como fazer / Valores noturnos', 'Foi explicado que podia ainda assim passar o valor do operador para o motoristas, mas preferem esperar pela atualizaÃ§Ã£o, nÃ£o tem valores noturnos porque a versÃ£o Ã© anterior.', 'sara', 383000, 'NÃ£o', 1494892800, 'vera', 289823100, 'PRECISA de atualizar sistema, para ter valores noturnos e puder escolher quem recebe o valor do serviÃ§o. NiF', 60, '5a26d414/60', 'Pendente', 24),
(28, 1494892800, 'CobranÃ§as como antigamente / Constante refresh para atualizaÃ§Ã£o de dados incoveniente / fazer login sucessivos', 'cobranÃ§as como antigamente.\nqueixa-se que qd faz a refesh volta ao painel de control e nÃ£o quer.', 'sara', 548000, 'NÃ£o', 1494979200, 'fernando', 918328535, 'quer as cobranÃ§as como antigamente\nnÃ£o quer sempre que atualiza a info  que volte par ao paniel de control e depois tenha que inserir tudo de novo ou obrigado a fazer log in.\nPede que alguÃ©m va la falar com ele pessoalmente.', 82, 'NaN/82', 'Pendente', 40),
(29, 1494892800, 'Criou dois serviÃ§os de retorno', 'AssitstÃªncia criada novamente por erro na anterior\nCriou um serviÃ§o com retorno e o sistema criou dois com retorno, foi lhe pedido para apagar o retorno errado para nÃ£o gerar confusÃ£o o que nÃ£o foi possÃ­vel. o sistema nÃ£o perguntou se queriamos aap', 'sara', 171000, 'NÃ£o', 1494979200, 'sao', 289823100, 'AssitstÃªncia criada novamente por erro na anterior\nCriou um serviÃ§o com retorno e o sistema criou dois com retorno, foi lhe pedido para apagar o retorno errado para nÃ£o gerar confusÃ£o o que nÃ£o foi possÃ­vel. o sistema nÃ£o perguntou se queriamos aap', 60, 'NaN/60', 'Pendente', 40),
(64, 1495065600, 'introduzir observoÃ§Ãµes', 'Cliente queria saber se podia introduzir ou como introduzir alguma info que ficasse no voucher para o cliente visualizar.\nFoi lhe explicado que pode usar o campo das observaÃ§Ãµes e que o cliente vai recepcionar essa info no voucher', 'sara', 146000, 'Sim', 0, '', 0, '', 87, '591cd5f0/87', 'Pendente', 40),
(65, 1495238400, 'Mudar preÃ§o das tabelas', 'Mudar o preÃ§o das tabelas, (versÃ£o bastante antiga) \nCliente queixou-se de que o sistema era para ter sido atualizado, e isso foi lhe dito a semana passada e atÃ© agora ninguÃ©m lhe disse nada\nCliente queixou-se que tinham de ter entrar em contacto com ', 'sara', 776000, 'Sim', 1495238400, '', 0, '', 39, '591e2770/39', 'Resolvido', 40),
(66, 1495152000, 'cria serviÃ§o mas o valor que vai buscar a tabela e o pvp e nao o po', 'fiz teste criei serviÃ§o e vai buscar o valor do pvp e nao do po, os valores da tabela estÃ£o inseridos correctamente e ainda assim ele nao vai buscar o valor correcto.\nCliente diz que inserido os dados todos Ã¡s vezes nÃ£o aparece o valor na cobranÃ§a em', 'sara', 737000, 'NÃ£o', 1495152000, 'patricia', 910000000, 'enviar email a dar feedback', 69, '591e2770/69', 'Resolvido', 48),
(67, 1495152000, 'comissÃµes de staff nÃ£o estÃ£o a aparecer quando operador em comissÃ£o', 'Todos os serviÃ§os que o operador com comissÃ£o nao calcula o valor a receber do staff. ', 'sara', 1016000, 'NÃ£o', 1495152000, 'vera', 289823100, 'dar feedback ao cliente o quanto antes.\nComissÃµes do staff nÃ£o estÃ£o a aparecer quando operador tem comissÃ£o', 60, '591e2770/60', 'Concluido', 24),
(68, 1495411200, 'o staff novo criado nÃ£o estava a aperecer depois ', 'O staff novo criado nÃ£o estava a aparecer', 'sara', 206000, 'NÃ£o', 1495411200, 'fernando', 211155488, 'Cliente queixa-se que ninguem entrou em contacto com ele para lhe dar o feeback de quando iria ser feita a atualizaÃ§Ã£o do sistema, Pede que entrem em contacto com ele para falar sobre essa situaÃ§Ã£o e do orÃ§amento da \"pilha\" que ainda nÃ£o lhe foi enc', 82, '59221bf0/82', 'Resolvido', 40),
(69, 1495497600, 'ServiÃ§os com retorno Ã¡s vezes nÃ£o aparece o valor em baixo, nÃ£o tem um padrÃ£o Ã© simplesmente Ã¡s vezes. Nova categoria Interzone no fecho dos serviÃ§os com a mesma nÃ£o estÃ¡ a fazer as contas', '', 'sara', 66000, 'NÃ£o', 1495584000, 'vera Gualter', 0, 'ServiÃ§os com retorno Ã¡s vezes nÃ£o aparece o valor em baixo, nÃ£o tem um padrÃ£o Ã© simplesmente Ã¡s vezes. Nova categoria Interzone no fecho dos serviÃ§os com a mesma nÃ£o estÃ¡ a fazer as contas', 60, '59236d70/60', 'Pendente', 40),
(70, 1495670400, 'validaÃ§Ã£o de desepsas e comissÃµes de operador', 'Sr. Fernando continua confuso com a nova forma de fazer as cobranÃ§as e as comissÃµes dos operadores e staff\nFoi lhe explicado o que fazer novamente. Sr Ferreira esteve dia 24.05.2017 a explicar a mesma coisa, e esta informaÃ§Ã£o jÃ¡ tinha sido explicada ', 'sara', 726000, 'Sim', 1495670400, '', 0, '', 82, '59261070/82', 'Resolvido', 40),
(71, 1495670400, 'Loja no site ainda nÃ£o foi incorporada / sistema de nagevaÃ§Ã£o nÃ£o estÃ¡ a trabalhar correctamente', 'Cliente diz que o sistema de navegaÃ§Ã£o nas app dos motoristas nÃ£o estÃ¡ a funcionar em condiÃ§Ãµes. Foi lhe questionado se tem instalada a nova app de motorista em todos os equipamentos ao qual a resposta foi sim. \nDiz que o operador nÃ£o consegue entr', 'sara', 484000, 'NÃ£o', 1495670400, 'nicolai', 0, 'Ligar ao cliente para vir ao escritÃ³rio esclarecer dÃºvidas com o sistema. \nSituaÃ§Ã£o dos retornos resolvida.\nSituaÃ§Ã£o da loja a ser analisada com urgÃªncia.\nSituaÃ§Ã£o da app da navegaÃ§Ã£o inserida como Bug para ser tratada\nSugestÃµes ouvidas mas es', 86, '59261070/86', 'Pendente', 40),
(72, 1495756800, 'motoristas estÃ£o a conseguir entrar sem colocar a matricula', 'Motoristas estÃ£o a conseguir entrar sem colocar a matricula das viaturas, NÃ£o Ã© obrigatÃ³rio. (apontamento)', 'sara', 157000, 'Sim', 1495756800, '', 0, '', 82, '592761f0/82', 'Resolvido', 40),
(73, 1495756800, 'ontem 26.05.2017 Cria um serviÃ§o na central com uma hora e guarda com   1 hora / Hoje inseriu serviÃ§o na central mas na app dÃ¡ com mais uma hora', 'Mesmo depois de alterar a hora do serviÃ§o na central ele nÃ£o comunicou com a app a alteraÃ§Ã£o da hora.\nRealizei testes no computador. Criei serviÃ§o para as 15.30 guardou a hora em correcta E enviou a hora correcta para o motorista criado \"teste\".\n// Cliente esteve fora do pais e o telemovel estava a dar a hora errada.', 'sara', 1275000, 'Sim', 1495756800, '', 0, '', 69, '592761f0/69', 'Resolvido', 40),
(74, 1496102400, 'nomes aparecem repetidos na escala / nomes modificados nao passam directamente para o anteriores serviÃ§os?', 'nomes aparecem na escala repetidamente, como solocionar esta questÃ£o?\natualizar sistema / florencia utiliza o relatorio geral porque o de consulta ainda nÃ£o faz ediÃ§Ãµes ou fecho de serviÃ§os queixa-se que tem que andar para tras e pra frente para faze', 'sara', 723000, 'Sim', 1496102400, 'florencia', 966059040, 'nomes aparecem na escala repetidamente, como solocionar esta questÃ£o?\natualizar sistema / florencia utiliza o relatorio geral porque o de consulta ainda nÃ£o faz ediÃ§Ãµes ou fecho de serviÃ§os queixa-se que tem que andar para tras e pra frente para faze', 66, '592ca7f0/66', 'Resolvido', 40),
(75, 1496188800, 'serviÃ§os pendentes do painel de controlo vindos do operador', 'Quando existem serviÃ§os pendentes de operador e se carrega na bola e ele vai directamente parar a esse serviÃ§os, se apagarmos o serviÃ§o ele vai buscar uma tabela de vÃ¡rios serviÃ§os que nada tem a ver com o anterior, para resolver a situaÃ§Ã£o tem que', 'sara', 181000, 'Sim', 1496188800, '', 0, '', 91, '592df970/91', 'Pendente', 24),
(76, 1496188800, 'cliente nÃ£o encontrava o botÃ£o para validar os serviÃ§os', 'Validei os serviÃ§os de um motorista, que o Sr Fernando dizia nÃ£o conseguir validar, o problema era que o sr- Fernando nÃ£o estava a fazer scrool com o rato para ir de encontro ao botÃ£o de validar.\nFoi lhe explicado que tinha que fazer scrool, para enco', 'sara', 334000, 'Sim', 1496188800, '', 0, '', 82, '592df970/82', 'Resolvido', 40),
(77, 1496275200, 'Operadores nÃ£o tem campo para introduzir tipo de serviÃ§o ou tiket', 'Cliente diz que faz falta ter nos operadores campo para colocar o tipo de serviÃ§o e o tiket, caso contrÃ¡rio quando o recebe na central vai ter que confirmar o serviÃ§o e alterar estes campos. O que devia ser para facilitar acabar por lhe dar mais trabal', 'sara', 1073000, 'Sim', 1496275200, 'lina', 925122940, 'A migraÃ§Ã£o estÃ¡ com algum problema nÃ£o passou os valores das tabelas dos operadores. Cliente diz ter somente introduzido serviÃ§os e nÃ£o fez alteraÃ§Ãµes Ã s rotas ou tabelas dos operadores', 80, '592f4af0/80', 'Resolvido', 40),
(88, 1496275200, 'fazem a gestÃ£o apartir de tablets e quando fazem a pesquisa pela gestÃ£o aparece uma lista de serviÃ§os errada desde datas, horas etc', 'fazem a gestÃ£o apartir de tablets e quando fazem a pesquisa pela gestÃ£o aparece uma lista de serviÃ§os errada desde datas, horas etc\nFiz o teste no meu e nÃ£o deu problema. Diz que os tablets sÃ£o todos novos e nunca tinha acontecido.', 'sara', 369000, 'NÃ£o', 1496361600, 'MELANIE', 964276909, 'fazem a gestÃ£o apartir de tablets e quando fazem a pesquisa pela gestÃ£o aparece uma lista de serviÃ§os errada desde datas, horas etc\nFiz o teste no meu e nÃ£o deu problema. Diz que os tablets sÃ£o todos novos e nunca tinha acontecido.', 74, '592f4af0/74', 'Pendente', 40),
(89, 1496361600, 'NÃ£o conseguia encerrar serviÃ§os', 'Foi lhe explicado que nÃ£o tinha introduzido o tipo quando inseriu o operador. Foi resolvido e o cliente percebeu o que fazer.\nFoi lhe explicado tambÃ©m que para colocar o web site nÃ£o pode colocar o http//... ', 'sara', 65000, 'Sim', 1496361600, '', 0, '', 86, '59309c70/86', 'Resolvido', 40),
(90, 1496361600, 'sugestÃ£o', '', 'sara', 216000, 'Sim', 1496361600, '', 0, '', 40, '59309c70/40', 'Resolvido', 40),
(91, 1496620800, 'Cliente nÃ£o conseguia inserir serviÃ§o um em especifico', 'NÃ£o conseguia inserir serviÃ§o para hoje dia 5.06.2017, para as 11h. Chegou-se Ã¡ conclusÃ£o que era porcausa do nome da morada de recolha que tinha aspa e o sistema nÃ£o deixava guardar. O serviÃ§o foi inserido e o cliente foi informado para no futuro r', 'sara', 132000, 'Sim', 0, '', 0, '', 86, '593490f0/86', 'Pendente', 40),
(92, 1496620800, 'Cliente nÃ£o visualizava comissÃµes de operador / nÃ£o encontrava operadores na tabela', 'Foi explicado ao cliente que os serviÃ§os tem que encerrar os serviÃ§os para que o sistema faÃ§a as contas.\nFoi explicado ao cliente que o Ãºnico operador com tabela criado Ã© o directo restantes estÃ£o somente associados a uma percentagem por serviÃ§o e ', 'sara', 158000, 'Sim', 1496620800, '', 0, '', 39, '593490f0/39', 'Resolvido', 24),
(93, 1496707200, 'sr fernando nÃ£o conseguia criar um acesso de gestor na transgergest', 'Estava a a criar no lugar do staff... e por isso Ã© que nÃ£o dava. Assunto resolvido', 'sara', 0, 'Sim', 1496707200, '', 0, '', 82, '5935e270/82', 'Resolvido', 40),
(94, 1496707200, 'erro na criaÃ§Ã£o de serviÃ§o', 'Estava a colocar apostrfes foi explicado ao cliente que nesta versÃ£o nÃ£o pode colocar apostrefes.', 'sara', 0, 'Sim', 1496707200, '', 0, '', 77, '5935e270/77', 'Resolvido', 48),
(95, 1496793600, 'reservas do site / quando cai no email nÃ£o deixa abrir os anexo a nÃ£o ser os termos e condiÃ§Ãµes / alguns serviÃ§os nÃ£o estÃ£o a cair na loja', 'quando cai uma reserva atraves da loja, o cliente recebe um email mas nÃ£o consegue ver os detalhes dos anexos, sÃ³ os termos e condiÃ§Ãµes. Usam o outlook. \nNem todas reservas estÃ£o a cair na transfergest.', 'sara', 0, 'NÃ£o', 1496880000, 'gabriela', 968243692, 'quando cai uma reserva atraves da loja, o cliente recebe um email mas nÃ£o consegue ver os detalhes dos anexos, sÃ³ os termos e condiÃ§Ãµes. Usam o outlook. \nNem todas reservas estÃ£o a cair na transfergest.', 84, '593733f0/84', 'Pendente', 40),
(96, 1496793600, 'Cliente nÃ£o conseguia inserir serviÃ§o um em especifico', 'dava erro na criaÃ§Ã£o de serviÃ§o, foi explicado a cliente que nÃ£o pode colocar aspas nos serviÃ§os caso contrÃ¡rio o programas nÃ£o guarda.', 'sara', 14000, 'Sim', 1496793600, '', 0, '', 39, '593733f0/39', 'Resolvido', 40),
(97, 1496880000, 'Natalie pede que se verifique a situaÃ§Ã£o da extra net que estÃ¡ pendente desde MarÃ§o de 2017', '', 'sara', 13000, 'Sim', 1496880000, '', 0, '', 39, '59388570/39', 'Resolvido', 24),
(98, 1496880000, 'Cliente criou novo staff e serviÃ§o e nÃ£o aparece na escala', 'Cliente criou novo staff e serviÃ§o e nÃ£o aparece na escala. Foi verificado e efectivamente nÃ£o estÃ¡ a aparecer na escala. JÃ¡ nÃ£o Ã© a primeira vez que acontece.// Segundo programaÃ§Ã£o ficarÃ¡ resolvido com atualizaÃ§Ã£o', 'sara', 0, 'Sim', 1496880000, '', 0, 'atualizar dia  10 de julho', 55, '59388570/55', 'Resolvido', 40),
(99, 1496966400, 'NÃ£o conseguia entrar no sistema ( susana)', 'Foi informado que o novo link Ã© transfergest.com/contribuinte, consegui entrar.', 'sara', 0, 'Sim', 1496966400, '', 0, '', 82, '5939d6f0/82', 'Resolvido', 40),
(100, 1496966400, 'NÃ£o consegui aceder ao relatorio de bugs  e portanto nÃ£o posso dar como terminadas situaÃ§Ãµes resolvidas.', 'situaÃ§Ã£o resolvida //', 'sara', 0, 'Sim', 1496966400, '', 0, '', 91, '5939d6f0/91', 'Resolvido', 40),
(101, 1496966400, 'os privilegios nao funciona ', 'os privilegios nÃ£o estÃ£o a funcionar dÃ¡ erro.', 'sara', 1159000, 'NÃ£o', 1497225600, 'fernando', 210000000, 'os privilegios nÃ£o estÃ£o a funcionar dÃ¡ erro. // pedro resolveu o problema ', 82, '5939d6f0/82', 'Resolvido', 40),
(116, 1497225600, 'nao conseguia fechar serviÃ§o', 'NÃ£o encerrava porque denominou o direto para directo e por isso nao fechava', 'sara', 195000, 'Sim', 1497225600, '', 0, '', 69, '593dcb70/69', 'Resolvido', 40),
(117, 1497225600, 'formaÃ§Ã£o novo sistema // nÃ£o quiserem entrar em muitos detalhes.', 'Foi feita e explicada as novas funcionalidades do sistema, clientes frizaram jÃ¡ conhecer e nÃ£o quiserem entrar muito em detalhes. // ligaram 7 vezes nesse dia', 'sara', 419000, 'Sim', 1497225600, '', 0, '', 56, '593dcb70/56', 'Resolvido', 40),
(118, 1497225600, 'Duvida na criaÃ§Ã£o de serviÃ§o botÃ£o motorista/operador', 'Cliente mal educado, intransigente, ligou mais de 7 vezes para o escritÃ³rio onde estive sempre disponÃ­vel e bem educada para responder e ajudar no que foi preciso e de todas as vezes foram sempre arrogantes, e da Ãºltima vez estava com uma questÃ£o em r', 'sara', 733000, 'NÃ£o', 1497225600, 'fernando grave', 925877799, 'Cliente mal educado, intransigente, ligou mais de 7 vezes para o escritÃ³rio onde estive sempre disponÃ­vel e bem educada para responder e ajudar no que foi preciso e de todas as vezes foram sempre arrogantes, e da Ãºltima vez estava com uma questÃ£o em r', 56, '593dcb70/56', 'Resolvido', 40),
(119, 1497225600, '8 assistÃªncias durante o dia todo', 'Escala continua a nÃ£o ser como eles querem,\nTabelas nÃ£o premitem fazer pesquisa por rota\nIntroduÃ§Ã£o de serviÃ§o nÃ£o permite colocar valor em motorista e em operador ( se for na gestÃ£o consulta sim)\n\nTudo coisas que se queixaram.', 'sara', 604000, 'Sim', 1497225600, '', 0, '', 56, '593dcb70/56', 'Pendente', 40),
(120, 1497312000, 'na criaÃ§Ã£o da replica de um serviÃ§o jÃ¡ criado se o motorista e viatura estiverem atribuidos na mudanÃ§a dos campos nÃ£o premite deixar em aberto contudo se esse serviÃ§o criado for criado com estes campos em aberto deixa essa possibilidade', 'Cliente pregunta se Ã© possivel que essa situaÃ§Ã£o seja resolvida.', 'sara', 174000, 'NÃ£o', 1497398400, 'fernando grave', 925877799, 'Na criaÃ§Ã£o da replica do serviÃ§o se tiver atribuido algum staff ou viatura nÃ£o permite deixar em branco', 56, '593f1cf0/56', 'Pendente', 40),
(121, 1497398400, 'Duvidas inicias / criaÃ§Ã£o tabela', 'No browser safari nÃ£o lhe estava a aparecer os valores do po e pn como devia ser', 'sara', 47000, 'Sim', 1497398400, '', 0, '', 92, '59406e70/92', 'Resolvido', 40),
(122, 1497398400, 'cliente cria tabelas e as vezes nÃ£o copia os valores do po e pn', 'cliente cria tabelas e as vezes nÃ£o copia os valores do po e pn, tem que deletar a tabela e a voltar a criar, mas tem receio de quando criar os valores pn de isto acontecer e ter que rescrever tudo novamente, ja esta a trabalhar com chorme', 'sara', 385000, 'Sim', 1497398400, '', 0, '', 92, '59406e70/92', 'Resolvido', 40),
(123, 1497398400, 'motoristas nÃ£o conseguem entrar na app', 'cliente diz que trÃªs motoristas nÃ£o conseguem entrar na app, que alterou passwords, reinstalaram a app e que mesmo assim nÃ£o dava.\nFizemos testes, e conseguimos entrar na app dos tres motoristas, alteramos as passwords, e fizemos o teste que Ã© possive', 'sara', 181000, 'Sim', 1497398400, '', 0, '', 44, '59406e70/44', 'Pendente', 40),
(124, 1497571200, 'Clica no gestÃ£o consulta e dÃ¡ resultado 0', 'Cliente diz fazer pesquisa dos serviÃ§os para o dia e por vezes dÃ¡-lhe resultado 0. Diz que sÃ³ aparece resultado se fizer log out.\nFoi aconselhado a fazer resfresh antes de sair para ver se resulta. // RESOLVIDO situaÃ§Ã£o isolada', 'sara', 181000, 'NÃ£o', 1497571200, '', 0, 'Cliente diz fazer pesquisa dos serviÃ§os para o dia e por vezes dÃ¡-lhe resultado 0. Diz que sÃ³ aparece resultado se fizer log out.\nFoi aconselhado a fazer resfresh antes de sair para ver se resulta, foi informado qe como Ã© inserido muita informaÃ§Ã£o n', 56, '59431170/56', 'Resolvido', 40),
(125, 1497571200, 'motorista nÃ£o consegue aceder inserir serviÃ§os atraves do tablet', 'Cliente diz que motorista nÃ£o consegue inserir serviÃ§os atraves da app, sendo esta a primeira vez que acontece. Foi solicitado o tipo de equipamento que o motorista estÃ¡ a utilizar para poder ajudar a perceber o que se passa ao qual a cliente nÃ£o cons  // situaÃ§Ã£o dada como resolvida por ter sido uma situaÃ§Ã£o isolada', 'sara', 543000, 'NÃ£o', 1497571200, '', 0, 'Motorista nÃ£o consegue inserir serviÃ§os, o campo aparece a cinzento sem possibilidade de entrar info', 69, '59431170/69', 'Resolvido', 40),
(126, 1497830400, 'tabelas continuam a aparecer sem os valores do po e do pn em algumas das rotas', 'Tabelas criadas nao aparecem os valores do po e pn em algumas das rotas, perguntei se tinham criado as rotas depois da tabela estar criada e disseram que nÃ£o. ', 'sara', 441000, 'Sim', 1497830400, 'luciana', 0, 'valores de po e pn nas tabelas continuam sem aparecer. perguntei se tinham inserido as rotas depois de ja criada a tabela e disseram que nÃ£o esta situaÃ§Ã£o vem da semana que vem, cliente ficou de ligar para ver se acontece de novo', 92, '594705f0/92', 'Resolvido', 40),
(127, 1497830400, 'cliente pergunta se existe forma de indicar ao sistema que o serviÃ§o foi pago antes de ter sido realizado', 'A maior parte dos serviÃ§os sÃ£o pre pagos, pede uma forma mais autonoma do que colocar essa info nas obs', 'sara', 112000, 'Sim', 1497830400, '', 0, '', 88, '594705f0/88', 'Resolvido', 48),
(128, 1497830400, 'cliente nÃ£o consegue instalar a app para motoristas.', 'Cliente diz nÃ£o conseguir instalar a app para motoristas, diz que dÃ¡ erro foi aconselhada a instalar a versÃ£o v2.', 'sara', 144000, 'Sim', 0, '', 0, '', 84, '594705f0/84', 'Pendente', 40),
(129, 1497830400, 'cliente pergunta diz ficar confuso com os servicos encerrados continuarem a aparecer nos serviÃ§os por artibuir', 'Foi explicado ao cliente que jÃ¡ pode apagar os serviÃ§os. e foi alertado para os serviÃ§os encerrados sem staff vÃ£o continuarem a aparecer no painel de control como serviÃ§os por atribuir porque nÃ£o tem staff', 'sara', 135000, 'Sim', 1497830400, '', 0, '', 82, '594705f0/82', 'Resolvido', 40),
(130, 1497830400, 'Sr. Fernando Diz que o sistema estÃ¡ sempre a fazer log out, nÃ£o trabalha com operadores e portanto nÃ£o entra no mesmo browser ao mesmo tempo', 'email, enosat, google, uma pesquisa de google. // eu nÃ£o escrevi isto (sara) -', 'sara', 187000, 'NÃ£o', 1497830400, 'sr fernando', 0, '', 82, '594705f0/82', 'Resolvido', 40),
(131, 1497830400, 'privilegios', 'Sr. Fernando diz que nao quer que os seus empregados vejam os valores e possam editar os valores dos serviÃ§os e Ã© o que estÃ¡ a acontecer', 'sara', 95000, 'NÃ£o', 1498003200, 'sr fernando', 0, 'Sr. Fernando diz que nao quer que os seus empregados vejam os valores e possam editar os valores dos serviÃ§os e Ã© o que estÃ¡ a acontecer', 82, '594705f0/82', 'Pendente', 40),
(132, 1497916800, 'retorno deixar campos em aberto', 'NÃ£o percebi se tinha a ver com a criaÃ§Ã£o de retorno ou na gestÃ£o consulta na ediÃ§Ã£o para guardar retorno. Pelo que percebi tentei ajudar e mais uma vez foi arrogante e disse que eu nunca tenho soluÃ§Ãµes para ele e que sempre que falava com o pedro ', 'sara', 358000, 'NÃ£o', 1497916800, 'fernando grave', 0, 'NÃ£o percebi se tinha a ver com a criaÃ§Ã£o de retorno ou na gestÃ£o consulta na ediÃ§Ã£o para guardar retorno. Pelo que percebi tentei ajudar e mais uma vez foi arrogante e disse que eu nunca tenho soluÃ§Ãµes para ele e que sempre que falava com o pedro ', 56, '59485770/56', 'Resolvido', 40),
(133, 1497916800, 'Mudar tipo de pagamento de staff', 'Cliente queria dar 10% de todos os serviÃ§os aos motoristas, foi aconselhada a alterar para percentagem bruta, pois darÃ¡ o efeito que ela pretende', 'sara', 61000, 'Sim', 1497916800, '', 0, '', 92, '59485770/92', 'Resolvido', 40),
(134, 1498003200, 'pdf do gestao consulta em A2 horizontal nao mete ao tamanho da folha', 'pdf do gestao consulta em A2 horizontal nao mete ao tamanho da folha', 'sara', 110000, 'NÃ£o', 1498089600, 'valter', 0, 'pdf do gestao consulta em A2 horizontal nao mete ao tamanho da folha', 88, '5949a8f0/88', 'Resolvido', 40),
(135, 1498089600, 'NÃ£o sabia como enviar escala para fornecedores / queixa-se de novo do log in estar sempre a sair / soluÃ§Ã£o existente para ios pouco funcional', 'NÃ£o sabia como enviar escala para fornecedores / queixa-se de novo do log in estar sempre a sair / soluÃ§Ã£o existente para ios pouco funcional.\nFoi explicado ao cliente que para enviar os serviÃ§os para os fornecedores se estes nao tem acesso a app, bas', 'sara', 344000, 'Sim', 1498089600, '', 0, '', 66, '594afa70/66', 'Resolvido', 40),
(138, 1498176000, 'Duvidas da transfergest', 'Foram eclarecidas duvidas em relaÃ§Ã£o a apgar categrias, em que nao vai afectar o producto criado, foi explicado que a nivel das comissoes e cobrancas poderam visualizar as cobradas e as nÃ£o cobradas escrevendo sim ou nao no filtro.\n', 'sara', 102000, 'Sim', 1498176000, '', 0, '', 70, '594c4bf0/70', 'Resolvido', 40),
(139, 1498435200, 'erro a por valores na tabela no PO', 'Aquele erro de inserir o preÃ§o continua a aparecerâ€¦ junto envio o print screen do erro que dÃ¡\nNa ultima rota a Natalie querer alterar os valores do PO e da esse erro na altura de gravar, na sexta tentei deu-me erro. E mais tarde tentei e deuâ€¦ voltei a meter tudo a zeros e hoje nÃ£o dÃ¡ novamente.\n', 'sara', 55000, 'Sim', 1498435200, 'natalie', 0, 'Aquele erro de inserir o preÃ§o continua a aparecerâ€¦ junto envio o print screen do erro que dÃ¡\nNa ultima rota a Natalie querer alterar os valores do PO e da esse erro na altura de gravar, na sexta tentei deu-me erro. E mais tarde tentei e deuâ€¦ voltei a meter tudo a zeros e hoje nÃ£o dÃ¡ novamente.', 39, '59504070/39', 'Resolvido', 24),
(140, 1498435200, 'sistema nÃ£o esta a guardar os nomes e infos como antigamente', 'SÃ£o ligou na sexta feira 23 de junho a pedir ajudar porque mudou de computador e estava a usar um broswer diferente do habitual em que nada do que lhe aparecia antigamente na transfergest estÃ¡ a aparecer, foi lhe explicado que essa ferramenta vem do uso do browser que comeÃ§a a gravar as palavras com o uso repetitivo das mesmas. a transfergest faz o mesmo aos nome e outros.~Ainda nÃ£o estÃ¡ a acontecer hoje Ã© segunda dia 26. Vamos aguardar para ver se se repete.', 'sara', 148000, 'Sim', 1498435200, 'sao', 0, 'SÃ£o ligou na sexta feira 23 de junho a pedir ajudar porque mudou de computador e estava a usar um broswer diferente do habitual em que nada do que lhe aparecia antigamente na transfergest estÃ¡ a aparecer, foi lhe explicado que essa ferramenta vem do uso do browser que comeÃ§a a gravar as palavras com o uso repetitivo das mesmas. a transfergest faz o mesmo aos nome e outros.~Ainda nÃ£o estÃ¡ a acontecer hoje Ã© segunda dia 26. Vamos aguardar para ver se se repete.', 60, '59504070/60', 'Resolvido', 40),
(141, 1498435200, 'Tabelas a imprimir estÃ£o a ser impressas muito pequenas nÃ£o tem leitura', 'Cliente queixa-se que nÃ£o consegue ver nada o que imprime seja em A3 ou A4 com 4 cabeÃ§alhos ou 5.', 'sara', 87000, 'Sim', 1498435200, 'valter ATS', 0, 'Cliente queixa-se que nÃ£o consegue ver nada o que imprime seja em A3 ou A4 com 4 cabeÃ§alhos ou 5.', 88, '59504070/88', 'Resolvido', 40),
(142, 1498521600, 'Gabriela nÃ£o conseguia que o novo admnistrador entrasse ao serviÃ§o dava erro na password', 'Foi explicado Ã¡ cliente que quando Ã© feita alguma alteraÃ§Ã£o no campos dos adminstradores a password tem que ser rescrita ou caso contrÃ¡rio nÃ£o vÃ£o conseguir entrar. Esta informaÃ§Ã£o foi referida na formaÃ§Ã£o.', 'sara', 448000, 'Sim', 0, '', 0, '', 84, '595191f0/84', 'Pendente', 40),
(144, 1498608000, 'cliente volta a queixar-se que o login estÃ¡ sempre a expirar / quer uma visÃ£o mais descrita da escala do dia /', 'Voltou a queixar-se do login que estÃ¡ sempre a espirar. / diz que painel de control Ã© inutil diz que o real time nÃ£o funciona, ainda diz que \" nÃ£o presta para nada\". disse ainda que as sugestÃµes que foram pedidas deviam ser desenvolvidas por que ele as pediu, foi lhe explicado que as sugestÃµes sÃ£o analisadas e consoante nÃºmero de pedidos Ã© que estas sÃ£o desenvolvidas nÃ£o invalidando que mais tardam nÃ£o sejam igualmente implantadas.\nPediu que o seu login entrasse e ficasse sempre ligado e eu expliquei-lhe mais uma vez que isso nÃ£o era possÃ­vel pois a transfergest nÃ£o estÃ¡ desenvolvida dessa forma e entÃ£o disse lhe que tinha duas opcÃ§Ãµes ou que deixasse sugestÃ£o ou pedisse orÃ§amento para esse extra ser implementado. Mais uma vez referiu que o programa so lhe complica a vida e que nÃ£o fazia sentido ter que pagar por um extra que inicialmente ja deveria existir, e comparou com outros programas e aplicaÃ§Ãµes. Expliquei-lhe novamente que tinha entÃ£o duas opÃ§Ãµes. sei', 'sara', 2937000, 'NÃ£o', 1499040000, 'nicolai', 0, 'Voltou a queixar-se do login que estÃ¡ sempre a espirar. / diz que painel de control Ã© inutil diz que o real time nÃ£o funciona, ainda diz que \" nÃ£o presta para nada\". disse ainda que as sugestÃµes que foram pedidas deviam ser desenvolvidas por que ele as pediu, foi lhe explicado que as sugestÃµes sÃ£o analisadas e consoante nÃºmero de pedidos Ã© que estas sÃ£o desenvolvidas nÃ£o invalidando que mais tardam nÃ£o sejam igualmente implantadas.\nPediu que o seu login entrasse e ficasse sempre ligado e eu expliquei-lhe mais uma vez que isso nÃ£o era possÃ­vel pois a transfergest nÃ£o estÃ¡ desenvolvida dessa forma e entÃ£o disse lhe que tinha duas opcÃ§Ãµes ou que deixasse sugestÃ£o ou pedisse orÃ§amento para esse extra ser implementado. Mais uma vez referiu que o programa so lhe complica a vida e que nÃ£o fazia sentido ter que pagar por um extra que inicialmente ja deveria existir, e comparou com outros programas e aplicaÃ§Ãµes. Expliquei-lhe novamente que tinha entÃ£o duas opÃ§Ãµes. sei', 86, '5952e370/86', 'Pendente', 40),
(145, 1498608000, 'cliente nÃ£o conseguia criar tabela para operador', 'Descobriu que a info simplesmente ainda nÃ£o tinha passado. foi informado de fazer refresh Ã¡ pÃ¡gina e se nÃ£o passar fazer log out e log in', 'sara', 120000, 'Sim', 1498608000, '', 0, '', 44, '5952e370/44', 'Resolvido', 40),
(150, 1498694400, 'Cliente queixa-se que ainda nÃ£o lhe deram nenhuma resposta referente ao problema das tabelas e do orÃ§amento solicitado.', 'Cliente queixa-se que ainda nÃ£o lhe deram nenhuma resposta referente ao problema das tabelas e do orÃ§amento solicitado.', 'sara', 621000, 'Sim', 1498694400, '', 0, 'Cliente queixa-se que ainda nÃ£o lhe deram nenhuma resposta referente ao problema das tabelas e do orÃ§amento solicitado.', 88, '595434f0/88', 'Resolvido', 40),
(153, 1498694400, 'cliente queixa-se de que a loja jÃ¡ devia estar pronta que lhe dÃ£o a mesma resposta sempre que pergunta.', 'Foi informado que a loja estÃ¡ a ser terminada e que logo que seja concluida serÃ¡ contactado para ser atualizado e ter a loja.\nContudo o site comecou a ser desenvolvido a pouco tempo e ficaram de ligar para cÃ¡ e ninguÃ©m ligou.\nCliente ficou de passar no escritÃ³rio esta tarde', 'sara', 339000, 'NÃ£o', 1498694400, 'luis fernandes', 0, 'Foi informado que a loja estÃ¡ a ser terminada e que logo que seja concluida serÃ¡ contactado para ser atualizado e ter a loja.\nContudo o site comecou a ser desenvolvido a pouco tempo e ficaram de ligar para cÃ¡ e ninguÃ©m ligou.\nCliente ficou de passar no escritÃ³rio esta tarde', 45, '595434f0/45', 'Resolvido', 40),
(155, 1498694400, 'cliente nÃ£o sabia com entrar na transfergest', 'Cliente estava noutro computador e nÃ£o conseguia entrar, foi explicado como o fazer transfergest.com/contribuinte e o cliente consegui entrar', 'sara', 73000, 'Sim', 0, '', 0, '', 70, '595434f0/70', 'Resolvido', 40),
(158, 1498780800, 'nÃ£o conseguia alterar serviÃ§o', 'Era uma aspa. descobriu sozinha ', 'sara', 106000, 'Sim', 0, '', 0, '', 60, '59558670/60', 'Resolvido', 40),
(159, 1498780800, 'nÃ£o conseguia alterar serviÃ§o', 'Era uma aspa. descobriu sozinha ', 'sara', 106000, 'Sim', 0, '', 0, '', 60, '59558670/60', 'Resolvido', 40),
(160, 1498780800, 'cliente liga e queixa-se que os motoristas tem liberdade total para escrever o nome do operador. e que devia ser bloqueado // pergunta se a pilha vai ficar conluida como lhe tinha sido dito hj', 'Foi lhe explicado que em acordo com todos os clientes esta forma de pesquisa foi a melhor soluÃ§Ã£o e que por enquanto serÃ¡ a que estiver disponÃ­vel. Foi incorrecto como sempre, incompreensÃ­vel como sempre. diz que nÃ£o ajudei nada, pois respondi que fiz o que podia. Fica em sugestÃ£o\nEm relaÃ§Ã£o a pilha estÃ¡ concluÃ­da hoje ao final do dia mas sÃ³ serÃ¡ instalada segunda feira ou terÃ§a-feira.', 'sara', 1057000, 'Sim', 0, '', 0, '', 82, '59558670/82', 'Resolvido', 40),
(161, 1498780800, 'ios link nao funciona como antigamente', 'cliente insatisfeita com o link do ios que ja nÃ£o funciona como antigamente. Refilou comigo.', 'sara', 4039000, 'NÃ£o', 0, '', 0, 'cliente insatisfeita com a app do ios que ja nao funciona como antigamente refilou comigo.\nO tempo nao estÃ¡ a contar bem. NÃƒO estive 1 hora ao telefone com a cliente... mas acaba por compensar um pouco o que tenho vindo a falar com ela e nao tem sido contabilizado', 39, '59558670/39', 'Pendente', 40),
(162, 1499040000, 'serviÃ§o de retorno guardado num serviÃ§o ja criado nÃ£o estÃ¡ a guardar o tipo de serviÃ§o', 'Fiz um teste e guardou o tipo de serviÃ§o. Aconselhei o cliente a se verificar essa situaÃ§Ã£o novamente para entrar em contacto para se ver em contracto qual o campo que estÃ¡ a causar essa situaÃ§Ã£o', 'sara', 265000, 'Sim', 0, '', 0, '', 56, '59597af0/56', 'Resolvido', 40),
(163, 1499040000, 'pedido de orÃ§amento de website', '', 'sara', 252000, 'Sim', 0, '', 0, '', 78, '59597af0/78', 'Resolvido', 40),
(164, 1499040000, 'tabela gesta consulta nÃ£o estÃ¡ a imprimir a3 baixo', 'tabela gesta consulta nÃ£o estÃ¡ a imprimir a3 baixo', 'sara', 44000, 'NÃ£o', 1499040000, 'lina', 0, '', 80, '59597af0/80', 'Resolvido', 40),
(165, 1499040000, 'cliente informada do servidor em baixa, // nÃ£o conseguia entrar na central // nao conseguia entrar na app', 'Foi alterada a password do gestor, ja conseguiu entrar, tinha os privilegios mal colocados, foi alterado tambÃ©m.\nEm relaÃ§Ã£o ha app, marisa nao conseguia entrar quando antes ja tinha entrado, a app devia estar em execuÃ§Ã£o e por isso nÃ£o conseguia entrar foi informada para carregar no botÃ£o novo verde para a central fazer aotomaticante o logout jÃ¡ consegui entrar. ', 'sara', 476000, 'Sim', 0, '', 0, '', 94, '59597af0/94', 'Resolvido', 40),
(166, 1499040000, 'cliente cria colocar serviÃ§o sem valores a aparecer nas tabelas de operador pois era \"Oferta\"', 'Foi indicado a cliente para atribuir o serviÃ§o um valor \"estranho\" que lhe fizesse automaticamente entender que era serviÃ§o oferta assim como colocar nas observaÃ§Ãµes', 'sara', 383000, 'Sim', 0, '', 0, '', 39, '59597af0/39', 'Resolvido', 40),
(167, 1499040000, 'gestao consulta nÃ£o funciona', '', 'sara', 203000, 'Sim', 0, '', 0, '', 94, '59597af0/94', 'Resolvido', 40),
(168, 1499040000, 'cliente quere que o campo na criaÃ§Ã£o de serviÃ§os de retorno de \"tipo de serviÃ§o\" seja inteligente,', 'Isto Ã© quer que se Ã© uma chegada ele assuma no retorno que Ã© uma partida, e vice versa\nse for um interzone manter interzone.', 'sara', 100000, 'Sim', 0, '', 0, '', 56, '59597af0/56', 'Resolvido', 40),
(169, 1499040000, 'motorista nÃ£o consegue inserir serviÃ§o na app', 'JÃ¡ nÃ£o Ã© a primeira vez o motorista nÃ£o consegue inserir serviÃ§o na app', 'sara', 55000, 'NÃ£o', 1499212800, 'patricia', 0, 'JÃ¡ nÃ£o Ã© a primeira vez o motorista nÃ£o consegue inserir serviÃ§o na app', 69, '59597af0/69', 'Pendente', 40),
(177, 1499126400, 'orÃ§amento', 'orÃ§amento web site', 'sara', 40000, 'Sim', 0, '', 0, '', 78, '595acc70/78', 'Resolvido', 40),
(178, 1499126400, 'rita e natalie nÃ£o conseguiam introduzir serviÃ§o a aparecer valores da rota', 'A rota nÃ£o tinha valores de po e pn Inseridos porisso Ã© que na criaÃ§Ã£o do serviÃ§o nÃ£o aparecia o valor da rota ', 'sara', 368000, 'Sim', 0, '', 0, '', 39, '595acc70/39', 'Resolvido', 40),
(179, 1499212800, 'nao faz som em alguns equipamentos dos motoristas // alteraram o tamanho de visualizaÃ§Ã£o standard do tablet e isso influenciou na visualizaÃ§Ã£o do nome do cliente', 'O som foi resolvido com a reinstalaÃ§Ã£o da aplicaÃ§Ã£o. O nome ficou pendente de voltarem a colocar o padrÃ£o standrad dos equipamentos para ver se os nomes aparecem cortados', 'sara', 706000, 'Sim', 0, '', 0, '', 70, '595c1df0/70', 'Resolvido', 40),
(180, 1499212800, 'impressao apartir da gestÃ£o consulta jÃ¡ a imprimir com todos os campos mesmo que coloque invisiveis aqueles que nÃ£o quer // pergunta sobre o orÃ§amento do programa que pediu pode saber resposta ate dia 15 deste mÃªs', 'impressao apartir da gestÃ£o consulta jÃ¡ a imprimir com todos os campos mesmo que coloque invisiveis aqueles que nÃ£o quer\n // pergunta sobre o orÃ§amento do programa que pediu pode saber resposta ate dia 15 deste mÃªs', 'sara', 233000, 'Sim', 0, '', 0, '', 88, '595c1df0/88', 'Resolvido', 40),
(181, 1499299200, 'nÃ£o consegue entrar no software', 'https nÃ£o propagou ainda e portanto nÃ£o lhe estava a deixar entrar. Carregou em avanÃ§adas e prosseguir na mesma.', 'sara', 229000, 'Sim', 0, '', 0, '', 60, '595d6f70/60', 'Resolvido', 40),
(182, 1499299200, 'nao conseguia entrar porcausa da propagaÃ§Ã£o da seguranÃ§a', '', 'sara', 446000, 'Sim', 0, '', 0, '', 78, '595d6f70/78', 'Resolvido', 40),
(183, 1499299200, 'motorista nÃ£o estÃ¡ a visualizar os operadores na app ', '', 'sara', 67000, 'Sim', 1499299200, '', 0, 'Fez so um primeiro log in, foi informado que tem que fazer logout do primeiro log in para que fique tudo a funcionar em condiÃ§Ãµes', 44, '595d6f70/44', 'Resolvido', 40),
(184, 1499299200, 'emails enviados da escala do dia nÃ£o estÃ£o a cair em spam', 'Cliente informado de visualizar no spam e informar que esse email nÃ£o Ã© spam.', 'sara', 996000, 'Sim', 0, '', 0, '', 65, '595d6f70/65', 'Resolvido', 40),
(185, 1499299200, 'Estao sem loja', 'estÃ£o sem loja', 'sara', 21000, 'NÃ£o', 1499299200, 'sandra', 0, '', 48, '595d6f70/48', 'Pendente', 40),
(187, 1499299200, 'ts', 'teste', 'te', 20000, 'NÃ£o', 1499299200, 'Joao', 963354089, 'aaaa', 63, '595d6f70/63', 'Pendente', 48),
(188, 1499299200, 'aaa', 'aaa', 'aaa', 12000, 'Sim', 0, '', 0, '', 63, '595d6f70/63', 'Resolvido', 24),
(192, 1499385600, 'Cliente nÃ£o conseguia visualizar gestÃ£o consulta', 'Foi informada que tinha de limpar o histÃ³rico do broswer e ficou tudo a funcionar.', 'sara', 162000, 'Sim', 0, '', 0, '', 92, '595ec0f0/92', 'Resolvido', 40),
(193, 1499644800, 'Sistema no google crome estÃ¡ a dar erros', 'EstÃ¡ a dar os mesmo erros que dava ao pedro do gentle bee. \"erro na criaÃ§Ã£o de novo ficheiro pff verifique a ligaÃ§Ã£o wifi\" algo parecido com isto. Informei para instalarem o firefox que parece estar a trabalhar melhor. Pelo menos o cliente gentle bee nÃ£o se queixou mais desde sexta-feira', 'sara', 404000, 'Sim', 0, '', 0, '', 60, '5962b570/60', 'Resolvido', 40),
(194, 1499644800, 'Cliente nÃ£o encontrava o operador que tinha criado na zona da tabela', 'Foi informado que para o operador aparecer na zona da tabela tem que estar associado como tabela ou tabela percentagem e neste caso o operador Ttaxi Travel estava como fixo. Foi aconselhado a mudar para o tipo de tabela que queria, e o operador jÃ¡ apareceu na tabela.', 'sara', 168000, 'Sim', 0, '', 0, '', 56, '5962b570/56', 'Resolvido', 40),
(195, 1499644800, 'Cliente quer imprimir Tabela de operador e nÃ£o estÃ¡ a dar', '', 'sara', 150000, 'Sim', 0, '', 0, '', 56, '5962b570/56', 'Resolvido', 40),
(196, 1499644800, 'emails enviados pela escala estÃ£o a cair em spam', 'Cliente informado de ir ao spam do email para informal que esse email nÃ£o Ã© spam. Foi informado de fazer isso para todos os motoristas.', 'sara', 199000, 'Sim', 0, '', 0, '', 67, '5962b570/67', 'Resolvido', 40),
(197, 1499644800, 'cliente diz que o sistema de comissÃµes tanto de staff como de operadores estÃ¡ a arredondar incorrectamente retirando sempre 2 a 3 centimos, cliente diz que o sistema estÃ¡ a arredondar na terceira casa decimal', 'VersÃ£o antiga jÃ¡ fazia o mesmo. EstÃ¡ a arredondar incorrectamente, o que provoca um conflito nos relatÃ³rios gerados pelo programa e os impressos.', 'sara', 564000, 'Sim', 0, '', 0, '', 56, '5962b570/56', 'Resolvido', 40),
(198, 1499731200, 'cliente nÃ£o consegue entrar na transfergest', 'apÃ³s fazer limpeza de browser da forma indicada pela programaÃ§Ã£o dado o caminho certo para entrar cliente continua sem conseguir entrar', 'sara', 182000, 'NÃ£o', 1499731200, 'luciana', 0, 'cliente nÃ£o consegue entrar na transfergest, tem o trabalho parada Ã  espera que seja resolvida a situaÃ§Ã£o. PorgramaÃ§Ã£o vai ver', 92, '596406f0/92', 'Resolvido', 40),
(199, 1499731200, 'cliente jÃ¡ consegue entrar. file not found arranjado', 'programaÃ§Ã£o arranjou', 'sara', 154000, 'Sim', 0, '', 0, '', 92, '596406f0/92', 'Resolvido', 40),
(200, 1499731200, 'Cliente teve a manha toda a espera e agora tem que sair e portanto nÃ£o pode falar comigo Ficou de ligar da parte da tarde para fazer a tour.', '', 'sara', 134000, 'Sim', 0, '', 0, '', 55, '596406f0/55', 'Resolvido', 40),
(201, 1499731200, 'Sr. Fernando nÃ£o consegue imprimir', 'As tabelas de exportaÃ§Ã£o para pdf nÃ£o estÃ£o a ajustar a folha. Ensinei o sr fernando a fazer atravÃ©s da impressora. ', 'sara', 928000, 'Sim', 0, '', 0, '', 82, '596406f0/82', 'Resolvido', 40),
(202, 1499731200, 'formaÃ§Ã£o novo software', 'foi explicado todo o novo funcionamento da nova versÃ£o do software.', 'sara', 837000, 'Sim', 0, '', 0, '', 78, '596406f0/78', 'Resolvido', 40),
(203, 1499731200, 'Cliente ligou estava numa formaÃ§Ã£o e nÃ£o antendi, quando retribui a chamada o problema era nÃ£o conseguir entrar mas depois conseguir e resolveu o problema', '', 'sara', 384000, 'Sim', 0, '', 0, '', 88, '596406f0/88', 'Resolvido', 40),
(204, 1499731200, 'cliente perguntou se alterar uma forma de pagamento de um staff se isso altera o que estÃ¡ para trÃ¡s', 'Foi-lhe explicado que nÃ£o pois tudo o que estÃ¡ para trÃ¡s estÃ¡ encerrado e portanto nÃ£o Ã© alterado mediante alteraÃ§Ã£o no presente ao tipo de comissÃµes. Foi lhe explicado que caso queira alterar algum valor de comissÃ£o que pode faze-lo alterando o serviÃ§o de fechado para outro estado e depois fazer alteraÃ§Ã£o e depois encerra-lo novamente.\nBasicamente o cliente nÃ£o queria ter trabalho em alterar tudo para trÃ¡s e queria que houvesse uma forma automÃ¡tica de ser feito.', 'sara', 307000, 'Sim', 0, '', 0, '', 88, '596406f0/88', 'Resolvido', 40),
(205, 1499817600, 'cliente diz que os motoristas nÃ£o estÃ£o a receber os emails enviados atravÃ©s da escala do dia.', 'Pediu que verificasse no spam onde os emails do escritÃ³rio nÃ£o estÃ£o em spam, falta sÃ³ confirmar se os motoristas estÃ£o realmente a receber ou se estÃ£o a ir para spam\nFiz o teste, criei um serviÃ§o e um staff teste e recebi o email do serviÃ§o enviado.\nAguardo contacto do Gualter', 'sara', 501000, 'Sim', 0, '', 0, '', 60, '59655870/60', 'Resolvido', 40),
(207, 1499817600, 'Amandio ligou e nÃ£o conseguia entrar no sistema num computador a medida que foi falando comigo lÃ¡ consegui entrar // os logins continuam com problemas', 'Fez umas sugestÃµes para a criaÃ§Ã£o de serviÃ§o que lhe foi explicado que eram complicadas porque para meter como ele quer vai implicar o resto dos clientes, sugeri se quisesse pedir um orÃ§amento que nÃ£o foi o caso.\nQuer que o tipo de serviÃ§o seja assumido automaticamente assim como a categoria do operador ( porque so tem um) e os locais frequentes ser obrigatÃ³rio o sim automaticamente.', 'sara', 519000, 'Sim', 0, '', 0, '', 82, '59655870/82', 'Resolvido', 40),
(208, 1499904000, 'Cliente nÃ£o consegue aceder ao sistema atraves do google crome.', 'Fez limpeza de historico e nem assim, entrou noutro broswer e consegui entrar, portanto aconselhei a trabalhar no broswer em que consegue entrar e passei a situaÃ§Ã£o para a programaÃ§Ã£o. //Foi \"forÃ§ada\" a ligaÃ§Ã£o Https para entrar no programa.', 'sara', 236000, 'Sim', 0, '', 0, '', 94, '5966a9f0/94', 'Resolvido', 40),
(209, 1499904000, 'valter queixa-se que a area privada dos operadores estÃ¡ a dar ligaÃ§Ã£o nÃ£o segura.', 'Pediu para que a situaÃ§Ã£o fosse vista, eu indiquem que a ligaÃ§Ã£o naturalmente que Ã© segura, e disse para clicar no avanÃ§adas e prosseguir na mesma.', 'sara', 61000, 'Sim', 0, '', 0, '', 44, '5966a9f0/44', 'Resolvido', 40),
(211, 1499904000, 'a', 'a', 'a', 48000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(212, 1499904000, 'aaaa', '', 'aaaaa', 11000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(213, 1499904000, 'a', '', 'a', 13000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(214, 1499904000, '1', '', '1', 18000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(215, 1499904000, 'teste', '', 'teste', 10000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(216, 1499904000, 'a', 'aaaa', 'a', 5000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(217, 1499904000, 'teste', 'a\'a', 'aa', 14000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(218, 1499904000, 'teste', '\'', 'aa', 30000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(219, 1499904000, 'a', '\'', 'a', 7000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(220, 1499904000, 'a', '\'\'\'\'', 'a', 26000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(221, 1499904000, 'a', '\'', 'a', 42000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(223, 1499904000, 'cliente diz que serviÃ§o lanÃ§ado por operador nÃ£o apareceu no sistema', 'Depois de verificada a situaÃ§Ã£o nenhum serviÃ§o ( o serviÃ§o em questÃ£o) foi lanÃ§ado por parte do operador para a data de hoje. Operador diz que o serviÃ§o se encontra pendente, tanto na central do cliente como do operador nÃ£o existe nenhum serviÃ§o pendente, e mais, sÃ³ existe um serviÃ§o agendado para hoje jÃ¡ realizado pelo cliente.\nMais, se o serviÃ§o se encontrava \"pendente\" como Ã© que o operador foi dizer aos clientes que o serviÃ§o ia ser efectuado. JÃ¡ nÃ£o sendo a primeira vez que utilizam o programa sabem que sÃ³ quando Ã© confirmado Ã© que a empresa de transfer assume a responsabilidade de fazer o serviÃ§o. Portanto Pendente e enviar o clientes para o local a empresa de transfer nÃ£o tem responsabilidade sobre a situaÃ§Ã£o', 'sara', 2114000, 'Sim', 0, '', 0, '', 86, '5966a9f0/86', 'Resolvido', 40),
(224, 1499904000, 'renato', 'renato ', 'aaa', 10000, 'Sim', 0, '', 0, '', 63, '5966a9f0/63', 'Resolvido', 48),
(230, 1499904000, 'Cliente quis falar com o pedro disse que nÃ£o podia nÃ£o quis falar comigo', '', 'sara', 57000, 'Sim', 0, '', 0, '', 56, '5966a9f0/56', 'Resolvido', 40),
(231, 1499904000, 'Cliente quis falar com o pedro disse que nÃ£o podia nÃ£o quis falar comigo', '', 'sara', 57000, 'Sim', 0, '', 0, '', 56, '5966a9f0/56', 'Resolvido', 40),
(235, 1499990400, 'Ana pergunta se a app para ios estÃ¡ disponvivel foi informada que ainda nÃ£o, que terÃ¡ que usar a app disponivel para android', '', 'sara', 98000, 'Sim', 0, '', 0, '', 40, '5967fb70/40', 'Resolvido', 40),
(236, 1499990400, 'Sandra nÃ£o conseguia aceder a app movel. Tinha colocado o contribuinte incorrectamente', '', 'sara', 733000, 'Sim', 0, '', 0, '', 48, '5967fb70/48', 'Resolvido', 40),
(237, 1499990400, 'cliente nÃ£o entendia porque Ã© que um operador lanÃ§ava um serviÃ§o com um nome diferente daqueles que ele tinha criado na central', 'Foi lhe explicado que para operador ele lanÃ§a o serviÃ§o e este vai somente buscar a categoria associada Ã  tabela lanÃ§ada para esse operador', 'sara', 445000, 'Sim', 0, '', 0, '', 56, '5967fb70/56', 'Resolvido', 40),
(238, 1500249600, 'emails enviados da escala estÃ¡ a dar erro. nÃ£o estÃ£o a enviar.', 'Os emails enviados da escala do dia para os motoristas dÃ¡ erro, erro no envio do email por favor verifique a ligaÃ§Ã£o wifi.\nConseguimos detetar quem alterou o seviÃ§o? 27990 / 30451.\n', 'sara', 322000, 'Sim', 1500249600, 'Gualter', 0, '', 60, '596beff0/60', 'Resolvido', 40),
(239, 1500249600, 'inserÃ§Ã£o de bug', '', 'sara', 28000, 'Sim', 0, '', 0, '', 60, '596beff0/60', 'Resolvido', 40),
(240, 1500249600, 'teste', 'teste', 'teste', 9000, 'Sim', 0, '', 0, '', 63, '596beff0/63', 'Resolvido', 24),
(241, 1500249600, 'es', 'wa', 'teste', 10000, 'Sim', 0, '', 0, '', 63, '596beff0/63', 'Resolvido', 48),
(242, 1500249600, 'cliente pretendia que o cabeÃ§alho na na tabela de operadores acompanhasse o scrool para baixo. ', 'Foi explicado ao cliente que ao passar o rato sobre o   que consegue ler a categoria em questÃ£o visto que a soluÃ§Ã£o que ele queria nÃ£o se encontra disponÃ­vel.', 'sara', 152000, 'Sim', 0, '', 0, '', 56, '596beff0/56', 'Resolvido', 40),
(243, 1500249600, 'comissao de staff nÃ£o aparecia no serviÃ§o', 'Foi epxlicado que editar serviÃ§os depois de encerrados ele nÃ£o vai fazer as contas, tem que editar o estado do serviÃ§o guardar e depois fazer as respectivas alteracoes para que o programa faÃ§as as contas que pertender.\nProblema solucionado', 'sara', 187000, 'Sim', 0, '', 0, '', 92, '596beff0/92', 'Resolvido', 40),
(244, 1500249600, 'teste', 'teste', 'teste', 11000, 'Sim', 0, '', 0, '', 63, '596beff0/63', 'Resolvido', 24),
(245, 1500336000, 'log in salta com o tempo / email do formulario estarÃ¡ incorrecto? / caixa de reservas nÃ£o estÃ¡ a funcionar', 'caixa de reservas n esta a funcionar, \nemail do formulÃ¡rio de reservas esta mal encaminhado.\nerro 404 acontece sempre q a cliente entra na pagina e fica um pouco aberta tenta fazer alguma coisa e da o erro.', 'sara', 392000, 'NÃ£o', 1500508800, '', 0, '', 69, '596d4170/69', 'Pendente', 40),
(246, 1500422400, 'Cliente nÃ£o avisou os motoristas para fazerem o download da nova app, ou nÃ£o lhes explicou bem e eles ligaram hoje de manha com dificuldades', 'SituaÃ§Ã£o resolvida.', 'sara', 96000, 'Sim', 0, '', 0, '', 55, '596e92f0/55', 'Resolvido', 40),
(247, 1500422400, 'cliente nÃ£o conseguia aceder a app the um motoristas, alterou-se a password do mesmo mas ele nao estava presente para ver se funcionava. NÃ£o estÃ¡ logado em lado nenhum', 'Caso nÃ£o conseguia presumo que seja acessos colocados incorrectamente, mas vamos aguardar para ver- 19.07.2017', 'sara', 199000, 'Sim', 0, '', 0, '', 93, '596e92f0/93', 'Resolvido', 40),
(248, 1500422400, 'Motorista colocou mal contribuinte e nÃ£o conseguia entrar na app // cliente fechou serviÃ§o e nÃ£o sabia como alterar o estado', 'Tudo resolvido', 'sara', 135000, 'Sim', 0, '', 0, '', 93, '596e92f0/93', 'Resolvido', 40),
(249, 1500508800, 'cliente estÃ¡ com problemas no login', 'ProgramaÃ§Ã£o ficou de resolver ainda hoje para ligar ao cliente.', 'sara', 809000, 'Sim', 0, '', 0, '', 45, '596fe470/45', 'Resolvido', 40),
(250, 1500595200, 'cliente foi informada que as questÃµes da loja foram resolvidas e a cliente confirmou', 'Foi explicado como funcionar com as exportaÃ§Ãµes para PDF\nDetei um bug na gestÃ£o consulta', 'sara', 1579000, 'Sim', 0, '', 0, '', 69, '597135f0/69', 'Resolvido', 40);
INSERT INTO `suporte` (`id`, `data_hora_suporte`, `assistencia_nome`, `assistencia_obs`, `nome_operador`, `duracao`, `solucao_problema`, `proxima_data`, `nome_pessoa`, `telefone`, `obs_suporte`, `id_cliente_assistencia`, `referencia`, `estado`, `user_id`) VALUES
(251, 1500854400, 'fernando consulta o relatÃ³rio de staff e quando estÃ¡ a fazer a pesquisaa vÃ¡rios motoristas o relatÃ³rio por vezes nÃ£o lhe aparecer o valor total na diferenÃ§a, com valores de cobranÃ§a.', 'fiz o teste e aconteceu o mesmo, nÃ£o reconheci nenhum padrÃ£o se nÃ£o a mudanÃ§a rÃ¡pida de pesquisa entre motoristas.\nNaturalmente que apÃ³s a diferenÃ§a dar 0, a extracÃ§Ã£o para pdf dÃ¡  tambÃ©m', 'sara', 547000, 'NÃ£o', 1501113600, '', 0, '', 56, '59752a70/56', 'Pendente', 40),
(252, 1501027200, 'Natalie recebeu uma reserva on-line e nÃ£o sabia como fazer', 'Foi-lhe explicado que tem que ir Ã  transfergest antiga para copiar as cordeadas do serviÃ§o para a nova transfergest.\nPerguntou pela extra net se tinha sido colocada.\n', 'sara', 503000, 'Sim', 0, '', 0, '', 39, '5977cd70/39', 'Resolvido', 40),
(253, 1501027200, 'No meu computador nÃ£o aparece, eu pedi ao Valter para limpar os cookies ele disse que nÃ£o Ã© dos cookies, ele trabalha com mac.', 'No meu computador nÃ£o aparece, eu pedi ao Valter para limpar os cookies ele disse que nÃ£o Ã© dos cookies, ele trabalha com mac.', 'sara', 251000, 'NÃ£o', 1501200000, '', 0, 'No meu computador nÃ£o aparece, eu pedi ao Valter para limpar os cookies ele disse que nÃ£o Ã© dos cookies, ele trabalha com mac. Ligar ao cliente quando resolvido', 44, '5977cd70/44', 'Pendente', 40),
(254, 1501027200, 'dÃºvidas de iniciante', 'como cobrar na app ( i no canto superior direito do serviÃ§o)\ncomo consultar serviÃ§os feitos ( gestÃ£o consulta)\ncomo criar novo operador ( criar operador novo)\n\n', 'sara', 1097000, 'Sim', 0, '', 0, '', 95, '5977cd70/95', 'Resolvido', 40),
(255, 1501027200, 'RelaÃ³rio de staff continua com a mesma situaÃ§Ã£o', 'Valores de diferenÃ§a a dar incorrectos // barra superior de serviÃ§os e despesas nÃ£o aparece ao cliente.', 'sara', 549000, 'NÃ£o', 1501200000, '', 0, '', 56, '5977cd70/56', 'Pendente', 40),
(256, 1501113600, 'Cliente nÃ£o estava a conseguir trabalhar com a transfergest, mas o problema Ã© da rede deles.', 'Fiz o teste no meu computador e nÃ£o tive qualquer problema em aceder aos respectivos links, ou esperei mais do que o normal.', 'sara', 10000, 'Sim', 0, '', 0, '', 84, '59791ef0/84', 'Resolvido', 40),
(257, 1501113600, 'Cliente pergunta pela loja', 'Cliente perguntou como alterar os preÃ§os de um operador, foi lhe explicado que para o operador em especifico tinha que alterar os valores manualmente, como feito no inicio.', 'sara', 116000, 'Sim', 0, '', 0, '', 77, '59791ef0/77', 'Resolvido', 40),
(258, 1501113600, 'Cliente pergunta pela loja', 'Cliente perguntou como alterar os preÃ§os de um operador, foi lhe explicado que para o operador em especifico tinha que alterar os valores manualmente, como feito no inicio.', 'sara', 116000, 'Sim', 0, '', 0, '', 77, '59791ef0/77', 'Resolvido', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bugs`
--
ALTER TABLE `bugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes_assistencia`
--
ALTER TABLE `clientes_assistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companhia`
--
ALTER TABLE `companhia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugestao`
--
ALTER TABLE `sugestao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suporte`
--
ALTER TABLE `suporte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `bugs`
--
ALTER TABLE `bugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `clientes_assistencia`
--
ALTER TABLE `clientes_assistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `companhia`
--
ALTER TABLE `companhia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sugestao`
--
ALTER TABLE `sugestao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `suporte`
--
ALTER TABLE `suporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
