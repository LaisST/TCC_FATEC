<?php
    require_once 'header.php';
?>
    <title>EducaFoco - Alterar senha</title>
</head>
<body class="bg-[url('../img/img-fundo.svg')] bg-no-repeat h-screen bg-top bg-indigo-100 bg-contain bg-opacity-80
             flex items-center justify-center min-[450px]:py-4 sm:px-4">
    <section class="w-full h-full max-w-lg p-6 font-light bg-white min-[450px]:rounded-2xl drop-shadow-xl text-slate-800
                    sm:h-auto">
        <div class="bg-[url('../img/img-login-estudante.svg')] bg-no-repeat border-b bg-center border-solid
                    border-slate-100 bg-contain h-52 rounded-t-2xl"></div>
        <div class="flex flex-col pt-8 font-sm gap-y-6">
        <div class="text-center">
                <h2 class="text-2xl font-normal sm:text-3xl">Redefinir Senha</h2>
                
            </div>
            <form class="flex flex-col select-none gap-y-6" method='POST' action="../controller/AlunoController.php?acao=enviar_token">
                <div class="flex flex-col">
                    <label for="ra">Número do R.A</label>
                    <input class="bg-slate-50 focus:bg-slate-100 focus:border-[#3829e082] transition-colors duration-300
                                 p-2 mt-1 border border-solid rounded-lg outline-none placeholder-slate-300
                                 border-slate-200" type="number" name="ra" id="ra"
                                 placeholder="R.A" min="1234567891023" maxlength="13"
                                 oninput="if (this.value.length = this.maxLength)
                                 this.value = this.value.slice(0, this.maxLength)" autocomplete="off" required>
                </div>
                <div class="flex flex-col">
                    <label for="senha">E-mail</label>
                    <div class="relative">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0
                                    010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963
                                    7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638
                                    0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <input class="bg-slate-50 focus:bg-slate-100 w-full focus:border-[#3829e082] transition-colors
                         duration-300 p-2 pr-10 mt-1 border border-solid rounded-lg outline-none placeholder-slate-300
                         border-slate-200 js-senha-campo" type="text" name="email" id="email" placeholder="E-mail"
                         autocomplete="off" required>
                    </div>
                </div>
                <button class="mt-6 rounded-xl sm:text-lg font-normal py-3.5 text-white bg-[#3829e0] hover:bg-[#2b3ff7]
                transition-colors duration-300 cursor-pointer">Redefinir Senha</button>
            </form>
        </div>
    </section>
    <!-- <script src="/src/js/login-formatacao.js"></script> -->

</body>
</html>