<?php

// while, do while e for

$i = 0;
while ($i < 5) {
    echo "i é menor que 5, o valor de i é: " .$i;
    $i++;
}
"br";
// ele executa pelo menos uma vez, mesmo que o i maior que 5
$i = 0;
do{
    echo "i é menor que 5, o valor de i é: " .$i;
    $i++;
}while ($i < 5);

// for
for($i = 0; $i <5; $i++) {
    echo "i é menor que 5, ele vale: ". $i;
}
echo $i; // o i continua existindo fora do loop e recebe o valor final

$lista_de_coisas = ["arroz", "feijao", "1", 23, TRUE];
for ($i = 0; $i < count($lista_de_coisas); $i++){
    echo $lista_de_coisas[$i];
    "<br>";
}


