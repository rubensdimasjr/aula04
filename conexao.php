<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dBase = "banco_db";

    $conexao = mysqli_connect($host, $user, $password, $dBase);

    if(!$conexao ){
       echo "Banco de Dados não conectado!";
       die();
    }
   
