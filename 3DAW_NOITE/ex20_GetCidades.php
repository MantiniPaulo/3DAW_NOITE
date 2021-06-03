<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $cidadesRio = array("angra", "Rio de janeiro", "Petropolis");
    $estado = $_GET["estado"];
    if ($estado == "RJ") {
        echo "Rio de Janeiro";
    } else {
        echo "Salvador";
    }

}

?>