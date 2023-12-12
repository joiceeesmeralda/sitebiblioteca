<?php

$nome = $_POST['nome'];

//echo $nome;


// Salva no banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "biblioteca";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
} else {
    //echo "Bem vindo à biblioteca All too well!";
}

$consulta = "INSERT INTO `nome` (`id`, `nome`) VALUES (NULL, '$nome');";
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/escola/cursos.php');


?>