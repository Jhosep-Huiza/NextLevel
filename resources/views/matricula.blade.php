<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/web/web_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/marquee_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/propuesta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/experiencia.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/matricula.css') }}">
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

    <section id="formulario" class="matri-hero" style="background-image: url('{{ asset('images/imagen10.jpg') }}');">

            <div class="contenedor-formulario">

                    <div class="info-alumno">

                        <h2 class="title seccion">Datos del alumno</h2>

                        <form action="{{ route('matricula.enviar') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-alumnos">

                                <!-- COLUMNA IZQUIERDA -->
                                <div class="columna">

                                    <div class="box">
                                        <label>Nombres *</label>
                                        <input type="text" name="nombres" placeholder="Nombres del alumno" required>
                                    </div>

                                    <div class="box">
                                        <label>Apellido Paterno *</label>
                                        <input type="text" name="apellido_paterno" placeholder="Apellido Paterno" required>
                                    </div>

                                    <div class="box">
                                        <label>Apellido Materno *</label>
                                        <input type="text" name="apellido_materno" placeholder="Apellido Materno" required>
                                    </div>

                                    <div class="box">
                                        <label>DNI *</label>
                                        <input type="text" name="dni" placeholder="DNI" required>
                                    </div>

                                </div>

                                <!-- COLUMNA DERECHA -->
                                <div class="columna">

                                    <div class="box">
                                        <label>Correo electrónico </label>
                                        <input type="email" name="correo" placeholder="Correo electrónico" >
                                    </div>

                                    <div class="box">
                                        <label>Edad *</label>
                                        <input type="number" name="edad" placeholder="Edad" required>
                                    </div>

                                    <div class="box">
                                        <label>Sexo</label>
                                        <select name="sexo" required>
                                            <option value="" disabled selected>Sexo</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                            <option value="O">Prefiero no decirlo</option>
                                        </select>
                                    </div>

                                    <div class="box">
                                        <label>Celular</label>
                                        <input type="text" name="celular" placeholder="Celular">
                                    </div>

                                </div>

                                <div class="file-upload-box">
                                    <div class="box">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
                                    </div>

                                    <label for="archivos-matricula">Subir archivos requeridos (copia de DNI, boleta de notas u otros)</label>

                                    <input
                                        type="file"
                                        id="archivos-matricula"
                                        name="archivos[]"
                                        multiple
                                        class="custom-file-input"
                                        accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">


                                    <div class="file-list-container">
                                        <p class="file-count">Archivos seleccionados en total: <span id="file-count">0</span></p>
                                        <ul id="file-list" class="file-list"></ul>
                                    </div>


                                </div>

                            </div>

                            <!-- Datos de los padres -->
                            <h2 class="title seccion">Datos de los padres(tutor o apoderado)</h2>

                            <div class="form-padres">
                                <!-- COLUMNA IZQUIERDA -->
                                <div class="columna">

                                    <div class="box">
                                        <label>Nombres *</label>
                                        <input type="text" name="padre_nombres" placeholder="Nombres del padre o tutor" required>
                                    </div>

                                    <div class="box">
                                        <label>Apellido Paterno *</label>
                                        <input type="text" name="padre_apellido_paterno" placeholder="Apellido Paterno" required>
                                    </div>

                                    <div class="box">
                                        <label>Apellido Materno *</label>
                                        <input type="text" name="padre_apellido_materno" placeholder="Apellido Materno" required>
                                    </div>

                                    <div class="box">
                                        <label>DNI *</label>
                                        <input type="text" name="padre_dni" placeholder="DNI" required>
                                    </div>

                                </div>

                                <!-- COLUMNA DERECHA -->
                                <div class="columna">

                                    <div class="box">
                                        <label>Correo electrónico *</label>
                                        <input type="email" name="padre_correo" placeholder="Correo electrónico" required>
                                    </div>

                                    <div class="box">
                                        <label>Edad *</label>
                                        <input type="number" name="padre_edad" placeholder="Edad" required>
                                    </div>

                                    <div class="box">
                                        <label>Sexo</label>
                                        <select name="padre_sexo" required>
                                            <option value="" disabled selected>Sexo</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                            <option value="O">Prefiero no decirlo</option>
                                        </select>
                                    </div>

                                    <div class="box">
                                        <label>Celular *</label>
                                        <input type="text" name="padre_celular" placeholder="Celular" required>
                                    </div>

                                </div>

                            </div>


                            <!-- ================= MATRICULA ================= -->

                            <h2 class="title seccion">Datos de la Matrícula</h2>

                            <div class="matricula">

                                <div class="box">
                                    <label>Nivel</label>
                                    <select name="nivel" required>
                                        <option value="">&nbsp; Seleccione &nbsp;</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Academia">Academia</option>

                                    </select>
                                </div>

                                <div class="box">
                                    <label>Grado</label>
                                    <select name="grado" required>
                                        <option value="">&nbsp; Seleccione &nbsp;</option>
                                        <option value="Primaria-1°">Primaria - 1° grado</option>
                                        <option value="Primaria-2°">Primaria - 2° grado</option>
                                        <option value="Primaria-3°">Primaria - 3° grado</option>
                                        <option value="Primaria-4°">Primaria - 4° grado</option>
                                        <option value="Primaria-5°">Primaria - 5° grado</option>
                                        <option value="Primaria-6°">Primaria - 6° grado</option>
                                        <option value="Secundaria-1°">Secundaria - 1° grado</option>
                                        <option value="Secundaria-2°">Secundaria - 2° grado</option>
                                        <option value="Secundaria-3°">Secundaria - 3° grado</option>
                                        <option value="Secundaria-4°">Secundaria - 4° grado</option>
                                        <option value="Secundaria-5°">Secundaria - 5° grado</option>
                                        <option value="A-preuniversitaria">Academia - Preparación preuniversitaria</option>
                                        <option value="A-refuerzo">Academia - Refuerzo escolar</option>
                                        <option value="A-ingles">Academia - Curso ingles</option>
                                        <option value="A-natacion">Academia - Curso natación</option>
                                    </select>
                                </div>

                                <div class="box">
                                    <label>Dirección actual del domicilio </label>
                                    <input type="text" name="direccion" required placeholder="calle, número, urbanización, distrito">
                                </div>

                                <div class="box">
                                    <label>Tipo Pago</label>
                                    <select name="tipo_pago" required>
                                        <option value="">&nbsp; Seleccione &nbsp;</option>
                                        <option value="Contado">Contado</option>
                                    </select>
                                </div>

                                <div class="box">
                                    <label>&nbsp;</label>
                                    <button type="submit">Registrar</button>
                                </div>


                            </div>
                        </form>
                    </div>
            </div>
    </section>

    <section class="cta-matricula">

        <div class="cta-contenedor">

            <!-- TEXTO -->
            <div class="cta-texto">
                <h2>¡Tu futuro empieza hoy!</h2>

                <p>
                    En <strong>Next Level Educación</strong> preparamos estudiantes con
                    metodología moderna, docentes especializados y simulacros permanentes.
                </p>

                <p>
                    No esperes al último momento. Cada día de preparación cuenta para
                    alcanzar tu ingreso a la universidad.
                </p>

                <ul>
                    <li>✔ Clases en vivo y grabadas</li>
                    <li>✔ Simulacros tipo examen de admisión</li>
                    <li>✔ Seguimiento personalizado</li>
                    <li>✔ Material actualizado</li>
                </ul>

                <a href="#formulario" class="btn-matricula">Matricularme ahora</a>
            </div>

            <!-- VIDEO -->
            <div class="cta-video">
                <div class="video-wrapper">
                    <iframe
                        src="https://www.youtube.com/embed/oKoNDgJk6SQ"
                        title="Video Next Level"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
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

    @extends('layouts.app')


    <script src="{{ asset('js/marquee_principal.js') }}"></script>
    <script src="{{ asset('js/nav-scroll.js') }}"></script>
    <script src="{{ asset('js/hero-slider.js') }}"></script>
    <script src="{{ asset('js/menu-mobile.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/archivos-matricula.js') }}"></script>
</body>
</html>
