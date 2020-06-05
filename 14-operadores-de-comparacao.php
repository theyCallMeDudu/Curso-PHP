<?php
    // Operadores de comparação

    echo "*** Operadores de comparação *** <br><br>";

    /*
    *
    *  ==   Igualdade de valores
    *  !=   Diferença de valores
    *  ===  Igualdade de valores e tipo de variável (Identidade)
    *  !==  Diferença de valores e tipo de variável (Identidade)
    *  <>   Diferença
    *  <    Menor que
    *  >    Maior que
    *  <=   Menor que ou igual a
    *  >=   Maior que ou igual a
    *  <=>  Spaceship (retorna 3 valores possíveis)
    *       Se o lado esquerdo da comparação for menor, retorna -1
    *       Se os dois lados forem iguais, retorna 0
    *       Se o lado direito da comparação for menor, retorna 1
    *
    */

    if(10 == 10):
        echo "Positivo.";
    else:
        echo "Negativo.";
    endif;

    echo "<hr>";

    if(10 != 10):
        echo "Positivo.";
    else:
        echo "Negativo.";
    endif;

    echo "<hr>";

    if(10 === 10):
        echo "Positivo.";
    else:
        echo "Negativo.";
    endif;

    echo "<hr>";

    if(10 !== "10"):
        echo "Positivo.";
    else:
        echo "Negativo.";
    endif;

    echo "<hr>";

    if(10 <> "10"):
        echo "Positivo.";
    else:
        echo "Negativo.";
    endif;

    echo "<hr>";

    if(10 < 9):
        echo "Positivo.";
    else:
        echo "Negativo.";
    endif;

    echo "<hr>";

    if(10 > 11):
        echo "Positivo.";
    else:
        echo "Negativo.";
    endif;

    echo "<hr>";

    if(10 >= 9):
        echo "Positivo.";
    else:
        echo "Negativo.";
    endif;

    echo "<hr>";

    if(10 <= 10):
        echo "Positivo.";
    else:
        echo "Negativo.";
    endif;

    echo "<hr>";

    var_dump(20 <=> 21);
    var_dump(20 <=> 20);
    var_dump(20 <=> 19);
    
    