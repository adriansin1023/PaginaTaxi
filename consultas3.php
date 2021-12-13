<!DOCTYPE html>
<html>
<body>


<h2>HTML Image</h2>
<img src="hero-bj.jpg" alt="Trulli" width="500" height="333">

<?php
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
		<td><?php echo $row->mensage;?></td>
		
		
    <td> <a href="mod.php?id=<?php echo $row->id; ?>"'><button type='button' class='btn btn-danger'>modificar</button></a> </td>


	


<td> <a href="eliminar_prod.php?id=<?php echo $row->id; ?>"'><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>

	</tr>
	
	<?php } ?>


<a href="index.html"><button type='button' class='btn btn-danger'>regresar</button></a>
</table>
</body>
</html>
