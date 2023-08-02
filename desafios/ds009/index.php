<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>

    <?php 
        $v1 = $_REQUEST['v1'] ?? 1;
        $p1 = $_REQUEST['p1'] ?? 1;
        $v2 = $_REQUEST['v2'] ?? 2;
        $p2 = $_REQUEST['p2'] ?? 2;
    ?>

<main>
    <h1>Insira os números</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
     <label for="v1">Valor 1:</label>
     <input type="number" name="v1" id="iv1" min="1" require value="<?=$v1?>">
     <label for="p1">Peso 1:</label>
     <input type="number" name="p1" id="ip1" min="1" require value="<?=$p1?>">
     <label for="v2">Valor 2:</label>
     <input type="number" name="v2" id="iv2" min="1" require value="<?=$v2?>">
     <label for="p2">Peso 2:</label>
     <input type="number" name="p2" id="ip2" min="1" require value="<?=$p2?>">

     <input type="submit" value="Enviar">
    </form>
</main>
<section>

    <?php 
        $ma = ($v1 + $v2) / 2;
        $mp = ($v1 * $p1 + $v2 * $p2)/($p1 + $p2);
    ?>

    <h2>Calculado</h2>
     <ul>
        <li> A media simples é igual a <?=number_format($ma,2, ",", ".")?></li>
        <li>A media ponderada <?=$p1?> e <?=$p2?> é igual a <?=number_format($mp,2, ",", ".")?></li>
     </ul>
</section>
    
</body>
</html>