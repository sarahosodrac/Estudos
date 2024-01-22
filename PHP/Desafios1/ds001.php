<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Calculando
        </h1>
    </header>
    <article>
        <form action="resultado.php" method="post">
            <p>
                <label for="inumero">Número:</label>
                <input type="number" name="numero" id="inumero" step="0.01">
            </p>
            <p>
                <input id="botao" type="submit" value="Enviar">
            </p>
        </form>
    </article>
</body>
</html>