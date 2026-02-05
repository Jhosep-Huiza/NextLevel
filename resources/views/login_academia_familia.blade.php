<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet Academia - Familia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; overflow: hidden; }

        /* FONDO ROJO ANIMADO ACADEMIA */
        .bg-login {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #B01030;
            z-index: -1;
        }

        .bg-login::before, .bg-login::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            animation: float 8s ease-in-out infinite;
        }

        .bg-login::before { top: -100px; left: -100px; }
        .bg-login::after { bottom: -100px; right: -100px; animation-delay: 1s; }

        @keyframes float {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-30px) scale(1.1); }
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* CLASES DE COLOR ROJO CORREGIDAS */
        .text-custom-red { color: #db0808; }
        .btn-gradient-fade {
            background: linear-gradient(135deg, #8d0707 0%, #db0808 100%);
            position: relative;
            overflow: hidden;
        }

        .shadow-custom-red {
            box-shadow: 0 10px 25px -5px rgba(219, 8, 8, 0.4);
        }

        .btn-gradient-fade::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: all 0.6s;
        }

        .btn-gradient-fade:hover::before { left: 100%; }
    </style>
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
            <button class="flex-1 py-4 rounded-xl btn-gradient-fade text-white font-bold shadow-custom-red text-base cursor-default">
                Familia
            </button>
            <a href="{{ route('login.academia.alumno') }}" class="flex-1 py-4 rounded-xl bg-slate-100/50 text-slate-800 font-semibold transition-all text-base hover:bg-[#db0808]/10 hover:text-custom-red flex items-center justify-center">
                Alumno
            </a>
        </div>

        <h2 class="text-xl font-bold text-slate-800 mb-8 italic">¡Bienvenido!</h2>

        <form class="space-y-6 text-left px-2" method="POST" action="#">
            @csrf
            <div class="space-y-1">
                <label class="block text-slate-800 text-[10px] font-bold uppercase ml-1">Nro. de documento</label>
                <input type="text" name="documento" placeholder="Ej: 70001234"
                       class="w-full bg-white/60 border border-slate-200 rounded-2xl py-4 px-6 outline-none focus:border-custom-red focus:ring-4 focus:ring-red-900/10 transition-all text-slate-700 text-lg">
                <p class="text-custom-red text-[9px] font-black uppercase tracking-widest ml-1">* Completa este campo</p>
            </div>

            <button type="submit" class="w-full btn-gradient-fade hover:opacity-90 text-white font-black py-5 rounded-2xl shadow-custom-red transition-all transform active:scale-95 text-base !mt-12">
                Entrar al Sistema
            </button>
        </form>

        <div class="mt-8 text-center text-slate-800">
            <a href="#" class="text-xs font-bold hover:text-custom-red transition-colors">¿Olvidaste tu contraseña?</a>
        </div>

        <div class="mt-10 pt-6 border-t border-slate-200/50 text-center">
            <div class="flex justify-center gap-4 text-[10px] text-slate-600 font-bold mb-2">
                <a href="#" class="hover:text-custom-red transition-colors">Términos</a>
                <span>•</span>
                <a href="#" class="hover:text-custom-red transition-colors">Privacidad</a>
            </div>
            <p class="text-[9px] text-slate-500 font-medium">© 2026 Next Level. Todos los derechos reservados</p>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
