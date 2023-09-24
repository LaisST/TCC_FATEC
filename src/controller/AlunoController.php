<?php
    require_once '../model/Aluno.php';
    require_once '../dao/AlunoDAO.php';

    class AlunoController{
        private $alunoDAO;

        public function __construct(){

            $this->alunoDAO = new AlunoDAO();
            
        }

        public function logar(){
            $aluno = new Aluno();
            
            $aluno->setRA($_POST['ra']);
            $aluno->setSenha($_POST['senha']);

            if($this->alunoDAO->logar($aluno)){

                header('location:../view/home.php');

            }

        }
        
    }

    if(isset($_GET['acao'])){

        $acao = $_GET['acao'];
        $alunoController = new AlunoController();

        switch($acao){
            case "login":
                $alunoController->logar();
                break;
        }
    }
?>
