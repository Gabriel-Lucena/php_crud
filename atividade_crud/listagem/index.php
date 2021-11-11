<?php
include('../componentes/header.php');

require('../database/conexao.php');

$sql = "SELECT * FROM tbl_pessoa";

$pessoas = mysqli_query($conexao, $sql);

$resultado = mysqli_fetch_array($pessoas);
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

            <tr>

                <th><?php echo $resultado["cod_pessoa"];  ?></th>
                <th><?php echo $resultado["nome"];  ?></th>
                <th><?php echo $resultado["sobrenome"];  ?></th>
                <th><?php echo $resultado["email"];  ?></th>
                <th><?php echo $resultado["celular"];  ?></th>

                <th>
                    <button class="btn btn-warning">Editar</button>
                    <form action="" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="">
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </th>
            </tr>

            <?php
            while ($resultado = mysqli_fetch_array($pessoas)) {
            ?>
                <th><?php echo $resultado["cod_pessoa"];  ?></th>
                <th><?php echo $resultado["nome"];  ?></th>
                <th><?php echo $resultado["sobrenome"];  ?></th>
                <th><?php echo $resultado["email"];  ?></th>
                <th><?php echo $resultado["celular"];  ?></th>

                <th>
                    <button class="btn btn-warning">Editar</button>
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