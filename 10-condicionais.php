<?php
    // *** Condicionais ***
    // If, else, elseif
    
    echo "*** Condicionais *** <br><br>";

    echo ">>  If/ else/ elseif <br><br>";

    $valor = 10;

    if($valor == 10):
        echo "É igual a 10.";
    endif;

    echo "<hr><br>";

    $numero = 15;

    if($numero == 10):
        echo "É igual a 10.";
    else:
        echo "É diferente de 10.";
    endif;

    echo "<hr><br>";

    $outroNumero = 8;

    if($outroNumero == 10):
        echo "É igual a 10.";
    elseif($outroNumero <= 9):
        echo "É menor ou igual a 9.";
    else:
        echo "É diferente de 10.";
    endif;

    echo "<hr><br>";

    // Operador ternário (maneira mais simples de escrever if/else)

    $media = 7;

    echo ($media >= 7) ? "Aprovado" : "Reprovado";

    echo "<hr><br>";

    // Switch/ case

    echo ">>  Switch/ case <br><br>";

    $cor = "azul";

    switch ($cor):

        case "vermelho":
            echo "Sua cor preferida é o vermelho.";
        break;

        case "verde":
            echo "Sua cor preferida é o verde.";
        break;

        case "azul":
            echo "Sua cor preferida é o azul.";
        break;
        
        case "amarelo":
            echo "Sua cor preferida é o amarelo.";
        break;

        default:
            echo "Sua cor preferida não é nenhuma das primárias.";
        

    endswitch;


