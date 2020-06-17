<?php
    // Sessão
    session_start();

    // Conexão
    require_once 'db-connect.php';

    if(isset($_POST['btn-cadastrar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $nascimento = mysqli_escape_string($connect, $_POST['nascimento']);

        $sql = "INSERT INTO cliente (nome, sobrenome, email, nascimento) VALUES ('$nome', '$sobrenome', '$email', '$nascimento')";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../index.php?');
        else:
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../index.php?');
        endif;


    endif;

?>