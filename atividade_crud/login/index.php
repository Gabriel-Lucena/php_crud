<?php
    include('../componentes/header.php');
?>

    <div class="container-geral">
    
        <div class="container-form">
    
                <form action="./processaLogin.php" method="POST">

                    <input type="hidden" name="acao" id="ацао" value="login">

                    <div class="form-group">
                        <label for="txt_usuario">USUÁRIO</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>

                    <div class="form-group">
                        <label for="txt_senha">SENHA</label>
                        <input type="password" class="form-control" name="senha" id="senha">
                    </div>

                    <div class="form-group">
                      <button class="btn btn-primary" type="submit">LOGAR</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

<?php
    include('../componentes/footer.php');
?>