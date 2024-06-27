$('#sendMessageButton').click(function() {
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
        url: "/controller/procesar.php",
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

$('#sendEmailSuscribeBtn').click(function() {
    const emailSuscribe = $('#emailSuscribe').val();

    var datosEmail = new FormData();
    datosEmail.append("email", emailSuscribe);

    $.ajax({
        url: "/controller/procesar.php",
        method: "POST",
        data: datosEmail,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            console.log("respuesta", respuesta);
            if (respuesta === "ok") {
                alert("Email enviado");
                
                // Resetea el formulario
                $("#emailSuscribe").val("");
            } else {
                alert("Ocurrio un error" + respuesta);
            }
        }
    });
});

