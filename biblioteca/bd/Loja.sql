DROP DATABASE IF EXISTS Loja;
CREATE DATABASE Loja;

USE Loja;

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  PRIMARY KEY (`idcategoria`)
);

DROP TABLE IF EXISTS `cupom`;
CREATE TABLE `cupom` (
  `idcupom` int(11) NOT NULL AUTO_INCREMENT,
  `nomecupom` varchar(60) NOT NULL,
  `desconto` int(11) NOT NULL,
  PRIMARY KEY (`idcupom`)
);

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE `endereco` (
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
CREATE TABLE `estoque` (
  `idestoque` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  PRIMARY KEY (`idestoque`),
  KEY `id_produto` (`id_produto`)
);

DROP TABLE IF EXISTS `log_produto`;
CREATE TABLE `log_produto` (
  `ID_LOG` int(11) NOT NULL AUTO_INCREMENT,
  `TABELA` varchar(45) NOT NULL,
  `USUARIO` varchar(45) NOT NULL,
  `DATA_HORA` datetime NOT NULL,
  `ACAO` varchar(45) NOT NULL,
  `DADOS` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID_LOG`)
);

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE `pedido` (
  `IDPedido` int(10) unsigned NOT NULL,
  `IDVendedor` int(10) unsigned NOT NULL,
  `IDCliente` int(10) unsigned NOT NULL,
  `PrazoEntrega` int(10) unsigned NOT NULL,
  PRIMARY KEY (`IDPedido`),
  KEY `IDVendedor` (`IDVendedor`),
  KEY `IDCliente` (`IDCliente`)
);

DROP TABLE IF EXISTS `pedido_produto`;
CREATE TABLE `pedido_produto` (
  `idproduto` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`quantidade`),
  KEY `idproduto` (`idproduto`),
  KEY `idpedido` (`idpedido`)
);

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `preco` double NOT NULL,
  `nomeproduto` varchar(30) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `tamanho` varchar(60) NOT NULL,
  `imagem` varchar(60) NOT NULL,
  `sexo` varchar(60) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `estoque_minimo` int(11) DEFAULT NULL,
  `estoque_maximo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
);

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
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

ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8

INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('admin', '123', 'admin@admin', 'admin');
INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('usuario', '123', 'usuario@usuario', 'usuario');
