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
			<input type="text" name="logradouro" value="<?=@$endereco['logradouro']?>">
				<br><br>

			Numero:<br>
			<input type="text" name="numero" value="<?=@$endereco['numero']?>">
				<br><br>
			Complemento:<br>
			<input type="text" name="complemento" value="<?=@$endereco['complemento']?>">
				<br><br>                               

			Bairro:<br>	
			<input type="text" name="bairro" value="<?=@$endereco['bairro']?>">
				<br><br>

			Cidade:<br>	
			<input type="text" name="cidade" value="<?=@$endereco['cidade']?>">
				<br><br>

			CEP:<br>	
			<input type="text" name="cep" value="<?=@$endereco['cep']?>">
				<br><br>

                        <br><br>

			<input type="checkbox" name="" required="">Li, aceito e concordo com as condições e os termos de uso
				<br>
			<input type="submit" name="vai" value="Cadastrar">	
		</form>
				<br>
				<br>