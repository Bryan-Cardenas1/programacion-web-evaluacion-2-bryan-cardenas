<?php
include("phpqrcode/qrlib.php");
include("conexion.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $name=$_POST["name"];
   $rut=$_POST["rut"];
   $email=$_POST["email"];
   $phone=$_POST["phone"];
   $directorio = "imagenes/";
   $nombre_imagen = basename($_FILES['image']['name']);
   $ruta_imagen = $directorio . $nombre_imagen;


if (move_uploaded_file($_FILES['image']['tmp_name'], $ruta_imagen)) {
   
   $sql = "INSERT INTO asistentes (nombre, rut, email, telefono, imagen) 
           VALUES ('$name', '$rut', '$email', '$phone', '$ruta_imagen')";

   if (mysqli_query($conn, $sql)) {
       $asistente_id = mysqli_insert_id($conn);

       $url = "localhost/ver_asistente.php?id=" . $asistente_id;

       $qr_image_path = $directorio . "qr_" . $asistente_id . ".png";

       QRcode::png($url, $qr_image_path);

       $sql_update = "UPDATE asistentes SET codigo_qr='$qr_image_path' WHERE id='$asistente_id'";
       if (mysqli_query($conn, $sql_update)) {
           echo "Registro exitoso. <a href='ver_asistente.php?id=$asistente_id'>Ver tarjeta virtual del asistente</a>";
       } else {
           echo "Error al guardar la ruta del código QR: " . mysqli_error($conn);
       }
   } else {
       echo "Error: ". mysqli_error($conn);
   }
} else {
   echo "Error al subir la imagen.";
}
}

mysqli_close($conn);
?>




