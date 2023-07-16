<!DOCTYPE html>
<html lang="pt-br
">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de fazer uma alteração de moeda</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <main>
        <?php      
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        /* Se não for colocado true ele fica dentro de um object ao invés de um array */

        /* var_dump($dados); */

        $cotação = $dados["value"][0]["cotacaoCompra"];
        $real = $_REQUEST["valor"] ?? 0;
        $dolar = $real/$cotação;
        echo "Seu R\$" . number_format($real, 2) . " é de " . number_format($dolar, 2) . " em dólares";
    ?>
    <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>