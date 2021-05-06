<?php
function ola(){
    $arguemntos = func_get_args();
    
    return $arguemntos;
}

var_dump(ola("bom dia", 10))


?>