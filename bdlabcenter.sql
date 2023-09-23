-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Máquina: sql212.epizy.com
-- Data de Criação: 17-Jul-2018 às 05:46
-- Versão do servidor: 5.6.35-81.0
-- versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `epiz_22285812_bdlabcenter`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

CREATE TABLE IF NOT EXISTS `tbcontato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` int(9) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbempresa`
--

CREATE TABLE IF NOT EXISTS `tbempresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `link` text,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `tbempresa`
--

INSERT INTO `tbempresa` (`id_empresa`, `link`, `img`) VALUES
(21, 'https://www.iscte-iul.pt/', 'iscte_iul.png'),
(22, 'https://www.ipleiria.pt/', 'ipl.png'),
(23, 'https://www.iefp.pt/home', 'iefp.png'),
(24, 'http://robotica.ag-sg.net/', 'robotica.png'),
(25, 'http://www.cenfim.pt/', 'cenfim.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbeventos`
--

CREATE TABLE IF NOT EXISTS `tbeventos` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text,
  `descricao` text,
  `img` varchar(250) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Extraindo dados da tabela `tbeventos`
--

INSERT INTO `tbeventos` (`id_evento`, `titulo`, `descricao`, `img`, `data`) VALUES
(11, 'Palestra sobre cogumelos no Centro de Conhecimento e CiÃªncia ao ServiÃ§o da Sociedade (C3S2) ', '<p>&ldquo;Cogumelos: Biologia, cultivo, valor nutricional e medicinal&rdquo;&nbsp;foi o tema do primeiro evento a acontecer&nbsp;no Centro de Conhecimento e Ci&ecirc;ncia ao Servi&ccedil;o da Sociedade (C3S2)&nbsp;do Polit&eacute;cnico de Leiria,&nbsp;no Torres Vedras LabCenter.&nbsp;(a&nbsp;cerim&oacute;nia de inaugura&ccedil;&atilde;o do&nbsp;C3S2 decorreu&nbsp;no dia 9 de maio).</p>\r\n\r\n<p>No dia 3 de junho,&nbsp;Ana Cristina Rodrigues (docente da Escola Superior de Sa&uacute;de), estreou&nbsp;este espa&ccedil;o dando a conhecer um pouco mais sobre este alimento, desde como trat&aacute;-lo, apresentando as vantagens e desvantagens para o nosso organismo, e at&eacute; como inclui-lo na alimenta&ccedil;&atilde;o de forma saud&aacute;vel.<br />\r\n&nbsp;</p>\r\n\r\n<p style="text-align:justify"><strong><span style="font-size:16px">3&nbsp;de junho&nbsp;| 10h00 | Edif&iacute;cio Serpa Pinto Plaza (Rua Jos&eacute; Eduardo C&eacute;sar n.&ordm; 6) | Torres Vedras&nbsp;</span></strong></p>\r\n', 'palestra_cogumelos.jpg', '2017-06-08'),
(12, 'APRENDE A PROGRAMAR EM BASIC - PICAXE', '<p>Local:&nbsp;Torres Vedras LabCenter<br />\r\nDestinat&aacute;rios:&nbsp;M/8</p>\r\n\r\n<p style="text-align:justify">O&nbsp;&quot;Rob&oacute;tica para Todos&quot;&nbsp;&eacute; um servi&ccedil;o educativo da C&acirc;mara Municipal de Torres Vedras,&nbsp;em parceria com&nbsp;o Clube de Rob&oacute;tica do Agrupamento de&nbsp;Escolas de&nbsp;S&atilde;o Gon&ccedil;alo,&nbsp;localizado no Torres Vedras LabCenter (salas 20 e 21), de sensibiliza&ccedil;&atilde;o, divulga&ccedil;&atilde;o e contacto com a programa&ccedil;&atilde;o e rob&oacute;tica.</p>\r\n\r\n<p>Tem como principais objetivos:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>estimular a curiosidade pela programa&ccedil;&atilde;o e rob&oacute;tica;</li>\r\n	<li>proporcionar &agrave; crian&ccedil;a um ambiente de aprendizagem diferente onde pode programar e manipular robots;&nbsp;</li>\r\n	<li>&nbsp;estimular o racioc&iacute;nio l&oacute;gico-reflexivo e espacial;</li>\r\n	<li>desenvolver o racioc&iacute;nio para a resolu&ccedil;&atilde;o de problemas;&nbsp;</li>\r\n	<li>estimular a criatividade e o sentido cr&iacute;tico;</li>\r\n	<li>promover o conhecimento interdisciplinar, a autonomia e o esp&iacute;rito empreendedor.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para al&eacute;m das atividades l&uacute;dicas de inicia&ccedil;&atilde;o &agrave; programa&ccedil;&atilde;o e rob&oacute;tica (abaixo descritas),&nbsp;existe ainda a modalidade de Rob&oacute;tica onde se&nbsp;aprende&nbsp;a programar em basic - picaxe.</p>\r\n\r\n<ul>\r\n	<li>Ozobots (construir pistas e resolver desafios com c&oacute;digo de cores);</li>\r\n	<li>Programa&ccedil;&atilde;o em Ozoblockly (desafios no computador);</li>\r\n	<li>Inicia&ccedil;&atilde;o &agrave; Eletr&oacute;nica&nbsp; (constru&ccedil;&atilde;o de circuitos el&eacute;tricos);</li>\r\n	<li>&nbsp;&quot;Aprender a programar&quot; (tabuleiro de inicia&ccedil;&atilde;o &agrave; programa&ccedil;&atilde;o);</li>\r\n	<li>Programar o &quot;Robot CR7&quot; (jogo onde se programa um robot para marcar golos);</li>\r\n	<li>Programar o Cyber Robot (para fazer desafios matem&aacute;ticos);</li>\r\n	<li>&nbsp;Programar o Mio Robot (para viajar pelas letras no nome);&nbsp;</li>\r\n	<li>Controlar robots por telecomando (comando atrav&eacute;s de aplica&ccedil;&atilde;o no telem&oacute;vel ou tablet).</li>\r\n</ul>\r\n\r\n<p><strong>Info: roboticaparatodos@cm-tvedras.pt</strong>&nbsp;e labcenter@cm-tvedras.pt<br />\r\n<strong>Formadora:</strong>&nbsp;Prof. F&aacute;tima Mira</p>\r\n', 'robotica_w847.jpg', '2018-03-14'),
(13, 'Semana INOV-E â€“ Empreender em Torres Vedras. ', '<p>De 6 a 9 de mar&ccedil;o de 2018 | Semana INOV-E &ndash; Empreender em Torres Vedras.&nbsp;<br />\r\nTeremos sess&otilde;es de interesse para empreendedores, investidores e para o tecido empresarial. Inscrevam-se no link abaixo.</p>\r\n\r\n<p>http://www.estufa.pt/torresinov-e/agendaver/pt/352/</p>\r\n\r\n<p>- - -&nbsp;<br />\r\nPROGRAMA&Ccedil;&Atilde;O detalhada:</p>\r\n\r\n<p>6 | ter&ccedil;a-feira&nbsp;<br />\r\nOPEN DAY&nbsp;Torres Inov-e&nbsp;<br />\r\nLocal: Torres Vedras LabCenter</p>\r\n\r\n<p><span style="font-family:Arial,Helvetica,sans-serif">Confluir Studio&nbsp;E&nbsp;M&eacute;trica Design</span><br />\r\nAconselhamento em arquitetura, design de ambientes e comunica&ccedil;&atilde;o!&nbsp;<br />\r\nDirigido a empresas do concelho desde com&eacute;rcio local, servi&ccedil;os e empresas que pretendam desenvolver projetos de turismo de alojamento local ou turismo rural.</p>\r\n\r\n<p>EFIacontece:&nbsp;<br />\r\nApresenta&ccedil;&atilde;o da oferta formativa.&nbsp;<br />\r\nWorkshop: Coaching no trabalho de equipa (10H &agrave;s 11H)</p>\r\n\r\n<p>7 | quarta-feira&nbsp;<br />\r\nHor&aacute;rio: 14H - 18H&nbsp;<br />\r\nLocal: Audit&oacute;rio Espa&ccedil;o Primavera (Rua Miguel Bombarda)</p>\r\n\r\n<p>COMO TRANSFORMAR A MINHA IDEIA NUM NEG&Oacute;CIO?&nbsp;<br />\r\nApresenta&ccedil;&atilde;o do programa Porta 20 | Defini&ccedil;&atilde;o do projeto, produto e mercado | Apresenta&ccedil;&atilde;o concurso de neg&oacute;cios Oeste Portugal</p>\r\n\r\n<p>Interven&ccedil;&atilde;o: Projeto Porta 20 | CPPME &ndash; Confedera&ccedil;&atilde;o Portuguesa das Micro, Pequenas e M&eacute;dias Empresas</p>\r\n\r\n<p>8 | quinta-feira&nbsp;<br />\r\nHor&aacute;rio: 14H - 18H&nbsp;<br />\r\nLocal: Audit&oacute;rio Torres Vedras LabCenter</p>\r\n\r\n<p>QUALIFICA&Ccedil;&Atilde;O E INTERNACIONALIZA&Ccedil;&Atilde;O DE EMPRESAS&nbsp;<br />\r\nIncentivos &agrave; Qualifica&ccedil;&atilde;o e Internacionaliza&ccedil;&atilde;o de Empresas | RGPD &ndash; Regulamento Geral da Prote&ccedil;&atilde;o de Dados | Marketing Digital</p>\r\n\r\n<p>Interven&ccedil;&atilde;o: AIIE Associa&ccedil;&atilde;o Internacionaliza&ccedil;&atilde;o e Intelig&ecirc;ncia Econ&oacute;mica</p>\r\n\r\n<p>9 | sexta-feira&nbsp;<br />\r\nHor&aacute;rio: 15H &agrave;s 17H30M&nbsp;<br />\r\nLocal: Audit&oacute;rio Edif&iacute;cio Pa&ccedil;os do Concelho (Pra&ccedil;a do Munic&iacute;pio)</p>\r\n\r\n<p>VIABILIDADE ECON&Oacute;MICA E FINANCEIRA DO MEU PROJETO&nbsp;<br />\r\nViabilidade econ&oacute;mica e financeira | Tipos de investimento | Programas e medidas de apoio | Custo do capital | Ciclo econ&oacute;mico e ciclo financeiro | An&aacute;lise financeira | Planeamento financeiro | Avalia&ccedil;&atilde;o de projetos | Pitch</p>\r\n\r\n<p>Interven&ccedil;&atilde;o: Projeto Creative Village</p>\r\n\r\n<p>CRIA&Ccedil;&Atilde;O DE EMPREGO PARA PESSOAS DESEMPREGADAS</p>\r\n\r\n<p>Interven&ccedil;&atilde;o: Apoio T&eacute;cnico &agrave; Cria&ccedil;&atilde;o de Emprego, AESS- Associa&ccedil;&atilde;o Economia Solid&aacute;ria e Sustent&aacute;vel</p>\r\n\r\n<p>SESS&Atilde;O DE ENCERRAMENTO DA SEMANA DE EMPREENDEDORISMO<br />\r\n- - -</p>\r\n\r\n<p>+ Info:&nbsp;<br />\r\ntorres.inov-e@cm-tvedras.pt / Tlm.: 925 204 267</p>\r\n', 'semanaInoV.jpg', '2018-03-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbiefp`
--

CREATE TABLE IF NOT EXISTS `tbiefp` (
  `id_iefp` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`id_iefp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tbiefp`
--

INSERT INTO `tbiefp` (`id_iefp`, `texto`) VALUES
(2, '<p style="text-align:center"><strong><span style="font-size:36px">O que s&atilde;o os cursos do IEFP?</span></strong></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:22px">Os&nbsp;<strong>cursos de educa&ccedil;&atilde;o e forma&ccedil;&atilde;o para adultos</strong>&nbsp;(Cursos EFA) permitem elevar os n&iacute;veis de habilita&ccedil;&atilde;o escolar e profissional da popula&ccedil;&atilde;o portuguesa adulta e, por esta via, melhorar as suas condi&ccedil;&otilde;es de empregabilidade.</span></p>\r\n\r\n<p style="text-align:justify"><strong><span style="font-size:28px">Adultos que estejam nas seguintes condi&ccedil;&otilde;es:</span></strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style="text-align:justify"><span style="font-size:22px">- Idade igual ou superior a 18 anos;</span></p>\r\n	</li>\r\n	<li>\r\n	<p style="text-align:justify"><span style="font-size:22px">- Habilita&ccedil;&otilde;es escolares entre menos de 4 anos at&eacute; 12 anos.</span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style="text-align:justify"><strong><span style="font-size:28px">Cursos IEFP em ativo no LabCenter:</span></strong>&nbsp;</p>\r\n\r\n<h5 style="text-align:justify"><strong><span style="font-size:22px">IEFP (4 cursos):</span></strong></h5>\r\n\r\n<ul>\r\n	<li><span style="font-size:22px">- T&eacute;cnico Apoio Familiar e &agrave; Comunidade;</span></li>\r\n	<li><span style="font-size:22px">- Rececionista de Hotel;</span></li>\r\n	<li><span style="font-size:22px">- Contabilidade;</span></li>\r\n	<li><span style="font-size:22px">- Inform&aacute;tica.</span></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbincubacao`
--

CREATE TABLE IF NOT EXISTS `tbincubacao` (
  `id_incubacao` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id_incubacao`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tbincubacao`
--

INSERT INTO `tbincubacao` (`id_incubacao`, `img`, `link`) VALUES
(1, 'inov.png', 'http://www.estufa.pt/torresinov-e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbnoticias`
--

CREATE TABLE IF NOT EXISTS `tbnoticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text,
  `descricao` text,
  `data` date DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `tbnoticias`
--

INSERT INTO `tbnoticias` (`id_noticia`, `titulo`, `descricao`, `data`, `img`) VALUES
(18, 'LabCenter abriu portas no centro histÃ³rico de Torres Vedras', '<p>O espa&ccedil;o do antigo Serpa Pinto Plaza, um im&oacute;vel de grande dimens&atilde;o situado em plena zona hist&oacute;rica de Torres Vedras que se encontrava devoluto h&aacute; anos, reabriu por iniciativa da C&acirc;mara Municipal, estando agora instalado no mesmo o Torres Vedras LabCenter.</p>\r\n\r\n<p>Trata-se de um &quot;polo f&iacute;sico agregador, cooperador, de intera&ccedil;&atilde;o e conex&atilde;o, de refer&ecirc;ncia e excel&ecirc;ncia, que mobilizar&aacute; recursos humanos e tecnol&oacute;gicos especializados, integrando no mesmo local equipas abrangentes de investigadores, institui&ccedil;&otilde;es p&uacute;blicas, terceiro setor, empresas e cidad&atilde;os ou seus representantes, no sentido de incrementar e potenciar o crescimento sustentado dos neg&oacute;cios e o desenvolvimento do capital humano&rdquo;.</p>\r\n\r\n<p>Neste espa&ccedil;o, as diversas entidades beneficiar&atilde;o de uma proximidade quer ao FAbLab &ndash; Laborat&oacute;rio de Fabrica&ccedil;&atilde;o Digital, Promo&ccedil;&atilde;o e Difus&atilde;o do Conhecimento, quer &agrave; incubadora de neg&oacute;cios do&nbsp;<em>Torres INOV-E</em>&nbsp;(criada pela C&acirc;mara Municipal e a associa&ccedil;&atilde;o Estufa), desenvolvendo novos neg&oacute;cios com proje&ccedil;&atilde;o a n&iacute;vel nacional e internacional.</p>\r\n\r\n<p>&Eacute; constitu&iacute;do por salas de incuba&ccedil;&atilde;o, salas de forma&ccedil;&atilde;o, salas de reuni&otilde;es, lojas, audit&oacute;rio, sala de conv&iacute;vio, entre outros espa&ccedil;os.</p>\r\n\r\n<p>O Torres Vedras LabCenter &eacute; um dos instrumentos que incorpora a estrat&eacute;gia de promo&ccedil;&atilde;o do investimento e empreendedorismo do Munic&iacute;pio, com foco nas &aacute;reas da economia, da ci&ecirc;ncia, da inova&ccedil;&atilde;o e do conhecimento.</p>\r\n\r\n<p>S&atilde;o parceiros deste projeto o ISCTE-Instituto Universit&aacute;rio de Lisboa, o Clube de Rob&oacute;tica do Agrupamento de Escolas S. Gon&ccedil;alo, o&nbsp;Centro de Forma&ccedil;&atilde;o Profissional da Ind&uacute;stria Metal&uacute;rgica e Metalomec&acirc;nica, o Instituto de Emprego e Forma&ccedil;&atilde;o Profissional e o Instituto Polit&eacute;cnico de Leiria, para al&eacute;m de associa&ccedil;&otilde;es locais, nomeadamente Lababerto, ARADO e Hip&oacute;lito.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Cerim&oacute;nia de inaugura&ccedil;&atilde;o</h3>\r\n\r\n<p>Na cerim&oacute;nia de inaugura&ccedil;&atilde;o do Torres Vedras LabCenter, que se realizou ontem, dia 9 de maio, ao final da tarde, esteve presente o secret&aacute;rio de estado da Ind&uacute;stria, que real&ccedil;ou o empreendedorismo que est&aacute; a ser levado a cabo pelas novas gera&ccedil;&otilde;es, que apresentam uma forma&ccedil;&atilde;o de excel&ecirc;ncia e t&ecirc;m uma vis&atilde;o global na sua atividade. Jo&atilde;o Vasconcelos mostrou-se ainda sensibilizado com o trabalho do Clube de Rob&oacute;tica do Agrupamento de Escolas S. Gon&ccedil;alo, onde tinha estado antes de se deslocar ao Torres Vedras LabCenter.</p>\r\n\r\n<p>J&aacute; na sua interven&ccedil;&atilde;o o presidente da Freguesia de Santa Maria, S. Pedro e Matac&atilde;es, Francisco Martins, referiu que a zona onde se encontra o Torres Vedras LabCenter era uma &aacute;rea industrializada que ao longo do tempo se foi alterando e que necessita agora de novos projetos, tendo parabenizado as entidades envolvidas na cria&ccedil;&atilde;o deste novo espa&ccedil;o.</p>\r\n\r\n<p>O presidente da C&acirc;mara Municipal aproveitou, por seu lado, a ocasi&atilde;o, para fazer uma retrospetiva das iniciativas de dinamiza&ccedil;&atilde;o do empreendedorismo levadas a cabo&nbsp;nos &uacute;ltimos anos pela entidade que dirige&nbsp;como a cria&ccedil;&atilde;o do Gabinete de Apoio &agrave;s Empresas e da plataforma&nbsp;<em>Ecocampus</em>, a redu&ccedil;&atilde;o de taxas de urbanismo, a introdu&ccedil;&atilde;o dos ateli&ecirc;s&nbsp;<em>Empreender Crian&ccedil;a</em>&nbsp;nas atividades de enriquecimento curricular e a cria&ccedil;&atilde;o da parceria&nbsp;<em>Ecomar</em>, tendo anunciado que essa pol&iacute;tica vai continuar, estando nesse sentido a ser trabalhada uma proposta de isen&ccedil;&atilde;o de IMI para as empresas que se venham a instalar no territ&oacute;rio do concelho. Carlos Bernardes anunciou&nbsp;tamb&eacute;m que foi lan&ccedil;ado um concurso de neg&oacute;cios para a cria&ccedil;&atilde;o de&nbsp;30&nbsp;postos de trabalho no Torres Vedras LabCenter, bem como a inten&ccedil;&atilde;o de criar um conselho consultivo de fundadores deste espa&ccedil;o. Relembrou&nbsp;igualmente&nbsp;que a cria&ccedil;&atilde;o do Torres Vedras LabCenter se insere no Programa &ldquo;Regenerar o Centro Hist&oacute;rico 2030&rdquo;, tendo ainda agradecido &agrave; PT/Empresas e ao AKI&nbsp;o apoio dado na abertura deste equipamento.</p>\r\n\r\n<p>De referir que o Torres Vedras LabCenter ir&aacute; aderir &agrave; Associa&ccedil;&atilde;o Nacional de FabLabs.</p>\r\n', '2017-05-10', 'entrada.jpg'),
(19, 'FUNCIONAMENTO DO TORRES VEDRAS LABCENTER Ã‰ ATÃ‰ AO MOMENTO UM SUCESSO', '<p>Quase dois meses ap&oacute;s a sua inaugura&ccedil;&atilde;o, o Torres Vedras LabCenter regista mais de 3 mil utilizadores.</p>\r\n\r\n<p>No m&ecirc;s de junho, a t&iacute;tulo de exemplo, foram contabilizadas mais de 1.500 pessoas neste equipamento.</p>\r\n\r\n<p>Nesse espa&ccedil;o j&aacute; foram dinamizados mais de 15 eventos diferenciados, desde um para o p&uacute;blico-alvo da <em>Feira Final Empreender Crian&ccedil;a e Rob&oacute;tica</em> (num s&aacute;bado durante todo o dia), at&eacute; outros para alunos do ensino secund&aacute;rio (envolvendo jovens da Escola de Servi&ccedil;os e Com&eacute;rcio do Oeste e da Escola Secund&aacute;ria Madeira Torres), passando por sess&otilde;es de forma&ccedil;&atilde;o e de conhecimento direcionadas de, e para, empresas do concelho. De referir tamb&eacute;m que o LabCenter j&aacute; acolheu um jantar-debate subordinado &agrave; tem&aacute;tica: &quot;Inova&ccedil;&atilde;o no Setor Agroalimentar&quot;.</p>\r\n\r\n<p>Recorde-se que o Torres Vedras LabCenter, que ocupa o antigo espa&ccedil;o do Serpa Pinto Plaza, localizado no centro hist&oacute;rico de Torres Vedras, &eacute; um dos instrumentos que incorpora a estrat&eacute;gia de promo&ccedil;&atilde;o do investimento e empreendedorismo da C&acirc;mara Municipal, com foco nas &aacute;reas da economia, da ci&ecirc;ncia, da inova&ccedil;&atilde;o e do conhecimento. Sendo um polo f&iacute;sico agregador, cooperador e de intera&ccedil;&atilde;o e conex&atilde;o que mobiliza recursos humanos e tecnol&oacute;gicos especializados, integra no mesmo local equipas abrangentes de investigadores, institui&ccedil;&otilde;es p&uacute;blicas, terceiro setor, empresas e cidad&atilde;os.</p>\r\n\r\n<p>Promovido pela C&acirc;mara Municipal, envolve tamb&eacute;m o ISCTE-IUL (Instituto Universit&aacute;rio de Lisboa) com quem foi assinado um protocolo, tendo ainda sido assinados memorandos de entendimento no &acirc;mbito deste projeto com o Clube de Rob&oacute;tica do Agrupamento de Escolas S&atilde;o Gon&ccedil;alo, o Instituto Polit&eacute;cnico de Leiria, o CENFIM &ndash; Centro de Forma&ccedil;&atilde;o Profissional da Ind&uacute;stria Metal&uacute;rgica e Metalomec&acirc;nica e o IEFP - Instituto de Emprego e Forma&ccedil;&atilde;o Profissional. Conta tamb&eacute;m com a parceria de um conjunto de associa&ccedil;&otilde;es torrienses: Estufa, LabAberto, Hip&oacute;lito e ARADO.</p>\r\n', '2017-07-05', 'tvd9267_w847.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbparceiros`
--

CREATE TABLE IF NOT EXISTS `tbparceiros` (
  `id_parceiro` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id_parceiro`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tbparceiros`
--

INSERT INTO `tbparceiros` (`id_parceiro`, `img`, `link`) VALUES
(3, 'esco.png', 'http://www.sefo.pt/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbrobotica`
--

CREATE TABLE IF NOT EXISTS `tbrobotica` (
  `id_robotica` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`id_robotica`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tbrobotica`
--

INSERT INTO `tbrobotica` (`id_robotica`, `texto`) VALUES
(1, '<p style="text-align:justify"><strong><span style="font-size:22px">Local:</span></strong><span style="font-size:20px"> </span><span style="font-size:18px">Torres Vedras LabCenter&nbsp;</span><br />\r\n<span style="font-size:22px"><strong>Destinat&aacute;rios:</strong></span><span style="font-size:18px">&nbsp; &gt;8 anos</span></p>\r\n\r\n<p><span style="font-size:18px">O&nbsp;&quot;Rob&oacute;tica para Todos&quot;&nbsp;&eacute; um servi&ccedil;o educativo da C&acirc;mara Municipal de Torres Vedras,&nbsp;em parceria com&nbsp;o Clube de Rob&oacute;tica do Agrupamento de&nbsp;Escolas de&nbsp;S&atilde;o Gon&ccedil;alo,&nbsp;localizado no Torres Vedras LabCenter (salas 20 e 21), de sensibiliza&ccedil;&atilde;o, divulga&ccedil;&atilde;o e contacto com a programa&ccedil;&atilde;o e rob&oacute;tica.</span></p>\r\n\r\n<p><strong><span style="font-size:22px">Tem como principais objetivos:</span></strong><span style="font-size:20px">&nbsp;</span></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:18px">- Estimular a curiosidade pela programa&ccedil;&atilde;o e rob&oacute;tica;</span></li>\r\n	<li><span style="font-size:18px">- Proporcionar &agrave; crian&ccedil;a um ambiente de aprendizagem diferente onde pode programar e manipular robots;&nbsp;</span></li>\r\n	<li><span style="font-size:18px">- Estimular o racioc&iacute;nio l&oacute;gico-reflexivo e espacial;</span></li>\r\n	<li><span style="font-size:18px">- Desenvolver o racioc&iacute;nio para a resolu&ccedil;&atilde;o de problemas;&nbsp;</span></li>\r\n	<li><span style="font-size:18px">- Estimular a criatividade e o sentido cr&iacute;tico;</span></li>\r\n	<li><span style="font-size:18px">- Promover o conhecimento interdisciplinar, a autonomia e o esp&iacute;rito empreendedor.</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:22px">Para al&eacute;m das atividades l&uacute;dicas de inicia&ccedil;&atilde;o &agrave; programa&ccedil;&atilde;o e rob&oacute;tica (abaixo descritas),&nbsp;existe ainda a modalidade de Rob&oacute;tica onde se&nbsp;aprende&nbsp;a programar em basic - picaxe.</span></strong></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:18px">- Ozobots (construir pistas e resolver desafios com c&oacute;digo de cores);</span></li>\r\n	<li><span style="font-size:18px">- Programa&ccedil;&atilde;o em Ozoblockly (desafios no computador);</span></li>\r\n	<li><span style="font-size:18px">- Inicia&ccedil;&atilde;o &agrave; Eletr&oacute;nica&nbsp; (constru&ccedil;&atilde;o de circuitos el&eacute;tricos);</span></li>\r\n	<li><span style="font-size:18px">- &quot;Aprender a programar&quot; (tabuleiro de inicia&ccedil;&atilde;o &agrave; programa&ccedil;&atilde;o);</span></li>\r\n	<li><span style="font-size:18px">- Programar o &quot;Robot CR7&quot; (jogo onde se programa um robot para marcar golos);</span></li>\r\n	<li><span style="font-size:18px">- Programar o Cyber Robot (para fazer desafios matem&aacute;ticos);</span></li>\r\n	<li><span style="font-size:18px">- Programar o Mio Robot (para viajar pelas letras no nome);&nbsp;</span></li>\r\n	<li><span style="font-size:18px">- Controlar robots por telecomando (comando atrav&eacute;s de aplica&ccedil;&atilde;o no telem&oacute;vel ou tablet).</span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:22px"><strong>Info:</strong></span><span style="font-size:20px"><strong>&nbsp;</strong>roboticaparatodos@cm-tvedras.pt&nbsp;e&nbsp;labcenter@cm-tvedras.pt<strong>&nbsp;</strong></span><br />\r\n<span style="font-size:22px"><strong>Formadora:</strong></span><span style="font-size:20px">&nbsp;Prof. F&aacute;tima Mira</span></p>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbslider`
--

CREATE TABLE IF NOT EXISTS `tbslider` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(150) NOT NULL,
  `mostrar` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `tbslider`
--

INSERT INTO `tbslider` (`id_slide`, `imagem`, `mostrar`) VALUES
(33, 'jovens.jpg', 0),
(23, 'all.jpg', 0),
(21, 'corredor.jpg', 0),
(32, 'entrada.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbsomosnos`
--

CREATE TABLE IF NOT EXISTS `tbsomosnos` (
  `id_sn` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`id_sn`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `tbsomosnos`
--

INSERT INTO `tbsomosnos` (`id_sn`, `texto`) VALUES
(1, '<p style="text-align:center"><u><span style="font-size:28px"><strong>O Conhecimento aliado ao Empreendorismo.</strong></span></u></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:18px">O Torres Vedras LabCenter &eacute; um dos instrumentos que incorpora a estrat&eacute;gia de promo&ccedil;&atilde;o do investimento e empreendedorismo do Munic&iacute;pio de Torres Vedras, com foco nas &aacute;reas da economia, da ci&ecirc;ncia, da inova&ccedil;&atilde;o e do conhecimento.</span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:18px">&Eacute; um polo f&iacute;sico agregador, cooperador e de intera&ccedil;&atilde;o e conex&atilde;o que mobiliza recursos humanos e tecnol&oacute;gicos especializados, integrando no mesmo local equipas abrangentes de investigadores, institui&ccedil;&otilde;es p&uacute;blicas, terceiro setor, empresas e cidad&atilde;os.</span></p>\r\n\r\n<p><span style="font-size:20px"><strong>Em pleno Centro Hist&oacute;rico de Torres Vedras encontra:</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:18px"><strong>- Laborat&oacute;rio de Fabrica&ccedil;&atilde;o Digital &ndash; FabLab;</strong></span></li>\r\n	<li><span style="font-size:18px">- Oficinas de Inova&ccedil;&atilde;o e Conhecimento;</span></li>\r\n	<li><span style="font-size:18px"><strong>- Incubadora de Neg&oacute;cios.</strong></span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:18px"><strong>...e ainda:</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:18px">- Sala de gest&atilde;o - Sala n&ordm;7;</span></li>\r\n	<li><span style="font-size:18px"><strong>- Salas de aulas;</strong></span></li>\r\n	<li><span style="font-size:18px">- Salas de forma&ccedil;&atilde;o;</span></li>\r\n	<li><span style="font-size:18px"><strong>- Sala de reuni&otilde;es com videoconfer&ecirc;ncia at&eacute; 8 pessoas - Sala n&ordm;15;</strong></span></li>\r\n	<li><span style="font-size:18px">- Sala de conv&iacute;vio/polivalente (sala partilhada) - Sala n&ordm;17;</span></li>\r\n	<li><span style="font-size:18px"><strong>- Audit&oacute;rio com quadro cer&acirc;mico e quadro interativo (videoprojetor inclu&iacute;do):</strong></span></li>\r\n	<li><span style="font-size:18px"><strong>&nbsp;capacita&ccedil;&atilde;o at&eacute; 50 pessoas - Salas n&ordm;27 e 28;</strong></span></li>\r\n	<li><span style="font-size:18px">- Copa&nbsp;(sala partilhada) - pequenas refei&ccedil;&otilde;es at&eacute; 16 pessoas;</span></li>\r\n	<li><span style="font-size:18px"><strong>- Incubadora de Neg&oacute;cios - at&eacute; 25 postos de trabalho quer em cowork ou individualizado;</strong></span></li>\r\n	<li><span style="font-size:18px">- &Aacute;trio para eventos com uma &aacute;rea aproximada de 125m&sup2;.</span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:22px"><strong>Promotor: </strong></span></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:18px">- Munic&iacute;pio de Torres Vedras.</span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:22px"><strong>Parceiros Fundadores:</strong></span></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><span style="font-size:18px">- ISCTE-IUL&nbsp;- Instituto Universit&aacute;rio de Lisboa;</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style="font-size:18px">- IPLeiria - Instituto Polit&eacute;cnico de Leiria;</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style="font-size:18px">- IEFP - Instituto do Emprego e Forma&ccedil;&atilde;o Profissional de Torres Vedras;</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style="font-size:18px">- Clube de Rob&oacute;tica do Agrupamento de Escolas de S&atilde;o Gon&ccedil;alo de Torres Vedras;</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style="font-size:18px">- CENFIM - Centro de Forma&ccedil;&atilde;o Profissional da Ind&uacute;stria Metal&uacute;rgica e Metalomec&acirc;nica.</span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><span style="font-size:22px"><strong>Incuba&ccedil;&atilde;o:</strong></span></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><span style="font-size:18px">- Torres INOV-E - Estufa Plataforma Cultural.</span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><span style="font-size:22px"><strong>Parceiros:</strong></span></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><span style="font-size:18px">- Lab Aberto - FAB LAB -&nbsp; como fazer quase tudo;</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style="font-size:18px">- ESCO - Escola de Servi&ccedil;os e Com&eacute;rcio do Oeste.</span></p>\r\n	</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtesp`
--

CREATE TABLE IF NOT EXISTS `tbtesp` (
  `id_tesp` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`id_tesp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tbtesp`
--

INSERT INTO `tbtesp` (`id_tesp`, `texto`) VALUES
(1, '<p style="text-align:center"><span style="font-size:36px"><strong>O que &eacute; um TeSP?</strong></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:20px">-<strong>&nbsp;</strong>Os CTeSP ou TESP (encontra-se estes 2 tipos de siglas em diferentes informa&ccedil;&otilde;es dispon&iacute;veis na Web), t&ecirc;m a dura&ccedil;&atilde;o de 2 anos, e atribui ao aluno um Diploma de T&eacute;cnico Superior Profissional. Salienta-se que o aluno frequentar&aacute; um est&aacute;gio de 1 semestre em uma empresa para aplica&ccedil;&atilde;o dos conhecimentos te&oacute;ricos e pr&aacute;ticos em contexto real.</span></p>\r\n\r\n<p style="text-align:justify"><strong><span style="font-size:26px">TeSP em activo no LabCenter:</span></strong></p>\r\n\r\n<h5><span style="font-size:24px">IPLeiria (3 cursos TeSP):</span></h5>\r\n\r\n<p style="text-align:justify"><span style="font-size:20px">- Programa&ccedil;&atilde;o de Sistemas de Informa&ccedil;&atilde;o;</span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:20px">- Apoio &agrave; Gest&atilde;o;</span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:20px">- Interven&ccedil;&atilde;o Social e Comunit&aacute;ria.</span></p>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entidades`
--

CREATE TABLE IF NOT EXISTS `tb_entidades` (
  `id_entidade` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`id_entidade`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_entidades`
--

INSERT INTO `tb_entidades` (`id_entidade`, `texto`) VALUES
(3, '<p style="text-align:justify"><span style="font-size:26px"><strong>6 entidades incubadas</strong>&nbsp;no Centro Hist&oacute;rico no Torres Vedras LabCenter.<strong> Pela 1&ordf; vez h&aacute; incuba&ccedil;&atilde;o por m&eacute;todo tradicional f&iacute;sico em Torres Vedras. </strong></span></p>\r\n\r\n<h5><span style="font-size:18px">IPLeiria (3 cursos TeSP):</span></h5>\r\n\r\n<ul>\r\n	<li style="text-align:justify"><span style="font-size:16px">- Programa&ccedil;&atilde;o de Sistemas de Informa&ccedil;&atilde;o;</span></li>\r\n	<li style="text-align:justify"><span style="font-size:16px">- Apoio &agrave; Gest&atilde;o;</span></li>\r\n	<li style="text-align:justify"><span style="font-size:16px">- Interven&ccedil;&atilde;o Social e Comunit&aacute;ria.</span></li>\r\n</ul>\r\n\r\n<h5><span style="font-size:18px">IEFP (4 cursos):</span></h5>\r\n\r\n<ul>\r\n	<li><span style="font-size:16px">- T&eacute;cnico Apoio Familiar e &agrave; Comunidade;</span></li>\r\n	<li><span style="font-size:16px">- Rececionista de Hotel;</span></li>\r\n	<li><span style="font-size:16px">- Contabilidade;</span></li>\r\n	<li><span style="font-size:16px">- Inform&aacute;tica.</span></li>\r\n</ul>\r\n\r\n<h5><span style="font-size:18px">ISCTE-IUL (com Laborat&oacute;rio de Fabrica&ccedil;&atilde;o Digital e):</span></h5>\r\n\r\n<ul>\r\n	<li><span style="font-size:16px">- Curso intensivo de Empreendedorismo e Inova&ccedil;&atilde;o;</span></li>\r\n	<li><span style="font-size:16px">- Concurso de ideias;</span></li>\r\n	<li><span style="font-size:16px">- Candidaturas PT2020.</span></li>\r\n</ul>\r\n\r\n<h5><span style="font-size:18px">LabAberto:</span></h5>\r\n\r\n<ul>\r\n	<li><span style="font-size:16px">- Semana da Ci&ecirc;ncia com Ardu&iacute;no e 3D;</span></li>\r\n	<li><span style="font-size:16px">- Drone Hexa;</span></li>\r\n	<li><span style="font-size:16px">- Aeromodelismo;</span></li>\r\n	<li><span style="font-size:16px">- BootCamp FabLab Nacional (julho).</span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:18px">â€‹â€‹Rob&oacute;tica:</span></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:16px">- &ldquo;Rob&oacute;tica para Todos&rdquo; - Formadora: F&aacute;tima Mira. P&aacute;scoa e F&eacute;rias Ver&atilde;o.</span></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`ID`, `nome`, `pw`) VALUES
(1, 'adminLBCenter', 'adminlbcenter');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
