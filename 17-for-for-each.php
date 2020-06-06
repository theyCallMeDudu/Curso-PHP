<?php
    // For & For Each

    echo "*** For & For Each *** <br><br>";

    for ($contador = 0; $contador <= 10; $contador++):
        echo "Contador é $contador <br>";
    endfor;

    echo "<br>";
    echo "Tabuada de 8:<br>";

    for($i = 0; $i <= 10; $i++):
        echo "8 x $i = ".($i * 8)."<br>";
    endfor;

    echo "<hr>";

    $cores = array("Azul", "Amarelo", "Vermelho", "Verde");

    foreach($cores as $indice => $valor):
        echo $indice." - ".$valor."<br>";
    endforeach;  


