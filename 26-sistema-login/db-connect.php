<?php
    // Conexão com o banco de dados
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "sistema_login";

    $connect = mysqli_connect($serverName, $userName, $password, $dbName);

    if(mysqli_connect_error()):
        echo "Falha na conexão: ".mysqli_connect_error();
    endif;