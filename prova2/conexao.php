<?php
    $hostname = "localhost";
    $port     = 3307;
    $username = "root";
    $password = "";
    $database = "fluxo_caixa";
    $drop = "";
    $con = mysqli_connect($hostname, $username, $password, $drop, $port);
    if(mysqli_connect_errno()){
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;     
    }
    //printf("Banco de dados conectado com sucesso \o/")
?>