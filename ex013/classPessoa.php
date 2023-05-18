<?php 


    Class Pessoa{

        //6 FUNÇÕES

        private $pdo;

        //CONEXÃO COM O BANCO DE DADOS
        public function __construct($dbname, $host, $user, $senha){

            global $pdo;
           
            try{
            $sql= $pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $senha);
            }catch(PDOException $e){
                echo "Erro com banco de dados:".$e -> getMessage();
                exit();
            }catch(Exception $e){
                echo "Erro generico:".$e -> getMessage();
                exit();
            }
        }

        //FUNÇÃO PARA BUSCAR DADOS E COLOCAR DO LADO DIREITO DA TELA 
        public function buscarDados(){

            global $pdo;

            $res = array();
            $sql = $pdo->query("SELECT * FROM PESSOA ORDER BY nome");
            $res = $sql-> fetchAll(PDO::FETCH_ASSOC);
            
            return $res;
        }


        //CADASTRAR PESSOAS NO BANCO DE DADOS 
        public function cadastrarPessoa($nome, $email, $telefone){
            global $pdo;

            //ANTES DE CADASTRAR VEREFICAR SE JA TEM O EMAIL CADASTRADO
            $sql = $pdo->prepare("SELECT id  FROM PESSOA WHERE email = :e");
            $sql ->bindValue(":e", $email);
            $sql -> execute();

            if($sql -> rowCount() > 0){//EMAIL JÁ EXISTE NO BANCO DE DADOS
                return false;

            }else{//NÃO FOI CADASTRADO
                $sql = $pdo -> prepare("INSERT INTO PESSOA(nome, email, telefone)VALUES (:n, :e, :t)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":t", $telefone);
                $sql-> execute();
                return true;

            }
        }

        //EXCLUIR 
        public function excluirPessoa($id){
            global $pdo;
            $sql = $pdo -> prepare("DELETE FROM PESSOA WHERE id = :id");
            $sql -> bindValue(":id", $id);
            $sql -> execute();


        }

        //BUSCAR DADOS DE UMA PESSOA
        public function buscarDadosPessoa($id){
            global $pdo;

            $res = array();
            $sql = $pdo -> prepare("SELECT * FROM PESSOA WHERE id = :id");
            $sql -> bindValue(":id", $id);
            $sql -> execute();
            $res = $sql -> fetch(PDO::FETCH_ASSOC);
            return $res;
        }

        //ATUALIZAR DADOS NO BANCO DE DADOS 
        public function atualizarDados($id, $nome, $email, $telefone){
            global $pdo;
            
            $sql = $pdo -> prepare("UPDATE PESSOA SET nome = :n, email = :e, telefone = :t WHERE id = :id");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":t", $telefone);
            $sql->bindValue(":id", $id);
            $sql-> execute();
        }


    }



?>