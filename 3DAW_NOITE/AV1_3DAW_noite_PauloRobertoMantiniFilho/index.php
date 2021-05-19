<?php
if ($_SERVER["REQUEST_METHOD"]  == "POST")
{    
    $id_disciplina = (isset($_POST["id_disciplina"])?$_POST["id_disciplina"]:false);
    $disciplina = (isset($_POST["disciplina"])?$_POST["disciplina"]:false);
    $periodo = (isset($_POST["periodo"])?$_POST["periodo"]:false);
    $idPrerequesito = (isset($_POST["idPrerequesito"])?$_POST["idPrerequesito"]:false);
    $credito = (isset($_POST["credito"])?$_POST["credito"]:false);
    $id = (isset($_POST["id"])?$_POST["id"]:false);
    $nome = (isset($_POST["nome"])?$_POST["nome"]:false);
    $email = (isset($_POST["email"])?$_POST["email"]:false);
    $senha = (isset($_POST["senha"])?$_POST["senha"]:false);
    $tipo = (isset($_POST["tipo"])?$_POST["tipo"]:false);
    $perfil = (isset($_POST["perfil"])?$_POST["perfil"]:false);     

}
    //Criar conexão com o banco de dados
    
    $strcon = mysqli_connect('localhost','root','','banco_av1') or die('Erro ao conectar ao banco de dados');
    $sql = "INSERT INTO disciplinas VALUES ";
    $sql .= "('$disciplina', '$periodo', '$idPrerequesito', '$credito')"; 
    
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AV1 - Paulo Roberto Mantini Filho</title>
</head>
<body>
    
    <div class="criacaoDisciplina">
    <form action="index.php" method="POST"> 
        <h1>Criação, Alteração e Listagem de Disciplina</h1>       
        <hr>
        <input type="hidden" name="id_disciplina" />
        Disciplina:
        <input type="text" name="disciplina"/>        
        Periodo:
        <input type="text" name="periodo"/>
        ID Prerequesito:
        <input type="number" name="idPrerequesito"/>
        Creditos:
        <input type="number" name="credito"/>
        <input type="submit" value="Criar Disciplina"/>
        <input type="reset" value="Novo"/>
        <hr>    
    </form>
    </div>    
    <div class="carregarUsuario">
        <h1>Adicionar Novo Usuário</h1>
        <hr>
        <input type="hidden" name="id" />
        Nome:
        <input type="text" name="nome" />
        E-mail:
        <input type="text" name="email" />
        Senha:
        <input type="number" name="senha" />
        Tipo:
        <input type="text" name="tipo" />
        Perfil: 
        <input type="text" name="perfil" />
        <input type="submit" value="Criar Usuário"/>
        <input type="reset" value="Novo"/>
        <br>
    </div>
    
   
    
</body>
</html>