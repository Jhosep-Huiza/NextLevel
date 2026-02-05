<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Acceso - Corporación Expertiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .btn-portal {
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .btn-portal:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(243, 111, 33, 0.2);
        }
    </style>
</head>
<body class="bg-slate-50 flex items-center justify-center h-screen">

    <div class="max-w-4xl w-full px-6 text-center">
        <div class="mb-12">
            <h1 class="text-4xl font-black text-slate-800 mb-2 uppercase tracking-tighter">Bienvenido al Sistema</h1>
            <p class="text-slate-500 font-medium">Seleccione la plataforma a la que desea ingresar</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <div class="bg-white p-8 rounded-3xl border border-slate-100 flex flex-col items-center btn-portal">
                <div class="w-20 h-20 bg-orange-100 rounded-2xl flex items-center justify-center mb-6">
                    <span class="text-4xl">🏫</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 mb-2">Portal Colegio</h2>
                <p class="text-slate-400 text-sm mb-8 px-4 text-center">Acceso para familias, alumnos y docentes de la institución educativa.</p>

                <a href="{{ route('login.familia') }}" class="w-full py-4 bg-[#f36f21] text-white text-center font-black rounded-xl hover:bg-[#e25d10] transition-colors uppercase tracking-widest text-sm">
                    Ingresar Colegio
                </a>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-slate-100 flex flex-col items-center btn-portal">
                <div class="w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                    <span class="text-4xl">🎓</span>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 mb-2">Portal Academia</h2>
                <p class="text-slate-400 text-sm mb-8 px-4 text-center">Acceso exclusivo para preparación pre-universitaria y cursos técnicos.</p>

                <a href="{{ route('login.academia') }}" class="w-full py-4 bg-slate-800 text-white text-center font-black rounded-xl hover:bg-slate-900 transition-colors uppercase tracking-widest text-sm">
                    Ingresar Academia
                </a>
            </div>

        </div>

        <div class="mt-16 text-[11px] text-slate-400 font-bold uppercase tracking-widest">
            © 2026 Corporación Expertiz Pucallpa S.A.C.
        </div>
    </div>

</body>
</html>
