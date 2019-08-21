<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<meta charset="utf-8"> 
 	<link rel="stylesheet" type="text/css" href="./publico/css/css.css">  
 	<link rel="shoutcut icon" href="publico/imagens/icone.ico">  
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
  	<style>
  		tr:nth-child(even) {
 		 	background-color: #dddd;
		}
  	</style> 
</head>
<body>

	<h1>Carrinho de Compras</h1>

	<TABLE class="table" style="width: 75%; float: left;">
		<thead>
			<tr>
				<th>Produto</th>
				<th>Preço</th>
				<th>Entrega</th>
				<th>Quantidade</th>
			</tr>	
		</thead>

		<tr>
			<td>Teste</td>
			<td>100.00</td>
			<td>Semana que vem</td>
			<td>1000</td>
		</tr>
		<tr>
			<td>Teste 2</td>
			<td>120.00</td>
			<td>um ano</td>
			<td>10</td>
		</tr>
	</TABLE>
	
<!--arrumar o class para rodar o css do botão e deixar masis organizado essa parte!-->
	<div class="" style="float: right; width: 23%; margin-left: 2%; background: #f1f1f1; color: #3498db; margin-bottom: 3%;">
		<h3 style="color: black">Detalhes do pedido</h3>

		<h6>Subtotal<!--colocar a quantidade de produtos!--></h6>
		<h6>Frete</h6>

			<div style="border-top: 1.4px solid gray; border-bottom: 1.4px solid gray; margin-bottom:2%;">

				<h5 style="color: black">Total</h5>

				<h6>R$ 666.99</h6>	
				
			</div>

		<input type="submit" name="comprar" value=" Continuar">
		<!--Provavelmente esse botão ira mandar para a forma de pagamento!-->
		<h6 style="float: left; color: black; font-size: 80%;">Possui algum cupom? utilize-o na próxima etapa</h6>
		
	</div>	

	<div style="float: left; color: black;">
		<h5>Calculu o frete e prazo</h5>
			<input type="text" name="frete" placeholder="00000-000">
		<input type="submit" name="frete" value="Calcular">
	</div>

</body>
</html>