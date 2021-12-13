<?php
	include "conexion.php";
	EliminarProducto($_get['id']);
	function Eliminardatos($id)
	{
		$sentencia="DELETE FROM clientes WHERE id='".$id."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>
<script type="text/javascript">
	alert("datos Eliminado exitosamente");
	window.location.href='consultas.php';
</script>