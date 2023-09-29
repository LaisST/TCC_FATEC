<?php
    require_once '../model/Aluno.php';
    require_once '../dao/AlunoDAO.php';
    require_once '../utilitarios/EnvioEmail.php';

    if(!isset($_SESSION['aluno'])){
        session_start();
    }

    class AlunoController{

        private $alunoDAO;
        private $envioEmail;

        public function __construct(){

            $this->alunoDAO = new AlunoDAO();
            $this->envioEmail = new EnvioEmail();
            
        }

        public function cadastrar(){
            $aluno = new Aluno();

            $aluno->setRA($_POST['ra']);
            $aluno->setNome($_POST['nome']);
            $aluno->setCpf($_POST['cpf']);
            $aluno->setData_nascimento($_POST['data_nascimento']);
            $aluno->setTelefone($_POST['telefone']);
            $aluno->setEmail($_POST['email']);
            $aluno->setSenha(mt_rand(100000, 999999));
            //$aluno->setSenha('604494');
            $aluno->setSenha_primeiro_acesso($aluno->getSenha());
            $aluno->setPrimeiro_acesso(1);
            $aluno->setSenha(hash('sha256', $aluno->getSenha()));

            $result = $this->alunoDAO->cadastrar($aluno);

            if(!is_null($result)){

                $this->envioEmail->enviarEmail($aluno->getEmail(), 'Cadastro', $this->corpo_email_cadastro($aluno));
                
                echo "<script language='javascript' type='text/javascript'>
                alert('Aluno cadastrado com sucesso!')
                window.location.href='../view/login-estudante.php'</script>";

            }else{

                echo "<script language='javascript' type='text/javascript'>
                alert('Aluno não cadastrado!')
                window.location.href='../view/cadastro_aluno.php'</script>";

            }
        }

        public function corpo_email_cadastro($aluno){

            $corpo_email_cadastro = "<!DOCTYPE html>
            <html>
            <head>
                <meta charset='UTF-8'>
                <title>Cadastro de Novo Aluno</title>
            </head>
            <body>
                <h1>Bem-vindo(a) a FATEC FERRAZ DE VASCONCELOS!</h1>
                
                <p>Olá ".$aluno->getNome().",</p>
            
                <p>Seu cadastro foi concluído com sucesso em nossa instituição. Abaixo estão os detalhes do seu novo cadastro:</p>
            
                <ul>
                    <li><strong>Nome:</strong> ".$aluno->getNome()."</li>
                    <li><strong>RA:</strong> ".$aluno->getRA()."</li>
                    <li><strong>Senha Provisória:</strong> ".$aluno->getSenha_primeiro_acesso()."</li>
                </ul>
            
                <p>Com essas informações, você pode acessar nosso sistema e começar a utilizar os recursos disponíveis. Recomendamos que você altere sua senha provisória após o primeiro login para garantir a segurança da sua conta.</p>
            
                <p>Para fazer o login, visite nossa página de login em: <a href='http://localhost/portalAluno/src/view/login-estudante.php'>Página de Login</a></p>
            
                <p>Agradecemos por escolher nossa instituição. Se tiver alguma dúvida ou precisar de assistência, não hesite em entrar em contato conosco.</p>
            
                <p>Atenciosamente,<br>
                Secretaria <br>
                Fatec Ferraz de Vasconcelos<br>
                Telefone: 0000-0000<br>
                Email: mudar@nome.com</p>
            </body>
            </html>";

            return $corpo_email_cadastro;
        }

        public function logar(){
            $aluno = new Aluno();
            
            // $aluno->setRA($_POST['ra']);
            // $aluno->setSenha($_POST['senha']);
            // $aluno->setSenha($aluno->setSenha(hash('sha256', $aluno->getSenha())));
            $aluno->setRA($_POST['ra']);
            $senhaCriptografada = hash('sha256', $_POST['senha']);
            $aluno->setSenha($senhaCriptografada);
            $result = $this->alunoDAO->logar($aluno);

            if(!is_null($result)){
                $_SESSION['aluno'] = serialize($result);
                header('location:../view/home.php');

            }else{
                header('location:../view/login-estudante.php');
            }

        }

        public function logout(){
            if (isset($_SESSION['aluno'])) {
                session_destroy();
                header("Location:../../index.php");
                exit;
            } else {
                echo "Você não está logado.";
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

            case "logout":
                $alunoController->logout();
                break;

            case "cadastrar":
                $alunoController->cadastrar();
                break;

            case "alterar_senha":
                
                break;
        }
    }
?>
