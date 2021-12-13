<?php
$id =$_POST['num'];
echo $id;
$conexion= new mysqli ('localhost','id16980624_jesus','2y^Pz-S3Vx_Gi0ri','id16980624_programa_wep');
/*$conexion =new mysqli('localhost','root','','base_wep');*/
if($conexion->connect_error){
die("werror de conexion".$conexion->connect_error);
}else{

    $sql = " DELETE FROM `clientes` WHERE `clientes`.`id` =( '".$id."');";

if($conexion->query($sql)){
    echo "registo insertado";
}else{
    echo "error en la insercion" .$conexion ->error;
}

}
?>