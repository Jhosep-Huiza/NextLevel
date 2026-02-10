document.addEventListener('DOMContentLoaded', function () {
    // --- 1. Lógica para mostrar/ocultar contraseña ---
    const passwordInput = document.getElementById('passwordInput');
    const togglePassword = document.getElementById('togglePassword');
    const eyeOpen = document.getElementById('eyeOpen');
    const eyeClosed = document.getElementById('eyeClosed');

    if (togglePassword && passwordInput) {
        togglePassword.addEventListener('click', function () {
            // Verificamos el tipo actual para intercambiarlo
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

            // Intercambiamos los iconos del ojo
            if (eyeOpen && eyeClosed) {
                eyeOpen.classList.toggle('hidden');
                eyeClosed.classList.toggle('hidden');
            }
        });
    }

    // --- 2. Lógica para el Panel Deslizable (Login Unificado) ---
    const container = document.getElementById('mainContainer');
    const toggleBtn = document.getElementById('toggleBtn');
    const title = document.getElementById('overlayTitle');
    const text = document.getElementById('overlayText');

    if (toggleBtn && container) {
        toggleBtn.addEventListener('click', function () {
            // Activamos o desactivamos la clase que mueve el panel en el CSS
            container.classList.toggle('active');

            const isActive = container.classList.contains('active');

            // Actualizamos los textos según el lado donde se encuentre el panel
            if (isActive) {
                title.innerText = "¿Eres Familia?";
                // Usamos innerHTML para respetar el salto de línea <br>
                text.innerHTML = "Accede con tu documento de identidad para el <br> seguimiento de tus hijos.";
                toggleBtn.innerHTML = "<span>Soy Familia</span>";
            } else {
                title.innerText = "¿Eres Alumno?";
                text.innerHTML = "Ingresa con tu código para acceder a tus <br> notas y material de clase.";
                toggleBtn.innerHTML = "<span>Soy Alumno</span>";
            }
        });
    }
});
