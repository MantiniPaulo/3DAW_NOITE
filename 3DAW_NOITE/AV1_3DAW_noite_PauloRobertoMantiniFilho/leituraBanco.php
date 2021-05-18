<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "disciplinas";

        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
        if ($conn->connect_error){
            die("conexao com erro: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `disciplinausuarios` WHERE 1";
        $result = $conn->query($sql);

        //print $result; 
        $Linha = $result->fetch_assoc();
        echo "Disciplina: " . $Linha["Disciplina"];

        /*$op = $_POST["op"];
        if ($op = "disciplinausuarios"){

        }*/
    } 
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AV1 - 3DAW - NOITE - PAULO MANTINI</title>
</head>
<body>
<form>
    <input type="submit" name="op" value="Listar Disciplinas">
    <br>    
</form>

    <a href="leituraBanco.php?bancoDis=disciplinas">Listar Disciplinas</a>
            
</body>
</html>