$('#sendMessageButton').click(function(e) {
    e.preventDefault();
    const name = $('#name').val();
    const email = $('#email').val();
    const subject = $('#subject').val();
    const message = $('#message').val();

    var datos = new FormData();
    datos.append('name', name);
    datos.append("email", email);
    datos.append("subject", subject);
    datos.append("message", message);

    $.ajax({
        url: "../email/procesar.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            console.log("respuesta", respuesta);
            if (respuesta === "ok") {
                alert("Email enviado");
                
                // Resetea el formulario
                $("#name").val("");
                $("#email").val("");
                $("#subject").val("");
                $("#message").val("");
            } else {
                alert("Ocurrio un error" + respuesta);
            }
        }
    });
});


