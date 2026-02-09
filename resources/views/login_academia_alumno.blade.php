
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet Academia - Alumno</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('css/web/login_academia_alumno.css') }}">
</head>
<body class="h-screen w-full flex items-center justify-center p-4">
    <div class="bg-login"></div>
    <div class="fixed inset-0 bg-slate-900/40 z-0"></div>

    <div class="glass-card w-full max-w-2xl rounded-[2.5rem] p-8 md:px-20 md:py-12 shadow-2xl z-10 relative overflow-hidden text-center">

        <div class="absolute top-8 left-8">
            <a href="{{ route('portal') }}" class="inline-block btn-gradient-fade rounded-xl p-2 transition-transform hover:scale-110 active:scale-95 shadow-custom-red">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 8L3 12M3 12L7 16M3 12H17" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H15" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>

        <div class="mt-6 mb-10">
            <p class="text-custom-red italic text-xs font-bold tracking-widest uppercase">Intranet</p>
            <h1 class="text-6xl font-extrabold text-custom-red tracking-tighter uppercase">Academia</h1>
        </div>

        <div class="flex gap-8 mb-10 px-2">
            <a href="{{ route('login.academia.familia') }}" class="flex-1 py-4 rounded-xl bg-slate-100/50 text-slate-800 font-semibold transition-all text-center text-base hover:bg-[#db0808]/10 hover:text-custom-red flex items-center justify-center">
                Familia
            </a>
            <button class="flex-1 py-4 rounded-xl btn-gradient-fade text-white font-bold shadow-custom-red text-base cursor-default">
                Alumno
            </button>
        </div>

        <h2 class="text-xl font-bold text-slate-800 mb-8 italic">¡Bienvenido!</h2>

        <form class="space-y-6 text-left px-2" method="POST" action="#">
            @csrf
            <div class="space-y-1">
                <label class="block text-slate-800 text-[10px] font-bold uppercase ml-1">ID Alumno</label>
                <input type="text" name="alumno_id" placeholder="Ej: 0020261234"
                       class="w-full bg-white/60 border border-slate-200 rounded-2xl py-4 px-6 outline-none focus:border-custom-red focus:ring-4 focus:ring-red-900/10 transition-all text-slate-700 text-lg">
                <p class="text-custom-red text-[9px] font-black uppercase tracking-widest ml-1">* Completa este campo</p>
            </div>

            <div class="space-y-1">
                <label class="block text-slate-800 text-[10px] font-bold uppercase ml-1">Contraseña</label>
                <div class="relative flex items-center">
                    <input id="passwordInput" type="password" name="password" placeholder="••••••••"
                           class="w-full bg-white/60 border border-slate-200 rounded-2xl py-4 px-6 pr-14 outline-none focus:border-custom-red focus:ring-4 focus:ring-red-900/10 transition-all text-slate-700 text-lg">

                    <button id="togglePassword" type="button" class="absolute right-5 text-slate-400 hover:text-custom-red transition-colors flex items-center justify-center">
                        <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="hidden" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                        <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M10.584 10.587a2 2 0 0 0 2.828 2.83"></path><path d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861a9.41 9.41 0 0 1 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341"></path><path d="M3 3l18 18"></path></svg>
                    </button>
                </div>
                <p class="text-custom-red text-[9px] font-black uppercase tracking-widest ml-1">* Completa este campo</p>
            </div>

            <button type="submit" class="w-full btn-gradient-fade hover:opacity-90 text-white font-black py-5 rounded-2xl shadow-custom-red transition-all transform active:scale-95 text-base mt-4">
                Entrar al Sistema
            </button>
        </form>

        <div class="mt-10 pt-6 border-t border-slate-200/50 text-center">
            <p class="text-[9px] text-slate-500 font-medium">© 2026 Next Level Academia. Todos los derechos reservados</p>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
