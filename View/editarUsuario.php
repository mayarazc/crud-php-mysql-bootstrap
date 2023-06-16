<?php
session_start();
require("config.php");
require("../Model/Usuario.php");

$cod = $_GET["cod"];


if($_SESSION["logado"] == 1){
  $css = "css/usuario.css";

  criarTopo($css);

    $corpo = '<main role="main">
    <form class="container d-flex flex-column formulario" method="POST" 
    action="../Controller/editarUsuario.php?cod='.$_SESSION["codLogado"].'">

    <section class="container text-center">
    <h1 class="display-6 mb-lg-3 mt-3">Editar Perfil</h1>
      <img src="../View/imagens/user.svg" class="usuario" alt="Usuário">
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="staticEmail" value="'.$_SESSION["login"].'" name="login">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" value="'.$_SESSION["senha"].'" name="senha">
    </div>
  </div>

  <button type="submit" class="btn mt-4 botao">Finalizar Edição</button>
    </section>
  </form>
    </main>';

criarCorpo($corpo);

criarRodape();

}

?>