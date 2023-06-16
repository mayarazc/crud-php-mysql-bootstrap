<?php
session_start();
require("../Model/mysql.php");
require("../Model/Avaliacao.php");

$cod = $_GET["cod"];

$avaliacao = new Avaliacao();
$avaliacao->deletar($cod);

header("Location: ../View/avaliacao.php")
?>