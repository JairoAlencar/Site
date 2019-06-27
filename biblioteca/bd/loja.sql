DROP DATABASE IF EXISTS loja;
CREATE DATABASE loja;
USE loja;


DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`idcategoria`)
);


DROP TABLE IF EXISTS `cupom`;
CREATE TABLE IF NOT EXISTS `cupom` (
  `idcupom` int(11) NOT NULL AUTO_INCREMENT,
  `nomecupom` varchar(60) NOT NULL,
  `desconto` int(11) NOT NULL,
  PRIMARY KEY (`idcupom`)
);


DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `idendereco` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `logradouro` varchar(60) NOT NULL,
  `numero` varchar(7) NOT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `bairro` varchar(60) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `cep` varchar(60) NOT NULL,
  PRIMARY KEY (`idendereco`),
  KEY `idusuario` (`idusuario`)
);

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `idestoque` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  PRIMARY KEY (`idestoque`),
  KEY `id_produto` (`id_produto`)
);

DROP TABLE IF EXISTS `log_produto`;
CREATE TABLE IF NOT EXISTS `log_produto` (
  `ID_LOG` int(11) NOT NULL AUTO_INCREMENT,
  `TABELA` varchar(45) NOT NULL,
  `USUARIO` varchar(45) NOT NULL,
  `DATA_HORA` datetime NOT NULL,
  `ACAO` varchar(45) NOT NULL,
  `DADOS` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID_LOG`)
);

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `idendereco` int(11) NOT NULL,
  `datacompra` date NOT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `idusuario` (`idusuario`),
  KEY `idendereco` (`idendereco`)
);

DROP TABLE IF EXISTS `pedido_produto`;
CREATE TABLE IF NOT EXISTS `pedido_produto` (
  `idproduto` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`quantidade`),
  KEY `idproduto` (`idproduto`),
  KEY `idpedido` (`idpedido`)
);

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `preco` double NOT NULL,
  `nomeproduto` varchar(30) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `imagem` varchar(60) NOT NULL,
  `estoque_minimo` int(11) DEFAULT NULL,
  `estoque_maximo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  FOREIGN KEY(idcategoria) REFERENCES categoria(idcategoria) ON UPDATE CASCADE ON DELETE CASCADE
);

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeusuario` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `cpf` varchar(60) NOT NULL,
  `datadenascimento` varchar(10) NOT NULL,
  `sexo` varchar(60) NOT NULL,
  `tipousuario` varchar(5) NOT NULL,
  PRIMARY KEY (`idusuario`)
);
