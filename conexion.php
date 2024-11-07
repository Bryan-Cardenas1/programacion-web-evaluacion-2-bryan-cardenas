<?php
    $host = 'localhost';  
    $dbname = 'registro_evento_cardenas'; 
    $username = 'root'; 
    $password = '';  


    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
       die("error al conectar" . mysqli_connect_error());
    }


?>