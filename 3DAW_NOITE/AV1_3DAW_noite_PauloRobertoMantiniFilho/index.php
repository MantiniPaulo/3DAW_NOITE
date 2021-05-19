<?php 
    $resultado = (isset($_GET["resultado"])?$_GET["resultado"]:false);
    if (isset($_server["HTTP_REFERRER"]))
    {
        echo " ";
    }
    else if ($resultado == 1) 
    {
        echo "Procedimento efetutado";
    } else
    {
        echo "Erro. Favor inserir dados válidos";
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
    <form action="disciplina.php" method="POST"> 
        <h1>Criação, Alteração e Listagem de Disciplina</h1>       
        <hr>
        <input type="hidden" name="operacao" value="incluir"/>
        Disciplina:
        <input type="text" name="disciplina"/>        
        Periodo:
        <input type="number" name="periodo"/>
        ID Prerequesito:
        <input type="number" name="idPrerequesito"/>
        Creditos:
        <input type="number" name="credito"/>
        <input type="submit" value="Criar Disciplina"/>
        <input type="reset" value="Novo"/>
        <hr> 
    </form>
        <br>
        <?php
            $strcon = new mysqli('localhost','root','','banco_av1') or die('Erro ao conectar ao banco de dados');
            $valores = $strcon->query("SELECT `nome`, `periodo`, `idPrerequesito`, `creditos` FROM `disciplinas`");
            $linhas = $valores->num_rows;
            for ( $i =0;$i<$linhas; $i++)
            {
                $reg = $valores->fetch_row();
                echo "disciplina: $reg[0] | periodo: $reg[1] | prerequesito: $reg[2] | creditos: $reg[3]<hr>";
            }
            $strcon->close();
        ?>   
    </table>     
    
    </div> 

    <div class="carregarUsuario">
    <form action="usuario.php" method="POST">
        <h1>Adicionar Novo Usuário</h1>
        <hr>
        <input type="hidden" name="operacao" value="inclui"/>
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
        <hr>
    </form>    
        <br>
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
            
        ?>
    </table>
    </div>
    
   
    
</body>
</html>