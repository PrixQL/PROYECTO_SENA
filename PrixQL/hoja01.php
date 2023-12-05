<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hoja01.css">
    <title>Hoja de Anotación</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Hoja de Anotación</h1>
        </header>

        <section>
            <form action="procesar_anotacion.php" method="post">
                <label for="motivo">Motivo:</label>
                <select name="motivo" id="motivo">
                    <option value="reunión">Reunión</option>
                    <option value="tarea">Tarea</option>
                    <option value="recordatorio">Recordatorio</option>
                    <!-- Agrega más motivos según sea necesario -->
                </select>

                <label for="anotacion">Anotación:</label>
                <textarea name="anotacion" id="anotacion" rows="4"></textarea>

                <button type="submit">Guardar Anotación</button>
            </form>
        </section>
    </div>

</body>
</html>
