<?php

$nome = $_POST['nome'];
$funcao = $_POST['funcao'];


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
    //echo "Conectado com o banco!";
}

$consulta = "INSERT INTO `funcionarios` (`id`, `nome`, `funcao`) VALUES (NULL, '".$nome."', '".$funcao."');";
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/escola/alunos.php');


?>