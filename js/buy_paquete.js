const { log } = require("echarts/types/src/util/log.js");

document.querySelectorAll('.btn_comprar_paquete').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        const id = this.value; // Identificador unico del paquete
        showDatosVenta(id); // Mostrar los datos de la compra

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

function showDatosVenta(id) {
    // Obtener datos del formulario
    const paquete = document.getElementById('nombre_paquete_' + id).textContent;
    const estadia = document.getElementById('dias_paquete_' + id).textContent;
    const cant_personas = document.getElementById('cant_personas_paquete_' + id).textContent;
    const descripcion = document.getElementById('descripcion_paquete_' + id).textContent;
    const precio = document.getElementById('precio_paquete_' + id).textContent;

    const descrip = "Estadia: " + estadia + "\n" + "Cantidad de Personas: " + cant_personas + "\n" + "Descripción: " + descripcion;

    // Mostrar los datos de la compra 
    document.getElementById('paquete').value = paquete;
    document.getElementById('descripcion').innerHTML = descrip;
    document.getElementById('precios').value = precio;
}