<?php
    // Operadores de incremento e decremento

    /*
    *
    *  Servem para somar ou subtrair em (+1 ou -1)
    *  qualquer valor do tipo numérico ou string.
    *
    */

    echo "*** Operadores de incremento e decremento ***<br><br>";

    $valor = 20;

    // Pré-incremento (++ antes da variável)
    // Incrementa e retorna o valor <- IMPORTANTE
    echo ++$valor;

    echo "<hr>";

    // Pós-incremento (++ depois da variável)
    // Retorna o valor e DEPOIS incrementa <- IMPORTANTE
    echo $valor++;
    echo "<br>";
    echo $valor;

    echo "<hr>";

    // Pré-decremento (-- antes da variável)
    // Decrementa e retorna o valor <- IMPORTANTE
    echo --$valor;

    echo "<hr>";

    // Pós-decremento (-- depois da variável)
    // Retorna o valor e DEPOIS incrementa <- IMPORTANTE
    echo $valor--;
    echo "<br>";
    echo $valor;