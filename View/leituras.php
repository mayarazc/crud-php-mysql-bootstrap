<?php
session_start();
require("config.php");
require("../Model/Livro.php");

if($_SESSION["logado"] == 1){
  
  $css = "css/leituras.css";

  criarTopo($css);

  $corpo = '<main role="main">
  <section class="container">
    <div class="container mt-2 py-5">
      <h1 class="display-6 mb-lg-3">Olá, '.$_SESSION["login"].'.</h1>
      <p>Nesse cantinho você têm a liberdade de adicionar livros em sua estante, juntamente com as informações que desejar. Além
        disso, sinta-se à vontade para editar, deletar ou pesquisar um livro já cadastrado.
      </p>

        <button type="button botao" class="btn px-3 py-2 mt-2"><a href="registrarLivro.php" class="botao"><i class="fa-solid fa-plus"></i> Adicionar</a></button>   
    </div>

    <div class="container py-3 mt-5">
      <img src="imagens/estante.svg" alt="Ilustração">
    </div>
  </section>

    <div class="container">
    <table class="table table-sm mt-5">
      <thead>
        <tr>
          <th scope="col">Título</th>
          <th scope="col">Autor</th>
          <th scope="col">Status</th>
          <th scope="col">Avaliação</th>
          <th scope="col"></th>
        </tr>
      </thead>

      <tbody>';

        criarCorpo($corpo);

        //$dados = Livro::ler();

          foreach(Livro::ler() as $dado){
            echo "<tr>";
            echo "<td>".$dado["titulo"]."</td>";
            echo "<td>".$dado["autor"]."</td>";
            echo "<td>".$dado["status"]."</td>";
            echo "<td><a href='registrarAvaliacao.php?cod=".$dado["cod"]."' class='link-avaliar'>Clique para Avaliar</a></td>";
            echo "<td>
            <a href='editarLivro.php?cod=".$dado["cod"]."'><i class='fa-solid fa-pen-to-square'></i></a>
            <a href='../Controller/deletarLivro.php?cod=".$dado["cod"]."'><i class='fa-solid fa-trash'></i></a>
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

<!--require("mysql.php");

$resultado = $mysql->query("SELECT * FROM `livros` WHERE 1"); 
$dados = $resultado->fetch_all(MYSQLI_ASSOC);<!-->

