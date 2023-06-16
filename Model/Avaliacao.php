<?php
require("mysql.php");

class Avaliacao{
    public function __construct($titulo = null, $qntdEstrelas = null, $review = null, $codigo = null){
        $this->titulo = $titulo;
        $this->qntdEstrelas = $qntdEstrelas;
        $this->review = $review;
        $this->codigo = $codigo;
    }

    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getQntdEstrelas() {
        return $this->qntdEstrelas;
    }
    
    public function setQntdEstrelas($qntdEstrelas) {
        $this->qntdEstrelas = $qntdEstrelas;
    }

    public function getReview() {
        return $this->review;
    }
    
    public function setReview($review) {
        $this->review = $review;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    
      public function getCodigo() {
        return $this->codigo;
    }
    

    public function cadastrar() {
        global $mysql;

        $resultado = $mysql->prepare("INSERT INTO `avaliacao`(`cod`, `titulo`, `qntdEstrelas`, `review`) VALUES (NULL,?,?,?);");
        $resultado->bind_param("sis", $this->titulo, $this->qntdEstrelas, $this->review);
        $resultado->execute();

        if($resultado->affected_rows > 0) {
         $this->setCodigo($resultado->insert_id);
         return true;

        } else {
          return false;
        }
    }

    public function lerByID ($codigo) {
        global $mysql;
    
        $resultado = $mysql->prepare("SELECT * FROM `avaliacao` WHERE cod = ?");
        $resultado->bind_param("i", $codigo);
        $resultado->execute();
        $dados = $resultado->get_result();
        
        $dado = $dados->fetch_all(MYSQLI_ASSOC); 

        $this->setTitulo($dado[0]["titulo"]);
        $this->setQntdEstrelas($dado[0]["qntdEstrelas"]);
        $this->setReview($dado[0]["review"]);
        $this->setCodigo($dado[0]["cod"]);

        return $dado;
    }

    static function ler () {
        global $mysql;
        
        $resultado = $mysql->prepare("SELECT * FROM `avaliacao`");
        $resultado->execute();
        $dados = $resultado->get_result();
    
        $dado = $dados->fetch_all(MYSQLI_ASSOC); 
    
        return $dado;
    
    }

    static function imprimirAvaliacoes() {
        print_r(self::ler());
    }

    public function editar() {
        global $mysql;
    
        $titulo = $this->titulo;
        $qntdEstrelas = $this->qntdEstrelas;
        $review = $this->review;
        $codigo = $this->codigo;
    
        $resultado = $mysql->prepare("UPDATE `avaliacao` SET `titulo` = ?, `qntdEstrelas` = ?, `review` = ? WHERE cod = ?");
        $resultado->bind_param("sisi", $titulo, $qntdEstrelas, $review, $codigo);
        $resultado->execute();
    
        echo $resultado->affected_rows;
    
        if($resultado->affected_rows > 0) {          
            return true;
         } else {
             return false;
         }
    }

    public function deletar($codigo) {
        global $mysql;
    
        $resultado = $mysql->prepare("DELETE FROM `avaliacao` WHERE `cod` = ?");
        $resultado->bind_param("i", $codigo); 
        $resultado->execute();
    
        if($resultado->affected_rows > 0) {      
            return true;
         } else {
             return false;
         }
    } 
 
}

?>