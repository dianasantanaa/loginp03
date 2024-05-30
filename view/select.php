<?php
// Conexion a la base de datos
//$servername = "localhost";
// Comentario que indica el nombre del servidor donde se encuentra la base de datos

$dbusername = "root";
// Nombre de usuario para acceder a la base de datos

$dbpassword = "";
// Contraseña para acceder a la base de datos

$dbname = "progweb";
// Nombre de la base de datos a la que se quiere conectar

// Crea la conexión
$conn = new mysqli("localhost", $dbusername, $dbpassword, $dbname);
// Crea una nueva conexión a la base de datos utilizando los parámetros proporcionados

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Verifica si hubo un error al intentar conectar a la base de datos. Si lo hay, muestra un mensaje y termina el script

// Consulta para obtener los datos de la tabla "usuario"
$sql = "SELECT * FROM usuario";
// Crea una consulta SQL que selecciona todos los campos de la tabla 'usuario'

$resul = $conn->query($sql);
// Ejecuta la consulta SQL en la base de datos y guarda el resultado en la variable $resul

if ($resul->num_rows > 0) {
    echo '<table>';
    // Si hay filas en el resultado, comienza a crear una tabla HTML
    echo "<tr><th>Usuario</th><th>Password</th><th>ID</th><th>Correo</th><th>Edad</th><th>Ocupación</th><th>Contacto</th></tr>";
    // Crea la fila de encabezado de la tabla con los nombres de las columnas

    while ($row = $resul->fetch_assoc()) {
        echo "<tr><td>" . $row["usuario"] . "</td><td>" . $row["password"]. "</td><td>" . $row["id"]. "</td><td>" . $row["correo"]. "</td><td>" . $row["edad"] . "</td><td>" . $row["ocupacion"]. "</td><td>" . $row["contacto"]. "</td></tr>";
        // Recorre todas las filas del resultado y crea una fila en la tabla HTML para cada una, insertando los datos correspondientes
    }

    echo '</table>';
    // Cierra la tabla HTML
} else {
    echo "no se encontraron registros";
    // Si no hay filas en el resultado, muestra un mensaje indicando que no se encontraron registros
}

$conn->close();
// Cierra la conexión a la base de datos
?>
