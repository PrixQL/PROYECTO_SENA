<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactanos.css">
    <title>Contacto</title>
</head>
<body>
    <div class="container">
        <center><h1>Contactanos</h1></center>
        <form action="contacto.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <input type="submit" value="Enviar">
        </form>

        <div class="info">
           <center><h2>Información de contacto</h2></center> 
            <p>Teléfono: +57 314-6020060</p>
            <p>Correo Electrónico: PrixQL.com</p>
            <p>Dirección: Calle 63 sur N 07 21, Bogota, Colombia</p>
        </div>
     </div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Aquí podrías procesar los datos, enviar correos, almacenar en una base de datos, etc.
    // En este ejemplo, simplemente mostramos los datos en la página.

    echo "<h2>¡Gracias por contactarnos, $nombre!</h2>";
    echo "<p>Hemos recibido tu mensaje:</p>";
    echo "<p><strong>Correo Electrónico:</strong> $email</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
}
?>

</body>
</html>
