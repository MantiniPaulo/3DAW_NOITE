<?php

$nome1 = "Paulo";
$sobrenome = "Mantini";

$nomecompleto = $nome1." ".$sobrenome; //concatenar

echo $nomecompleto;

exit;

echo $nome1;

echo "<br>";

unset($nome1); //define os padrões de nome

if (isset($nome1)){ //define se ela existe
    echo $nome1;
}

?>