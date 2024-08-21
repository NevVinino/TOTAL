let currentItem = 1;
const totalItems = 3; // Número total de imágenes en el carrusel

function changeItem() {
    currentItem++;
    if (currentItem > totalItems) {
        currentItem = 1;
    }
    window.location.hash = `#itemCarrousel-${currentItem}`;
}

setInterval(changeItem, 1000); // Cambia la imagen cada 2 segundos
