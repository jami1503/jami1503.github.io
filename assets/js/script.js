/*Botón de ir al tope de la página*/

()


document.getElementById("top-button").addEventListener("click", scrollUp)

function scrollUp() {
    var currentScroll = document.documentElement.scrollTo;
    if (currentScroll > 0) {
        window.scrollTo (0, 0);
    }
}