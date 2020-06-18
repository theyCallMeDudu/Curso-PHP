<?php
    // Sessão
    session_start();

    // Conexão
    require_once 'db-connect.php';

    if(isset($_POST['btn-editar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $nascimento = mysqli_escape_string($connect, $_POST['nascimento']);
        
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "UPDATE cliente SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', nascimento = '$nascimento' WHERE id = '$id'";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Atualizado com sucesso!";
            header('Location: ../index.php?');
        else:
            $_SESSION['mensagem'] = "Erro ao atualizar!";
            header('Location: ../index.php?');
        endif;


    endif;

?>