<?php
session_start();
require("../Model/mysql.php");
require("../Model/Usuario.php");

$cod = $_GET["cod"];

$usuario = new Usuario();
$usuario->deletar($cod);

header("Location: ../View/login.php");


?>