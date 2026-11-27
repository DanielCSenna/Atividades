<?php       

$host = "localhost";
$user = "root";
$password = "";
$database = "cadastro_p";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");

// Mantém o nome usado nos demais arquivos do projeto.
$conexao = $conn;