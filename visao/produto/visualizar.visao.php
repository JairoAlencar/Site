<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Produto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="add_produto.css">
	<link rel="shoutcut icon" href="imagens/icone.ico">
</head>
<body>

	<div id="topo" style="background: black; height: 88px;">
				<div id="logo" class="col-4" style="margin-left:43%;">
					<a href="index.html" id="logo" >
						<img src="imagens/Logo.PNG" style="margin-top: 2%;">
					</a>
				</div>
	</div>

	<form action="" method="post" class="">
		<input type="text" name="nome_p" placeholder="Nome do Produto">
			<br>
		<input type="radio" name="pagamento">A vista
			<br>
		<input type="radio" name="pagamento">Parcelado
			<br>
		<label for="dinheiro">R$</label>	
		<input type="money" name="valor" placeholder="Valor">
			<br>
		Ficha técnica
			<textarea></textarea>
				<br>
		Descrição
			<textarea></textarea>
				<br>
		Contato Vendedor
			<textarea></textarea>
				<br>
	    <div class="col-sm-4">
	      <form action="" method="post" enctype="multipart/form-data">
	        <input type="file" name="arquivos[]" multiple>
	        <input type="submit" value="Enviar">
	      </form>  
	    </div>
		<input type="checkbox" name="">	Li, aceito e concordo com as condições e os termos de uso
			<br>
		<input type="submit" name="vai na fé" value="Adicionar">				
	</form>

</body>
</html>