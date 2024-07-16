// Obtener la id del paquete cada vez que cambien el select
document.getElementById('destino').addEventListener('change', function(e) {
    
    let destinoId = this.value;
    document.getElementById('btn_cotizacion').disabled = false;

    fetch('../php/obtener_cantidad_personas.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id_paquete: destinoId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('cantidad_personas').value = data.cantidad_personas;
        } else {
            console.error('Error al obtener el paquete:', data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Obtener fecha de la reserva
document.querySelector('form').addEventListener('submit', function() {
    let spanText = document.getElementById('fechas').textContent;
    document.getElementById('fechaText').value = spanText;
});

// Obtener precio de la reserva
document.getElementById('destino').addEventListener('change', function() {
    let destinoId = this.value;
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../php/obtener_precio.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById('precioDestino').value = this.responseText;
        }
    };
    xhr.send('destino=' + destinoId);
});

// Obtener fecha formateada de la reserva
document.getElementById('destino').addEventListener('change', function() {
    let destinoId = this.value;
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/../php/obtener_fecha.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            let dates = JSON.parse(this.responseText);
            let fecha_inicio = new Date(dates.fecha_inicio);
            let fecha_fin = new Date(dates.fecha_fin);
            let fechaInicioStr = fecha_inicio.getDate() + '/' + (fecha_inicio.getMonth() + 1) + '/' + fecha_inicio.getFullYear();
            let fechaFinStr = fecha_fin.getDate() + '/' + (fecha_fin.getMonth() + 1) + '/' + fecha_fin.getFullYear();
            document.getElementById('fechas').textContent = fechaInicioStr + ' al ' + fechaFinStr;
        }
    };
    xhr.send('destino=' + destinoId);
});
