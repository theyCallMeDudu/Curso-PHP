<?php

    // is_array($array)
    // Verifica se uma determinada variável é um array.
    echo "* is_array:<br>";

    $nomes = array("Namorado" => "Eduardo", "Namorada" =>"Gabriela", "Mãe" =>"Isabel", "Irmã" => "Marina", "Dog do vizinho" => "Augusto");
    echo is_array($nomes);
    var_dump(is_array($nomes));

    if(is_array($nomes)):
        echo "É um array.";
    else:
        echo "Não é um array.";
    endif;

    echo "<hr>";

    // in_array($valor, $array)
    // Verifica se um determinado valor existe em alguma posição do array

    echo "* in_array:<br>";

    echo in_array("Eduardo", $nomes);
    echo "<br>";
    echo in_array("Fulano", $nomes);

    if(in_array("Eduardo", $nomes)):
        echo "Existe no array.";
    else:
        echo "Não existe no array.";
    endif;

    echo "<hr>";

    // array_keys($array)
    // Cria um novo array onde os valores são os índices do array passado como argumento

    echo "* array_keys:<br>";

    $keys = array_keys($nomes);
    print_r($keys);

    echo "<hr>";

    // array_values($array)
    // Retorna um novo array com os valores do array passado como parâmetro

    echo "* array_values:<br>";

    $values = array_values($nomes);
    print_r($values);

    echo "<hr>";

    // array_merge($array, $array2) 
    // Agrega o conteúdo dos dois arrays passados como parâmetro

    echo "* array_merge:<br>";

    $carros = array("Fusca", "Gol", "Amarok");
    $motos = array("Harley", "Bis", "50cc");

    $veiculos = array_merge($carros, $motos);

    print_r($carros);
    echo "<br>";
    print_r($motos);
    echo "<br>";
    print_r($veiculos);

    echo "<hr>";

    // array_pop($array) 
    // Exclui a última posição do array

    echo "* array_pop:<br>";

    print_r($veiculos);
    echo "<br>";
    echo "<br>";

    print_r(array_pop($veiculos));
    echo "<br>";
    echo "<br>";
    print_r($veiculos);

    echo "<hr>";

    // array_shift($array) 
    // Exclui a primeira posição do array

    echo "* array_shift:<br>";

    print_r($veiculos);
    echo "<br>";
    echo "<br>";

    print_r(array_shift($veiculos));
    echo "<br>";
    echo "<br>";
    print_r($veiculos);

    echo "<hr>";

    // array_unshift($array, $valor) 
    // Adiciona um ou mais elementos no início do array

    echo "* array_unshift:<br>";

    $frutas = array("Banana", "Maçã", "Uva");
    print_r($frutas);

    array_unshift($frutas, "Manga", "Acerola", "Morango");

    echo "<br>";
    echo "<br>";

    print_r($frutas);

    echo "<hr>";

    // array_push($array, $valor) 
    // Adiciona um ou mais elementos no final do array

    echo "* array_push:<br>";

    print_r($frutas);

    array_push($frutas, "Laranja", "Pêra");

    echo "<br>";
    echo "<br>";

    print_r($frutas);

    echo "<hr>";

    // array_combine($array1, $array2) 
    // Mescla dois arrays

    echo "* array_combine:<br>";

    $chaves = array("Campeão", "Vice", "Terceiro");
    $valores = array("Flamengo", "Vasco", "Fluminense");

    $times = array_combine($chaves, $valores);

    print_r($chaves);
    echo "<br>";
    print_r($valores);
    echo "<br>";
    echo "<br>";
    print_r($times);

    echo "<hr>";

    // array_sum() 
    // Calcula a soma dos elementos de um array
    // Pode ser tanto inteiro quanto float

    echo "* array_sum:<br>";

    $soma = array(5,6, 10, 8);

    echo array_sum($soma);

    echo "<hr>";

    // explode('divisor', string) 
    // Transforma uma string num array

    echo "* explode:<br>";

    // Exemplo 1:
    $data = "19/07/2016";
    $novaData = explode('/', $data);

    print_r($novaData);

    echo "<br>";
    echo "<br>";

    // Exemplo 2:
    $frase = "Eu te amo.";
    $novaFrase = explode(" ", $frase);

    print_r($novaFrase);

    echo "<hr>";

    // implode('divisor', string) 
    // Transforma um array numa string

    echo "* implode:<br>";

    $names = array("Fulano", "Cicrano", "Beltrano");

    $string = implode(", ", $names);

    echo $string;

    echo "<hr>";

    // end
    // Retorna o último item de um array

    echo "* end:<br>";

    $objetos = ['carro', 'casa', 'lápis', 'borracha', 'cadeira', 'mesa'];
    var_dump($objetos);
    echo end($objetos);

    echo "<hr>";


    // array_filter ( array $array [, callable $callback [, int $flag = 0 ]] ) : array
    // Filtra elementos de um array utilizando uma função callback

    echo "* array_filter:<br>";

    $ages = [12, 14, 16, 18, 20, 22, 40, 30, 50, 60];

    $filteredAges = array_filter($ages, function($age){
        return $age >= 18;
    });

    var_dump($filteredAges);

    echo "<hr>";

    // array_map(callback, $array)
    // Aplica uma função em todos os elementos dos arrays dados

    echo "* array_map:<br>";

    $names = ['Eduardo', 'Gabriela', 'Tolkien', 'Aristides'];
    $names = array_map(function($name){
        return strtoupper($name);
    }, $names);

    var_dump($names);