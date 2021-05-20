<?php
if ($_SERVER["REQUEST_METHOD"]  == "POST")
{     
        
    $operacao = (isset($_POST["operacao"])?$_POST["operacao"]:false);
    $disciplina = (isset($_POST["disciplina"])?$_POST["disciplina"]:false);
    $periodo = (isset($_POST["periodo"])?$_POST["periodo"]:false);
    $idPrerequesito = (isset($_POST["idPrerequesito"])?$_POST["idPrerequesito"]:false);
    $credito = (isset($_POST["credito"])?$_POST["credito"]:false);  
    
    //Criar conexão com o banco de dados
    $strcon = new mysqli('localhost','root','','banco_av1') or die('Erro ao conectar ao banco de dados');
   
    if ($operacao == "incluir")   
    {       
        $resultado = $strcon->query("INSERT INTO `disciplinas`(`nome`, `periodo`, `idPrerequesito`, `creditos`) VALUES" . "('$disciplina', $periodo, $idPrerequesito, $credito)");            
        if ($resultado)
        {
                       
            header(sprintf("location:index.html?resultado=%s", $resultado));
        }
        else
        {
            header(sprintf("location:index.html?resultado=%s", $resultado));
        }  
    

        $strcon->close(); 

    }
    if($operacao == "listarDisciplina")
    {        
        
            $strcon = new mysqli('localhost','root','','banco_av1') or die('Erro ao conectar ao banco de dados');
            $valores = $strcon->query("SELECT `nome`, `periodo`, `idPrerequesito`, `creditos` FROM `disciplinas`");
            $linhas = $valores->num_rows;
            for ( $i =0;$i<$linhas; $i++)
            {
                $reg = $valores->fetch_row();
                echo "disciplina: $reg[0] | periodo: $reg[1] | prerequesito: $reg[2] | creditos: $reg[3]<hr>";            
            }
            $strcon->close();         
    }   
    
        
} 
?>