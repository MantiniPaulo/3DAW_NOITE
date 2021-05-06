<?php
function ola($texto = "mundo", $periodo = "Bom dia"){
    return "ola $texto! $periodo!<br>"; 
}

echo  ola("Mundo", "Boa noite");
echo  ola("","");
echo  ola("Campeão");
echo  ola("");
echo  ola();




?>