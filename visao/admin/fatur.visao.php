<?php
if (ehPost()) {
	foreach ($errors as $erro) {
		echo "$erro<br>";
	}
}
?>

<form method="POST" action="" class="box">
    <h2>Faturamento da Loja</h2>

    <select name="tipo" id="pedido" class="formulario-select-option">
        <option value="S">Semanal</option>
        <option value="M">Mensal</option>
        <option value="A">Anual</option>
    </select>

    <input type="submit" name="enviar" value="buscar">
        <br>
</form>