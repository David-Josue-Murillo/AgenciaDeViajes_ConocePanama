document.getElementById('destino').addEventListener('change', function() {
    var destinoId = this.value;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../php/obtener_precio.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById('precioDestino').value = this.responseText;
        }
    };
    xhr.send('destino=' + destinoId);
});

document.getElementById('destino').addEventListener('change', function() {
    var destinoId = this.value;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/../php/obtener_fecha.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            var dates = JSON.parse(this.responseText);
            var fecha_inicio = new Date(dates.fecha_inicio);
            var fecha_fin = new Date(dates.fecha_fin);
            var fechaInicioStr = fecha_inicio.getDate() + '/' + (fecha_inicio.getMonth() + 1) + '/' + fecha_inicio.getFullYear();
            var fechaFinStr = fecha_fin.getDate() + '/' + (fecha_fin.getMonth() + 1) + '/' + fecha_fin.getFullYear();
            document.getElementById('fechas').textContent = fechaInicioStr + ' al ' + fechaFinStr;
        }
    };
    xhr.send('destino=' + destinoId);
});
