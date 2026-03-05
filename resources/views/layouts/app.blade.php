<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Next Level - Centro Educativo')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/web/web_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/marquee_principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/propuesta.css') }}">

    @yield('extra-head')  <!-- Para CSS o meta adicionales por página si necesitas -->
</head>

<body>



    @stack('scripts')  <!-- Para scripts específicos de páginas -->

    <!-- BANNER DE COOKIES - Aparece en todas las páginas -->
    <div id="cookie-banner" class="cookie-banner" style="display: none;">
      <div class="cookie-content">
        <p>
          Utilizamos cookies esenciales para el funcionamiento del sitio, analíticas para mejorar la experiencia y, con tu permiso, de marketing. Al continuar, aceptas nuestras
          <a href="{{ route('politica.privacidad') }}" target="_blank">Política de Privacidad</a>,
          <a href="{{ route('politica.cookies') }}" target="_blank">Política de Cookies</a> y
          <a href="{{ route('terminos.condiciones') }}" target="_blank">Términos y Condiciones</a>.
        </p>
        <div class="cookie-buttons">
          <button id="btn-accept-all" class="btn primary">Aceptar todo</button>
          <button id="btn-configure" class="btn secondary">Configurar preferencias</button>
          <button id="btn-reject-nonessential" class="btn outline">Rechazar cookies de terceros</button>
        </div>
      </div>
    </div>

    <!-- Modal granular -->
    <div id="cookie-modal" class="cookie-modal" style="display:none;">
      <div class="modal-content">
        <h2>Preferencias de Cookies</h2>
        <p>Elige qué cookies permitir. Puedes cambiarlo cuando quieras desde la Política de Cookies.</p>

        <div class="cookie-option">
          <label><input type="checkbox" checked disabled> Cookies esenciales (necesarias)</label>
          <p>Permiten el funcionamiento básico del sitio.</p>
        </div>

        <div class="cookie-option">
          <label><input type="checkbox" id="analytics"> Cookies analíticas</label>
          <p>Nos ayudan a entender cómo usas el sitio para mejorarlo (ej. Google Analytics).</p>
        </div>

        <div class="cookie-option">
          <label><input type="checkbox" id="marketing"> Cookies de marketing</label>
          <p>Permiten publicidad personalizada y seguimiento en redes.</p>
        </div>

        <div class="modal-buttons">
          <button id="btn-save-preferences" class="btn primary">Guardar preferencias</button>
          <button id="btn-close-modal" class="btn outline">Cerrar</button>
        </div>
      </div>
    </div>

    <style>
      .cookie-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #0a1f44;
        color: white;
        padding: 15px 20px;
        box-shadow: 0 -4px 12px rgba(0,0,0,0.3);
        z-index: 9999;
        font-family: Arial, sans-serif;
      }
      .cookie-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
      }
      .cookie-content p { margin: 0; font-size: 14px; flex: 1 1 70%; }
      .cookie-content a { color: #00aaff; text-decoration: underline; }
      .cookie-buttons { display: flex; gap: 10px; flex-wrap: wrap; }
      .btn {
        padding: 10px 18px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
      }
      .btn.primary { background: #00aaff; color: white; }
      .btn.secondary { background: #555; color: white; }
      .btn.outline { background: transparent; border: 2px solid white; color: white; }

      .cookie-modal {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
      }
      .modal-content {
        background: white;
        color: #333;
        padding: 30px;
        max-width: 600px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
      }
      .cookie-option { margin: 15px 0; font-size: 15px; }
      .modal-buttons { text-align: right; margin-top: 25px; }

      @media (max-width: 768px) {
        .cookie-content { flex-direction: column; text-align: center; }
      }
    </style>

    <script>

        document.addEventListener('DOMContentLoaded', function() {

            const banner = document.getElementById('cookie-banner');
            const modal = document.getElementById('cookie-modal');

            const btnAccept = document.getElementById('btn-accept-all');
            const btnReject = document.getElementById('btn-reject-nonessential');
            const btnConfig = document.getElementById('btn-configure');
            const btnSave = document.getElementById('btn-save-preferences');
            const btnClose = document.getElementById('btn-close-modal');

            const analyticsCheck = document.getElementById('analytics');
            const marketingCheck = document.getElementById('marketing');

            /* FUNCIONES */

            function applyConsent(consent) {

                if (consent === 'all') {

                    enableAnalytics();
                    enableMarketing();

                } else if (consent === 'essentials') {

                    disableAnalytics();
                    disableMarketing();

                } else {

                    try {
                        const prefs = JSON.parse(consent);

                        if (prefs.analytics) {
                            enableAnalytics();
                        } else {
                            disableAnalytics();
                        }

                        if (prefs.marketing) {
                            enableMarketing();
                        } else {
                            disableMarketing();
                        }

                    } catch(e) {
                        disableAnalytics();
                        disableMarketing();
                    }

                }

            }

            function enableAnalytics() {
                console.log("Analytics ACTIVADO");
                // aquí cargas Google Analytics si lo usas
            }

            function disableAnalytics() {
                console.log("Analytics BLOQUEADO");
                window['ga-disable'] = true;
            }

            function enableMarketing() {
                console.log("Marketing ACTIVADO");
                // aquí cargas pixel de Facebook, etc.
            }

            function disableMarketing() {
                console.log("Marketing BLOQUEADO");
            }


            /* MOSTRAR BANNER SOLO SI NO HAY CONSENTIMIENTO */

            const consent = localStorage.getItem('cookieConsent');

            if (!consent) {
                banner.style.display = 'block';
            } else {
                applyConsent(consent);
            }


            /* BOTONES */

            btnAccept.addEventListener('click', function() {

                localStorage.setItem('cookieConsent', 'all');

                banner.style.display = 'none';

                enableAnalytics();
                enableMarketing();

            });


            btnReject.addEventListener('click', function() {

                localStorage.setItem('cookieConsent', 'essentials');

                banner.style.display = 'none';

                disableAnalytics();
                disableMarketing();

            });


            btnConfig.addEventListener('click', function() {

                modal.style.display = 'flex';

            });


            btnClose.addEventListener('click', function() {

                modal.style.display = 'none';

            });


            btnSave.addEventListener('click', function() {

                const prefs = {

                    analytics: analyticsCheck.checked,
                    marketing: marketingCheck.checked

                };

                localStorage.setItem('cookieConsent', JSON.stringify(prefs));

                modal.style.display = 'none';
                banner.style.display = 'none';

                applyConsent(JSON.stringify(prefs));

            });

        });

        // Botón para reabrir el modal en cualquier momento
        document.addEventListener('DOMContentLoaded', function() {
            const openBtn = document.getElementById('open-cookie-preferences');

            if (openBtn) {
                openBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const modal = document.getElementById('cookie-modal');
                    if (modal) {
                        modal.style.display = 'flex';

                        // Opcional: pre-cargar las preferencias actuales desde localStorage
                        const consent = localStorage.getItem('cookieConsent');
                        if (consent && consent !== 'all' && consent !== 'essentials') {
                            try {
                                const prefs = JSON.parse(consent);
                                document.getElementById('analytics').checked = prefs.analytics || false;
                                document.getElementById('marketing').checked = prefs.marketing || false;
                            } catch (err) {
                                console.warn('Error parseando cookie preferences:', err);
                            }
                        }
                    }
                });
            }
            // Si no existe → no pasa nada, no hay error
        });
</script>

</body>
</html>
