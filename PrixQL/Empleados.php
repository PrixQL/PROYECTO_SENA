<?php
include_once 'conexionPDO.php';
session_start();
if(!isset($_SESSION['rol']))
	{
		header('location: loginphp.php');
	}
else
	{
		if($_SESSION['rol'] !=2)
			{
				header('location: loginphp.php');
			}
	}
?>
<html><head></head>
<body>
	
	<?php
	$conexion=mysqli_connect('localhost','root','','prixql') or die ('problems en la conexion');
	$usuario = $_SESSION['nomusuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index2.css">
</head>
<body>
<header>
        <div class="conteiner">
            <p class="logo">PrixQL</p>
            <nav class="cabezera">
                <a href="login.php">inicio sesion</a>
                <a href="#somos-PrixQL">nosotros</a>
                <a href="#nuestras-funciones">funciones</a>
                <a href="#caracteristicas">por qué elegirnos</a>
            </nav>
        </div>
    </header>
        <section id="funciones-web">
            <center>
        <h2> funciones disponibles </h2>
            </center> 
                <div class="funciones">
                    
                    <div class="carta1"> 
                        <img src="imagenes/productos.png" alt="">
                        <h3>ver tus productos </h3>
                        <p> esta funcion la utilizaremos para ver y editar los productos disponibles</p>
                        <button><a href="productos01.php">utilizar </a> </button>
                
                    </div>
                    
                    <div class="carta2">
                        <img src="imagenes/inventario.png" alt=""> 
                        <h3> inventario de el dia </h3>
                        <p> esta funcion la utilizaremos para llevar las ventas y los gastos de tu microemprendimiento :D</p>
                        <button> <a href="inventario.php">utilizar </a> </button>   

                    </div>
                    
                    <div class="carta3">
                        <img src="imagenes/ventas.png" alt=""> 
                        <h3> total de ventas </h3> 
                        <p> esta funcion la utilizaremos para ver cual han sido las estadisticas totales de tu microemprendimiento</p>
                        <button> utilizar </button>

                    </div>
                </div>
            
        </section>
<section>
    <center>
        <div class="cerrarsesion">       
            <form action="login.php" method="POST">
                <input type="submit" name="cerrar_sesion" value="CERRAR SESION">
            </form>
        </div>
    </center>
</section>
	</body>
	</html>

