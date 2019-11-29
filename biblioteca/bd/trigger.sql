/*Dimiuir quantidade de um produto após a venda*/
DROP TRIGGER IF EXISTS tgr_quant;

DELIMITER $$
CREATE TRIGGER tgr_quant
	AFTER INSERT ON pedido
		FOR EACH ROW
			BEGIN
				UPDATE produtos SET quant_estoque = quant_estoque - NEW.quant_estoque WHERE produtos.idproduto = NEW.idproduto;
			END $$
DELIMITER ;

/*Salvar pedido com data da compra*/

DROP TRIGGER IF EXISTS tgr_dataVenda

DELIMITER $$

CREATE TRIGGER tgr_dataVenda
	AFTER INSERT ON produtos
		FOR EACH ROW
			BEGIN
				SET @dadosNovos = CONCAT(NER.idproduto, '#', NEW.descricao, '#', NEW.quant_estoque);
				SET @dataProduto = SYSDATE();
				SET @usuario = CURRENT_USER();
					INSERT INTO pedido VALUES (NULL, @usuario, @formapagamento, "INSERT","-#-#-", @dadosnovos);
			END$$	
DELIMITER ;	

