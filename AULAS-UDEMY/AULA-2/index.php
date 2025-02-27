<?php

$nome = "Clara";

$introducao = "<!DOCTYPE html>
<head>
    <title>Titulo do Site</title>
</head>";

$body = " 
<body>
    <h1> Seja bem, vindo de volta, $nome!</h1> 
</body>
</html> ";

$html = $introducao . $body; // isso concatena duas variais em php.
// entao o que será o "html"? 
// será o "introducao" junto com o "body" --> um "acima do outro"

echo $html; // isso é necessario pois precisamos imprimir as variaveis