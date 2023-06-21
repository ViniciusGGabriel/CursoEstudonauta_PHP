<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>exemplo de php</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        /* Usar o código acima para estar em horas e dias BR */
         echo "Hoje é dia " . date("d/m/y ");
         echo "E a hora atual " . date("G:i:s");
         echo " O server mostra um CET em vez de UFT"
     ?>
    </body>
</html>