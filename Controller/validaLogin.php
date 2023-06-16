<?php
session_start();
require ("../Model/mysql.php");

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

$_SESSION["login"] = $login;
$_SESSION["senha"] = $senha;

$resultado = $mysql->prepare("SELECT * FROM `usuarios` WHERE `login` LIKE ? AND `senha` LIKE ?");
$resultado->bind_param("ss", $login, $senha);
$resultado->execute();

$dados = $resultado->get_result();
$numLinhas = $dados->num_rows;

$dado = $dados->fetch_all(MYSQLI_ASSOC);

if($numLinhas == 0){
    $_SESSION["logado"] = 0;
    header("Location: ../View/login.php");
} else {
    $_SESSION["logado"] = 1;
    $_SESSION["codLogado"] = $dado[0]["cod"];
    header("Location: ../View/index.php");
}
