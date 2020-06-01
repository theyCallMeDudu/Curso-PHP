<?php
    // Constantes
    // Constantes são automaticamente globais

    define("NOME", "Eduardo Coelho");
    define("IDADE", 23);
    define("ALTURA", 1.73);
    define("CASADO", true);
    define("TIMES", ['Barcelona', 'Milan', 'Manchester United']);

    var_dump(NOME);
    var_dump(IDADE);
    var_dump(ALTURA);
    var_dump(CASADO);

    echo "<hr>";
    echo 'Meu nome é '.NOME.', tenho '.IDADE.' anos e '.ALTURA.' de altura.<br>';
    
    function exibeNome(){
        echo NOME;    
    }

    exibeNome();

    echo "<hr>";
    var_dump(TIMES);


    function exibeTimes(){
        for($i = 0; $i < 3; $i++){
            echo TIMES[$i].'<br>';
        }
    }

    exibeTimes();