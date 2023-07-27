<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
     $d1 = $_GET['dividendo'] ?? 0;
     $d2 = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="idivisor">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $quo = intdiv($dividendo, $divisor);
            $res = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$res?></td>
                <td><?=$quo?></td>
            </tr>
        </table>
    </section>
</body>
</html>