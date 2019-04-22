<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">

        <!--css do site de add produto!-->
        <link rel="stylesheet" type="text/css" href="./publico/css/cadastro.css">
          <link rel="shoutcut icon" href="imagens/icone.ico">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
          <style>
          /* Make the image fully responsive */
          .carousel-inner img {
              width: 100%;
              height: 100%;
          }
          </style>
    </head>
    <body class="container">

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

    </body>
</html>
