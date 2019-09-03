<?php
    if(ehPost()){
      foreach($erros as $erro){
        echo "$erro<br>";
      }
    }
?> 	

	

	<form method="post" action="" class="box">
		<h2>Categoria</h2>
		Descrição:<br>
		<input type="text" name="descricao" placeholder="Ex: Samsung" value="<?=@$categoria['descricao']?>">
		<br>
		<br>
		<input type="submit" name="enviar" value="Enviar">
		<br>
		<br>
	</form>