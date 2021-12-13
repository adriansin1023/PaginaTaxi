
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$conexion= new mysqli ('localhost','id16980624_jesus','2y^Pz-S3Vx_Gi0ri','id16980624_programa_wep');
$_GET=("id");
$sql= "DELETE FROM `clientes` WHERE `clientes`.`id` = '".$id."'";
?> 
<script type="text/javascript">
	alert("datos Eliminado exitosamente");
	window.location.href='consultas.php';
</script>
  
</body>
</html>