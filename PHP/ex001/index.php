<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro arquivo php</title>
</head>
<body>
    <h1>
        trabalhando com tempo
        <p>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            echo "Hoje é dia: " . date("d/M/Y");
            echo " A hora atual é" . date("G:i:s");
        ?>
        </p>
    </h1>
</body>
</html>