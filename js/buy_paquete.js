document.querySelectorAll('.btn_comprar_paquete').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        const id = this.value; // Identificador unico del paquete
        
        console.log(id);
        // Obtener datos del formulario
        /*const paquete = document.getElementById('paquete').value;
        const descripcion = document.getElementById('descripcion').value;
        const precio = document.getElementById('precio').value;
        const metodo_pago = document.querySelector('input[name="metodo_pago"]:checked').value;*/

        // Mostrar ventana modal de pago
        $('#paqueteModal').modal('show');

        // Mostrar los datos de la compra 
        showDatosVenta(id);

        // Enviar datos al servidor
        /*$.ajax({
            url: 'procesar_pago.php',
            method: 'POST',
            data: {
                paquete: paquete,
                descripcion: descripcion,
                precio: precio,
                metodo_pago: metodo_pago
            },
            success: function (response) {
                // Mostrar mensaje de éxito
                alert('¡Pago exitoso!');

                // Ocultar ventana modal de pago
                $('#paqueteModal').modal('hide');
            },
            error: function (xhr, status, error) {
                // Mostrar mensaje de error
                alert('¡Error al procesar el pago!');

                // Ocultar ventana modal de pago
                $('#paqueteModal').modal('hide');
            }
        });*/

        // Cerrar ventana modal de pago
        document.querySelector('.btn-secondary').addEventListener('click', function () {
            $('#paqueteModal').modal('hide');
        });

        document.querySelector('.close').addEventListener('click', function () {
            $('#paqueteModal').modal('hide');
        });

    });
});

function showDatosVenta(id) {
    // Obtener datos del formulario
    const paquete = document.getElementById('nombre_paquete').textContent;
    const estadia = document.getElementById('dias_paquete').textContent;
    const cant_personas = document.getElementById('cant_personas_paquete').textContent;
    const descripcion = document.getElementById('descripcion').textContent;
    const precio = document.getElementById('precio_paquete').textContent;

    // Mostrar los datos de la compra 
    document.getElementById('paquete').innerHTML = paquete;
    document.getElementById('descripcion').innerHTML = descripcion;
    document.getElementById('precio').innerHTML = precio;
    document.querySelector('input[name="metodo_pago"]:checked').value = metodo_pago;
}