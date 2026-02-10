<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Level - Portal Educativo</title>

    <link rel="stylesheet" href="{{ asset('css/web/intranet.css') }}">
</head>
<body>
    <a href="{{ route('web.inicio') }}" class="back-home-btn" title="Volver al Inicio">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>

    <div class="split-background">
        <div class="split-left"></div>
        <div class="split-right"></div>
    </div>

    <div class="divider"></div>

    <div class="container">
        <div class="portal-title">
            <h1>Portal Educativo</h1>
            <p>Selecciona tu plataforma de aprendizaje</p>
        </div>

        <div class="cards-container">
            <div class="card colegio">
                <div class="card-image"></div>
                <div class="card-content">
                    <span class="card-badge">Educación Escolar</span>
                    <h2 class="card-title">Colegio</h2>
                    <p class="card-description">
                        Accede al portal educativo para estudiantes de nivel escolar. Consulta tus notas,
                        horarios y tareas.
                    </p>
                    <a href="{{ route('login.colegio') }}" class="btn">
                        Ingresar
                    </a>
                </div>
            </div>

            <div class="card academia">
                <div class="card-image"></div>
                <div class="card-content">
                    <span class="card-badge">Preparación Universitaria</span>
                    <h2 class="card-title">Academia</h2>
                    <p class="card-description">
                        Portal para estudiantes preuniversitarios. Accede a tus simulacros, clases y
                        material de estudio.
                    </p>
                    <a href="{{ route('login.academia') }}" class="btn">
                        Ingresar
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
