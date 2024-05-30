document.getElementById('loginForm').addEventListener('submit', function(event) {
    // Selecciona el formulario con el ID 'loginForm' y agrega un event listener que ejecuta una función cuando el formulario se envía

    var usuario = document.getElementById('usuario').value;
    // Obtiene el valor del campo de texto con el ID 'usuario'

    var password = document.getElementById('password').value;
    // Obtiene el valor del campo de texto con el ID 'password'

    if (usuario === "" || password === "") {
        // Comprueba si alguno de los campos está vacío

        alert("Por favor, complete todos los campos.");
        // Muestra una alerta pidiendo al usuario que complete todos los campos

        event.preventDefault();
        // Previene el envío del formulario si alguno de los campos está vacío
    }
});
