<?php 
    require_once 'header.php';
    $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo')); 
?>

    <title>Adicionar Evento</title>

    </head>
    <body class="bg-[url('../img/img-fundo.svg')] bg-no-repeat h-screen bg-top bg-indigo-100 bg-contain bg-opacity-80
             flex items-center justify-center min-[450px]:py-4 sm:px-4">
    <section class="w-full h-full max-w-lg p-6 font-light bg-white min-[450px]:rounded-2xl drop-shadow-xl text-slate-800
                    sm:h-auto">
        <div class="flex flex-col pt-8 font-sm gap-y-6">
            <div class="text-center">
                <h2 class="text-2xl font-normal sm:text-3xl">Cadastrar Evento</h2>
            </div>
        <form class="flex flex-col select-none gap-y-6" name="formAdd" id="formAdd" method="post" action="../controller/AddEventoController.php?acao=adicionar_evento">
            <div class="flex flex-col">
                <label for="start">Início:</label>
                <input class="bg-slate-50 focus:bg-slate-100 focus:border-[#3829e082] transition-colors duration-300
                                 p-2 mt-1 border border-solid rounded-lg outline-none placeholder-slate-300
                                 border-slate-200" 
                                 type="datetime-local" name="start" id="start" value="<?php echo $date->format("Y-m-d H:i:s"); ?>">
            </div>
                <div class="flex flex-col">
                    <label for="end">Final:</label>
                    <input class="bg-slate-50 focus:bg-slate-100 focus:border-[#3829e082] transition-colors duration-300
                                 p-2 mt-1 border border-solid rounded-lg outline-none placeholder-slate-300
                                 border-slate-200" type="datetime-local" name="end" id="end" value="<?php echo $date->format("Y-m-d H:i:s"); ?>">
                </div>
                <div class="flex flex-col">
                    <label for="title">Título:</label>
                    <input class="bg-slate-50 focus:bg-slate-100 focus:border-[#3829e082] transition-colors duration-300
                                 p-2 mt-1 border border-solid rounded-lg outline-none placeholder-slate-300
                                 border-slate-200" type="text" name="title" id="title">
                </div>
                <div class="flex flex-col">
                    <label for="description">Descrição:</label>
                    <input class="bg-slate-50 focus:bg-slate-100 focus:border-[#3829e082] transition-colors duration-300
                                 p-2 mt-1 border border-solid rounded-lg outline-none placeholder-slate-300
                                 border-slate-200" type="text" name="description" id="description">
                </div>

                <button class="mt-6 rounded-xl sm:text-lg font-normal py-3.5 text-white bg-[#3829e0] hover:bg-[#2b3ff7]
                transition-colors duration-300 cursor-pointer">Cadastrar</button>
            </form>
        </div>
    </section>

        <script src="../../vendor/fullcalendar/lib/main.min.js"></script>
        <script src="../js/calendario.js"></script>
    </body>
</html>

