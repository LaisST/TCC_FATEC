<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Estudante</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/output.css">
</head>
<body class="font-light text-slate-800">
    <header class="max-w-xl p-4 mx-auto">
        <nav>
            <ul class="flex items-center justify-between">
                <li>
                    <a href="login-estudante.html">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-7 h-7 sm:w-8 sm:h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                    </a>
                </li>
                <li class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-7 h-7 sm:w-8 sm:h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </li>
            </ul>
        </nav>
    </header>
    <main class="px-4 my-8">
        <section class="max-w-xl mx-auto">
            <div class="flex gap-x-4">
                <div class="flex items-center justify-center w-20 h-20 border border-solid rounded-full cursor-pointer border-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-2xl font-normal leading-normal sm:text-3xl js-perfil-nome">Lucas Balbino</p>
                    <p class="flex flex-col text-xs leading-normal sm:text-sm text-slate-400">
                        <span class="js-perfil-ra">2920482111040</span>
                        <span class="js-perfil-email">lucas.silva844@fatec.sp.gov.br</span>
                    </p>
                </div>
            </div>
            <div class="mt-6">
                <ul class="flex items-center justify-between p-4 text-sm border border-solid rounded-lg shadow-md sm:text-base shadow-slate-100 border-slate-100">
                    <li class="flex flex-col gap-1.5">
                        <span class="text-slate-400">Sem. atual</span>
                        <div class="flex items-center gap-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 sm:w-5 sm:h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                            <span class="font-semibold js-perfil-semestre">6˚sem</span>
                        </div>
                    </li>
                    <span class="w-px h-8 rounded-full sm:h-9 bg-slate-200"></span>
                    <li class="flex flex-col gap-1.5">
                        <span class="text-slate-400">Rendimento</span>
                        <div class="flex items-center gap-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 sm:w-5 sm:h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <span class="font-semibold js-perfil-rendimento">PR</span>
                        </div>
                    </li>
                    <span class="w-px h-8 rounded-full sm:h-9 bg-slate-200"></span>
                    <li class="flex flex-col gap-1.5">
                        <span class="text-slate-400">Prazo</span>
                        <div class="flex items-center gap-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 sm:w-5 sm:h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                            </svg>
                            <span class="font-semibold js-perfil-prazo">Cursando</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="max-w-xl mx-auto mt-12">
            <div>
                <h2 class="mb-4 text-xl font-normal sm:text-xl">Opções do estudante</h2>
                <ul class="grid gap-y-3 sm:gap-y-5">
                    <li class="border border-solid rounded-lg group border-slate-200 border-opacity-80 bg-slate-50">
                        <a class="flex items-center p-4 gap-x-4" href="">
                            <div class="p-3 text-white bg-indigo-500 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="transition-transform duration-300 w-7 h-7 sm:w-8 sm:h-8 group-hover:-translate-y-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-lg font-normal sm:text-xl">Matrícula</span>
                                <p class="text-sm sm:text-base text-slate-400">Veja a situação atual de sua matrícula.</p>
                            </div>
                        </a>
                    </li>
                    <li class="border border-solid rounded-lg group border-slate-200 border-opacity-80 bg-slate-50">
                        <a class="flex items-center p-4 gap-x-4" href="">
                            <div class="p-3 text-white bg-orange-500 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="transition-transform duration-300 w-7 h-7 sm:w-8 sm:h-8 group-hover:-translate-y-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-lg font-normal sm:text-xl">Calendário</span>
                                <p class="text-sm sm:text-base text-slate-400">Veja atualizações importantes do semestre.</p>
                            </div>
                        </a>
                    </li>
                    <li class="border border-solid rounded-lg group border-slate-200 border-opacity-80 bg-slate-50">
                        <a class="flex items-center p-4 gap-x-4" href="">
                            <div class="p-3 text-white bg-yellow-500 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="transition-transform duration-300 w-7 h-7 sm:w-8 sm:h-8 group-hover:-translate-y-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-lg font-normal sm:text-xl">Solicitações</span>
                                <p class="text-sm sm:text-base text-slate-400">Seus pedidos sendo processados e atendidos.</p>
                            </div>
                        </a>
                    </li>
                    <li class="border border-solid rounded-lg group border-slate-200 border-opacity-80 bg-slate-50">
                        <a class="flex items-center p-4 gap-x-4" href="">
                            <div class="p-3 text-white rounded-md bg-sky-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="transition-transform duration-300 w-7 h-7 sm:w-8 sm:h-8 group-hover:-translate-y-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-lg font-normal sm:text-xl">Segurança</span>
                                <p class="text-sm sm:text-base text-slate-400">Acesso protegido.</p>
                            </div>
                        </a>
                    </li>
                    <li class="border border-solid rounded-lg group border-slate-200 border-opacity-80 bg-slate-50">
                        <a class="flex items-center p-4 gap-x-4" href="">
                            <div class="p-3 text-white bg-green-500 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="transition-transform duration-300 w-7 h-7 sm:w-8 sm:h-8 group-hover:-translate-y-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-lg font-normal sm:text-xl">Plano de ensino</span>
                                <p class="text-sm sm:text-base text-slate-400">Diretrizes educacionais detalhadas.</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</body>
</html>