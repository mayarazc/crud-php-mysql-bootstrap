<?php
session_start();
require("config.php");
require("../Model/Avaliacao.php");

if($_SESSION["logado"] == 1){
  
  $css = "css/leituras.css";

  criarTopo($css);

  $corpo = '<main role="main">
  <section class="container">
    <div class="container mt-2 py-5">
      <h1 class="display-6 mb-lg-3">Olá, '.$_SESSION["login"].'.</h1>
      <p>Avalie seus livros favoritos aqui, adicionando estrelas e fazendo resenhas. Seja criativo! Você também pode editar, deletar ou pesquisar uma avaliação já feita.
      </p>

        <button type="button botao" class="btn px-3 py-2 mt-2"><a href="../View/registrarAvaliacao.php" class="botao"><i class="fa-solid fa-plus"></i> Adicionar</a></button>   
    </div>

    <div class="container py-3 mt-5">
      <img src="imagens/avaliacao.svg" alt="Ilustração">
    </div>
  </section>

    <div class="container">
    <table class="table table-sm mt-5">
      <thead>
        <tr>
          <th scope="col">Título</th>
          <th scope="col" class="text-center">Estrelas</th>
          <th scope="col" class="text-center">Review</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>

      <tbody>';

        criarCorpo($corpo);

        $dados = Avaliacao::ler();

          foreach($dados as $dado){
            echo "<tr>";
            echo "<td>".$dado["titulo"]."</td>";
            echo "<td class='text-center'>".$dado["qntdEstrelas"]."&#9733</td>";
            echo "<td>".$dado["review"]."</td>";
            echo "<td>
            <a href='editarAvaliacao.php?cod=".$dado["cod"]."'><i class='fa-solid fa-pen-to-square'></i></a>
            </td>";
            echo "<td>
            <a href='../Controller/deletarAvaliacao.php?cod=".$dado["cod"]."'><i class='fa-solid fa-trash'></i></a>
            </td>";
        }
   
        echo '</tr>
      </tbody>
    </table>
    </main>';

  criarRodape();

} else {
  header("Location: login.php");
}


?>


