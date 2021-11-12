<?php

require('../database/conexao.php');

$cod_pessoa = $_POST["cod_pessoa"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$celular = $_POST["celular"];

var_dump($cod_pessoa);
var_dump($nome);
var_dump($sobrenome);
var_dump($email);
var_dump($celular);

$sql = "UPDATE tbl_pessoa SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', celular = '$celular' WHERE cod_pessoa = $cod_pessoa";

$resultado = mysqli_query($conexao, $sql);

header('location: ../listagem');

?>