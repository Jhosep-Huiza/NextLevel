<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Level - Centro Educativo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/web/web_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/marquee_principal.css') }}">
</head>

<body>

    <div class="top-bar">
        <div class="marquee-wrapper">
            <div class="marquee-track" id="marqueeTrack">
                <div class="marquee-item">
                    🧑🏻‍🎓 ¡MATRÍCULA 2026! &nbsp;&nbsp;&nbsp;&nbsp;
                    📕 INICIO DE CLASES: 4 DE MARZO &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>

    <nav class="main-nav">
        <div class="nav-container">
            <a href="#" class="nav-brand">
                <img src="{{ asset('images/logo_letras.png') }}" alt="Colegio y Academia Next Level" class="nav-logo-full">
            </a>

            <ul class="nav-menu">
                <li><a href="#" class="active">INICIO</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-trigger">
                        NOSOTROS <span class="arrow-icon">&#9662;</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Qué ofrecemos</a></li>
                        <li><a href="#">Quiénes Somos</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-trigger">
                        NIVELES <span class="arrow-icon">&#9662;</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Colegio</a></li>
                        <li><a href="#">Academia</a></li>
                    </ul>
                </li>

                <li><a href="#">UBICACIÓN</a></li>
                <li><a href="#">MATRICULAS</a></li>
                <li><a href="#">CONCURSOS</a></li>
                <li><a href="{{ route('portal') }}">PORTAL ACADÉMICO</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero-section">
        <div class="hero-content">
            <p class="subtitle">Elevando la Educación al Siguiente Nivel</p>
            <p class="description">Formando líderes del mañana con excelencia, valores y compromiso</p>
        </div>
    </section>

    <section class="valores-section">
        <div class="valores-container">
            <h2 class="section-title">Nuestros Valores</h2>
            <div class="valores-grid">
                <div class="valor-card">
                    <div class="valor-icon">🎓</div>
                    <h3>Excelencia Académica</h3>
                    <p>Compromiso con la calidad educativa y el desarrollo integral de nuestros estudiantes</p>
                </div>
                <div class="valor-card">
                    <div class="valor-icon">💡</div>
                    <h3>Innovación</h3>
                    <p>Métodos educativos modernos y tecnología de vanguardia para el aprendizaje</p>
                </div>
                <div class="valor-card">
                    <div class="valor-icon">🤝</div>
                    <h3>Valores Humanos</h3>
                    <p>Formación en ética, respeto y responsabilidad social</p>
                </div>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="info-container">
            <h2 class="section-title-dark">¿Por Qué Elegirnos?</h2>
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-number">15+</div>
                    <h3>Años de Experiencia</h3>
                    <p>Trayectoria consolidada en educación de calidad</p>
                </div>
                <div class="info-card">
                    <div class="info-number">98%</div>
                    <h3>Tasa de Éxito</h3>
                    <p>Estudiantes que alcanzan sus metas académicas</p>
                </div>
                <div class="info-card">
                    <div class="info-number">50+</div>
                    <h3>Profesores Calificados</h3>
                    <p>Equipo docente comprometido y especializado</p>
                </div>
            </div>
        </div>
    </section>

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
                    <a href="#">UBICACIÓN</a>
                    <a href="#">CONTÁCTANOS</a>
                    <a href="#">ADMISIÓN 2026</a>
                    <a href="#">SOBRE NOSOTROS</a>
                    <a href="#">NUESTROS VALORES</a>
                </div>
                <div class="footer-column">
                    <a href="#">NIVELES</a>
                    <a href="#">ACADEMIA</a>
                    <a href="#">PAGOS EN LÍNEA</a>
                    <a href="#">MATRICULA 2026</a>
                    <a href="#">HORARIO DE CLASE</a>
                </div>
                <div class="footer-column social-align">
                    <a href="#">INTRANET</a>
                    <a href="#">PROTECCIÓN DE DATOS</a>
                    <a href="#">LIBROS DE RECLAMACIONES</a>

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
</body>

</html>
