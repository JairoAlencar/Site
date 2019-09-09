<!DOCTYPE html> 
<html>
<head>
  <title></title> 
  <meta charset="utf-8"> 
  <link rel="stylesheet" type="text/css" href="./publico/css/css.css">  
  <link rel="shoutcut icon" href="publico/imagens/icone.ico">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">  
</head>

<?php
	if(ehPost()){
		foreach ($erros as $erro){
			echo "$erro<br>";
		}
	}
?>
                <form action="" method="post" class="box">
			<h1>Cadastro</h1>
			Logradouro:<br>
			<input type="text" name="logradouro" placeholder="Ex: Rua João da Silva" value="<?=@$endereco['logradouro']?>">
				<br><br>

			Numero:<br>
			<input type="number" name="numero" min="1" placeholder="Ex: 130" value="<?=@$endereco['numero']?>">
				<br><br>
			Complemento:<br>
			<input type="text" name="complemento" placeholder="Ex: Casa" value="<?=@$endereco['complemento']?>">
				<br><br>                               

			Bairro:<br>	
			<input type="text" name="bairro" placeholder="Ex: Monte Verde" value="<?=@$endereco['bairro']?>">
				<br><br>

			Cidade:<br>	
			<input type="text" name="cidade" placeholder="Ex: Pindamonhangaba" value="<?=@$endereco['cidade']?>">
				<br><br>

			CEP:<br>	
			<input type="text" name="cep" placeholder="Ex: 12841-666" value="<?=@$endereco['cep']?>">
				<br><br>

                        <br><br>

			<input type="checkbox" name="" required="">Li, aceito e concordo com as condições e os termos de uso
				<br>
			<input type="submit" name="vai" value="Cadastrar">	
		</form>
				<br>
				<br>