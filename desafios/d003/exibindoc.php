<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1><strong>Conversor de Moedas v1.0</strong></h1>
        <?php 
            $reais = $_REQUEST["numero"] ?? 0;
            $fixo = 5.29;
            $resultado = $reais/$fixo;

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            

            echo "<p>Seus " . numfmt_format_currency($padrão, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $resultado, "USD") . "</strong></p>";
            echo "<p><strong>*Cotação fixa de R$ $fixo </strong> informada diretamente no código.</p>"
        ?>
        <button onclick="javascript:window.location.href='index.php'">&#x2B05; Voltar</button>
    </main>
</body>
</html>