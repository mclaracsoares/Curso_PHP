<?php

// arrays

$teste = array(); // pode ser assim
$teste_2 = [1, 2, 3];

// echo $teste_2 -> vai dar erro
echo $teste_2[0]; // tem que falar a posicao do elemento que se deseja imprimir

$teste_3 = ['o', 'l', 'a', 1, 2, 3, 4, TRUE];
print_r($teste_3); // função para imprimir o array inteiro sem precisar de laços de repetição
// ele irá imprimir literalmente tudo, incluindo as posicoes e falando o que tem em cada posicao
var_dump($teste_3);
// ele vai fazer o mesmo do print_r, mas irá falar qual é o tipo de cada variavel do array
$teste_4 = ["chave_1" => "claroca", "chave_2" => "linda" ];
// chave vai servir como literalmente uma chave para a palavra claroca

echo $teste_4["chave_1"];
// ele irá imprimir "claroca"

echo "A " .$teste_4["chave_1"] ." é muito ". $teste_4["chave_2"];
