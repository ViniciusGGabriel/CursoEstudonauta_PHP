<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <main>
        <h1>Analisador</h1>
        <?php 
            $num = $_POST['n'] ?? 0;

            echo "<p>Analisando o numero ". number_format($num, 3, ",", ".") ." enviado</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li>A parte inteira do número é ". number_format($int, 0, ",", ".")." </li></ul>";
            echo "<ul><li>A parte fracionaria do número é ".number_format($fra, 3, ",", ".")."</li></ul>"
        ?>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>