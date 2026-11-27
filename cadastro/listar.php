<?php   
require_once "conexao.php";
require_once "salvar.php";

$usarios = new colaboradores();

$resultado = $usuario->listarUsuarios($conexao);

while ($dados = mysqli_fetch_assoc($resultado)) {
   echo "ID: " . $dados['id'] . "<br>";
   echo "Nome: " . $dados['nome'] . "<br>";
   echo "Matrícula: " . $dados['matricula'] . "<br>";   
   echo "CPF: " . $dados['cpf'] . "<br>";
   echo "Nascimento: " . $dados['nascimento'] . "<br>";
   echo "Cargo: " . $dados['cargo'] . "<br>";
   echo "Função: " . $dados['funcao'] . "<br>";
   echo "Data de Admissão: " . $dados['data_de_admissao'] . "<br><br>";
}