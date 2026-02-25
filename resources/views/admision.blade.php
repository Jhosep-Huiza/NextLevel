<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/web/web_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/marquee_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/propuesta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/admision.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/experiencia.css') }}">
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

    <section class="hero-sobre">
        <div class="hero-overlay">
            <div class="hero-content">
                <span class="section-tag">INSTITUCIÓN EDUCATIVA</span>
                    <h1>SOBRE NOSOTROS</h1>
                    <div class="hero-line"></div>
                    <p>
                        Transformamos la educación en una experiencia de alto impacto,
                        formando estudiantes con mentalidad ganadora y visión global.
                    </p>
                </div>
            </div>
        <img src="{{ asset('images/imagen10.jpg') }}" alt="Fondo" class="hero-bg-img">
    </section>

        <section class="alternating-section">
            <div class="content-grid">
                <div class="text-side">
                    <h2>¿Por qué elegir Next Level Academy?</h2>
                    <ul>
                        <li>Educación de calidad con docentes comprometidos y metodologías actualizadas.</li>
                        <li>Desarrollo integral: académico, emocional y de valores.</li>
                        <li>Ambiente familiar donde cada estudiante es conocido por su nombre y necesidades.</li>
                        <li>Preparación sólida para la vida universitaria y el mundo laboral, con énfasis en habilidades del siglo XXI.</li>
                        <li>Academia integrada: refuerzo y cursos especializados para potenciar el rendimiento.</li>
                    </ul>
                </div>
                <div class="image-side">
                    <img src="https://thumbs.dreamstime.com/b/grupo-diverso-de-estudiantes-secundaria-que-escuchan-un-profesor-en-el-aula-concepto-estilo-vida-educativo-277961860.jpg"
                         alt="Estudiantes en clase con profesor" loading="lazy">
                </div>
            </div>
        </section>

        <section class="alternating-section reverse">
            <div class="content-grid">
                <div class="image-side">
                    <img src="https://thumbs.dreamstime.com/b/profesor-de-escuela-feliz-y-ni%C3%B1os-peque%C3%B1os-leyendo-libros-aprendiendo-cosas-nuevas-juntos-estudiantes-que-tienen-clases-224495347.jpg"
                         alt="Niños aprendiendo con profesora" loading="lazy">
                </div>
                <div class="text-side">
                    <h2>Niveles disponibles para Admisión 2026</h2>
                    <ul>
                        <li><strong>Primaria</strong> (1° a 6° grado)</li>
                        <li><strong>Secundaria</strong> (1° a 5° año)</li>
                        <li><strong>Academia Next Level</strong> (refuerzo académico, preparación preuniversitaria, cursos complementarios – consulta disponibilidad por grado o área)</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="alternating-section">
            <div class="content-grid">
                <div class="text-side">
                    <h2>Nuestro Proceso de Admisión – Sencillo y transparente</h2>
                    <p>En Next Level Academy valoramos el encuentro personal y la confianza mutua. Por eso nuestro proceso es cercano y sin complicaciones:</p>
                    <ol>
                        <li><strong>Preinscripción en línea</strong><br>Completa el formulario rápido (toma menos de 5 minutos). Recibirás confirmación inmediata por correo o WhatsApp.</li>
                        <li><strong>Entrega y revisión de documentos</strong><br>Sube o entrega los documentos solicitados (digital o presencial, según prefieras).</li>
                        <li><strong>Entrevista familiar</strong><br>Conversación amigable con el postulante y sus padres/apoderados (duración aproximada: 30-45 minutos).</li>
                        <li><strong>Resultado y reserva de vacante</strong><br>Te comunicamos el resultado en pocos días.</li>
                        <li><strong>Matrícula oficial</strong><br>Firma de documentos y entrega final. ¡Tu hijo/a ya es parte de la familia Next Level!</li>
                    </ol>
                    <p><strong>El proceso de evaluación inicial es completamente gratuito.</strong></p>
                </div>
                <div class="image-side">
                    <img src="{{ asset('images/imagen10.jpg') }}" alt="">
                </div>
            </div>
        </section>

        <section class="alternating-section" style="margin: 4rem 0;">
            <div class="content-grid">
                <div class="text-side">
                    <h2>Documentos necesarios</h2>
                    <ul class="check-list">
                        <li>Partida de nacimiento del postulante (copia legalizada o digital).</li>
                        <li>DNI del menor y de los padres o apoderados.</li>
                        <li>Certificado o constancia de estudios del año anterior (o libreta de notas).</li>
                        <li>Foto tamaño pasaporte reciente del estudiante.</li>
                        <li>Carnet de vacunas al día y ficha médica básica.</li>
                        <li>Para traslados: constancia de no adeudo del colegio anterior (si aplica).</li>
                    </ul>
                </div>
                <div class="text-side">
                    <h2>Fechas importantes – Admisión 2026</h2>
                    <ul class="check-list">
                        <li>Preinscripciones abiertas: desde ahora</li>
                        <li>Entrevistas: febrero a setiembre 2026</li>
                        <li>Resultados: máximo 7 días hábiles tras entrevista</li>
                        <li>Matrícula anticipada: hasta octubre 2026 (beneficios especiales)</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="alternating-section" style="margin: 5rem 0; text-align: center;">
            <div class="content-grid">
                <div class="text-side pensiones-side">
                    <h2 style="margin: 1rem 0 1.5rem;">Pensiones y costos aproximados 2026</h2>
                    <ul class="check-list" style="list-style: none; padding: 0; text-align: left; max-width: 500px; margin: 0 auto;">
                        <li>Matrícula anual: S/ 2,500 – S/ 3,800 (según nivel)</li>
                        <li>Pensión mensual: desde S/ 850</li>
                        <li>Incluye materiales, seguro, actividades y plataforma educativa.</li>
                        <li>Opciones flexibles y descuentos por hermanos.</li>
                    </ul>
                </div>

                <div class="text-side faq-side">
                    <h2 style="margin: 1rem 0 1.5rem;">Preguntas Frecuentes</h2>
                    <div style="text-align: left; max-width: 600px; margin: 0 auto;">
                        <details style="margin: 1.2rem 0; border-bottom: 1px solid #ddd; padding-bottom: 0.8rem;">
                            <summary style="font-weight: 600; cursor: pointer; font-size: 1.1rem; list-style: none;">
                                ¿Hay examen de admisión?
                            </summary>
                            <p style="margin: 1rem 0; color: #444; line-height: 1.6;">
                                No realizamos examen escrito eliminatorio. Valoramos la entrevista personal y el historial académico del estudiante.
                            </p>
                        </details>
                    </div>
                </div>
            </div>

            <div style="margin-top: 4rem;">
                <h2>¿Listo para dar el siguiente paso?</h2>
                <p>Estamos emocionados de conocerte y acompañar el crecimiento de tu hijo/a.</p>
                <a href="{{ route('contactenos') }}" class="btn btn-primary" style="font-size: 1.3rem; padding: 1.2rem 3rem;">Solicitar información o agendar entrevista</a>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="{{ asset('images/logo_footer.png') }}" alt="Next Level Logo" class="footer-logo-img">
                <div class="footer-contact">
                    <p><i class="fa-solid fa-phone"></i> +51 923 317 626</p>
                    <p><i class="fa-solid fa-location-dot"></i> Carretera Federico Basadre Km. 6 (Al costado de la UNU)</p>
                    <p><i class="fa-solid fa-envelope"></i> contacto@nextlevel.edu.pe</p>
                </div>
            </div>

            <div class="footer-right">
                <div class="footer-column">
                    <a href="{{ route('ubicacion') }}">UBICACIÓN</a>
                    <a href="{{ route('contactenos') }}">CONTÁCTANOS</a>
                    <a href="{{ route('admision') }}">ADMISIÓN 2026</a>
                    <a href="{{ route('sobre.nosotros') }}">SOBRE NOSOTROS</a>
                    <a href="{{ route('nuestros.valores') }}">NUESTROS VALORES</a>
                </div>
                <div class="footer-column">
                    <a href="{{ route('galeria') }}">GALERIA</a>
                    <a href="{{ route('academia') }}">ACADEMIA</a>
                    <a href="#">PAGOS EN LÍNEA</a>
                    <a href="#">MATRICULA 2026</a>
                    <a href="#">LIBRO RECLAMACIONES</a>
                </div>
                <div class="footer-column social-align">
                    <a href="#">POLÍTICA COOKIES</a>
                    <a href="#">POLÍTICA PRIVACIDAD</a>
                    <a href="#">TERMINOS Y CONDICIONES</a>

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
    <script src="{{ asset('js/hero-slider.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/menu-mobile.js') }}"></script>
</body>
</html>
