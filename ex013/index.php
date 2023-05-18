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
        if(isset($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $telefone = addslashes($_POST['telefone']);
            if(!empty($nome) && !empty($email) && !empty($telefone)){

                if(!$p -> cadastrarPessoa($nome, $email, $telefone)){
                    echo "Email já esta cadastrado!";
                }

            }else{
                echo "Preencha todos os campos!";
            }
        }
    
    ?>

    <section id="esquerda">
        <form method="POST">
            <h2>CADASTROS</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="email">Email</label>
            <input type="text" name="emial" id="email">

            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">

            <input type="submit" value="Cadastrar">
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
            if(count($dados) > 0){

                for($i=0;$i < count($dados); $i++){

                    echo "<tr>";

                    foreach($dados[$i] as $k => $v){

                        if($k != "id"){

                            echo "<td>".$v."</td>";
                        }
                    }
        ?>
                    <td>
                    <a href="">Excluir</a> <a href="">Editar</a>
                    </td>
        <?php
                    echo "</tr>";
                }
        
            }else{//BANCO DE DADOS ESTA VAZIO
                echo "Ainda não há Cadastros";
            }
        ?>
        </table>


    </section>


    
</body>
</html>