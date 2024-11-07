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
        <h5>Registro Asistentes</h5>
        <form action="procesar.php" method="POST" enctype='multipart/form-data'>
            
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Ingrese su Nombre">  
            
            <label for="rut">Rut</label>
            <input type="text" id="rut" name="rut" placeholder="Ingrese su Rut">  

            <label for="email">Apellido</label>
            <input type="email" id="email" name="email"placeholder="Ingrese su Email">  

            <label for="phone">Telefono</label>
            <input type="text" id="phone" name="phone"placeholder="Ingrese su Numero">

            <input type="file" name="image" id="image" required>
            <button type="submit">Enviar</button>

        </form>
        

    </div>

    </section>
  
   
</body>
</html>