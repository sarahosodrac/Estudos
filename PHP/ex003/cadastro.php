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
        <h1>Resultado do Processamento</h1>
    </header>
    <article>
        <?php 
        
        $nome = $_POST["nome"] ?? "Sem Nome";
        $sobrenome = $_POST["sobrenome"] ?? "Desconhecida";
        echo " É um prazer te conhecer $nome $sobrenome";
        ?>
        <p><a id="voltar" href="javascript:history.go(-1)">Voltar</a></p>
    </article>
</body>
</html>