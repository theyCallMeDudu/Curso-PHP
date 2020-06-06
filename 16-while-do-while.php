<?php
    // While & Do While

    echo "*** While & Do While *** <br><br>";

    $contador = 1;

    // While - Faz a verificação e depois executa o trecho de código
    while($contador <= 10):
        echo "Contador é $contador <br>";
        $contador++;
    endwhile;

    echo "<hr>";

    $contador = 1;

    // Do While - Executa o trecho de código e depois faz a verificação
    do {
        echo "Contador é $contador <br>";
        $contador++;
    } while ($contador <= 10);

