CREATE SCHEMA IF NOT EXISTS `db_extreme` DEFAULT CHARACTER SET latin1 ;
USE `db_extreme` ;

CREATE TABLE IF NOT EXISTS `cadastrodocurso` (
  `idcadastrocurso` int(11) NOT NULL AUTO_INCREMENT,
  `datadainscricao` date NOT NULL,
  `mensagem` varchar(300) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  PRIMARY KEY (`idcadastrocurso`),
  KEY `fk_CadastroDoCurso_usuario1_idx` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `cadastrodocurso`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL,
  `mensagem` varchar(300) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `datahora` datetime DEFAULT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_Comentário_usuario1_idx` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentario`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(45) NOT NULL,
  `vagas` int(11) NOT NULL,
  `datainicio` date NOT NULL,
  `datafim` date NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idcurso`),
  KEY `fk_curso_usuario1_idx` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `curso`, `vagas`, `datainicio`, `datafim`, `idusuario`) VALUES
(3, 'Skate', 3, '2019-12-01', '2019-12-07', 1),
(9, 'Paraquedismo', 5, '2019-12-01', '2019-12-07', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(45) NOT NULL,
  PRIMARY KEY (`idperfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idperfil`, `perfil`) VALUES
(1, 'Professor'),
(2, 'Aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `mensagem` varchar(300) NOT NULL,
  `preco` float NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `curso_idcurso` int(11) NOT NULL,
  PRIMARY KEY (`idpost`),
  KEY `fk_Post_usuario1_idx` (`usuario_idusuario`),
  KEY `fk_post_curso1_idx` (`curso_idcurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`idpost`, `mensagem`, `preco`, `estado`, `cidade`, `usuario_idusuario`, `curso_idcurso`) VALUES
(6, 'teste post', 25.3, 'Distrito Federal', 'BrasÃ­lia', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(60) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `datadenascimento` date NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `perfil` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_Perfil1_idx` (`perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nomecompleto`, `email`, `senha`, `datadenascimento`, `cpf`, `estado`, `cidade`, `perfil`) VALUES
(1, 'edimar', 'nogueiraguerra@gmail.com', '202cb962ac59075b964b07152d234b70', '1974-07-27', '9999', 'brasilia', 'Brasília', 1),
(2, 'jonatas', 'jonatas.spessoa@hotmail.com', '580514becc1216a46a224e06b6460669', '1997-10-18', '45679815652', 'DF', 'Brasília', 1),
(3, 'Jonatas Santos Pessoa', 'jonatas.spessoa@hotmail.com', '760d8eba579a22f6bf0ef41f4718c914', '1997-10-18', '06373109186', 'DF', 'Brasília', 1),
(4, 'Illana Nogueira', 'illana@gmail.com.br', '202cb962ac59075b964b07152d234b70', '2004-11-05', '646.597.201-87', 'Distrito Federal', 'Brasília', 2),
(5, 'Pedro Bo', 'pedro@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-11-25', '4585855', 'Distrito Federal', 'Brasília', 2),
(6, 'Tiago Rodrigues', 'tiago@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-11-20', '646.597.201-87', 'Distrito Federal', 'Brasília', 2),
(7, 'marta', 'marta@gmail.com.br', '202cb962ac59075b964b07152d234b70', '2019-11-26', '646.597.201-87', 'Distrito Federal', 'Brasília', 2);


insert into post (mensagem,preco,estado,cidade,usuario_idusuario,curso_idcurso)
values ('aqui', '80.00', 'Brasilia','Ceilandia sul','2','3');