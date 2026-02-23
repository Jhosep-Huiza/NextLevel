<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia | Next Level</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/web/web_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/marquee_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/propuesta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/academia.css') }}">
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
                    <a href="#" class="dropdown-trigger">NOSOTROS <span class="arrow-icon">&#9662;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Qué ofrecemos</a></li>
                        <li><a href="#">Quiénes Somos</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-trigger">NIVELES <span class="arrow-icon">&#9662;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Colegio</a></li>
                        <li><a href="{{ route('academia') }}">Academia</a></li>
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
                    <li><a href="{{ route('academia') }}">Academia</a></li>
                </ul>
            </div>
        </div>
    </div>

    <main>
        <section class="hero-sobre" style="background: url('{{ asset('images/imagen10.jpg') }}') center/cover no-repeat;">
            <div class="hero-overlay">
                <div class="hero-content">
                    <span class="section-tag">PREPARACIÓN PREUNIVERSITARIA</span>
                    <h1>ACADEMIA NEXT LEVEL</h1>
                    <div class="hero-line"></div>
                    <p>
                        Formación estratégica de alto rendimiento para ingresar
                        a las universidades más exigentes del país.
                    </p>
                </div>
            </div>
        </section>

        <section class="academia-intro">
            <div class="container">
                <div class="academia-grid">
                    <div class="academia-video">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/tU6c0Bk5uEs"
                                    title="Video Academia" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <div class="academia-text">
                        <h2>QUIÉNES SOMOS</h2>
                        <p>
                            Somos una academia de prestigio y trayectoria intachable,
                            gracias al trabajo esmerado y responsable de nuestro equipo docente y administrativo.
                            Acompañamos a nuestros estudiantes en cada etapa de su preparación,
                            brindándoles una formación sólida, disciplina constante y orientación académica
                            para afrontar con seguridad el próximo examen de admisión.
                        </p>
                        <p>
                            Gracias a la confianza de nuestros alumnos y padres de familia,
                            desde el inicio seguimos fortaleciendo la formación académica en la región,
                            promoviendo valores, compromiso y excelencia en cada uno de nuestros procesos educativos.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="academia-presentacion">
            <div class="container academia-presentacion-grid">
                <div class="academia-presentacion-text">
                    <h2>NUESTRA PROPUESTA</h2>
                    <p>
                        Nuestra academia renueva su compromiso de brindar el más alto
                        nivel académico y la mejor preparación preuniversitaria,
                        actualizada a las exigencias de las universidades de nuestra región y del país.
                    </p>
                    <p>
                        Nuestra propuesta integral, basada en resultados y en brindar
                        un servicio de calidad, se desarrolla en beneficio de los miles
                        de jóvenes que año tras año buscan su ingreso a un centro superior de estudios.
                    </p>
                    <p>
                        En la <strong>Academia Next Level</strong> complementamos esta formación
                        de manera continua con un alto estándar de exigencia que
                        permite la interacción y preparación oportuna para asegurar
                        el ingreso de nuestros estudiantes.
                    </p>
                </div>

                <div class="academia-presentacion-img">
                    <img src="{{ asset('images/imagen10.jpg') }}" alt="Academia Next Level">
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
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
                        <a href="https://wa.me/51923317625?text=Hola%20Next%20Level,%20deseo%20información.%20Me%20interesa:%0A%0A1.%20Matrícula%20Colegio%20%0A2.%20Ciclos%20Academia%20%0A3.%20Agendar%20Visita%20Guiada%0A4.%20Costos%20y%20Pensiones%0A%0APor%20favor,%20bríndeme%20detalles." target="_blank" class="social-icon"><i class="fa-brands fa-whatsapp"></i></a>
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
