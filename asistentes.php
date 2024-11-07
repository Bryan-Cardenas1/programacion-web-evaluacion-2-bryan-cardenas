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
    <h1>Lista de Asistentes</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>RUT</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Fecha de Registro</th>
                <th>Ver Tarjeta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['rut'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    echo "<td>" . $row['fecha_registro'] . "</td>";
                    echo "<td><a href='ver_asistente.php?id=" . $row['id'] . "'>Ver Tarjeta</a></td>";
                    echo "</tr>";
                }
            } else {
                echo " No se encontraron resultados.";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
