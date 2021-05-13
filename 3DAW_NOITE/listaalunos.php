<?php
// criar conexão com o banco
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBanco = "faeterj3dawnoite";
$conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);

//passar o comando para ler a tabela no mysqli
$query = "SELECT * FROM alunos";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    while ($linha = $result->fetch_assoc()){
        echo "<tr>";

    }
</body>
</html>