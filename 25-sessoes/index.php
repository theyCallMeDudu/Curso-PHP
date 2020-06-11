<?php
    session_start(); // Iniciar sessão

    $_SESSION['cor'] = "Azul"; // criar sessão
    $_SESSION['carro'] = "Fusca";

    echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();
