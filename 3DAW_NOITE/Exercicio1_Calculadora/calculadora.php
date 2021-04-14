<?php

$a = $_POST["a"]; //recebe o primeiro número do html
$b = $_POST["b"]; //recebe o segundo número do html
$operação = $_POST["operacao"]; //recebe a informação da seleção da operação no html


if ($b == 0 && $operação == "divisão"){
    echo "Operação impossível";
    echo "<br>";
    echo "Um número não pode ser dividido por zero";    
}else if ($operação == "soma") { //if seleciona qual operaçõa fazer
    echo "Resultado: " . $resultado
 = ($a + $b);
} else if ($operação == "subtração") {
    echo "Resultado: " . $resultado
 = ($a - $b);
} else if ($operação == "multiplicação") {
    echo "Resultado: " . $resultado
 = ($a * $b);
} else {
    echo "Resultado: " . $resultado
 = ($a / $b);
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <form>
        <br>
        <input type="button" value="Voltar" onclick="history.go(-1)" />
    </form>
</body>
</html>