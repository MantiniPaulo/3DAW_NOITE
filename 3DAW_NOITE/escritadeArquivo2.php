<?php
echo "Leitura de Arquivos";
echo "<br><br>";

    //echo readfile("alunosimp.csv");
    $arquivo = fopen("alunosimp2.csv", "r") or die ("não cosnegui abrir o arquivo, deu erro");
    echo fread($arquivo, filesize("alunosimp2.csv"));
    fclose($arquivo);

?>