<!DOCTYPE html>
<?php 
    require_once 'classPessoa.php';
    $p = new Pessoa("CRUDPDO","localhost","root","");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Pessoa</title>
</head>
<body>
    <?php 
        if(isset($_POST['nome'])){//CLICOU NO BOTÃO CADASTRAR OU EDITAR

            //-----------------EDITAR-----------------------------
            if(isset($_GET['id_up']) && !empty($_GET['id_up'])){

                $id_upd = addslashes($_GET['id_up']);
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $telefone = addslashes($_POST['telefone']);
    
                if(!empty($nome) && !empty($email) && !empty($telefone)){
    
                    $p -> atualizarDados($id_upd,$nome, $email, $telefone);
                    header("location: index.php");
                    
    
                }else{
                    ?>
                        <div class="aviso"><h4>Preencha todos os campos!</h4></div>
                    <?php
                }
            }
            //----------------CADASTRAR---------------------------
            else{

                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $telefone = addslashes($_POST['telefone']);
    
                if(!empty($nome) && !empty($email) && !empty($telefone)){
    
                    if(!$p -> cadastrarPessoa($nome, $email, $telefone)){
                        ?>
                            <div class="aviso"><h4>Email já cadastrado!</h4></div>
                        <?php
                    }
    
                }else{
                    ?>
                        <div class="aviso"><h4>Preencha todos os campos!</h4></div>
                    <?php
                }
            }
        }
    
    ?>
    <?php 
        if(isset($_GET['id_up'])){//SE A PESSOA CLICOU EM EDITAR
            $id_update = addslashes($_GET['id_up']);
            $res = $p -> buscarDadosPessoa($id_update);
            

        }
    
    ?>

    <section id="esquerda">
        <form method="POST">
            <h2>CADASTROS</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php if(isset($res)){echo $res['nome'];}?>">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php if(isset($res)){echo $res['email'];}?>">

            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone"  value="<?php if(isset($res)){echo $res['telefone'];}?>">

            <input type="submit" value="<?php if(isset($res)){echo "Atualizar";}else{echo "Cadastrar";}?>">
        </form>
    </section>

    <section id="direita">
        <table>
            <tr id="titulo">
                <td>NOME</td>
                <td>E-MAIL</td>
                <td colspan="2">TELEFONE</td>
            </tr>
        <?php 
            $dados = $p -> buscarDados();
            if(count($dados) > 0){//TEM PESSOAS NO BANCO DE DADOS

                for($i=0;$i < count($dados); $i++){

                    echo "<tr>";

                    foreach($dados[$i] as $k => $v){

                        if($k != "id"){

                            echo "<td>".$v."</td>";
                        }
                    }
        ?>
                    <td>
                    <a href="index.php?id=<?php echo $dados[$i]['id'];?>">Excluir</a> 
                    <a href="index.php?id_up=<?php echo $dados[$i]['id'];?>">Editar</a>
                    </td>
        <?php
                    echo "</tr>";
                }
        
            }else{//BANCO DE DADOS ESTA VAZIO
               
        ?>
        </table>
            <div class="aviso"><h4>Ainda não há Cadastros!</h4></div>
            <?php
            }
        ?>
    </section>   
    <?php 
    if(isset($_GET['id'])){
        $id_pessoa = addslashes($_GET['id']);
        $p -> excluirPessoa($id_pessoa);
        header("location: index.php");

    }

?> 
</body>
</html>
