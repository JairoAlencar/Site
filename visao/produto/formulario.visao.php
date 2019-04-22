<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Produto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>


  <form action="" method="post">
      <input type="text" class="form-control" id="name" placeholder="Nome do produto" name="nome_produto">
        <br><br

      <label for="pagamento">Forma de Pagamento:</label>
                  <br>
                  <input type="radio" class="form-check-input" id="exampleCheck1" name="pagamento">
                    <label class="form-check-label" for="exampleCheck1" id="exampleCheck1">A vista</label>
                  <br>
                  <input type="radio" class="form-check-input" id="exampleCheck2" name="pagamento">
                    <label class="form-check-label" for="exampleCheck2" id="exampleCheck2">Parcelado</label>
                  <br>
                  <input type="radio" class="form-check-input" id="exampleCheck3" name="pagamento">
                    <label class="form-check-label" for="exampleCheck3" id="exampleCheck3">Combinar</label>
                  <br><br>
                  
                  <label for="price" id="preco">preco: <b id="rs">R$</b></label>
                    <input type="number" id="price" name="price" min="1" max="100000000" step=".01" name="preco">


                  <div class="col-sm-12">
      <nav class="navbar bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Ficha técnica ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="ficha_tec"></textarea>
              </div>
            </li>  
          </ul>
        </div>  
      </nav>
    </div>

    <div class="col-sm-12">
              <a class="navbar-brand" href="#">descrição ></a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar2">
          <ul class="navbar-nav">
            <li class="nav-item">
              <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="descrição"></textarea>
              </div>
            </li>  
          </ul>
        </div>  
      </nav>
    </div>

    <div class="col-sm-12">
      <nav class="navbar bg-dark navbar-dark">
        <a class="navbar-brand" href="#">contato do vendedor ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar3">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar3">
          <ul class="navbar-nav">
            <li class="nav-item">
              <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="contato_vendedor"></textarea>
              </div>
            </li>  
          </ul>
        </div>  
      </nav>
    </div>

    <div class="col-sm-12">
      <br><br><br>
      <div class="checkbox">
        <label><input type="checkbox">Li, aceito e concordo com as condições e os termos de uso</label>
      </div>
      <a href="" style="margin-left: 1%;">Condições e termos de uso</a>
    </div>
    
    <div class="col-sm-11"></div>
    
        <input type="button" onclick="alert('Seu cadastro foi realizado!')" value="Cadastrar" id="botao">

  </form>    
</body>
</html>