<?php
require("../Model/mysql.php");

class Usuario {
    private $login;
    private $senha;
    private $codigo;

  public function __construct($login = null, $senha = null, $codigo = null) {
    $this->login = $login;
    $this->senha = md5($senha);
    $this->codigo = $codigo; 
}

  public function getLogin() {
    return $this->login;
  }

  public function setLogin($login) {
    $this->login = $login;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function setCodigo($codigo) {
    $this->codigo = $codigo;
  }

  public function getCodigo() {
    return $this->codigo;
  }

  public function cadastrar() {
        global $mysql;

        $resultado = $mysql->prepare("INSERT INTO `usuarios` (`cod`, `login`, `senha`) VALUES (NULL, ?, ?);");
        $resultado->bind_param("ss", $this->login, $this->senha);
        $resultado->execute();

        if($resultado->affected_rows > 0) {
         $this->setCodigo($resultado->insert_id);
         return true;

        } else {
          return false;
        }
    }

    static function ler () {
      global $mysql;
      
      $resultado = $mysql->prepare("SELECT * FROM `usuarios`");
      $resultado->execute();
      $dados = $resultado->get_result();
  
      $dado = $dados->fetch_all(MYSQLI_ASSOC); 
  
      return $dado;
  
  }

    static function imprimirUsuarios() {
      //$a = new Usuario();
      print_r(self::ler());
  }

  public function lerByID ($codigo) {
        global $mysql;
    
    $resultado = $mysql->prepare("SELECT * FROM `usuarios` WHERE cod = ?");
    $resultado->bind_param("i", $codigo);
    $resultado->execute();
    $dados = $resultado->get_result();
    
    $dado = $dados->fetch_all(MYSQLI_ASSOC); 

    $this->setLogin($dado[0]["login"]);
    $this->setSenha($dado[0]["senha"]);
    $this->setCodigo($dado[0]["cod"]);

    return $dado;
    }

    public function imprimir() {
        print_r($this);
    }

    public function editar() {
        global $mysql;
    
        $codigo = $this->codigo;
        $login = $this->login;
        $senha = $this->senha;
    
        $resultado = $mysql->prepare("UPDATE `usuarios` SET `login` = ?, `senha` = ? WHERE `usuarios`.`cod` = ?;");
        $resultado->bind_param("ssi", $login, $senha, $codigo);
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
    
        $resultado = $mysql->prepare("DELETE FROM `usuarios` WHERE `usuarios`.`cod` = ?");
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