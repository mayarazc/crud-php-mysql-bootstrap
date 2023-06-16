<?php
session_start();
require("../Model/mysql.php");
require("../Model/Livro.php");

$cod = $_GET["cod"];

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$status = $_POST["status"];

$livro = new Livro($titulo, $autor, $status, $cod);
$livro->editar();

header("Location: ../View/leituras.php");

?>