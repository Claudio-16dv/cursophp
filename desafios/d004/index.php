<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <form action="exibindoc.php" method="get">
            <label for="numero">Quantos R$ você tem na carteira?</label>
            <input type="number" name="numero" id="idNumber" step="0.01">
            <input type="submit" value="Converter">
        </form>
    </section>
</body>
</html>