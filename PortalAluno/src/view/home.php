<?php
    require_once 'header.php';
    require_once '../controller/AlunoController.php';
    require_once '../dao/AlunoDAO.php';

    if(!isset($_SESSION['aluno'])){
        header('location: login-estudante.php');
    }

?>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../../vendor/fullcalendar/lib/main.min.css">
        <title>Siga Aluno</title>
    </head>
    <body class="bg-[url('../img/img-fundo.svg')] bg-no-repeat h-screen bg-top bg-indigo-100 bg-contain bg-opacity-80 flex items-center justify-center min-[450px]:py-4 sm:px-4">
    <section class="w-full h-full max-w-lg p-6 font-light bg-white min-[450px]:rounded-2xl drop-shadow-xl text-slate-800 sm:h-auto">
        <div class="bg-[url('../img/img-login-professor.svg')] bg-no-repeat border-b bg-center border-solid border-slate-50 bg-contain h-52 rounded-t-2xl"></div>
        <div class="flex flex-col pt-8 font-sm gap-y-6">
            <div class="text-center">


                <h2 class="text-2xl font-normal sm:text-3xl">
                    <?php

                        echo 'Olá '.explode(" ",unserialize($_SESSION['aluno'])->getNome())[0].'!';

                    ?></h2>

                <a class="btn btn-primary btn-sm rounded-0" type="submit" href="calendario_aluno.php"> Calendario</a>
                <form class="flex flex-col select-none gap-y-6" method='POST' action="../controller/AlunoController.php?acao=logout">
                <button class="mt-6 rounded-xl sm:text-lg font-normal py-3.5 text-white bg-[#3829e0] hover:bg-[#2b3ff7]
                        transition-colors duration-300 cursor-pointer">sair</button>
                </form>
            </div>
        </div>
    </section>
    </body>
</html>
