<?php

require('../database/conexao.php');

$cod_pessoa = $_GET["cod_pessoa"];

$sql = "DELETE FROM tbl_pessoa WHERE cod_pessoa = $cod_pessoa";

$resultado = mysqli_query($conexao, $sql);

var_dump($resultado);

header("location: ../index.php");

?>