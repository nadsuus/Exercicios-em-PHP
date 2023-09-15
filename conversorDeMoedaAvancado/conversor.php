<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <?php 
        
        $quantiaParaDolar = isset($_GET['quantia']) ? floatval($_GET['quantia']) : 0.0;
        $cotacao = 4.87;

        echo "A Contação fixa é $cotacao";
        echo " Você tem R$ $quantiaParaDolar na carteira.\n";
        echo "isso é equivale a R$" . number_format($quantiaParaDolar / $cotacao, 2) . " Em dolar";
        ?>
    </main>

</body>
</html>