<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <title>Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <section class="flex-container">
    <div class="form-style">
        <form action="procesar.php" method="get">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name">  
        
        <label for="rut">Rut</label>
        <input type="text" id="rut" name="rut">  

        <label for="email">Apellido</label>
        <input type="email" id="email" name="email">  
        <label for="phone">Telefono</label>
        <input type="text" id="phone" name="phone">
        <input type="file" name="image" id="image">
       <button type="submit">Enviar</button>
    
    </div>

    </section>
  
   
</body>
</html>