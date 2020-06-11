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
            $quantidadeArquivos = count($_FILES['arquivo']['name']);
            $contador = 0;

            while ($contador < $quantidadeArquivos) {
            
                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

                if(in_array($extensao, $formatosPermitidos)):
                    $pasta = "files/";
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";

                    if(move_uploaded_file($temporario, $pasta.$novoNome)):
                        echo "Upload feito com sucesso para $pasta$novoNome.<br>";
                    else:
                        echo "Erro ao enviar o arquivo $temporario.<br>";
                    endif;
                else:
                    echo "Extensão $extensao não é permitida.<br>";
                endif;    

                $contador++;
            }     
            
        endif;
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" style="border: 1px solid #000">
        <input type="file" name="arquivo[]" multiple><br><br>
        <input type="submit" name="enviar_formulario">
    </form>

</body>
</html>