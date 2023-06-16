<?php
session_start();
require("../Model/mysql.php");
require("../Model/Livro.php");

$cod = $_GET["cod"];

$livro = new Livro();
$livro->deletar($cod);

header("Location: ../View/leituras.php");


?>