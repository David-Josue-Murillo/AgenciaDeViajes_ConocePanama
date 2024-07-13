window.onload = borrarAlertas();

// Temporizador de session
document.getElementById('wrapper') && cerrarSession();
mostrarModcelCorreo();

// Elementos del DOM
const contenido = document.getElementById('page-inner');
const contenidoInmutable = contenido.innerHTML;
const contenedorUsuarios = document.getElementById('contenedor_usuarios').innerHTML;
const contenedorDestinos = document.getElementById('contenedor_destinos').innerHTML;
const contenedorReservas = document.getElementById('contenedor_reservas').innerHTML;
const contenedorPaquetes = document.getElementById('contenedor_paquetes').innerHTML;
const contenedorGuias = document.getElementById('contenedor_guias').innerHTML;


// Logo
document.getElementById('logo').addEventListener('click', function () {
    contenido.innerHTML = contenidoInmutable;
    
    // Funcion que muestra un modal con los campos para enviar un correo
    mostrarModcelCorreo();
});

// Area de usuarios
document.getElementById('usuarios').addEventListener('click', function () {
    contenido.innerHTML = contenedorUsuarios;
    
    
    // ventana modal para crear usuario
    document.getElementById('btn-crear-usuario').addEventListener('click', function () {
        document.querySelector('.contenedor-modal').classList.add('modal-show'); // mostrar ventana modal
        document.getElementById('modal-titulo').textContent = "Crear Usuario";  // Titulo de la ventana modal
        document.getElementById('btn-guardar-user-modal').value = "Crear Usuario"; // Texto del boton guardar
        document.getElementById('btn-guardar-user-modal').name = "submit_nuevo_usuario"; // Valor del boton guardar
        document.querySelector('.campo_password_delete').classList.remove('hidden'); // Mostrar campo password
        document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
            document.querySelector('.contenedor-modal').classList.remove('modal-show'); // cerrar ventana modal
        });
    });

    
    // Evento para editar usuario
    document.querySelectorAll('.btn-editar').forEach(function (btnEditar) {
        btnEditar.addEventListener('click', function () {
            const id = this.id; // Identificador unico del usuario
            const modal = document.querySelector('.contenedor-modal');
            document.getElementById('id_usuario').value = id;
            document.getElementById('modal-titulo').textContent = "Editar Usuario"; // Titulo de la ventana modal
            document.getElementById('btn-guardar-user-modal').value = "Guardar Usuario"; // Valor del boton guardar
            document.querySelector('.campo_password_delete').classList.add('hidden'); // Ocultar campo password
            document.getElementById('btn-guardar-user-modal').name = "submit_modificar_usuario"; // Valor del boton guardar
            modal.classList.add('modal-show'); // mostrar ventana modal
            document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
                document.getElementById('name').value = '';
                document.getElementById('lastname').value = '';
                document.getElementById('phone').value = '';
                document.getElementById('email').value = '';
                modal.classList.remove('modal-show'); // cerrar ventana modal
            });

        
            // Rellenado el formulario con los datos del usuario
            rellenarFormularioUsuario(id);
        });
    });

    
    // Evento para borrar usuario
    document.querySelectorAll('#btn-borrar-usuario').forEach(function (btnBorrar) {
        btnBorrar.addEventListener('click', function (e) {
            // Pedir confirmacion
            if (confirm('¿Está seguro de borrar este usuario?')) {
                // Redirigir a php
                const id = parseInt(e.target.ariaLabel);
                window.location.href = 'controller/usuario_crud.php?user=' + id;
                
            }
        });
    });

    
    // Borrar advertencias
    const alerta = document.querySelector('.alerta');
    if (alerta) {
        setTimeout(() => {
            alerta.remove();
        }, 3000);
    }

    
    // Evento para crear PDF
    document.getElementById('userPDF').addEventListener('click', function () {
        window.open('doc/user_pdf.php', '_blank');
    });
    

    // Evento para crear EXCEL
    document.getElementById('userEXCEL').addEventListener('click', function () {
        window.open('doc/user_excel.php', '_blank');
    });
});


