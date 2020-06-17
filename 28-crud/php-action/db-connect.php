<?php
    // Conexão com o banco de dados
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "crud_php_youtube";

    $connect = mysqli_connect($serverName, $userName, $password, $dbName);
    mysqli_set_charset($connect, "utf8");
    
    if(mysqli_connect_error()):
        echo "Erro na conexão: ".msqli_connect_error();
    endif;