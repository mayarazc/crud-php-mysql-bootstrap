<?php
session_start();
require("config.php");
require("../Model/Livro.php");

$cod = $_GET["cod"];

$livro = new Livro();
$dado = $livro->lerByID($cod);

$css = "css/editar-livro.css";

criarTopo($css);

  $corpo = '<main role="main">

  <form class="container d-flex flex-column formulario" method="POST" action="../Controller/editarLivro.php?cod='.$dado[0]["cod"].'">

  <h1 class="display-6 text-center mb-4">Editar</h1>

      <div class="form-group mb-4">
        <label>Título do Livro</label>
        <input type="text" class="form-control" name="titulo" value="'.$dado[0]["titulo"].'" required>
      </div>

      <div class="form-group">
        <label>Autor</label>
        <input type="text" class="form-control" name="autor" value="'.$dado[0]["autor"].'" required>
      </div>

      <div class="form-group form-radios">

          <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Lido">
              <label class="form-check-label">Lido</label>
          </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Quero Ler">
              <label class="form-check-label">Quero Ler</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Lendo">
              <label class="form-check-label">Lendo</label>
            </div>
      </div>

      <button type="submit" class="btn mt-4 submit"><i class="fa-solid fa-check"></i></button>
  </form>';

  criarCorpo($corpo);

  criarRodape();


?>
