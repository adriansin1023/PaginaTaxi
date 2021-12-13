<?php

include("function.php");
$id = $_GET['id'];
delete('clientes','id',$id);
header("location:consultas3.php");


?>

