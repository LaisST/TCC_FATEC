<?php
    require_once 'header.php';
    require_once '../controller/AlunoController.php';

    $alunoController = new AlunoController();
    ini_set('max_execution_time', 300); // Aumenta para 300 segundos (5 minutos)
    ini_set('memory_limit', '256M'); // Aumenta para 256 megabytes
?>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>


    <title>EducaFoco - Histórico Parcial</title>
</head>
<body class="bg-[url('../img/img-fundo.svg')] bg-no-repeat h-screen bg-top bg-indigo-100 bg-contain bg-opacity-80
             flex items-center justify-center min-[450px]:py-4 sm:px-4">
    <!-- <section class="w-full h-full max-w-lg p-6 font-light bg-white min-[450px]:rounded-2xl drop-shadow-xl text-slate-800
                    sm:h-auto"> -->
        <div class="flex flex-col pt-8 font-sm gap-y-6">
            <div class="text-center">
                <h2 class="text-2xl font-normal sm:text-3xl">Histórico Parcial</h2>

            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sigla</th>
                                            <th>Disciplina</th>
                                            <th>Média Final</th>
                                            <th>Frequência (%)</th>
                                            <th>Aprovado</th>
                                            <th>Observação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $rows = $alunoController->exibir_historico();
      
                                    
                                            if(mysqli_num_rows($rows) > 0){
                                                while($element = mysqli_fetch_assoc($rows)){
                                                    echo "<tr>";
                                                    echo "  <td>".$element['cod_disciplina']."</td>";
                                                    echo "  <td>".$element['nome_disciplina']."</td>";
                                                    echo "  <td>".$element['media_final']."</td>";
                                                    echo "  <td>".$element['frequencia']."%</td>";
                                                    echo "  <td>";
                                                    if ($element['aprovado'] == 1) {
                                                        echo "<input type='checkbox' checked disabled>";
                                                    } else {
                                                        echo "<input type='checkbox' disabled>";
                                                    }
                                                    echo "</td>";
                                                    echo "  <td>".$element['observacao']."</td>";
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
 
            <button href="home.php" type="button" class="btn btn-primary  float-end bg-[#2C3E50] hover:bg-[#2C3E50]
                transition-colors duration-300 cursor-pointer"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-top: 10px; background-color: #2C3E50;border-color: #2C3E50;"
                        onclick="window.location.href = 'home.php';">
                        Voltar
                </button>
        </div>
    <!-- </section> -->
    <!-- <script src="/src/js/login-formatacao.js"></script> -->

</body>
</html>