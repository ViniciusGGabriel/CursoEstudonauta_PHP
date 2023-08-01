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
        $numero = $_REQUEST['valor'] ?? 1;
    ?>

<main>
    <h1>Insira os valores</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="valor">Valor</label>
    <input type="number" name="valor" id="ivalor">
    <input type="submit" value="Enviar">
    </form>
</main>
<section>
    <h2>Resultado</h2>

    <?php 
        $Rquadrada = $numero ** (1/2);
        $Rcubica = $numero ** (1/3);

        echo "Raiz quadrada $Rquadrada e cubica $Rcubica"
    ?>

</section>
</body>
</html>