<html>
	<head><link rel="stylesheet" href="COP.css"><title>Logeo</title>
	</head>
 <body >
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Inicio.css">
</head>
<body>
    <div class="wrapper">
        <form  method="POST" class="form">
            <h1 class="title">Inicio</h1>
            <div class="inp">
                <input type="text" name="nombreusuario" id="" class="input" placeholder="Usuario" required autocomplete="off">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input type="password" name="contrasena" id="" class="input" placeholder="Contraseña" required required autocomplete="off">
                <i class="fa-solid fa-user"></i>
            </div>
            <button class="submit" value="Iniciar Sesion">Iniciar Sesion</button>
            <p class="footer">¿No tienes una cuenta? <a href="entrada.php" class="link"> Por favor, Registrate</a></p>
        </form>
        <div></div>
        <div class="banner">
            <h1 class="wel_text">BIENVENIDO A<br>PrixQL</h1>
            
        </div>
    </div>
</body>
<?php
include_once 'conexionPDO.php';
	session_start();
	
	if (isset($_POST['cerrar_sesion'])) 
		{
			/*include_once 'cerrar.php';*/
			session_unset();//borrar una variable de sesión unset($_SESSION["nomusuario"]);
			session_destroy();//eliminar toda la información relacionada con la sesión
		}
	if (isset($_SESSION['rol'])) 
		{
			switch ($_SESSION['rol']) 
			{
				case 1:
					header('Location: administrador.php');
					die(); exit();
					break;
				case 2:
					header('Location: Empleados.php');
					break;
				default:
				header('Location: entrada.php');
					break;
			}	
			
		}


if (isset($_POST['nombreusuario']) && isset($_POST['contrasena']))
	{
		$username=$_POST['nombreusuario'];
		$password=$_POST['contrasena'];

		$db=new Database();
		$query=$db->connectar()->prepare('SELECT * FROM usuarios WHERE nomusuario=:nombreusuario AND clave=:contrasena');
		$query->execute(['nombreusuario'=>$username,'contrasena'=>$password]);
		$arreglofila=$query->fetch(PDO::FETCH_NUM);

		if ($arreglofila == true ) 
			{
				$rol=$arreglofila[3];
				$_SESSION['rol']=$rol;
				switch ($rol) 
					{
						case 1:
							header('Location: administrador.php');
							break;
						case 2:
							header('Location: Empleados.php');
							break;	
						default:
						header('Location: entrada.php');
							break;
					}



					
				$usuario=$arreglofila[1];
				$_SESSION['nomusuario']=$usuario;

				$fotosesion=$arreglofila[5];
				$_SESSION['foto']=$fotosesion;
			}
			else
			{
				
				//$_SESSION["nomusuario"] = null;
    			$arreglofila=null;
				echo '<center><p style="color: red; font-size:60px">Nombre de usuario o contraseña incorrecta.</p></center>';
				echo "<script> windows.open('entrada.php')  </script> ";
			}
	}
?>
	</body>
</html>	