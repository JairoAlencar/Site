
	<form action="" method="post">

			<h1>Cadastro</h1>

			<input type="text" name="nome" placeholder="Nome">
			<input type="text" name="sobrenome" placeholder="Sobrenome"> 
				<br>
			<input type="text" name="email" placeholder="Email">
			<input type="password" name="senha" placeholder="Senha">
				<br>
			Sexo:
			<input type="radio" name="sexo" value="Masculino" checked="checked">Masculino
			<input type="radio" name="sexo" value="Feminino">Feminino
				<br>
			<input type="text" name="cpf" placeholder="CPF">
			<input type="date" name="nasc" placeholder="Nascimento">
				<br> 
			<input type="text" name="cidade" placeholder="Cidade">	
			<input type="text" name="estado" placeholder="Estado">	
				<br>
			<input type="checkbox" name="">Desejo receber as ofertas por email
				<br>
			<input type="checkbox" name="" required="">Li, aceito e concordo com as condições e os termos de uso
				<br>
			<input type="submit" name="vai" value="Cadastrar">	
		</form>


<?php
	if(ehPost()){
		foreach ($erros as $erro){
			echo "$erro<br>";
		}
	}
?>