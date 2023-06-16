<?php
require("mysql.php");

class Livro{

    public function __construct($titulo = null, $autor = null, $status = null, $codigo = null){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->status = $status;
        $this->codigo = $codigo;
    }

    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
    
    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function cadastrar() {
        global $mysql;

        $resultado = $mysql->prepare("INSERT INTO `livros` (`cod`, `titulo`, `autor`, `status`) 
        VALUES (NULL, ?, ?, ?);");
        $resultado->bind_param("sss", $this->titulo, $this->autor, $this->status);
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
    
        $resultado = $mysql->prepare("SELECT * FROM `livros` WHERE cod = ?");
        $resultado->bind_param("i", $codigo);
        $resultado->execute();
        $dados = $resultado->get_result();
        
        $dado = $dados->fetch_all(MYSQLI_ASSOC); 

        $this->setTitulo($dado[0]["titulo"]);
        $this->setAutor($dado[0]["autor"]);
        $this->setStatus($dado[0]["status"]);
        $this->setCodigo($dado[0]["cod"]);

        return $dado;
    }

    public function imprimir() {
        print_r($this);
    }

    static function ler () {
        global $mysql;
        
        $resultado = $mysql->prepare("SELECT * FROM `livros`");
        $resultado->execute();
        $dados = $resultado->get_result();
    
        $dado = $dados->fetch_all(MYSQLI_ASSOC); 
    
        return $dado;
    }

    static function imprimirLivros() {
        print_r(self::ler());
    }

    public function editar() {
        global $mysql;

        $titulo = $this->titulo;
        $autor = $this->autor;
        $status = $this->status;
        $codigo = $this->codigo;
    
        $resultado = $mysql->prepare("UPDATE `livros` SET `titulo`= ?, `autor`= ?, `status`= ? WHERE `cod` = ?");
        $resultado->bind_param("sssi", $titulo, $autor, $status, $codigo);
        $resultado->execute();
    
        if($resultado->affected_rows > 0) {          
            return true;
         } else {
             return false;
         }
    }

    public function deletar($codigo) {
        global $mysql;
    
        $resultado = $mysql->prepare("DELETE FROM `livros` WHERE cod = ?");
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