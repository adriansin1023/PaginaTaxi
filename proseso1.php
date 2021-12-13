<?php

$nombre =$_POST['nombre'];
$correo =$_POST['correo'];
$numero =$_POST['numero'];
$mensage =$_POST['mensage'];

echo $nombre;
echo $correo;
echo $numero;
echo $mensage;

//echo "nombre: ".$nombre."correo: ".$correo."numero: ".$numero."mensage: ".$mensage;
/*$conexion= new mysqli ('localhost','id16980624_jesus','2y^Pz-S3Vx_Gi0ri','id16980624_programa_wep');*/
$conexion =new mysqli('localhost','root','','base_wep');
if($conexion->connect_error){
die("werror de conexion".$conexion->connect_error);
}else{
  $sql = "  INSERT INTO `clientes` (`id`, `nombre`, `correo`, `telefono`, `mensage`) VALUES (NULL, '".$nombre."', '".$correo."', '".$numero."', '".$mensage."');";

if($conexion->query($sql)){
  
    echo "sumensage fue enviado";
//}else{
  //  echo "error en la insercion" .$conexion ->error;
}

}
?>