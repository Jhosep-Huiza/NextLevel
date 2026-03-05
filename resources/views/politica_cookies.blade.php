<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/web/web_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/marquee_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/propuesta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/experiencia.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/terminos_condiciones.css') }}">
</head>
<body>
    @extends('layouts.app')
    <div class="top-bar">
        <div class="marquee-wrapper">
            <div class="marquee-track" id="marqueeTrack">
                <div class="marquee-item">
                    ¡Matrícula 2026! &nbsp;&nbsp;&nbsp;&nbsp;
                    ☀️🏊‍♂️ Inicio de Clases: 2 Marzo &nbsp;&nbsp;&nbsp;&nbsp;
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
                <li><a href="#" class="active">INICIO</a></li>
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
                        <li><a href="#">Academia</a></li>
                    </ul>
                </li>
                <li><a href="#">UBICACIÓN</a></li>
                <li><a href="{{ route('matricula') }}">MATRICULAS</a></li>
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
                    <li><a href="#">UBICACIÓN</a></li>
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
        <section class="terminos-condiciones">
            <h1>Política de Cookies de Next Level Academy</h1>
            <p><strong>Última actualización: 23 de febrero de 2026</strong></p>

            <p>En <strong>Next Level Academy</strong> (en adelante, “nosotros”, “nuestro” o “la Academia”), utilizamos cookies y tecnologías similares en nuestro sitio web [www.nextlevelacademy.pe] (o el dominio que uses) para mejorar tu experiencia de navegación, analizar el uso del sitio y medir el rendimiento de nuestras campañas publicitarias.</p>

            <p>Esta Política de Cookies explica qué son las cookies, qué tipos utilizamos, para qué las usamos y cómo puedes gestionarlas o rechazarlas.</p>

            <h2>1. ¿Qué son las cookies?</h2>
            <p>Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo (computadora, teléfono o tablet) cuando visitas un sitio web. Permiten que el sitio recuerde información sobre tu visita (como preferencias o actividad) para facilitar y personalizar tu navegación en futuras visitas.</p>

            <p>Existen dos tipos principales:</p>
            <ul>
                <li><strong>Cookies propias</strong>: Las establece directamente nuestro sitio web.</li>
                <li><strong>Cookies de terceros</strong>: Las establece proveedores externos (como Google o Meta).</li>
            </ul>

            <p>Además, se clasifican por duración:</p>
            <ul>
                <li><strong>Cookies de sesión</strong>: Se eliminan al cerrar el navegador.</li>
                <li><strong>Cookies persistentes</strong>: Permanecen en tu dispositivo por un tiempo definido.</li>
            </ul>

            <h2>2. ¿Por qué usamos cookies?</h2>
            <p>Utilizamos cookies para:</p>
            <ul>
                <li>Analizar cómo interactúan los visitantes con nuestro sitio (estadísticas de uso).</li>
                <li>Medir la efectividad de nuestros anuncios en redes sociales.</li>
                <li>Mejorar la funcionalidad del sitio al embeber contenido externo (como videos educativos).</li>
            </ul>

            <p>No utilizamos cookies esenciales para el funcionamiento básico del sitio (como mantener sesión o carrito, ya que no tenemos tienda online). Todas las cookies que empleamos son <strong>no esenciales</strong> y requieren tu consentimiento previo.</p>

            <h2>3. Cookies que utilizamos en Next Level Academy</h2>
            <p>A continuación, detallamos las cookies no esenciales que implementamos:</p>

            <div class="table-responsive"></div>
            <table class="cookies-table-container" border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse: collapse;">
                <thead class="cookies-table">
                    <tr>
                        <th>Proveedor</th>
                        <th>Categoría</th>
                        <th>Cookies principales</th>
                        <th>Propósito</th>
                        <th>Duración aproximada</th>
                        <th>¿Requiere consentimiento?</th>
                    </tr>
                </thead>
                <tbody class="cookies-table">
                    <tr>
                        <td>Google Analytics</td>
                        <td>Analíticas / Estadísticas</td>
                        <td>_ga, _gid, _gat, _ga_XXXXXX (y similares)</td>
                        <td>Recopilar información anónima sobre cómo usas el sitio (páginas visitadas, tiempo en sitio, fuente de tráfico) para mejorar la web y los servicios educativos. No te identifica personalmente.</td>
                        <td>2 años (_ga), 24 horas (_gid), etc.</td>
                        <td>Sí (no esencial)</td>
                    </tr>
                    <tr>
                        <td>Meta (Facebook Pixel)</td>
                        <td>Marketing / Publicidad</td>
                        <td>_fbp, fr, tr, etc.</td>
                        <td>Medir conversiones de anuncios (ej. inscripciones desde Facebook/Instagram), optimizar campañas publicitarias y mostrar contenido relevante. Permite remarketing.</td>
                        <td>Hasta 90 días o más</td>
                        <td>Sí (no esencial)</td>
                    </tr>
                    <tr>
                        <td>YouTube (Google)</td>
                        <td>Funcionalidad / Contenido embebido</td>
                        <td>VISITOR_INFO1_LIVE, YSC, CONSENT, __Secure-*, etc.</td>
                        <td>Permitir la reproducción de videos educativos embebidos en el sitio (ej. clases demo o explicaciones). Recopila datos para estadísticas de visualización y recomendaciones.</td>
                        <td>Sesión o persistente (hasta 2 años)</td>
                        <td>Sí (no esencial)</td>
                    </tr>
                </tbody>
            </table>

            <p>Estas cookies pueden recopilar datos como: dirección IP (anonimizada en Analytics), tipo de navegador, dispositivo, páginas vistas, interacciones con videos y eventos de conversión (inscripciones).</p>

            <h2>4. Cómo gestionamos tu consentimiento</h2>
            <ul>
                <li>Al entrar al sitio por primera vez, aparecerá un <strong>banner de cookies</strong> con opciones:
                    <ul>
                        <li>Aceptar todas</li>
                        <li>Rechazar no esenciales</li>
                        <li>Configurar (elegir qué categorías aceptar)</li>
                    </ul>
                </li>
                <li>Solo instalamos cookies no esenciales después de que des tu consentimiento explícito (clic en "Aceptar" o configuración personalizada).</li>
                <li>Puedes retirar o modificar tu consentimiento en cualquier momento volviendo al banner (botón "<a href="#" id="open-cookie-preferences" class="footer-link">Configurar cookies</a>" aqui) o borrando las cookies de tu navegador.</li>
            </ul>

            <h2>5. Cómo rechazar o eliminar cookies</h2>
            <p>Además del banner, puedes:</p>
            <ul>
                <li>Configurar tu navegador para bloquear cookies (Chrome, Firefox, Edge, Safari → ajustes > Privacidad > Cookies).</li>
                <li>Usar el modo "Incógnito" o "Privado".</li>
                <li>Instalar extensiones como uBlock Origin, Privacy Badger o el propio "Do Not Track" de algunos navegadores.</li>
            </ul>

            <p><strong>Nota</strong>: Si rechazas o bloqueas las cookies no esenciales:</p>
            <ul>
                <li>Seguirás navegando normalmente.</li>
                <li>No veremos estadísticas detalladas de tu visita.</li>
                <li>No podrás medir conversiones de anuncios (puede que veas menos publicidad personalizada).</li>
                <li>Los videos de YouTube podrían cargar con limitaciones (ej. sin recomendaciones).</li>
            </ul>

            <h2>6. Transferencias internacionales y protección de datos</h2>
            <p>Algunos proveedores (Google, Meta) procesan datos en servidores fuera de Perú (principalmente EE.UU.). Estos proveedores cumplen con estándares de protección de datos (cláusulas contractuales estándar o Privacy Shield equivalente). Para más detalles, consulta sus políticas:</p>
            <ul>
                <li>Google: <a href="https://policies.google.com/privacy">https://policies.google.com/privacy</a></li>
                <li>Meta: <a href="https://www.facebook.com/privacy/policy">https://www.facebook.com/privacy/policy</a></li>
            </ul>

            <p>Nosotros cumplimos con la <strong>Ley N° 29733</strong> (Ley de Protección de Datos Personales) y su reglamento en Perú.</p>

            <h2>7. Cambios en esta Política</h2>
            <p>Podemos actualizar esta Política de Cookies por cambios en las tecnologías o normativas. Te notificaremos cambios importantes mediante el banner o en el sitio.</p>

            <h2>8. Contacto</h2>
            <p>Si tienes dudas sobre nuestras cookies o tu consentimiento:</p>
            <ul>
                <li>Escríbenos a: info@nextlevelacademy.pe (o el email que uses)</li>
                <li>Dirección: [Tu dirección en Pucallpa, Ucayali, Perú]</li>
            </ul>

            <p class="final"><strong>¡Gracias por visitar Next Level Academy! Tu privacidad es importante para nosotros.</strong></p>
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
                    <a href="{{ route('ciclos') }}">CICLOS</a>
                    <a href="{{ route('galeria') }}">GALERIA</a>
                    <a href="{{ route('contactenos') }}">CONTÁCTANOS</a>
                    <a href="{{ route('sobre.nosotros') }}">SOBRE NOSOTROS</a>
                    <a href="{{ route('nuestros.valores') }}">NUESTROS VALORES</a>
                </div>
                <div class="footer-column">
                    <a href="{{ route('academia') }}">ACADEMIA</a>
                    <a href="{{ route('pagos') }}">PAGOS EN LÍNEA</a>
                    <a href="{{ route('matricula') }}">MATRíCULA 2026</a>
                    <a href="#">MATRÍCULA ONLINE</a>
                    <a href="#">LIBRO RECLAMACIONES</a>
                </div>
                <div class="footer-column social-align">
                    <a href="{{ route('politica.cookies') }}">POLÍTICA COOKIES</a>
                    <a href="{{ route('politica.privacidad') }}">POLÍTICA PRIVACIDAD</a>
                    <a href="{{ route('terminos.condiciones') }}">TERMINOS Y CONDICIONES</a>

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

    <style>
        /* Contenedor para hacer la tabla responsive (scroll horizontal en móviles) */
        .cookies-table-container {
            overflow-x: auto;          /* Activa scroll horizontal cuando sea necesario */
            -webkit-overflow-scrolling: touch;  /* Scroll suave en iOS (iPhone) */
            margin: 1.5rem 0;
            border: 1px solid #ddd;    /* Opcional: borde para que se note el área scrollable */
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);  /* Sombra sutil para destacar */
        }

        /* Estilos generales de la tabla */
        .cookies-table {
            width: 100%;
            min-width: 900px;              /* Evita que se achique demasiado en desktop */
            border-collapse: collapse;
            font-size: 0.95rem;
            line-height: 1.5;
            color: #333;
            background-color: #fff;

        }

        /* Cabecera */
        .cookies-table thead th {
            background-color: #003366;     /* Azul oscuro de tu header/nav */
            color: white;
            text-align: left;
            padding: 12px 15px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 3px solid #005599; /* Línea más gruesa abajo */
        }

        /* Celdas */
        .cookies-table td,
        .cookies-table th {
            padding: 12px 15px;
            white-space: normal;       /* Permite que el texto se divida en líneas */
            word-wrap: break-word;     /* Rompe palabras largas si es necesario */
            hyphens: auto;
        }

        /* Zebra striping para mejor legibilidad */
        .cookies-table tbody tr:nth-child(even) {
            background-color: #f8f9fa;     /* Gris muy claro */
        }

        /* Hover para interactividad */
        .cookies-table tbody tr:hover {
            background-color: #e9f3ff;     /* Azul claro al pasar mouse */
            transition: background-color 0.2s ease;
        }

        /* Ajustes para texto largo (evita desbordes) */
        .cookies-table td {
            max-width: 300px;
            word-break: break-word;        /* Rompe palabras largas */
            hyphens: auto;                 /* Guiones automáticos si el navegador lo soporta */
        }

        /* Responsive extra: en pantallas muy pequeñas, reduce padding */
        @media (max-width: 768px) {
            .cookies-table {
                font-size: 0.9rem;
            }
            .cookies-table td,
            .cookies-table th {
                padding: 10px 12px;
            }
        }
    </style>

    <script src="{{ asset('js/marquee_principal.js') }}"></script>
    <script src="{{ asset('js/nav-scroll.js') }}"></script>
    <script src="{{ asset('js/hero-slider.js') }}"></script>
    <script src="{{ asset('js/menu-mobile.js') }}"></script>


</body>
</html>
