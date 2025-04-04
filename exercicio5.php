# F.U.P. que receba uma palavra e a quantidade de vezes que quer que ela seja repetida.

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 5</title>
</head>
<body>
    <?php
    function repetirPalavra($palavra, $quantidade) {
        for ($i = 0; $i < $quantidade; $i++) {
            echo $palavra . "<br>";
        }
    }
    ?>
</body>
</html>
