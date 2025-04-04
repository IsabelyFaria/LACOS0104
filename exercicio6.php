# F.U.P. que receba um número e mostre todos os números pares que existem de 0 até aquele número.

<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <?php
    $numero = isset($_GET['numero']) ? (int)$_GET['numero'] : 0;
    for( $i = 0; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
    ?>    
</body>
</html>
