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
    
    // ventana modal
    document.getElementById('btn-crear-usuario').addEventListener('click', function () {
        document.querySelector('.contenedor-modal').classList.add('modal-show'); // mostrar ventana modal
        document.getElementById('modal-titulo').textContent = "Crear Usuario";
        document.getElementById('btn-guardar-user-modal').value = "Crear Usuario";
        document.querySelector('.campo_password_delete').classList.remove('hidden'); // Mostrar campo password
        document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
            document.querySelector('.contenedor-modal').classList.remove('modal-show'); // cerrar ventana modal
        });

    });
    
    const alerta = document.querySelector('.alerta');
    if (alerta) {
        setTimeout(() => {
            alerta.remove();
        }, 3000);
    }

    // Evento para editar usuario
    document.querySelectorAll('.btn-editar').forEach(function (btnEditar) {
        btnEditar.addEventListener('click', function () {
            const id = this.id; // Identificador unico del usuario
            const modal = document.querySelector('.contenedor-modal'); 
            document.getElementById('modal-titulo').textContent = "Editar Usuario"; // Titulo de la ventana modal
            document.getElementById('btn-guardar-user-modal').value = "Guardar Usuario"; // Valor del boton guardar
            document.querySelector('.campo_password_delete').classList.add('hidden'); // Ocultar campo password
            modal.classList.add('modal-show'); // mostrar ventana modal
            document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
                document.getElementById('name').value = '';
                document.getElementById('lastname').value = '';
                document.getElementById('phone').value = '';
                document.getElementById('email').value = '';
                modal.classList.remove('modal-show'); // cerrar ventana modal
            });

            // Rellenado el formulario con los datos del usuario
            rellenarFormulario(id);
        });
    });
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

    // Evento para agregar campos a la tabla
    document.getElementById('agregarCampos').addEventListener('click', function () {
        const formulario = document.getElementById('formNuevaTabla'); // Formulario de creación de tabla

        const divCampo = document.createElement('div'); // Elemento que contiene los campos de la tabla
        divCampo.className = 'row';
        divCampo.innerHTML = `
            <div class="form-group col-md-4">
                <label for="nombre_campo">Nombre del campo</label>
                <input type="text" class="form-control" id="nombre_campo" name="nombre_campo" placeholder="Nombre del campo" required>
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
                <label for="tamaño_dato">Tamaño de dato</label>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="tamaño_dato" name="tamaño_dato" placeholder="1">
                </div>
            </div>

            <div class="form-group col-md-1 text-center">
                <label for="nullo">Nullo</label>
                <input type="checkbox" class="form-control" id="nullo" name="nullo">
            </div>
        `;

        if ( parseInt(document.getElementById('agregarCantidad').value) > 1) {
            for (let i = 1; i < parseInt(document.getElementById('agregarCantidad').value); i++) {
                formulario.appendChild(divCampo.cloneNode(true)); // Clonar el elemento para agregarlos
            }
        }
            
        formulario.appendChild(divCampo); // Agregar el elemento al formulario
        
    });
});



// Funciones
// Funcion que limita el tiempo en que el usuario pueda navegar por la página
function cerrarSession() {
    setTimeout(() => {
        alert('La sesión esta por expirar. Por favor, vuelva a iniciar sesión.'); // Mensaje de alerta antes de que se cierre la sesión

        setTimeout(() => {
            window.location.href = 'php/exit.php'; // Redireccionar al archivo de salida
        }, 30000); // Tiempo de espera antes de que se cierre la sesión
    }, 558000); 

}

function rellenarFormulario(id) {
    const nombre_user = document.getElementById('nombre_' + id).textContent;
    const telefono = document.getElementById('telefono_' + id).textContent;
    const email = document.getElementById('email_' + id).textContent;
    
    // Desglosar el nombre del usuario
    const nombre = nombre_user.split(' ')[0];
    const apellido = nombre_user.split(' ')[1];

    document.getElementById('name').value = nombre;
    document.getElementById('lastname').value = apellido;
    document.getElementById('phone').value = telefono;
    document.getElementById('email').value = email;
}
