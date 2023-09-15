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

$numeroAleatorio = $_GET['DigiteUmNumero'] ?? "O numero não foi digitado ou foi enviado nulo";
$sucessor = $numeroAleatorio + 1;
$antecessor = $numeroAleatorio - 1;

echo "O numero escolhido foi: $numeroAleatorio\n";
echo "O seu antecessor é: $antecessor\n";
echo "O seu sucessor é: $sucessor\n";

?>

</main>

</body>
</html>