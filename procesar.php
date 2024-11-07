<?php
   require_once('phpqrcode/qrlib.php');

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name=$_POST["name"];
      $rut=$_POST["rut"];
      $email=$_POST["email"];
      $phone=$_POST["phone"];

      

      


      /* //$imageName = $_FILES['image']['name']; 
      $imageTmpPath = $_FILES['image']['tmp_name'];
   
      $text = "Name: $name\nRUT: $rut\nEmail: $email\nPhone: $phone";

      // Nombre del archivo para guardar el QR
      $filename = 'qrcode_.png';

      // Generar el código QR
      QRcode::png($text);

      /*$servername = "localhost";
      $username = "username";
      $password = "password";

      
      $conn = mysqli_connect($servername, $username, $password);

      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";

      */ 
      }
  
?>

