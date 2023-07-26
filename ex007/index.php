<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
    ?>

    <main>
        <h1>Somador retroalimentado</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor</label>
            <input type="number" name="v1" id="iv1" value="<?=$v1?>">
            <label for="v2">Valor</label>
            <input type="number" name="v2" id="iv2" value="<?=$v2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h1>Resultado da soma</h1>
        <?php 
            $soma = $v1 + $v2;
            echo "<p>A Soma dos valores é $soma</p>" 
        ?>
    </section>
</body>
</html>