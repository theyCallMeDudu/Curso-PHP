<?php
    // COOKIE
    echo "*** Cookie *** <br>";

    // setcookie(nomeDoCookie, valor, validade);
    // Na validade utilizamos a função time() + a quantidade de segundos.
    // Abaixo criamos um cookie com a validade de 1 hora.
    setcookie('user', 'Eduardo Coelho', time()+3600);
    //
    setcookie('email', 'eduardo.coelho@uniriotec.br', time()+3600);
    setcookie('search', 'headset gamer', time()+3600);

    var_dump($_COOKIE);

    // Para remover o cookie
    setcookie('email', 'eduardo.coelho@uniriotec.br', time()-3600);

    var_dump($_COOKIE);

    // Acessar/ exibir a informação do cookie
    echo $_COOKIE['user'];