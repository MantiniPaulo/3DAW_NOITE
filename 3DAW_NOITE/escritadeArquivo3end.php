<?php
echo "Escrita de Arquivos";
echo "<br><br>";

    //$arquivoSaida = fopen("alunosExp.csv", "w");
    //$linhaArquivo = "nome;email;end;matricula\n";
    //fwrite($arquivoSaida, $linhaArquivo);
    //$linhaArquivo = "Paulo;ep@gmail.com;rua;123456\n";
    
    //fwrite($arquivoSaida, $linhaArquivo);

    $linhaArquivo = "Paulo Mantini;ep@gmail.com;rua 12;123456\n";
    file_put_contents("alunosExp.csv", $linhaArquivo, FILE_APPEND);
    
    //fwrite($arquivoSaida, $linhaArquivo);
    //fclose($arquivoSaida);

?>