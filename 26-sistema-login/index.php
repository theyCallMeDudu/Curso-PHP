
<?php
    // Conexão
    require_once 'db-connect.php';

    // Sessão
    session_start();

    // Botão enviar
    if(isset($_POST['btn-entrar'])):
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $password = mysqli_escape_string($connect, $_POST['password']);

        if(empty($login) ||  empty($password)):
            $erros[] = "<li>O campo login/senha precisa ser preenchido.</li>";
        else:
            $sql = "SELECT login FROM users WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0):
                $password = md5($password);
                $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
                $resultado = mysqli_query($connect, $sql);

                    if(mysqli_num_rows($resultado) == 1):
                        $dados = mysqli_fetch_array($resultado);
                        mysqli_close($connect);
                        
                        $_SESSION['logado'] = true;
                        $_SESSION['id_usuario'] = $dados['id'];
                        header('Location: home.php');
                    else:
                        $erros[] = "<li>Usuário ou senha incorretos.</li>";
                    endif;


            else:
                $erros[] = "<li>Usuário inexistente.</li>";
            endif;

        endif;

    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Login</title>
</head>
<body>

    <h1 class="text-center">Login</h1>
    
    <?php
        if(!empty($erros)):
            foreach($erros as $erro):
                echo $erro;
            endforeach;
        endif;
    ?>

    <hr>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Login:
        <input type="text" name="login"><br>
        Senha:
        <input type="password" name="password"><br>
        <button class="btn btn-success" type="submit" name="btn-entrar">Entrar</button>
    </form>

</body>
</html>