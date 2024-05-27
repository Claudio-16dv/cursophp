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
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? "sem nome";
            $antecessor = $numero - 1 ;
            $sucessor = $numero + 1 ;
            echo "<p>O numero escolhido foi <strong>$numero</strong>!</p>";
            echo "<p>O numero antecessor do escolhido é <strong>$antecessor</strong>!</p>";
            echo "<p>O numero sucessor do escolhido é <strong>$sucessor</strong>!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>
</html>