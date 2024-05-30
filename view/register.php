<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Comprueba si la solicitud fue enviada usando el método POST

    $usuario = $_POST["usuario"];
    // Recoge el valor del campo 'usuario' enviado por el formulario

    $password = $_POST["password"];
    // Recoge el valor del campo 'password' enviado por el formulario

    $correo = $_POST["CORREO"];
    // Recoge el valor del campo 'CORREO' enviado por el formulario

    $edad = $_POST["EDAD"];
    // Recoge el valor del campo 'EDAD' enviado por el formulario

    $ocupacion = $_POST["OCUPACION"];
    // Recoge el valor del campo 'OCUPACION' enviado por el formulario

    $contacto = $_POST["CONTACTO"];
    // Recoge el valor del campo 'CONTACTO' enviado por el formulario

    $servername = "localhost";
    // Nombre del servidor donde se encuentra la base de datos

    $dbusername = "root";
    // Nombre de usuario para acceder a la base de datos

    $dbpassword = "";
    // Contraseña para acceder a la base de datos

    $dbname = "progweb";
    // Nombre de la base de datos a la que se quiere conectar

    // Crea la conexión
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Crea una nueva conexión a la base de datos utilizando los parámetros proporcionados

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Verifica si hubo un error al intentar conectar a la base de datos. Si lo hay, muestra un mensaje y termina el script

    // Preparar la consulta
    $stmt = $conn->prepare("INSERT INTO usuario (usuario, correo, edad, ocupacion, contacto, password) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    // Prepara una sentencia SQL para insertar los valores en la tabla 'usuario'. Si hay un error, muestra un mensaje y termina el script

    $stmt->bind_param("ssisss", $usuario, $correo, $edad, $ocupacion, $contacto, $password);
    // Vincula los parámetros a la sentencia SQL preparada, especificando los tipos de datos correspondientes

    // Ejecutar la sentencia SQL
    if ($stmt->execute()) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }
    // Ejecuta la sentencia SQL. Si se ejecuta correctamente, muestra un mensaje de éxito; de lo contrario, muestra un mensaje de error

    $stmt->close();
    // Cierra la sentencia preparada

    $conn->close();
    // Cierra la conexión a la base de datos
}
?>
