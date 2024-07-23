$(document).ready(function() {
    $('#sendMessageButton').click(function(e) {
        e.preventDefault();
        
        const name = $('#name').val();
        const email = $('#email').val();
        const subject = $('#subject').val();
        const message = $('#message').val();

        var datos = new FormData();
        datos.append("name", name);
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
                    alert("Ocurrió un error: " + respuesta);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error("Error en la solicitud AJAX", textStatus, errorThrown);
                alert("Ocurrió un error al enviar el email. Por favor, inténtalo de nuevo más tarde.");
            }
        });
    });
});
