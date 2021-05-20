<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            echo "<script> alert('Efetuado') </script>";           
            header(sprintf("location:index.html?resultado=%s", $resultado));
            
        }
        else
        {
            header(sprintf("location:index.html?resultado=%s", $resultado));
        }  
    

        $strcon->close(); 

    }else if($operacao == "listarDisciplina")
    {        
        
            $valores = $strcon->query("SELECT `nome`, `periodo`, `idPrerequesito`, `creditos` FROM `disciplinas`");
            $linhas = $valores->num_rows;
            echo '<div class="container">';
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';       
            echo '<th scope="col">Disciplina</th>';
            echo '<th scope="col">Periodo</th>';
            echo '<th scope="col">Requesito</th>';
            echo '<th scope="col">Credito</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            for ( $i =0;$i<$linhas; $i++)
            {
                echo '<tr>';
                $reg = $valores->fetch_row();
                echo "<th>$reg[0]</th> <th>$reg[1]</th> <th>$reg[2]</th> <th>$reg[3]</th>"; 
                echo '</tr>';        
                          
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            $strcon->close();         
    }   
    
        
} 
?>
<div class="container">
    <a style="cursor: pointer;" title="Voltar" onclick="voltar()">Voltar página anterior</a>
</div>

<script>
function voltar() {
    window.history.back();
}
</script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</html>

