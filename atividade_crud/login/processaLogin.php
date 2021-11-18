<?php

require('../database/conexao.php');

$acao = $_POST["acao"];

function logar($vetor, $nome, $senha)
{
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

if (isset($acao)) {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM tbl_administrador WHERE nome = '$nome' and senha = '$senha'";

    $resultado = mysqli_query($conexao, $sql);

    $vetor = mysqli_fetch_array($resultado);

    logar($vetor, $nome, $senha);
} else {

    // Caso não seja login

    session_start();

    session_unset();

    session_destroy();

    header('location: ./index.php');

    // Final do logout

}

?>
