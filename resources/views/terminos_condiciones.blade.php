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
            <h1>Términos y Condiciones de Uso – Next Level School</h1>
            <p><strong>Última actualización: febrero 2026</strong></p>

            <h2>1. Aceptación de los Términos</h2>
            <p>Al acceder, navegar o utilizar el sitio web https://www.nextlevelacademy.pe (o cualquier dominio/subdominio relacionado), inscribirse en cursos, clases, talleres o cualquier servicio ofrecido por la I.E.P Next Level School (en adelante “la Institución”, “nosotros” o “nuestro”), usted (el “Usuario”, “Estudiante”, “Apoderado” o “Usted”) acepta quedar vinculado por estos Términos y Condiciones, nuestra Política de Privacidad y cualquier otro documento legal que se incorpore por referencia.</p>
            <p>Si no está de acuerdo con estos términos, por favor no utilice nuestro sitio web ni contrate nuestros servicios.</p>

            <h2>2. Descripción de los Servicios</h2>
            <p>Next Level School ofrece servicios educativos tales como:</p>
            <ul>
                <li>Clases presenciales y/o virtuales en el nivel primaria, secundaria y preparación preuniversitaria</li>
                <li>Refuerzo escolar para primaria, secundaria y preuniversitaria</li>
                <li>Talleres intensivos, simulacros, asesorías personalizadas</li>
                <li>Material educativo digital y físico (PDFs, exámenes, etc.)</li>
            </ul>
            <p>Los servicios incluyen tanto educación formal regulada por el Ministerio de Educación del Perú (en los niveles de primaria y secundaria)<br> como prestación de servicios educativos privados complementarios (preparación preuniversitaria, refuerzo y talleres), y no sustituyen la educación formal regulada por el Ministerio de Educación del Perú.</p>

            <h2>3. Capacidad para contratar</h2>
            <ul>
                <li>Los servicios están dirigidos principalmente a menores de edad (primaria, secundaria y preparación universitaria).</li>
                <li>Las inscripciones y pagos deben ser realizados por el apoderado legal (padre, madre o tutor) si el estudiante es menor de 18 años.</li>
                <li>Al inscribirse, el apoderado declara tener la capacidad legal para contratar y representar al menor.</li>
            </ul>

            <h2>4. Proceso de Inscripción y Matrícula</h2>
            <ul>
                <li>La inscripción se considera confirmada solo después de realizado el pago correspondiente y recibido el comprobante (boleta/factura electrónica).</li>
                <li>Toda inscripción implica la aceptación expresa de estos Términos y Condiciones.</li>
                <li>Los precios, horarios y vacantes se informan en la web o vía WhatsApp/oficina y pueden variar sin previo aviso (se comunicará con anticipación razonable).</li>
            </ul>

            <h2>5. Pagos y Política de Devoluciones</h2>
            <ul>
                <li>Los pagos se realizan mediante transferencia bancaria, depósito, Yape/Plin, tarjeta (si aplica) u otros medios indicados.</li>
                <li>No se realizan devoluciones de matrícula ni mensualidades una vez iniciado el ciclo/clase, salvo casos excepcionales valorados por la dirección (fuerza mayor debidamente acreditada).</li>
                <li>En caso de retiro voluntario:</li>
                <ul>
                    <li>Antes del inicio del ciclo → devolución del 80-90% (menos gastos administrativos).</li>
                    <li>Después de iniciado → no hay devolución de mensualidades ya pagadas.</li>
                </ul>
                <li>No se otorgan reembolsos por inasistencias, suspensiones temporales o abandono del curso.</li>
            </ul>

            <h2>6. Política de Asistencia y Suspensión</h2>
            <ul>
                <li>El estudiante debe cumplir con las normas de conducta y asistencia establecidas.</li>
                <li>La Institución se reserva el derecho de suspender temporal o definitivamente el acceso al estudiante por:</li>
                <ul>
                    <li>Falta grave de respeto a docentes, compañeros o personal</li>
                    <li>Copia o fraude en evaluaciones</li>
                    <li>Uso indebido de la plataforma virtual (compartir accesos, grabar sin autorización, etc.)</li>
                    <li>Incumplimiento reiterado de pagos</li>
                </ul>
                <li>En caso de suspensión definitiva no habrá devolución de dinero.</li>
            </ul>

            <h2>7. Propiedad Intelectual</h2>
            <ul>
                <li>Todo el material educativo (clases grabadas, PDFs, exámenes, presentaciones, etc.) es propiedad exclusiva de Next Level School o cuenta con licencia de uso.</li>
                <li>Está prohibido reproducir, distribuir, compartir, transmitir, grabar o comercializar dicho material sin autorización escrita.</li>
                <li>El incumplimiento dará lugar a acciones legales y bloqueo inmediato de acceso.</li>
            </ul>

            <h2>8. Plataforma Virtual / Aula Virtual</h2>
            <ul>
                <li>El acceso al aula virtual es personal e intransferible.</li>
                <li>Está prohibido compartir usuario/contraseña.</li>
                <li>La Institución no se responsabiliza por problemas de conexión a internet, fallas en dispositivos o electricidad del usuario.</li>
            </ul>

            <h2>9. Limitación de Responsabilidad</h2>
            <ul>
                <li>Next Level School no garantiza resultados académicos específicos (ingreso a universidad, notas, etc.), ya que dependen del esfuerzo personal del estudiante.</li>
                <li>No seremos responsables por daños indirectos, consecuenciales, lucro cesante o pérdida de datos derivados del uso de nuestros servicios.</li>
            </ul>

            <h2>10. Protección de Datos Personales</h2>
            <p>El tratamiento de datos personales se rige por nuestra Política de Privacidad (enlace en el pie de página), conforme a la Ley N° 29733 y su reglamento.</p>

            <h2>11. Modificaciones</h2>
            <p>Podemos modificar estos Términos en cualquier momento. La versión actualizada se publicará en la web y la fecha de “Última actualización” se modificará. El uso continuado del sitio/servicios tras la publicación implica aceptación de los cambios.</p>

            <h2>12. Ley Aplicable y Solución de Controversias</h2>
            <p>Estos Términos se rigen por las leyes de la República del Perú. Cualquier controversia será resuelta en primera instancia mediante conciliación. De no lograrse acuerdo, las partes se someten a la jurisdicción de los juzgados y tribunales de la ciudad de Lima, Perú, renunciando a cualquier otro fuero.</p>

            <h2>13. Contacto</h2>
            <p>Para cualquier consulta o notificación:</p>
            <ul>
                <li>Correo: [info@nextlevelacademy.pe] (cámbialo por el real)</li>
                <li>WhatsApp: +51 957560781</li>
                <li>Dirección: Carretera Federico Basadre Km. 006 (Al costado de la UNU)</li>
            </ul>

            <p class="final">Al inscribirse o utilizar nuestros servicios, usted y/o su apoderado declaran haber leído, entendido y aceptado íntegramente estos Términos y Condiciones.</p>
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
