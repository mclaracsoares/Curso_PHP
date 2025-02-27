<?php

// estruturas de controle

// operadores

$a = 1;
$b = 2;

// if

if ($a == $b) { // compara se sao iguais
    $a = 1; // representativo
    }

elseif ($a === $b) { // compara se sao iguais ou do mesmo tipo (int, float...)
    $a = 1;
 }

 else {
    $a = 0;
 }

// diferente
// modo 1
$a <> $b;

// modo 2
$b != $a;

$a !== $b; // se sao diferentes ou nao sao do mesmo tipo

// maior que
$b > $a;

// maior ou igual
$b >= $a;

// menor
$b < $a;

// menor ou igual
$b <= $a;

// incrmento
// modo 1
$a++;

// modo 2
++$a;

// modo 3
$a = $a +1;

// modulo
$a % $b; // retorna o resto

// operadores logicos

// e 
// modo 1
$a and $b;

// modo 2
$a && $b;

// ou
// modo 1
$a or $b;

// modo 2
$a || $b;

// nao
!$a;

// XOR - verdadeiros se a ou b verdadeiros, mas nao ambos (quando ambos sao, da falso)
$a xor $b;

