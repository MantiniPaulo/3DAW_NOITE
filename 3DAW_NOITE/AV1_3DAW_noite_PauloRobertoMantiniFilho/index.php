<?php
if ($_SERVER["REQUEST_METHOD"]  == "POST"){
$disciplina = $_POST["disciplina"];
$periodo = $_POST["periodo"];
$requisito = $_POST["requisito"];
$credito = $_POST["credito"];

function validarDados(string $disciplina, string $periodo, string $requisito, int $credito)
{

}

function criarDisciplina()
{

}

function alterarDisciplina()
{

}

function listarDisciplinas()
{

}

function listarUmaDisciplina()
{

}

function excluirDisciplina()
{

}

}

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
    <h2>Criação, Alteração e Listagem de Disciplina</h2>
    <form action="index.php" method="POST">        
        <select name="funcionalidades">
        <option value=""> Selecione a Funcionalidade </option>
        <option value="criarDisciplina"> - Criar Disciplina</option>
        <option value="alterarDisciplina"> - Alterar Disciplina</option>
        <option value="listarDisciplinas"> - Listar Disciplinas</option>
        <option value="lsitarUmaDisciplina"> - Listar uma Disciplina</option>
        <option value="excluirDisciplina"> - Excluir Disciplina</option>             
        <br><br>        
        </select>
        <br><br>
        Nome da Disciplina: (ex: Matématica, Biologia, História,...) <br> 
        <input name="disciplina"/>
        <br>
        Periodo: (noturno ou diurno) <br> 
        <input name="periodo"/>
        <br>
        Pre Requesito (sim ou não): <br> 
        <input name="requisito"/>
        <br>
        Creditos: <br> 
        <input type="number" name="credito"/>  
        <br><br>
        <input type="submit" value = "Executar"/>
    </form>
    </div>
    
    <div class="carregarUsuario">
    <h2>Carregar Novo Usuário</h2> 
    

        <br><br>
        <input type="submit" value = "Carregar Arquivo"/>

    </div>
    
   
    
</body>
</html>