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