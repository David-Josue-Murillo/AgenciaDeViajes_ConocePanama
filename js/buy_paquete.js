document.querySelectorAll('.btn_comprar_paquete').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        const id = this.value; // Identificador unico del paquete
        const id_paquete = this.accessKey; // Identificador unico del paquete   
        const id_usuario = document.getElementById('id_usuario_unique').accessKey;
        showDatosVenta(id, id_paquete, id_usuario); // Mostrar los datos de la compra

        // Obtener datos del formulario
        const paquete = document.getElementById('paquete').value;
        const descripcion = document.getElementById('descripcion').value;
        const precio = document.getElementById('precios').value;


        // Mostrar ventana modal de pago
        $('#paqueteModal').modal('show');

        //Obtener el metodo de pago
        document.querySelectorAll('input[name="metodo_pago"]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const metodo_pago = this.value;

                document.getElementById('btn_pagar').classList.remove('disabled');
            });
        });


        // Cerrar ventana modal de pago
        document.querySelector('.btn-secondary').addEventListener('click', function () {
            $('#paqueteModal').modal('hide');
        });

        document.querySelector('.close').addEventListener('click', function () {
            $('#paqueteModal').modal('hide');
        });

    });
});

document.querySelectorAll('.btn_login').forEach(function (btn) {
    btn.addEventListener('click', function(e) {
        window.location.href = '../pages/login.php';
    });
});

function showDatosVenta(id, id_paq, id_user) {
    // Obtener datos del formulario
    const paquete = document.getElementById('nombre_paquete_' + id).textContent;
    const estadia = document.getElementById('dias_paquete_' + id).textContent;
    const cant_personas = document.getElementById('cant_personas_paquete_' + id).textContent;
    const descripcion = document.getElementById('descripcion_paquete_' + id).textContent;
    const precio = document.getElementById('precio_paquete_' + id).textContent;

    const descrip = "Estadia: " + estadia + "\n" + "Cantidad de Personas: " + cant_personas + "\n" + "Descripción: " + descripcion;

    // Mostrar los datos de la compra 
    document.getElementById('id_usuario_logueado').value = id_user;
    document.getElementById('id_paquete').value = id_paq;
    document.getElementById('paquete').value = paquete;
    document.getElementById('descripcion').innerHTML = descrip;
    document.getElementById('precios').value = precio;
}