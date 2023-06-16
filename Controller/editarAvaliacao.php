<?php
session_start();
require("../Model/mysql.php");
require("../Model/Avaliacao.php");

$cod = $_GET["cod"];

$titulo = $_POST["titulo"];
$qntdEstrelas = $_POST["estrela"];
$review = $_POST["review"];

$avaliacao = new Avaliacao($titulo, $qntdEstrelas, $review, $cod);
$avaliacao->editar();

header("Location: ../View/avaliacao.php");

?>