<?php
    // Superglobais

    /*
    *   $GLOBALS  - armazena todas as variáveis globais
                    num array;
    *   $_SERVER  - contém informações sobre cabeçalhos,
                    caminhos e locais de script. Um array 
                    que contém vários índices.
    *   $_REQUEST - 
    *   $_POST    - 
    *   $_GET     - 
    *   $_FILES   - 
    *   $_ENV     - 
    *   $_COOKIE  - 
    *   $_SESSION - 
    */

    echo "*** Superglobais *** <br><br>";

    $x = 10;
    $y = 15;

    // $GLOBALS
    echo "> $"."GLOBALS<br>";

    function soma(){
        echo $GLOBALS['x'] + $GLOBALS['y'];
    }

    soma();

    echo "<hr>";

    // $_SERVER
    echo "> $"."_SERVER<br>";
    echo $_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SCRIPT_FILENAME']."<br>";
    echo $_SERVER['SERVER_PORT']."<br>";
    echo $_SERVER['REMOTE_ADDR']."<br>";