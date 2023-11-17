<?PHP
include('conex_info.php');

$Descripcion=$_POST['Descripcion'];
$PVP=$_POST['PVP'];
$Pais_Origen=$_POST['Pais_Origen'];
$Dir_Subida='IMG/';
$Imagen=$Dir_Subida.basename($_FILES['Imagen']['imagen']);

if (move_uploaded_file($FILES['imagen']['tmp_name'], $Imagen)){
	echo "El fichero es valido y se subio con exito";
}
else
{
	echo "Posible ataque de subida de Ficheros";
	exit;
}

$CadenaSQL="Insert into Articulos (Descripcion,PVP,Pais_Origen,Imagen) values ('".$_POST['Descripcion']."',".$_POST['PVP'].",'".$_POST['Pais_Origen']."','".$Imagen."')";

$sql=$conex->query($CadenaSQL);

if(!$sql){
	echo "Error en insertar articulo";
}
else
{
	$sqlb=$conex->query("select * from articulos");

	while($fila=$sqlb->fetch_array()){
		echo "ID: ".$fila['Descripcion']."| <img src'".$fila['Imagen']."'><br>";
	}

echo "</table>";
}
?>