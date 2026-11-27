<?php   
require_once "conexao.php"; 
require_once "classe.php";

$usuarios = new colaboradores();
$usuarios->setNome(htmlspecialchars(trim($_POST['nome'])));
$usuarios->setMatricula(htmlspecialchars(trim($_POST['matricula'])));
$usuarios->setCpf(htmlspecialchars(trim($_POST['cpf'])));
$usuarios->setNascimento(htmlspecialchars(trim($_POST['nascimento'])));
$usuarios->setCargo(htmlspecialchars(trim($_POST['cargo'])));
$usuarios->setFuncao(htmlspecialchars(trim($_POST['funcao'])));
$usuarios->setDataDeAdmissao(htmlspecialchars(trim($_POST['data_de_admissao'])));


$sql = "INSERT INTO colaboradores (nome, matricula, cpf, nascimento, cargo, funcao, data_de_admissao) VALUES ('".$usuarios->getNome()."', '".$usuarios->getMatricula()."', '".$usuarios->getCpf()."', '".$usuarios->getNascimento()."', '".$usuarios->getCargo()."', '".$usuarios->getFuncao()."', '".$usuarios->getDataDeAdmissao()."')";
values
(
    '".$usuarios->getNome()."',
    '".$usuarios->getMatricula()."',
    '".$usuarios->getCpf()."',
    '".$usuarios->getNascimento()."',
    '".$usuarios->getCargo()."',
    '".$usuarios->getFuncao()."',
    '".$usuarios->getDataDeAdmissao()."'
);

if(mysqli_query($conexao, $sql))
    {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'listar.php';</script>";
    }