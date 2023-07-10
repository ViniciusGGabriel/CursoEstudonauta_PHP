<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
<section>
    <h1>Este é o resultado</h1>
    <p>
        <?php 
            $number = $_REQUEST["inumero"] ?? 0;
            $antecessor = $number - 1;
            $antecessor = $number - 1;
            $posterior = $number + 1;
            /* $_REQUEST pega um valor dentro do HTML que está na aba "Name" */
            echo "Este é o numero $number";
            echo "<br>Antecessor <strong>$antecessor</strong>";
            echo "<br>Posterior <strong>$posterior</strong>";
            /* Para usar algumas tags de HTML em um código php é só usar ela dentro dos parenteses  */
        ?>
    </p>
    <a href="index.html"><button>Voltar</button></a>
</section>
</body>
</html>