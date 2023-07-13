<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de números aleatórios</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
<main>
    <h1>Gerador de números aleatórios em PHP</h1>
        <?php 
        
        $min = 0;
        $max = 100;

        $value = mt_rand($min, $max);
        echo "Este é o seu valor $value"

        ?>

        <button onclick="javascript:document.location.reload()">👆Gerar outro</button>
</main>

</body>
</html>