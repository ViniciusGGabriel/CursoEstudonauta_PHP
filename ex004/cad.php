<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código em php</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        $n = $_GET["nome"] ?? "Sem nome" ; 
        $s = $_GET["sobrenome"] ?? "desconhecido";
        echo "<p>Ola $n $s";
    ?>
    <p><a href="index.html">Pagina anterior</a></p>
</body>
</html>