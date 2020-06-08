<?php
    // Funções de números

    /*
    *   number_format - formata o valor, com número de casas decimais,
    *                   separador de casas decimais e de milhares;
    *   round - arredonda valores (.4 arredonda pra baixo e .5 pra cima arredonda pra cima);
    *   ceil  - arredonda valores sempre para cima;
    *   floor - inverso do ceil;
    *   rand  - gera valores aleatórios entre os parâmetros passados.
    */


    echo "*** Funções de números *** <br><br>";

    // number_format
    $numero = 1234.56;
    $preco = number_format($numero, 2, ",", ".");

    echo "O valor do produto é R$ $preco."; 

    echo "<hr>";

    // round
    echo round(3.6)."<br>";
    echo round(3.5)."<br>";
    echo round(3.4)."<br>";

    echo "<hr>";

    // ceil
    echo ceil(3.6)."<br>";
    echo ceil(3.4)."<br>";

    echo "<hr>";

    // floor
    echo floor(3.6)."<br>";
    echo floor(3.4)."<br>";

    echo "<hr>";

    // rand
    echo rand(1, 20)."<br>";
    echo rand(1, 20)."<br>";