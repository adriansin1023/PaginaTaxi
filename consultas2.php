
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
<body>
	include("function.php");
?>

<table border="1" width="80%" align="center">
	<tr>
	<th width="30%">id</th>
    <th width="30%">nombre</th>
	<th width="30%">correo</th>
	<th width="30%">telefono</th>
	<th width="30%">mensage</th>
		</tr>
<?php 
	$sql = "select * from clientes";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
     <td><?php echo $row->id;?></td>
    <td><?php echo $row->nombre;?></td>
    <td><?php echo $row->correo;?></td>
		<td><?php echo $row->telefono;?></td>
		<td><?php echo $row->mensaje;?></td>
		
		<td>
    <td> <a href="mod.php?id=<?php echo $row->id; ?>"'><button type='button' class='btn btn-danger'>modificar</button></a> </td>


	</td>


<td> <a href="eliminar_prod.php?id=<?php echo $row->id; ?>"'><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>

	</tr>
	
	<?php } ?>
  <td> <a href="index.html?id=<?php echo $row->id; ?>"'><button type='button' class='btn btn-danger'>inicio</button></a> </td>
  
</body>
</html>