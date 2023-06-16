<?php
session_start();
require("config.php");

$css = "css/adicionar-livro.css";

criarTopo($css);

  $corpo = '<main role="main" class="main">

  <form class="container d-flex flex-column formulario" action="../Controller/registrarLivro.php" method="POST">
    <h1 class="display-6 text-center mb-4">Adicionar Livro</h1>
    
      <div class="form-group mb-4">
        <label>Título do Livro</label>
        <input type="text" class="form-control" name="titulo" required>
      </div>

      <div class="form-group">
        <label>Autor</label>
        <input type="text" class="form-control" name="autor" required>
      </div>

      <div class="form-group form-radios">

          <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Lido">
              <label class="form-check-label">Lido</label>
          </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Quero Ler" checked>
              <label class="form-check-label">Quero Ler</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Lendo">
              <label class="form-check-label">Lendo</label>
            </div>
      </div>

      <button type="submit" class="btn mt-4"><i class="fa-solid fa-check"></i></button>
  </form>
  </main>';

  criarCorpo($corpo);

  criarRodape();


?>
