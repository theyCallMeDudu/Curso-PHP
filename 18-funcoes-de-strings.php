<?php
    // Funções de strings

    /*
    *   strtoupper  - converte um string para maiúscula;
    *   strtolower  - inverso da strtoupper;
    *   substr      - retorna uma parte duma string ;
    *   str_pad     - complementa uma outra string com a quantidade especificada de caracteres;
    *   str_repeat  - repete uma string quantas vezes forem determinadas;
    *   strlen      - retorna o comprimento de uma string;
    *   str_replace - substitui uma palavra num texto;
    *   strpos      -
    */

    echo "*** Funções de strings *** <br><br>";

    // strtoupper
    $nome = "fulaninho marques";
    $novoNome = strtoupper($nome);
    echo $novoNome;

    echo "<hr>";

    // strtolower
    $novoNome = strtolower($novoNome);
    echo $novoNome;
    echo "<hr>";

    // substr
    $mensagem = "Olá, mundo.";
    echo substr($mensagem, 5); // retorna parte da string a partir de um ponto
    echo "<br>";
    echo substr($mensagem, 5, 6); // também pode definir ATÉ onde retornar.
    echo "<hr>";

    // str_pad
    $objeto = "mouse";
    $novoObjeto = str_pad($objeto, 10, "*");
    echo $novoObjeto;
    echo "<br>";

    $novoObj = str_pad($objeto, 10, "*", STR_PAD_LEFT); // LEFT, RIGHT or BOTH
    echo $novoObj;
    echo "<hr>";

    // str_repeat
    $string = str_repeat("Ola", 5);
    echo $string;
    echo "<hr>";

    // strlen
    $novaMensagem = "Olá, mundo.";
    $lenMsg = strlen($novaMensagem);
    echo $lenMsg;
    echo "<br>";

    for($i = 0; $i < $lenMsg; $i++):
        echo $novaMensagem[$i]."<br>";
    endfor;

    echo "<hr>";

    // str_replace
    $texto = "A seleção argentina será campeã da Copa do Mundo de 2022.";
    $novoTexto = str_replace("argentina", "belga", $texto);
    echo $novoTexto;

    echo "<hr>";

    // strpos
    echo strpos($texto, "Copa");
