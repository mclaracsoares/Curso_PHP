<?php

// operador ternario

// $variavel = (expressao) ? faça x : faça y

// modo tradicional - verificar se é impar ou par

$x = 10;
$tipo = '';
if ($x % 2 == 0) {
    $tipo = 'par';
} else {
    $tipo = 'impar';
}
echo $tipo;

// modo ternario
$tipo = $x % 2 == 0 ? 'par' : 'impar';
