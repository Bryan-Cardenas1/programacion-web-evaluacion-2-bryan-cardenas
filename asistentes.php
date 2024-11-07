<?php
$host = 'localhost';  
$dbname = 'registro_evento_cardenas'; 
$username = 'root'; 
$password = '';  

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Error al conectar: " . mysqli_connect_error());
}

$query = "SELECT * FROM asistentes";  
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Asistentes</title>
  <link rel="stylesheet" href="asistentes.css">
</head>
<body>

<div class="container">
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='card'>";
            echo "<h3>" . htmlspecialchars($row['nombre']) . "</h3>";
            echo "<p><strong>RUT:</strong> " . htmlspecialchars($row['rut']) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
            echo "<p><strong>Teléfono:</strong> " . htmlspecialchars($row['telefono']) . "</p>";
            echo "<hr>";
            echo "<p><strong>ID:</strong> " . htmlspecialchars($row['id']) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No se encontraron resultados.</p>";
    }

    mysqli_close($conn);
    ?>
</div>

</body>
</html>
