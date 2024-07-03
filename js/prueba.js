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