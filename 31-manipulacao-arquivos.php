<?php
    // Manipulação de arquivos
    /*
    * fopen();
    * fclose();
    * fwrite();
    * !feof(); - contrário do final do arquivo (not file end of)
    * fgets();
    * filesize;
    */

    // Modos de abertura
    // ‘r’ Abre somente para leitura;
    //  coloca o ponteiro do arquivo no começo do arquivo.

    // ‘r+’ Abre para leitura e escrita; 
    //  coloca o ponteiro do arquivo no começo do arquivo.

    // ‘w’ Abre somente para escrita; 
    //  coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

    // ‘w+’ Abre para leitura e escrita; 
    //  coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

    // ‘a’ Abre somente para escrita; 
    //  coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

    // ‘a+’ Abre para leitura e escrita; 
    //  coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

    // ‘x’ Cria e abre o arquivo somente para escrita; 
    //  coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.

    // ‘x+’ Cria e abre o arquivo para leitura e escrita; 
    //  coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.

    echo "*** Manipulação de arquivos ***<br><br>";

    $arquivo = 'arquivo.txt';
    $conteudo = "Conteúdo de teste\r\n";
    $tamanhoArquivo = filesize($arquivo);

    // fopen(arquivo, modo de abertura);
    $arquivoAberto = fopen($arquivo, 'r');

    // fwrite(arquivo aberto, conteúdo);
    //fwrite($arquivoAberto, $conteudo);

    while(!feof($arquivoAberto)):
        $linha = fgets($arquivoAberto, $tamanhoArquivo);
        echo $linha."<br>";
    endwhile;

    fclose($arquivoAberto);