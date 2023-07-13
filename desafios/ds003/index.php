<!DOCTYPE html>
<html lang="pt-br
">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de fazer uma alteração de moeda</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <main>
        <?php 
         $real = $_REQUEST["valor"] ?? 0;
         $cotação = 4.80;

         $dolar = $real/$cotação;

         echo "Seu R\$" . number_format($real, 2) . " é de " . number_format($dolar, 2) . " em dólares";
        ?>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>