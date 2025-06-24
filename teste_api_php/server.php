<?php
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'teste';
    

    $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    // if($conexao->connect_errno){
    //     echo "Erro";
    // } else {
    //     echo "Conectado com sucesso";
    // }
?>