// Area de destinos
document.getElementById('destinos').addEventListener('click', function () {
    contenido.innerHTML = contenedorDestinos;

    // ventana modal para crear destino
    document.getElementById('btn-crear-destino').addEventListener('click', function () {
        document.querySelector('.contenedor-modal').classList.add('modal-show'); // mostrar ventana modal
        document.getElementById('modal-titulo').textContent = "Crear Destino";  // Titulo de la ventana modal
        document.getElementById('btn-guardar-destino-modal').value = "Crear Destino"; // Valor del boton guardar
        document.getElementById('btn-guardar-destino-modal').name = "submit_nuevo_destino"; // Valor del boton guardar
        document.querySelector('.campo_password_delete').classList.remove('hidden'); // Mostrar campo password
        document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
            document.querySelector('.contenedor-modal').classList.remove('modal-show'); // cerrar ventana modal
        });
    });

    // Evento para editar destino
    document.querySelectorAll('.btn-editar').forEach(function (btnEditar) {
        btnEditar.addEventListener('click', function () {
            const id = this.id; // Identificador unico del destino
            const modal = document.querySelector('.contenedor-modal');
            document.getElementById('id_destino').value = id;
            document.getElementById('modal-titulo').textContent = "Editar Destino"; // Titulo de la ventana modal
            document.getElementById('btn-guardar-destino-modal').value = "Guardar Destino"; // Valor del boton guardar
            document.getElementById('btn-guardar-destino-modal').name = "submit_modificar_destino"; // Valor del boton guardar
            modal.classList.add('modal-show'); // mostrar ventana modal
            document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
                document.getElementById('destino').value = '';
                document.getElementById('direccion').value = '';
                document.getElementById('descripcion').value = '';
                modal.classList.remove('modal-show'); // cerrar ventana modal
            });

            // Rellenar el formulario con los datos del destino
            rellenarFormularioDestino(id);
        });
    });

    // Evento para borrar destino
    document.querySelectorAll('#btn-borrar-destino').forEach(function (btnBorrar) {
        btnBorrar.addEventListener('click', function (e) {
            // Pedir confirmacion
            if (confirm('¿Está seguro de borrar este destino?')) {
                // Redirigir a php
                const id = parseInt(e.target.ariaLabel);
                window.location.href = 'controller/destino_crud.php?destino=' + id;
                
            }
        });
    });

    // Eliminar alertas
    borrarAlertas();
});

// Area de paquetes
document.getElementById('paquetes').addEventListener('click', function () {
    contenido.innerHTML = contenedorPaquetes;

    // ventana modal para crear paquete
    document.getElementById('btn-crear-paquete').addEventListener('click', function () {
        document.querySelector('.contenedor-modal').classList.add('modal-show'); // mostrar ventana modal
        document.getElementById('modal-titulo').textContent = "Crear Paquete";  // Titulo de la ventana modal
        document.getElementById('btn-guardar-paquete-modal').value = "Crear Paquete"; // Valor del boton guardar
        document.getElementById('btn-guardar-paquete-modal').name = "submit_nuevo_paquete"; // Valor del boton guardar
        document.querySelector('.campo_password_delete').classList.remove('hidden'); // Mostrar campo password
        document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
            document.querySelector('.contenedor-modal').classList.remove('modal-show'); // cerrar ventana modal
        });
    });

    // Evento para editar paquete
    document.querySelectorAll('.btn-editar').forEach(function (btnEditar) {
        btnEditar.addEventListener('click', function () {
            const id = this.id; // Identificador unico del destino
            const modal = document.querySelector('.contenedor-modal');
            document.getElementById('idPaquete').value = id;
            document.getElementById('modal-titulo').textContent = "Editar Paquete"; // Titulo de la ventana modal
            document.getElementById('btn-guardar-paquete-modal').value = "Guardar Paquete"; // Valor del boton guardar
            document.getElementById('btn-guardar-paquete-modal').name = "submit_modificar_paquete"; // Valor del boton guardar
            modal.classList.add('modal-show'); // mostrar ventana modal
            
            // Vaciar campos al cerrar el modal
            document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
                document.getElementById('paquete').value = '';
                document.getElementById('fechaInicio').value = '';
                document.getElementById('fechaFin').value = '';
                document.getElementById('descripcion').value = '';
                document.getElementById('cant_personas').value = '';
                document.getElementById('precio').value = '';
                modal.classList.remove('modal-show'); // cerrar ventana modal
            });

            // Rellenar el formulario con los datos del destino
            rellenarFormularioPaquete(id);
        });
    });

    // Evento para borrar paquete
    document.querySelectorAll('#btn-borrar-paquete').forEach(function (btnBorrar) {
        btnBorrar.addEventListener('click', function (e) {
            // Pedir confirmacion
            if (confirm('¿Está seguro de borrar este paquete?')) {
                // Redirigir a php
                const id = parseInt(e.target.ariaLabel);
                window.location.href = 'controller/paquete_crud.php?paquete=' + id;
                
            }
        });
    });

    // Eliminar alertas
    borrarAlertas();
});


