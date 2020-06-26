<?php
    // Expressões regulares
    /* Define um padrão a ser usado para procurar
    *  ou substituir palavras ou grupos de palavras.
    *  ^ - início da expressão;
    *  $ - final da expressão;
    * - /i - case sensitive
    *  [] - conjunto de caracteres;
    
    *  {} - quantidade de ocorrências:
         ? -> o mesmo que {0,1} (uma ou nenhuma);
         * -> o mesmo que {0,} (nenhuma ou várias);
         + -> o mesmo que {1,} (uma ou várias);

    *  /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
    *  /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
    *  [A-Z] - letras maiúsculas;
    *  [a-z] - letas minúsculas;
    *  [A-Za-z] - letras maiúsculas e minúsculas;
    *  [A-Za-z0-9] - letras e números.
    */

    $string = "abcde";
    $padrao = "/^[a-z0-9]{1,5}$/i";

    $email = "eduardo.coelho@uniriotec.br";
    $padraoEmail = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

    $data = "19/07/2020";
    $padraoData = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

    if(preg_match($padrao, $string)):
        echo "Válido";
        echo "<br>";
        echo $string;
    else:
        echo "Inválido";
    endif;

    echo "<hr>";

    if(preg_match($padraoEmail, $email)):
        echo "E-mail válido";
        echo "<br>";
        echo $email;
    else:
        echo "E-mail inválido";
    endif;

    echo "<hr>";

    if(preg_match($padraoData, $data)):
        echo "Data válida";
        echo "<br>";
        echo $data;
    else:
        echo "Data inválida";
    endif;

?>