<?php
session_start();

require("config.php");

$css = "css/inicio.css";

criarTopo($css);

$corpo = '<main role="main">
    <section class="container">
      <div class="container mt-2 py-5">
        <h1 class="display-4 mb-lg-3">Administre suas leituras!</h1>
        <p>Esse é um lugar criado para quem ama ler. Descubra novos livros, autores e faça sua meta de leitura. Além
          disso, também oferecemos uma estante virtual para você organizar seus favoritos.</p>

        <p><a class="btn btn-lg" href="registrar.php" role="button">Registrar &raquo;</a></p>
        <br>
        <a class="link" href="login.php">Já tem uma conta? Logue aqui.</a>
      </div>

      <div class="container py-3 mt-5">
        <img src="imagens/livro.svg" alt="Ilustração">
      </div>
    </section>

    <section class="container">
      <h2 class="display-5 mt-4 my-3">Mais lidos de 2022</h2>

      <div class="d-flex mt-3 flex-wrap gap-4">
        <div class="card mb-3 " style="max-width: 450px;">

          <div class="row g-0">
            <div class="col-md-4">
              <img src="imagens/home-1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text">Lily nem sempre teve uma vida fácil, mas isso nunca a impediu de trabalhar
                  arduamente para conquistar a vida tão sonhada. Quando se sente atraída por um lindo neurocirurgião
                  chamado Ryle Kincaid, tudo parece...</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 450px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="imagens/home-2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text">Uma vida que ninguém lembra. Um livro que ninguém esquece.
                  Em A vida invisível de Addie LaRue, o aguardado best-seller de V.E. Schwab, conheça Addie e se perca
                  em sua vida invisível — porém memorável.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 450px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="imagens/home-3.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text">Kell é um dos últimos Viajantes — magos com uma habilidade rara de viajar entre
                  universos paralelos conectados por uma cidade mágica. Existe a Londres Cinza, suja e enfadonha, sem
                  magia alguma. A Londres Vermelha...</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 450px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="imagens/home-4.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-text">Esteve entre os primeiros lugares na lista das séries mais vendidas do The New York
                  Times. O autor conjuga lendas da mitologia grega com aventuras no século XXI. Nelas, os deuses do
                  Olimpo ainda se apaixonam por mortais...</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    </main>';

criarCorpo($corpo);

criarRodape();

?>