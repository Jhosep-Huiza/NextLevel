<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros | Next Level</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/web/web_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/marquee_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/propuesta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/sobre_nosotros.css') }}">

</head>

<body>

    <div class="top-bar">
        <div class="marquee-wrapper">
            <div class="marquee-track" id="marqueeTrack">
                <div class="marquee-item">
                    🧑🏻‍🎓 ¡MATRÍCULA 2026! &nbsp;&nbsp;&nbsp;&nbsp;
                    📕 INICIO DE CLASES: 2 DE MARZO &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>

    <nav class="main-nav">
        <div class="nav-container">
            <a href="{{ route('web.inicio') }}" class="nav-brand">
                <img src="{{ asset('images/logo_letras.png') }}" alt="Next Level" class="nav-logo-full">
            </a>

            <button class="mobile-menu-toggle" id="menuOpen" type="button">
                <i class="fa-solid fa-bars"></i>
            </button>

            <ul class="nav-menu">
                <li><a href="{{ route('web.inicio') }}">INICIO</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-trigger">NOSOTROS <span class="arrow-icon">▾</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Qué ofrecemos</a></li>
                        <li><a href="#">Quiénes Somos</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-trigger">NIVELES <span class="arrow-icon">▾</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Colegio</a></li>
                        <li><a href="#">Academia</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('ubicacion') }}">UBICACIÓN</a></li>
                <li><a href="#">MATRICULAS</a></li>
                <li><a href="#">CONCURSOS</a></li>
                <li><a href="{{ route('portal') }}">INTRANET</a></li>
            </ul>
        </div>
    </nav>

    <div class="mobile-menu-overlay" id="menuOverlay"></div>
    <div class="mobile-side-menu" id="sideMenu">
        <div class="menu-header">
            <span>MENÚ</span>
            <button class="close-menu" id="menuClose" type="button"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="menu-panels-container">
            <div class="menu-panel active" id="mainPanel">
                <ul class="mobile-nav-list">
                    <li><a href="{{ route('web.inicio') }}">INICIO</a></li>
                    <li class="has-submenu" data-target="submenu-nosotros">
                        <span>NOSOTROS</span> <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="has-submenu" data-target="submenu-niveles">
                        <span>NIVELES</span> <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li><a href="{{ route('ubicacion') }}">UBICACIÓN</a></li>
                    <li><a href="#">MATRICULAS</a></li>
                    <li><a href="#">CONCURSOS</a></li>
                    <li><a href="{{ route('portal') }}">INTRANET</a></li>
                </ul>
            </div>

            <div class="menu-panel" id="submenu-nosotros">
                <button class="back-btn" type="button"><i class="fa-solid fa-chevron-left"></i> REGRESAR</button>
                <ul class="mobile-nav-list">
                    <li><a href="#">Qué ofrecemos</a></li>
                    <li><a href="#">Quiénes Somos</a></li>
                </ul>
            </div>

            <div class="menu-panel" id="submenu-niveles">
                <button class="back-btn" type="button"><i class="fa-solid fa-chevron-left"></i> REGRESAR</button>
                <ul class="mobile-nav-list">
                    <li><a href="#">Colegio</a></li>
                    <li><a href="#">Academia</a></li>
                </ul>
            </div>
        </div>
    </div>

    <main>
        <section class="hero-sobre" style="background: url('{{ asset('images/imagen10.jpg') }}') center/cover no-repeat;">
            <div class="hero-overlay">
                <div class="hero-content">
                    <span class="section-tag">INSTITUCIÓN EDUCATIVA</span>
                    <h1>SOBRE NOSOTROS</h1>
                    <p>
                        Transformamos la educación en una experiencia de alto impacto,
                        formando estudiantes con mentalidad ganadora y visión global.
                    </p>
                </div>
            </div>
        </section>

        <section class="sobre-section">
            <div class="container sobre-grid">
                <div class="sobre-text">
                    <h2>NUESTRA IDENTIDAD</h2>
                    <div class="section-line"></div>
                    <p>
                        En <strong>Next Level</strong>, entendemos que la educación no solo
                        transmite conocimientos, sino que construye carácter, disciplina y liderazgo.
                    </p>
                    <p>
                        Nuestro enfoque integra excelencia académica, tecnología, innovación
                        pedógica y formación en valores, preparando estudiantes para competir en un entorno global.
                    </p>
                </div>

                <div class="sobre-stats">
                    <div class="stat-box">
                        <h3>+10</h3>
                        <span>Años proyectando excelencia</span>
                    </div>
                    <div class="stat-box">
                        <h3>100%</h3>
                        <span>Compromiso académico</span>
                    </div>
                    <div class="stat-box">
                        <h3>24/7</h3>
                        <span>Seguimiento formativo</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="mision-vision-section">
            <div class="container cards-grid">
                <div class="card-sobre">
                    <div class="icon-circle"><i class="fa-solid fa-bullseye"></i></div>
                    <h3>MISIÓN</h3>
                    <p>Formar estudiantes íntegros con alto nivel académico, liderazgo y valores sólidos.</p>
                </div>

                <div class="card-sobre">
                    <div class="icon-circle"><i class="fa-solid fa-eye"></i></div>
                    <h3>VISIÓN</h3>
                    <p>Consolidarnos como una institución educativa referente por nuestra innovación constante.</p>
                </div>

                <div class="card-sobre">
                    <div class="icon-circle"><i class="fa-solid fa-hand-holding-heart"></i></div>
                    <h3>VALORES</h3>
                    <p>Disciplina, respeto, ética, responsabilidad, superación constante y excelencia.</p>
                </div>
            </div>
        </section>

        <section class="metodologia-section">
            <div class="container metodologia-grid">
                <div class="metodologia-img">
                    <img src="{{ asset('images/imagen10.jpg') }}" alt="Metodología Next Level">
                </div>
                <div class="metodologia-text">
                    <h2>NUESTRA METODOLOGÍA</h2>
                    <div class="section-line"></div>
                    <ul class="metodologia-list">
                        <li><i class="fa-solid fa-circle-check"></i> Aprendizaje basado en retos reales</li>
                        <li><i class="fa-solid fa-circle-check"></i> Evaluación continua y personalizada</li>
                        <li><i class="fa-solid fa-circle-check"></i> Integración tecnológica en el aula</li>
                        <li><i class="fa-solid fa-circle-check"></i> Desarrollo integral académico y humano</li>
                    </ul>
                    <p>
                        Nuestro modelo garantiza resultados sostenibles mediante el acompañamiento constante.
                    </p>
                </div>
            </div>
        </section>
    </main>

    </main> <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="{{ asset('images/logo_footer.png') }}" alt="Next Level Logo" class="footer-logo-img">
                <div class="footer-contact">
                    <p><i class="fa-solid fa-phone"></i> 923 317 626</p>
                    <p><i class="fa-solid fa-location-dot"></i> Carretera Federico Basadre Km. 6 (Al costado de la UNU)</p>
                    <p><i class="fa-solid fa-envelope"></i> contacto@nextlevel.edu.pe</p>
                </div>
            </div>

            <div class="footer-right">
                <div class="footer-column">
                    <a href="{{ route('ubicacion') }}">UBICACIÓN</a>
                    <a href="#">CONTÁCTANOS</a>
                    <a href="#">ADMISIÓN 2026</a>
                    <a href="{{ route('sobre.nosotros') }}">SOBRE NOSOTROS</a>
                    <a href="{{ route('nuestros.valores') }}">NUESTROS VALORES</a>
                </div>

                <div class="footer-column">
                    <a href="#">NIVELES</a>
                    <a href="{{ route('academia') }}">ACADEMIA</a>
                    <a href="#">PAGOS EN LÍNEA</a>
                    <a href="#">MATRICULA 2026</a>
                    <a href="#">HORARIO DE CLASE</a>
                </div>

                <div class="footer-column social-align">
                    <a href="{{ route('portal') }}">INTRANET</a>
                    <a href="#">PROTECCIÓN DE DATOS</a>
                    <a href="#">LIBRO DE RECLAMACIONES</a>

                    <div class="footer-social-icons">
                        <a href="https://www.tiktok.com/@next_level_novus" target="_blank" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://www.instagram.com/next_level_novus/" target="_blank" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/51923317625" target="_blank" class="social-icon"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61581492196914" target="_blank" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2026 Next Level. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="{{ asset('js/marquee_principal.js') }}"></script>
    <script src="{{ asset('js/nav-scroll.js') }}"></script>
    <script src="{{ asset('js/menu-mobile.js') }}"></script>
</body>
</html>
