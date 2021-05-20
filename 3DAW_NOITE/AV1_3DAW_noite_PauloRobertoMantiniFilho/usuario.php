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
        if ($resultado)
        {                       
            header(sprintf("location:index.html?resultado=%s", $resultado));
        }
        else
        {
            header(sprintf("location:index.html?resultado=%s", $resultado));
        }
        $strcon->close(); 

    }else if($operacao == "listarUsuario")
    {
        $valores = $strcon->query("SELECT `nome`, `email`, `senha`, `tipo`, `perfil` FROM `usuario`");
        $linhas = $valores->num_rows;
        echo '<div class="container">';
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';       
        echo '<th scope="col">Nome</th>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">RTipo</th>';
        echo '<th scope="col">Perfil</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';        
        for ( $i=0;$i<$linhas; $i++)
        {
            echo '<tr>';
            $reg = $valores->fetch_row();
            echo "<th>$reg[0]</th> <th>$reg[1]</th> <th>$reg[3]</th> <th>$reg[4]</th>";
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        $strcon->close();
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


