<?php
echo "Leitura de Arquivos";
echo "<br><br>";

    //echo readfile("alunosimp.csv");
    $arquivo = fopen("alunosimp2.csv", "r") or die ("não cosnegui abrir o arquivo, deu erro");
    $linhas = array();
    $colunas = array();
    
    while (!feof($arquivo))
    {
        $linhas[] = fgets($arquivo);        
    }
    foreach($linhas as $linha){
        echo $linha;
        $colunas[]= explode(";", $linha);
        echo $colunas[0] . $colunas[1] . $colunas[2] . $colunas[3];
        echo "<br>";
    }
    echo "<br>";
    fclose($arquivo);

?>