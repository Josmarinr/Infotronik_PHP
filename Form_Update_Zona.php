<?php
include("conex_info.php");

$sql="select * from Zona_Ventas where ID_Zona=".$_GET['ID_Zona'];
$busqueda=$conex->query($sql);
$fila=$busqueda->fetch_array();
?>

<html>
<head>
<title>Modificar datos de Zona de ventas</title>
</head>
   <body>
          <form action="Editar_Zona.php" method="post">
              <table border "1" width="50%">
                 <tr><td colspan="2">Formulario para editar el registro de Zona de Ventas/td></tr>
                 <tr><td>ID_Zona</td><td><input type="text" name="ID_Zona" id="ID_Zona" value="<?php echo $fila['ID_Zona']; ?>"readonly></td></tr>
                 <tr><td>nombre de la zona</td><td><input type="text" name="ID_Zona" id="ID_Zona" value="<?php echo $fila['ID_Zona']; ?>"></td></tr>
                 <tr><td colspan="2"><input type="submit" value="enviar"></td></tr>
          </table>
     </form>
  </body>
</html>