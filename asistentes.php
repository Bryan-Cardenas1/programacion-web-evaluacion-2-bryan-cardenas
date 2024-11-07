<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';  // o la IP del servidor de base de datos
$dbname = 'registro_evento_cardenas';  // Nombre de tu base de datos
$username = 'root';  // Tu usuario de la base de datos
$password = '';  // Tu contraseña de la base de datos

// Crear la conexión
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Definir la consulta SQL para leer los datos
$query = "SELECT * FROM asistentes";  // Suponiendo que la tabla se llama 'usuarios'

// Ejecutar la consulta
$result = mysqli_query($conn, $query);

// Verificar si la consulta devolvió resultados
if (mysqli_num_rows($result) > 0) {
    // Iterar sobre los resultados y mostrarlos
    while ($row = mysqli_fetch_assoc($result)) {
        // Puedes acceder a los valores de cada fila utilizando los nombres de las columnas
        echo "ID: " . $row['id'] . "<br>";
        echo "Nombre: " . $row['name'] . "<br>";
        echo "Rut: " . $row['rut'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Telefono: " . $row['phone'] . "<br>";
        echo "<hr>";  // Separador entre cada registro
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
mysqli_close($conn);
?>
