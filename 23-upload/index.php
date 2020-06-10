<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if(isset($_POST['enviar_formulario'])):
            $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

            if(in_array($extensao, $formatosPermitidos)):
                $pasta = "files/";
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                if(move_uploaded_file($temporario, $pasta.$novoNome)):
                    $mensagem = "Upload feito com sucesso!";
                else:
                    $mensagem = "Erro! Não foi possível fazer o upload.";
                endif;
            else:
                $mensagem = "Formato inválido.";
            endif;    

            echo $mensagem;

        endif;
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" style="border: 1px solid #000">
        <input type="file" name="arquivo"><br><br>
        <input type="submit" name="enviar_formulario">
    </form>

</body>
</html>