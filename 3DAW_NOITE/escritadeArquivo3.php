<?php
echo "Escrita de Arquivos";
echo "<br><br>";

    $arquivoSaida = fopen("alunosExp.csv", "w");
    $linhaArquivo = "nome;email;end;matricula\n";
    fwrite($arquivoSaida, $linhaArquivo);

    $linhaArquivo = "Paulo;ep@gmail.com;rua;123456\n";
    fwrite($arquivoSaida, $linhaArquivo);
    
    fclose($arquivoSaida);

?>