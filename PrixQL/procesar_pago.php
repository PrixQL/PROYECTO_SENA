<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="procesar_pago.php">
        <?php
        session_start();

        if (isset($_POST['pagar'])) {
            // Procesa el pago aquí (puede ser una pasarela de pago real o simulada).

            // Recupera los datos del carrito de la sesión.
            $carrito = $_SESSION['carrito'];
            $total = 0;

            // Calcula el total de la compra.
            foreach ($carrito as $item) {
                $total += $item['precio'];
            }

            // Muestra un aviso de compra.
            echo "<h2>Compra Realizada</h2>";
            echo "<p>Productos comprados:</p>";
            echo "<ul>";
            foreach ($carrito as $item) {
                echo "<li>{$item['producto']} - $" . number_format($item['precio'], 2) . "</li>";
            }
            echo "</ul>";
            echo "<p>Total de la compra: $" . number_format($total, 2) . "</p>";

            // Limpia el carrito de compras.
            $_SESSION['carrito'] = array();
        } else {
            header("Location: carrito.php"); // Redirige de nuevo al carrito si no se hizo clic en "Pagar".
        }
        ?>
        Seleccione el método de pago:
        <select name="metodo_pago">
            <option value="tarjeta">Tarjeta de Crédito</option>
            <option value="tarjeta">Nequi</option>
            <option value="tarjeta">Tarjeta de Crédito</option>
            <option value="efectivo">Efectivo</option>
        </select>
        <input type="submit" name="pagar" value="Pagar">
    </form>
</body>
</html>
