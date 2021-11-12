<?php
include('../componentes/header.php');

require('../database/conexao.php');

$sql = "SELECT * FROM tbl_pessoa";

$pessoas = mysqli_query($conexao, $sql);

?>

<div class="container">

    <br />

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php
            while ($resultado = mysqli_fetch_array($pessoas)) {
            ?>
                <tr>
                    <th><?php echo $resultado["cod_pessoa"];  ?></th>
                    <th><?php echo $resultado["nome"];  ?></th>
                    <th><?php echo $resultado["sobrenome"];  ?></th>
                    <th><?php echo $resultado["email"];  ?></th>
                    <th><?php echo $resultado["celular"];  ?></th>

                    <th>
                        <form action="../editar/editar.php" method="get" style="display: inline;">
                            <input type="hidden" name="cod_pessoa" value="<?php echo $resultado["cod_pessoa"] ?>">
                            <button class="btn btn-warning">Editar</button>
                        </form>
                        <form action="" method="post" style="display: inline;">
                            <input type="hidden" name="id" value="">
                            <button class="btn btn-danger">Excluir</button>
                        </form>
                    </th>
                </tr>

            <?php
            }
            ?>

        </tbody>

    </table>

</div>

<?php
include('../componentes/footer.php');
?>