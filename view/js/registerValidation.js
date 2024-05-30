document.getElementById('registerForm').addEventListener('submit', function(event) {
    // Selecciona el formulario con el ID 'registerForm' y agrega un event listener que ejecuta una función cuando el formulario se envía

    var usuario = document.getElementById('usuario').value;
    // Obtiene el valor del campo de texto con el ID 'usuario'

    var password = document.getElementById('password').value;
    // Obtiene el valor del campo de texto con el ID 'password'

    var correo = document.getElementById('CORREO').value;
    // Obtiene el valor del campo de texto con el ID 'CORREO'

    var edad = document.getElementById('EDAD').value;
    // Obtiene el valor del campo de texto con el ID 'EDAD'

    var ocupacion = document.getElementById('OCUPACION').value;
    // Obtiene el valor del campo de texto con el ID 'OCUPACION'

    var contacto = document.getElementById('CONTACTO').value;
    // Obtiene el valor del campo de texto con el ID 'CONTACTO'

    if (usuario === "" || password === "" || correo === "" || edad === "" || ocupacion === "" || contacto === "") {
        // Comprueba si alguno de los campos está vacío

        alert("Todos los campos son obligatorios");
        // Muestra una alerta pidiendo al usuario que complete todos los campos

        event.preventDefault();
        // Previene el envío del formulario si alguno de los campos está vacío
    }

    if (!/^\S+@\S+\.\S+$/.test(correo)) {
        // Comprueba si el correo electrónico es válido utilizando una expresión regular

        alert("Por favor, introduce un correo electrónico válido");
        // Muestra una alerta pidiendo al usuario que introduzca un correo electrónico válido

        event.preventDefault();
        // Previene el envío del formulario si el correo electrónico no es válido
    }

    if (isNaN(edad) || edad < 1 || edad > 120) {
        // Comprueba si la edad es un número válido y está en el rango de 1 a 120

        alert("Por favor, introduce una edad válida");
        // Muestra una alerta pidiendo al usuario que introduzca una edad válida

        event.preventDefault();
        // Previene el envío del formulario si la edad no es válida
    }
});

