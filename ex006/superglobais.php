<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super globais</title>
    <link rel="stylesheet" href="../desafios/ds001/estilos/style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                echo "Superglobal GET";
                var_dump($_GET);

                echo "Superglobal POST";
                var_dump($_POST);
            ?>pre>
    </main>
    
</body>
</html>