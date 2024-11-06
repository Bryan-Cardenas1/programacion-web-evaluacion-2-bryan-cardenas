<?php
   if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $name=$_GET["name"];
    $rut=$_GET["rut"];
    $email=$_GET["email"];
    $phone=$_GET["phone"];
    $image=$_FILES["image"];
    $text = "Name: $name\nRUT: $rut\nEmail: $email\nPhone: $phone\nImagen: $imagePath";
    QRcode::png($text, 'filename.png');

    $servername = "localhost";
    $username = "username";
    $password = "password";

    
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

   }

  
?>

