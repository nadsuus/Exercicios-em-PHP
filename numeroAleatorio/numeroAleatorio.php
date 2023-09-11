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

$numeroAleatorio = $_GET["DigiteUmNumero"] ?? "O numero não foi digitado ou foi enviado nulo";
$min = 1;
$numeroSorteado = rand($min, $numeroAleatorio);

echo "O numero sorteado foi: $numeroSorteado\n";

?>

</main>

</body>
</html>