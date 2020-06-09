<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // Validações
        // Funções (filter_input e filter_var)
        /*
        *
        *   FILTER_VALIDATE_INT
        *   FILTER_VALIDATE_EMAIL
        *   FILTER_VALIDATE_FLOAT
        *   FILTER_VALIDATE_IP
        *   FILTER_VALIDATE_URL
        *
        */
    ?>

    <!-- POST -->
    <!-- <form action="dados.php" method="POST">
        Nome:
        <input type="text" name="nome"><br>
        E-mail:
        <input type="email" name="email"><br>
        <button type="submit">Enviar</button>
    </form> -->

    <!-- GET -->
    <!-- <form action="dados.php" method="GET">
        Nome:
        <input type="text" name="nome"><br>
        Telefone:
        <input type="text" name="telefone"><br>
        <button type="submit">Enviar</button>
    </form> -->

    <?php
    
        if(isset($_POST['enviar_formulario'])):
            
            // Array de erros
            $erros = array();

            // Validações dos campos
            if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser um inteiro.";
            endif;

            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $erros[] = "E-mail inválido.";
            endif;

            if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                $erros[] = "Formato inválido. Esperado: ex.: 20.5";
            endif;

            if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                $erros[] = "IP inválido.";
            endif;

            if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                $erros[] = "URL inválida.";
            endif;

            // Exibindo mensagens
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo "<li> $erro </li>";
                endforeach;
            else:
                echo "Dados enviados com sucesso!";
            endif;

        endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">
        Idade:
        <input type="text" name="idade"><br>
        E-mail:
        <input type="email" name="email"><br>
        Peso:
        <input type="text" name="peso"><br>
        IP:
        <input type="text" name="ip"><br>
        URL:
        <input type="text" name="url"><br>
        <button type="submit" name="enviar_formulario">Enviar</button>
    </form>

</body>
</html>