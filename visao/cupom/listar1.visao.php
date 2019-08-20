<!DOCTYPE html> 
<html>
<head>
  <title></title> 
  <link rel="stylesheet" type="text/css" href="./publico/css/pagprin">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">  
</head>
<body>

	<h2>Detalhes da Categoria</h2>

		<p>Id: <?=$cupom['idcupom']?> </p>
		<p>Nome do cupom: <?=$cupom['nomecupom']?> </p>
                <p>Desconto: <?=$cupom['desconto']?> </p>

		<a href="./Cupom/listarCupom">Voltar</a>

</body>
</html>		