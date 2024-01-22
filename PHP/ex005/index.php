<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        $nome = $_GET['nome'] ?? 'semNome';
        $sobrenome = $_GET['sobrenome'] ?? 'semsobre';
    
    ?>
<header>
        <h1>Formulário</h1>
    </header>
    <article>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="inome" require value="<?=$nome?>">
        </p>
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" require minlength="8" maxlength="20" <?=$sobrenome?>>
        <p>
            <input id="botao" type="submit" value="Enviar">
        </p>
        </form>
        <article>
            <h1>Resultados</h1>
            <?php 
            
                echo "Seu nome é $nome e seu sobrenome é $sobrenome";
            ?>
        </article>
    </article>
</body>
</html>