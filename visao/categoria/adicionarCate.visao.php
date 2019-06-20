<?php
    if(ehPost()){
      foreach($erros as $erro){
        echo "$erro<br>";
      }
    }
?> 	

	<h2>Categoria</h2>

	<form method="post">
		Descrição:<br>
		<input type="text" name="descricao" placeholder="">
		<br>
		<br>
		<input type="submit" name="enviar" value="Enviar">
		<br>
		<br>
	</form>