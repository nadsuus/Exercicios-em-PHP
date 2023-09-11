<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Resultado</header>

    <main>
        <?php 

    $nome = $_GET["nome"] ?? "Sem nome";
    $sobrenome = $_GET["sobrenome"] ??"Sem nome";

    echo "<p> Olá, $nome $sobrenome";


        ?>
    </main>
</body>
</html>