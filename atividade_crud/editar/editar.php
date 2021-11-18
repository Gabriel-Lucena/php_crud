<?php
include('../componentes/header.php');

require('../database/conexao.php');


$produtoId = $_GET["cod_pessoa"];

$sql = "SELECT * FROM tbl_pessoa WHERE cod_pessoa = $produtoId";
$resultado = mysqli_query($conexao, $sql);
$resultados = mysqli_fetch_array($resultado);

?>

<div class="container">
    <hr>
    <div class="card">
        <div class="card-header">
            <h2>Edição</h2>
        </div>
        <div class="card-body">
            <form method="post" action="./acaoEditar.php">

                <input type="hidden" name="cod_pessoa" id="cod_pessoa" value="<?php echo $produtoId ?>">

                <input class="form-control" type="text" placeholder="Digite o nome" name="nome" id="nome" value="<?php echo $resultados["nome"] ?>">
                <br />
                <input class="form-control" type="text" placeholder="Digite o sobrenome" name="sobrenome" id="sobrenome" value="<?php echo $resultados["sobrenome"] ?>">
                <br />
                <input class="form-control" type="text" placeholder="Digite o email" name="email" id="email" value="<?php echo $resultados["email"] ?>">
                <br />
                <input class="form-control" type="text" placeholder="Digite celular" name="celular" id="celular" value="<?php echo $resultados["celular"] ?>">
                <br />
                <button class="btn btn-success">EDITAR</button>
            </form>
        </div>
    </div>
</div>


<?php
include('../componentes/footer.php');
?>
