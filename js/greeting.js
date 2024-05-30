document.addEventListener('DOMContentLoaded', function() {
    // Añade un event listener que ejecuta una función cuando el contenido del documento se ha cargado completamente

    var greeting = document.getElementById('greeting');
    // Selecciona el elemento con el ID 'greeting'

    var now = new Date();
    // Crea un nuevo objeto Date que contiene la fecha y hora actuales

    var hour = now.getHours();
    // Obtiene la hora actual del objeto Date

    if (hour < 12) {
        greeting.textContent = 'Buenos días';
        // Si la hora es menor a 12 (mediodía), establece el texto del elemento 'greeting' a 'Buenos días'
    } else if (hour < 18) {
        greeting.textContent = 'Buenas tardes';
        // Si la hora es menor a 18 (6 PM) pero mayor o igual a 12, establece el texto del elemento 'greeting' a 'Buenas tardes'
    } else {
        greeting.textContent = 'Buenas noches';
        // Si la hora es mayor o igual a 18, establece el texto del elemento 'greeting' a 'Buenas noches'
    }
});
