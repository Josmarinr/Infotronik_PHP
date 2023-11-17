<?PHP
include('conex_info.php');

$Nombre_Cliente=$_POST['Nombre_Cliente'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];
$ID_Zona=$POST['ID_Zona/'];



$CadenaSQL="Insert into Clientes (Nombre_Cliente,Direccion,Telefono,ID_Zona) values ('".$_POST['Nombre_Cliente']."',".$_POST['Direccion'].",'".$_POST['Telefono']."','".$POST['ID_Zona']."')";

$sql=$conex->query($CadenaSQL);

if(!$sql){
	echo "Error en insertar articulo";
}
else
{
	echo "Creacion Cliente Nuevo Correcta :D";
}
?>