<?php

function criarTopo($css){
    $topo = '<!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://kit.fontawesome.com/8a1c76cdfb.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
      <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
      <link rel="stylesheet" href="'.$css.'">
      <title>Readmin</title>
    </head>
    
    <body>
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 mb-4">
        <a href="index.php"
          class="navbar-brand d-flex align-items-center col-md-2 mb-2 mb-md-0 text-decoration-none logo">Readmin</a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link pr-3 px-3">Início</a></li>
          <li><a href="leituras.php" class="nav-link px-3">Minhas Leituras</a></li>
          <li><a href="avaliacao.php" class="nav-link px-3">Avaliações</a></li>
        </ul>
    
        <div class="col-md-3 text-end">
          <a href="login.php"><button type="button" class="btn btn-outline-dark me-2"> Login </button></a>
          <a href="registrar.php"><button type="button" class="btn entrar"> Registrar </button></a>
          <a href="configurarUsuario.php"><button type="button" class="btn"><i class="fa-solid fa-gear"></i></button></button></a>
        </div>
      </header>';

    echo $topo;
}

function criarCorpo($corpo){
    echo $corpo;
}

function criarRodape(){
    $rodape = '<footer class="footer py-3 mt-4">
    <p class="text-center text-muted">&copy; Todos os Direitos Reservados, 2022</p>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    </body>

    </html>';

    echo $rodape;
}
?>