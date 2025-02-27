<?php 
// Exemplo simples de exibição de mensagem com echo
echo "Olá mundo"; // echo = print

// Exemplo de atribuição de variável em PHP
$nome = "Clara"; 

// A forma simplificada também pode ser utilizada
// <?= "Olá, mundo"; É o mesmo que echo, mas é mais curto e permite mesclar PHP diretamente com HTML
// tem que usar o fechamento do php, como vemos na linha abaixo
?>

<!-- Início do código HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Maria Clara C. Soares" >
    <title>Primeiro Site com PHP e HTML de <?php echo $nome; ?></title> <!-- Exemplo usando PHP para inserir variável no título -->
</head>
<body>
    <!-- Exibindo o nome com a forma simplificada do PHP -->
    <h1>Meu nome é <?=$nome?> </h1> <!-- A mesma coisa que echo $nome, mas de forma mais compacta -->
    
    <!-- Outra forma de exibir a variável, usando print -->
    <p>Primeiro Site com PHP e HTML de <?php print($nome); ?></p> <!-- Usando o print para exibir o valor de $nome -->
</body>
</html>
