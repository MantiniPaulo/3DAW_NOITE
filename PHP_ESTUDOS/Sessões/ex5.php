<?php

require_once("config.php");

echo session_save_path();
echo "<br>";


echo var_dump(session_status());

echo "<br>";

switch (session_status()){
    case PHP_SESSION_DISABLED:
    echo "A sessão nãos esta Habilitada";
    case PHP_SESSION_NONE:
    echo "sessão habilitada, mas nenhum existe";
    case PHP_SESSION_ACTIVE:
    echo "Sessão Habilitada";
}
?>