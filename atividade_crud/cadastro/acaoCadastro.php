<?php

require('../database/conexao.php');

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$celular = $_POST["celular"];

$sql = "INSERT INTO tbl_pessoa (nome, sobrenome, email, celular) 
VALUES('$nome', '$sobrenome', '$email', '$celular')";

$resultado = mysqli_query($conexao, $sql);

header('location: ../');

?>