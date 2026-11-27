<?php

require_once "conexao.php";
require_once "classe.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.html");
    exit;
}

$campos = ['nome', 'matricula', 'cpf', 'nascimento', 'cargo', 'funcao', 'data_de_admissao'];
foreach ($campos as $campo) {
    if (!isset($_POST[$campo]) || trim($_POST[$campo]) === '') {
        die("Erro: o campo '{$campo}' é obrigatório.");
    }
}

$usuario = new colaboradores();
$usuario->setNome(trim($_POST['nome']));
$usuario->setMatricula(trim($_POST['matricula']));
$usuario->setCpf(trim($_POST['cpf']));
$usuario->setNascimento(trim($_POST['nascimento']));
$usuario->setCargo(trim($_POST['cargo']));
$usuario->setFuncao(trim($_POST['funcao']));
$usuario->setDataDeAdmissao(trim($_POST['data_de_admissao']));

$sql = "INSERT INTO colaboradores (nome, matricula, cpf, nascimento, cargo, funcao, data_de_admissao) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conexao, $sql);

if (!$stmt) {
    die("Erro ao preparar o cadastro: " . mysqli_error($conexao));
}

mysqli_stmt_bind_param(
    $stmt,
    "sssssss",
    $usuario->getNome(),
    $usuario->getMatricula(),
    $usuario->getCpf(),
    $usuario->getNascimento(),
    $usuario->getCargo(),
    $usuario->getFuncao(),
    $usuario->getDataDeAdmissao()
);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'listar.php';</script>";
} else {
    $erro = mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    die("Erro ao realizar o cadastro: " . $erro);
}