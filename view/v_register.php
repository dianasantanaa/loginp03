<!DOCTYPE html>
<html lang="en">
<!-- Declara el tipo de documento como HTML5 y establece el idioma como inglés -->
<head>
    <meta charset="UTF-8">
    <!-- Define la codificación de caracteres como UTF-8 -->
    <title>Registro de Usuario</title>
    <!-- Título de la página que aparecerá en la pestaña del navegador -->
    <link rel="stylesheet" href="style.css">
    <!-- Enlaza la hoja de estilos CSS externa -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Preconecta con Google Fonts para optimizar la carga de las fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Permite el uso de fuentes de Google Fonts con CORS (Cross-Origin Resource Sharing) -->
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <!-- Importa la fuente 'Staatliches' desde Google Fonts -->
</head>
<body>
    <!-- Cuerpo del documento -->
    <div class="container">
        <h1>Registrar un Usuario.</h1>
        <!-- Contenedor principal con clase 'container' para estilos específicos -->
        <form method="post" action="register.php">
            <!-- Inicio del formulario con el método POST que envía los datos a 'register.php' -->

            <label for="usuario">Usuario</label><br />
            <!-- Etiqueta para el campo de texto del usuario -->
            <input type="text" id="usuario" name="usuario" required /><br />
            <!-- Campo de texto para ingresar el nombre de usuario, requerido -->

            <label for="password">Contraseña</label><br />
            <!-- Etiqueta para el campo de contraseña -->
            <input type="password" id="password" name="password" required /><br />
            <!-- Campo de texto para ingresar la contraseña, requerido -->

            <label for="correo">Correo del Usuario</label><br />
            <!-- Etiqueta para el campo de correo -->
            <input type="email" id="CORREO" name="CORREO" required /><br />
            <!-- Campo de texto para ingresar el correo electrónico, requerido -->

            <label for="edad">Edad del Usuario</label><br />
            <!-- Etiqueta para el campo de edad -->
            <input type="text" id="EDAD" name="EDAD" required /><br />
            <!-- Campo de texto para ingresar la edad, requerido -->

            <label for="ocupacion">Ocupación del Usuario</label><br />
            <!-- Etiqueta para el campo de ocupación -->
            <input type="text" id="OCUPACION" name="OCUPACION" required /><br />
            <!-- Campo de texto para ingresar la ocupación, requerido -->

            <label for="contacto">Contacto del Usuario</label><br />
            <!-- Etiqueta para el campo de contacto -->
            <input type="text" id="CONTACTO" name="CONTACTO" required /><br />
            <!-- Campo de texto para ingresar el contacto, requerido -->

            <input type="submit" value="Registrar"/>
            <!-- Botón de envío del formulario -->
        </form>
    </div>
    <!-- Contenedor principal termina aquí -->

    <script src="js/togglePassword.js"></script>
    <!-- Enlaza el archivo JavaScript para la funcionalidad de mostrar/ocultar contraseña -->
</body>
</html>
