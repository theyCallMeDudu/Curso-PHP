<?php
    // Datas
    echo "*** Datas *** <br>";

    // date('d') - retorna o dia atual com dois dígitos;
    echo date('d');

    echo "<hr>";

    // date('D') - retorna o dia da semana abreviado;
    echo date('D');

    echo "<hr>";

    // date('l') - retorna o dia da semana por extenso;
    echo date('l');

    echo "<hr>";

    // date('m') - retorna o mês atual com dois dígitos;
    echo date('m');

    echo "<hr>";

    // date('M') - retorna o mês atual por extenso;
    echo date('M');

    echo "<hr>";

    // date('y') - retorna o ano atual com dois dígitos;
    echo date('y');

    echo "<hr>";

    // date('Y') - retorna o ano atual com quatro dígitos;
    echo date('Y');
    
    echo "<hr>";

    echo date('d/m/Y H:i:s');

    echo "<hr>";

    date_default_timezone_set('America/Sao_Paulo');
    echo date('d/m/Y H:i:s');

    echo "<hr>";

    // Padrão DATE banco de dados:
    $date = date('Y-m-d');
    echo $date;

    echo "<hr>";

    // Padrão DATETIME banco de dados:
    $dateTime = date('Y-m-d H:i:s');
    echo $dateTime;

    echo "<hr>";

    // time() - retorna a quantidade de milisegundos
    //          que se passaram desde 1970 até hoje.
    echo time();

    echo "<br>";

    $time = time();
    echo date('d/m/Y', $time);

    echo "<hr>";

    // mktime(hora, minutos, segundos, mês, dia, ano);
    // todos os parâmetros com dois dígitos, exceto o ano.
    // trabalhar com data passada ou futura.
    $dataPagamento = mktime(15, 30, 00, 02, 15, 2023);
    
    // Formatar a data como preferir:
    echo date('d/m/Y - h:i', $dataPagamento);

    echo "<hr>";

    //strtotime() - converte de string para time
    $data = '2020-07-19 10:00:00';
    $data = strtotime($data);

    echo date('d/m/Y', $data);
