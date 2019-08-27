<!DOCTYPE html> 
<html>
<head>
  <title></title> 
  <meta charset="utf-8"> 
  <link rel="stylesheet" type="text/css" href="./publico/css/css.css">  
  <link rel="shoutcut icon" href="publico/imagens/icone.ico">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">   
</head>

		<h2>Detalhes do Endereço</h2>
                
        <p>ID endereço: <?=$endereco['idendereco']?> </p>
		<p>ID cliente: <?=$endereco['idusuario']?> </p>
		<p>Logradouro: <?=$endereco['logradouro']?> </p>
		<p>Numero: <?=$endereco['numero']?> </p>
		<p>Bairro: <?=$endereco['bairro']?> </p>
		<p>Cidade: <?=$endereco['cidade']?> </p>
		<p>CEP: <?=$endereco['cep']?> </p>

		<a href="./endereco/listarEndereco">Voltar</a>