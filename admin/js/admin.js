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
const contenedorDestinos = document.getElementById('contenedor_destinos').innerHTML;
const contenedorReservas = document.getElementById('contenedor_reservas').innerHTML;
const contenedorPaquetes = document.getElementById('contenedor_paquetes').innerHTML;
const contenedorGuias = document.getElementById('contenedor_guias').innerHTML;

// Temporizador de session
document.getElementById('wrapper') && cerrarSession();

// Logo
document.getElementById('logo').addEventListener('click', function() {
    contenido.innerHTML = contenidoInmutable;
});

document.getElementById('logo_img').addEventListener('click', function() {
    contenido.innerHTML = contenidoInmutable;
});

// Area de usuarios
document.getElementById('usuarios').addEventListener('click', function() {
    contenido.innerHTML = contenedorUsuarios;
});

// Area de destinos
document.getElementById('destinos').addEventListener('click', function() {
    contenido.innerHTML = contenedorDestinos;
});

// Area de reservas
document.getElementById('reservas').addEventListener('click', function() {
    contenido.innerHTML = contenedorReservas;
});

// Area de paquetes
document.getElementById('paquetes').addEventListener('click', function() {
    contenido.innerHTML = contenedorPaquetes;
});

// Area de guias
document.getElementById('guias').addEventListener('click', function() {
    contenido.innerHTML = contenedorGuias;
});


// Funciones

function cerrarSession() {
    setTimeout(() => {
        alert('La sesión esta por expirar. Por favor, vuelva a iniciar sesión.');
        
        setTimeout(() => {
            window.location.href = 'php/exit.php';
        }, 600000);
    }, 558000);

}