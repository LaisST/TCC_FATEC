<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGA - Alterar senha</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/output.css">
</head>
<body class="bg-[url('../img/img-fundo.svg')] bg-no-repeat h-screen bg-top bg-indigo-100 bg-contain bg-opacity-80
             flex items-center justify-center min-[450px]:py-4 sm:px-4">
    <section class="w-full h-full max-w-lg p-6 font-light bg-white min-[450px]:rounded-2xl drop-shadow-xl text-slate-800
                    sm:h-auto">
        <div class="bg-[url('../img/img-login-estudante.svg')] bg-no-repeat border-b bg-center border-solid
                    border-slate-100 bg-contain h-52 rounded-t-2xl"></div>
        <div class="flex flex-col pt-8 font-sm gap-y-6">
        <div class="text-center">
                <h2 class="text-2xl font-normal sm:text-3xl">Alterar Senha</h2>
                
            </div>
            <form class="flex flex-col select-none gap-y-6" method='POST' action="../controller/AlunoController.php?acao=[colocar acao]">
            <div class="flex flex-col">
                    <label for="nome">Nova Senha</label>
                    <input class="bg-slate-50 focus:bg-slate-100 focus:border-[#3829e082] transition-colors duration-300
                                 p-2 mt-1 border border-solid rounded-lg outline-none placeholder-slate-300
                                 border-slate-200" type="password" name="senha" id="senha"
                                 placeholder="Nova Senha">
            </div>
            <div class="flex flex-col">
                    <label for="nome">Confirme a Senha</label>
                    <input class="bg-slate-50 focus:bg-slate-100 focus:border-[#3829e082] transition-colors duration-300
                                 p-2 mt-1 border border-solid rounded-lg outline-none placeholder-slate-300
                                 border-slate-200" type="password" name="confirmacaoSenha" id="confirmacaoSenha"
                                 placeholder="Confirme a Senha">
            </div>


                <button class="mt-6 rounded-xl sm:text-lg font-normal py-3.5 text-white bg-[#3829e0] hover:bg-[#2b3ff7]
                transition-colors duration-300 cursor-pointer">Alterar Senha</button>
            </form>
        </div>
    </section>
    <script src="/src/js/login-formatacao.js"></script>

</body>
</html>