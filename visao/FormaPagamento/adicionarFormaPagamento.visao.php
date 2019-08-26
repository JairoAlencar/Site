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

	<h2>Forma de Pagamento</h2>

	<form method="post" action="" class="box">
		Descrição:<br>
		<input type="text" name="descricao" placeholder="Ex: Boleto" value="<?=@$FormaPagamento['descricao']?>">
		<br>
		<br>
		<input type="submit" name="enviar" value="Enviar">
		<br>
		<br>
	</form>
</body>
</html>	