// Función que elimina el mensaje de error despues de 3 segundos
window.onload = function() {
    const alerta = document.querySelector('.alerta');
    
    if (alerta) {
        setTimeout(() => {
            alerta.remove();
        }, 3000);
    }

    
}

const contenido = document.getElementById('page-inner');
const contenidoInmutable = contenido.innerHTML;

// Logo
document.getElementById('logo').addEventListener('click', function() {
    contenido.innerHTML = contenidoInmutable;
});

// Area de usuarios
document.getElementById('usuarios').addEventListener('click', function() {
    contenido.innerHTML = '<div class="row"><div class="col-md-12"><h2>Panel de Administrador</h2></div></div>';
});




