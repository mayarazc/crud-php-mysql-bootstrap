<?php

 $mysql = new mysqli('localhost', 'root', '', 'trabalho back end');
 $mysql->set_charset('utf8');

 if($mysql != TRUE) {
     echo "Erro ao conectar no banco de dados";        
 } 
?>