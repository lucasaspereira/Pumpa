<?php

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$sexo = $_POST['sexo'];
$nivel = $_POST['nivel'];

$conexao = mysqli_connect('localhost', 'root', '', 'pumpa');

$query = "INSERT INTO funcionarios (nome, cargo, salario, rua, bairro, sexo, nivel) VALUES ('$nome', '$cargo', '$salario', '$rua', '$bairro', '$sexo', '$nivel')";

$result = mysqli_query($conexao, $query);

echo $result;

if($result == 1) {

  header('location: finalizado.php');

}else {
  header('location: cadastrar.php');;
}
