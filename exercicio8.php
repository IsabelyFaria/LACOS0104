# F.U.P. que receba um número e mostre a tabuada dele.

<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 8</title>
</head>
<body>
    <?php
    $numero = isset($_GET['numero']) ? (int)$_GET['numero'] : 0;
    for( $i = 0; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
    
    ?>    
</body>
</html>
