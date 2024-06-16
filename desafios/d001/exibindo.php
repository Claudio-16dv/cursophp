<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><strong>Resultado Final</strong></h1>
    </header>
    <main>
        <?php 
            $numero = $_REQUEST["numero"] ?? 0;
            $antecessor = $numero - 1 ?? 0;
            $sucessor = $numero + 1 ?? 0;
            echo "<p>O numero escolhido foi <strong>$numero</strong>!</p>";
            echo "<p>O numero antecessor do escolhido é <strong>$antecessor</strong>!</p>";
            echo "<p>O numero sucessor do escolhido é <strong>$sucessor</strong>!</p>";
        ?>
        <button onclick="javascript:window.location.href='index.php'">&#x2B05; Voltar</button>
    </main>
</body>
</html>