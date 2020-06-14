<?php
    //Criptografia
    echo "*** Criptografia *** <br><br>";
    

    // base64
    echo "> base64:<br>";
    $senha = "123456";
    $novaSenha = base64_encode($senha);
    echo "Criptografada: $novaSenha<br>";
    echo "Sua senha é: ".base64_decode($novaSenha);

    echo "<hr>";

    // md5
    echo "> md5:<br>";
    $senha = "123456";
    echo "Senha: $senha<br>";
    echo "Criptografada: ".md5($senha);

    echo "<hr>";

    // sha1
    echo "> sha1:<br>";
    $senha = "123456";
    echo "Senha: $senha<br>";
    echo "Criptografada: ".sha1($senha);

    echo "<hr>";

    /* $options utiliza com a propriedade 'cost' recursos de hardware 
    *  para gerar o hash que irá criptografar a senha.
    *  Quanto maior o cost (custo), maior o seu hash e mais segura
    *  a sua senha.
    *  Entretanto, mais a função irá exigir do hardware para gerar
    *  a criptografia.
    */
    $options = [
        'cost' => 10,
    ];

    // Senha criada
    $senha = "123456";

    // Função para criptografar
    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
    echo $senhaSegura."<br>";

    // Senha criptografada
    $senha_db = '$2y$10$XSvDnsFwrUQfdn3qtgmvse0r5x1E7T3AVKJ8vboEgHt/KJt85Y6am';

    // Para autenticar a senha criptografada:
    if(password_verify($senha, $senha_db)):
        echo "Senha válida.";
    else:
        echo "Senha inválida.";
    endif;
