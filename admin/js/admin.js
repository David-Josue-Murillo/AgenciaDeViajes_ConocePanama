// Conexión a la base de datos


// Función que elimina el mensaje de error despues de 3 segundos
window.onload = function() {
    const alerta = document.querySelector('.alerta');
    
    if (alerta) {
        setTimeout(() => {
            alerta.remove();
        }, 3000);
    }

    
}

// Elementos del DOM
const contenido = document.getElementById('page-inner');
const contenidoInmutable = contenido.innerHTML;
const contenedorUsuarios = document.getElementById('contenedor_usuarios').innerHTML;

// Logo
document.getElementById('logo').addEventListener('click', function() {
    contenido.innerHTML = contenidoInmutable;
});

// Area de usuarios
document.getElementById('usuarios').addEventListener('click', function() {
    contenido.innerHTML = contenedorUsuarios;
});




