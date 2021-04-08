<?php

$a = $_POST["a"]; //recebe o primeiro número do html
$b = $_POST["b"]; //recebe o segundo número do html
$operação = $_POST["operacao"]; //recebe a informação da seleção da operação no html
$resp = 0;

//o if seleciona qual operaçõa fazer
if ($operação == "soma") {
    echo $resp = ($a + $b);
} else if ($operação == "subitração") {
    echo $resp = ($a - $b);
} else if ($operação == "multiplicação") {
    echo $resp = ($a * $b);
} else {
    echo $resp = ($a / $b);
}

?>