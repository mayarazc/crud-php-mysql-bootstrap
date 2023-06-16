<?php
session_start();
require("config.php");

$css = "css/avaliar-livro.css";

criarTopo($css);

$corpo = '<main role="main" class="main">

        <form class="container d-flex flex-column formulario" method="POST" action="../Controller/registrarAvaliacao.php">
          <h1 class="display-6 text-center mb-4">Avalie</h1>

              <div class="form-group mb-4">
              <label>Título do Livro</label>
              <input type="text" class="form-control" name="titulo" required>
              </div>
  
              <div class="form-group">
                <label for="textarea" class="form-label">Review</label>
                <textarea class="form-control mb-4 mt-2" id="textarea" rows="5" name="review"></textarea>
              </div>

            <div class="form-group">
                
                <div class="estrelas">
                  <label class="form-label avalie">Avalie com Estrelas:</label>
                  
                    <input type="radio" name="estrela" id="vazio" value="" checked>
        
                    <label for="estrela_um"><i class="fa-solid fa-star"></i></label>
                    <input type="radio" name="estrela" id="estrela_um" value="1">
        
                    <label for="estrela_dois"><i class="fa-solid fa-star"></i></label>
                    <input type="radio" name="estrela" id="estrela_dois" value="2">
        
                    <label for="estrela_tres"><i class="fa-solid fa-star"></i></label>
                    <input type="radio" name="estrela" id="estrela_tres" value="3">
        
                    <label for="estrela_quatro"><i class="fa-solid fa-star"></i></label>
                    <input type="radio" name="estrela" id="estrela_quatro" value="4">
        
                    <label for="estrela_cinco"><i class="fa-solid fa-star"></i></label>
                    <input type="radio" name="estrela" id="estrela_cinco" value="5">
                
                </div>
              </div>
  
                <button type="submit" class="btn mt-4"><i class="fa-solid fa-check"></i></button>
        </form>
      </main>';

criarCorpo($corpo);

criarRodape();

?>