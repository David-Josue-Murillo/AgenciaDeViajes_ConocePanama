// Función que elimina el mensaje de error despues de 3 segundos
window.onload = function () {
    const alerta = document.querySelector('.alerta');

    if (alerta) {
        setTimeout(() => {
            alerta.remove();
        }, 3000);
    }


}

// Temporizador de session
document.getElementById('wrapper') && cerrarSession();

// Elementos del DOM
const contenido = document.getElementById('page-inner');
const contenidoInmutable = contenido.innerHTML;
const contenedorUsuarios = document.getElementById('contenedor_usuarios').innerHTML;
const contenedorDestinos = document.getElementById('contenedor_destinos').innerHTML;
const contenedorReservas = document.getElementById('contenedor_reservas').innerHTML;
const contenedorPaquetes = document.getElementById('contenedor_paquetes').innerHTML;
const contenedorGuias = document.getElementById('contenedor_guias').innerHTML;
const contenedorNuevaTabla = document.getElementById('contenedor_nueva_tabla').innerHTML;


// Logo
document.getElementById('logo').addEventListener('click', function () {
    contenido.innerHTML = contenidoInmutable;
});

document.getElementById('logo_img').addEventListener('click', function () {
    contenido.innerHTML = contenidoInmutable;
});

// Area de usuarios
document.getElementById('usuarios').addEventListener('click', function () {
    contenido.innerHTML = contenedorUsuarios;
});

// Area de destinos
document.getElementById('destinos').addEventListener('click', function () {
    contenido.innerHTML = contenedorDestinos;
});

// Area de reservas
document.getElementById('reservas').addEventListener('click', function () {
    contenido.innerHTML = contenedorReservas;
});

// Area de paquetes
document.getElementById('paquetes').addEventListener('click', function () {
    contenido.innerHTML = contenedorPaquetes;
});

// Area de guias
document.getElementById('guias').addEventListener('click', function () {
    contenido.innerHTML = contenedorGuias;
});

// Area de crear nueva tabla
document.getElementById('nuevaTabla').addEventListener('click', function () {
    contenido.innerHTML = contenedorNuevaTabla;

    document.getElementById('agregarCampos').addEventListener('click', function () {
        const formulario = document.getElementById('formNuevaTabla');

        const divCampo = document.createElement('div');
        divCampo.className = 'row';
        divCampo.innerHTML = `
            <div class="form-group col-md-4">
                <label for="campos_tabla">Nombre del campo</label>
                <input type="text" class="form-control" id="tipo_campo" name="tipo_campo" placeholder="Tipo de campo">
            </div>

            <div class="form-group col-md-3">
                <label for="tipo_dato">Tipo de dato</label><br>
                <select name="tipo_dato" class="custom-select px-5" required="required">
                    <option value="varchar">varchar</option>
                    <option value="int">int</option>
                    <option value="float">float</option>
                    <option value="date">date</option>
                    <option value="datetime">text</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="tipo_dato">Tamaño de dato</label>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="tamaño_dato" name="tamaño_dato" placeholder="1">
                </div>
            </div>

            <div class="form-group col-md-1 text-center">
                <label for="nullo">Nullo</label>
                <input type="checkbox" class="form-control" id="nullo" name="nullo" value="1">
            </div>
        `;

        formulario.appendChild(divCampo);
    });
});


// Funciones

// Funcion que limita el tiempo en que el usuario pueda navegar por la página
function cerrarSession() {
    setTimeout(() => {
        alert('La sesión esta por expirar. Por favor, vuelva a iniciar sesión.');

        setTimeout(() => {
            window.location.href = 'php/exit.php';
        }, 600000);
    }, 558000);

}