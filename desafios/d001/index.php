<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Informe Um Numero Abaixo</h1>
    </header>
    <section>
        <form action="exibindo.php" method="get">
            <label for="numero">Numero</label>
            <input type="number" name="numero" id="idNumber">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>