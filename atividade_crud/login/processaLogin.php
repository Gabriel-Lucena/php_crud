<?php

require('../database/conexao.php');

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM tbl_administrador WHERE nome = '$nome' and senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);

$resultados = mysqli_error($conexao);
$vetor = mysqli_fetch_array($resultado);

logar($vetor, $nome, $senha);

function logar($vetor, $nome, $senha){
if ($vetor !== NULL) {

    session_start();
    
    $_SESSION["nome"] = $nome;
    $_SESSION["senha"] = $senha;
    $_SESSION["id"] = session_id();

    var_dump($_SESSION["id"]);

    header('location: ../');

} else {

    header('location: ./');

}
}
?>