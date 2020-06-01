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
    echo "<hr>";

    // Exibir quantidade de intens num array
    // Count
    echo 'Quantidade de carros: '.count($carros).'<br>';
    echo 'Quantidade de motos: '.count($motos).'<br>';
    echo 'Quantidade de carros: '.count($pessoas).'<br>';
    
    echo '<br>';
    echo 'Foreach exibindo os valores de um array:<br>';

    foreach($pessoas as $valor){
        echo $valor.'<br>';
    }

    echo '<hr>';
    // Arrays associativos
    // Os índices não são números inteiros
    // Por exemplo:
    $pessoa = array("nome"=> "Eduardo", "idade" => 23, "altura" => 1.73);
    
    foreach($pessoa as $valor){
        echo $valor.'<br>';
    }

    $pessoa["cidade"] = "Rio de Janeiro";
    echo "<br>";

    print_r($pessoa);

    echo "<br>";
    echo "<br>";
    
    foreach($pessoa as $indice => $valor){
        echo $indice.": ".$valor."<br>";
    }

    echo "<hr>";

    // Arrays multidimensionais (um array que contém outros arrays dentro dele).
    $times = array(
            "cariocas" => array("Campeão" => "Flamengo", "Vice" => "Vasco", "Pó de arroz" => "Fluminense", "Bota-faixa" => "Botafogo"),
            "paulistas" => array("Marginal" => "Corinthians", "Morumbicha" => "São Paulo", "Porco" => "Palmeiras", "Volta Robinho" => "Santos"),
            "baianos" => array("Meu Rei" => "Bahia", "Flamengo da Bahia" => "Vitória")
        );

    foreach($times["cariocas"] as $indice => $valor){
        echo $indice.": ".$valor."<br>";
    }

    echo "<br>";

    foreach($times["paulistas"] as $indice => $valor){
        echo $indice.": ".$valor."<br>";
    }

    echo "<br>";

    foreach($times["baianos"] as $indice => $valor){
        echo $indice.": ".$valor."<br>";
    }
    
