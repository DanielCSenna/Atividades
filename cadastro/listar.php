<?php

require_once "conexao.php";
require_once "classe.php";

$usuarios = new colaboradores();
$resultado = $usuarios->listarUsuarios($conexao);

if (!$resultado) {
    die("Erro ao listar os colaboradores: " . mysqli_error($conexao));
}

while ($dados = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . htmlspecialchars($dados['id']) . "<br>";
    echo "Nome: " . htmlspecialchars($dados['nome']) . "<br>";
    echo "Matrícula: " . htmlspecialchars($dados['matricula']) . "<br>";
    echo "CPF: " . htmlspecialchars($dados['cpf']) . "<br>";
    echo "Nascimento: " . htmlspecialchars($dados['nascimento']) . "<br>";
    echo "Cargo: " . htmlspecialchars($dados['cargo']) . "<br>";
    echo "Função: " . htmlspecialchars($dados['funcao']) . "<br>";
    echo "Data de Admissão: " . htmlspecialchars($dados['data_de_admissao']) . "<br><br>";
}