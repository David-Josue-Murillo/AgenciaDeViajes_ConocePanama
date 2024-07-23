document.getElementById('destino').addEventListener('change', function(e) {
    let destinoId = parseInt(this.value);
    document.getElementById('btn_cotizacion').disabled = false;

    // Realizamos las tres solicitudes al mismo tiempo.
    Promise.all([
        fetch('David/php/obtener_cantidad_personas.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ id_paquete: destinoId })
        }).then(response => response.json()),

        fetch('David/php/obtener_precio.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `destino=${destinoId}`
        }).then(response => response.text()),

        fetch('php/obtener_fecha.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `destino=${destinoId}`
        }).then(response => response.json())
    ])
    .then(([cantidadData, precio, fechaData]) => {
        if (cantidadData.success) {
            document.getElementById('cantidad_personas').value = cantidadData.cantidad_personas;
        } else {
            console.error('Error al obtener el paquete:', cantidadData.message);
        }

        document.getElementById('precioDestino').value = precio;

        let fecha_inicio = new Date(fechaData.fecha_inicio);
        let fecha_fin = new Date(fechaData.fecha_fin);
        let fechaInicioStr = `${fecha_inicio.getDate()}/${fecha_inicio.getMonth() + 1}/${fecha_inicio.getFullYear()}`;
        let fechaFinStr = `${fecha_fin.getDate()}/${fecha_fin.getMonth() + 1}/${fecha_fin.getFullYear()}`;
        document.getElementById('fechas').textContent = `${fechaInicioStr} al ${fechaFinStr}`;
    })
    .catch(error => {
        console.error('Error en la solicitud:', error);
    });
});

document.querySelector('form').addEventListener('submit', function() {
    let spanText = document.getElementById('fechas').textContent;
    document.getElementById('fechaText').value = spanText;
});
