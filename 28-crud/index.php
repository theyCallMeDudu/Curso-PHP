<?php
    // Conexão
    include_once 'php-action/db-connect.php';
    // Inclusão do header
    include_once 'includes/header.php';
    // Mensagem feedback
    include_once 'includes/message.php';
?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Clientes</h3>
            <hr>
            <a class="btn" href="cadastro.php">Adicionar clientes</a>
            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>E-mail</th>
                        <th>Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        $sql = "SELECT * FROM cliente";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)):

                    ?>

                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['nascimento']; ?></td>
                        <td>
                            <a class="btn-floating orange" href="edicao.php?id=<?php echo $dados['id']; ?>">
                                <i class="material-icons">edit</i>
                            </a>
                            <a class="btn-floating red" href="">
                            <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>

                        <?php endwhile; ?>
                </tbody>
            </table>

        </div>
    </div>

<?php
    // Inclusão do footer
    include_once 'includes/footer.php';
?>