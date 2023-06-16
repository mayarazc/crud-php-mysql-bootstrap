<?php
session_start();
require("../Model/mysql.php");
require("../Model/Avaliacao.php");

$titulo = $_POST["titulo"];
$qntdEstrelas = $_POST["estrela"];
$review = $_POST["review"];

$avaliacao = new Avaliacao($titulo, $qntdEstrelas, $review);
$avaliacao->cadastrar();
header("Location: ../View/avaliacao.php");


?>