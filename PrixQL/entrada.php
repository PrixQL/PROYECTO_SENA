<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Registrarce.css">
</head>
<body>
<?php
include_once 'conexionPDO.php';
session_start();
if (!isset($_SESSION['rol']))
	{
		//header('location: entrada.php');
		//die(); exit();

			?>
			<br>
			
	<tr>
		<td>	
		<body>
		

    <div class="wrapper">
        <form  method="POST" class="form">
		  <h1 class="title">Registrate</h1>
            <div class="inp">
			NOMBRE:  <input type="text" name="nombreusuario" id="" class="input" placeholder="Usuario" required autocomplete="off">
                <i class="fa-solid fa-user"></i>
            </div>
			<div class="inp">
			EMAIL:  <input type="email" name="email" id="" class="input" placeholder="Ingrese Email" required autocomplete="off">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
			CLAVE: <input type="password" name="contrasena" id="" class="input" placeholder="Contraseña" required required autocomplete="off">
                <i class="fa-solid fa-user"></i>
            </div>
              <button class="submit" value="Insertar Datos">Insertar Datos</button>
			  <div class="banner">
					<h1 class="wel_text">CREA TU CUENTA <br></h1>
					<h1 class="para"> EN PRIX QL</h1>
			   </div>
			   <p class="footer"><a href="login.php" class="link">¿Ya tienes una cuenta?</a></p>
        </form>
    </div>
</body>
		
		<?php
		if(isset($_POST['insertar']))
			{
			$usuario = $_POST['usuario'];
			$clave   = $_POST['clave'];
			$email   = $_POST['email'];
			$conexion=mysqli_connect('localhost','root','','cruda') or die ('problems en la conexion');
			$insertar = "INSERT INTO usuarios(nomusuario,clave,idrol,email) VALUES ('$usuario','$clave','5','$email')";
			$ejecutar=mysqli_query($conexion,$insertar);
			if ($ejecutar)
				{
					//header("location: administrador.php");
					 echo "<script> windows.open('administrador.php')  </script> ";
				}
			}
				unset($_POST['insertar']);//La función unset() destruye las variables especificadas.
		?>
		</td>
	</tr>
</table>
	<?php	
	}
else
	{
		if($_SESSION['rol'] !=1)
			{
				header('location: loginphp.php');
				die(); exit();
			}
	}
?>
</div >
</div>
</body>
</html>