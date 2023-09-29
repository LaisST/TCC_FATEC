<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;500&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="../css/output.css">

        <?php
            require_once '../controller/AlunoController.php';
            require_once '../dao/AlunoDAO.php';
        
            if(!isset($_SESSION['aluno'])){
                header('location: login-estudante.php');
            }
        
        ?>

        <title>Siga Aluno</title>
    </head>
    </body>
        <?php
        
                echo 'Olá '.explode(" ",unserialize($_SESSION['aluno'])->getNome())[0].'!';
        ?>

        <form class="flex flex-col select-none gap-y-6" method='POST' action="../controller/AlunoController.php?acao=logout">
        <button>Sair</button>
        </form>
        <script src="../js/login-formatacao.js"></script>
    </body>
</html>
