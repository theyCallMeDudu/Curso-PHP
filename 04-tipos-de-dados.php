<?php

/********** Escalares **********/
echo "********** Escalares **********<br>";

// string
$nome = "Eduardo";

var_dump($nome);

if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

// int
$idade = 23;

var_dump($idade);

if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";

// float
$altura = 1.73;

var_dump($altura);

if(is_float($altura)):
    echo "É um float";
else:
    echo "Não é um float";
endif;
echo "<hr>";

// boolean
$admin = false;

var_dump($admin);

if(is_bool($admin)):
    echo "É um boolean";
else:
    echo "Não é um boolean";
endif;
echo "<hr>";

/********** Compostos **********/
echo "********** Compostos **********<br>";

// array
$carros = array("Fusca", "Gol", "Escort", "Camaro");

var_dump($carros);

if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

// object
class Cliente {
    public $nome;

    public function atribuiNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuiNome("Eduardo");

var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

/********** Especiais **********/
echo "********** Especiais **********<br>";

// null
$cidade = null;

var_dump($cidade);

// resource
