<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Aqui guardo la info que el usuario lleno en el formulario
    // Es como meter la info en cajitas para usarla después
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
     // Ahora vamos a ver si la persona es mayor de edad
    // Si tiene 18 o mas años, puede ver toda su info
    if ($edad >= 18) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="true.css">
</head>
<body>
    <h1>Bienvenido</h1>
    <!--Es esta parte muestro los datos del usuario mayor de edad-->
    <p>¡Hola <?php echo $nombre; ?>!</p>
    <p>Tu dirección es <?php echo $direccion; ?></p>
    <p>Tienes <?php echo $edad; ?> años y tu correo es <?php echo $correo; ?></p>
</body>
</html>
<?php
    } else { ?>
   <head>
   <link rel="stylesheet" href="true.css    ">
   </head>
       <h1>Eres menor de edad con <?php echo $edad ?></h1>
<?php }
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
    <link rel="stylesheet" href="from.css">
</head>
<body>
    <form method="post" id="formulario">
        <h2>Datos de Usuario</h2>
        <input type="text" name="nombre" placeholder="Nombre y Apellido" required>
        <input type="text" name="direccion" placeholder="Dirección" required>
        <input type="email" name="correo" placeholder="Correo electrónico" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>
<?php } ?>