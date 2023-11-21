<?php
    require_once 'header.php';
    require_once '../controller/AlunoController.php';
    require_once '../dao/AlunoDAO.php';

    if(!isset($_SESSION['aluno'])){
        header('location: login-estudante.php');
    }
?>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../../vendor/fullcalendar/lib/main.min.css">
        <title>Matricula</title>
    </head>
    <body class="bg-[url('../img/img-fundo.svg')] bg-no-repeat h-screen bg-top bg-indigo-100 bg-contain bg-opacity-80 flex items-center justify-center min-[300px]:py-4 sm:px-4">
    <section class="max-w-xl mx-auto my-8 md:h-full md:max-w-none md:mx-0">
        <div class=" bg-no-repeat border-b bg-center border-solid border-slate-50 bg-contain h-52 rounded-t-2xl"></div>
        <div class="flex flex-col pt-8 font-sm gap-y-6">
            <div class="text-center">
                <h2 class="text-2xl font-normal sm:text-3xl"></h2>
                <img src="../img/construcao.png">
                <button href="home.php" type="button" class="btn btn-primary float-end bg-[#2C3E50] hover:bg-[#2C3E50]
                transition-colors duration-300 cursor-pointer"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-top: 10px;" 
                        onclick="window.location.href = 'home.php';">
                        Voltar
                </button>

            </div>
                
            </div>
        </div>
    </section>
    </body>
</html>