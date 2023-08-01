<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    
    <?php
       $minimo = 1_350.60;
       $salario = $_REQUEST['salario'] ?? 0;
    ?>
    
<main>
    <h1>Qual o seu salario</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="salario">Salario:</label>
    <input type="number" name="salario" id="isalario" value="<?=$salario?>">
    <p>Levando o valor <?=number_format($minimo, 2, ",", ".")?> em consideração</p>
    <input type="submit" value="Enviar">
    </form>
</main>
<section>
    <h2>Resultado</h2>
    <?php 
        $total = intdiv($salario, $minimo);
        $diferenca = $salario % $minimo;

        echo "<p>Ganha <strong>$total</strong> salários mínimos mais <strong>".number_format($diferenca, 2, ",", ".")."</strong></p>";
    ?>
</section>
</body>
</html>