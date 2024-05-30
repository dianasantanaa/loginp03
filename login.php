<?php
 $servername = "localhost";
 // Nombre del servidor donde se encuentra la base de datos

 $dbusername = "root";
 // Nombre de usuario para acceder a la base de datos

 $dbpassword = "";
 // Contraseña para acceder a la base de datos

 $dbname = "progweb";
 // Nombre de la base de datos a la que se quiere conectar

 // Crear la conexión
 $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
 // Crea una nueva conexión a la base de datos utilizando los parámetros proporcionados

 // Verificar la conexión
 if($conn->connect_error){
     die("Connection failed: " . $conn->connect_error);
 }
 // Verifica si hubo un error al intentar conectar a la base de datos. Si lo hay, muestra un mensaje y termina el script

 // Recoger los datos del formulario
 $usuario = $_POST['usuario'];
 // Recoge el valor del campo 'usuario' enviado por el formulario mediante el método POST

 $password = $_POST['password'];
 // Recoge el valor del campo 'password' enviado por el formulario mediante el método POST

 // Crear la consulta SQL
 $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND password = '$password'";
 // Crea una consulta SQL que selecciona todos los campos de la tabla 'usuario' donde el nombre de usuario y la contraseña coinciden con los datos proporcionados

 // Ejecutar consulta
 $resul = $conn->query($sql);
 // Ejecuta la consulta SQL en la base de datos y guarda el resultado en la variable $resul

 // Verificar si el usuario existe
 if($resul->num_rows > 0){
     include ('view/logger.HTML');
     // Si se encuentra al menos un resultado, incluye el archivo 'logger.HTML' para mostrar un mensaje de éxito
 } else {
     include ('view/errorlogin.HTML');
     // Si no se encuentra ningún resultado, incluye el archivo 'errorlogin.HTML' para mostrar un mensaje de error
 }

 $conn->close();
 // Cierra la conexión a la base de datos
?>
