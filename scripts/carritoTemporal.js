
// Creo un carrito vacío
let carrito = {};

// Añado al carrito 1 unidad a la cantidad y le sumo el precio del producto
function agregarAlCarrito(producto, precio) {
    if (carrito[producto]) {
        carrito[producto].cantidad++;
    } else {
        carrito[producto] = { precio, cantidad: 1 };
    }
    actualizarCarrito();
}

// Vacio el carrito
function vaciarCarrito() {
    carrito = {};
    actualizarCarrito();
}

// Elimino 1 unidad del carrito y le resto el precio del producto
function quitarDelCarrito(producto) {
    if (carrito[producto] && carrito[producto].cantidad > 0) {
        carrito[producto].cantidad--;
        if (carrito[producto].cantidad === 0) {
            delete carrito[producto];
        }
        actualizarCarrito();
    }
}

// Actualizo el carrito con los productos que hay en él
function actualizarCarrito() {

    // Evita que se cree una lista de n productos cada vez que se actualiza el carrito
    const itemsCarrito = document.getElementById('itemsCarrito');
    itemsCarrito.innerHTML = '';

    // Recorro el carrito y lo muestro en el HTML
    Object.keys(carrito).forEach(producto => {
        const div = document.createElement('div');
        const precioTotal = carrito[producto].precio * carrito[producto].cantidad;
        div.innerHTML = `Cantidad: ${carrito[producto].cantidad} - Precio Total: ${precioTotal} € `;
        itemsCarrito.appendChild(div);
    });
}

