<!DOCTYPE html> 
<html>
<head>
  <title></title> 
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

	<h2>Cupom</h2>

	<form method="post" action="" class="box">
		Nome do cupom:<br>
		<input type="text" name="nomecupom" placeholder="Ex: Oferta de natal" value="<?=@$cupom['nomecupom']?>">
		<br>
                Desconto:
                <br>
                <input type="number" name="desconto" max="100" placeholder="(desconto em %)" value="<?=@$cupom['desconto']?>">
		<br>
		<input type="submit" name="enviar" value="Enviar">
		<br>
		<br>
	</form>
</body>
</html>	