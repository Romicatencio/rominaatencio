document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('message').value.trim();

    if (name === 'name' || email === 'email' || message === 'message') {
        alert('Por favor, complete todos los campos del formulario.');
        return;
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('romicatencio@gmail.com');
        return;
    }

    // Si pasa la validación, envía el formulario
    this.submit();
});
    