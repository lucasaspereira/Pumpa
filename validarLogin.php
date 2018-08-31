<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$conexao = mysqli_connect('localhost', 'root', '', 'pumpa');

$query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";

$buscar = mysqli_query($conexao, $query);

$dados = mysqli_fetch_array($buscar);

if($dados !== null) {
$_SESSION['username'] = $dados ['username'];
  header('location: inicio.php');

}else {
  header('location: login.php?login=0');
}
