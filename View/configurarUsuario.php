<?php
session_start();
require("config.php");
require("../Model/Usuario.php");


if($_SESSION["logado"] == 1){
  $css = "css/usuario.css";

  criarTopo($css);

  $corpo = '<main role="main">
  <section class="container text-center">
    <div class="container py-4">
      <h1 class="display-6 mb-lg-3 mt-3">Gerenciar Perfil</h1>
      <img src="../View/imagens/user.svg" class="usuario" alt="Usuário">

      <div class="container dados">
      <p><span>Login: </span>'.$_SESSION["login"].'</p>
      <p><span>Senha: </span> <i class="fa-solid fa-lock"></i></p>
      </div>

      <div class="container botoes">
        <a href="editarUsuario.php?cod='.$_SESSION["codLogado"].'"><button type="button" class="btn btn-outline-dark me-2"> Editar</button></a>
        <a href="../Controller/encerrarSessao.php"><button type="button" class="btn btn-outline-dark me-2"> Sair</button></a>
        <a href="../Controller/deletarUsuario.php?cod='.$_SESSION["codLogado"].'"><button type="button" class="btn btn-outline-dark me-2"> Deletar Conta </button></a>
      </div>

    </div>
  </section>
  </main>';

criarCorpo($corpo);

criarRodape();

} else {
  header("Location: login.php");
}

?>