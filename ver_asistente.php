<?php
include("conexion.php");

// Verificar si el ID está presente en la URL
if (isset($_GET['id'])) {
    $asistente_id = $_GET['id'];

    // Consulta a la base de datos para obtener la información del asistente
    $sql = "SELECT nombre, rut, email, telefono, imagen, codigo_qr FROM asistentes WHERE id = '$asistente_id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $asistente = mysqli_fetch_assoc($result);
    } else {
        echo "Asistente no encontrado.";
        exit;
    }
} else {
    echo "ID no especificado.";
    exit;
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta Virtual del Asistente</title>
    <link rel="stylesheet" href="ver_asistente.css">
</head>
<body>

<div class="card">
    
    <img src="<?php echo $asistente['imagen']; ?>">

    
    <h2>
        <?php echo $asistente['nombre']; ?>
    </h2>

    <p>
        <strong>RUT:</strong> 
        <?php echo $asistente['rut'];?>
        
    </p>

    <p>
        <strong>Email:</strong> 
        <?php echo $asistente['email']; ?>

    </p>

    <p>
        <strong>Teléfono:</strong> 
        <?php echo $asistente['telefono'] ?>
    </p>

   
    <div class="qr-code">
        <img src="<?php echo $asistente['codigo_qr']; ?>">
    </div>
</div>

</body>
</html>
