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
            $aluno->setSenha_primeiro_acesso($aluno->getSenha());
            $aluno->setPrimeiro_acesso(0);
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

        public function corpo_email_recuperar_senha($link){

            $corpo_email_recuperar_senha = "<!DOCTYPE html>
            <html lang='pt-br'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Recuperação de Senha</title>
            </head>
            <body>
                <div style='text-align: center;'>
                    <h1>Recuperação de Senha</h1>
                    <p>Olá,</p>
                    <p>Recebemos uma solicitação para redefinir sua senha. Clique no link abaixo para criar uma nova senha:</p>
                    <p><a href='".$link."' style='background-color: #007bff; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Redefinir Senha</a></p>
                    <p>Se você não solicitou uma redefinição de senha, pode ignorar este e-mail com segurança.</p>
                    <p>Obrigado,</p>
                    <p>Atenciosamente,<br>
                    Secretaria <br>
                    Fatec Ferraz de Vasconcelos<br>
                    Telefone: 0000-0000<br>
                    Email: mudar@nome.com</p>
                </div>
            </body>
            </html>
            ";

            return $corpo_email_recuperar_senha;
        }



        public function logar(){

            $aluno = new Aluno();

            $aluno->setRA($_POST['ra']);
            $senhaCriptografada = hash('sha256', $_POST['senha']);
            $aluno->setSenha($senhaCriptografada);

            $result = $this->alunoDAO->logar($aluno);

            if(!is_null($result)){

                $_SESSION['aluno'] = serialize($result);
                header('location:../view/home.php');

            }else{

                echo "<script language='javascript' type='text/javascript'>
                alert('RA ou Senha inválidos. Por favor, tente novamente')
                window.location.href='../view/login-estudante.php'</script>";

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

        public function enviar_token(){
            if(isset($_GET["acao"])){

                $RA = $_POST["ra"];
                $email = $_POST["email"];

                if ($this->existe_aluno($RA, $email)) {

                    // Gerar um token de redefinição de senha único
                    $token = "";

                    do{

                        $token = bin2hex(random_bytes(32));

                    }while($this->existe_token($token));

                    // Armazenar o token na base de dados junto com o e-mail e uma data de expiração

                    $this->salvar_token($RA, $email, $token);

                    // // Enviar um e-mail com um link de redefinição de senha

                    $link = "http://localhost/portalAluno/src/view/alterar_senha_token.php?token=$token";
                    $this->envioEmail->enviarEmail($email, "Redefinir Senha do Portal do Aluno", $this->corpo_email_recuperar_senha($link));

                    /*$mensagem = "Clique no link a seguir para redefinir sua senha: $link";
                    mail($email, "Redefinição de Senha", $mensagem);*/

                    echo "<script language='javascript' type='text/javascript'>
                    alert('Um e-mail com instruções para redefinir sua senha foi enviado para o seu endereço de e-mail.')
                    window.location.href='../view/login-estudante.php'</script>";

                } else {
                    echo "<script language='javascript' type='text/javascript'>
                    alert('O e-mail fornecido não foi encontrado em nossa base de dados.')
                    window.location.href='../view/login-estudante.php'</script>";

                }
            }
        }

        public function existe_aluno($RA, $email){
            $existeAluno = $this->alunoDAO->existe_aluno($RA, $email);

            return $existeAluno;
        }

        public function existe_token($token){
            $existeToken = $this->alunoDAO->existe_token($token);

            return $existeToken;
        }

        public function salvar_token($RA, $email, $token){
            $salvarToken = $this->alunoDAO->salvar_token($RA, $email, $token);

            return $salvarToken;
        }

        public function alterar_senha(){
            
            
                $token = $_COOKIE['token'];
                $senha = hash('sha256', $_POST['senha']);
                $this->alunoDAO->alterar_senha($token, $senha);

                    echo "<script language='javascript' type='text/javascript'>
                    alert('Senha alterada com sucesso!')
                    window.location.href='../view/login-estudante.php'</script>";

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

            case "enviar_token":
                $alunoController->enviar_token();
                break;

            case "alterar_senha":
                $alunoController->alterar_senha();
                break;
        
            

        }
    }
?>
