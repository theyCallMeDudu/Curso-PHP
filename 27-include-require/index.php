<?php
    include 'header.php';
    /* 
    *  include e require possuem a mesma função:
    *  Ambos incluem arquivos numa página.
    *  Porém, se houver erro ao tentar incluir o arquivo,
    *  o require lança um Fatal Error e interrompe o script.
    *  Já o include apenas dá um Warning, mas ainda executa
    *  o script.
    *
    *  Ainda há como utilizar o sufixo once, que evita de o mesmo
    *  arquivo ser inserido mais de uma vez.
    *  Exemplos:
    *   include_once 'header.php';
    *   require_once 'footer.php';
    */

?>

<?php
    echo "Olar (:"
?>

<?php
    require 'footer.php';
?>

