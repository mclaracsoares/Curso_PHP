<?php
// imprimir todos os numeros impares
$lista = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];

foreach ($lista as $i){

    if ($i % 2== 0){
        continue; // vai parar a execução do bloco aqui e voltar pro começo, sem quebrar o loop 
    }
    echo $i;
}
