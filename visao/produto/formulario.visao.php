<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Produto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

  <form action="" method="post" class="">
    <input type="text" name="nome_produto" placeholder="Nome do Produto">
      <br>
    <input type="radio" value="A vista" name="pagamento">A vista
      <br>
    <input type="radio" value="Parcelado" name="pagamento">Parcelado
      <br>
    <label for="dinheiro">R$</label>  
    <input type="money" name="valor" placeholder="Valor">
      <br>
    Ficha técnica
      <textarea name="ficha_tec"></textarea>
        <br>
    Descrição
      <textarea name="descricao"></textarea>
        <br>
    Contato Vendedor
      <textarea name="contato_vendedor"></textarea>
        <br>
    <input type="checkbox" name="" required=""> Li, aceito e concordo com as condições e os termos de uso
      <br>
    <input type="submit" name="vai na fé" value="Adicionar">        
  </form>    
</body>
</html>