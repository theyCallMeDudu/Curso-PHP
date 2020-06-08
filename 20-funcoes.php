<?php
    // Funções

    echo "*** Funções *** <br><br>";

    function exibirNome($nome){
        echo "Meu nome é $nome";
    }

    exibirNome("Eduardo Coelho");

    echo "<hr>";

    function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4){
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        
        if($media >= 7):
            echo "$nome foi aprovado com a media $media.<br>";
        else:
            echo "$nome foi reprovado.<br>";
        endif;
    }

    calcularMedia("Alfredo", 5, 7, 9, 8);