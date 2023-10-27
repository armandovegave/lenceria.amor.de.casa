document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita el envío del formulario
  
    // Obtén los valores de los campos
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var message = document.getElementById('message').value;
  
    // Aquí puedes realizar acciones con los valores del formulario, como enviarlos a un servidor
  
    // Por ejemplo, muestra una alerta con los valores del formulario
    alert('Nombre: ' + name + '\nCorreo electrónico: ' + email + '\nContacto: ' + contact + '\nMensaje: ' + message);
  
    // Restablece el formulario
    document.getElementById('contact-form').reset();
  });
  