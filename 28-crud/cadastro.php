<?php
    // Inclusão do header
    include_once 'includes/header.php';
?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Novo cliente</h3>
            <hr>
            
            <form action="php-action/create.php" method="POST">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="sobrenome" id="sobrenome">
                    <label for="sobrenome">Sobrenome</label>
                </div>

                <div class="input-field col s12">
                    <input type="email" name="email" id="email">
                    <label for="email">E-mail</label>
                </div>

                <div class="input-field col s12">
                    <input type="date" name="nascimento" id="nascimento">
                    <label for="nascimento">Nascimento</label>
                </div>

                <button type="submit" class="btn" name="btn-cadastrar">Cadastrar</button>
                <a href="index.php" class="btn green">Lista de clientes</a>

            </form>
            
        </div>
    </div>

<?php
    // Inclusão do footer
    include_once 'includes/footer.php';
?>