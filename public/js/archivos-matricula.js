// Array global que guarda TODOS los archivos acumulados
let archivosAcumulados = [];

const inputArchivos = document.getElementById('archivos-matricula');

inputArchivos.addEventListener('change', function(e) {

    const nuevosArchivos = Array.from(e.target.files);

    nuevosArchivos.forEach(file => {

        // validar que sea archivo real
        if (!(file instanceof File)) return;

        // validar tipo permitido
        /*const tiposPermitidos = [
            "application/pdf",
            "image/jpeg",
            "image/jpg",
            "image/png",
            "application/msword",
            "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
        ];*/

        const tiposPermitidos = ["pdf","jpg","jpeg","png","doc","docx"];
        const extension = file.name.split('.').pop().toLowerCase();

        if (!tiposPermitidos.includes(extension)) {

            alert("Archivo no permitido: " + file.name);
            return;

        }

        archivosAcumulados.push(file);

    });

    actualizarListaArchivos();

    // limpiar input
    e.target.value = '';

});

function actualizarListaArchivos() {

    const lista = document.getElementById('file-list');
    const contador = document.getElementById('file-count');

    lista.innerHTML = '';

    if (archivosAcumulados.length === 0) {

        lista.innerHTML =
            '<li style="color:#888;font-style:italic;">Ningún archivo seleccionado</li>';

        contador.textContent = '0';
        return;

    }

    contador.textContent = archivosAcumulados.length;

    archivosAcumulados.forEach((file, index) => {

        const li = document.createElement('li');

        li.innerHTML = `
            ${file.name}
            <small style="color:#777;">(${formatFileSize(file.size)})</small>
            <button type="button"
                data-index="${index}"
                class="remove-btn"
                style="margin-left:10px;color:red;border:none;background:none;cursor:pointer;">
                Eliminar
            </button>
        `;

        lista.appendChild(li);

    });

    document.querySelectorAll(".remove-btn").forEach(btn => {

        btn.onclick = function() {

            const index = this.dataset.index;

            archivosAcumulados.splice(index, 1);

            actualizarListaArchivos();

        };

    });

}

function formatFileSize(bytes) {

    if (!bytes) return "0 Bytes";

    const k = 1024;
    const sizes = ["Bytes", "KB", "MB"];

    const i = Math.floor(Math.log(bytes) / Math.log(k));

    return (bytes / Math.pow(k, i)).toFixed(2) + " " + sizes[i];

}


// ENVÍO DEL FORMULARIO
document.querySelector("form").addEventListener("submit", async function(e) {

    e.preventDefault();

    const form = this;

    const formData = new FormData();

    // agregar inputs
    Array.from(form.elements).forEach(el => {

        if (!el.name) return;

        if (el.type === "file") return;

        formData.append(el.name, el.value);

    });


    // agregar archivos correctamente
    archivosAcumulados.forEach(file => {

        if (file instanceof File && file.size > 0) {

            formData.append("archivos[]", file, file.name);

        }

    });


    try {

        const response = await fetch(form.action, {

            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN":
                document.querySelector('meta[name="csrf-token"]').content
            }

        });

        const text = await response.text();

        try {

            const data = JSON.parse(text);

            if (!response.ok) {

                console.error(data);

                alert(data.message || "Error al enviar");

                return;

            }

            alert("Matrícula enviada correctamente 🎉");

        } catch {
            console.error("Respuesta no es JSON:", text);
            alert("Error interno del servidor (ver laravel.log)");
        }
        form.reset();

        archivosAcumulados = [];

        actualizarListaArchivos();

    }
    catch(error){

        console.error(error);

        alert("Error de conexión");

    }

});
