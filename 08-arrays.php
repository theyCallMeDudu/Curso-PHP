<?php
    // Arrays

    // Forma de criar nº 1
    $carros = array("Fusca", "BMW", "Raptor");
    print_r($carros);

    echo "<br>";

    $length = sizeof($carros);

    for($i = 0; $i < $length; $i++){
        echo $carros[$i].'<br>';
    }

    $carros[] = "Toro";    // Adiciona item no array na última posição automaticamente.
    $carros[1] = "Camaro"; // Adiciona item no array na posição especificada. Se tiver algum item na posição
                           // o novo o substituirá.
    print_r($carros);
    
    echo "<hr>";

    // Forma de criar nº 2
    $motos = array();
    $motos[] = "Harley Davidson";
    $motos[] = "Honda";
    print_r($motos);

    echo "<hr>";

    // Forma de criar nº 3
    $pessoas = ["Gabi", "Dudu", "Isabel", "Marina", "Willians", "Augusto"];
    print_r($pessoas);
