// Obtener elementos por su ID
var cajaDeTexto = document.getElementById("recoveryPass");
var botonVerde = document.getElementById("botonRecovey");
var hipervinculo = document.getElementById("hipervinculo");

// Agregar un evento click al hipervínculo
hipervinculo.addEventListener("click", function (event) {
    // Evitar que el hipervínculo realice su acción predeterminada (navegar a una página)
    event.preventDefault();

    // Ocultar la caja de texto y el botón
    cajaDeTexto.classList.add("oculto");
    botonVerde.classList.add("oculto");
});