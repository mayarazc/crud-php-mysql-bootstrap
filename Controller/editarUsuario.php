<?php
session_start();
require("../Model/mysql.php");
require("../Model/Usuario.php");

$cod = $_GET["cod"];

$login = $_POST["login"];
$senha= $_POST["senha"];

$usuario = new Usuario($login, $senha, $cod);
$usuario->editar();

header("Location: ../View/configurarUsuario.php");

?>