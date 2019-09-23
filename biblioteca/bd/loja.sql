DROP DATABASE IF EXISTS loja;
CREATE DATABASE loja;
USE loja;


CREATE TABLE IF NOT EXISTS usuario(
    idusuario INT(11) NOT NULL AUTO_INCREMENT, 
    nomeusuario VARCHAR(60) NOT NULL,
    email VARCHAR(40) NOT NULL,
    senha VARCHAR(25) NOT NULL,   
    cpf BIGINT(15) NOT NULL,
    datadenascimento VARCHAR(10) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    tipousuario VARCHAR(5) NOT NULL,
    PRIMARY KEY(idusuario)
);

CREATE TABLE IF NOT EXISTS categoria(
    idcategoria BIGINT(11) NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(30) NOT NULL,
    PRIMARY KEY(idcategoria)
);

CREATE TABLE IF NOT EXISTS cupom(
    idcupom INT(8) NOT NULL AUTO_INCREMENT,
    nomecupom VARCHAR(20) NOT NULL,
    desconto INT(4) NOT NULL,
    PRIMARY KEY(idCupom)
);

CREATE TABLE IF NOT EXISTS log_produto(
    Id_Log BIGINT(11) NOT NULL AUTO_INCREMENT,
    tabela VARCHAR(45) NOT NULL,
    usuario VARCHAR(45) NOT NULL,
    data_hora DATETIME NOT NULL,
    acao VARCHAR(45) NOT NULL
    dados VARCHAR(1000) NOT NULL,
    PRIMARY KEY(ID_Log)
);

CREATE TABLE IF NOT EXISTS produtos(
    idproduto BIGINT(11) NOT NULL AUTO_INCREMENT,
    categoria BIGINT(11) NOT NULL,
    preco DOUBLE NOT NULL,
    nomeproduto VARCHAR(30) NOT NULL,
    descricao VARCHAR(800) NOT NULL,
    imagem VARCHAR(200) NOT NULL,
    estoque_minimo BIGINT(11) NOT NULL,
    estoque_maximo BIGINT(11) NOT NULL,
    quant_estoque INT NOT NULL,
    PRIMARY KEY(idproduto),
    FOREIGN KEY(categoria) REFERENCES categoria(idcategoria) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS endereco(
    idendereco INT(11) NOT NULL AUTO_INCREMENT,
    idusuario INT(11) NOT NULL,
    logradouro VARCHAR(50) NOT NULL,
    numero VARCHAR(7) NOT NULL,
    complemento VARCHAR(20),
    bairro VARCHAR(30) NOT NULL,
    cidade VARCHAR(30) NOT NULL,
    cep VARCHAR(9) NOT NULL,
    PRIMARY KEY(idEndereco),
    FOREIGN KEY(idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS FormaPagamento(
    idFormaPagamento INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(45) NOT NULL,
    PRIMARY KEY(idFormaPagamento)
);

CREATE TABLE IF NOT EXISTS  pedido (
    idPedido BIGINT(11) NOT NULL AUTO_INCREMENT,
    idusuario BIGINT(11) NOT NULL,
    idFormaPagamento INT NOT NULL,
    dataCompra DATE NOT NULL,
    PRIMARY KEY(idPedido),
    FOREIGN KEY(idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(idFormaPagamento) REFERENCES FormaPagamento(idFormaPagamento) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS pedido_produto(
    idPedido BIGINT(11) NOT NULL,
    idProduto BIGINT(11) NOT NULL,
    quantidade INT(5) NOT NULL,
    PRIMARY KEY(idProduto, idPedido),
    FOREIGN KEY(idProduto) REFERENCES produto(idProduto) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(idPedido) REFERENCES pedido(idPedido) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS estoque(
    idEstoque BIGINT(11) NOT NULL AUTO_INCREMENT,
    idProduto BIGINT(11) NOT NULL,
    quantidade INT(8) NOT NULL,
    PRIMARY KEY(idEstoque),
    FOREIGN KEY(idProduto) REFERENCES produto(idProduto) ON DELETE CASCADE ON UPDATE CASCADE
);