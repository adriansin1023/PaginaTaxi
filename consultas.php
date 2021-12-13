


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conexion= new mysqli ('localhost','id16980624_jesus','2y^Pz-S3Vx_Gi0ri','id16980624_programa_wep');

 /* $conexion= new mysqli ('localhost','root','','base_wep');*/

$sql = "SELECT* FROM clientes";
$clientes=$conexion->query($sql); 
if($clientes->num_rows >0){
echo "<table border='1'>";
    while ($c=$clientes->fetch_assoc()){

echo "<tr>";
echo "<td>";
echo $c["id"];

echo "</td>";
echo "<td>";
echo $c["nombre"];

echo "</td>";
echo "<td>";
echo $c["correo"];

echo "</td>";
echo "<td>";
echo $c["telefono"];

echo "</td>";
echo "<td>";
echo $c["mensage"];
echo "<td>  <a href='modif_prod1.php?no=".$filas['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
echo "<td> <a href='eliminar_prod.php?id=".$filas['id']."'><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";

echo "</td>";


    
}
echo "</table>";
}else{
    echo "no existen registros";
}


?>   

<a href="index.html">regresar</a>
</body>
</html>