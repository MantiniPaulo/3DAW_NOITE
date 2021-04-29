<?php
echo "Leitura de Arquivos";
echo "<br><br>";

    //echo readfile("alunosimp.csv");
    $arquivo = fopen("alunosimp2.csv", "r") or die ("não cosnegui abrir o arquivo, deu erro");
    
    
    echo fgets($arquivo);
    echo "<br>";
    echo fgets($arquivo);
    echo "<br>";
    echo fgets($arquivo);
    echo "<br>";


?>