document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Validar email y contraseña
    if (validateEmail(email) && validatePassword(password)) {
      // Enviar formulario al servidor para la validación del lado del servidor
      // Aquí puedes utilizar AJAX para enviar los datos al servidor
      console.log('Formulario válido, enviar al servidor...');
    } else {
      alert('Por favor, ingrese un email y contraseña válidos.');
    }
  });

  function validateEmail(email) {
    // Validación básica del email
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }

  function validatePassword(password) {
    // Validación básica de la contraseña (al menos 6 caracteres)
    return password.length >= 6;
  }