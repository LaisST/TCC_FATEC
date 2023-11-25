<?php
    require_once 'header.php';
    require_once '../controller/AlunoController.php';

    $alunoController = new AlunoController();
?>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

<title>EducaFoco - Ementa Disciplinas</title>
</head>
<body class="bg-[url('../img/img-fundo.svg')] bg-no-repeat h-screen bg-top bg-indigo-100 bg-contain bg-opacity-80
             flex items-center justify-center min-[450px]:py-4 sm:px-4">
    <section class="h-full p-6 font-light bg-white min-[450px]:rounded-2xl drop-shadow-xl text-slate-800
                    sm:h-auto">
        <div class="flex flex-col pt-8 font-sm gap-y-6">
            <div class="text-center">
                <h2 class="text-2xl font-normal sm:text-3xl">Ementa disciplinas</h2>
            </div>
            <div>
                <table class="max-h-[32rem] table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Disciplina</th>
                            <th>Professor</th>
                            <th>Objetivo</th>
                            <th>Ementa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $rows = $alunoController->exibir_ementa_disciplina();

                        if(mysqli_num_rows($rows) > 0){
                            while($element = mysqli_fetch_assoc($rows)){
                                echo "<tr>";
                                echo "  <td>".$element['nome_disciplina']."</td>";
                                echo "  <td>".$element['nome']."</td>";
                                echo "  <td>".$element['objetivo']."</td>";
                                echo "  <td>".$element['ementa']."</td>";
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            
            <!-- Adicione algum espaço abaixo da tabela -->
            <div class="mt-4"></div>

            <!-- Botão Voltar -->
            <button type="button" class="btn btn-primary float-end bg-[#2C3E50] hover:bg-[#2C3E50]
                transition-colors duration-300 cursor-pointer"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                onclick="window.location.href = 'home.php';">
                Voltar
            </button>
        </div>
    </section>
</body>
</html>
