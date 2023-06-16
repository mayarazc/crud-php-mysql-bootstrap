<?php
session_start();
require("../Model/mysql.php");
require("../Model/Livro.php");

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$status = $_POST["status"];

$livro = new Livro($titulo, $autor, $status);
$livro->cadastrar();

header("Location: ../View/leituras.php");


?>