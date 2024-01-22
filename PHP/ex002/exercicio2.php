<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro arquivo php</title>
</head>
<body>
    <h1>
        <p>
        <?php
            $nome = "sarah";
            $idade = 22;
            $sobrenome = "Cardoso";
            const PAIS ="Brasil";
            $casado = true;

            // $idade = $idade + 1;
            // echo "Seu nome é $nome $sobrenome, você tem $idade anos!";
            // echo "Ano que vem você terá $idade anos! você mora no " .PAIS;

            if($casado =! 1){

                echo "Seu nome é $nome $sobrenome, você tem $idade anos e não é casada";

            }
            else{

                echo "Seu nome é $nome $sobrenome, você tem $idade anos e é casada";
            }


            
        ?>
        </p>
    </h1>
</body>
</html>