// Area de reservas 
document.getElementById('reservas').addEventListener('click', function () {
    contenido.innerHTML = contenedorReservas;

    // ventana modal para crear reserva
    document.getElementById('btn-crear-reserva').addEventListener('click', function () {
        document.querySelector('.contenedor-modal').classList.add('modal-show'); // mostrar ventana modal
        document.getElementById('modal-titulo').textContent = "Crear Reserva";  // Titulo de la ventana modal
        document.getElementById('btn-guardar-reserva-modal').value = "Crear Reserva"; // Valor del boton guardar
        document.getElementById('btn-guardar-reserva-modal').name = "submit_nueva_reserva"; // Valor del boton guardar
        document.querySelector('.campo_password_delete').classList.remove('hidden'); // Mostrar campo password
        document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
            document.querySelector('.contenedor-modal').classList.remove('modal-show'); // cerrar ventana modal
        });
    });

    // Evento para editar reserva
    document.querySelectorAll('.btn-editar').forEach(function (btnEditar) {
        btnEditar.addEventListener('click', function () {
            const id = this.id; // Identificador unico del destino
            const modal = document.querySelector('.contenedor-modal');
            document.getElementById('idReserva').value = id;
            document.getElementById('modal-titulo').textContent = "Editar Reserva"; // Titulo de la ventana modal
            document.getElementById('btn-guardar-reserva-modal').value = "Guardar Reserva"; // Valor del boton guardar
            document.getElementById('btn-guardar-reserva-modal').name = "submit_modificar_reserva"; // Valor del boton guardar
            modal.classList.add('modal-show'); // mostrar ventana modal
            
            // Vaciar campos al cerrar el modal
            document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
                document.getElementById('fechaReserva').value = '';
                document.getElementById('estado').value = '';
                modal.classList.remove('modal-show'); // cerrar ventana modal
            });

            // Rellenar el formulario con los datos del destino
            rellenarFormularioReserva(id);
        });
    });

    // Evento para borrar reserva
    document.querySelectorAll('#btn-borrar-reserva').forEach(function (btnBorrar) {
        btnBorrar.addEventListener('click', function (e) {
            // Pedir confirmacion
            if (confirm('¿Está seguro de borrar esta reserva?')) {
                // Redirigir a php
                const id = parseInt(e.target.ariaLabel);
                window.location.href = 'controller/reserva_crud.php?id=' + id;
                
            }
        });
    });
});


// Area de guias
document.getElementById('guias').addEventListener('click', function () {
    contenido.innerHTML = contenedorGuias;
   
    // Ventana modal para crear guia
    document.getElementById('btn-crear-guia').addEventListener('click', function () {
        document.querySelector('.contenedor-modal').classList.add('modal-show'); // mostrar ventana modal
        document.getElementById('modal-titulo').textContent = "Crear Guia";  // Titulo de la ventana modal
        document.getElementById('btn-guardar-guia-modal').value = "Crear Guia"; // Valor del boton guardar
        document.getElementById('btn-guardar-guia-modal').name = "submit_nuevo_guia"; // Valor del boton guardar
        document.querySelector('.campo_password_delete').classList.remove('hidden'); // Mostrar campo password
        document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
            document.querySelector('.contenedor-modal').classList.remove('modal-show'); // cerrar ventana modal
        });
    });

    // Evento para editar guia
    document.querySelectorAll('.btn-editar').forEach(function (btnEditar) {
        btnEditar.addEventListener('click', function () {
            const id = this.id; // Identificador unico del destino
            const modal = document.querySelector('.contenedor-modal');
            document.getElementById('idGuia').value = id;
            document.getElementById('modal-titulo').textContent = "Editar Guia"; // Titulo de la ventana modal
            document.getElementById('btn-guardar-guia-modal').value = "Guardar Guia"; // Valor del boton guardar
            document.getElementById('btn-guardar-guia-modal').name = "submit_modificar_guia"; // Valor del boton guardar
            modal.classList.add('modal-show'); // mostrar ventana modal
            
            // Vaciar campos al cerrar el modal
            document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
                document.getElementById('nombreGuia').value = '';
                document.getElementById('urlPerfil').value = '';
                modal.classList.remove('modal-show'); // cerrar ventana modal
            });

            // Rellenar el formulario con los datos del destino
            rellenarFormularioGuia(id);
        });
    });

    // Eliminar Guia
    document.querySelectorAll('#btn-borrar-guia').forEach(function (btnBorrar) {
        btnBorrar.addEventListener('click', function (e) {
            // Pedir confirmacion
            if (confirm('¿Está seguro de borrar esta guia?')) {
                // Redirigir a php
                const id = parseInt(e.target.ariaLabel);
                window.location.href = 'controller/guia_crud.php?id=' + id;
                
            }
        });
    });
});


