<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>

    <?php
     $atual = date("Y");
     $nasc = $_GET['idadenasc'] ?? '2000';
     $ano = $_GET['idadeano'] ?? $atual;
    ?>

<main>
    <h1>Descubra sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="idadenasc">Seu ano de nacimento:</label>
        <input type="number" name="idadenasc" id="iidade" value="<?=$nasc?>">
        <label for="idadeano">EM qual ano você quer saber sua idade:</label>
        <input type="number" name="idadeano" id="iidadeano" value="<?=$ano?>">

        <input type="submit" value="Enviar">
    </form>
</main>
<section>

    <?php
     $idade = $atual - $nasc;
    ?>

    <h2>Sua idade é:</h2>
    <p>quem naceu em <?=$nasc?> tem atualmente <?=$idade?> </p>
</section>

</body>
</html>