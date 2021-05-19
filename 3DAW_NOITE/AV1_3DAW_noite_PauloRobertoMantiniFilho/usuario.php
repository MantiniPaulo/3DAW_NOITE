<?php

    $operacao = (isset($_POST["operacao"])?$_POST["operacao"]:false);
    $id = (isset($_POST["id"])?$_POST["id"]:false);
    $nome = (isset($_POST["nome"])?$_POST["nome"]:false);
    $email = (isset($_POST["email"])?$_POST["email"]:false);
    $senha = (isset($_POST["senha"])?$_POST["senha"]:false);
    $tipo = (isset($_POST["tipo"])?$_POST["tipo"]:false);
    $perfil = (isset($_POST["perfil"])?$_POST["perfil"]:false); 

    //Criar conexão com o banco de dados
    $strcon = new mysqli('localhost','root','','banco_av1') or die('Erro ao conectar ao banco de dados');
   
    if ($operacao == "inclui")   
    {       
        $resultado = $strcon->query("INSERT INTO `usuario`(`nome`, `email`, `senha`, `tipo`, `perfil`) VALUES" . "('$nome', '$email', $senha, '$tipo', '$perfil')");            
        if ($resultado1)
        {                       
            header(sprintf("location:index.php?resultado=%s", $resultado));
        }
        else
        {
            header(sprintf("location:index.php?resultado=%s", $resultado));
        }  
    

        $strcon->close(); 

    }


?>