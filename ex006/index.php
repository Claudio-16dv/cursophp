<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com Números Aleatórios</h1>
        <?php 
            $sorteio = mt_rand(0,100);
            echo "<p>Gerando um número aleatório entre 0 a 100...</p>";
            echo "<p>O valor gerado foi <strong>$sorteio</strong></p>";
        ?>
        <button onclick="window.location.reload()">&#x1F504; Gerar Outro</button>
    </main>
</body>
</html>