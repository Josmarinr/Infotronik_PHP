<?PHP
include ("conex_info.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zonas Ventas Infotronik</title>
</head>
<body>
	<table border="1" width="50%">
		<tr><th>ID Zona</th><th>Nombre</th><th>Accion</th></tr>
			<?PHP
				$sql= "select * from Zona_Ventas";
				$busqueda=$conex->query($sql);
				while($fila=$busqueda->fetch_array()){
				echo "<tr><td>".$fila['Id_Zona']."</td><td>".$fila['Nombre_Zona']."</td><td><a href='Form_Update_Zona.php?Id_Zona=".$fila['Id_Zona']."'>Editar</a></td></tr>";
				}
			?>

	</table>

</body>
</html>