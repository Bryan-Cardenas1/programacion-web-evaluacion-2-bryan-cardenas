Evaluación 2.md 2024-11-04
1 / 3
Evaluación 2 - Programación Web
Instrucciones (10 puntos)
Fecha de inicio de la evaluación: 04 de noviembre de 2024 a las 11:00
Fecha de entrega de la evaluación: 06 de noviembre de 2024 a las 23:59
Evaluación individual.
Las evaluaciones entregadas fuera del plazo, serán calificadas con la nota mínima (1.0).
La evaluación debe ser entregada mediante un correo electrónico al correo ezequiel.lagos@upla.cl,
con el asunto Evaluación 2 - Programación Web - Nombre y Apellido.
En el correo de entrega debe incluir el enlace al repositorio de GitHub donde se encuentra la evaluación.
Este debe ser un repositorio público.
En el repositorio debe incluir el archivo sql con la estructura de la base de datos y los datos de prueba.
Debe llamarse database.sql.
Crear un sistema utilizando PHP y MySQL que sirva para registrar asistentes a un evento. Cada asistente
registrado obtendrá una tarjeta virtual que incluye un código QR, el cual permite consultar sus datos al
escanearse.
Debe crear un formulario de registro y una página para visualizar la tarjeta virtual del asistente, puede utilizar
Bootstrap para el diseño de las páginas. Pero debe aplicar diseño a ambas páginas, tanto como el formulario y la
tarjeta virtual deben quedar centrados (horizontal y verticalmente) en la pantalla, no quiere decir que el texto
debe estar centrado, sino que los elementos. No puede utilizar la etiqueta <center>.
Cree un repositorio en GitHub para el proyecto, debe ser público y el nombre del repositorio debe ser
programacion-web-evaluacion-2-nombre-apellido.
1. Configuración de la Base de Datos (MySQL) (20 puntos)
Crear una base de datos en MySQL (utilice PHPMyAdmin) de nombre registro_evento_apellido, donde
apellido es su apellido paterno en minúsculas (ejemplo registro_evento_lagos ). Cree una única tabla
llamada asistentes. Esta tabla contendrá la información básica de cada asistente al evento.
Estructura de la Tabla asistentes:
id: Identificador único del asistente (clave primaria, entero, autoincremental).
nombre: Nombre completo del asistente (varchar).
rut: Número de identificación o RUT (varchar).
email: Correo electrónico (varchar).
telefono: Número de contacto (varchar).
imagen: URL de la imagen del asistente (varchar o text).
codigo_qr: URL del código QR generado (varchar o text).
fecha_registro: Fecha y hora de registro del asistente (timestamp).
Evaluación 2.md 2024-11-04
2 / 3
2. Creación del Formulario de Registro de Asistentes (10 puntos)
Desarrollar un formulario en PHP, para que los asistentes puedan registrarse. El formulario debe incluir los
siguientes campos:
Nombre completo
RUT
Email
Teléfono
Imagen
Requisitos del Formulario:
Al enviar el formulario, guardar los datos del asistente en la tabla asistentes en la base de datos.
La imagen del asistente debe ser subida al servidor y guardada en una carpeta llamada imagenes dentro
de la raíz del proyecto (es decir, en la misma ubicación donde se encuentra index.php).
3. Generar código QR (20 puntos)
Después de que un asistente complete el registro, generar un código QR que contenga un enlace único para
consultar sus datos. Este enlace debe ser del tipo ver_asistente.php?id=123, donde id es el identificador
único del asistente en la base de datos.
1. Usar una librería de generación de códigos QR.
2. Guardar la URL del código QR en la columna codigo_qr de la tabla asistentes.
3. Mostrar un mensaje de éxito y un enlace que permita ver la tarjeta virtual del asistente.
4. Tarjeta Virtual del Asistente (20 puntos)
Crear una página llamada ver_asistente.php que muestre la información de un asistente específico en una
tarjeta virtual.
1. La página debe obtener el id del asistente de la URL (ver_asistente.php?id=123).
2. Realizar una consulta a la tabla asistentes para obtener la información completa del asistente.
3. Mostrar los datos del asistente, incluyendo su nombre, RUT, email, teléfono y el código QR.
4. Puede usar alguno de los siguientes enlaces como referencia para generar el ticket:
1. Ejemplo 1
2. Ejemplo 2
3. Ejemplo 3
Formato de la Tarjeta Virtual:
Colocar la información personal (nombre, RUT, email, teléfono) de manera organizada.
Mostrar el código QR generado, que puede ser escaneado para verificar la información del asistente.
Recuerde incluir la imagen del asistente en la tarjeta virtual.
5. Tabla de Asistentes Registrados (10 puntos)
Evaluación 2.md 2024-11-04
3 / 3
Crear una página adicional llamada asistentes.php que muestre una tabla con todos los asistentes registrados
en el evento. La tabla debe incluir las siguientes columnas:
1. Nombre
2. RUT
3. Email
4. Teléfono
5. Fecha de Registro
6. Link para ver la tarjeta virtual del asistente.