<?php 
    $resultado = (isset($_GET["resultado"])?$_GET["resultado"]:2);
       
        if ($resultado == 1) 
        {               
            echo "<script> alert('Efetuado') </script>";
        } else if($resultado == 0)
        {
            echo "<script> alert('ERRO - Incluir Dados') </script>";
        }  
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AV1 - Paulo Roberto Mantini Filho</title>
</head>
<body>
    <div class="container" >
    <h2>Av1 - Aluno: Paulo Roberto Mantini Filho</h2>
    <div class="criacaoDisciplina">
    <form class="container" action="disciplina.php" method="POST"> 
        <h2>Criação de Disciplina</h2>       
        <hr>
        <input type="hidden" class="row" name="operacao" value="incluir"/><br>       
        Disciplina:
        <input type="text" class="row" name="disciplina" required/> <br>        
        Periodo:
        <input type="number" class="row" name="periodo" required /> <br>
        ID Prerequesito:
        <input type="number" class="row" name="idPrerequesito" required /> <br>
        Creditos:
        <input type="number" class="row" name="credito" required/><br>
        <input type="submit" class="btn btn-primary" value="Criar Disciplina"/>
        
        <hr> 
    </form>        
    </table>
        <br>    
    </div>     

    <div class="carregarUsuario">
    <form class="container" action="usuario.php" method="POST">
        <h2>Criação de Usuário</h2>

        <input type="file" class="btn btn-primary" name="arquivo"/> <br>
        
        <h3></h3>
        <input type="hidden" name="operacao" value="inclui"/>
       
        <input type="hidden" name="id" /> <br>
        Nome:
        <input type="text" class="row" name="nome" /><br>
        E-mail:
        <input type="text" class="row" name="email" /><br>
        *Senha:
        <input type="number" class="row" name="senha" /><br>
        Tipo:
        <input type="text" class="row"  name="tipo" /><br>
        Perfil: 
        <input type="text" class="row" name="perfil" /> <br>
        <input type="submit" class="btn btn-primary" value="Criar Usuário"/>
        <input type="submit" class="btn btn-primary" value="Listar Usuário"/>
        
        
    </form>    
       
       
    </table>
    </div>
    </div>
    
            
    
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>