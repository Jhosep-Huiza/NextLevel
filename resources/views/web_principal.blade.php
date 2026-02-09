<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Level - Centro Educativo</title>

    <link rel="stylesheet" href="{{ asset('css/web/web_principal.css') }}">
</head>

<body>
    <div class="contact-bar">
        <div class="contact-bar-container">
            <a href="tel:+51923377626" class="contact-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" /></svg>
                923 377 626
            </a>
            <a href="mailto:contacto@nextlevel.edu.pe" class="contact-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" /></svg>
                contacto@nextlevel.edu.pe
            </a>
        </div>
    </div>

    <nav class="main-nav">
        <div class="nav-container">
            <ul class="nav-menu">
                <li><a href="#" class="active">INICIO</a></li>
                <li><a href="#">NOSOTROS</a></li>
                <li><a href="#">NIVELES</a></li>
                <li><a href="#">UBICACIÓN</a></li>
                <li><a href="#">MATRICULAS</a></li>
                <li><a href="#">BLOG</a></li>
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
        <div class="footer-content">
            <p><strong>Colegio y Academia NEXT LEVEL</strong></p>
            <p>Educación en el Próximo Nivel</p>
            <p>📍 Carretera Federico Basadre Km. 6 (Al costado de la UNU)</p>
            <p>📞 Más información: 923 317 626</p>
            <div class="footer-social">
                <a href="#" class="social-link">Facebook</a>
                <a href="#" class="social-link">WhatsApp</a>
                <a href="#" class="social-link">Instagram</a>
            </div>
            <p style="margin-top: 30px; opacity: 0.7;">© 2026 Next Level. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
