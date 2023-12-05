<?php
//datos de la base de datos
/*$usuario="root";
$password="";
$servidor="localhost";
$basededatos="alumnos";
// creacion de la conexion a la base de datos con mysqli
$conexion=mysqli_connect($servidor,$usuario,"") or die ("no ha sido posible la conexion al servidor");
// seleccionando la base de datos a emplear
$selecbasededatos=mysqli_select_db($conexion,$basededatos) or die("No se ha conectado a la base de datos");
//Realizamos la consulta de la tabla respectiva
$consulta="SELECT *FROM alumno";
//almacenamos la consulta 
$resultado=mysqli_query($conexion,$consulta) or die ("algo salio mal en la consulta a la base de datos");*/

//$conexion=mysqli_connect("localhost","root","","crud");
$conexion=mysqli_connect('localhost','root','','prixql') or die("No se ha conectado a la base de datos");
?>



<?php
/*function conectar(){
    $host = "localhost";
    $user = "root"; // Para propósitos educativos únicamente
    $clave = "root";
    $bd = "sentencias";
    $conexion = new mysqli($host, $user, $clave, $bd);
    if($conexion->connect_errno){
        exit("Fallo en la conexión al servidor");
    }
    return $conexion;
}*/
?> 



<table border="3" align="center">
	<tr>	
			<th>ID</th>
			<th>NOMBRE</th>
			<th>PASSWORD</th>
			<th>IDROL</th>
			<th>EMAIL</th>

			<!-- <th>EDITAR</th> -->
	</tr>
<?php
$conexion=mysqli_connect('localhost','root','','prixql') or die ('problems en la conexion');
$observar = "SELECT * FROM usuarios";
$ejecutar=mysqli_query($conexion,$observar);
	$contador = 0;
	while ($filas=mysqli_fetch_array($ejecutar)) 
	{
		$id =       $filas['id'];
		$usuario =  $filas['nomusuario'];
		$password = $filas['clave'];
		$idrol =    $filas['idrol'];
		$email =    $filas['email'];
		$contador++;
	?>
	<tr align="center">	
			<td><?php echo $id ?></td>
			<td><?php echo $usuario ?></td>
			<td><?php echo $password ?></td>
			<td><?php echo $idrol ?></td>
			<td><?php echo $email ?></td>

			<!-- <td><button><a href="aprendiz.php? editar= <?php echo $id; ?>">Editar</a></td> -->
	</tr>
	<?php
	}
	?>
</table>