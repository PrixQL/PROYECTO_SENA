<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="suma.css">
    <header>
        <section id="logo-compañia">    
            <div class="logo">
                <h2 class="compañia"> PrixQl </h2>
            </div>
        </section>
        <section id="logo-links">
            <nav>
                <a href="Empleados.php" class="nav-link"> inicio </a>
                <a href="suma.php" class="nav-link"> Pedidos </a>
                <a href="" class="nav-link"> hoja de anotacion </a>
            </nav>
        </section>
    </header>
</head>
<body>
<?php
session_start();

// Inicializa el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Agrega un producto al carrito
if (isset($_POST['agregar'])) {
    $producto = $_POST['producto'];
    $precio = floatval($_POST['precio']);
    
    $item = array(
        'producto' => $producto,
        'precio' => $precio
    );
    
    $_SESSION['carrito'][] = $item;
}

// Elimina un producto del carrito
if (isset($_GET['eliminar'])) {
    $indice = $_GET['eliminar'];
    if (isset($_SESSION['carrito'][$indice])) {
        unset($_SESSION['carrito'][$indice]);
    }
}

// Lista de productos de comida rápida
$productos = array(
    'Hamburguesa' => 5.99,
    'Papas Fritas' => 2.99,
    'Refresco' => 1.99,
    // Agrega más productos aquí
);

// Muestra los productos de comida rápida y agrega al carrito
echo '<h2>Menú de Comida Rápida</h2>';
echo '<table>';
echo '<tr><th>Producto</th><th>Precio</th><th>Acciones</th></tr>';

foreach ($productos as $producto => $precio) {
    echo '<tr>';
    echo '<td>' . $producto . '</td>';
    echo '<td>$' . number_format($precio, 2) . '</td>';
    echo '<td>
            <form method="post" action="">
                <input type="hidden" name="producto" value="' . $producto . '">
                <input type="hidden" name="precio" value="' . $precio . '">
                <input type="submit" name="agregar" value="Agregar al Carrito">
            </form>
          </td>';
    echo '</tr>';
}

echo '</table>';

// Mostrar el carrito de compras
if (count($_SESSION['carrito']) > 0) {
    echo '<h2>Carrito de Compras</h2>';
    echo '<table>';
    echo '<tr><th>Producto</th><th>Precio</th><th>Acciones</th></tr>';
    $total = 0;

    foreach ($_SESSION['carrito'] as $indice => $item) {
        echo '<tr>';
        echo '<td>' . $item['producto'] . '</td>';
        echo '<td>$' . number_format($item['precio'], 2) . '</td>';
        echo '<td><a href="?eliminar=' . $indice . '">Eliminar</a></td>';
        echo '</tr>';

        $total += $item['precio'];
    }

    echo '<tr><td colspan="2">Total</td><td>$' . number_format($total, 2) . '</td></tr>';
    echo '</table>';

    // Formulario para seleccionar el método de pago
    echo '<h2>Seleccionar Método de Pago</h2>';
    echo '<form method="post" action="procesar_pago.php">';
    echo '<input type="hidden" name="total" value="' . $total . '">';
    echo 'Seleccione el método de pago: ';
    echo '<select name="metodo_pago">
            <option value="Nequi">Nequi </option> 
            <option value="tarjeta">Tarjeta de Crédito</option>
            <option value="efectivo">Efectivo</option>
         </select>';
    echo '<input type="submit" header("Location: procesar_pago.php"); name="pagar" value="Pagar">';
    echo '</form>';
} else {
    echo '<p>El carrito de compras está vacío.</p>';
}
?>
</body>
</html>