<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Política de Privacidad</title>
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
            <h1>POLÍTICA DE PRIVACIDAD – NEXT LEVEL SCHOOL</h1>
            <p><strong>Última actualización: febrero 2026</strong></p>

            <p>I.E.P Next Level School (en adelante “la Institución”, “nosotros” o “nuestro”), con domicilio en Carretera Federico Basadre Km. 6 (Al costado de la UNU), Pucallpa, Ucayali, Perú, se compromete a proteger la privacidad y el tratamiento adecuado de los datos personales de nuestros usuarios, estudiantes, apoderados y visitantes del sitio web https://www.nextlevelacademy.pe (o cualquier dominio/subdominio relacionado), así como de quienes contratan nuestros servicios educativos.</p>

            <p>Esta Política de Privacidad describe cómo recopilamos, utilizamos, almacenamos, protegemos y, en su caso, compartimos o transferimos los datos personales, en estricto cumplimiento de la Ley N° 29733, Ley de Protección de Datos Personales, su Reglamento aprobado por Decreto Supremo N° 003-2013-JUS (y modificaciones posteriores, incluyendo DS 016-2024-JUS), y demás normativa aplicable en la República del Perú.</p>

            <p>Al acceder a nuestro sitio web, inscribirse en cursos, clases, talleres, simulacros o cualquier servicio, o proporcionarnos datos personales por cualquier medio (incluyendo WhatsApp, correo electrónico, formularios o presencialmente), usted (el “Titular de los Datos”, “Usuario”, “Estudiante” o “Apoderado”) acepta las prácticas descritas en esta Política. Si no está de acuerdo, por favor no proporcione sus datos ni utilice nuestros servicios.</p>

            <h2>1. Responsable del Tratamiento de Datos Personales</h2>
            <p>Next Level School es el titular y responsable del tratamiento de los bancos de datos personales que administra.</p>
            <p>Contacto del responsable:</p>
            <ul>
                <li>Correo electrónico: info@nextlevelacademy.pe</li>
                <li>WhatsApp: +51 957560781</li>
                <li>Dirección: Carretera Federico Basadre Km. 006 (Al costado de la UNU)</li>
            </ul>

            <h2>2. Datos Personales que Recopilamos</h2>
            <p>Recopilamos datos personales necesarios para prestar nuestros servicios educativos (preparación preuniversitaria, refuerzo escolar, talleres, asesorías, material educativo, etc.). Según el caso, podemos tratar:</p>
            <ul>
                <li>Datos de identificación: nombres y apellidos, DNI/CE, fecha de nacimiento, género.</li>
                <li>Datos de contacto: teléfono, celular, correo electrónico, dirección domiciliaria.</li>
                <li>Datos de apoderados (obligatorio para menores de 18 años): nombres, DNI, relación con el estudiante, teléfono y correo.</li>
                <li>Datos académicos: colegio de procedencia, grado/nivel educativo, notas o resultados previos (si se proporcionan), carrera o universidad de interés.</li>
                <li>Datos de pago: información bancaria o de transacción (Yape/Plin, transferencia, etc.), sin almacenar datos completos de tarjetas.</li>
                <li>Datos de conexión y uso: IP, tipo de dispositivo, navegador, cookies (ver sección de cookies más abajo), registros de acceso al aula virtual.</li>
                <li>Datos sensibles (solo en casos excepcionales y con consentimiento expreso): estado de salud relevante para emergencias en clases presenciales, o datos biométricos si se implementara control de asistencia (no aplicable actualmente).</li>
            </ul>
            <p>No recopilamos datos innecesarios ni prohibidos por ley.</p>

            <h2>3. Finalidades del Tratamiento</h2>
            <p>Tratamos sus datos para:</p>
            <ul>
                <li>Gestionar la inscripción, matrícula, cobro y prestación de servicios educativos.</li>
                <li>Comunicar horarios, materiales, evaluaciones, resultados, avisos importantes o cambios en los servicios (vía correo, WhatsApp, aula virtual).</li>
                <li>Proporcionar acceso personalizado al aula virtual y materiales educativos.</li>
                <li>Cumplir obligaciones legales (emisión de comprobantes de pago, reportes a autoridades educativas si aplica).</li>
                <li>Mejorar nuestros servicios, estadísticas internas y calidad educativa (sin identificar personalmente).</li>
                <li>Enviar información promocional o invitaciones a nuevos talleres/cursos (solo con consentimiento previo).</li>
                <li>Atender consultas, reclamos o ejercer derechos ARCO (ver sección 8).</li>
            </ul>

            <h2>4. Principios Rectores</h2>
            <p>Nos regimos por los principios de la Ley N° 29733: legalidad, consentimiento, finalidad, proporcionalidad, calidad, seguridad, disponibilidad de recurso y nivel de protección adecuado.</p>

            <h2>5. Consentimiento</h2>
            <p>El tratamiento se basa en su consentimiento libre, previo, expreso e informado (o del apoderado para menores). Al inscribirse o proporcionar datos, usted consiente el tratamiento para las finalidades indicadas. Excepciones al consentimiento (previstas por ley): cumplimiento de obligaciones contractuales o legales, o protección de derechos vitales.</p>

            <h2>6. Compartir y Transferencia de Datos</h2>
            <p>No vendemos ni comercializamos datos personales. Podemos compartirlos solo:</p>
            <ul>
                <li>Con proveedores de servicios tecnológicos (plataforma virtual, hosting, emisores de comprobantes electrónicos) bajo contratos que garantizan el mismo nivel de protección.</li>
                <li>Con autoridades competentes por mandato legal.</li>
                <li>En caso de fusión, adquisición o reorganización empresarial (con notificación previa).</li>
            </ul>
            <p>No realizamos transferencias internacionales de datos a menos que se garantice nivel adecuado de protección (o con consentimiento expreso).</p>

            <h2>7. Medidas de Seguridad</h2>
            <p>Adoptamos medidas técnicas, organizativas y legales razonables para proteger los datos contra acceso no autorizado, pérdida, alteración o destrucción (incluyendo cifrado donde aplica, control de accesos, backups, firewalls). El aula virtual y materiales son de acceso personal e intransferible (ver cláusula 8 de los Términos y Condiciones).</p>

            <h2>8. Derechos de los Titulares (ARCO y otros)</h2>
            <p>Usted tiene derecho a:</p>
            <ul>
                <li>Acceso: conocer qué datos tenemos sobre usted.</li>
                <li>Rectificación: actualizar o corregir datos inexactos.</li>
                <li>Cancelación: solicitar supresión cuando ya no sean necesarios.</li>
                <li>Oposición: oponerse a ciertos tratamientos (ej. marketing).</li>
                <li>Portabilidad y no ser objeto de decisiones automatizadas (según ley).</li>
            </ul>
            <p>Para ejercer estos derechos, envíe solicitud escrita a info@nextlevelacademy.pe con copia de DNI. Responderemos en máximo 10 días hábiles (prorrogable por 5 más si es complejo).</p>

            <h2>9. Cookies y Tecnologías Similares</h2>
            <p>Nuestro sitio usa cookies esenciales (para funcionamiento) y analíticas. Puede configurar su navegador para rechazarlas, pero esto puede afectar la experiencia.</p>

            <h2>10. Conservación de Datos</h2>
            <p>Conservamos los datos durante el tiempo necesario para cumplir la finalidad (durante la relación educativa + plazo legal para obligaciones fiscales o contractuales, usualmente 5-10 años según tipo de dato). Luego se bloquean o suprimen.</p>

            <h2>11. Modificaciones</h2>
            <p>Podemos actualizar esta Política. La versión vigente se publicará en el sitio web con la fecha de “Última actualización”. El uso continuado implica aceptación de los cambios.</p>

            <h2>12. Ley Aplicable y Solución de Controversias</h2>
            <p>Esta Política se rige por las leyes del Perú. Cualquier controversia se resolverá primero por conciliación; de no lograrse acuerdo, ante los juzgados de Lima, Perú.</p>
            <h2>13. Tratamiento de Imágenes y Datos Personales de Menores de Edad (Fotografías, Videos y Otros Registros Visuales)</h2>
            <p>Next Level School reconoce que las imágenes (fotografías, videos, grabaciones audiovisuales o cualquier registro que permita identificar a una persona) constituyen datos personales conforme a la Ley N° 29733 y su Reglamento (Decreto Supremo N° 016-2024-JUS). Cuando se trate de menores de edad (estudiantes menores de 18 años), aplicamos reglas especiales de protección para salvaguardar su intimidad, honra e interés superior.</p>

            <h3>13.1 Finalidades específicas del tratamiento de imágenes</h3>
            <p>Podremos captar, reproducir, difundir o publicar imágenes de estudiantes únicamente para fines educativos y promocionales legítimos, tales como:</p>
            <ul>
                <li>Mostrar actividades académicas, talleres, simulacros, logros educativos o eventos institucionales.</li>
                <li>Publicar en la página web oficial, aula virtual, redes sociales de la institución (con acceso controlado o público según el caso), materiales impresos o digitales promocionales, boletines internos o testimonios educativos.</li>
            </ul>
            <p>No utilizaremos las imágenes para fines comerciales directos (publicidad pagada, venta de productos) ni para tratamientos no informados previamente.</p>

            <h3>13.2 Consentimiento requerido</h3>
            <ul>
                <li>Para menores de 14 años: El tratamiento de sus imágenes solo es lícito con el consentimiento expreso, previo, informado e inequívoco de los padres, tutores o representantes legales que ejerzan la patria potestad o tutela.</li>
                <li>Para mayores de 14 años y menores de 18 años: El menor podrá otorgar su consentimiento directamente, siempre que la información se proporcione en un lenguaje claro y comprensible adaptado a su edad. No obstante, por prudencia y en cumplimiento de buenas prácticas educativas, recomendamos y solicitaremos preferentemente el consentimiento adicional de los apoderados.</li>
            </ul>
            <p>El consentimiento se obtendrá mediante:</p>
            <ul>
                <li>Formulario específico durante la matrícula/inscripción (físico o digital).</li>
                <li>Casilla expresa en formularios en línea con verificación razonable (por ejemplo, envío de correo o WhatsApp al apoderado para confirmación).</li>
            </ul>

            <h3>13.3 Características del consentimiento</h3>
            <ul>
                <li>Será específico para el uso de imágenes (no genérico).</li>
                <li>Informará claramente: finalidades, medios de difusión (web, redes, etc.), duración (durante la relación educativa o hasta revocación), y que es revocable en cualquier momento sin retroactividad ni perjuicio.</li>
                <li>No se considerará implícito ni derivado de la matrícula general; debe ser otorgado de forma separada y explícita.</li>
            </ul>

            <h3>13.4 Medidas de protección y verificación</h3>
            <p>Realizaremos esfuerzos razonables (según tecnología disponible) para verificar la edad del estudiante y la identidad/autorización del apoderado en tratamientos por Internet (art. 25 del Reglamento). Si no contamos con consentimiento expreso:</p>
            <ul>
                <li>No publicaremos imágenes identificables del menor.</li>
                <li>Usaremos alternativas como imágenes borrosas, de espaldas, grupales sin enfoque en rostros, o sin publicación pública.</li>
            </ul>

            <h3>13.5 Revocación y derechos</h3>
            <p>El consentimiento para el uso de imágenes es revocable en cualquier momento mediante comunicación escrita o por correo a info@nextlevelacademy.pe. Procederemos a retirar o anonimizar las imágenes publicadas en un plazo razonable (máximo 10 días hábiles). Los apoderados o el menor (si >14 años) podrán ejercer los derechos ARCO (acceso, rectificación, cancelación, oposición) respecto de sus imágenes, conforme a la sección 8 de esta Política.</p>

            <h3>13.6 Prohibiciones</h3>
            <p>No recopilaremos ni trataremos imágenes que revelen información innecesaria sobre el grupo familiar del menor sin consentimiento adicional (art. 23 del Reglamento). No compartiremos imágenes con terceros sin base legal o consentimiento expreso.</p>

            <h2>14. Contacto</h2>
            <p>Para consultas, ejercicio de derechos o reclamos:</p>
            <ul>
                <li>Correo: info@nextlevelacademy.pe</li>
                <li>WhatsApp: +51 957560781</li>
                <li>Dirección: Carretera Federico Basadre Km. 006 (Al costado de la UNU)</li>
            </ul>

            <p class="final">Al utilizar nuestros servicios, usted y/o su apoderado declaran haber leído, entendido y aceptado esta Política de Privacidad.</p>
            <p class="final">Next Level School – Preparándote para el siguiente nivel educativo.</p>
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

    <script src="{{ asset('js/marquee_principal.js') }}"></script>
    <script src="{{ asset('js/nav-scroll.js') }}"></script>
    <script src="{{ asset('js/hero-slider.js') }}"></script>
    <script src="{{ asset('js/menu-mobile.js') }}"></script>


</body>
</html>

