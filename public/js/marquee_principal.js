document.addEventListener("DOMContentLoaded", function () {

    const marquee = document.querySelector(".marquee-track");

    if (!marquee) return;

    // duplicar contenido para loop infinito real
    const content = marquee.innerHTML;
    marquee.innerHTML += content;
});
