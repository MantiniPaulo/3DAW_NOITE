<?php

$a = $_POST["a"]; //recebe o primeiro número do html
$b = $_POST["b"]; //recebe o segundo número do html
$operação = $_POST["operacao"]; //recebe a informação da seleção da operação no html
$resultado = 0;

//o if seleciona qual operaçõa fazer
if ($operação == "soma") {
    echo $resultado
 = ($a + $b);
} else if ($operação == "subitração") {
    echo $resultado
 = ($a - $b);
} else if ($operação == "multiplicação") {
    echo $resultado
 = ($a * $b);
} else {
    echo $resultado
 = ($a / $b);
}

?>