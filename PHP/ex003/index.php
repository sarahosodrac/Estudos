<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Formulário</h1>
    </header>
    <article>
        <form action="cadastro.php" method="post">
        <p>
            <label for="inome">Nome:</label>
            <input type="text" name="nome" id="inome" require>
        </p>
            <label for="isobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="isobrenome" require minlength="8" maxlength="20">
        <p>
            <input id="botao" type="submit" value="Enviar">
        </p>
        </form>
    </article>
</body>
</html>