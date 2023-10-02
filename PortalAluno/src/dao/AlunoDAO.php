<?php
    require_once 'Conexao.php';
    require_once '../model/Aluno.php';

    class AlunoDAO{
        private $banco;

        public function __construct(){

            $this->banco = new Conexao();

        }

        public function logar($aluno){

            $sql = "SELECT * FROM `aluno` WHERE `RA` = '".$aluno->getRa()."' AND `senha` = '".$aluno->getSenha()."' LIMIT 1";
            $result = mysqli_query($this->banco->getConexao(), $sql);
            $this->banco->desconectar();

            if(mysqli_num_rows($result) > 0){

                while($element = mysqli_fetch_assoc($result)){

                    $aluno = new Aluno();

                    $aluno->setRa($element['RA']);
                    $aluno->setNome($element['nome']);
                    $aluno->setPrimeiro_acesso($element['primeiro_acesso']);

                    return $aluno;

                }
            }

            return null;
        }

        public function cadastrar($aluno){

        
            $sqlInsert = "INSERT INTO aluno (RA, nome, cpf, data_nascimento, telefone, email, senha, primeiro_acesso)
            values ('".$aluno->getRa()."', '".$aluno->getNome()."', '".$aluno->getCpf()."', '".$aluno->getData_nascimento()."', '".$aluno->getTelefone()."', '".$aluno->getEmail()."', '".$aluno->getSenha()."', '".$aluno->getPrimeiro_acesso()."')";
            
            $result = mysqli_query($this->banco->getConexao(),$sqlInsert);

            $this->banco->desconectar();

            return $result > 0;

            
        }

        public function existe_aluno($RA, $email){
            $sql = "SELECT RA FROM `aluno` WHERE `RA` = '".$RA."' AND email LIKE '".$email."' LIMIT 1";

            $result = mysqli_query($this->banco->getConexao(), $sql);

            return mysqli_num_rows($result) > 0;

        }

        public function existe_token($token){
            $sql = "SELECT RA FROM `aluno` WHERE `token` = '".$token."' AND `expiracao_token` > NOW() LIMIT 1";

            $result = mysqli_query($this->banco->getConexao(), $sql);


            return mysqli_num_rows($result) > 0;
        }

        public function salvar_token($RA, $email, $token){
           $sqlUpdate = "UPDATE aluno SET token = '".$token."', expiracao_token = DATE_ADD(NOW(), INTERVAL 24 HOUR) WHERE email LIKE '".$email."' AND RA = '".$RA."'";

            $result = mysqli_query($this->banco->getConexao(), $sqlUpdate);
            $this->banco->desconectar();

            return $result > 0;
        }
        
    }

