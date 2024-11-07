<?php

$host = 'localhost';  
$dbname = 'registro_evento_cardenas'; 
$username = 'root'; 
$password = '';  


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("error al conectar" . mysqli_connect_error());
}


$query = "SELECT * FROM asistentes";  


$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
  
    while ($row = mysqli_fetch_assoc($result)) {
       
        echo "ID: " . $row['id'] . "<br>";
        echo "Nombre: " . $row['name'] . "<br>";
        echo "Rut: " . $row['rut'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Telefono: " . $row['phone'] . "<br>";
        echo "<hr>";  
    }
} else {
    echo "No se encontraron resultados.";
}


mysqli_close($conn);

?>
