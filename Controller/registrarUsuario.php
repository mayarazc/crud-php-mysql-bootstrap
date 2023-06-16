<?php
session_start();
require("../Model/mysql.php");
require("../Model/Usuario.php");

$login = $_POST["login"];
$senha = $_POST["senha"];

$usuario = new Usuario($login, $senha);
$usuario->cadastrar();

header("Location: ../View/index.php");


?>