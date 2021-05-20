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
            header(sprintf("location:index.html?resultado=%s", $resultado));
        }
        else
        {
            header(sprintf("location:index.html?resultado=%s", $resultado));
        }  
    

        $strcon->close(); 

    }
    /*
     <br>
        <h2>Listagem de Usuários</h2>
        <?php
            $strcon1 = new mysqli('localhost','root','','banco_av1') or die('Erro ao conectar ao banco de dados');
            $valores = $strcon1->query("SELECT `nome`, `email`, `senha`, `tipo`, `perfil` FROM `usuario`");
            $linhas = $valores->num_rows;
            
            for ( $i =0;$i<$linhas; $i++)
            {
                $reg = $valores->fetch_row();
                echo "Nome: $reg[0] | email: $reg[1] | tipo: $reg[3] | perfil: $reg[4]<hr>";
            }
            $strcon1->close();
            */

?>