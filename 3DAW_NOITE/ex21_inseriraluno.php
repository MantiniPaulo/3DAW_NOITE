<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){    
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $cpf = $_GET["cpf"];
    $mat = $_GET["matricula"];
    $uf = $_GET["uf"];
    $cidade = $_GET["cidade"];

   
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "faeterj3dawnoite";

    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
    if ($conn->connect_error) {
        die("Conexão com erro: " . $conn->connect_error);
    }

    $sql = "Insert into `alunos` (`id`,`nome`, `email`, `cpf`, `matricula`, `uf`, `cidade`) VALUES ('$nome', '$email', '$cpf', '$mat', '$uf','$cidade')";
    $result = $conn->query($sql);
    
    echo json_encode(value:"Aluno Inserido com sucesso"); 
}



?>