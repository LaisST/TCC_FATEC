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

                    return $aluno;

                }
            }

            return null;
        }

        public function cadastrar($aluno){

        
            $sqlInsert = "INSERT INTO aluno (RA, nome, cpf, data_nascimento, telefone, email, senha, primeiro_acesso)
            values ('".$aluno->getRa()."', '".$aluno->getNome()."', '".$aluno->getCpf()."', '".$aluno->getData_nascimento()."', '".$aluno->getTelefone()."', '".$aluno->getEmail()."', '".$aluno->getSenha()."', '".$aluno->getPrimeiro_acesso()."')";
            
            if (!mysqli_query($this->banco->getConexao(),$sqlInsert)) {

                return false;

            }else{

                return true;

            }
        }

        
    }

