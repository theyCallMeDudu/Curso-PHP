<?php
    // Operadores lógicos
    /*
    *   Nos permitem fazer comparações entre expressões.
    *   e  (&& - and)       -> retorna verdadeiro se as duas condições forem verdadeiras
    *   ou (|| - or)        -> retorna verdadeiro se pelo menos uma condição for verdadeira
    *   ou exclusivo (xor)  -> retorna verdadeiro quando APENAS UMA condição for verdadeira
    *   negação (!)         -> retorna o estado lógico da expressão INVERTIDO
    */

    echo "*** Operadores lógicos *** <br><br>";

    $idade = 25;
    $nome = "Eduardo";

    // e: && - and
    if(($idade == 25) && ($nome == "Eduardo")):
        echo "É verdadeiro.";
    else:
        echo "É falso.";
    endif;

    echo "<hr>";

    $cor = "azul";
    $tamanho = "p";

    // ou: (|| - or)
    if(($cor == "amarelo") || ($tamanho == "p")):
        echo "É verdadeiro.";
    else:
        echo "É falso.";
    endif;

    echo "<hr>";

    // ou exclusivo: xor
    if(($idade == 25) xor ($nome == "Fulano")):
        echo "É verdadeiro.";
    else:
        echo "É falso.";
    endif;

    echo "<hr>";

    // negação: !
    if(!($idade == 25) && ($nome == "Eduardo")):
        echo "É verdadeiro.";
    else:
        echo "É falso.";
    endif;

