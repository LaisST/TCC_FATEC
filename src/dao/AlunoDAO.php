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

                // while($element = mysqli_fetch_assoc($result)){

                //     $aluno = new Aluno();

                //     $aluno->setNome($element['nome']);

                    // $usuario->setEmail($element['emailUsuario']);

                    // $usuario->setSenha($element['senhaUsuario']);

                    // $usuario->setNome($element['nomeUsuario']);

                    // $usuario->setCpf($element['cpfUsuario']);

                    // $usuario->setCnpj($element['cnpjUsuario']);

                    // $usuario->setData_cadastro($element['dataCadastroUsuario']);

            //         return $aluno;

            //     }

            }

             return $result > 0;

        }
        
    }

