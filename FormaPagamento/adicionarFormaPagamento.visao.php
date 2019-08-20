<!DOCTYPE html> 
<html>
<head>
  <title></title> 
  <link rel="stylesheet" type="text/css" href="./publico/css/pagprin">  
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

	<h2>Categoria</h2>

	<form method="post" action="">
		Descrição:<br>
		<input type="text" name="descricao" placeholder="Ex: Samsung" value="<?=@$FormaPagamento['descricao']?>">
		<br>
		<br>
		<input type="submit" name="enviar" value="Enviar">
		<br>
		<br>
	</form>
</body>
</html>	