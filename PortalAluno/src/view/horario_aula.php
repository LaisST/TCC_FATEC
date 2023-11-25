<?php
    require_once 'header.php';
    require_once '../controller/AlunoController.php';

    $alunoController = new AlunoController();
?>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>


    <title>EducaFoco - Horario das Aulas</title>
</head>
<body class="bg-[url('../img/img-fundo.svg')] bg-no-repeat  bg-indigo-100 bg-contain bg-opacity-80
             flex items-center justify-center min-[450px]:py-4 sm:px-4">
    <section class=" h-full p-6 font-light bg-white min-[450px]:rounded-2xl drop-shadow-xl text-slate-800
                    sm:h-auto">
        <div class="flex flex-col pt-8 font-sm gap-y-6">
            <div class="text-center">
                <h2 class="text-2xl font-normal sm:text-3xl">Horário das Aulas</h2>

            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <colgroup>
                    <col style="font-weight: bold;">
                    <col>
                    <col style="font-weight: bold;">
                    <col style="font-weight: bold;">
                </colgroup>
                <th>Horário</th>
                <th></th>
                <th>Disciplina</th>
                <th>Professor</th>
             </tr>
            </thead>
                <?php
                    $rows = $alunoController->exibir_horario();

                    // Criar um array associativo para agrupar os resultados por dia_semana
                    $horariosPorDia = array();
      
                    foreach ($rows as $element) {
                    $dia_semana = $element['dia_semana'];
      
          
                    $horariosPorDia[$dia_semana][] = array(
                    'inicio' => $element['inicio'],
                    'fim' => $element['fim'],
                    'nome_disciplina' => $element['nome_disciplina'],
                    'nome' => $element['nome']
                );
      }
      
      // Exibir os resultados organizados por dia_semana
      foreach ($horariosPorDia as $dia_semana => $horarios) {
          echo "<tr><th colspan='4'>$dia_semana</th></tr>";
      
          foreach ($horarios as $horario) {
              echo "<tr>";
              echo "  <td>".$horario['inicio']."</td>";
              echo "  <td>".$horario['fim']."</td>";
              echo "  <td>".$horario['nome_disciplina']."</td>";
              echo "  <td>".$horario['nome']."</td>";
              echo "</tr>";
          }
      }
      ?>
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