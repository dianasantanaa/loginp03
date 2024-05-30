document.getElementById('togglePassword').addEventListener('click', function() {
    // Añade un event listener al botón con el ID 'togglePassword' que ejecuta una función cuando el botón es clicado

    var password = document.getElementById('password');
    // Selecciona el campo de entrada con el ID 'password'

    if (password.type === 'password') {
        // Comprueba si el tipo de entrada del campo de contraseña es 'password'

        password.type = 'text';
        // Si es así, cambia el tipo de entrada a 'text' para mostrar la contraseña

        this.textContent = 'Ocultar Contraseña';
        // Cambia el texto del botón a 'Ocultar Contraseña'
    } else {
        password.type = 'password';
        // Si no, cambia el tipo de entrada a 'password' para ocultar la contraseña

        this.textContent = 'Mostrar Contraseña';
        // Cambia el texto del botón a 'Mostrar Contraseña'
    }
});
