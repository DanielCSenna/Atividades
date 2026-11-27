<?php

$host = 'localhost';    
$user = 'root';
$password = '';     
$database = 'cadastro_p';


try {
    $con = new pdo ("mysql:host=$host;dbname=$database", $user, $password);
    echo "Conexão realizada com sucesso!";
} 
catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
