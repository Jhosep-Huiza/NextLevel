// public/js/dropdown-personalizado.js

document.addEventListener('DOMContentLoaded', () => {
    const dropdown = document.getElementById('dropdownSexo');
    const selectedText = document.getElementById('selectedText');
    const inputSexo = document.getElementById('inputSexo');
    const options = dropdown.querySelectorAll('.dropdown-list li');

    if (dropdown) {
        // Abrir y cerrar el menú al hacer clic
        dropdown.addEventListener('click', () => {
            dropdown.classList.toggle('active');
        });

        // Lógica de selección de opciones
        options.forEach(option => {
            option.addEventListener('click', (e) => {
                const value = e.target.getAttribute('data-value');
                const text = e.target.innerText;

                selectedText.innerText = text;
                inputSexo.value = value;

                // Cerramos el menú y evitamos que el clic se propague
                dropdown.classList.remove('active');
                e.stopPropagation();
            });
        });

        // Cerrar el menú si el usuario hace clic en cualquier otro lugar de la pantalla
        document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('active');
            }
        });
    }
});
