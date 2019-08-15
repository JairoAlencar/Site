<!DOCTYPE html> 
<html>
<head>
  <title>Cadastro</title> 
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="./publico/css/css.css">  
  <link rel="shoutcut icon" href="publico/imagens/icone.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">  
</head>

<body>
<?php
    if(ehPost()){
      foreach($erros as $erro){
        echo "$erro<br>";
      }
    }
?> 	

	

	<form method="post" action="" class="box">
		<h2>Categoria</h2>
		Descrição:<br>
		<input type="text" name="descricao" placeholder="Ex: Samsung" value="<?=@$categoria['descricao']?>">
		<br>
		<br>
		<input type="submit" name="enviar" value="Enviar">
		<br>
		<br>
	</form>
</body>
</html>	