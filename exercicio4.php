#F.U.P. que receba uma palavra ou frase e escreva ela 10 vezes

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 24</title>
</head>
<body>
    <?php
    if (isset($_GET['texto'])) {
        $texto = htmlspecialchars($_GET['texto']);
        for ($i = 0; $i < 10; $i++) {
            echo $texto  . "<br>";
        }
    }
    ?>
</body>
</html>