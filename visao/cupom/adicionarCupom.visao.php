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

	<h2>Cupom</h2>

	<form method="post" action="">
		Nome do cupom:<br>
		<input type="text" name="nomecupom" placeholder="Ex: " value="<?=@$cupom['nomecupom']?>">
		<br>
                Desconto:
                <br>
                <input type="text" name="desconto" value="<?=@$cupom['desconto']?>">
		<br>
		<input type="submit" name="enviar" value="Enviar">
		<br>
		<br>
	</form>
</body>
</html>	