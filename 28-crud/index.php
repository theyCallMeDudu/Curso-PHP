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
                        
                        if(mysqli_num_rows($resultado) > 0):
                        
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

                            <a class="btn-floating red modal-trigger" id="#modal<?php echo $dados['id']; ?>" data-target="modal<?php echo $dados['id']; ?>" href="">
                                <i class="material-icons">delete</i>
                            </a>

                            <!-- Modal Structure -->
                            <div id="modal<?php echo $dados['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Excluir cliente</h4>
                                    <p>Tem certeza que deseja excluir este cliente?</p>
                                </div>

                                <div class="modal-footer">
                                    <form action="php-action/delete.php" method="POST">
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">
                                            Cancelar
                                        </a>

                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                        <button type="submit" name="btn-deletar" class="btn red">Confirmar</button>
                                    </form>
                                </div>
                            </div>

                        </td>
                    </tr>

                        <?php
                                endwhile;
                            else:
                        ?>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>    
                        <?php
                            endif;
                         ?>
                </tbody>
            </table>

        </div>
    </div>

<?php
    // Inclusão do footer
    include_once 'includes/footer.php';
?>