<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $lista_do_mercado = ["sorvete", "feijao", "arroz"]; ?> 
    <h1>Lista de mercado</h1>
    <ul>
        <?php foreach ($lista_do_mercado as $list): ?>
            <li>
                ?>= $list; ?>
            </li>
        <?php endforeach; ?>

    </ul>   



</body>
</html>

