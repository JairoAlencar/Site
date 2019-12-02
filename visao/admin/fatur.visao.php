<?php
if (ehPost()) {
	foreach ($errors as $erro) {
		echo "$erro<br>";
	}
}
?>

<form method="POST" action="">
    <h1>Faturamento IFTech</h1>

    <select name="tipo" id="pedido" class="formulario-select-option">
        <option value="S">Semanal</option>
        <option value="M">Mensal</option>
        <option value="A">Anual</option>
    </select>

    <button type="submit" class="button-fatura"> Enviar </button><br>
</form>