// Funciones
// Eliminar Alertas
function borrarAlertas() {
    if (document.querySelector('.alerta')) {
        setTimeout(() => {
            document.querySelector('.alerta').remove();
        }, 3000);
    } 
}

// Funcion que limita el tiempo en que el usuario pueda navegar por la página
function cerrarSession() {
    setTimeout(() => {
        alert('La sesión esta por expirar. Por favor, vuelva a iniciar sesión.'); // Mensaje de alerta antes de que se cierre la sesión

        setTimeout(() => {
            window.location.href = '../php/exit.php'; // Redireccionar al archivo de salida
        }, 15000); // Tiempo de espera antes de que se cierre la sesión
    }, 558000); 
}

// Funcion que muestra un modal con los campos para enviar un correo
function mostrarModcelCorreo() {
    document.getElementById('iconMail').addEventListener('click', function () {
        // Crear elemento modal
        document.querySelector('.contenedor-modal').classList.add('modal-show'); // mostrar ventana modal
        document.getElementById('modal-titulo').textContent = "Mensaje nuevo";  // Titulo de la ventana modal
        document.getElementById('btn-enviar_email').value = "Enviar Email"; // Valor del boton guardar
        document.querySelector('.campo_password_delete').classList.remove('hidden'); // Mostrar campo password
        document.getElementById('btn-cerrar-modal').addEventListener('click', function () {
            document.querySelector('.contenedor-modal').classList.remove('modal-show'); // cerrar ventana modal
        });
    });
}

function rellenarFormularioUsuario(id) {
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

function rellenarFormularioDestino(id) {
    const nombre_destino = document.getElementById('destino_' + id).textContent;
    const direccion = document.getElementById('direccion_' + id).textContent;
    const descripcion = document.getElementById('descripcion_' + id).textContent;
    const url_imagen = document.getElementById('url_imagen_' + id).textContent;

    document.getElementById('destino').value = nombre_destino;
    document.getElementById('direccion').value = direccion;
    document.getElementById('descripcion').value = descripcion;
    document.getElementById('img-url').value = url_imagen;
}

function rellenarFormularioPaquete(id) {
    const nombre_paquete = document.getElementById('nombre_paquete_' + id).textContent;
    const fecha_inicio = document.getElementById('fecha_inicio_' + id).textContent;
    const fecha_fin = document.getElementById('fecha_fin_' + id).textContent;
    const descripcion = document.getElementById('descripcion_' + id).textContent;
    const cant_personas = document.getElementById('cant_personas_' + id).textContent;
    const precio = document.getElementById('precio_' + id).textContent;

    document.getElementById('paquete').value = nombre_paquete;
    document.getElementById('fechaInicio').value = fecha_inicio;
    document.getElementById('fechaFin').value = fecha_fin;
    document.getElementById('descripcion').value = descripcion;
    document.getElementById('cant_personas').value = cant_personas;
    document.getElementById('precio').value = precio;
}

function rellenarFormularioReserva(id) {
    const fecha_reserva = document.getElementById('fechaReserva_' + id).textContent;

    document.getElementById('fechaReserva').value = fecha_reserva;
}

function rellenarFormularioGuia(id) {
    const nombre_guia = document.getElementById('nombre_guia_' + id).textContent;
    const url_perfil = document.getElementById('url_perfil_' + id).textContent;

    document.getElementById('nombreGuia').value = nombre_guia;
    document.getElementById('urlPerfil').value = url_perfil;
}
