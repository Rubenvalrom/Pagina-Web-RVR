// Cambio de display del menu vertical para mostrarlo u ocultarlo
function mostrarMenu() {
    var x = document.getElementById("menuCategoriasVertical");
    if (x.style.display === "none") {
        x.style.display = "flex";

    } else {
        x.style.display = "none";
    }
}