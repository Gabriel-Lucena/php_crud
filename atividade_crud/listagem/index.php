<?php

session_start();

include('../componentes/header.php');

require('../database/conexao.php');

require('../login/verificarLogin.php');


verificarLogin($_SESSION["id"]) == false ? header('location: ../login'): null;

// if (isset($_SESSION["id"]) == false) {
//     header('location: ../login');
// };

// if (verificarLogin($_SESSION["id"], session_id()) == true) {} else {header('location: ../login');};

$sql = "SELECT * FROM tbl_pessoa";

$pessoas = mysqli_query($conexao, $sql);

var_dump($_SESSION["id"]);
var_dump(session_id());


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
                        <form action="../acaoExcluir" method="get" style="display: inline;">
                            <input type="hidden" name="cod_pessoa" value="<?php echo $resultado["cod_pessoa"] ?>">
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