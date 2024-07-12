document.querySelectorAll('.btn_comprar_paquete').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        const id = this.value; // Identificador unico del paquete
        const id_paquete = this.accessKey; // Identificador unico del paquete   
        showDatosVenta(id, id_paquete); // Mostrar los datos de la compra

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

function showDatosVenta(id, id_paquete) {
    // Obtener datos del formulario
    const paquete = document.getElementById('nombre_paquete_' + id).textContent;
    const estadia = document.getElementById('dias_paquete_' + id).textContent;
    const cant_personas = document.getElementById('cant_personas_paquete_' + id).textContent;
    const descripcion = document.getElementById('descripcion_paquete_' + id).textContent;
    const precio = document.getElementById('precio_paquete_' + id).textContent;

    const descrip = "Estadia: " + estadia + "\n" + "Cantidad de Personas: " + cant_personas + "\n" + "Descripción: " + descripcion;

    // Mostrar los datos de la compra 
    document.getElementById('id_paquete').value = id_paquete;
    document.getElementById('paquete').value = paquete;
    document.getElementById('descripcion').innerHTML = descrip;
    document.getElementById('precios').value = precio;
}