<?php
include('conex_info.php');

$ID_Zona=$_POST['ID_Zona'];
$Nombre_Zona=$_POST['Nombre_Zona'];

echo "el dato digitado de ID_Zona es:".$ID_Zona;
echo "<br>";
echo "el dato digitado de nombre de la Zona es:".$Nombre_Zona;

$cadenaSQL=" update Zona_Ventas set Nombre_Zona='".$Nombre_Zona."' where ID_Zona=".$ID_Zona." ";

echo $cadenaSQL;
$sql=$conex->query($cadenaSQL);
if(!$sql) {
   echo "<br> ejecucion erronea, posiblemente el valor del campo ID_Zona esta duplicado o que los tipos de dato no corresponden!";
}
else {
echo "<br>insercion realizada";
 $sql1=$conex->query("select * from Zona_Ventas");
echo"<table border='1' width='50%'>"; 
echo"<tr><th>ID_Zona</th><th>nombre de la Zona </th></tr>";
while($fila=$sql1->fetch_array()){
  echo  "<tr><td>".$fila['ID_Zona']."</td>";
  echo  "<td>".$fila['Nombre_Zona']."</td></tr>";
}
echo"</table>";
}
 ?>