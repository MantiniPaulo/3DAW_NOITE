<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores Lógicos</h1>
    AND &&
    <br>
    OR ||
    <br>
    XOR
    <br>
    !
    <br>
    <?php
        $n1 = 7;
        $n2 = 8;
        $n3 = 10;
        $n4 = 10;

        if ($n1 == $n2 AND $n3 == $n4){
            echo "A variavel n1 é igual a n2: $n1, e n3 é igual a n4 : n4=$n4";
        } else {
            echo "A variavel n1 NÃO é igual n2: $n1, e n3 NÂO é igual a n4 : $n4";
        }
        echo "<br>";
        if ($n1 == $n2 OR $n3 == $n4){
            echo "A variavel n1 é igual a n2: $n1, ou n3 e igual a n4 : $n3";
        } else {
            echo "a variavel n1 NÂO é igual a n2: $n1 e n3 não é igual a n4: $n4";
        }
        echo "<br>";
        if ($n1 == $n2 XOR $n3 == $n4){
            echo "A variavel n1 é igual a n2: n1=$n1, n2=$n2, ou n3 e igual a n4 : n3=$n3, n4=$n4";
        } else {
            echo "a variavel n1 é igual a n2: n1=$n1, n2=$n2 e n3 é igual a n4: n3= $n3, n4=$n4";
        }
        echo "<br>";
    ?>
</body>
</html>