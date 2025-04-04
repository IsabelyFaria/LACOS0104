# F.U.P. que receba um número e o seu intervalo e exiba todos os números de 0 até aquele número, respeitando o seu intervalo.

<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 9</title>
</head>
<body>
    <?php
    $numero = isset($_GET['numero']) ? (int)$_GET['numero'] : 0;
    $intervalo = isset($_GET['intervalo']) ? (int)$_GET['intervalo'] : 1;
    for ($i = 0; $i <= $numero; $i += $intervalo) {
        echo $i . "<br>";
    }
    ?>    
</body>
</html>