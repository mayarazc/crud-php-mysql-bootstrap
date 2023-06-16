<?php
session_start();
require("config.php");

$css = "css/formulario.css";

criarTopo($css);

$corpo = '<main role="main">
<form class="container d-flex flex-column" action="../Controller/registrarUsuario.php" method="POST">
    <h1 class="mb-lg-4 text-center">Faça seu Registro</h1>
    <div class="form-group mb-4">
      <label>Usuário:</label>
      <input type="text" class="form-control" name="login" placeholder="Informe seu nome de usuário">
    </div>
    <div class="form-group">
      <label>Senha:</label>
      <input type="password" class="form-control" name="senha" placeholder="Informe sua senha">
    </div>
    <button type="submit" class="btn btn-primary mt-4 botao">Entrar</button>
</form>
</main>';

criarCorpo($corpo);

criarRodape();
?>