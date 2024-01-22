<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "login";

$conexao = new mysqli($servername, $username, $password, $bd);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["login"];
    $password = $_POST["senha"];

    $sql = "SELECT id FROM usuarios WHERE email='$username' AND senha='$password'";
    $result = $conexao->query($sql);

    if ($result->num_rows == 1) {
        // Inicia a sessão
        session_start();
        header("Location:../index2.php");
        exit();
    } else {
        echo "Usuário ou Senha Inválida. Tente novamente.";
        // Redirecionar de volta para a página de login com mensagem de erro...
    }
}

$conexao->close();
?>
